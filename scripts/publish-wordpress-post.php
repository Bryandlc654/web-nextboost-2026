<?php
/**
 * Publica el artículo WordPress 7.1 vía REST API.
 *
 * Requisitos en .env:
 *   WP_SITE_URL=https://darkblue-flamingo-706734.hostingersite.com
 *   WP_USERNAME=tu_usuario
 *   WP_APP_PASSWORD=xxxx xxxx xxxx xxxx xxxx xxxx
 *
 * Genera la contraseña de aplicación en:
 * WordPress → Usuarios → Tu perfil → Contraseñas de aplicación
 */

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

$siteUrl = rtrim($_ENV['WP_SITE_URL'] ?? '', '/');
$username = $_ENV['WP_USERNAME'] ?? '';
$appPassword = str_replace(' ', '', $_ENV['WP_APP_PASSWORD'] ?? '');

if ($siteUrl === '' || $username === '' || $appPassword === '') {
    fwrite(STDERR, "Faltan variables WP_SITE_URL, WP_USERNAME o WP_APP_PASSWORD en .env\n");
    exit(1);
}

$contentFile = __DIR__ . '/wordpress-7-1-post-content.html';
if (!is_readable($contentFile)) {
    fwrite(STDERR, "No se encontró el contenido: {$contentFile}\n");
    exit(1);
}

$content = file_get_contents($contentFile);

$post = [
    'title'   => 'WordPress 7.1 Mary Lou: Todas las Novedades de la Última Versión',
    'content' => $content,
    'status'  => 'publish',
    'slug'    => 'wordpress-7-1-mary-lou-novedades',
    'excerpt' => 'Guía completa sobre WordPress 7.1 Mary Lou: estilos responsive, editor de medios, Notes con @mentions, bloques Playlist y Tabs, y cómo actualizar.',
];

$endpoint = $siteUrl . '/wp-json/wp/v2/posts';
$auth = base64_encode($username . ':' . $appPassword);

$ch = curl_init($endpoint);
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json',
        'Authorization: Basic ' . $auth,
    ],
    CURLOPT_POSTFIELDS     => json_encode($post, JSON_UNESCAPED_UNICODE),
    CURLOPT_TIMEOUT        => 30,
]);

$response = curl_exec($ch);
$httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

if ($response === false) {
    fwrite(STDERR, "Error cURL: {$error}\n");
    exit(1);
}

$data = json_decode($response, true);

if ($httpCode >= 200 && $httpCode < 300 && isset($data['link'])) {
    echo "Artículo publicado: {$data['link']}\n";
    exit(0);
}

fwrite(STDERR, "Error HTTP {$httpCode}\n");
fwrite(STDERR, $response . "\n");
exit(1);
