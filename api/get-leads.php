<?php
require_once __DIR__ . '/../includes/db.php';
session_start();
if (!isset($_SESSION['admin_id'])) jsonResponse(['error' => 'No autorizado'], 401);

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') exit;

$db = getDB();
$leads = $db->query("
    SELECT l.*, (SELECT COUNT(*) FROM messages m WHERE m.lead_id = l.id) as msg_count
    FROM leads l ORDER BY l.created_at DESC
")->fetchAll(PDO::FETCH_ASSOC);

jsonResponse(['success' => true, 'leads' => $leads]);
