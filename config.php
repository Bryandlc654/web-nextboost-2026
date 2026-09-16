<?php
// config.php - Configuración Global y SMTP

// Cargar autoload de Composer (necesario para Dotenv)
require_once __DIR__ . '/vendor/autoload.php';

// Cargar variables de entorno desde .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

// Credenciales SMTP para PHPMailer
define('SMTP_HOST', $_ENV['SMTP_HOST'] ?? '');
define('SMTP_PORT', (int) ($_ENV['SMTP_PORT'] ?? 465));
define('SMTP_USER', $_ENV['SMTP_USER'] ?? '');
define('SMTP_PASS', $_ENV['SMTP_PASS'] ?? '');

// Correo de destino de los leads
define('LEAD_RECIPIENT_EMAIL', $_ENV['LEAD_RECIPIENT_EMAIL'] ?? '');

// Configuración de Seguridad
define('CSRF_TOKEN_SECRET', $_ENV['CSRF_TOKEN_SECRET'] ?? '');

// MySQL - Directorio de Empresas
define('DB_HOST', $_ENV['DB_HOST'] ?? 'localhost');
define('DB_PORT', (int) ($_ENV['DB_PORT'] ?? 3306));
define('DB_NAME', $_ENV['DB_NAME'] ?? 'nextboost');
define('DB_USER', $_ENV['DB_USER'] ?? 'nextboost');
define('DB_PASS', $_ENV['DB_PASS'] ?? '');


?>
