<?php
  $current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- Topbar Banner -->
<div class="relative z-50 w-full border-b border-blue-500/30 bg-gradient-to-r from-blue-950 via-slate-900 to-teal-950 backdrop-blur-md py-2.5 px-8 md:px-16 lg:px-20 flex items-center justify-between text-xs overflow-hidden shadow-lg shadow-blue-950/40">
  <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(59,130,246,0.3),transparent_50%,rgba(45,212,191,0.3))] pointer-events-none"></div>
  <div class="flex items-center gap-3 relative z-10 mx-auto md:mx-0">
    <span class="text-[9px] uppercase tracking-wider font-extrabold bg-gradient-to-r from-cyan-400 via-blue-400 to-teal-300 text-black px-2.5 py-0.5 rounded-full flex items-center gap-1.5 shadow-md shadow-cyan-500/20">
      <span class="w-1.5 h-1.5 rounded-full bg-black animate-ping"></span>Nuevo
    </span>
    <span class="text-white font-medium text-[11px] md:text-xs tracking-wide">
      Crea tu web gratis. <a href="https://creatuwebgratis.nextboost.business" target="_blank" rel="noopener noreferrer" class="underline hover:text-teal-300 transition-colors">Click aquí</a>
    </span>
  </div>
  <div class="hidden md:flex items-center gap-6 relative z-10">
    <a href="agencia-desarrollo-web-marca-blanca.php" class="text-teal-300 hover:text-white font-bold transition-all text-[11px] flex items-center gap-1.5 group">
      Conocer Marca Blanca <span class="transition-transform group-hover:translate-x-1">→</span>
    </a>
    <span class="w-px h-3.5 bg-white/20"></span>
    <div class="flex items-center gap-1.5 text-emerald-400 font-semibold text-[11px]">
      <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
      Soporte online activo
    </div>
  </div>
</div>

