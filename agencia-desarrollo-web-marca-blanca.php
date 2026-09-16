<?php
  $page_title = "Desarrollo Web Marca Blanca para Agencias | Next Boost";
  $page_description = "Servicio de desarrollo web Marca Blanca para agencias de marketing y consultoras. Desarrollamos con Next.js, React y WordPress bajo contrato de confidencialidad NDA estricto.";
?>
<!DOCTYPE html>
<html lang="es" class="dark scroll-smooth">
<?php include 'includes/head.php'; ?>
<body>

  <!-- Glow Background -->
  <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
    <div class="absolute -top-40 -left-40 w-[600px] h-[600px] bg-blue-600/10 rounded-full glow-pulse"></div>
    <div class="absolute top-[35%] -right-40 w-[500px] h-[500px] bg-teal-500/5 rounded-full glow-pulse" style="animation-delay: -1.5s;"></div>
    <div class="absolute inset-0 grid-bg"></div>
  </div>

  <!-- Global Header -->
  <?php include 'includes/header.php'; ?>

  <!-- Hero Section: Tailored for Agencies -->
  <main class="relative z-10 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 py-16 lg:py-24">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      
      <!-- Left Column: Hero Text (7 cols) -->
      <div class="lg:col-span-7 space-y-6">
        <div class="inline-flex items-center gap-2.5 px-4 py-1.5 badge-gradient text-xs font-medium text-teal-300 animate-in">
          <span class="w-2 h-2 rounded-full bg-teal-400 animate-pulse"></span>
          <span class="tracking-wide">Partner Tecnológico Exclusivo para Agencias de Marketing</span>
        </div>

        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-white leading-[1.1]">
          Escala tu agencia sin contratar <br>
          <span class="gradient-text">programadores internos</span>
        </h1>

        <p class="text-base md:text-lg text-gray-400 font-normal leading-relaxed max-w-2xl">
          Desarrollamos sitios web de alto rendimiento en <strong class="text-white">Next.js, React y WordPress</strong> bajo tu propia marca. Contrato NDA estricto, entregas llave en mano y soporte continuo para que te enfoques en vender.
        </p>

        <!-- Stats Pills -->
        <div class="grid grid-cols-3 gap-4 pt-4 border-t border-white/10 max-w-xl">
          <div>
            <span class="text-2xl md:text-3xl font-bold text-white block">100%</span>
            <span class="text-xs text-gray-400 uppercase tracking-wider font-semibold">Marca Blanca</span>
          </div>
          <div>
            <span class="text-2xl md:text-3xl font-bold text-teal-400 block">NDA</span>
            <span class="text-xs text-gray-400 uppercase tracking-wider font-semibold">Garantizado</span>
          </div>
          <div>
            <span class="text-2xl md:text-3xl font-bold text-blue-400 block">+40</span>
            <span class="text-xs text-gray-400 uppercase tracking-wider font-semibold">Agencias Partners</span>
          </div>
        </div>

        <!-- Action CTAs -->
        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 pt-4">
          <a href="contacto.php?ref=marca-blanca" class="inline-flex items-center justify-center gap-3 bg-gradient-to-r from-blue-500 to-teal-400 text-black px-8 py-4 text-sm font-bold rounded-none hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] hover:scale-105 transition-all btn-primary group">
            Solicitar Alianza & Cotización
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
          <a href="https://wa.me/51962469836?text=Hola,%20tengo%20una%20agencia%20de%20marketing%20y%20quiero%20cotizar%20desarrollo%20web%20marca%20blanca" target="_blank" class="inline-flex items-center justify-center gap-2 border border-white/20 hover:border-emerald-500/50 bg-white/5 hover:bg-emerald-500/10 text-white hover:text-emerald-400 px-6 py-4 text-sm font-semibold transition-all">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            Chat Directo WhatsApp
          </a>
        </div>
      </div>

      <!-- Right Column: Visual Interactive Dashboard Card (5 cols) -->
      <div class="lg:col-span-5 relative">
        <div class="glass-card rounded-2xl p-6 border border-white/10 space-y-6 relative overflow-hidden bg-gradient-to-b from-[#141419] to-[#0a0a0c]">
          
          <div class="flex items-center justify-between border-b border-white/10 pb-4">
            <div class="flex items-center gap-3">
              <div class="w-3 h-3 rounded-full bg-red-500/80"></div>
              <div class="w-3 h-3 rounded-full bg-yellow-500/80"></div>
              <div class="w-3 h-3 rounded-full bg-green-500/80"></div>
            </div>
            <span class="text-[10px] text-gray-500 font-mono">agency-partner.config.js</span>
          </div>

          <!-- Feature Stack -->
          <div class="space-y-3 font-mono text-xs">
            <div class="p-3 bg-white/5 border border-white/10 rounded-none flex items-center justify-between">
              <span class="text-gray-400">confidentiality_mode:</span>
              <span class="text-emerald-400 font-bold">"STRICT_NDA_SIGNED"</span>
            </div>
            <div class="p-3 bg-white/5 border border-white/10 rounded-none flex items-center justify-between">
              <span class="text-gray-400">client_visibility:</span>
              <span class="text-blue-400 font-bold">"100%_YOUR_AGENCY_BRAND"</span>
            </div>
            <div class="p-3 bg-white/5 border border-white/10 rounded-none flex items-center justify-between">
              <span class="text-gray-400">communication_channel:</span>
              <span class="text-teal-300 font-bold">"Slack / Teams / WhatsApp"</span>
            </div>
            <div class="p-3 bg-white/5 border border-white/10 rounded-none flex items-center justify-between">
              <span class="text-gray-400">pagespeed_score:</span>
              <span class="text-yellow-300 font-bold">"95+ GUARANTEED"</span>
            </div>
          </div>

          <div class="bg-gradient-to-r from-blue-500/10 to-teal-500/10 border border-blue-500/20 p-4 text-xs text-gray-300 leading-relaxed">
            💡 <strong class="text-white">Tu cliente final nunca sabrá que existimos.</strong> Firmamos contrato de confidencialidad antes de recibir cualquier archivo o briefing.
          </div>

        </div>
      </div>

    </div>
  </main>

  <!-- Confidentiality Banner Section -->
  <section class="relative z-10 py-12 border-y border-white/10 bg-black/40">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
        
        <div class="flex items-start gap-4">
          <div class="w-12 h-12 rounded-none bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 shrink-0">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <div>
            <h3 class="text-base font-bold text-white">Contrato NDA Estricto</h3>
            <p class="text-xs text-gray-400 mt-1 leading-relaxed">Firmamos acuerdos de confidencialidad con validez legal antes de iniciar cualquier conversación técnica.</p>
          </div>
        </div>

        <div class="flex items-start gap-4">
          <div class="w-12 h-12 rounded-none bg-teal-500/10 border border-teal-500/20 flex items-center justify-center text-teal-400 shrink-0">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <div>
            <h3 class="text-base font-bold text-white">Comunicación Infiltrada</h3>
            <p class="text-xs text-gray-400 mt-1 leading-relaxed">Nos integramos a tu Slack o Teams utilizando correos con el dominio de tu propia agencia.</p>
          </div>
        </div>

        <div class="flex items-start gap-4">
          <div class="w-12 h-12 rounded-none bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 shrink-0">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <div>
            <h3 class="text-base font-bold text-white">Margen de Ganancia Mayorista</h3>
            <p class="text-xs text-gray-400 mt-1 leading-relaxed">Precios especiales para agencias que te permiten revender con márgenes del 40% al 100%.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Benefits Grid Section -->
  <section class="relative z-10 py-20 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <p class="text-xs uppercase tracking-widest text-teal-400 font-bold mb-3">¿Por qué elegirnos como tu equipo técnico?</p>
      <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
        Todo lo que tu agencia necesita para <span class="gradient-text">vender más páginas web</span>
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Benefit 1 -->
      <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-blue-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 group-hover:bg-blue-500 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Velocidad Extrema (PageSpeed 95+)</h3>
        <p class="text-xs text-gray-400 leading-relaxed">Entregamos sitios web desarrollados en Next.js optimizados para cargar en menos de 1 segundo. Tus clientes quedarán impresionados por la fluidez.</p>
      </div>

      <!-- Benefit 2 -->
      <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-teal-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-teal-500/10 border border-teal-500/20 flex items-center justify-center text-teal-400 group-hover:bg-teal-400 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Código Limpio sin Plantillas Lentas</h3>
        <p class="text-xs text-gray-400 leading-relaxed">No usamos Elementor ni maquetadores pesados que arruinen la velocidad. Escribimos código a medida optimizado para SEO técnico desde el primer día.</p>
      </div>

      <!-- Benefit 3 -->
      <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-purple-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 group-hover:bg-purple-400 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Cumplimiento Estricto de Fechas</h3>
        <p class="text-xs text-gray-400 leading-relaxed">Sabemos que el cliente de tu agencia presiona con los plazos. Definimos cronogramas claros y los cumplimos al 100% sin excusas ni demoras.</p>
      </div>

      <!-- Benefit 4 -->
      <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-pink-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-pink-500/10 border border-pink-500/20 flex items-center justify-center text-pink-400 group-hover:bg-pink-500 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h3a1 1 0 011 1v6a1 1 0 01-1 1h-3a1 1 0 01-1-1v-6z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Figma a Código Pixel-Perfect</h3>
        <p class="text-xs text-gray-400 leading-relaxed">Tu equipo de diseño crea la interfaz en Figma o Adobe XD y nosotros la convertimos en una web responsive exacta hasta el último píxel.</p>
      </div>

      <!-- Benefit 5 -->
      <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-cyan-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 group-hover:bg-cyan-400 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Hosting Administrado cPanel / Vercel</h3>
        <p class="text-xs text-gray-400 leading-relaxed">Nos encargamos del despliegue, SSL, DNS y correo corporativo para que tú solo entregues la web terminada y lista para vender.</p>
      </div>

      <!-- Benefit 6 -->
      <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-emerald-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 group-hover:bg-emerald-400 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Soporte Post-Lanzamiento Garantizado</h3>
        <p class="text-xs text-gray-400 leading-relaxed">Incluimos 30 días de garantía de soporte técnico sin costo adicional para corregir cualquier detalle o consulta de tu cliente.</p>
      </div>

    </div>
  </section>

  <!-- Working Models / Modalidades -->
  <section class="relative z-10 py-16 bg-[#0a0a0d] border-t border-white/10">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <p class="text-xs uppercase tracking-widest text-blue-400 font-bold mb-3">Flexibilidad Operativa</p>
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
          3 Modalidades de Trabajo <span class="gradient-text">para tu Agencia</span>
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Model 1 -->
        <div class="glass-card p-8 rounded-2xl border border-white/10 flex flex-col justify-between space-y-6">
          <div class="space-y-4">
            <span class="text-[10px] font-bold text-blue-400 uppercase tracking-widest bg-blue-500/10 px-3 py-1 border border-blue-500/20">Por Proyecto Puntual</span>
            <h3 class="text-2xl font-bold text-white">Desarrollo Llave en Mano</h3>
            <p class="text-xs text-gray-400 leading-relaxed">Nos envías el diseño o brief de una web o ecommerce específica, cotizamos a precio mayorista y te entregamos la web completa en la fecha acordada.</p>
            <ul class="space-y-2 text-xs text-gray-300 pt-2">
              <li class="flex items-center gap-2">✓ Cotización fija por entregable</li>
              <li class="flex items-center gap-2">✓ Ideal para lanzamientos esporádicos</li>
              <li class="flex items-center gap-2">✓ Incluye QA y pruebas multidispositivo</li>
            </ul>
          </div>
          <a href="contacto.php?modalidad=proyecto" class="w-full text-center py-3 bg-white/10 hover:bg-white text-white hover:text-black text-xs font-bold transition-all border border-white/20">Cotizar Un Proyecto</a>
        </div>

        <!-- Model 2 -->
        <div class="glass-card p-8 rounded-2xl border-2 border-teal-500/40 relative flex flex-col justify-between space-y-6 bg-gradient-to-b from-teal-950/20 to-[#121215]">
          <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-teal-400 text-black text-[10px] font-extrabold uppercase tracking-wider px-3 py-0.5 shadow-md">Más Popular para Agencias</div>
          <div class="space-y-4">
            <span class="text-[10px] font-bold text-teal-300 uppercase tracking-widest bg-teal-500/10 px-3 py-1 border border-teal-500/20">Bolsa de Horas Mensual</span>
            <h3 class="text-2xl font-bold text-white">Soporte & Ajustes Continuos</h3>
            <p class="text-xs text-gray-400 leading-relaxed">Compra un paquete de horas al mes para que tu agencia nos delegue mantenimiento, actualizaciones, landing pages secundarias y optimizaciones de clientes.</p>
            <ul class="space-y-2 text-xs text-gray-300 pt-2">
              <li class="flex items-center gap-2">✓ Horas acumulables o reutilizables</li>
              <li class="flex items-center gap-2">✓ Respuesta rápida prioritaria</li>
              <li class="flex items-center gap-2">✓ Reporte detallado de tareas ejecutadas</li>
            </ul>
          </div>
          <a href="contacto.php?modalidad=bolsa-horas" class="w-full text-center py-3 bg-teal-400 hover:bg-teal-300 text-black text-xs font-bold transition-all">Solicitar Bolsa de Horas</a>
        </div>

        <!-- Model 3 -->
        <div class="glass-card p-8 rounded-2xl border border-white/10 flex flex-col justify-between space-y-6">
          <div class="space-y-4">
            <span class="text-[10px] font-bold text-purple-400 uppercase tracking-widest bg-purple-500/10 px-3 py-1 border border-purple-500/20">Desarrollador Dedicado</span>
            <h3 class="text-2xl font-bold text-white">Programador Senior In-House</h3>
            <p class="text-xs text-gray-400 leading-relaxed">Asignamos uno o más desarrolladores senior Full-Time o Part-Time dedicados exclusivamente a tu flujo de trabajo en Slack/Teams.</p>
            <ul class="space-y-2 text-xs text-gray-300 pt-2">
              <li class="flex items-center gap-2">✓ Integración total a tu equipo</li>
              <li class="flex items-center gap-2">✓ Sin costos sociales ni contrataciones</li>
              <li class="flex items-center gap-2">✓ Capacidad de trabajo constante</li>
            </ul>
          </div>
          <a href="contacto.php?modalidad=dedicado" class="w-full text-center py-3 bg-white/10 hover:bg-white text-white hover:text-black text-xs font-bold transition-all border border-white/20">Contratar Dev Dedicado</a>
        </div>

      </div>
    </div>
  </section>

  <!-- Interactive Agency FAQs Section -->
  <section class="relative z-10 py-20 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
      
      <div class="lg:col-span-4 space-y-4">
        <p class="text-xs uppercase tracking-widest text-teal-400 font-bold">Transparencia Total</p>
        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-white leading-tight">
          Preguntas Frecuentes de <span class="gradient-text">Agencias Partners</span>
        </h2>
        <p class="text-xs text-gray-400 leading-relaxed">
          Resolvemos las dudas más comunes sobre la operativa Marca Blanca, acuerdos legales de confidencialidad y entregas.
        </p>
        <div class="pt-4">
          <a href="https://wa.me/51962469836?text=Hola,%20tengo%20preguntas%20sobre%20el%20servicio%20Marca%20Blanca" target="_blank" class="inline-flex items-center gap-2 text-xs text-emerald-400 bg-emerald-500/10 border border-emerald-500/20 px-4 py-2.5 hover:bg-emerald-500/20 transition-all font-semibold">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
            ¿Tienes otra pregunta? Habla con un Dev Senior
          </a>
        </div>
      </div>

      <div class="lg:col-span-8 space-y-4">
        
        <div class="glass-card rounded-xl p-6 border border-white/10 space-y-2">
          <h3 class="text-base font-bold text-white flex items-center gap-2">
            <span class="text-teal-400">01.</span> ¿Cómo garantizan que mi cliente nunca sabrá de Next Boost?
          </h3>
          <p class="text-xs text-gray-400 leading-relaxed pt-1">
            Antes de cualquier proyecto, firmamos un contrato legal de confidencialidad (NDA). Toda la documentación, comentarios en código, repositorios Git y créditos en el footer del sitio se entregan con la marca y el nombre de tu agencia. Nunca contactamos directamente a tu cliente final.
          </p>
        </div>

        <div class="glass-card rounded-xl p-6 border border-white/10 space-y-2">
          <h3 class="text-base font-bold text-white flex items-center gap-2">
            <span class="text-teal-400">02.</span> ¿Pueden asistir a reuniones técnicas como si fuéramos parte de tu equipo?
          </h3>
          <p class="text-xs text-gray-400 leading-relaxed pt-1">
            Sí. Si lo deseas, podemos incorporarnos a videollamadas con tu cliente utilizando correos con tu propio dominio (ej: <code class="text-teal-300">desarrollo@tuagencia.com</code>) actuando estrictamente como el departamento de tecnología de tu agencia.
          </p>
        </div>

        <div class="glass-card rounded-xl p-6 border border-white/10 space-y-2">
          <h3 class="text-base font-bold text-white flex items-center gap-2">
            <span class="text-teal-400">03.</span> ¿Qué tecnologías utilizan para las páginas web marca blanca?
          </h3>
          <p class="text-xs text-gray-400 leading-relaxed pt-1">
            Desarrollamos principalmente con <strong class="text-white">Next.js, React, Tailwind CSS y Node.js</strong> para proyectos que exigen velocidad extrema y SEO perfecto. También construimos sitios en <strong class="text-white">WordPress / WooCommerce</strong> personalizados sin maquetadores lentos.
          </p>
        </div>

        <div class="glass-card rounded-xl p-6 border border-white/10 space-y-2">
          <h3 class="text-base font-bold text-white flex items-center gap-2">
            <span class="text-teal-400">04.</span> ¿Cuál es el margen de ganancia recomendado al revender sus desarrollos?
          </h3>
          <p class="text-xs text-gray-400 leading-relaxed pt-1">
            Nuestros precios mayoristas para agencias permiten aplicar márgenes comerciales habituales del 50% hasta más del 100%, dependiendo del tipo de cliente y el alcance comercial que acuerdes.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Final High-Converting Agency CTA Banner -->
  <section class="relative z-10 py-16 px-8 md:px-16 lg:px-20 max-w-screen-2xl mx-auto mb-16">
    <div class="glass-card rounded-3xl p-10 md:p-16 border border-teal-500/30 bg-gradient-to-r from-blue-950/40 via-[#121216] to-teal-950/40 relative overflow-hidden text-center md:text-left flex flex-col md:flex-row items-center justify-between gap-8">
      
      <div class="space-y-4 max-w-2xl">
        <span class="text-[10px] uppercase tracking-widest text-teal-400 font-extrabold bg-teal-500/10 px-3 py-1 border border-teal-500/20">Alianza Estratégica Marca Blanca</span>
        <h2 class="text-3xl md:text-5xl font-bold tracking-tight text-white leading-tight">
          ¿Listo para multiplicar la capacidad de tu agencia?
        </h2>
        <p class="text-sm text-gray-300 leading-relaxed">
          Escríbenos hoy mismo. Firmemos el acuerdo NDA y cotiza tu primer proyecto con tarifas especiales para agencias.
        </p>
      </div>

      <div class="shrink-0 flex flex-col items-center gap-4">
        <a href="contacto.php?ref=marca-blanca-cta" class="inline-flex items-center gap-3 bg-gradient-to-r from-blue-500 to-teal-400 text-black px-8 py-4 text-sm font-bold rounded-none hover:shadow-[0_0_30px_rgba(59,130,246,0.4)] hover:scale-105 transition-all btn-primary">
          Solicitar Convenio de Marca Blanca
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <span class="text-[10px] text-gray-400 uppercase tracking-widest font-semibold">Respuesta garantizada en < 24 hrs</span>
      </div>

    </div>
  </section>

  <!-- Global Footer -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>
