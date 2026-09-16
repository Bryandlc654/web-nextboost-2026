<?php
  $page_title = "Casos de Éxito Perú | Resultados Reales | Next Boost";
  $page_description = "Casos de éxito en Perú: proyectos reales de desarrollo web, ecommerce y software a medida con resultados medibles para nuestros clientes.";
  $og_url = "https://nextboost.business/casos-de-exito.php";
?>
<!DOCTYPE html>
<html lang="es" class="dark scroll-smooth">
<?php include 'includes/head.php'; ?>

<!-- Datos Estructurados JSON-LD (SEO) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "CollectionPage",
      "@id": "https://nextboost.business/casos-de-exito.php/#collection",
      "url": "https://nextboost.business/casos-de-exito.php",
      "name": "Casos de Éxito Perú | Next Boost",
      "description": "Casos de éxito en Perú: proyectos reales de desarrollo web, ecommerce y software a medida con resultados medibles.",
      "mainEntity": {
        "@type": "ItemList",
        "itemListElement": []
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://nextboost.business/casos-de-exito.php/#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://nextboost.business/" },
        { "@type": "ListItem", "position": 2, "name": "Casos de Éxito", "item": "https://nextboost.business/casos-de-exito.php" }
      ]
    }
  ]
}
</script>

<!-- Glow Background -->
<div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
  <div class="absolute -top-40 -left-40 w-[600px] h-[600px] bg-blue-600/10 rounded-full glow-pulse"></div>
  <div class="absolute bottom-[10%] -right-40 w-[500px] h-[500px] bg-teal-500/5 rounded-full glow-pulse" style="animation-delay: -1.5s;"></div>
  <div class="absolute inset-0 grid-bg"></div>
</div>

<?php include 'includes/header.php'; ?>

<!-- Hero Casos de Éxito -->
<main class="relative z-10 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 py-16 lg:py-24 text-center">
  <div class="inline-flex items-center gap-2.5 px-4 py-1.5 badge-gradient text-xs font-medium text-blue-300 mb-6">
    <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
    <span class="tracking-wide">Resultados Reales & Proyectos Entregados</span>
  </div>
  <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-white leading-[1.1] max-w-4xl mx-auto">
    Casos de éxito que
    <br/>
    <span class="gradient-text">impulsan negocios en Perú</span>
  </h1>
  <p class="text-base md:text-lg text-gray-400 max-w-2xl mx-auto leading-relaxed mt-6">
    Cada proyecto es un caso de éxito: te mostramos el problema de cada cliente, la solución que implementamos y los resultados medibles que logramos.
  </p>

  <!-- Stats -->
  <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-14 max-w-4xl mx-auto">
    <div class="glass-card p-4 rounded-none border border-emerald-500/20">
      <span class="text-2xl md:text-3xl font-extrabold text-emerald-400 block" data-stat="sistemas">+0</span>
      <span class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Sistemas a Medida</span>
    </div>
    <div class="glass-card p-4 rounded-none border border-blue-500/20">
      <span class="text-2xl md:text-3xl font-extrabold text-blue-400 block">CRM + ERP</span>
      <span class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Plataformas de Software</span>
    </div>
    <div class="glass-card p-4 rounded-none border border-teal-500/20">
      <span class="text-2xl md:text-3xl font-extrabold text-teal-300 block">100%</span>
      <span class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Operación Centralizada</span>
    </div>
    <div class="glass-card p-4 rounded-none border border-purple-500/20">
      <span class="text-2xl md:text-3xl font-extrabold text-purple-400 block">24/7</span>
      <span class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Soporte Continuo</span>
    </div>
  </div>

  <!-- Cases Grid (Casos Reales desde casos-exito.json) -->
  <div id="cases-grid" class="grid grid-cols-1 lg:grid-cols-2 gap-8 text-left mt-16 max-w-6xl mx-auto">
    <div class="col-span-full py-16 text-center text-sm text-gray-500">Cargando casos de éxito...</div>
  </div>
</main>

