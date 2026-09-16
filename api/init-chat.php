<?php
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/ai-config.php';
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') exit;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    jsonResponse(['error' => 'Method not allowed'], 405);
}

$db = getDB();
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$pageUrl = $_POST['page_url'] ?? ($_SERVER['HTTP_REFERER'] ?? '');
$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';

$stmt = $db->prepare("INSERT INTO leads (name, phone, email, page_url, ip_address) VALUES (?, ?, ?, ?, ?)");
$stmt->execute(['Visitante', '', '', $pageUrl, $ip]);
$leadId = (int)$db->lastInsertId();

jsonResponse(['success' => true, 'lead_id' => $leadId]);
