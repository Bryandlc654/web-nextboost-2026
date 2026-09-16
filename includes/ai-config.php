<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->safeLoad();

define('OPENAI_API_KEY', $_ENV['OPENAI_API_KEY'] ?? '');
define('OPENAI_MODEL', 'gpt-4o-mini');
define('OPENAI_MAX_TOKENS', 600);
define('OPENAI_TEMPERATURE', 0.7);
define('WHATSAPP_NUMBER', '51962469836');
define('ADMIN_EMAIL', $_ENV['LEAD_RECIPIENT_EMAIL'] ?? 'bdelacruz654@gmail.com');
define('ADMIN_USER', $_ENV['ADMIN_USER'] ?? 'nextboost_admin');
define('ADMIN_PASS', $_ENV['ADMIN_PASS'] ?? '');
