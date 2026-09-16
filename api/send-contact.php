<?php
// api/send-contact.php
header('Content-Type: application/json; charset=utf-8');

// Incluir configuración global y vendor de Composer
require_once __DIR__ . '/../config.php';

// Si existe vendor autoload (PHPMailer)
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
} else {
    echo json_encode(['success' => false, 'message' => 'Falta instalar dependencias (PHPMailer).']);
    exit;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
    exit;
}

// 1. Verificación Honeypot (Anti-Spam silencioso)
if (!empty($_POST['website_url_hp'])) {
    echo json_encode(['success' => true, 'message' => 'Mensaje recibido.']);
    exit;
}

// 2. Sanitización y recolección de datos
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING) ?? '';

// 3. Validación básica
if (empty($name) || empty($email) || empty($phone)) {
    echo json_encode(['success' => false, 'message' => 'Por favor, completa los campos obligatorios (Nombre, Email, Teléfono).']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'El correo electrónico no es válido.']);
    exit;
}

// 4. Preparar el correo con PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USER;
    $mail->Password   = SMTP_PASS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // ENCRYPTION_SMTPS es requerido para puerto 465
    $mail->Port       = SMTP_PORT;
    $mail->CharSet    = 'UTF-8';

    // Remitente y destinatario
    $mail->setFrom(SMTP_USER, 'Contacto Next Boost');
    $mail->addAddress(LEAD_RECIPIENT_EMAIL); 
    $mail->addReplyTo($email, $name); 

    // Contenido del correo (HTML)
    $mail->isHTML(true);
    $mail->Subject = '📩 Nuevo Mensaje de Contacto: ' . $name;
    
    $bodyHtml = "
    <h2>Nuevo mensaje recibido desde el Modal de Contacto</h2>
    <hr>
    <h3>Datos del Cliente</h3>
    <ul>
        <li><strong>Nombre:</strong> {$name}</li>
        <li><strong>Email:</strong> {$email}</li>
        <li><strong>Teléfono (WhatsApp):</strong> {$phone}</li>
        <li><strong>Empresa/Organización:</strong> " . (!empty($company) ? $company : 'N/A') . "</li>
    </ul>
    <h3>Mensaje del Proyecto</h3>
    <p>" . nl2br(htmlspecialchars($message)) . "</p>
    <hr>
    <p><small>Este mensaje fue enviado desde el formulario de contacto del CTA de la página web.</small></p>
    ";

    $mail->Body    = $bodyHtml;
    $mail->AltBody = strip_tags(str_replace(['<br>', '</li>', '</h3>'], ["\n", "\n", "\n"], $bodyHtml));

    // Enviar correo
    $mail->send();
    echo json_encode(['success' => true, 'message' => '¡Mensaje enviado con éxito! Te contactaremos muy pronto.']);
} catch (Exception $e) {
    error_log("Error de PHPMailer: {$mail->ErrorInfo}");
    echo json_encode(['success' => false, 'message' => 'Hubo un error al enviar tu solicitud. Intenta nuevamente más tarde.']);
}
?>
