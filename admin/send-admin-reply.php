<?php
require_once __DIR__ . '/../includes/db.php';
session_start();
if (!isset($_SESSION['admin_id'])) { http_response_code(401); exit('No autorizado'); }

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') jsonResponse(['error' => 'Method not allowed'], 405);

$leadId = (int)($_POST['lead_id'] ?? 0);
$message = trim($_POST['message'] ?? '');

if (!$leadId || !$message) jsonResponse(['error' => 'Campos requeridos faltantes'], 400);

$db = getDB();

$stmt = $db->prepare("INSERT INTO messages (lead_id, message, sender) VALUES (?, ?, 'admin')");
$stmt->execute([$leadId, $message]);

jsonResponse(['success' => true]);
