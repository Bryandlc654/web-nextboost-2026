<?php
  $page_title = "Desarrollo Web para Agencias | Next Boost Perú";
  $page_description = "Desarrollo web para agencias de marketing y publicidad. Outsourcing white label con NDA. Tú vendes, nosotros desarrollamos. Partner tecnológico en Perú.";
  $og_url = "https://nextboost.business/desarrollo-web-para-agencias.php";
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
      "@id": "https://nextboost.business/desarrollo-web-para-agencias.php/#breadcrumb",
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
          "name": "Desarrollo Web para Agencias",
          "item": "https://nextboost.business/desarrollo-web-para-agencias.php"
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://nextboost.business/desarrollo-web-para-agencias.php/#service",
      "name": "Desarrollo Web para Agencias",
      "serviceType": "Outsourcing Desarrollo Web",
      "provider": {
        "@type": "Organization",
        "name": "Next Boost",
        "url": "https://nextboost.business/"
      },
      "description": "Servicio de desarrollo web white label para agencias de marketing y publicidad en Perú. Outsourcing técnico, NDA garantizado y entregas con tu marca.",
      "areaServed": "Perú",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Planes para Agencias",
        "itemListElement": [
          {
            "@type": "Offer",
            "price": "600.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Plan Landing (Desde)"
            }
          },
          {
            "@type": "Offer",
            "price": "1200.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Plan Corporativo (Desde)"
            }
          },
          {
            "@type": "Offer",
            "price": "2000.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Plan Ecommerce (Desde)"
            }
          }
        ]
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://nextboost.business/desarrollo-web-para-agencias.php/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿Qué es el desarrollo web para agencias y cómo funciona?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "El desarrollo web para agencias es un servicio outsourcing donde nosotros desarrollamos los sitios web de tus clientes bajo tu propia marca. Tú vendes el proyecto, nosotros lo construimos y entregamos. Tu agencia mantiene la relación con el cliente mientras nosotros hacemos toda la parte técnica."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cómo funciona el modelo white label o marca blanca?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "En el modelo white label, el desarrollo web aparece como si tu agencia lo hubiera creado. Usamos tu marca, tu logo y tus colores en todo el proceso. Firmamos un NDA estricto para que tu cliente nunca sepa de nuestra existencia. Tú facturas directamente a tu cliente con el margen que decidas."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cuánto cuesta tercerizar el desarrollo web para mi agencia?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Nuestros planes de desarrollo web para agencias parten desde S/600 para landing pages, S/1200 para sitios corporativos y S/2000 para tiendas ecommerce. Tú pones tu margen al cliente final. Todos los planes incluyen hosting, SSL y SEO básico."
          }
        },
        {
          "@type": "Question",
          "name": "¿Qué tecnologías usan para el desarrollo web?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Trabajamos con Next.js, React, Tailwind CSS y WordPress según el tipo de proyecto. Todos nuestros sitios son 100% responsivos, optimizados para Core Web Vitals y con puntuación SEO 90+. Entregamos código limpio y documentado."
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
    <div class="absolute -top-40 -left-40 w-[600px] h-[600px] bg-blue-600/10 rounded-full glow-pulse"></div>
    <div class="absolute top-[35%] -right-40 w-[500px] h-[500px] bg-teal-500/5 rounded-full glow-pulse" style="animation-delay: -1.5s;"></div>
    <div class="absolute bottom-[10%] left-[20%] w-[400px] h-[400px] bg-purple-500/5 rounded-full glow-pulse" style="animation-delay: -3s;"></div>
    <div class="absolute inset-0 grid-bg"></div>
  </div>

  <!-- Global Header -->
  <?php include 'includes/header.php'; ?>

  <!-- 1. ATENCIÓN: Hero Section -->
  <main class="relative z-10 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 py-16 lg:py-24">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

      <!-- Left Column: Hero Text -->
      <div class="lg:col-span-7 space-y-6">
        <div class="inline-flex items-center gap-2.5 px-4 py-1.5 badge-gradient text-xs font-medium text-blue-300 animate-in">
          <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
          <span class="tracking-wide">Partner Tecnológico para Agencias de Marketing</span>
        </div>

        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-white leading-[1.1]">
          Desarrollo web para agencias <br>
          <span class="bg-gradient-to-r from-blue-400 to-teal-400 text-transparent bg-clip-text">tú vendes, nosotros programamos.</span>
        </h1>

        <p class="text-base md:text-lg text-gray-400 font-normal leading-relaxed max-w-2xl">
          ¿Eres agencia de marketing, publicidad o diseño y necesitas un equipo de desarrollo web? Nosotros nos encargamos de toda la parte técnica mientras tú mantienes la relación con tu cliente. <strong class="text-white">100% white label, NDA garantizado.</strong>
        </p>

        <!-- Stats -->
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

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 pt-4">
          <a href="contacto.php?ref=agencias" class="inline-flex items-center justify-center gap-3 bg-gradient-to-r from-blue-500 to-teal-400 text-black px-8 py-4 text-sm font-bold rounded-none hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] hover:scale-105 transition-all btn-primary group">
            Solicitar Alianza
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
          <a href="https://wa.me/51962469836?text=Hola%2C%20soy%20agencia%20de%20marketing%20y%20quiero%20tercerizar%20desarrollo%20web" target="_blank" class="inline-flex items-center justify-center gap-2 border border-white/20 hover:border-emerald-500/50 bg-white/5 hover:bg-emerald-500/10 text-white hover:text-emerald-400 px-6 py-4 text-sm font-semibold transition-all">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            WhatsApp
          </a>
        </div>
      </div>

      <!-- Right Column: Visual Card -->
      <div class="lg:col-span-5 relative">
        <div class="glass-card rounded-2xl p-6 border border-white/10 space-y-6 relative overflow-hidden bg-gradient-to-b from-[#141419] to-[#0a0a0c]">
          <div class="flex items-center justify-between border-b border-white/10 pb-4">
            <div class="flex items-center gap-3">
              <div class="w-3 h-3 rounded-full bg-red-500/80"></div>
              <div class="w-3 h-3 rounded-full bg-yellow-500/80"></div>
              <div class="w-3 h-3 rounded-full bg-green-500/80"></div>
            </div>
            <span class="text-[10px] text-gray-500 font-mono">agencia-partner.js</span>
          </div>
          <div class="space-y-3">
            <div class="flex items-center gap-3 bg-blue-500/5 border border-blue-500/10 p-3">
              <span class="w-8 h-8 bg-blue-500/20 text-blue-400 flex items-center justify-center text-xs font-bold shrink-0">1</span>
              <div>
                <span class="text-xs text-gray-300 font-semibold block">Tú vendes el proyecto</span>
                <span class="text-[11px] text-gray-500">Cotizas y cierras el trato con tu cliente.</span>
              </div>
            </div>
            <div class="flex items-center gap-3 bg-teal-500/5 border border-teal-500/10 p-3">
              <span class="w-8 h-8 bg-teal-500/20 text-teal-400 flex items-center justify-center text-xs font-bold shrink-0">2</span>
              <div>
                <span class="text-xs text-gray-300 font-semibold block">Nosotros desarrollamos</span>
                <span class="text-[11px] text-gray-500">Construimos el sitio con tu marca.</span>
              </div>
            </div>
            <div class="flex items-center gap-3 bg-purple-500/5 border border-purple-500/10 p-3">
              <span class="w-8 h-8 bg-purple-500/20 text-purple-400 flex items-center justify-center text-xs font-bold shrink-0">3</span>
              <div>
                <span class="text-xs text-gray-300 font-semibold block">Tu cliente feliz</span>
                <span class="text-[11px] text-gray-500">Entregas y facturas con tu propia marca.</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

  <!-- 2. INTERÉS: Beneficios para tu Agencia -->
  <section class="relative z-10 py-20 bg-[#070709] border-y border-white/10">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">

      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
          ¿Por qué tercerizar tu <br>
          <span class="bg-gradient-to-r from-blue-400 to-teal-400 text-transparent bg-clip-text">desarrollo web con nosotros?</span>
        </h2>
        <p class="text-sm text-gray-400 mt-4">Enfócate en vender y hacer crecer tu agencia mientras nosotros hacemos el trabajo técnico.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-blue-500/30 transition-all">
          <div class="w-12 h-12 rounded-none bg-blue-500/10 text-blue-400 flex items-center justify-center border border-blue-500/20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white">Confidencialidad Total</h3>
          <p class="text-xs text-gray-400 leading-relaxed">
            Firmamos NDA estricto. Tu cliente nunca sabrá que el desarrollo web lo hizo un tercero. Todo aparece bajo tu marca, incluyendo el código fuente y los servidores.
          </p>
        </div>

        <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-teal-500/30 transition-all">
          <div class="w-12 h-12 rounded-none bg-teal-500/10 text-teal-400 flex items-center justify-center border border-teal-500/20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white">Entregas Rápidas</h3>
          <p class="text-xs text-gray-400 leading-relaxed">
            Entregamos landing pages en 5-7 días y sitios corporativos en 2-3 semanas. Tiempos que te permiten cerrar más proyectos al mes sin cuello de botella técnico.
          </p>
        </div>

        <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-purple-500/30 transition-all">
          <div class="w-12 h-12 rounded-none bg-purple-500/10 text-purple-400 flex items-center justify-center border border-purple-500/20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white">Calidad Garantizada</h3>
          <p class="text-xs text-gray-400 leading-relaxed">
            Sitios con SEO 90+, Core Web Vitals óptimos y diseño responsivo. Usamos Next.js, React y las mejores prácticas de desarrollo web moderno.
          </p>
        </div>

        <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-amber-500/30 transition-all">
          <div class="w-12 h-12 rounded-none bg-amber-500/10 text-amber-400 flex items-center justify-center border border-amber-500/20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white">Sin Costo Fijo</h3>
          <p class="text-xs text-gray-400 leading-relaxed">
            No pagas sueldos ni beneficios. Pagas solo por proyecto entregado. Escala tu capacidad de producción sin aumentar tu planilla.
          </p>
        </div>

      </div>

      <div class="text-center mt-12">
        <a href="contacto.php?ref=agencias-beneficios" class="inline-flex items-center justify-center gap-3 bg-gradient-to-r from-blue-500 to-teal-400 text-black px-8 py-4 text-sm font-bold rounded-none hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] hover:scale-105 transition-all group">
          Conviértete en Partner
          <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- 3. PROCESO: Cómo Funciona -->
  <section class="relative z-10 py-20 border-b border-white/5">
    <div class="max-w-screen-xl mx-auto px-8 md:px-16">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
          Cómo funciona el <span class="bg-gradient-to-r from-blue-400 to-teal-400 text-transparent bg-clip-text">outsourcing</span>
        </h2>
        <p class="text-sm text-gray-400 mt-4">Tres pasos simples para empezar a tercerizar el desarrollo web de tu agencia.</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
        <div class="hidden md:block absolute top-1/2 left-0 w-full h-px border-t border-dashed border-white/20 -z-10 transform -translate-y-1/2"></div>

        <div class="text-center bg-[#0a0a0e] p-6 rounded-2xl border border-white/5">
          <div class="w-16 h-16 mx-auto rounded-full bg-blue-500/20 flex items-center justify-center text-blue-400 font-black text-2xl mb-4 border-4 border-[#0a0a0e]">1</div>
          <h4 class="text-white font-bold mb-2">Cuéntanos tu proyecto</h4>
          <p class="text-xs text-gray-400">Nos envías los requerimientos de tu cliente y te damos un precio fijo en 24 horas. Sin rodeos ni reuniones eternas.</p>
        </div>

        <div class="text-center bg-[#0a0a0e] p-6 rounded-2xl border border-white/5">
          <div class="w-16 h-16 mx-auto rounded-full bg-teal-500/20 flex items-center justify-center text-teal-400 font-black text-2xl mb-4 border-4 border-[#0a0a0e]">2</div>
          <h4 class="text-white font-bold mb-2">Desarrollamos y entregamos</h4>
          <p class="text-xs text-gray-400">Construimos el sitio bajo tu marca con tecnología moderna. Te enviamos avances periódicos para que revises.</p>
        </div>

        <div class="text-center bg-[#0a0a0e] p-6 rounded-2xl border border-white/5">
          <div class="w-16 h-16 mx-auto rounded-full bg-purple-500/20 flex items-center justify-center text-purple-400 font-black text-2xl mb-4 border-4 border-[#0a0a0e]">3</div>
          <h4 class="text-white font-bold mb-2">Facturas a tu cliente</h4>
          <p class="text-xs text-gray-400">Recibes el proyecto terminado, lo presentas como tuyo y facturas con el margen que prefieras. Nosotros nunca contactamos a tu cliente.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. DESEO: Tipos de Proyectos -->
  <section class="relative z-10 py-20 bg-[#0a0a0e]/50 border-t border-white/5">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <div class="inline-flex items-center gap-2 mb-4">
          <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
          <span class="text-[10px] uppercase tracking-widest text-gray-400 font-bold">Lo que desarrollamos</span>
        </div>
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white mb-4">
          Proyectos que puedes vender <span class="bg-gradient-to-r from-blue-400 to-teal-400 text-transparent bg-clip-text">con tu marca</span>
        </h2>
        <p class="text-sm text-gray-400">Todo el portafolio de desarrollo web que tu agencia puede ofrecer sin tener un equipo técnico interno.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
        <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-blue-500/50 transition-all group">
          <div class="w-12 h-12 rounded-none bg-blue-500/10 text-blue-400 flex items-center justify-center mb-4 border border-blue-500/20 group-hover:bg-blue-500 group-hover:text-black transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white mb-2">Landing Pages</h3>
          <p class="text-xs text-gray-400 leading-relaxed">Páginas de alto impacto para campañas de Meta Ads y Google Ads. Carga ultrarrápida y formularios inteligentes.</p>
        </div>

        <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-teal-500/50 transition-all group">
          <div class="w-12 h-12 rounded-none bg-teal-500/10 text-teal-400 flex items-center justify-center mb-4 border border-teal-500/20 group-hover:bg-teal-400 group-hover:text-black transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white mb-2">Sitios Corporativos</h3>
          <p class="text-xs text-gray-400 leading-relaxed">Páginas web profesionales con CMS, blog, galería y panel administrador. Para empresas que quieren presencia seria.</p>
        </div>

        <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-purple-500/50 transition-all group">
          <div class="w-12 h-12 rounded-none bg-purple-500/10 text-purple-400 flex items-center justify-center mb-4 border border-purple-500/20 group-hover:bg-purple-400 group-hover:text-black transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white mb-2">Tiendas Online</h3>
          <p class="text-xs text-gray-400 leading-relaxed">Ecommerce completos con pasarela de pago, carrito de compras, gestión de inventario y envíos integrados.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. ACCIÓN: Planes -->
  <section id="planes" class="relative z-10 py-20 bg-[#070709] border-t border-white/10">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white mb-4">
          Planes para <span class="bg-gradient-to-r from-blue-400 to-teal-400 text-transparent bg-clip-text">Agencias</span>
        </h2>
        <p class="text-sm text-gray-400">Precios directos para agencias. Tú pones tu margen al cliente final.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

        <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-blue-500/50 transition-all flex flex-col group">
          <h3 class="text-xl font-bold text-white mb-2">Landing</h3>
          <p class="text-xs text-gray-400 mb-6">Ideal para campañas de ads y captación de leads.</p>
          <div class="mb-6 border-b border-white/10 pb-6">
            <span class="text-4xl font-extrabold text-white">S/ 600</span>
            <span class="text-xs text-gray-500 font-medium"> PEN</span>
          </div>
          <ul class="space-y-4 text-sm text-gray-300 mb-8 flex-1">
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Diseño UX/UI + Copy</li>
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Hosting + SSL incluido</li>
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> SEO On-Page básico</li>
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Formulario + Analytics</li>
          </ul>
          <a href="contacto.php?ref=agencias-landing" class="w-full inline-block text-center py-4 text-sm font-bold bg-white/5 hover:bg-blue-600 hover:text-white border border-white/10 hover:border-blue-500 transition-all">
            Cotizar Landing
          </a>
        </div>

        <div class="glass-card p-8 rounded-2xl border border-teal-500/50 relative bg-teal-950/10 flex flex-col group transform md:-translate-y-4 shadow-[0_15px_30px_rgba(20,184,166,0.15)]">
          <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-teal-500 text-black text-[10px] font-bold px-4 py-1.5 uppercase tracking-widest shadow-lg">Más Vendido</div>
          <h3 class="text-xl font-bold text-white mb-2">Corporativo</h3>
          <p class="text-xs text-gray-400 mb-6">La opción más solicitada por agencias de marketing.</p>
          <div class="mb-6 border-b border-white/10 pb-6">
            <span class="text-4xl font-extrabold text-teal-400">S/ 1200</span>
            <span class="text-xs text-gray-500 font-medium"> PEN</span>
          </div>
          <ul class="space-y-4 text-sm text-gray-300 mb-8 flex-1">
            <li class="flex items-start gap-3"><span class="text-teal-400 font-bold shrink-0">✓</span> Todo lo de Landing +</li>
            <li class="flex items-start gap-3"><span class="text-teal-400 font-bold shrink-0">✓</span> Hasta 5 secciones internas</li>
            <li class="flex items-start gap-3"><span class="text-teal-400 font-bold shrink-0">✓</span> Blog + CMS incluido</li>
            <li class="flex items-start gap-3"><span class="text-teal-400 font-bold shrink-0">✓</span> SEO Avanzado + Schema</li>
          </ul>
          <a href="contacto.php?ref=agencias-corp" class="w-full inline-block text-center py-4 text-sm font-bold bg-teal-500 text-black hover:bg-teal-400 transition-all shadow-[0_0_15px_rgba(20,184,166,0.4)]">
            Cotizar Corporativo
          </a>
        </div>

        <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-purple-500/50 transition-all flex flex-col group">
          <h3 class="text-xl font-bold text-white mb-2">Ecommerce</h3>
          <p class="text-xs text-gray-400 mb-6">Tiendas online listas para vender desde el día 1.</p>
          <div class="mb-6 border-b border-white/10 pb-6">
            <span class="text-4xl font-extrabold text-white">S/ 2000</span>
            <span class="text-xs text-gray-500 font-medium"> PEN</span>
          </div>
          <ul class="space-y-4 text-sm text-gray-300 mb-8 flex-1">
            <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> Todo lo de Corporativo +</li>
            <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> Pasarela de pago integrada</li>
            <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> Gestión de productos</li>
            <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> Panel administrador</li>
          </ul>
          <a href="contacto.php?ref=agencias-ecommerce" class="w-full inline-block text-center py-4 text-sm font-bold bg-white/5 hover:bg-purple-600 hover:text-white border border-white/10 hover:border-purple-500 transition-all">
            Cotizar Ecommerce
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- 6. FAQ Section -->
  <section id="faq" class="relative z-10 py-20 bg-[#050507] border-t border-white/10">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
          Preguntas <span class="bg-gradient-to-r from-blue-400 to-teal-400 text-transparent bg-clip-text">Frecuentes</span>
        </h2>
        <p class="text-sm text-gray-400 mt-4">Todo lo que necesitas saber sobre el desarrollo web para agencias.</p>
      </div>
      <div class="max-w-3xl mx-auto space-y-4" id="faq-accordion">
        <div class="glass-card p-6 border border-white/5 faq-item">
          <button class="faq-btn w-full flex justify-between items-center text-left">
            <span class="text-white font-semibold text-sm">¿Qué es el desarrollo web para agencias y cómo funciona?</span>
            <svg class="faq-icon w-5 h-5 text-blue-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
          <div class="faq-answer mt-4 text-sm text-gray-400 leading-relaxed hidden">
            El desarrollo web para agencias es un servicio outsourcing donde nosotros desarrollamos los sitios web de tus clientes bajo tu propia marca. Tú vendes el proyecto, nosotros lo construimos y entregamos. Tu agencia mantiene la relación con el cliente mientras nosotros hacemos toda la parte técnica.
          </div>
        </div>
        <div class="glass-card p-6 border border-white/5 faq-item">
          <button class="faq-btn w-full flex justify-between items-center text-left">
            <span class="text-white font-semibold text-sm">¿Cómo funciona el modelo white label o marca blanca?</span>
            <svg class="faq-icon w-5 h-5 text-blue-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
          <div class="faq-answer mt-4 text-sm text-gray-400 leading-relaxed hidden">
            En el modelo white label, el desarrollo web aparece como si tu agencia lo hubiera creado. Usamos tu marca, tu logo y tus colores en todo el proceso. Firmamos un NDA estricto para que tu cliente nunca sepa de nuestra existencia. Tú facturas directamente a tu cliente con el margen que decidas.
          </div>
        </div>
        <div class="glass-card p-6 border border-white/5 faq-item">
          <button class="faq-btn w-full flex justify-between items-center text-left">
            <span class="text-white font-semibold text-sm">¿Cuánto cuesta tercerizar el desarrollo web para mi agencia?</span>
            <svg class="faq-icon w-5 h-5 text-blue-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
          <div class="faq-answer mt-4 text-sm text-gray-400 leading-relaxed hidden">
            Nuestros planes de desarrollo web para agencias parten desde S/600 para landing pages, S/1200 para sitios corporativos y S/2000 para tiendas ecommerce. Tú pones tu margen al cliente final. Todos los planes incluyen hosting, SSL y SEO básico.
          </div>
        </div>
        <div class="glass-card p-6 border border-white/5 faq-item">
          <button class="faq-btn w-full flex justify-between items-center text-left">
            <span class="text-white font-semibold text-sm">¿Qué tecnologías usan para el desarrollo web?</span>
            <svg class="faq-icon w-5 h-5 text-blue-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
          <div class="faq-answer mt-4 text-sm text-gray-400 leading-relaxed hidden">
            Trabajamos con Next.js, React, Tailwind CSS y WordPress según el tipo de proyecto. Todos nuestros sitios son 100% responsivos, optimizados para Core Web Vitals y con puntuación SEO 90+. Entregamos código limpio y documentado.
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