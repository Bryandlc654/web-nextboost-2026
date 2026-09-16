<?php
require_once __DIR__ . '/../includes/ai-config.php';
session_start();

if (isset($_SESSION['admin_id'])) {
    header('Location: dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = trim($_POST['user'] ?? '');
    $pass = $_POST['pass'] ?? '';

    if ($user === ADMIN_USER && $pass === ADMIN_PASS) {
        $_SESSION['admin_id'] = 1;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Credenciales incorrectas';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Next Boost</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#08080a] min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-sm">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-white">Next Boost Admin</h1>
            <p class="text-gray-500 text-sm mt-1">Panel de control</p>
        </div>

        <?php if ($error): ?>
            <div class="bg-red-500/10 border border-red-500/30 text-red-400 px-4 py-3 rounded-lg text-sm mb-4 text-center"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST" class="bg-[#0d0d11] border border-white/10 rounded-2xl p-6 space-y-4">
            <div>
                <label class="text-xs text-gray-400 mb-1 block">Usuario</label>
                <input type="text" name="user" required class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5 text-sm text-white placeholder-gray-600 focus:outline-none focus:border-blue-500/50" placeholder="admin">
            </div>
            <div>
                <label class="text-xs text-gray-400 mb-1 block">Password</label>
                <input type="password" name="pass" required class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5 text-sm text-white placeholder-gray-600 focus:outline-none focus:border-blue-500/50" placeholder="*****">
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-teal-500 text-white py-2.5 rounded-lg text-sm font-bold hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all">Ingresar</button>
        </form>

        <p class="text-center text-gray-600 text-[10px] mt-6">Powered by <span class="text-blue-400">Next Boost</span></p>
    </div>
</body>
</html>
