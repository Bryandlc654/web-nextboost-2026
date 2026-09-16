<?php
// api/send-quote.php
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
// Si el campo honeypot está lleno, es un bot. Retornamos éxito simulado.
if (!empty($_POST['website_url_hp'])) {
    echo json_encode(['success' => true, 'message' => 'Mensaje recibido.']);
    exit;
}

// 2. Sanitización y recolección de datos
$domain = filter_input(INPUT_POST, 'domain', FILTER_SANITIZE_STRING) ?? 'No especificado';
$pages = filter_input(INPUT_POST, 'pages', FILTER_SANITIZE_STRING) ?? 'No especificadas';
$plan = filter_input(INPUT_POST, 'plan', FILTER_SANITIZE_STRING) ?? 'No especificado';

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);

// 3. Validación básica
if (empty($name) || empty($email) || empty($phone)) {
    echo json_encode(['success' => false, 'message' => 'Por favor, completa los campos obligatorios.']);
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
    // $mail->SMTPDebug = 2; // Descomentar para ver errores de conexión
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USER;
    $mail->Password   = SMTP_PASS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // ENCRYPTION_SMTPS es requerido para puerto 465
    $mail->Port       = SMTP_PORT;
    $mail->CharSet    = 'UTF-8';

    // Remitente y destinatario
    // El remitente debe ser el SMTP_USER o estar autorizado por el SMTP
    $mail->setFrom(SMTP_USER, 'Lead Gen Next Boost');
    $mail->addAddress(LEAD_RECIPIENT_EMAIL); // bdelacruz654@gmail.com
    $mail->addReplyTo($email, $name); // Responder al cliente

    // Contenido del correo (HTML)
    $mail->isHTML(true);
    $mail->Subject = '🚀 Nuevo Lead (Buscador Dominio): ' . $name . ' - ' . $domain;
    
    $bodyHtml = "
    <h2>Nuevo prospecto capturado desde el embudo de dominio</h2>
    <hr>
    <h3>1. Datos del Proyecto</h3>
    <ul>
        <li><strong>Dominio buscado:</strong> {$domain}</li>
        <li><strong>Páginas requeridas:</strong> {$pages}</li>
        <li><strong>Plan seleccionado:</strong> {$plan}</li>
    </ul>
    <h3>2. Datos de Contacto</h3>
    <ul>
        <li><strong>Nombre:</strong> {$name}</li>
        <li><strong>Email:</strong> {$email}</li>
        <li><strong>Teléfono (WhatsApp):</strong> {$phone}</li>
        <li><strong>Empresa/Organización:</strong> " . (!empty($company) ? $company : 'N/A') . "</li>
    </ul>
    <hr>
    <p><small>Este mensaje fue enviado desde el formulario anti-spam de la página de inicio.</small></p>
    ";

    $mail->Body    = $bodyHtml;
    $mail->AltBody = strip_tags(str_replace(['<br>', '</li>', '</h3>'], ["\n", "\n", "\n"], $bodyHtml));

    // Enviar correo
    $mail->send();
    echo json_encode(['success' => true, 'message' => '¡Cotización enviada con éxito! Te contactaremos pronto.']);
} catch (Exception $e) {
    // Para producción es mejor no mostrar $mail->ErrorInfo al usuario, pero es útil para debug.
    error_log("Error de PHPMailer: {$mail->ErrorInfo}");
    echo json_encode(['success' => false, 'message' => 'Hubo un error al enviar tu solicitud. Intenta nuevamente más tarde.']);
}
?>