<!-- Main Header & Navigation -->
<header class="relative z-50 flex items-stretch justify-between pl-8 md:pl-16 lg:pl-20 pr-0 border-b border-white/10 bg-black/50 backdrop-blur-sm animate-in h-16 md:h-20">
  <div class="flex items-center gap-8 lg:gap-12 py-3">
    <a href="index.php" class="flex items-center group shrink-0">
      <span class="text-2xl font-extrabold tracking-tight bg-gradient-to-r from-white via-gray-200 to-blue-400 bg-clip-text text-transparent group-hover:opacity-90 transition-opacity">Next <span class="gradient-text">Boost</span></span>
    </a>
    <nav class="hidden lg:flex items-center gap-8 text-sm font-medium text-gray-400">
      <a href="index.php" class="nav-link <?php echo ($current_page == 'index.php') ? 'text-white font-semibold' : 'hover:text-white transition-colors'; ?>">Inicio</a>
      
      <!-- Dropdown Servicios -->
      <div class="relative group/dropdown py-5 flex items-center">
        <a href="index.php#servicios" class="nav-link hover:text-white transition-colors flex items-center gap-1.5 py-2">
          Servicios
          <svg class="w-3.5 h-3.5 text-gray-400 group-hover/dropdown:text-white group-hover/dropdown:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
          </svg>
        </a>

        <!-- Dropdown Menu Box -->
        <div class="absolute top-full left-0 w-[540px] bg-[#0d0d11]/95 backdrop-blur-xl border border-white/10 shadow-[0_20px_50px_rgba(0,0,0,0.85)] rounded-none p-3.5 opacity-0 invisible translate-y-2 group-hover/dropdown:opacity-100 group-hover/dropdown:visible group-hover/dropdown:translate-y-0 transition-all duration-300 z-50">
          <div class="grid grid-cols-2 gap-1.5">
            
            <!-- Item 1: Desarrollo Web -->
            <a href="desarrollo-web.php" class="flex items-start gap-3 p-2.5 rounded-none hover:bg-white/5 transition-all group/item border border-transparent hover:border-blue-500/20">
              <div class="w-8 h-8 rounded-none bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 shrink-0 group-hover/item:bg-blue-500 group-hover/item:text-black transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </div>
              <div>
                <span class="text-xs font-semibold text-white group-hover/item:text-blue-400 transition-colors block">Desarrollo Web</span>
                <p class="text-[11px] text-gray-400 leading-snug mt-0.5">Sitios web modernos de alto rendimiento y conversión.</p>
              </div>
            </a>

            <!-- Item 2: Ecommerce -->
            <a href="ecommerce.php" class="flex items-start gap-3 p-2.5 rounded-none hover:bg-white/5 transition-all group/item border border-transparent hover:border-teal-500/20">
              <div class="w-8 h-8 rounded-none bg-teal-500/10 border border-teal-500/20 flex items-center justify-center text-teal-400 shrink-0 group-hover/item:bg-teal-400 group-hover/item:text-black transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </div>
              <div>
                <span class="text-xs font-semibold text-white group-hover/item:text-teal-400 transition-colors block">Ecommerce</span>
                <p class="text-[11px] text-gray-400 leading-snug mt-0.5">Tiendas virtuales optimizadas para ventas.</p>
              </div>
            </a>

            <!-- Item 3: Hosting cPanel -->
            <a href="hosting-web.php" class="flex items-start gap-3 p-2.5 rounded-none hover:bg-white/5 transition-all group/item border border-transparent hover:border-purple-500/20">
              <div class="w-8 h-8 rounded-none bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 shrink-0 group-hover/item:bg-purple-400 group-hover/item:text-black transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </div>
              <div>
                <span class="text-xs font-semibold text-white group-hover/item:text-purple-400 transition-colors block">Hosting cPanel</span>
                <p class="text-[11px] text-gray-400 leading-snug mt-0.5">Servidores rápidos con cPanel, SSL y copias diarias.</p>
              </div>
            </a>

            <!-- Item 4: Gestión de Redes Sociales -->
            <a href="redes-sociales.php" class="flex items-start gap-3 p-2.5 rounded-none hover:bg-white/5 transition-all group/item border border-transparent hover:border-pink-500/20">
              <div class="w-8 h-8 rounded-none bg-pink-500/10 border border-pink-500/20 flex items-center justify-center text-pink-400 shrink-0 group-hover/item:bg-pink-500 group-hover/item:text-black transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </div>
              <div>
                <span class="text-xs font-semibold text-white group-hover/item:text-pink-400 transition-colors block">Gestión de Redes Sociales</span>
                <p class="text-[11px] text-gray-400 leading-snug mt-0.5">Estrategia de contenidos y crecimiento de marca.</p>
              </div>
            </a>

            <!-- Item 5: Posicionamiento SEO -->
            <a href="posicionamiento-seo.php" class="flex items-start gap-3 p-2.5 rounded-none hover:bg-white/5 transition-all group/item border border-transparent hover:border-emerald-500/20">
              <div class="w-8 h-8 rounded-none bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 shrink-0 group-hover/item:bg-emerald-400 group-hover/item:text-black transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </div>
              <div>
                <span class="text-xs font-semibold text-white group-hover/item:text-emerald-400 transition-colors block">Posicionamiento SEO</span>
                <p class="text-[11px] text-gray-400 leading-snug mt-0.5">Optimización para primeros lugares en Google.</p>
              </div>
            </a>

            <!-- Item 6: Desarrollo de Sistemas a la Medida -->
            <a href="desarrollo-software.php" class="flex items-start gap-3 p-2.5 rounded-none hover:bg-white/5 transition-all group/item border border-transparent hover:border-cyan-500/20">
              <div class="w-8 h-8 rounded-none bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 shrink-0 group-hover/item:bg-cyan-400 group-hover/item:text-black transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </div>
              <div>
                <span class="text-xs font-semibold text-white group-hover/item:text-cyan-400 transition-colors block">Sistemas a la Medida</span>
                <p class="text-[11px] text-gray-400 leading-snug mt-0.5">Software empresarial, CRMs y plataformas SaaS.</p>
              </div>
            </a>

          </div>
        </div>
      </div>
      <a href="proyectos.php" class="nav-link <?php echo ($current_page == 'proyectos.php') ? 'text-white font-semibold' : 'hover:text-white transition-colors'; ?>">Portafolio</a>
      <a href="directorio-empresas.php" class="nav-link <?php echo ($current_page == 'directorio-empresas.php') ? 'text-white font-semibold' : 'hover:text-white transition-colors'; ?>">Directorio</a>
      <a href="blog.php" class="nav-link <?php echo ($current_page == 'blog.php') ? 'text-white font-semibold' : 'hover:text-white transition-colors'; ?>">Blog</a>
      <a href="nosotros.php" class="nav-link <?php echo ($current_page == 'nosotros.php') ? 'text-white font-semibold' : 'hover:text-white transition-colors'; ?>">Nosotros</a>
      <a href="agencia-desarrollo-web-marca-blanca.php" class="nav-link <?php echo ($current_page == 'agencia-desarrollo-web-marca-blanca.php') ? 'text-white font-semibold' : 'hover:text-white transition-colors'; ?>">Marca Blanca</a>
    </nav>
  </div>
  
  <div class="flex items-center h-full">
    <!-- Mobile Hamburger Button -->
    <button id="mobile-menu-btn" class="lg:hidden text-white px-5 border-l border-white/10 h-full flex items-center justify-center hover:bg-white/5 transition-colors">
      <svg aria-hidden="true" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>

    <!-- Minimalist White CTA Button -->
    <a href="contacto.php" class="bg-white hover:bg-gray-100 text-black px-6 md:px-8 h-full flex items-center gap-3 text-xs md:text-sm tracking-tight transition-colors duration-300 group shrink-0">
      <span class="text-gray-500 font-normal hidden sm:inline">¿Proyecto nuevo?</span>
      <span class="font-bold text-black flex items-center gap-1.5">
        Cotizar
        <svg aria-hidden="true" class="w-3.5 h-3.5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </span>
    </a>
  </div>
