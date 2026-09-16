<?php
  $page_title = "Directorio de Empresas Perú | Por Categoría y Servicio | Next Boost";
  $page_description = "Directorio de empresas en Perú por sector y servicio. Busca empresas por categoría (industrial, derecho, marketing, turismo, gimnasios) o por nombre y servicio.";
  $og_url = "https://nextboost.business/directorio-empresas.php";

  $db = null;
  $error_db = false;
  $categorias = [];
  $empresas = [];
  $busqueda = trim($_GET['q'] ?? '');
  $cat = trim($_GET['cat'] ?? '');
  $catActiva = null;

  try {
    $db = require __DIR__ . '/includes/db-directorio.php';
    $db = getDBDirectorio();

    $categorias = $db->query(
      "SELECT c.id, c.nombre, c.slug, c.icono, c.descripcion,
              (SELECT COUNT(*) FROM empresas e WHERE e.categoria_id = c.id AND e.estado = 1) as total
       FROM categorias c
       WHERE c.activo = 1
       ORDER BY c.orden ASC, c.nombre ASC"
    )->fetchAll();

    $sql = "SELECT e.*, c.nombre as categoria_nombre, c.slug as categoria_slug, c.icono as categoria_icono
            FROM empresas e
            JOIN categorias c ON c.id = e.categoria_id
            WHERE e.estado = 1";
    $params = [];

    if ($cat !== '') {
      $sql .= " AND c.slug = ?";
      $params[] = $cat;
      foreach ($categorias as $c) {
        if ($c['slug'] === $cat) { $catActiva = $c; break; }
      }
    }

    if ($busqueda !== '') {
      $sql .= " AND (e.nombre LIKE ? OR e.servicios LIKE ? OR e.descripcion LIKE ? OR e.ciudad LIKE ?)";
      $like = '%' . $busqueda . '%';
      $params[] = $like; $params[] = $like; $params[] = $like; $params[] = $like;
    }

    $sql .= " ORDER BY e.destacado DESC, e.nombre ASC LIMIT 200";
    $stmt = $db->prepare($sql);
    $stmt->execute($params);
    $empresas = $stmt->fetchAll();
  } catch (RuntimeException $e) {
    $error_db = $e->getMessage();
  }
?>
<!DOCTYPE html>
<html lang="es" class="dark scroll-smooth">
<?php include 'includes/head.php'; ?>

<!-- Datos Estructurados JSON-LD (SEO Avanzado) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "https://nextboost.business/directorio-empresas.php/#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://nextboost.business/" },
        { "@type": "ListItem", "position": 2, "name": "Directorio de Empresas Perú", "item": "https://nextboost.business/directorio-empresas.php" }
      ]
    },
    {
      "@type": "CollectionPage",
      "@id": "https://nextboost.business/directorio-empresas.php/#directorio",
      "url": "https://nextboost.business/directorio-empresas.php",
      "name": "Directorio de Empresas Perú",
      "description": "Directorio de empresas en Perú organizado por sector: industrial, derecho, marketing, turismo, gimnasios, gastronomía y más.",
      "about": {
        "@type": "Thing",
        "name": "Directorio de Empresas Perú"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://nextboost.business/directorio-empresas.php/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿Cómo busco una empresa por servicio en el directorio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Usa el buscador superior escribiendo el nombre del servicio que necesitas (por ejemplo: asesoría legal, SEO, marketing digital, venta de maquinaria) o el nombre de la empresa. También puedes filtrar por categoría haciendo clic en cualquiera de los sectores disponibles."
          }
        },
        {
          "@type": "Question",
          "name": "¿Qué categorías de empresas hay en el directorio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "El directorio organiza las empresas por sectores como industrial, derecho, marketing, turismo, gimnasios, gastronomía, salud, educación, inmobiliarias, retail, belleza, tecnología, construcción, transporte y finanzas."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cómo registro mi empresa en el directorio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ingresa al formulario de registro y completa los datos de tu empresa: nombre, categoría, servicios, teléfono, correo y sitio web. Nuestro equipo revisa la solicitud y la publica una vez verificada."
          }
        }
      ]
    }
  ]
}
</script>

