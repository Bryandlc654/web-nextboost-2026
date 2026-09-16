<?php
require_once __DIR__ . '/../includes/ai-config.php';
session_start();
if (!isset($_SESSION['admin_id'])) { header('Location: index.php'); exit; }

$db = null;
$error_db = false;
$msg = '';
$msgType = 'ok';

try {
    require_once __DIR__ . '/../includes/db-directorio.php';
    $db = getDBDirectorio();
} catch (RuntimeException $e) {
    $error_db = $e->getMessage();
}

$accion = $_GET['accion'] ?? 'listar';
$tab = $_GET['tab'] ?? 'empresas';

// ====================== ACCIONES EMPRESAS ======================
if (!$error_db && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['empresa_action'])) {
    $action = $_POST['empresa_action'];
    $id = (int)($_POST['id'] ?? 0);

    try {
        if ($action === 'toggle_estado') {
            $db->prepare("UPDATE empresas SET estado = 1 - estado WHERE id = ?")->execute([$id]);
            $msg = 'Estado actualizado.';
        } elseif ($action === 'toggle_destacado') {
            $db->prepare("UPDATE empresas SET destacado = 1 - destacado WHERE id = ?")->execute([$id]);
            $msg = 'Destacado actualizado.';
        } elseif ($action === 'eliminar') {
            $db->prepare("DELETE FROM empresas WHERE id = ?")->execute([$id]);
            $msg = 'Empresa eliminada.';
        } elseif ($action === 'guardar') {
            $nombre = trim($_POST['nombre'] ?? '');
            $categoria_id = (int)($_POST['categoria_id'] ?? 0);
            $descripcion = trim($_POST['descripcion'] ?? '');
            $servicios = trim($_POST['servicios'] ?? '');
            $direccion = trim($_POST['direccion'] ?? '');
            $ciudad = trim($_POST['ciudad'] ?? 'Lima');
            $telefono = trim($_POST['telefono'] ?? '');
            $whatsapp = trim($_POST['whatsapp'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $web = trim($_POST['web'] ?? '');
            $horario = trim($_POST['horario'] ?? '');
            $estado = isset($_POST['estado']) ? 1 : 0;
            $destacado = isset($_POST['destacado']) ? 1 : 0;

            if ($nombre === '' || $categoria_id <= 0) {
                $msg = 'El nombre y la categoría son obligatorios.';
                $msgType = 'error';
            } else {
                if ($id > 0) {
                    $slug = slugUnicoDirectorio($db, $nombre, 'empresas', $id);
                    $db->prepare("UPDATE empresas SET
                        categoria_id = ?, nombre = ?, slug = ?, descripcion = ?, servicios = ?,
                        direccion = ?, ciudad = ?, telefono = ?, whatsapp = ?, email = ?, web = ?, horario = ?, estado = ?, destacado = ?
                        WHERE id = ?")->execute([
                        $categoria_id, $nombre, $slug,
                        $descripcion !== '' ? $descripcion : null,
                        $servicios !== '' ? $servicios : null,
                        $direccion !== '' ? $direccion : null,
                        $ciudad, $telefono !== '' ? $telefono : null,
                        $whatsapp !== '' ? $whatsapp : null,
                        $email !== '' ? $email : null,
                        $web !== '' ? $web : null,
                        $horario !== '' ? $horario : null,
                        $estado, $destacado, $id
                    ]);
                    $msg = 'Empresa actualizada.';
                } else {
                    $slug = slugUnicoDirectorio($db, $nombre);
                    $db->prepare("INSERT INTO empresas
                        (categoria_id, nombre, slug, descripcion, servicios, direccion, ciudad, telefono, whatsapp, email, web, horario, estado, destacado, creado_por)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")->execute([
                        $categoria_id, $nombre, $slug,
                        $descripcion !== '' ? $descripcion : null,
                        $servicios !== '' ? $servicios : null,
                        $direccion !== '' ? $direccion : null,
                        $ciudad, $telefono !== '' ? $telefono : null,
                        $whatsapp !== '' ? $whatsapp : null,
                        $email !== '' ? $email : null,
                        $web !== '' ? $web : null,
                        $horario !== '' ? $horario : null,
                        $estado, $destacado, 'admin'
                    ]);
                    $msg = 'Empresa creada.';
                }
            }
        }
    } catch (Exception $e) {
        error_log('Admin directorio empresa: ' . $e->getMessage());
        $msg = 'Error al guardar: ' . $e->getMessage();
        $msgType = 'error';
    }
}