<!-- CTA Section -->
<section class="relative z-10 py-16 px-6 md:px-12 border-t border-white/5 overflow-hidden bg-black/45">
  <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 80% 50%, #3b82f6 0%, transparent 40%);"></div>
  <div class="max-w-5xl mx-auto relative">
    <div class="glass-card relative bg-gradient-to-r from-blue-950/20 via-[#141414] to-teal-950/20 border border-white/[0.08] rounded-3xl p-8 md:p-12 overflow-hidden hover:border-blue-500/20 hover:shadow-[0_20px_50px_-25px_rgba(59,130,246,0.2)] transition-all duration-500 group flex flex-col md:flex-row items-center justify-between gap-8">
      <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-blue-500/10 rounded-full blur-[100px] pointer-events-none group-hover:bg-blue-500/15 transition-colors"></div>
      <div class="absolute -left-20 -top-20 w-80 h-80 bg-teal-500/5 rounded-full blur-[100px] pointer-events-none"></div>

      <div class="flex-1 space-y-4 text-center md:text-left relative z-10">
        <span class="inline-flex items-center gap-1.5 text-[10px] uppercase tracking-wider text-blue-400 font-bold bg-blue-400/10 px-3 py-1 rounded-full border border-blue-400/20">
          <span class="w-1.5 h-1.5 rounded-full bg-blue-400 animate-pulse"></span>Contacto Directo
        </span>
        <h3 class="text-2xl md:text-4xl font-semibold text-white tracking-tight leading-tight">
          Tu proyecto puede ser el próximo caso de éxito
        </h3>
        <p class="text-sm text-gray-400 leading-relaxed max-w-xl">
          Cuéntanos tu negocio y obtén una propuesta con resultados proyectados. Diseñamos y desarrollamos soluciones web de alto rendimiento.
        </p>
      </div>

      <div class="relative z-10 flex flex-col items-center gap-4 shrink-0">
        <a href="contacto.php?ref=casos-exito" class="inline-flex items-center gap-3 bg-white text-black px-8 py-4 text-sm font-bold rounded-none hover:bg-gray-200 transition-all group/btn shadow-lg">
          Quiero Resultados
          <svg class="w-4 h-4 transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <span class="text-[10px] text-gray-500 uppercase tracking-widest font-semibold">Respuesta en menos de 24 horas</span>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const grid = document.getElementById('cases-grid');
    const statSistemas = document.querySelector('[data-stat="sistemas"]');

    function escapeHtml(str) {
      return String(str).replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]));
    }

    function fallbackImage(title) {
      const t = escapeHtml(title || 'Caso de éxito Next Boost');
      const svg = '<svg xmlns="http://www.w3.org/2000/svg" width="800" height="400">' +
        '<defs><linearGradient id="g" x1="0" y1="0" x2="1" y2="1">' +
        '<stop offset="0" stop-color="#0f172a"/><stop offset="0.5" stop-color="#111827"/><stop offset="1" stop-color="#0e7490"/>' +
        '</linearGradient></defs>' +
        '<rect width="800" height="400" fill="url(#g)"/>' +
        '<text x="50%" y="46%" font-family="Arial, sans-serif" font-size="30" fill="#e2e8f0" text-anchor="middle" font-weight="bold">' + t + '</text>' +
        '<text x="50%" y="58%" font-family="Arial, sans-serif" font-size="18" fill="#38bdf8" text-anchor="middle">Proyecto realizado por Next Boost</text>' +
        '</svg>';
      return 'data:image/svg+xml;charset=utf-8,' + encodeURIComponent(svg);
    }

    function buildBlock(label, text, color) {
      if (!text || text === '-') return '';
      return `<div class="mb-4">
        <span class="text-[9px] uppercase tracking-widest font-bold ${color}">${label}</span>
        <p class="text-xs text-gray-400 leading-relaxed mt-1">${escapeHtml(text)}</p>
      </div>`;
    }

    function buildCard(p) {
      const techs = (p.technologies || []).map(t => `<span class="text-[9px] bg-white/5 text-gray-300 px-2 py-0.5 rounded border border-white/5">${escapeHtml(t)}</span>`).join('');
      const hasLink = p.href && p.href !== '-' && p.href !== '';
      const image = p.image && p.image !== '' && p.image !== '.' ? p.image : fallbackImage(p.title);
      const metric = p.result_metric && p.result_metric !== '-' ? p.result_metric : '';
      const imgBlock = `<div class="mb-6 h-36 rounded-xl border border-white/10 bg-gradient-to-br from-white/10 to-white/0 flex items-center justify-center p-8 overflow-hidden group-hover:border-emerald-500/40 transition-all">
          <img src="${escapeHtml(image)}" alt="${escapeHtml(p.title)} - caso de éxito Next Boost" loading="lazy" class="max-h-full max-w-full object-contain">
        </div>`;
      const cta = hasLink
        ? `<a href="${escapeHtml(p.href)}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-xs font-bold text-white hover:text-emerald-400 transition-colors">Ver sistema ↗</a>`
        : `<a href="contacto.php?ref=casos-exito" class="inline-flex items-center gap-2 text-xs font-bold text-white hover:text-emerald-400 transition-colors">Cotiza tu sistema a medida ↗</a>`;
      return `
      <article class="glass-card p-6 md:p-8 rounded-2xl flex flex-col justify-between hover:border-emerald-500/30 transition-all group">
        <div>
          ${hasLink ? `<a href="${escapeHtml(p.href)}" target="_blank" rel="noopener noreferrer" class="block">${imgBlock}</a>` : imgBlock}
          <div class="flex justify-between items-center mb-4">
            <span class="text-[10px] text-emerald-400 bg-emerald-500/10 border border-emerald-500/20 px-2.5 py-0.5 rounded-full font-medium uppercase flex items-center gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>En producción
            </span>
            <span class="text-[10px] text-blue-400 font-bold bg-blue-500/10 px-2.5 py-0.5 rounded-full border border-blue-500/20">${escapeHtml(p.category)}</span>
          </div>
          <h3 class="text-lg md:text-xl font-bold text-white mb-1 group-hover:text-emerald-400 transition-colors">${escapeHtml(p.title)}</h3>
          <p class="text-[10px] uppercase tracking-wider text-gray-500 font-semibold mb-4">${escapeHtml(p.client || '-')}</p>

          ${buildBlock('Objetivo', p.objective, 'text-amber-400')}
          ${buildBlock('Problema', p.problem, 'text-red-400')}
          ${buildBlock('Solución', p.solution, 'text-blue-400')}
          ${buildBlock('Resultado', p.result, 'text-emerald-400')}

          ${metric ? `<div class="border-t border-white/5 pt-3 mb-4">
            <span class="inline-block text-xs font-black text-emerald-400 bg-emerald-500/10 border border-emerald-500/20 px-3 py-1.5 rounded-none">${escapeHtml(metric)}</span>
          </div>` : ''}
        </div>
        <div class="border-t border-white/5 pt-4">
          <div class="flex flex-wrap gap-1 mb-4">${techs}</div>
          <div class="flex items-center justify-between">
            <span class="text-xs text-gray-500">Entrega: <span class="text-gray-300 font-semibold">${p.delivery_days ? escapeHtml(p.delivery_days) + ' días' : 'A medida'}</span></span>
            ${cta}
          </div>
        </div>
      </article>`;
    }

    async function loadCases() {
      grid.innerHTML = '<div class="col-span-full py-16 text-center text-sm text-gray-500">Cargando casos de éxito...</div>';
      try {
        const res = await fetch('casos-exito.json', { cache: 'no-store' });
        const json = await res.json();
        const cases = (json.data || []).filter(p => p.published === 1);
        grid.innerHTML = cases.map(buildCard).join('');
        if (statSistemas) statSistemas.textContent = '+' + cases.length;
      } catch (err) {
        grid.innerHTML = '<div class="col-span-full py-16 text-center text-sm text-gray-500">No se pudieron cargar los casos de éxito.</div>';
      }
    }

    loadCases();
  });
</script>

</body>
</html>
