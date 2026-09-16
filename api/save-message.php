<?php
require_once __DIR__ . '/../includes/db.php';
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') exit;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') jsonResponse(['error' => 'Method not allowed'], 405);

$lead_id = (int)($_POST['lead_id'] ?? 0);
$message = trim($_POST['message'] ?? '');
$sender = $_POST['sender'] ?? 'visitor';

if (!$lead_id || !$message) jsonResponse(['error' => 'Datos incompletos'], 400);
if (!in_array($sender, ['visitor', 'admin'])) jsonResponse(['error' => 'Sender invalido'], 400);

$db = getDB();
$stmt = $db->prepare("INSERT INTO messages (lead_id, message, sender) VALUES (?, ?, ?)");
$stmt->execute([$lead_id, $message, $sender]);

jsonResponse(['success' => true, 'message_id' => $db->lastInsertId()]);
