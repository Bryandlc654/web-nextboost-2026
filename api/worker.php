<?php
require_once __DIR__ . '/../includes/mail-queue.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$sent = processMailQueue();

 jsonResponse(['success' => true, 'sent' => $sent]);