<body>

  <!-- Glow Background -->
  <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
    <div class="absolute -top-40 right-20 w-[600px] h-[600px] bg-blue-600/10 rounded-full glow-pulse"></div>
    <div class="absolute bottom-[10%] -left-40 w-[500px] h-[500px] bg-teal-500/5 rounded-full glow-pulse" style="animation-delay: -1.5s;"></div>
    <div class="absolute inset-0 grid-bg"></div>
  </div>

  <!-- Global Header -->
  <?php include 'includes/header.php'; ?>

  <main class="relative z-10 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 py-16 lg:py-24">

    <!-- 1. Hero -->
    <section class="text-center max-w-4xl mx-auto space-y-8">
      <div class="inline-flex items-center gap-2.5 px-4 py-1.5 badge-gradient text-xs font-medium text-blue-300 animate-in mx-auto">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        Directorio Empresarial del Perú
      </div>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight animate-in" style="animation-delay: 100ms;">
        Directorio de Empresas <span class="gradient-text">en Perú</span>
      </h1>
      <p class="text-gray-400 text-base md:text-lg leading-relaxed max-w-2xl mx-auto animate-in" style="animation-delay: 200ms;">
        Encuentra empresas por sector o servicio: industrial, derecho, marketing, turismo, gimnasios y más. Conecta con proveedores verificados en todo el país.
      </p>

      <!-- Buscador -->
      <form method="get" action="directorio-empresas.php" class="max-w-2xl mx-auto animate-in" style="animation-delay: 300ms;">
        <div class="flex flex-col sm:flex-row gap-3">
          <div class="flex-1 relative">
            <svg class="w-5 h-5 text-gray-500 absolute left-4 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            <input
              type="text"
              name="q"
              value="<?= htmlspecialchars($busqueda) ?>"
              placeholder="Buscar por servicio o empresa… ej. asesoría legal, marketing, Italvet"
              class="w-full glass-input bg-white/5 border border-white/10 text-white text-sm pl-12 pr-4 py-4 placeholder-gray-500 focus:outline-none focus:border-blue-500/60 focus:ring-2 focus:ring-blue-500/20 transition-all"
            >
            <?php if ($cat !== ''): ?>
              <input type="hidden" name="cat" value="<?= htmlspecialchars($cat) ?>">
            <?php endif; ?>
          </div>
          <button type="submit" class="bg-white hover:bg-gray-100 text-black font-bold px-8 py-4 text-sm tracking-tight transition-colors duration-300">
            Buscar
          </button>
        </div>
      </form>

      <!-- Categorías -->
      <div class="flex flex-wrap justify-center gap-2.5 animate-in" style="animation-delay: 400ms;">
        <a href="directorio-empresas.php" class="px-4 py-2 text-xs font-semibold border transition-all <?= $cat === '' ? 'bg-white text-black border-white' : 'text-gray-300 border-white/10 hover:border-white/40 hover:text-white' ?>">
          Todas (<?= number_format(array_sum(array_column($categorias, 'total'))) ?>)
        </a>
        <?php foreach ($categorias as $c): ?>
          <a
            href="directorio-empresas.php?cat=<?= urlencode($c['slug']) ?>"
            class="px-4 py-2 text-xs font-semibold border transition-all <?= $cat === $c['slug'] ? 'bg-blue-500 text-black border-blue-500' : 'text-gray-300 border-white/10 hover:border-blue-500/40 hover:text-white' ?>"
          >
            <?= htmlspecialchars($c['nombre']) ?> (<?= (int)$c['total'] ?>)
          </a>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- 2. Resultados -->
    <section class="mt-16" id="resultados">
      <?php if ($error_db): ?>
        <div class="max-w-2xl mx-auto text-center glass-card p-10 border border-red-500/20">
          <p class="text-red-400 text-sm font-semibold mb-2">Base de datos no disponible</p>
          <p class="text-gray-400 text-sm leading-relaxed">No se pudo conectar con MySQL. Verifica las credenciales DB_HOST/DB_NAME/DB_USER/DB_PASS en el archivo .env e importa directorio/schema.sql en tu hosting.</p>
        </div>
      <?php elseif (empty($empresas)): ?>
        <div class="max-w-2xl mx-auto text-center glass-card p-10">
          <p class="text-3xl mb-3">🔍</p>
          <p class="text-white font-semibold text-lg mb-1">Sin resultados</p>
          <p class="text-gray-400 text-sm mb-6">No encontramos empresas para «<?= htmlspecialchars($busqueda) ?>»<?= $catActiva ? ' en la categoría ' . htmlspecialchars($catActiva['nombre']) : '' ?>. Intenta con otro término o revisa las categorías.</p>
          <a href="directorio-empresas.php" class="inline-block bg-white hover:bg-gray-100 text-black font-bold px-6 py-3 text-sm transition-colors">Ver todas las empresas</a>
        </div>
      <?php else: ?>
        <div class="flex items-center justify-between flex-wrap gap-3 mb-8">
          <h2 class="text-xl md:text-2xl font-bold text-white">
            <?= $catActiva ? htmlspecialchars($catActiva['nombre']) : 'Todas las empresas' ?>
            <span class="text-gray-500 font-normal text-sm ml-2"><?= count($empresas) ?> encontradas</span>
          </h2>
          <a href="registro-directorio.php" class="inline-flex items-center gap-2 text-sm font-semibold text-blue-400 hover:text-blue-300 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
            Registrar mi empresa
          </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php foreach ($empresas as $e): ?>
          <article class="glass-card border border-white/10 p-6 flex flex-col gap-4 transition-all hover:border-blue-500/30 hover:bg-white/[0.04] group">
            <div class="flex items-start justify-between gap-3">
              <div class="flex items-center gap-3 min-w-0">
                <div class="w-11 h-11 shrink-0 rounded-none bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 text-base font-bold uppercase">
                  <?= htmlspecialchars(mb_substr($e['nombre'], 0, 2)) ?>
                </div>
                <div class="min-w-0">
                  <h3 class="text-sm font-bold text-white leading-snug truncate"><?= htmlspecialchars($e['nombre']) ?></h3>
                  <span class="text-[11px] text-blue-400 font-medium"><?= htmlspecialchars($e['categoria_nombre']) ?></span>
                </div>
              </div>
              <?php if ($e['destacado']): ?>
                <span class="shrink-0 text-[10px] font-bold uppercase tracking-wider text-amber-400 border border-amber-500/30 bg-amber-500/10 px-2 py-0.5">Destacado</span>
              <?php endif; ?>
            </div>

            <?php if ($e['descripcion']): ?>
              <p class="text-xs text-gray-400 leading-relaxed line-clamp-3"><?= htmlspecialchars($e['descripcion']) ?></p>
            <?php endif; ?>

            <?php if ($e['servicios']): ?>
              <div class="flex flex-wrap gap-1.5">
                <?php
                  $servicios = array_filter(array_map('trim', explode(',', $e['servicios'])));
                  foreach (array_slice($servicios, 0, 3) as $sv):
                ?>
                  <span class="text-[10px] px-2 py-1 border border-white/10 bg-white/5 text-gray-300"><?= htmlspecialchars($sv) ?></span>
                <?php endforeach; ?>
                <?php if (count($servicios) > 3): ?>
                  <span class="text-[10px] px-2 py-1 text-gray-500">+<?= count($servicios) - 3 ?> más</span>
                <?php endif; ?>
              </div>
            <?php endif; ?>

            <div class="flex items-center gap-2 text-[11px] text-gray-500">
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              <?= htmlspecialchars($e['ciudad'] ?: 'Perú') ?>
              <?php if ($e['horario']): ?>
                <span class="text-gray-600">•</span>
                <span><?= htmlspecialchars($e['horario']) ?></span>
              <?php endif; ?>
            </div>

            <div class="mt-auto flex items-center gap-2 pt-2 border-t border-white/5">
              <?php if ($e['whatsapp']): ?>
                <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $e['whatsapp']) ?>" target="_blank" rel="noopener" class="flex-1 text-center text-[11px] font-semibold py-2.5 bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 hover:bg-emerald-500 hover:text-black transition-colors">
                  WhatsApp
                </a>
              <?php endif; ?>
              <?php if ($e['telefono']): ?>
                <a href="tel:<?= htmlspecialchars($e['telefono']) ?>" class="flex-1 text-center text-[11px] font-semibold py-2.5 bg-white/5 border border-white/10 text-gray-200 hover:bg-white hover:text-black transition-colors">
                  Llamar
                </a>
              <?php endif; ?>
              <?php if ($e['web']): ?>
                <a href="<?= htmlspecialchars($e['web']) ?>" target="_blank" rel="noopener nofollow" class="flex-1 text-center text-[11px] font-semibold py-2.5 bg-white/5 border border-white/10 text-gray-200 hover:bg-white hover:text-black transition-colors">
                  Sitio Web
                </a>
              <?php endif; ?>
            </div>
          </article>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </section>

    <!-- 3. CTA Registro -->
    <section class="mt-20">
      <div class="glass-card border border-blue-500/20 p-10 md:p-14 text-center relative overflow-hidden">
        <div class="absolute -top-20 -right-20 w-64 h-64 bg-blue-600/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="relative">
          <h2 class="text-2xl md:text-3xl font-extrabold tracking-tight text-white mb-3">¿Tu empresa no aparece?</h2>
          <p class="text-gray-400 text-sm md:text-base max-w-xl mx-auto mb-8 leading-relaxed">
            Registra tu negocio gratis en el directorio y llega a más clientes que buscan tu tipo de servicio en Perú.
          </p>
          <a href="registro-directorio.php" class="inline-flex items-center gap-2 bg-white hover:bg-gray-100 text-black font-bold px-8 py-4 text-sm tracking-tight transition-colors duration-300">
            Registrar mi empresa
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>
      </div>
    </section>

    <!-- 4. FAQ -->
    <section class="mt-20 max-w-3xl mx-auto">
      <h2 class="text-2xl md:text-3xl font-extrabold tracking-tight text-white text-center mb-8">
        Preguntas <span class="gradient-text">Frecuentes</span>
      </h2>
      <div class="space-y-3">
        <div class="glass-card border border-white/10 overflow-hidden">
          <button class="faq-btn w-full flex items-center justify-between gap-4 p-5 text-left">
            <span class="text-sm font-semibold text-white">¿Cómo busco una empresa por servicio en el directorio?</span>
            <span class="faq-icon text-gray-400 transition-transform duration-300 shrink-0">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </span>
          </button>
          <div class="faq-answer hidden px-5 pb-5">
            <p class="text-xs text-gray-400 leading-relaxed">Usa el buscador superior escribiendo el nombre del servicio que necesitas (por ejemplo: asesoría legal, SEO, marketing digital, venta de maquinaria) o el nombre de la empresa. También puedes filtrar por categoría haciendo clic en cualquiera de los sectores disponibles.</p>
          </div>
        </div>
        <div class="glass-card border border-white/10 overflow-hidden">
          <button class="faq-btn w-full flex items-center justify-between gap-4 p-5 text-left">
            <span class="text-sm font-semibold text-white">¿Qué categorías de empresas hay en el directorio?</span>
            <span class="faq-icon text-gray-400 transition-transform duration-300 shrink-0">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </span>
          </button>
          <div class="faq-answer hidden px-5 pb-5">
            <p class="text-xs text-gray-400 leading-relaxed">El directorio organiza las empresas por sectores como industrial, derecho, marketing, turismo, gimnasios, gastronomía, salud, educación, inmobiliarias, retail, belleza, tecnología, construcción, transporte y finanzas.</p>
          </div>
        </div>
        <div class="glass-card border border-white/10 overflow-hidden">
          <button class="faq-btn w-full flex items-center justify-between gap-4 p-5 text-left">
            <span class="text-sm font-semibold text-white">¿Cómo registro mi empresa en el directorio?</span>
            <span class="faq-icon text-gray-400 transition-transform duration-300 shrink-0">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </span>
          </button>
          <div class="faq-answer hidden px-5 pb-5">
            <p class="text-xs text-gray-400 leading-relaxed">Ingresa al formulario de registro y completa los datos de tu empresa: nombre, categoría, servicios, teléfono, correo y sitio web. Nuestro equipo revisa la solicitud y la publica una vez verificada.</p>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Global Footer -->
  <?php include 'includes/footer.php'; ?>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('.faq-btn').forEach(btn => {
        btn.addEventListener('click', () => {
          const answer = btn.nextElementSibling;
          const icon = btn.querySelector('.faq-icon');
          const isOpen = !answer.classList.contains('hidden');
          document.querySelectorAll('.faq-answer').forEach(a => a.classList.add('hidden'));
          document.querySelectorAll('.faq-icon').forEach(i => i.classList.remove('rotate-180'));
          if (!isOpen) {
            answer.classList.remove('hidden');
            icon.classList.add('rotate-180');
          }
        });
      });
    });
  </script>

</body>
</html>
