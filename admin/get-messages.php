<?php
require_once __DIR__ . '/../includes/db.php';
session_start();
if (!isset($_SESSION['admin_id'])) { http_response_code(401); exit('No autorizado'); }

header('Content-Type: application/json');
$lead_id = (int)($_GET['lead_id'] ?? 0);
if (!$lead_id) jsonResponse(['error' => 'lead_id requerido'], 400);

$db = getDB();
$stmt = $db->prepare("SELECT * FROM messages WHERE lead_id = ? ORDER BY created_at ASC");
$stmt->execute([$lead_id]);
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

jsonResponse(['success' => true, 'messages' => $messages]);