// ====================== ACCIONES CATEGORÍAS ======================
if (!$error_db && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['categoria_action'])) {
    $action = $_POST['categoria_action'];
    $id = (int)($_POST['id'] ?? 0);

    try {
        if ($action === 'guardar') {
            $nombre = trim($_POST['nombre'] ?? '');
            $icono = trim($_POST['icono'] ?? 'building');
            $descripcion = trim($_POST['descripcion'] ?? '');
            $activo = isset($_POST['activo']) ? 1 : 0;

            if ($nombre === '') {
                $msg = 'El nombre de la categoría es obligatorio.';
                $msgType = 'error';
            } else {
                $slug = slugUnicoDirectorio($db, $nombre, 'categorias', $id);
                if ($id > 0) {
                    $db->prepare("UPDATE categorias SET nombre = ?, slug = ?, icono = ?, descripcion = ?, activo = ? WHERE id = ?")
                       ->execute([$nombre, $slug, $icono, $descripcion !== '' ? $descripcion : null, $activo, $id]);
                    $msg = 'Categoría actualizada.';
                } else {
                    $orden = (int)$db->query("SELECT COALESCE(MAX(orden),0) + 1 FROM categorias")->fetchColumn();
                    $db->prepare("INSERT INTO categorias (nombre, slug, icono, descripcion, orden, activo) VALUES (?, ?, ?, ?, ?, ?)")
                       ->execute([$nombre, $slug, $icono, $descripcion !== '' ? $descripcion : null, $orden, $activo]);
                    $msg = 'Categoría creada.';
                }
            }
        } elseif ($action === 'eliminar') {
            $db->prepare("DELETE FROM categorias WHERE id = ?")->execute([$id]);
            $msg = 'Categoría eliminada (y sus empresas).';
        }
    } catch (Exception $e) {
        error_log('Admin directorio categoría: ' . $e->getMessage());
        $msg = 'Error al guardar categoría: ' . $e->getMessage();
        $msgType = 'error';
    }
}

// ====================== DATOS ======================
$categorias = $error_db ? [] : $db->query(
    "SELECT c.*, (SELECT COUNT(*) FROM empresas e WHERE e.categoria_id = c.id) as total
     FROM categorias c ORDER BY c.orden ASC, c.nombre ASC"
)->fetchAll();

$empresas = $error_db ? [] : $db->query(
    "SELECT e.*, c.nombre as categoria_nombre
     FROM empresas e JOIN categorias c ON c.id = e.categoria_id
     ORDER BY e.estado ASC, e.creado_en DESC, e.nombre ASC"
)->fetchAll();

// Empresa en edición
$editEmpresa = null;
if (!$error_db && $accion === 'editar' && isset($_GET['id'])) {
    $stmt = $db->prepare("SELECT * FROM empresas WHERE id = ?");
    $stmt->execute([(int)$_GET['id']]);
    $editEmpresa = $stmt->fetch();
}

// Categoría en edición
$editCategoria = null;
if (!$error_db && $accion === 'editar_categoria' && isset($_GET['id'])) {
    $stmt = $db->prepare("SELECT * FROM categorias WHERE id = ?");
    $stmt->execute([(int)$_GET['id']]);
    $editCategoria = $stmt->fetch();
}

