<?php
  $page_title = "Desarrollo de Software a Medida Perú | Desde S/2500";
  $page_description = "Desarrollo de software a medida en Perú desde S/2500. ERPs, CRMs e Intranets personalizados con integraciones API y cloud para tu empresa.";
  $og_url = "https://nextboost.business/desarrollo-software.php";
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
      "@id": "https://nextboost.business/desarrollo-software.php/#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Inicio",
          "item": "https://nextboost.business/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Desarrollo de Software a Medida Perú",
          "item": "https://nextboost.business/desarrollo-software.php"
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://nextboost.business/desarrollo-software.php/#service",
      "name": "Desarrollo de Software a Medida",
      "serviceType": "Software Development",
      "provider": {
        "@type": "Organization",
        "name": "Next Boost",
        "url": "https://nextboost.business/"
      },
      "description": "Desarrollo de software a medida para empresas en Perú. Programación de ERPs, CRMs, intranets y plataformas web con arquitectura cloud e integraciones API.",
      "areaServed": "Perú",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Desarrollo de Software Web",
        "itemListElement": [
          {
            "@type": "Offer",
            "price": "2500.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Módulos de Intranet Básicos (Desde)"
            }
          },
          {
            "@type": "Offer",
            "price": "5000.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Plataformas Web y SaaS (Desde)"
            }
          }
        ]
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://nextboost.business/desarrollo-software.php/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿Qué es el desarrollo de software a medida y por qué elegirlo en Perú?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "El desarrollo de software a medida consiste en crear un sistema hecho exactamente para los procesos de tu empresa, a diferencia de los ERPs genéricos que obligan a adaptar tu negocio a ellos. En Perú, elegir desarrollo a medida significa tener un sistema que crece contigo, sin licencias costosas ni funcionalidades que no usas."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cuánto cuesta el desarrollo de software a medida en Perú?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Nuestros proyectos de desarrollo de software a medida inician desde S/2500 para módulos de intranet básicos y desde S/5000 para plataformas web completas con CRM. Cada proyecto se cotiza según la complejidad, alcance y tiempos de entrega. Incluimos análisis gratuito previo sin compromiso."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cuánto tiempo toma desarrollar un software a medida?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Un proyecto de desarrollo de software a medida típico toma entre 4 y 12 semanas dependiendo de la complejidad. Trabajamos con metodología ágil entregando avances funcionales cada 2 semanas para que puedas ver el progreso y hacer ajustes durante el proceso."
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
    <div class="absolute -top-40 right-20 w-[600px] h-[600px] bg-cyan-600/10 rounded-full glow-pulse"></div>
    <div class="absolute bottom-[10%] -left-40 w-[500px] h-[500px] bg-yellow-500/5 rounded-full glow-pulse" style="animation-delay: -1.5s;"></div>
    <div class="absolute inset-0 grid-bg"></div>
  </div>

  <!-- Global Header -->
  <?php include 'includes/header.php'; ?>

  <!-- 1. ATENCIÓN: Hero Section -->
  <main class="relative z-10 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 py-16 lg:py-24">
    <div class="text-center max-w-4xl mx-auto space-y-8">
      
      <div class="inline-flex items-center gap-2.5 px-4 py-1.5 badge-gradient text-xs font-medium text-cyan-300 animate-in mx-auto">
        <span class="w-2 h-2 rounded-full bg-cyan-500 animate-pulse"></span>
        <span class="tracking-wide">Ingeniería de Software para Empresas</span>
      </div>

      <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-white leading-[1.1]">
        Desarrollo de software a medida en Perú <br>
        <span class="bg-gradient-to-r from-cyan-400 to-yellow-500 text-transparent bg-clip-text">tu empresa es única, tu software también.</span>
      </h1>

      <p class="text-base md:text-xl text-gray-300 font-normal leading-relaxed max-w-2xl mx-auto">
        Es hora de superar los Excel y los sistemas genéricos que no se adaptan a tus reglas. Como agencia de 
        <strong class="text-white">desarrollo de software a medida en Perú</strong>, creamos ERPs, CRMs, Intranets y 
        plataformas web diseñados exactamente para cómo funciona tu negocio, con integraciones API, facturación electrónica SUNAT y seguridad cloud.
      </p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center pt-4">
        <a href="contacto.php?ref=desarrollo-software" class="inline-flex items-center justify-center gap-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 text-sm font-bold rounded-none hover:shadow-[0_0_30px_rgba(6,182,212,0.4)] hover:scale-105 transition-all group">
          Solicitar Análisis Gratuito
          <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 14l-7 7m0 0l-7-7m7 7V3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>
      
      <!-- Tech Stack Icons (SVGs) -->
      <div class="pt-12 border-t border-white/10 mt-12 flex flex-wrap justify-center gap-8 opacity-60">
        <div class="flex items-center gap-2 font-bold text-gray-400">
          <svg class="w-6 h-6 text-yellow-400" viewBox="0 0 24 24" fill="currentColor"><path d="M22.25 0H1.75C.78 0 0 .78 0 1.75v20.5C0 23.22.78 24 1.75 24h20.5c.97 0 1.75-.78 1.75-1.75V1.75C24 .78 23.22 0 22.25 0zM12 11c-1.37 0-2.5-.9-2.5-2s1.13-2 2.5-2 2.5.9 2.5 2-1.13 2-2.5 2zM8 17H5.5v-3H8v3zm0-4.5H5.5v-3H8v3zm4 4.5H9.5v-3H12v3zm0-4.5H9.5v-3H12v3zm4 4.5h-2.5v-3H16v3zm0-4.5h-2.5v-3H16v3zm3.5 4.5H17v-3h2.5v3zm0-4.5H17v-3h2.5v3z"/></svg> Arquitectura Cloud
        </div>
        <div class="flex items-center gap-2 font-bold text-gray-400">
          <svg class="w-6 h-6 text-blue-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg> API REST
        </div>
        <div class="flex items-center gap-2 font-bold text-gray-400">
          <svg class="w-6 h-6 text-cyan-500" viewBox="0 0 24 24" fill="currentColor"><path d="M11 12H4.5A2.5 2.5 0 0 1 2 9.5V4h7v8zM2 14.5A2.5 2.5 0 0 1 4.5 12H11v8H2v-5.5zM22 9.5a2.5 2.5 0 0 1-2.5 2.5H13V4h9v5.5zM13 20v-8h6.5a2.5 2.5 0 0 1 2.5 2.5V20h-9z"/></svg> Microservicios
        </div>
      </div>
    </div>
  </main>

  <!-- 2. INTERÉS: Por qué Software Custom -->
  <section class="relative z-10 py-20 bg-[#070709] border-y border-white/10">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
      
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
          Beneficios del software a medida <br>
          <span class="bg-gradient-to-r from-cyan-400 to-yellow-500 text-transparent bg-clip-text">para escalar tu empresa</span>
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-cyan-500/30 transition-all">
          <div class="w-12 h-12 rounded-none bg-cyan-500/10 text-cyan-400 flex items-center justify-center border border-cyan-500/20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white">Automatización Total</h3>
          <p class="text-xs text-gray-400 leading-relaxed">
            Elimina tareas manuales repetitivas. Hacemos que el software haga el trabajo pesado para que tu equipo se concentre en decisiones estratégicas.
          </p>
        </div>

        <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-yellow-500/30 transition-all">
          <div class="w-12 h-12 rounded-none bg-yellow-500/10 text-yellow-400 flex items-center justify-center border border-yellow-500/20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white">Integraciones (API)</h3>
          <p class="text-xs text-gray-400 leading-relaxed">
            Conectamos tu nuevo sistema con herramientas que ya usas: SUNAT para facturación electrónica, bancos, WhatsApp, pasarelas de pago y más.
          </p>
        </div>

        <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-blue-500/30 transition-all">
          <div class="w-12 h-12 rounded-none bg-blue-500/10 text-blue-400 flex items-center justify-center border border-blue-500/20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white">Seguridad Cloud</h3>
          <p class="text-xs text-gray-400 leading-relaxed">
            Tu información hospedada en servidores cifrados en la nube (Amazon Web Services o Google Cloud). Olvídate de perder datos si se malogra una computadora.
          </p>
        </div>

        <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-green-500/30 transition-all">
          <div class="w-12 h-12 rounded-none bg-green-500/10 text-green-400 flex items-center justify-center border border-green-500/20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white">Escalabilidad Ilimitada</h3>
          <p class="text-xs text-gray-400 leading-relaxed">
            No cobramos costosas licencias mensuales por cada nuevo empleado que use tu plataforma. El sistema es tuyo y crece con tu volumen de operaciones.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. PROCESO -->
  <section class="relative z-10 py-20 border-b border-white/5">
    <div class="max-w-screen-xl mx-auto px-8 md:px-16">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
          Proceso de desarrollo <span class="bg-gradient-to-r from-cyan-400 to-yellow-500 text-transparent bg-clip-text">de software a medida</span>
        </h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
        <!-- Línea conectora invisible en móvil, visible en md -->
        <div class="hidden md:block absolute top-1/2 left-0 w-full h-px border-t border-dashed border-white/20 -z-10 transform -translate-y-1/2"></div>
        
        <div class="text-center bg-[#0a0a0e] p-6 rounded-2xl border border-white/5">
          <div class="w-16 h-16 mx-auto rounded-full bg-cyan-500/20 flex items-center justify-center text-cyan-400 font-black text-2xl mb-4 border-4 border-[#0a0a0e]">1</div>
          <h4 class="text-white font-bold mb-2">Análisis y Mapeo</h4>
          <p class="text-xs text-gray-400">Entendemos tus procesos y levantamos requerimientos. Diseñamos pantallas interactivas (UI/UX) para que veas el sistema antes de programarlo.</p>
        </div>
        
        <div class="text-center bg-[#0a0a0e] p-6 rounded-2xl border border-white/5">
          <div class="w-16 h-16 mx-auto rounded-full bg-blue-500/20 flex items-center justify-center text-blue-400 font-black text-2xl mb-4 border-4 border-[#0a0a0e]">2</div>
          <h4 class="text-white font-bold mb-2">Desarrollo Ágil</h4>
          <p class="text-xs text-gray-400">Nuestros ingenieros escriben código limpio y seguro. Te mostraremos avances parciales para asegurar que estamos cumpliendo tus expectativas.</p>
        </div>
        
        <div class="text-center bg-[#0a0a0e] p-6 rounded-2xl border border-white/5">
          <div class="w-16 h-16 mx-auto rounded-full bg-yellow-500/20 flex items-center justify-center text-yellow-400 font-black text-2xl mb-4 border-4 border-[#0a0a0e]">3</div>
          <h4 class="text-white font-bold mb-2">Testing y Despliegue</h4>
          <p class="text-xs text-gray-400">Sometemos el sistema a pruebas de carga y seguridad. Luego capacitamos a tu equipo y lo desplegamos en tu propio servidor web.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. ACCIÓN: Precios Referenciales -->
  <section id="planes" class="relative z-10 py-20 bg-[#0a0a0e]/50 border-t border-white/5">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white mb-4">
          Precios de software a medida <span class="bg-gradient-to-r from-cyan-400 to-yellow-500 text-transparent bg-clip-text">en Perú</span>
        </h2>
        <p class="text-sm text-gray-400">El desarrollo a medida es único por cada cliente. Estos montos de referencia te ayudarán a presupuestar tu proyecto.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        
        <!-- Tier 1 -->
        <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-cyan-500/50 transition-all flex flex-col group">
          <h3 class="text-xl font-bold text-white mb-2">Módulos Internos</h3>
          <p class="text-xs text-gray-400 mb-6">Ideal para Intranets sencillas, calculadoras online, o portales de recursos humanos.</p>
          <div class="mb-6 border-b border-white/10 pb-6">
            <span class="text-xs text-gray-500 font-medium uppercase tracking-widest block mb-1">Inversión inicial desde</span>
            <span class="text-4xl font-extrabold text-white">S/ 2500</span>
          </div>
          <ul class="space-y-4 text-sm text-gray-300 mb-8 flex-1">
            <li class="flex items-start gap-3"><span class="text-cyan-400 font-bold shrink-0">✓</span> Flujo de trabajo 100% Digital</li>
            <li class="flex items-start gap-3"><span class="text-cyan-400 font-bold shrink-0">✓</span> Panel Administrativo Básico</li>
            <li class="flex items-start gap-3"><span class="text-cyan-400 font-bold shrink-0">✓</span> Diseño Adaptable a Celulares</li>
            <li class="flex items-start gap-3"><span class="text-cyan-400 font-bold shrink-0">✓</span> 1 a 3 Perfiles de Usuario</li>
          </ul>
          <a href="contacto.php?ref=desarrollo-software" class="w-full inline-block text-center py-4 text-sm font-bold bg-white/5 hover:bg-cyan-600 hover:text-white border border-white/10 hover:border-cyan-500 transition-all">
            Solicitar Cotización
          </a>
        </div>

        <!-- Tier 2 (Pro) -->
        <div class="glass-card p-8 rounded-2xl border border-blue-500/50 relative bg-blue-950/10 flex flex-col group transform md:-translate-y-4 shadow-[0_15px_30px_rgba(59,130,246,0.15)]">
          <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-blue-500 text-white text-[10px] font-bold px-4 py-1.5 uppercase tracking-widest shadow-lg">El Más Buscado</div>
          <h3 class="text-xl font-bold text-white mb-2">Plataformas SaaS / CRM</h3>
          <p class="text-xs text-gray-400 mb-6">Sistemas robustos de gestión comercial, portales educativos o software para vender membresías.</p>
          <div class="mb-6 border-b border-white/10 pb-6">
            <span class="text-xs text-blue-300 font-medium uppercase tracking-widest block mb-1">Inversión inicial desde</span>
            <span class="text-4xl font-extrabold text-blue-400">S/ 5000</span>
          </div>
          <ul class="space-y-4 text-sm text-gray-300 mb-8 flex-1">
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Pasarelas de Pago Integradas (Culqi, Niubiz)</li>
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Bases de Datos Relacionales (SQL)</li>
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Generación de Reportes PDF/Excel</li>
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Perfiles y Permisos Multi-Nivel</li>
          </ul>
          <a href="contacto.php?ref=desarrollo-software" class="w-full inline-block text-center py-4 text-sm font-bold bg-blue-500 text-white hover:bg-blue-400 transition-all shadow-[0_0_15px_rgba(59,130,246,0.4)]">
            Solicitar Cotización
          </a>
        </div>

        <!-- Tier 3 -->
        <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-yellow-500/50 transition-all flex flex-col group">
          <h3 class="text-xl font-bold text-white mb-2">ERPs Complejos</h3>
          <p class="text-xs text-gray-400 mb-6">Sistemas corporativos a gran escala que integran todas las áreas de una gran empresa matriz.</p>
          <div class="mb-6 border-b border-white/10 pb-6 pt-4">
            <span class="text-3xl font-extrabold text-white">Análisis Personalizado</span>
            <span class="text-xs text-gray-500 font-medium block mt-2">Cotización tras reuniones técnicas</span>
          </div>
          <ul class="space-y-4 text-sm text-gray-300 mb-8 flex-1">
            <li class="flex items-start gap-3"><span class="text-yellow-400 font-bold shrink-0">✓</span> Interconexión con SUNAT e Instituciones</li>
            <li class="flex items-start gap-3"><span class="text-yellow-400 font-bold shrink-0">✓</span> Arquitectura Cloud de Alta Disponibilidad</li>
            <li class="flex items-start gap-3"><span class="text-yellow-400 font-bold shrink-0">✓</span> Microservicios y APIs propias</li>
            <li class="flex items-start gap-3"><span class="text-yellow-400 font-bold shrink-0">✓</span> Auditorías de Seguridad</li>
          </ul>
          <a href="contacto.php?ref=desarrollo-software" class="w-full inline-block text-center py-4 text-sm font-bold bg-white/5 hover:bg-yellow-600 hover:text-white border border-white/10 hover:border-yellow-500 transition-all">
            Agendar Reunión
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- 4.5 SERVICIOS RELACIONADOS (Links Internos) -->
  <section class="relative z-10 py-20 bg-[#0a0a0e]/50 border-t border-white/5">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
          Software a medida <span class="bg-gradient-to-r from-cyan-400 to-yellow-500 text-transparent bg-clip-text">integrado con tu web</span>
        </h2>
        <p class="text-sm text-gray-400 mt-4">Tu sistema personalizado conectado con tu página web, tu tienda online y tu hosting en Perú.</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
        <a href="desarrollo-web.php" class="glass-card p-8 rounded-2xl border border-white/10 hover:border-blue-500/50 transition-all group block">
          <div class="w-12 h-12 rounded-none bg-blue-500/10 text-blue-400 flex items-center justify-center mb-4 border border-blue-500/20 group-hover:bg-blue-500 group-hover:text-black transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white mb-2">Desarrollo Web</h3>
          <p class="text-xs text-gray-400 leading-relaxed">Tu página web institucional a la medida de tu empresa, lista para integrar tu software.</p>
          <span class="text-xs font-bold text-blue-400 mt-4 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">Ver servicio <span>→</span></span>
        </a>
        <a href="ecommerce.php" class="glass-card p-8 rounded-2xl border border-white/10 hover:border-teal-500/50 transition-all group block">
          <div class="w-12 h-12 rounded-none bg-teal-500/10 text-teal-400 flex items-center justify-center mb-4 border border-teal-500/20 group-hover:bg-teal-400 group-hover:text-black transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white mb-2">Tiendas Online</h3>
          <p class="text-xs text-gray-400 leading-relaxed">Integra tu ERP o CRM con tu tienda online para gestionar pedidos y stock en tiempo real.</p>
          <span class="text-xs font-bold text-teal-400 mt-4 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">Ver servicio <span>→</span></span>
        </a>
        <a href="hosting-web.php" class="glass-card p-8 rounded-2xl border border-white/10 hover:border-cyan-500/50 transition-all group block">
          <div class="w-12 h-12 rounded-none bg-cyan-500/10 text-cyan-400 flex items-center justify-center mb-4 border border-cyan-500/20 group-hover:bg-cyan-400 group-hover:text-black transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 7h16M4 12h16M4 17h16" stroke-width="2" stroke-linecap="round"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white mb-2">Hosting en Perú</h3>
          <p class="text-xs text-gray-400 leading-relaxed">Servidores potentes en la nube para desplegar tu software con velocidad y seguridad.</p>
          <span class="text-xs font-bold text-cyan-400 mt-4 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">Ver servicio <span>→</span></span>
        </a>
      </div>
      <div class="text-center mt-10">
        <a href="blog.php" class="inline-flex items-center gap-2 text-sm font-semibold text-gray-300 hover:text-white transition-colors group">
          Artículos de tecnología y negocios en nuestro blog
          <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- 5. FAQ Section -->
  <section id="faq" class="relative z-10 py-20 bg-[#070709] border-t border-white/10">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
          Preguntas sobre el desarrollo <span class="bg-gradient-to-r from-cyan-400 to-yellow-500 text-transparent bg-clip-text">de software a medida</span>
        </h2>
        <p class="text-sm text-gray-400 mt-4">Todo sobre el desarrollo de software a medida para empresas en Perú.</p>
      </div>
      <div class="max-w-3xl mx-auto space-y-4" id="faq-accordion">
        <div class="glass-card p-6 border border-white/5 faq-item">
          <button class="faq-btn w-full flex justify-between items-center text-left">
            <span class="text-white font-semibold text-sm">¿Qué es el desarrollo de software a medida y por qué elegirlo en Perú?</span>
            <svg class="faq-icon w-5 h-5 text-cyan-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
          <div class="faq-answer mt-4 text-sm text-gray-400 leading-relaxed hidden">
            El desarrollo de software a medida consiste en crear un sistema hecho exactamente para los procesos de tu empresa, a diferencia de los ERPs genéricos que obligan a adaptar tu negocio a ellos. En Perú, elegir desarrollo a medida significa tener un sistema que crece contigo, sin licencias costosas ni funcionalidades que no usas.
          </div>
        </div>
        <div class="glass-card p-6 border border-white/5 faq-item">
          <button class="faq-btn w-full flex justify-between items-center text-left">
            <span class="text-white font-semibold text-sm">¿Cuánto cuesta el desarrollo de software a medida en Perú?</span>
            <svg class="faq-icon w-5 h-5 text-cyan-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
          <div class="faq-answer mt-4 text-sm text-gray-400 leading-relaxed hidden">
            Nuestros proyectos de desarrollo de software a medida inician desde S/2500 para módulos de intranet básicos y desde S/5000 para plataformas web completas con CRM. Cada proyecto se cotiza según la complejidad, alcance y tiempos de entrega. Incluimos análisis gratuito previo sin compromiso.
          </div>
        </div>
        <div class="glass-card p-6 border border-white/5 faq-item">
          <button class="faq-btn w-full flex justify-between items-center text-left">
            <span class="text-white font-semibold text-sm">¿Cuánto tiempo toma desarrollar un software a medida?</span>
            <svg class="faq-icon w-5 h-5 text-cyan-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
          <div class="faq-answer mt-4 text-sm text-gray-400 leading-relaxed hidden">
            Un proyecto de desarrollo de software a medida típico toma entre 4 y 12 semanas dependiendo de la complejidad. Trabajamos con metodología ágil entregando avances funcionales cada 2 semanas para que puedas ver el progreso y hacer ajustes durante el proceso.
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
  (function(){
    document.querySelectorAll('.faq-btn').forEach(function(btn){
      btn.addEventListener('click', function(){
        var item = this.closest('.faq-item');
        var answer = item.querySelector('.faq-answer');
        var icon = item.querySelector('.faq-icon');
        var isOpen = !answer.classList.contains('hidden');
        document.querySelectorAll('.faq-answer').forEach(function(a){ a.classList.add('hidden'); });
        document.querySelectorAll('.faq-icon').forEach(function(i){ i.classList.remove('rotate-180'); });
        if (!isOpen) {
          answer.classList.remove('hidden');
          icon.classList.add('rotate-180');
        }
      });
    });
  })();
  </script>

  <!-- Global Footer -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>
