<?php
// api/send-contact.php
header('Content-Type: application/json; charset=utf-8');

require_once __DIR__ . '/../config.php';

if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
    exit;
}

// Honeypot Anti-Spam
if (!empty($_POST['website_url_hp'])) {
    echo json_encode(['success' => true, 'message' => 'Mensaje recibido.']);
    exit;
}

// Sanitización y recolección de datos
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$company = trim($_POST['company'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validación básica
if (empty($name) || empty($email) || empty($phone)) {
    echo json_encode(['success' => false, 'message' => 'Por favor, completa los campos obligatorios (Nombre, Email, Teléfono).']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'El correo electrónico no es válido.']);
    exit;
}

// Enviar correo
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USER;
    $mail->Password   = SMTP_PASS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->CharSet    = 'UTF-8';
    $mail->Timeout    = 15;

    $mail->setFrom(SMTP_USER, 'Contacto Next Boost');
    $mail->addAddress(LEAD_RECIPIENT_EMAIL);
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = '📩 Nuevo Mensaje de Contacto: ' . $name;

    $nameSafe    = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $emailSafe   = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $phoneSafe   = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
    $companySafe = !empty($company) ? htmlspecialchars($company, ENT_QUOTES, 'UTF-8') : 'N/A';
    $messageSafe = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

    $bodyHtml = "
    <h2>Nuevo mensaje recibido desde el Formulario de Contacto</h2>
    <hr>
    <h3>Datos del Cliente</h3>
    <ul>
        <li><strong>Nombre:</strong> {$nameSafe}</li>
        <li><strong>Email:</strong> {$emailSafe}</li>
        <li><strong>Teléfono (WhatsApp):</strong> {$phoneSafe}</li>
        <li><strong>Empresa/Organización:</strong> {$companySafe}</li>
    </ul>
    <h3>Mensaje del Proyecto</h3>
    <p>{$messageSafe}</p>
    <hr>
    <p><small>Este mensaje fue enviado desde el formulario de contacto del sitio web.</small></p>
    ";

    $mail->Body    = $bodyHtml;
    $mail->AltBody = strip_tags(str_replace(['<br>', '</li>', '</h3>'], ["\n", "\n", "\n"], $bodyHtml));

    $mail->send();
    echo json_encode(['success' => true, 'message' => '¡Mensaje enviado con éxito! Te contactaremos muy pronto.']);
} catch (Exception $e) {
    error_log("SMTP Error send-contact: {$mail->ErrorInfo}");
    echo json_encode(['success' => false, 'message' => 'Error al enviar. Por favor, contáctanos por WhatsApp al +51 962 469 836.']);
}
?>
