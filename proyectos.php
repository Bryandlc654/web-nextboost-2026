<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portafolio de Desarrollo Web Perú | Next Boost</title>
  <meta name="description" content="Portafolio de desarrollo web en Perú. Proyectos reales de sitios web, tiendas online y aplicaciones. Resultados que impulsan negocios." />
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <link rel="canonical" href="https://nextboost.business/proyectos.php" />
  <link rel="alternate" href="https://nextboost.business/proyectos.php" hreflang="es-PE" />
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://nextboost.business/proyectos.php" />
  <meta property="og:title" content="Portafolio de Desarrollo Web Perú | Next Boost" />
  <meta property="og:description" content="Portafolio de desarrollo web en Perú. Proyectos reales de sitios web, tiendas online y aplicaciones. Resultados que impulsan negocios." />
  <meta property="og:image" content="https://nextboost.business/imagenes-web/next-boost.png" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:url" content="https://nextboost.business/proyectos.php" />
  <meta name="twitter:title" content="Portafolio de Desarrollo Web Perú | Next Boost" />
  <meta name="twitter:description" content="Portafolio de desarrollo web en Perú. Proyectos reales de sitios web, tiendas online y aplicaciones. Resultados que impulsan negocios." />
  <meta name="twitter:image" content="https://nextboost.business/imagenes-web/next-boost.png" />

  <!-- Datos Estructurados JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "CollectionPage",
        "@id": "https://nextboost.business/proyectos.php/#collection",
        "url": "https://nextboost.business/proyectos.php",
        "name": "Portafolio de Desarrollo Web Perú | Next Boost",
        "description": "Portafolio de desarrollo web en Perú. Proyectos reales de sitios web, tiendas online y aplicaciones web.",
        "mainEntity": {
          "@type": "ItemList",
          "itemListElement": []
        }
      }
    ]
  }
  </script>

  <link rel="stylesheet" href="assets/css/tailwind.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  
  <style>
    body { font-family: 'Hanken Grotesk', sans-serif; background: #000; color: #fff; overflow-x: hidden; }
    .gradient-text {
      background: linear-gradient(90deg, #3b82f6, #00f2fe, #2dd4bf, #3b82f6);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-size: 300% 300%;
      animation: gradientShift 6s ease infinite;
    }
    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .grid-bg {
      background-image:
        linear-gradient(to right, rgba(255,255,255,0.1) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255,255,255,0.1) 1px, transparent 1px);
      background-size: 60px 60px;
      mask-image: linear-gradient(to right, transparent 0%, black 100%);
      -webkit-mask-image: linear-gradient(to right, transparent 0%, black 100%);
    }
    .animate-in {
      opacity: 0;
      transform: translateY(24px);
      filter: blur(6px);
      animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
    .animate-in-d1 { animation-delay: 0.1s; }
    .animate-in-d2 { animation-delay: 0.25s; }
    .animate-in-d3 { animation-delay: 0.4s; }
    .animate-in-d4 { animation-delay: 0.55s; }
    @keyframes fadeInUp {
      to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    .glass-card {
      background: rgba(10, 10, 10, 0.4);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.06);
      position: relative;
      overflow: hidden;
      transition: border-color 0.3s ease, box-shadow 0.3s ease, transform 0.1s ease;
    }
    .glass-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(800px circle at var(--mouse-x, 0) var(--mouse-y, 0), rgba(59, 130, 246, 0.06), transparent 40%);
      z-index: 1;
      pointer-events: none;
    }
    .glass-card:hover {
      border-color: rgba(59, 130, 246, 0.25);
      box-shadow: 0 10px 40px -10px rgba(59, 130, 246, 0.15);
    }
    .glass-card * {
      position: relative;
      z-index: 2;
    }
    .glow-pulse {
      animation: glowPulse 3s ease-in-out infinite;
    }
    @keyframes glowPulse {
      0%, 100% { opacity: 0.4; filter: blur(120px) scale(1); }
      50% { opacity: 0.7; filter: blur(100px) scale(1.1); }
    }
    .nav-link {
      position: relative;
      transition: color 0.3s ease;
    }
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0;
      height: 2px;
      background: linear-gradient(90deg, #3b82f6, #2dd4bf);
      transition: width 0.3s ease;
    }
    .nav-link:hover::after {
      width: 100%;
    }
    .badge-gradient {
      background: linear-gradient(90deg, rgba(59, 130, 246, 0.08), rgba(45, 212, 191, 0.08));
      border: 1px solid rgba(59, 130, 246, 0.2);
      position: relative;
      overflow: hidden;
      border-radius: 0px;
    }
    .badge-gradient::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.08), transparent);
      transform: translateX(-100%);
      animation: badgeShine 3s infinite linear;
    }
    @keyframes badgeShine {
      0% { transform: translateX(-100%); }
      40%, 100% { transform: translateX(100%); }
    }
    .footer-glow-border {
      position: relative;
    }
    .footer-glow-border::before {
      content: '';
      position: absolute;
      top: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 70%;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.4), rgba(45, 212, 191, 0.4), transparent);
    }
    .project-card-item {
      transition: opacity 0.3s ease, transform 0.3s ease;
    }
  </style>
