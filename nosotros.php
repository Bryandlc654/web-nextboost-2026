<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Desarrolladores Web Perú | Next Boost</title>
  <meta name="description" content="Desarrolladores web en Perú. Equipo de desarrollo web, software a medida y hosting premium. Transformamos ideas en soluciones digitales." />
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <link rel="canonical" href="https://nextboost.business/nosotros.php" />
  <link rel="alternate" href="https://nextboost.business/nosotros.php" hreflang="es-PE" />
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://nextboost.business/nosotros.php" />
  <meta property="og:title" content="Desarrolladores Web Perú | Next Boost" />
  <meta property="og:description" content="Desarrolladores web en Perú. Equipo de desarrollo web, software a medida y hosting premium. Transformamos ideas en soluciones digitales." />
  <meta property="og:image" content="https://nextboost.business/imagenes-web/next-boost.png" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:url" content="https://nextboost.business/nosotros.php" />
  <meta name="twitter:title" content="Desarrolladores Web Perú | Next Boost" />
  <meta name="twitter:description" content="Desarrolladores web en Perú. Equipo de desarrollo web, software a medida y hosting premium. Transformamos ideas en soluciones digitales." />
  <meta name="twitter:image" content="https://nextboost.business/imagenes-web/next-boost.png" />

  <!-- Datos Estructurados JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "AboutPage",
        "@id": "https://nextboost.business/nosotros.php/#about",
        "url": "https://nextboost.business/nosotros.php",
        "name": "Desarrolladores Web Perú | Next Boost",
        "description": "Desarrolladores web en Perú. Equipo de desarrollo web, software a medida y hosting premium.",
        "mainEntity": {
          "@type": "Organization",
          "name": "Next Boost",
          "description": "Desarrolladores web en Perú especializados en desarrollo web, software a medida y hosting premium.",
          "url": "https://nextboost.business/",
          "telephone": "+51 962 469 836",
          "email": "info@nextboost.business",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Chincha",
            "addressRegion": "Ica",
            "addressCountry": "PE"
          }
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
    .animate-in-d5 { animation-delay: 0.7s; }
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
    .terminal-mac {
      background: rgba(10, 10, 10, 0.8);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.08);
      box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.8), 0 0 50px rgba(59, 130, 246, 0.05);
      animation: floatTerminal 8s ease-in-out infinite;
    }
    @keyframes floatTerminal {
      0%, 100% { transform: translateY(0) rotate(-0.5deg); }
      50% { transform: translateY(-8px) rotate(0.5deg); }
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
    .timeline-dot::after {
      content: '';
      position: absolute;
      inset: -4px;
      border-radius: 9999px;
      border: 1px solid rgba(59, 130, 246, 0.5);
      animation: pulseOutline 2s infinite;
    }
    @keyframes pulseOutline {
      0% { transform: scale(1); opacity: 1; }
      100% { transform: scale(1.6); opacity: 0; }
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

  <!-- Hero Nosotros -->
  <main class="relative z-10 flex flex-col lg:flex-row items-center justify-between min-h-[70vh] px-8 md:px-16 lg:px-20 py-16 lg:py-24 max-w-screen-2xl mx-auto overflow-hidden">
    <!-- Left content -->
    <div class="w-full lg:w-[50%] flex flex-col items-start gap-6">
      <div class="inline-flex items-center gap-2.5 px-4 py-1.5 badge-gradient text-xs font-medium text-blue-300 animate-in">
        <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
        <span class="tracking-wide">Ingeniería & Diseño de Vanguardia</span>
      </div>
      <h1 class="text-5xl md:text-7xl font-semibold leading-[1.1] tracking-tight animate-in animate-in-d1">
        Desarrolladores web Perú:
        <br/>
        <span class="gradient-text">tu equipo tecnológico</span>
      </h1>
      <p class="text-base md:text-lg text-gray-400 max-w-xl leading-relaxed animate-in animate-in-d2">
        Somos especialistas obsesionados con la velocidad de carga, la limpieza del código y la arquitectura de servidores. Convertimos desafíos tecnológicos en ventajas competitivas reales.
      </p>
    </div>

    <!-- Right visual (Team commit terminal illustration) -->
    <div class="w-full lg:w-[45%] mt-12 lg:mt-0 flex justify-center lg:justify-end animate-in animate-in-d3">
      <div class="terminal-mac w-full max-w-[420px] rounded-2xl p-4 font-mono text-[11px] leading-relaxed text-gray-400 select-none">
        <div class="flex items-center gap-1.5 border-b border-white/5 pb-2.5 mb-3">
          <span class="w-2 h-2 rounded-full bg-[#ff5f56]"></span>
          <span class="w-2 h-2 rounded-full bg-[#ffbd2e]"></span>
          <span class="w-2 h-2 rounded-full bg-[#27c93f]"></span>
          <span class="ml-2 text-gray-500 text-[10px]">git log --team-commits</span>
        </div>
        <div class="space-y-2.5 text-[10px] md:text-xs">
          <div>
            <span class="text-blue-400">commit 9c2b184</span><span class="text-gray-500"> (HEAD -> </span><span class="text-teal-400">⚡ main</span><span class="text-gray-500">)</span>
            <br>System: Automated CI/CD Pipeline
            <br><span class="text-white font-medium">Deploy: High-performance cloud architecture</span>
          </div>
          <div class="border-t border-white/[0.04] pt-2">
            <span class="text-blue-400">commit e3a1d94</span>
            <br>System: Performance Optimizer
            <br><span class="text-white font-medium">Build: Assets minification & CDN distribution</span>
          </div>
          <div class="border-t border-white/[0.04] pt-2">
            <span class="text-blue-400">commit 8c12f01</span>
            <br>System: Security Node
            <br><span class="text-white font-medium">Sec: SSL certificates renewed & WAF rules updated</span>
          </div>
          <div class="border-t border-white/[0.04] pt-2">
            <span class="text-teal-400">nextboost:~$</span> <span class="text-white">npm run performance:test</span>
            <br><span class="text-green-400">✓ PageSpeed Score: 100/100 (Mobile & Desktop)</span>
          </div>
        </div>
      </div>
    </div>
  </main>


  <!-- Timeline Section -->
  <section class="relative z-10 py-24 px-6 md:px-12 border-t border-white/5">
    <div class="max-w-4xl mx-auto">
      <header class="mb-16 text-center">
        <p class="text-xs tracking-[0.2em] uppercase text-gray-500 mb-4">Nuestra Evolución</p>
        <h2 class="text-3xl md:text-5xl font-medium tracking-tight">Trayectoria de <span class="gradient-text">Logros</span></h2>
      </header>

      <div class="relative pl-8 md:pl-0 border-l border-white/10 md:border-l-0 md:grid md:grid-cols-2 md:gap-x-12 before:content-[''] before:absolute before:left-0 md:before:left-1/2 md:before:-translate-x-1/2 before:top-0 before:bottom-0 before:w-px before:bg-white/10">
        
        <!-- Year 2020 -->
        <div class="relative md:text-right pb-12 md:pr-12 md:pb-16 animate-in">
          <div class="timeline-dot absolute -left-[37px] md:left-auto md:-right-[37px] top-1.5 w-4.5 h-4.5 bg-blue-500 rounded-full flex items-center justify-center border-4 border-black z-10"></div>
          <span class="text-xs text-blue-400 font-semibold">2020</span>
          <h3 class="text-xl font-bold text-white mt-1">Fundación</h3>
          <p class="text-xs text-gray-400 leading-relaxed mt-2">
            Nace Next Boost con un claro manifiesto: desterrar las plantillas lentas de WordPress en favor de arquitecturas a medida y código ultra-optimizado.
          </p>
        </div>

        <!-- Spacer for grid alignment -->
        <div class="hidden md:block pb-16"></div>
        <div class="hidden md:block pb-16"></div>

        <!-- Year 2022 -->
        <div class="relative pb-12 md:pl-12 md:pb-16 animate-in">
          <div class="timeline-dot absolute -left-[37px] md:-left-[37px] top-1.5 w-4.5 h-4.5 bg-teal-400 rounded-full flex items-center justify-center border-4 border-black z-10"></div>
          <span class="text-xs text-teal-400 font-semibold">2022</span>
          <h3 class="text-xl font-bold text-white mt-1">Hosting Premium Administrado</h3>
          <p class="text-xs text-gray-400 leading-relaxed mt-2">
            Lanzamiento de nuestra propia infraestructura cloud optimizada con CDN global, logrando reducir el tiempo de carga promedio de nuestros clientes a menos de 1s.
          </p>
        </div>

        <!-- Year 2024 -->
        <div class="relative md:text-right pb-12 md:pr-12 md:pb-16 animate-in">
          <div class="timeline-dot absolute -left-[37px] md:left-auto md:-right-[37px] top-1.5 w-4.5 h-4.5 bg-blue-500 rounded-full flex items-center justify-center border-4 border-black z-10"></div>
          <span class="text-xs text-blue-400 font-semibold">2024</span>
          <h3 class="text-xl font-bold text-white mt-1">Soporte de Marca Blanca</h3>
          <p class="text-xs text-gray-400 leading-relaxed mt-2">
            Ampliamos fronteras abriendo el canal de Marca Blanca para agencias asociadas de marketing digital, entregando equipo senior dedicado con NDA riguroso.
          </p>
        </div>

        <!-- Spacer for grid alignment -->
        <div class="hidden md:block pb-16"></div>
        <div class="hidden md:block pb-16"></div>

        <!-- Year 2026 -->
        <div class="relative pb-12 md:pl-12 md:pb-16 animate-in">
          <div class="timeline-dot absolute -left-[37px] md:-left-[37px] top-1.5 w-4.5 h-4.5 bg-teal-400 rounded-full flex items-center justify-center border-4 border-black z-10"></div>
          <span class="text-xs text-teal-400 font-semibold">2026</span>
          <h3 class="text-xl font-bold text-white mt-1">Lanzamiento Next Boost 2.0</h3>
          <p class="text-xs text-gray-400 leading-relaxed mt-2">
            Rediseño total de la suite de marca y optimizaciones frontales, introduciendo tableros 3D y una experiencia visual de alto impacto que redefine nuestro estándar.
          </p>
        </div>

      </div>
    </div>
  </section>

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
            ¿Listo para crear algo increíble?
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
    });
  </script>

</body>
</html>