$pendientes = 0;
foreach ($empresas as $e) { if ((int)$e['estado'] === 0) $pendientes++; }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio de Empresas - Admin Next Boost</title>
    <link rel="stylesheet" href="../assets/css/tailwind.css">
    <style>
        @keyframes fade-in { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }
        .animate-in { animation: fade-in 0.3s ease-out forwards; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #0a0a0e; }
        ::-webkit-scrollbar-thumb { background: #333; border-radius: 3px; }
        .glass-input { background: rgba(10,10,14,.7); border: 1px solid rgba(255,255,255,.1); color: #fff; }
        .glass-input:focus { border-color: #3b82f6; outline: none; }
    </style>
</head>
<body class="bg-[#08080a] min-h-screen text-white">

    <!-- Top Bar -->
    <header class="bg-[#0d0d11] border-b border-white/10 px-6 py-3 flex items-center justify-between sticky top-0 z-40">
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 rounded-lg bg-gradient-to-r from-blue-500 to-teal-400 flex items-center justify-center">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <span class="font-bold text-sm">Directorio de Empresas</span>
            <?php if ($pendientes > 0): ?>
                <span class="text-[10px] bg-amber-500/20 text-amber-400 border border-amber-500/30 px-2 py-0.5"><?= $pendientes ?> pendientes</span>
            <?php endif; ?>
        </div>
        <div class="flex items-center gap-4">
            <a href="dashboard.php" class="text-xs text-gray-400 hover:text-blue-400 transition-colors">Dashboard</a>
            <a href="https://nextboost.business/directorio-empresas.php" target="_blank" class="text-xs text-gray-400 hover:text-blue-400 transition-colors">Ver directorio</a>
            <a href="logout.php" class="text-xs text-gray-400 hover:text-red-400 transition-colors">Cerrar sesión</a>
        </div>
    </header>

    <main class="max-w-7xl mx-auto p-6">

        <?php if ($error_db): ?>
            <div class="bg-red-500/10 border border-red-500/30 text-red-400 px-4 py-3 rounded-xl text-sm mb-6">
                No se pudo conectar con MySQL: <?= htmlspecialchars($error_db) ?><br>
                Verifica las credenciales DB_HOST/DB_NAME/DB_USER/DB_PASS en .env e importa directorio/schema.sql.
            </div>
        <?php endif; ?>

        <?php if ($msg): ?>
            <div class="bg-<?= $msgType === 'error' ? 'red' : 'emerald' ?>-500/10 border border-<?= $msgType === 'error' ? 'red' : 'emerald' ?>-500/30 text-<?= $msgType === 'error' ? 'red' : 'emerald' ?>-400 px-4 py-3 rounded-xl text-sm mb-6 animate-in"><?= htmlspecialchars($msg) ?></div>
        <?php endif; ?>

        <!-- Tabs -->
        <div class="flex gap-2 mb-6">
            <a href="directorio.php?tab=empresas" class="px-4 py-2 text-xs font-bold rounded-lg transition-colors <?= $tab === 'empresas' ? 'bg-blue-600 text-white' : 'bg-white/5 text-gray-400 hover:text-white border border-white/10' ?>">Empresas (<?= count($empresas) ?>)</a>
            <a href="directorio.php?tab=categorias" class="px-4 py-2 text-xs font-bold rounded-lg transition-colors <?= $tab === 'categorias' ? 'bg-blue-600 text-white' : 'bg-white/5 text-gray-400 hover:text-white border border-white/10' ?>">Categorías (<?= count($categorias) ?>)</a>
        </div>

        <?php if ($tab === 'empresas'): ?>

            <!-- Form: crear / editar empresa -->
            <div class="bg-[#0d0d11] border border-white/10 rounded-xl p-6 mb-8">
                <h2 class="text-sm font-bold text-white mb-4"><?= $editEmpresa ? 'Editar empresa: ' . htmlspecialchars($editEmpresa['nombre']) : 'Nueva empresa' ?></h2>
                <form method="POST" action="directorio.php?tab=empresas" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <input type="hidden" name="empresa_action" value="guardar">
                    <input type="hidden" name="id" value="<?= $editEmpresa ? (int)$editEmpresa['id'] : 0 ?>">
                    <div class="md:col-span-3">
                        <label class="text-[10px] text-gray-500 uppercase tracking-wider mb-1 block">Nombre *</label>
                        <input type="text" name="nombre" required value="<?= htmlspecialchars($editEmpresa['nombre'] ?? '') ?>" class="w-full glass-input px-3 py-2.5 text-sm rounded-lg">
                    </div>
                    <div>
                        <label class="text-[10px] text-gray-500 uppercase tracking-wider mb-1 block">Categoría *</label>
                        <select name="categoria_id" required class="w-full glass-input px-3 py-2.5 text-sm rounded-lg bg-[#0d0d11]">
                            <?php foreach ($categorias as $c): ?>
                                <option value="<?= (int)$c['id'] ?>" <?= ($editEmpresa && (int)$editEmpresa['categoria_id'] === (int)$c['id']) ? 'selected' : '' ?>><?= htmlspecialchars($c['nombre']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label class="text-[10px] text-gray-500 uppercase tracking-wider mb-1 block">Ciudad</label>
                        <input type="text" name="ciudad" value="<?= htmlspecialchars($editEmpresa['ciudad'] ?? 'Lima') ?>" class="w-full glass-input px-3 py-2.5 text-sm rounded-lg">
                    </div>
                    <div>
                        <label class="text-[10px] text-gray-500 uppercase tracking-wider mb-1 block">Horario</label>
                        <input type="text" name="horario" value="<?= htmlspecialchars($editEmpresa['horario'] ?? '') ?>" class="w-full glass-input px-3 py-2.5 text-sm rounded-lg">
                    </div>
                    <div class="md:col-span-3">
                        <label class="text-[10px] text-gray-500 uppercase tracking-wider mb-1 block">Servicios (separados por coma)</label>
                        <input type="text" name="servicios" value="<?= htmlspecialchars($editEmpresa['servicios'] ?? '') ?>" class="w-full glass-input px-3 py-2.5 text-sm rounded-lg">
                    </div>
                    <div class="md:col-span-3">
                        <label class="text-[10px] text-gray-500 uppercase tracking-wider mb-1 block">Descripción</label>
                        <textarea name="descripcion" rows="2" class="w-full glass-input px-3 py-2.5 text-sm rounded-lg"><?= htmlspecialchars($editEmpresa['descripcion'] ?? '') ?></textarea>
                    </div>
                    <div><label class="text-[10px] text-gray-500 uppercase tracking-wider mb-1 block">Teléfono</label><input type="text" name="telefono" value="<?= htmlspecialchars($editEmpresa['telefono'] ?? '') ?>" class="w-full glass-input px-3 py-2.5 text-sm rounded-lg"></div>
                    <div><label class="text-[10px] text-gray-500 uppercase tracking-wider mb-1 block">WhatsApp</label><input type="text" name="whatsapp" value="<?= htmlspecialchars($editEmpresa['whatsapp'] ?? '') ?>" class="w-full glass-input px-3 py-2.5 text-sm rounded-lg"></div>
                    <div><label class="text-[10px] text-gray-500 uppercase tracking-wider mb-1 block">Email</label><input type="email" name="email" value="<?= htmlspecialchars($editEmpresa['email'] ?? '') ?>" class="w-full glass-input px-3 py-2.5 text-sm rounded-lg"></div>
                    <div><label class="text-[10px] text-gray-500 uppercase tracking-wider mb-1 block">Sitio web</label><input type="url" name="web" value="<?= htmlspecialchars($editEmpresa['web'] ?? '') ?>" class="w-full glass-input px-3 py-2.5 text-sm rounded-lg"></div>
                    <div><label class="text-[10px] text-gray-500 uppercase tracking-wider mb-1 block">Dirección</label><input type="text" name="direccion" value="<?= htmlspecialchars($editEmpresa['direccion'] ?? '') ?>" class="w-full glass-input px-3 py-2.5 text-sm rounded-lg"></div>
                    <div class="flex items-end gap-6 pb-1">
                        <label class="flex items-center gap-2 text-xs text-gray-300"><input type="checkbox" name="estado" <?= !$editEmpresa || $editEmpresa['estado'] ? 'checked' : '' ?> class="accent-blue-500"> Publicada</label>
                        <label class="flex items-center gap-2 text-xs text-gray-300"><input type="checkbox" name="destacado" <?= $editEmpresa && $editEmpresa['destacado'] ? 'checked' : '' ?> class="accent-amber-500"> Destacada</label>
                    </div>
                    <div class="md:col-span-3 flex gap-3">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold px-6 py-2.5 rounded-lg transition-colors"><?= $editEmpresa ? 'Guardar cambios' : 'Crear empresa' ?></button>
                        <?php if ($editEmpresa): ?>
                            <a href="directorio.php?tab=empresas" class="text-xs text-gray-400 hover:text-white py-2.5">Cancelar</a>
                        <?php endif; ?>
                    </div>
                </form>
            </div>

            <!-- Listado -->
            <div class="bg-[#0d0d11] border border-white/10 rounded-xl overflow-hidden">
                <div class="px-4 py-3 border-b border-white/10 flex items-center justify-between">
                    <h2 class="text-sm font-bold text-white">Empresas</h2>
                    <span class="text-[10px] text-gray-500"><?= count($empresas) ?> registros</span>
                </div>
                <div class="divide-y divide-white/5">
                    <?php foreach ($empresas as $e): ?>
                    <div class="px-4 py-3 flex items-center justify-between gap-4 hover:bg-white/5 transition-colors">
                        <div class="min-w-0">
                            <div class="flex items-center gap-2">
                                <p class="text-sm font-semibold text-white truncate"><?= htmlspecialchars($e['nombre']) ?></p>
                                <?php if (!$e['estado']): ?>
                                    <span class="text-[10px] bg-amber-500/20 text-amber-400 border border-amber-500/30 px-2 py-0.5">Pendiente</span>
                                <?php endif; ?>
                                <?php if ($e['destacado']): ?>
                                    <span class="text-[10px] bg-amber-500/10 text-amber-300 px-2 py-0.5">★ Destacado</span>
                                <?php endif; ?>
                            </div>
                            <p class="text-[11px] text-gray-500 mt-0.5"><?= htmlspecialchars($e['categoria_nombre']) ?> • <?= htmlspecialchars($e['ciudad'] ?: 'Perú') ?> • Creada <?= date('d/m/Y', strtotime($e['creado_en'])) ?></p>
                        </div>
                        <div class="flex items-center gap-2 shrink-0">
                            <a href="directorio.php?tab=empresas&accion=editar&id=<?= (int)$e['id'] ?>" class="text-[11px] text-blue-400 hover:text-blue-300 border border-white/10 px-3 py-1.5 rounded-lg transition-colors">Editar</a>
                            <form method="POST" action="directorio.php?tab=empresas" class="inline">
                                <input type="hidden" name="empresa_action" value="toggle_estado">
                                <input type="hidden" name="id" value="<?= (int)$e['id'] ?>">
                                <button type="submit" class="text-[11px] <?= $e['estado'] ? 'text-red-400 hover:text-red-300' : 'text-emerald-400 hover:text-emerald-300' ?> border border-white/10 px-3 py-1.5 rounded-lg transition-colors"><?= $e['estado'] ? 'Ocultar' : 'Publicar' ?></button>
                            </form>
                            <form method="POST" action="directorio.php?tab=empresas" class="inline">
                                <input type="hidden" name="empresa_action" value="toggle_destacado">
                                <input type="hidden" name="id" value="<?= (int)$e['id'] ?>">
                                <button type="submit" class="text-[11px] text-amber-400 hover:text-amber-300 border border-white/10 px-3 py-1.5 rounded-lg transition-colors"><?= $e['destacado'] ? 'Quitar ★' : 'Destacar' ?></button>
                            </form>
                            <form method="POST" action="directorio.php?tab=empresas" class="inline" onsubmit="return confirm('¿Eliminar esta empresa?');">
                                <input type="hidden" name="empresa_action" value="eliminar">
                                <input type="hidden" name="id" value="<?= (int)$e['id'] ?>">
                                <button type="submit" class="text-[11px] text-red-400 hover:text-red-300 border border-white/10 px-3 py-1.5 rounded-lg transition-colors">Eliminar</button>
                            </form>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php if (empty($empresas)): ?>
                        <div class="px-4 py-10 text-center text-gray-500 text-sm">No hay empresas aún. Usa el formulario de arriba para crear la primera.</div>
                    <?php endif; ?>
                </div>
            </div>

        <?php else: ?>

            <!-- Form: crear / editar categoría -->
            <div class="bg-[#0d0d11] border border-white/10 rounded-xl p-6 mb-8">
                <h2 class="text-sm font-bold text-white mb-4"><?= $editCategoria ? 'Editar categoría: ' . htmlspecialchars($editCategoria['nombre']) : 'Nueva categoría' ?></h2>
                <form method="POST" action="directorio.php?tab=categorias" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <input type="hidden" name="categoria_action" value="guardar">
                    <input type="hidden" name="id" value="<?= $editCategoria ? (int)$editCategoria['id'] : 0 ?>">
                    <div>
                        <label class="text-[10px] text-gray-500 uppercase tracking-wider mb-1 block">Nombre *</label>
                        <input type="text" name="nombre" required value="<?= htmlspecialchars($editCategoria['nombre'] ?? '') ?>" class="w-full glass-input px-3 py-2.5 text-sm rounded-lg">
                    </div>
                    <div>
                        <label class="text-[10px] text-gray-500 uppercase tracking-wider mb-1 block">Icono</label>
                        <input type="text" name="icono" value="<?= htmlspecialchars($editCategoria['icono'] ?? 'building') ?>" class="w-full glass-input px-3 py-2.5 text-sm rounded-lg">
                    </div>
                    <div class="md:col-span-2">
                        <label class="text-[10px] text-gray-500 uppercase tracking-wider mb-1 block">Descripción</label>
                        <input type="text" name="descripcion" value="<?= htmlspecialchars($editCategoria['descripcion'] ?? '') ?>" class="w-full glass-input px-3 py-2.5 text-sm rounded-lg">
                    </div>
                    <div class="flex items-end gap-6 pb-1">
                        <label class="flex items-center gap-2 text-xs text-gray-300"><input type="checkbox" name="activo" <?= !$editCategoria || $editCategoria['activo'] ? 'checked' : '' ?> class="accent-blue-500"> Activa</label>
                    </div>
                    <div class="md:col-span-4 flex gap-3">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold px-6 py-2.5 rounded-lg transition-colors"><?= $editCategoria ? 'Guardar cambios' : 'Crear categoría' ?></button>
                        <?php if ($editCategoria): ?>
                            <a href="directorio.php?tab=categorias" class="text-xs text-gray-400 hover:text-white py-2.5">Cancelar</a>
                        <?php endif; ?>
                    </div>
                </form>
            </div>

            <!-- Listado categorías -->
            <div class="bg-[#0d0d11] border border-white/10 rounded-xl overflow-hidden">
                <div class="px-4 py-3 border-b border-white/10 flex items-center justify-between">
                    <h2 class="text-sm font-bold text-white">Categorías</h2>
                    <span class="text-[10px] text-gray-500"><?= count($categorias) ?> registros</span>
                </div>
                <div class="divide-y divide-white/5">
                    <?php foreach ($categorias as $c): ?>
                    <div class="px-4 py-3 flex items-center justify-between gap-4 hover:bg-white/5 transition-colors">
                        <div class="min-w-0">
                            <p class="text-sm font-semibold text-white"><?= htmlspecialchars($c['nombre']) ?> <span class="text-gray-500 text-xs font-normal">(<?= (int)$c['total'] ?> empresas)</span></p>
                            <p class="text-[11px] text-gray-500 mt-0.5 truncate"><?= htmlspecialchars($c['descripcion'] ?? '') ?></p>
                        </div>
                        <div class="flex items-center gap-2 shrink-0">
                            <a href="directorio.php?tab=categorias&accion=editar_categoria&id=<?= (int)$c['id'] ?>" class="text-[11px] text-blue-400 hover:text-blue-300 border border-white/10 px-3 py-1.5 rounded-lg transition-colors">Editar</a>
                            <form method="POST" action="directorio.php?tab=categorias" class="inline" onsubmit="return confirm('¿Eliminar esta categoría? Se eliminarán sus empresas.');">
                                <input type="hidden" name="categoria_action" value="eliminar">
                                <input type="hidden" name="id" value="<?= (int)$c['id'] ?>">
                                <button type="submit" class="text-[11px] text-red-400 hover:text-red-300 border border-white/10 px-3 py-1.5 rounded-lg transition-colors">Eliminar</button>
                            </form>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        <?php endif; ?>

    </main>
</body>
</html>