</header>

<!-- Mobile Sidebar Menu -->
<div id="mobile-sidebar-backdrop" class="fixed inset-0 bg-black/80 backdrop-blur-sm z-[60] hidden opacity-0 transition-opacity duration-300"></div>
<div id="mobile-sidebar" class="fixed top-0 right-0 w-[280px] h-full bg-[#0a0a0c] border-l border-white/10 z-[70] transform translate-x-full transition-transform duration-300 overflow-y-auto">
  <div class="p-6 flex flex-col h-full">
    <div class="flex items-center justify-between mb-8">
      <span class="text-xl font-extrabold tracking-tight bg-gradient-to-r from-white via-gray-200 to-blue-400 bg-clip-text text-transparent">Next <span class="gradient-text">Boost</span></span>
      <button id="close-sidebar-btn" class="text-gray-400 hover:text-white transition-colors">
        <svg aria-hidden="true" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
      </button>
    </div>
    
    <nav class="flex flex-col gap-6 text-sm font-medium">
      <a href="index.php" class="text-gray-300 hover:text-white transition-colors">Inicio</a>
      <div class="flex flex-col gap-3">
        <span class="text-gray-500 text-xs uppercase tracking-wider">Servicios</span>
        <div class="flex flex-col gap-3 pl-4 border-l border-white/10">
          <a href="desarrollo-web.php" class="text-gray-300 hover:text-blue-400 transition-colors">Desarrollo Web</a>
          <a href="ecommerce.php" class="text-gray-300 hover:text-teal-400 transition-colors">Ecommerce</a>
          <a href="hosting-web.php" class="text-gray-300 hover:text-purple-400 transition-colors">Hosting cPanel</a>
          <a href="redes-sociales.php" class="text-gray-300 hover:text-pink-400 transition-colors">Redes Sociales</a>
          <a href="posicionamiento-seo.php" class="text-gray-300 hover:text-emerald-400 transition-colors">SEO</a>
          <a href="desarrollo-software.php" class="text-gray-300 hover:text-cyan-400 transition-colors">Sistemas a Medida</a>
          <a href="como-crear-una-pagina-web-gratis.php" class="text-gray-300 hover:text-emerald-400 transition-colors">Crear Web Gratis</a>
        </div>
      </div>
      <a href="proyectos.php" class="text-gray-300 hover:text-white transition-colors">Portafolio</a>
      <a href="directorio-empresas.php" class="text-gray-300 hover:text-white transition-colors">Directorio de Empresas</a>
      <a href="blog.php" class="text-gray-300 hover:text-white transition-colors">Blog</a>
      <a href="nosotros.php" class="text-gray-300 hover:text-white transition-colors">Nosotros</a>
      <a href="agencia-desarrollo-web-marca-blanca.php" class="text-teal-400 hover:text-teal-300 transition-colors font-bold">Marca Blanca</a>
    </nav>
    
    <div class="mt-auto pt-8">
      <a href="contacto.php" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold py-3 rounded-lg flex items-center justify-center gap-2 transition-colors">
        Cotizar Proyecto
      </a>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const closeBtn = document.getElementById('close-sidebar-btn');
    const sidebar = document.getElementById('mobile-sidebar');
    const backdrop = document.getElementById('mobile-sidebar-backdrop');

    function openSidebar() {
      if(!backdrop || !sidebar) return;
      backdrop.classList.remove('hidden');
      void backdrop.offsetWidth; // trigger reflow
      backdrop.classList.remove('opacity-0');
      sidebar.classList.remove('translate-x-full');
      document.body.style.overflow = 'hidden';
    }

    function closeSidebar() {
      if(!backdrop || !sidebar) return;
      backdrop.classList.add('opacity-0');
      sidebar.classList.add('translate-x-full');
      setTimeout(() => {
        backdrop.classList.add('hidden');
        document.body.style.overflow = '';
      }, 300);
    }

    if(mobileBtn) mobileBtn.addEventListener('click', openSidebar);
    if(closeBtn) closeBtn.addEventListener('click', closeSidebar);
    if(backdrop) backdrop.addEventListener('click', closeSidebar);
  });
</script>