?php
  $page_title = "Registrar mi Empresa Gratis | Directorio de Empresas PerÃº | Next Boost";
  $page_description = "Registra tu empresa gratis en el directorio de empresas de PerÃº. Aparece por categorÃ­a y servicio: industrial, derecho, marketing, turismo, gimnasios y mÃ¡s.";

  session_start();
  if (empty($_SESSION['dir_csrf'])) {
    $_SESSION['dir_csrf'] = bin2hex(random_bytes(16));
  }
  $dir_csrf = $_SESSION['dir_csrf'];

  $db = null;
  $error_db = false;
  $categorias = [];
  try {
    $db = require __DIR__ . '/includes/db-directorio.php';
    $categorias = $db->query(
      "SELECT id, nombre, slug, icono FROM categorias WHERE activo = 1 ORDER BY orden ASC, nombre ASC"
    )->fetchAll();
  } catch (RuntimeException $e) {
    $error_db = $e->getMessage();
  }

  $success = false;
  $errores = [];

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['empresa_web_hp'])) {
      header('Location: registro-directorio.php?ok=1');
      exit;
    }

    if (empty($_POST['_csrf']) || !hash_equals($dir_csrf, $_POST['_csrf'])) {
      $errores[] = 'SesiÃ³n invÃ¡lida. Recarga la pÃ¡gina e intenta de nuevo.';
    }

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

    if ($nombre === '') { $errores[] = 'Ingresa el nombre de la empresa.'; }
    if (mb_strlen($nombre) > 160) { $errores[] = 'El nombre es demasiado largo (mÃ¡x. 160 caracteres).'; }
    if ($categoria_id <= 0) { $errores[] = 'Selecciona la categorÃ­a de tu empresa.'; }
    if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) { $errores[] = 'El correo electrÃ³nico no es vÃ¡lido.'; }
    if ($web !== '' && !filter_var($web, FILTER_VALIDATE_URL)) { $errores[] = 'La URL del sitio web no es vÃ¡lida (usa https://...).'; }
    if ($whatsapp !== '' && strlen(preg_replace('/[^0-9]/', '', $whatsapp)) < 9) { $errores[] = 'El nÃºmero de WhatsApp debe tener al menos 9 dÃ­gitos.'; }

    if (empty($errores) && $db) {
      try {
        $catValido = $db->prepare("SELECT id FROM categorias WHERE id = ?");
        $catValido->execute([$categoria_id]);
        if (!$catValido->fetchColumn()) {
          $errores[] = 'La categorÃ­a seleccionada no existe.';
        } else {
          $slug = slugUnicoDirectorio($db, $nombre);
          $stmt = $db->prepare("INSERT INTO empresas
            (categoria_id, nombre, slug, descripcion, servicios, direccion, ciudad, telefono, whatsapp, email, web, horario, estado, creado_por)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 0, ?)");
          $stmt->execute([
            $categoria_id, $nombre, $slug,
            $descripcion !== '' ? $descripcion : null,
            $servicios !== '' ? $servicios : null,
            $direccion !== '' ? $direccion : null,
            $ciudad !== '' ? $ciudad : null,
            $telefono !== '' ? $telefono : null,
            $whatsapp !== '' ? $whatsapp : null,
            $email !== '' ? $email : null,
            $web !== '' ? $web : null,
            $horario !== '' ? $horario : null,
            $email !== '' ? $email : ($telefono !== '' ? $telefono : null)
          ]);
          $success = true;
        }
      } catch (Exception $e) {
        error_log('Registro directorio: ' . $e->getMessage());
        $errores[] = 'OcurriÃ³ un error al guardar. Intenta nuevamente.';
      }
    }

    if ($success) {
      $_SESSION['dir_csrf'] = bin2hex(random_bytes(16));
      $dir_csrf = $_SESSION['dir_csrf'];
    }
  }
?>
<!DOCTYPE html>
<html lang="es" class="dark scroll-smooth">
<?php include 'includes/head.php'; ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://nextboost.business/" },
    { "@type": "ListItem", "position": 2, "name": "Directorio de Empresas PerÃº", "item": "https://nextboost.business/directorio-empresas.php" },
    { "@type": "ListItem", "position": 3, "name": "Registrar mi Empresa", "item": "https://nextboost.business/registro-directorio.php" }
  ]
}
</script>

