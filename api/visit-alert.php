<?php
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/ai-config.php';
require_once __DIR__ . '/../includes/mail-queue.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') exit;
if ($_SERVER['REQUEST_METHOD'] !== 'POST') jsonResponse(['error' => 'Method not allowed'], 405);

$page = trim($_POST['page'] ?? 'Desconocida');
$ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
$ua = $_SERVER['HTTP_USER_AGENT'] ?? 'Desconocido';
$pageTitle = trim($_POST['title'] ?? '');

$browser = 'Desconocido';
if (strpos($ua, 'Edg/')) $browser = 'Edge';
elseif (strpos($ua, 'Chrome/')) $browser = 'Chrome';
elseif (strpos($ua, 'Firefox/')) $browser = 'Firefox';
elseif (strpos($ua, 'Safari/')) $browser = 'Safari';

$device = 'Desktop';
if (preg_match('/Android/i', $ua)) $device = 'Android';
elseif (preg_match('/iPhone/i', $ua)) $device = 'iPhone';
elseif (preg_match('/iPad/i', $ua)) $device = 'iPad';

$referrer = $_SERVER['HTTP_REFERER'] ?? 'Directo';

$body = "<h2>Nuevo visitante en Next Boost Peru</h2>
<table style='border-collapse:collapse;width:100%'>
<tr style='background:#f0f0f0'><td style='padding:8px;border:1px solid #ddd;font-weight:bold'>Pagina</td><td style='padding:8px;border:1px solid #ddd'><a href='$page'>$pageTitle ($page)</a></td></tr>
<tr><td style='padding:8px;border:1px solid #ddd;font-weight:bold'>IP</td><td style='padding:8px;border:1px solid #ddd'>$ip</td></tr>
<tr style='background:#f0f0f0'><td style='padding:8px;border:1px solid #ddd;font-weight:bold'>Navegador</td><td style='padding:8px;border:1px solid #ddd'>$browser</td></tr>
<tr><td style='padding:8px;border:1px solid #ddd;font-weight:bold'>Dispositivo</td><td style='padding:8px;border:1px solid #ddd'>$device</td></tr>
<tr style='background:#f0f0f0'><td style='padding:8px;border:1px solid #ddd;font-weight:bold'>Referrer</td><td style='padding:8px;border:1px solid #ddd'>$referrer</td></tr>
<tr><td style='padding:8px;border:1px solid #ddd;font-weight:bold'>Fecha</td><td style='padding:8px;border:1px solid #ddd'>" . date('d/m/Y H:i:s') . "</td></tr>
</table>
<p><a href='https://nextboost.business/admin/' style='background:#06b6d4;color:#fff;padding:10px 20px;border-radius:6px;text-decoration:none'>Ver panel</a></p>";

enqueueMail(ADMIN_EMAIL, "Visita: $pageTitle", $body);

// Try to process immediately (fire-and-forget)
processMailQueue();

jsonResponse(['success' => true]);
