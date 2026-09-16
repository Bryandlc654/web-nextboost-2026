<?php
require_once __DIR__ . '/../includes/db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed']);
    exit;
}

$leadId = (int)($_POST['lead_id'] ?? 0);
$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');

if (!$leadId || !$name) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'lead_id and name are required']);
    exit;
}

$db = getDB();
$stmt = $db->prepare("UPDATE leads SET name = ?, phone = ?, email = ? WHERE id = ?");
$stmt->execute([$name, $phone, $email, $leadId]);

echo json_encode(['success' => true]);
