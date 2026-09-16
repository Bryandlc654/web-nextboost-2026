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

            <!-- Item 7: Casos de Éxito -->
            <a href="casos-de-exito.php" class="flex items-start gap-3 p-2.5 rounded-none hover:bg-white/5 transition-all group/item border border-transparent hover:border-amber-500/20">
              <div class="w-8 h-8 rounded-none bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 shrink-0 group-hover/item:bg-amber-400 group-hover/item:text-black transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </div>
              <div>
                <span class="text-xs font-semibold text-white group-hover/item:text-amber-400 transition-colors block">Casos de Éxito</span>
                <p class="text-[11px] text-gray-400 leading-snug mt-0.5">Resultados reales de clientes con problemas resueltos.</p>
              </div>
            </a>

            <!-- Item 8 (destacado IA): Web con IA y Chatbot -->
            <a href="pagina-web-con-inteligencia-artificial.php" class="flex items-start gap-3 p-2.5 rounded-none hover:bg-white/5 transition-all group/item border border-transparent hover:border-violet-500/20 md:col-span-2">
              <div class="w-8 h-8 rounded-none bg-violet-500/10 border border-violet-500/20 flex items-center justify-center text-violet-400 shrink-0 group-hover/item:bg-violet-400 group-hover/item:text-black transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
              </div>
              <div>
                <span class="text-xs font-semibold text-white group-hover/item:text-violet-400 transition-colors block">Web con Inteligencia Artificial y Chatbot</span>
                <p class="text-[11px] text-gray-400 leading-snug mt-0.5">Asistentes 24/7, captura de leads automática y ventas por IA.</p>
              </div>
            </a>

            <!-- Item 9 (local): Agencia Web Ica y Chincha -->
            <a href="agencia-de-desarrollo-web-en-ica-y-chincha.php" class="flex items-start gap-3 p-2.5 rounded-none hover:bg-white/5 transition-all group/item border border-transparent hover:border-teal-500/20 md:col-span-2">
              <div class="w-8 h-8 rounded-none bg-teal-500/10 border border-teal-500/20 flex items-center justify-center text-teal-400 shrink-0 group-hover/item:bg-teal-400 group-hover/item:text-black transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
              </div>
              <div>
                <span class="text-xs font-semibold text-white group-hover/item:text-teal-400 transition-colors block">Agencia Web en Ica y Chincha</span>
                <p class="text-[11px] text-gray-400 leading-snug mt-0.5">Desarrollo web y SEO local para negocios de la región Ica.</p>
              </div>
            </a>

            <!-- Item 10 (abogados): Página Web para Abogados -->
            <a href="pagina-web-para-abogados-peru.php" class="flex items-start gap-3 p-2.5 rounded-none hover:bg-white/5 transition-all group/item border border-transparent hover:border-amber-500/20 md:col-span-2">
              <div class="w-8 h-8 rounded-none bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 shrink-0 group-hover/item:bg-amber-400 group-hover/item:text-black transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v18m-4-14h8m-8 4h8m3 6V9a3 3 0 00-3-3h-1V5a1 1 0 00-1-1H8a1 1 0 00-1 1v1H6a3 3 0 00-3 3v9a2 2 0 002 2h14a2 2 0 002-2z"/></svg>
              </div>
              <div>
                <span class="text-xs font-semibold text-white group-hover/item:text-amber-400 transition-colors block">Web para Abogados</span>
                <p class="text-[11px] text-gray-400 leading-snug mt-0.5">Páginas web para estudios jurídicos, áreas legales y consultas online.</p>
              </div>
            </a>

            <!-- Item 11 (constructoras): Página Web para Constructoras -->
            <a href="pagina-web-para-constructoras-peru.php" class="flex items-start gap-3 p-2.5 rounded-none hover:bg-white/5 transition-all group/item border border-transparent hover:border-orange-500/20 md:col-span-2">
              <div class="w-8 h-8 rounded-none bg-orange-500/10 border border-orange-500/20 flex items-center justify-center text-orange-400 shrink-0 group-hover/item:bg-orange-400 group-hover/item:text-black transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4h4m-1 0v2.5a2.5 2.5 0 01.5 4.9V12m0 0v4.5m0-4.5h-3m3 4.5H9l-.5-6.4a3 3 0 015.5 0zM4 21h16"/></svg>
              </div>
              <div>
                <span class="text-xs font-semibold text-white group-hover/item:text-orange-400 transition-colors block">Web para Constructoras</span>
                <p class="text-[11px] text-gray-400 leading-snug mt-0.5">Portafolio de obras, cotizaciones online y SEO local para constructoras.</p>
              </div>
            </a>

            <!-- Item 12 (marca blanca WordPress): Programador WordPress Marca Blanca -->
            <a href="programador-wordpress-marca-blanca-peru.php" class="flex items-start gap-3 p-2.5 rounded-none hover:bg-white/5 transition-all group/item border border-transparent hover:border-teal-500/20 md:col-span-2">
              <div class="w-8 h-8 rounded-none bg-teal-500/10 border border-teal-500/20 flex items-center justify-center text-teal-400 shrink-0 group-hover/item:bg-teal-400 group-hover/item:text-black transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
              </div>
              <div>
                <span class="text-xs font-semibold text-white group-hover/item:text-teal-400 transition-colors block">Programador WordPress Marca Blanca</span>
                <p class="text-[11px] text-gray-400 leading-snug mt-0.5">Contrata capacidad WordPress white label con NDA para tu agencia.</p>
              </div>
            </a>

            <!-- Item 13 (hosting agencias): Proveedor de Hosting para Agencias -->
            <a href="proveedor-hosting-para-agencias-web.php" class="flex items-start gap-3 p-2.5 rounded-none hover:bg-white/5 transition-all group/item border border-transparent hover:border-cyan-500/20 md:col-span-2">
              <div class="w-8 h-8 rounded-none bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 shrink-0 group-hover/item:bg-cyan-400 group-hover/item:text-black transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18M4 4h16a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V5a1 1 0 011-1z"/></svg>
              </div>
              <div>
                <span class="text-xs font-semibold text-white group-hover/item:text-cyan-400 transition-colors block">Hosting para Agencias</span>
                <p class="text-[11px] text-gray-400 leading-snug mt-0.5">Revende hosting marca blanca a tus clientes con tu margen e ingresos recurrentes.</p>
              </div>
            </a>

            <!-- Item 14 (ecommerce precios): ¿Cuánto Cuesta una Tienda Online? -->
            <a href="cuanto-cuesta-una-tienda-online-peru.php" class="flex items-start gap-3 p-2.5 rounded-none hover:bg-white/5 transition-all group/item border border-transparent hover:border-purple-500/20 md:col-span-2">
              <div class="w-8 h-8 rounded-none bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 shrink-0 group-hover/item:bg-purple-400 group-hover/item:text-black transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <div>
                <span class="text-xs font-semibold text-white group-hover/item:text-purple-400 transition-colors block">¿Cuánto Cuesta una Tienda Online?</span>
                <p class="text-[11px] text-gray-400 leading-snug mt-0.5">Precios reales de ecommerce en Perú desde S/1,000. Pago único, sin mensualidad.</p>
              </div>
            </a>

            <!-- Item 15 (wordpress): Página Web con WordPress -->
            <a href="pagina-web-wordpress-peru.php" class="flex items-start gap-3 p-2.5 rounded-none hover:bg-white/5 transition-all group/item border border-transparent hover:border-teal-500/20 md:col-span-2">
              <div class="w-8 h-8 rounded-none bg-teal-500/10 border border-teal-500/20 flex items-center justify-center text-teal-400 shrink-0 group-hover/item:bg-teal-400 group-hover/item:text-black transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3l7 4v5c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V7l7-4zM12 7l3-1.5M12 7l-3-1.5"/></svg>
              </div>
              <div>
                <span class="text-xs font-semibold text-white group-hover/item:text-teal-400 transition-colors block">Página Web con WordPress</span>
                <p class="text-[11px] text-gray-400 leading-snug mt-0.5">Webs profesionales en WordPress, panel fácil, blog y SEO. Desde S/450.</p>
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
          <a href="pagina-web-con-inteligencia-artificial.php" class="text-gray-300 hover:text-violet-400 transition-colors font-semibold">Web con IA y Chatbot</a>
          <a href="casos-de-exito.php" class="text-gray-300 hover:text-amber-400 transition-colors">Casos de Éxito</a>
          <a href="como-crear-una-pagina-web-gratis.php" class="text-gray-300 hover:text-emerald-400 transition-colors">Crear Web Gratis</a>
          <a href="agencia-de-desarrollo-web-en-ica-y-chincha.php" class="text-gray-300 hover:text-teal-400 transition-colors">Agencia Web en Ica y Chincha</a>
          <a href="pagina-web-para-abogados-peru.php" class="text-gray-300 hover:text-amber-400 transition-colors">Web para Abogados</a>
          <a href="pagina-web-para-constructoras-peru.php" class="text-gray-300 hover:text-amber-400 transition-colors">Web para Constructoras</a>
          <a href="programador-wordpress-marca-blanca-peru.php" class="text-gray-300 hover:text-teal-400 transition-colors">Programador WordPress Marca Blanca</a>
          <a href="proveedor-hosting-para-agencias-web.php" class="text-gray-300 hover:text-teal-400 transition-colors">Hosting para Agencias</a>
          <a href="cuanto-cuesta-una-tienda-online-peru.php" class="text-gray-300 hover:text-purple-400 transition-colors">¿Cuánto Cuesta una Tienda Online?</a>
          <a href="pagina-web-wordpress-peru.php" class="text-gray-300 hover:text-teal-400 transition-colors">Página Web con WordPress</a>
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
