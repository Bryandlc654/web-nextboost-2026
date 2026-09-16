<?php
require_once __DIR__ . '/../includes/db.php';
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') exit;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') jsonResponse(['error' => 'Method not allowed'], 405);

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$page_url = trim($_POST['page_url'] ?? '');

if (!$name) jsonResponse(['error' => 'Nombre requerido'], 400);

$db = getDB();
$stmt = $db->prepare("INSERT INTO leads (name, phone, email, page_url, ip_address) VALUES (?, ?, ?, ?, ?)");
$stmt->execute([$name, $phone, $email, $page_url, $_SERVER['REMOTE_ADDR'] ?? '']);
$lead_id = $db->lastInsertId();

jsonResponse(['success' => true, 'lead_id' => $lead_id]);