<body>

  <!-- Glow Background -->
  <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
    <div class="absolute -top-40 right-20 w-[600px] h-[600px] bg-teal-600/10 rounded-full glow-pulse"></div>
    <div class="absolute bottom-[10%] -left-40 w-[500px] h-[500px] bg-blue-500/5 rounded-full glow-pulse" style="animation-delay: -1.5s;"></div>
    <div class="absolute inset-0 grid-bg"></div>
  </div>

  <!-- Global Header -->
  <?php include 'includes/header.php'; ?>

  <main class="relative z-10 max-w-3xl mx-auto px-8 md:px-16 lg:px-20 py-16 lg:py-24">

    <section class="text-center mb-12">
      <div class="inline-flex items-center gap-2.5 px-4 py-1.5 badge-gradient text-xs font-medium text-teal-300 animate-in mx-auto mb-6">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
        Gratis
      </div>
      <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold tracking-tight leading-tight animate-in">
        Registra tu <span class="gradient-text">Empresa</span>
      </h1>
      <p class="text-gray-400 text-sm md:text-base leading-relaxed max-w-xl mx-auto mt-4 animate-in">
        Completa el formulario y aparecerÃ¡s en el directorio por categorÃ­a y servicio. Revisamos cada solicitud antes de publicarla.
      </p>
    </section>

    <?php if ($success): ?>
      <div class="glass-card border border-emerald-500/30 p-10 text-center">
        <div class="w-16 h-16 mx-auto rounded-full bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center mb-4">
          <svg class="w-8 h-8 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
        </div>
        <h2 class="text-xl font-bold text-white mb-2">Â¡Solicitud enviada!</h2>
        <p class="text-gray-400 text-sm mb-6">Tu empresa fue registrada y estÃ¡ pendiente de verificaciÃ³n. En breve estarÃ¡ publicada en el directorio.</p>
        <a href="directorio-empresas.php" class="inline-block bg-white hover:bg-gray-100 text-black font-bold px-6 py-3 text-sm transition-colors">Volver al directorio</a>
      </div>
    <?php else: ?>

      <?php if ($error_db): ?>
        <div class="glass-card border border-red-500/20 p-8 text-center mb-8">
          <p class="text-red-400 text-sm font-semibold mb-2">Base de datos no disponible</p>
          <p class="text-gray-400 text-sm leading-relaxed">No se pudo conectar con MySQL. Verifica las credenciales DB_HOST/DB_NAME/DB_USER/DB_PASS en .env e importa directorio/schema.sql.</p>
        </div>
      <?php endif; ?>

      <?php if (!empty($errores)): ?>
        <div class="glass-card border border-red-500/30 p-6 mb-8">
          <p class="text-red-400 text-sm font-semibold mb-3">Corrige lo siguiente:</p>
          <ul class="list-disc list-inside space-y-1.5">
            <?php foreach ($errores as $err): ?>
              <li class="text-gray-400 text-xs"><?= htmlspecialchars($err) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <form method="post" action="registro-directorio.php" class="glass-card border border-white/10 p-8 md:p-10 space-y-6">
        <input type="hidden" name="_csrf" value="<?= htmlspecialchars($dir_csrf) ?>">
        <input type="text" name="empresa_web_hp" value="" class="hidden" tabindex="-1" autocomplete="off" aria-hidden="true">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div class="md:col-span-2">
            <label for="nombre" class="block text-xs font-semibold text-gray-300 mb-2">Nombre de la empresa <span class="text-red-400">*</span></label>
            <input type="text" id="nombre" name="nombre" required value="<?= htmlspecialchars($_POST['nombre'] ?? '') ?>" placeholder="Ej. CorporaciÃ³n Totos SAC" class="w-full glass-input px-4 py-3 text-sm">
          </div>

          <div>
            <label for="categoria_id" class="block text-xs font-semibold text-gray-300 mb-2">CategorÃ­a / Sector <span class="text-red-400">*</span></label>
            <select id="categoria_id" name="categoria_id" required class="w-full glass-input px-4 py-3 text-sm bg-[#0a0a0e]">
              <option value="">Selecciona un sectorâ€¦</option>
              <?php foreach ($categorias as $c): ?>
                <option value="<?= (int)$c['id'] ?>" <?= ((int)($_POST['categoria_id'] ?? 0) === (int)$c['id']) ? 'selected' : '' ?>>
                  <?= htmlspecialchars($c['nombre']) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div>
            <label for="servicios" class="block text-xs font-semibold text-gray-300 mb-2">Servicios (separados por coma)</label>
            <input type="text" id="servicios" name="servicios" value="<?= htmlspecialchars($_POST['servicios'] ?? '') ?>" placeholder="Ej. AsesorÃ­a legal, TrÃ¡mites, Contratos" class="w-full glass-input px-4 py-3 text-sm">
          </div>

          <div class="md:col-span-2">
            <label for="descripcion" class="block text-xs font-semibold text-gray-300 mb-2">DescripciÃ³n de la empresa</label>
            <textarea id="descripcion" name="descripcion" rows="3" placeholder="CuÃ©ntanos a quÃ© se dedica tu empresaâ€¦" class="w-full glass-input px-4 py-3 text-sm"><?= htmlspecialchars($_POST['descripcion'] ?? '') ?></textarea>
          </div>

          <div>
            <label for="ciudad" class="block text-xs font-semibold text-gray-300 mb-2">Ciudad</label>
            <input type="text" id="ciudad" name="ciudad" value="<?= htmlspecialchars($_POST['ciudad'] ?? 'Lima') ?>" class="w-full glass-input px-4 py-3 text-sm">
          </div>

          <div>
            <label for="direccion" class="block text-xs font-semibold text-gray-300 mb-2">DirecciÃ³n</label>
            <input type="text" id="direccion" name="direccion" value="<?= htmlspecialchars($_POST['direccion'] ?? '') ?>" placeholder="Opcional" class="w-full glass-input px-4 py-3 text-sm">
          </div>

          <div>
            <label for="telefono" class="block text-xs font-semibold text-gray-300 mb-2">TelÃ©fono</label>
            <input type="tel" id="telefono" name="telefono" value="<?= htmlspecialchars($_POST['telefono'] ?? '') ?>" placeholder="+51 1 555 0101" class="w-full glass-input px-4 py-3 text-sm">
          </div>

          <div>
            <label for="whatsapp" class="block text-xs font-semibold text-gray-300 mb-2">WhatsApp (con cÃ³digo de paÃ­s)</label>
            <input type="tel" id="whatsapp" name="whatsapp" value="<?= htmlspecialchars($_POST['whatsapp'] ?? '') ?>" placeholder="Ej. 51999000101" class="w-full glass-input px-4 py-3 text-sm">
          </div>

          <div>
            <label for="email" class="block text-xs font-semibold text-gray-300 mb-2">Correo electrÃ³nico</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" placeholder="contacto@tuempresa.com" class="w-full glass-input px-4 py-3 text-sm">
          </div>

          <div>
            <label for="web" class="block text-xs font-semibold text-gray-300 mb-2">Sitio web</label>
            <input type="url" id="web" name="web" value="<?= htmlspecialchars($_POST['web'] ?? '') ?>" placeholder="https://tuempresa.com" class="w-full glass-input px-4 py-3 text-sm">
          </div>

          <div class="md:col-span-2">
            <label for="horario" class="block text-xs font-semibold text-gray-300 mb-2">Horario de atenciÃ³n</label>
            <input type="text" id="horario" name="horario" value="<?= htmlspecialchars($_POST['horario'] ?? '') ?>" placeholder="Ej. Lun - Vie 8:00 - 18:00" class="w-full glass-input px-4 py-3 text-sm">
          </div>
        </div>

        <div class="flex flex-col sm:flex-row items-center gap-4 pt-2">
          <button type="submit" class="w-full sm:w-auto bg-white hover:bg-gray-100 text-black font-bold px-10 py-4 text-sm tracking-tight transition-colors duration-300">
            Enviar solicitud
          </button>
          <p class="text-[11px] text-gray-500 text-center sm:text-left">Tu solicitud es revisada y publicada por nuestro equipo.</p>
        </div>
      </form>
    <?php endif; ?>

  </main>

  <!-- Global Footer -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>