</head>
<body>

  <!-- Glow Background -->
  <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
    <div class="absolute -top-40 -left-40 w-[600px] h-[600px] bg-blue-600/10 rounded-full glow-pulse"></div>
    <div class="absolute bottom-[10%] -right-40 w-[500px] h-[500px] bg-teal-500/5 rounded-full glow-pulse" style="animation-delay: -1.5s;"></div>
    <div class="absolute inset-0 grid-bg"></div>
  </div>

  <?php include 'includes/header.php'; ?>

  <!-- Hero Portafolio -->
  <main class="relative z-10 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 py-16 lg:py-24 text-center">
    <div class="inline-flex items-center gap-2.5 px-4 py-1.5 badge-gradient text-xs font-medium text-blue-300 animate-in mb-6">
      <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
      <span class="tracking-wide">Casos de Éxito & Desarrollos Activos</span>
    </div>
    <h1 class="text-5xl md:text-7xl font-semibold leading-[1.1] tracking-tight animate-in animate-in-d1 max-w-4xl mx-auto">
      Portafolio de desarrollo web
      <br/>
      <span class="gradient-text">en Perú</span>
    </h1>
    <p class="text-base md:text-lg text-gray-400 max-w-2xl mx-auto leading-relaxed mt-6 animate-in animate-in-d2">
      Explora nuestras últimas integraciones de diseño de vanguardia y código optimizado. Filtra por categoría para ver los stacks técnicos que implementamos.
    </p>

    <!-- Category Filters (generadas desde projects.json) -->
    <div id="filters" class="flex flex-wrap justify-center gap-3 mt-12 mb-16 animate-in animate-in-d3"></div>

    <!-- Projects Grid (Real Projects from JSON) -->
    <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-left animate-in animate-in-d4">
      <div class="col-span-full py-16 text-center text-sm text-gray-500">Cargando proyectos...</div>

    </div>

    <!-- Pagination -->
    <div class="flex flex-col items-center gap-4 mt-12 animate-in animate-in-d4">
      <p id="pagination-info" class="text-xs text-gray-500 font-medium"></p>
      <div id="pagination" class="flex flex-wrap items-center justify-center gap-2"></div>
    </div>
  </main>

  <!-- CTA Section -->
  <section class="relative z-10 py-16 px-6 md:px-12 border-t border-white/5 overflow-hidden bg-black/45">
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 80% 50%, #3b82f6 0%, transparent 40%);"></div>
    <div class="max-w-5xl mx-auto relative">
      <div class="glass-card relative bg-gradient-to-r from-blue-950/20 via-[#141414] to-teal-950/20 border border-white/[0.08] rounded-3xl p-8 md:p-12 overflow-hidden hover:border-blue-500/20 hover:shadow-[0_20px_50px_-25px_rgba(59,130,246,0.2)] transition-all duration-500 group flex flex-col md:flex-row items-center justify-between gap-8">
        
        <!-- Background glows -->
        <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-blue-500/10 rounded-full blur-[100px] pointer-events-none group-hover:bg-blue-500/15 transition-colors"></div>
        <div class="absolute -left-20 -top-20 w-80 h-80 bg-teal-500/5 rounded-full blur-[100px] pointer-events-none"></div>

        <!-- Left: Text -->
        <div class="flex-1 space-y-4 text-center md:text-left relative z-10">
          <span class="inline-flex items-center gap-1.5 text-[10px] uppercase tracking-wider text-blue-400 font-bold bg-blue-400/10 px-3 py-1 rounded-full border border-blue-400/20">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-400 animate-pulse"></span>Contacto Directo
          </span>
          <h3 class="text-2xl md:text-4xl font-semibold text-white tracking-tight leading-tight">
            ¿Tienes un proyecto en mente?
          </h3>
          <p class="text-sm text-gray-400 leading-relaxed max-w-xl">
            Cuéntanos tu proyecto. Diseñamos y desarrollamos soluciones web de alto rendimiento y diseño de vanguardia.
          </p>
        </div>

        <!-- Right: Action Button -->
        <div class="relative z-10 flex flex-col items-center gap-4 shrink-0">
          <a href="contacto.php" class="inline-flex items-center gap-3 bg-white text-black px-8 py-4 text-sm font-bold rounded-none hover:bg-gray-200 transition-all btn-primary group/btn shadow-lg">
            Contáctanos
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
      // 3D Tilt effect & Glare mouse tracker for glass cards
      const glassCards = document.querySelectorAll('.glass-card');
      glassCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
          const rect = card.getBoundingClientRect();
          const x = e.clientX - rect.left;
          const y = e.clientY - rect.top;
          
          card.style.setProperty('--mouse-x', `${x}px`);
          card.style.setProperty('--mouse-y', `${y}px`);
          
          const xc = rect.width / 2;
          const yc = rect.height / 2;
          
          const angleX = (yc - y) / 15;
          const angleY = (x - xc) / 15;
          
          card.style.transform = `perspective(800px) rotateX(${angleX}deg) rotateY(${angleY}deg) translateY(-2px)`;
        });
        
        card.addEventListener('mouseleave', () => {
          card.style.transform = '';
        });
      });

      // Load projects from projects.json + Filter + Pagination
      const grid = document.getElementById('projects-grid');
      const filtersContainer = document.getElementById('filters');
      const paginationContainer = document.getElementById('pagination');
      const paginationInfo = document.getElementById('pagination-info');
      const itemsPerPage = 6;
      let projectCards = [];
      let activeFilter = 'all';
      let currentPage = 1;

      function escapeHtml(str) {
        return String(str).replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]));
      }

      function fallbackImage(title) {
        const t = escapeHtml(title || 'Proyecto Next Boost');
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

      function buildCard(p) {
        const catKey = p.category.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '');
        const techs = (p.technologies || []).map(t => `<span class="text-[9px] bg-white/5 text-gray-300 px-2 py-0.5 rounded border border-white/5">${escapeHtml(t)}</span>`).join('');
        const href = p.href && p.href !== '-' ? p.href : '#';
        const image = p.image && p.image !== '' && p.image !== '.' ? p.image : fallbackImage(p.title);
        return `
        <div data-categories="${catKey} all" class="project-card-item glass-card p-6 rounded-2xl flex flex-col justify-between hover:border-blue-500/30 transition-all group">
          <a href="${escapeHtml(href)}" target="_blank" rel="noopener noreferrer" class="block mb-6 overflow-hidden rounded-xl border border-white/10 group-hover:border-blue-500/40 transition-all">
            <img src="${escapeHtml(image)}" alt="${escapeHtml(p.title)} - caso de éxito Next Boost" loading="lazy" class="w-full h-44 object-cover object-top transition-transform duration-500 group-hover:scale-105">
          </a>
          <div>
            <div class="flex justify-between items-center mb-6">
              <span class="text-[10px] text-teal-400 bg-teal-500/10 border border-teal-500/20 px-2.5 py-0.5 rounded-full font-medium uppercase flex items-center gap-1">
                <span class="w-1.5 h-1.5 rounded-full bg-teal-400 animate-pulse"></span>En vivo
              </span>
              <span class="text-[10px] text-blue-400 font-bold bg-blue-500/10 px-2.5 py-0.5 rounded-full border border-blue-500/20">${escapeHtml(p.category)}</span>
            </div>
            <h3 class="text-xl font-bold text-white mb-2 group-hover:text-blue-400 transition-colors">
              <a href="${escapeHtml(href)}" target="_blank" rel="noopener noreferrer">${escapeHtml(p.title)}</a>
            </h3>
            <p class="text-xs text-gray-400 leading-relaxed mb-6">${escapeHtml(p.description || '')}</p>
          </div>
          <div class="border-t border-white/5 pt-4">
            <div class="flex flex-wrap gap-1 mb-4">${techs}</div>
            <div class="grid grid-cols-2 gap-2 text-xs text-gray-400 mb-4">
              <div><span class="text-[9px] uppercase text-gray-500 block mb-0.5">Cliente</span>${escapeHtml(p.client || '-')}</div>
              <div><span class="text-[9px] uppercase text-gray-500 block mb-0.5">Entrega</span>${escapeHtml(p.delivery_days || '-')} días</div>
            </div>
            <div class="flex items-center justify-between pt-3 border-t border-white/5">
              <span class="text-[11px] font-bold text-teal-400">${escapeHtml(p.result_metric || '')}</span>
              <a href="${escapeHtml(href)}" target="_blank" rel="noopener noreferrer" class="text-xs text-white hover:text-blue-400 font-semibold flex items-center gap-1">Visitar web ↗</a>
            </div>
          </div>
        </div>`;
      }

      function buildFilters(categories) {
        filtersContainer.innerHTML = `<button data-filter="all" class="filter-btn px-6 py-2.5 text-xs md:text-sm rounded-none border transition-all duration-300 bg-gradient-to-r from-blue-500 to-teal-400 text-black font-bold shadow-md">Todos</button>` +
          categories.map(cat => `<button data-filter="${cat.key}" class="filter-btn px-6 py-2.5 text-xs md:text-sm rounded-none border border-white/10 bg-white/5 text-gray-400 hover:text-white hover:border-white/30 transition-all duration-300">${escapeHtml(cat.label)}</button>`).join('');

        filtersContainer.querySelectorAll('.filter-btn').forEach(btn => {
          btn.addEventListener('click', () => {
            filtersContainer.querySelectorAll('.filter-btn').forEach(b => b.className = 'filter-btn px-6 py-2.5 text-xs md:text-sm rounded-none border border-white/10 bg-white/5 text-gray-400 hover:text-white hover:border-white/30 transition-all duration-300');
            btn.className = 'filter-btn px-6 py-2.5 text-xs md:text-sm rounded-none border transition-all duration-300 bg-gradient-to-r from-blue-500 to-teal-400 text-black font-bold shadow-md';
            activeFilter = btn.dataset.filter;
            currentPage = 1;
            renderGrid();
          });
        });
      }

      function getFilteredCards() {
        return projectCards.filter(card => {
          if (activeFilter === 'all') return true;
          return card.dataset.categories.split(' ').includes(activeFilter);
        });
      }

      function renderPagination(totalPages, totalItems) {
        let html = `<button type="button" data-page="${currentPage - 1}" class="page-btn px-4 py-2.5 text-xs rounded-none border border-white/10 bg-white/5 text-gray-400 hover:text-white hover:border-white/30 transition-all duration-300 ${currentPage <= 1 ? 'opacity-40 pointer-events-none' : ''}">‹ Anterior</button>`;
        for (let i = 1; i <= totalPages; i++) {
          const active = i === currentPage;
          html += `<button type="button" data-page="${i}" class="page-btn px-4 py-2.5 text-xs rounded-none border transition-all duration-300 ${active ? 'bg-gradient-to-r from-blue-500 to-teal-400 text-black font-bold shadow-md' : 'border-white/10 bg-white/5 text-gray-400 hover:text-white hover:border-white/30'}">${i}</button>`;
        }
        html += `<button type="button" data-page="${currentPage + 1}" class="page-btn px-4 py-2.5 text-xs rounded-none border border-white/10 bg-white/5 text-gray-400 hover:text-white hover:border-white/30 transition-all duration-300 ${currentPage >= totalPages ? 'opacity-40 pointer-events-none' : ''}">Siguiente ›</button>`;
        paginationContainer.innerHTML = html;

        const start = totalItems === 0 ? 0 : (currentPage - 1) * itemsPerPage + 1;
        const end = Math.min(currentPage * itemsPerPage, totalItems);
        paginationInfo.textContent = totalItems === 0 ? 'Sin proyectos para mostrar' : `Mostrando ${start}–${end} de ${totalItems} proyectos`;
      }

      function renderGrid() {
        const visible = getFilteredCards();
        const totalPages = Math.max(1, Math.ceil(visible.length / itemsPerPage));
        if (currentPage > totalPages) currentPage = totalPages;
        const start = (currentPage - 1) * itemsPerPage;
        const pageItems = visible.slice(start, start + itemsPerPage);

        projectCards.forEach(card => {
          if (pageItems.includes(card)) {
            card.style.display = 'flex';
            card.style.opacity = '1';
            card.style.transform = 'scale(1)';
          } else {
            card.style.display = 'none';
          }
        });

        renderPagination(totalPages, visible.length);
      }

      paginationContainer.addEventListener('click', (e) => {
        const btn = e.target.closest('.page-btn');
        if (!btn) return;
        const page = parseInt(btn.dataset.page, 10);
        const visible = getFilteredCards();
        const totalPages = Math.max(1, Math.ceil(visible.length / itemsPerPage));
        if (!page || page < 1 || page > totalPages) return;
        currentPage = page;
        renderGrid();
        grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
      });

      async function loadProjects() {
        grid.innerHTML = '<div class="col-span-full py-16 text-center text-sm text-gray-500">Cargando proyectos...</div>';
        try {
          const res = await fetch('projects.json', { cache: 'no-store' });
          const json = await res.json();
          const projects = (json.data || []).filter(p => p.published === 1);
          grid.innerHTML = projects.map(buildCard).join('');
          projectCards = Array.from(grid.querySelectorAll('.project-card-item'));

          const cats = [];
          const seen = new Set();
          projects.forEach(p => {
            const key = p.category.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '');
            if (!seen.has(key)) {
              seen.add(key);
              cats.push({ key, label: p.category });
            }
          });
          buildFilters(cats);
          renderGrid();
        } catch (err) {
          grid.innerHTML = '<div class="col-span-full py-16 text-center text-sm text-gray-500">No se pudieron cargar los proyectos.</div>';
        }
      }

      loadProjects();
    });
  </script>

</body>
</html>
