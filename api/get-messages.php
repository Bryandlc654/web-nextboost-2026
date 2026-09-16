<?php
require_once __DIR__ . '/../includes/db.php';
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') exit;

$lead_id = (int)($_GET['lead_id'] ?? 0);
if (!$lead_id) jsonResponse(['error' => 'lead_id requerido'], 400);

$db = getDB();
$stmt = $db->prepare("SELECT * FROM messages WHERE lead_id = ? ORDER BY created_at ASC");
$stmt->execute([$lead_id]);
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

jsonResponse(['success' => true, 'messages' => $messages]);
