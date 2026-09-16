<?php
require_once __DIR__ . '/../includes/db.php';
session_start();
if (!isset($_SESSION['admin_id'])) jsonResponse(['error' => 'No autorizado'], 401);

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') exit;
if ($_SERVER['REQUEST_METHOD'] !== 'POST') jsonResponse(['error' => 'Method not allowed'], 405);

$lead_id = (int)($_POST['lead_id'] ?? 0);
if (!$lead_id) jsonResponse(['error' => 'lead_id requerido'], 400);

$db = getDB();
$db->prepare("UPDATE leads SET is_read = 1 WHERE id = ?")->execute([$lead_id]);

jsonResponse(['success' => true]);
