<?php
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/ai-config.php';

// Endpoint de diagnóstico: solo accesible para administradores autenticados
session_start();
if (!isset($_SESSION['admin_id'])) {
    http_response_code(404);
    exit;
}

header('Content-Type: application/json');

// Simple test endpoint
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $apiKey = OPENAI_API_KEY;
    
    echo json_encode([
        'success' => true,
        'api_key_configured' => !empty($apiKey),
        'api_key_length' => strlen($apiKey),
        'model' => OPENAI_MODEL,
        'max_tokens' => OPENAI_MAX_TOKENS,
        'message' => $apiKey ? 'API key configurada correctamente' : 'API key no configurada'
    ]);
    exit;
}

// Test POST request
$message = trim($_POST['message'] ?? 'Hola, esto es una prueba');
$leadId = (int)($_POST['lead_id'] ?? 1);

$db = getDB();

// Create test lead if needed
$stmt = $db->prepare("SELECT id FROM leads WHERE id = ?");
$stmt->execute([$leadId]);
if (!$stmt->fetch()) {
    $stmt = $db->prepare("INSERT INTO leads (name, phone, email, page_url, ip_address) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute(['Test User', '123456789', 'test@test.com', 'test', '127.0.0.1']);
    $leadId = (int)$db->lastInsertId();
}

// Build OpenAI conversation
$openaiMessages = [
    [
        'role' => 'system',
        'content' => 'Eres un asistente de ventas de Next Boost Perú. Responde de forma concisa y amigable.'
    ],
    [
        'role' => 'user',
        'content' => $message
    ]
];

$apiKey = OPENAI_API_KEY;
if (!$apiKey) {
    echo json_encode(['success' => false, 'error' => 'API key no configurada']);
    exit;
}

$payload = json_encode([
    'model' => OPENAI_MODEL,
    'messages' => $openaiMessages,
    'max_tokens' => OPENAI_MAX_TOKENS,
    'temperature' => OPENAI_TEMPERATURE,
]);

$ch = curl_init('https://api.openai.com/v1/chat/completions');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey,
    ],
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_TIMEOUT => 30,
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

if ($httpCode !== 200 || !$response) {
    echo json_encode([
        'success' => false,
        'error' => $curlError ?: "HTTP $httpCode",
        'http_code' => $httpCode
    ]);
    exit;
}

$result = json_decode($response, true);
$responseText = $result['choices'][0]['message']['content'] ?? 'Sin respuesta';

echo json_encode([
    'success' => true,
    'user_message' => $message,
    'ai_response' => $responseText,
    'lead_id' => $leadId,
    'model' => OPENAI_MODEL
]);
