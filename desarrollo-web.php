<?php
  $page_title = "Desarrollo Web en Perú | Diseño de Páginas Web - Next Boost";
  $page_description = "Empresa de desarrollo web en Perú. Diseño de páginas web, landing pages y tiendas online con SEO técnico y hosting premium. Cotiza tu web gratis.";
  $og_url = "https://nextboost.business/desarrollo-web.php";
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
      "@type": "Service",
      "@id": "https://nextboost.business/desarrollo-web.php/#service",
      "name": "Empresa de Desarrollo Web",
      "serviceType": "Desarrollo Web",
      "url": "https://nextboost.business/desarrollo-web.php",
      "image": "https://nextboost.business/imagenes-web/next-boost.png",
      "provider": {
        "@type": "Organization",
        "@id": "https://nextboost.business/#organization",
        "name": "Next Boost",
        "url": "https://nextboost.business/"
      },
      "description": "Empresa de desarrollo web en Perú. Diseño de páginas web, landing pages y tiendas online con SEO técnico y hosting premium.",
      "areaServed": {
        "@type": "Country",
        "name": "Perú"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Planes de Desarrollo Web",
        "itemListElement": [
          {
            "@type": "Offer",
            "price": "450.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Landing Page"
            }
          },
          {
            "@type": "Offer",
            "price": "550.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Web Informativa"
            }
          },
          {
            "@type": "Offer",
            "price": "800.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Web Corporativa"
            }
          },
          {
            "@type": "Offer",
            "price": "1000.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "E-Commerce"
            }
          }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://nextboost.business/desarrollo-web.php/#breadcrumb",
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
          "name": "Desarrollo Web",
          "item": "https://nextboost.business/desarrollo-web.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://nextboost.business/desarrollo-web.php/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿Por qué el desarrollo en Next.js es superior para el SEO en Google?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Next.js utiliza Renderizado en Servidor (SSR) y Generación Estática (SSG), lo que permite que los robots de Google rastreen la web en HTML ya procesado al instante. Esto elimina demoras de renderizado JavaScript, mejora los Core Web Vitals y garantiza un diseño 100% responsive con enfoque Mobile-First."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cuánto tiempo toma desarrollar una página web profesional?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Una landing page optimizada se entrega habitualmente en 5 a 8 días hábiles. Un sitio web corporativo completo requiere de 2 a 3 semanas, dependiendo de la cantidad de secciones e integraciones requeridas."
          }
        },
        {
          "@type": "Question",
          "name": "¿Podré actualizar el contenido de la web por mi cuenta?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sí. Integramos paneles administrables tipo CMS (Headless WordPress, Sanity o Strapi) muy fáciles de usar, donde podrás editar textos, cambiar imágenes y subir artículos sin tocar código."
          }
        },
        {
          "@type": "Question",
          "name": "¿Incluyen el certificado de seguridad SSL y el soporte técnico?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sí, todos nuestros desarrollos incluyen certificado SSL (HTTPS), configuración de correo corporativo y 30 días de garantía de soporte técnico sin costo adicional."
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
    <div class="absolute top-[40%] -right-40 w-[500px] h-[500px] bg-teal-500/5 rounded-full glow-pulse" style="animation-delay: -1.5s;"></div>
    <div class="absolute inset-0 grid-bg"></div>
  </div>

  <!-- Global Header -->
  <?php include 'includes/header.php'; ?>

  <!-- Hero Section: Development & High SEO -->
  <main class="relative z-10 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 py-16 lg:py-24">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      
      <!-- Left Column: SEO Content (7 cols) -->
      <div class="lg:col-span-7 space-y-6">
        <div class="inline-flex items-center gap-2.5 px-4 py-1.5 badge-gradient text-xs font-medium text-blue-300 animate-in">
          <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
          <span class="tracking-wide">Agencia Especializada en Desarrollo Web & SEO Técnico</span>
        </div>

        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-white leading-[1.1]">
          Empresa de desarrollo web
          <span class="gradient-text block">en Perú</span>
        </h1>

        <p class="text-base md:text-lg text-gray-300 font-normal leading-relaxed max-w-2xl">
          Somos una empresa de desarrollo web en Perú. Creamos sitios web profesionales, landing pages de alto impacto y tiendas online optimizadas para convertir. Diseño moderno, SEO técnico incluido y hosting premium.
        </p>

        <!-- Key SEO Metric Badges -->
        <div class="grid grid-cols-3 gap-4 pt-4 border-t border-white/10 max-w-xl">
          <div class="glass-card p-3 rounded-none text-center border border-emerald-500/20">
            <span class="text-2xl md:text-3xl font-extrabold text-emerald-400 block">99/100</span>
            <span class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">PageSpeed Score</span>
          </div>
          <div class="glass-card p-3 rounded-none text-center border border-blue-500/20">
            <span class="text-2xl md:text-3xl font-extrabold text-blue-400 block">&lt; 0.8s</span>
            <span class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Tiempo Carga</span>
          </div>
          <div class="glass-card p-3 rounded-none text-center border border-teal-500/20">
            <span class="text-2xl md:text-3xl font-extrabold text-teal-300 block">100%</span>
            <span class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">SEO On-Page</span>
          </div>
        </div>

        <!-- Action CTAs -->
        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 pt-4">
          <a href="contacto.php?servicio=desarrollo-web" class="inline-flex items-center justify-center gap-3 bg-gradient-to-r from-blue-500 to-teal-400 text-black px-8 py-4 text-sm font-bold rounded-none hover:shadow-[0_0_30px_rgba(59,130,246,0.4)] hover:scale-105 transition-all btn-primary group">
            Cotizar Mi Desarrollo Web
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
          <a href="https://wa.me/51962469836?text=Hola%20Next%20Boost,%20deseo%20cotizar%20un%20sitio%20web%20profesional" target="_blank" class="inline-flex items-center justify-center gap-2 border border-white/20 hover:border-emerald-500/50 bg-white/5 hover:bg-emerald-500/10 text-white hover:text-emerald-400 px-6 py-4 text-sm font-semibold transition-all">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            Asesoría Técnica por WhatsApp
          </a>
        </div>

      </div>

      <!-- Right Column: Interactive Performance & SEO Gauge (5 cols) -->
      <div class="lg:col-span-5 relative">
        <div class="glass-card rounded-2xl p-6 border border-white/10 space-y-6 relative overflow-hidden bg-gradient-to-b from-[#121217] to-[#08080a]">
          
          <div class="flex items-center justify-between border-b border-white/10 pb-4">
            <span class="text-xs font-mono text-gray-400 flex items-center gap-2">
              <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
              Google Lighthouse Audit Report
            </span>
            <span class="text-[10px] font-bold text-emerald-400 bg-emerald-500/10 px-2.5 py-1 border border-emerald-500/20">PASSED</span>
          </div>

          <!-- Speed Score Circular Representation -->
          <div class="grid grid-cols-2 gap-4 text-center">
            
            <div class="p-4 bg-white/5 border border-white/10 rounded-none flex flex-col items-center justify-center">
              <div class="w-16 h-16 rounded-full border-4 border-emerald-400 flex items-center justify-center text-emerald-400 font-extrabold text-xl mb-2 shadow-[0_0_20px_rgba(52,211,153,0.3)]">
                99
              </div>
              <span class="text-xs font-bold text-white">Performance</span>
              <span class="text-[10px] text-gray-400">Carga ultra veloz</span>
            </div>

            <div class="p-4 bg-white/5 border border-white/10 rounded-none flex flex-col items-center justify-center">
              <div class="w-16 h-16 rounded-full border-4 border-blue-400 flex items-center justify-center text-blue-400 font-extrabold text-xl mb-2 shadow-[0_0_20px_rgba(96,165,250,0.3)]">
                100
              </div>
              <span class="text-xs font-bold text-white">SEO Score</span>
              <span class="text-[10px] text-gray-400">Indexación perfecta</span>
            </div>

          </div>

          <!-- Core Web Vitals Checklist -->
          <div class="space-y-2 font-mono text-xs">
            <div class="p-2.5 bg-white/5 border border-white/5 flex items-center justify-between">
              <span class="text-gray-400">LCP (Largest Contentful Paint)</span>
              <span class="text-emerald-400 font-bold">0.7s (Excelente)</span>
            </div>
            <div class="p-2.5 bg-white/5 border border-white/5 flex items-center justify-between">
              <span class="text-gray-400">CLS (Cumulative Layout Shift)</span>
              <span class="text-emerald-400 font-bold">0.00 (Estable)</span>
            </div>
            <div class="p-2.5 bg-white/5 border border-white/5 flex items-center justify-between">
              <span class="text-gray-400">INP (Interaction to Next Paint)</span>
              <span class="text-emerald-400 font-bold">12ms (Instantáneo)</span>
            </div>
          </div>

          <p class="text-[11px] text-gray-400 text-center leading-relaxed">
            🚀 Todas nuestras webs se construyen bajo estándares estrictos de <strong class="text-white">Google Core Web Vitals</strong> para maximizar tu tráfico orgánico.
          </p>

        </div>
      </div>

    </div>
  </main>

  <!-- SEO Difference Section: Next.js vs Heavy Traditional WP -->
  <section class="relative z-10 py-20 bg-[#070709] border-y border-white/10">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
      
      <div class="text-center max-w-3xl mx-auto mb-16">
        <p class="text-xs uppercase tracking-widest text-blue-400 font-bold mb-3">La Ventaja Tecnológica</p>
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
          ¿Por qué nuestras webs <span class="gradient-text">superan a la competencia</span> en Google?
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
        
        <!-- Competitor Traditional Webs (Bad) -->
        <div class="glass-card p-8 rounded-2xl border border-red-500/20 bg-red-950/10 space-y-6">
          <div class="flex items-center gap-3 border-b border-red-500/20 pb-4">
            <span class="w-3 h-3 rounded-full bg-red-500"></span>
            <h3 class="text-xl font-bold text-white">Webs Tradicionales con Plantillas</h3>
          </div>
          <ul class="space-y-4 text-xs text-gray-300">
            <li class="flex items-start gap-3">
              <span class="text-red-400 font-bold shrink-0">✕</span>
              <span><strong>Carga Lenta (3s a 8s):</strong> El 53% de los usuarios abandona el sitio antes de ver el contenido.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-red-400 font-bold shrink-0">✕</span>
              <span><strong>Constructores Visuales Pesados:</strong> Código inflado con plugins innecesarios que penalizan el SEO en Google.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-red-400 font-bold shrink-0">✕</span>
              <span><strong>Vulnerabilidades de Seguridad:</strong> Ataques constantes por falta de actualizaciones y código expuesto.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-red-400 font-bold shrink-0">✕</span>
              <span><strong>Experiencia Móvil Deficiente:</strong> Desplazamientos lentos y maquetación rota en teléfonos.</span>
            </li>
          </ul>
        </div>

        <!-- Next Boost Solution (Awesome) -->
        <div class="glass-card p-8 rounded-2xl border-2 border-emerald-500/30 bg-emerald-950/10 space-y-6">
          <div class="flex items-center gap-3 border-b border-emerald-500/20 pb-4">
            <span class="w-3 h-3 rounded-full bg-emerald-400 animate-pulse"></span>
            <h3 class="text-xl font-bold text-white">Desarrollo Web Next Boost (Next.js)</h3>
          </div>
          <ul class="space-y-4 text-xs text-gray-200">
            <li class="flex items-start gap-3">
              <span class="text-emerald-400 font-bold shrink-0">✓</span>
              <span><strong>Carga Instantánea (&lt; 0.8s):</strong> Tiempos de respuesta ultra rápidos que cautivan a los clientes.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-emerald-400 font-bold shrink-0">✓</span>
              <span><strong>Arquitectura Jamstack & SEO SSR:</strong> Código limpio interpretado nativamente por los rastreadores de Google.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-emerald-400 font-bold shrink-0">✓</span>
              <span><strong>Seguridad Inquebrantable:</strong> Sin bases de datos expuestas directamente al público ni plugins vulnerables.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-emerald-400 font-bold shrink-0">✓</span>
              <span><strong>Diseño Responsivo Mobile-First:</strong> Optimización milimétrica para Smart TV, tablets y smartphones.</span>
            </li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <!-- Service Types Grid Section -->
  <section class="relative z-10 py-20 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <p class="text-xs uppercase tracking-widest text-teal-400 font-bold mb-3">Soluciones a la Medida</p>
      <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
        Tipos de Desarrollos Web <span class="gradient-text">que Construimos</span>
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Type 1 -->
      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-blue-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 group-hover:bg-blue-500 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m3 0h1m-1-4h.01M9 16h.01M9 12h.01M9 8h.01M15 16h.01M15 12h.01M15 8h.01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Webs Corporativas Empresariales</h3>
        <p class="text-xs text-gray-400 leading-relaxed">
          Sitios institucionales diseñados para proyectar autoridad de marca, confianza y liderar la captura de leads calificados en tu sector.
        </p>
      </article>

      <!-- Type 2 -->
      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-teal-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-teal-500/10 border border-teal-500/20 flex items-center justify-center text-teal-400 group-hover:bg-teal-400 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Landing Pages de Alta Conversión</h3>
        <p class="text-xs text-gray-400 leading-relaxed">
          Páginas de aterrizaje enfocadas en campañas de Google Ads y Meta Ads. Diseñadas científicamente para maximizar el porcentaje de conversiones.
        </p>
      </article>

      <!-- Type 3 -->
      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-purple-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 group-hover:bg-purple-400 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Rediseño Web & Migración a Next.js</h3>
        <p class="text-xs text-gray-400 leading-relaxed">
          Transformamos tu sitio web lento o desactualizado en una moderna plataforma estática o renderizada en servidor sin perder tu posicionamiento SEO actual.
        </p>
      </article>

      <!-- Type 4 -->
      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-pink-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-pink-500/10 border border-pink-500/20 flex items-center justify-center text-pink-400 group-hover:bg-pink-500 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Catálogos & Portales Interactivos</h3>
        <p class="text-xs text-gray-400 leading-relaxed">
          Estructuras dinámicas para inmobiliarias, automotrices y servicios que requieren filtros avanzados, galerías 3D e integración a sistemas CRM.
        </p>
      </article>

      <!-- Type 5 -->
      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-cyan-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 group-hover:bg-cyan-400 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Desarrollo Web con CMS Administrable</h3>
        <p class="text-xs text-gray-400 leading-relaxed">
          Paneles de control intuitivos donde tu equipo podrá cambiar imágenes, redactar blogs y modificar precios sin necesidad de saber programar.
        </p>
      </article>

      <!-- Type 6 -->
      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-emerald-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 group-hover:bg-emerald-400 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">SEO Técnico & Auditoría Web Incluida</h3>
        <p class="text-xs text-gray-400 leading-relaxed">
          Implementación de datos estructurados JSON-LD, sitemaps XML automáticos, optimización de imágenes WebP y metas etiquetas SEO listas para posicionar.
        </p>
      </article>

    </div>
  </section>

  <!-- Pricing Section -->
  <section class="relative z-10 py-20 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 border-t border-white/5 bg-[#0a0a0e]/50">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <p class="text-xs uppercase tracking-widest text-emerald-400 font-bold mb-3">Transparencia Total</p>
      <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
        Planes y Precios <span class="gradient-text">Claros</span>
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Plan 1 -->
      <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-teal-500/50 transition-all flex flex-col h-full group">
        <h3 class="text-xl font-bold text-white mb-2">Landing Page</h3>
        <p class="text-xs text-gray-400 mb-6">Ideal para campañas publicitarias (Google Ads, Meta Ads) de un solo producto o servicio.</p>
        <div class="mb-6 border-b border-white/10 pb-6">
          <span class="text-3xl font-bold text-teal-400">S/ 450</span>
          <span class="text-xs text-gray-500 font-medium"> PEN / Pago único</span>
        </div>
        <ul class="space-y-4 text-xs text-gray-300 mb-8 flex-1">
          <li class="flex items-start gap-3"><span class="text-teal-400 font-bold shrink-0">✓</span> Diseño UX/UI Personalizado</li>
          <li class="flex items-start gap-3"><span class="text-teal-400 font-bold shrink-0">✓</span> 1 Página (Long-scroll)</li>
          <li class="flex items-start gap-3"><span class="text-teal-400 font-bold shrink-0">✓</span> Optimización Móvil 100%</li>
          <li class="flex items-start gap-3"><span class="text-teal-400 font-bold shrink-0">✓</span> Formulario de Contacto Leads</li>
          <li class="flex items-start gap-3"><span class="text-teal-400 font-bold shrink-0">✓</span> SEO Básico Técnico</li>
        </ul>
        <a href="contacto.php?servicio=desarrollo-web" class="w-full inline-block text-center py-3 text-sm font-bold bg-white/5 hover:bg-teal-500 hover:text-black border border-white/10 hover:border-teal-500 transition-all">
          Cotizar Landing
        </a>
      </div>

      <!-- Plan 2 -->
      <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-blue-500/50 transition-all flex flex-col h-full group">
        <h3 class="text-xl font-bold text-white mb-2">Web Informativa</h3>
        <p class="text-xs text-gray-400 mb-6">Perfecta para empresas de servicios que necesitan presencia online profesional.</p>
        <div class="mb-6 border-b border-white/10 pb-6">
          <span class="text-3xl font-bold text-blue-400">S/ 550</span>
          <span class="text-xs text-gray-500 font-medium"> PEN / Pago único</span>
        </div>
        <ul class="space-y-4 text-xs text-gray-300 mb-8 flex-1">
          <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Diseño UX/UI Personalizado</li>
          <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Hasta 5 Secciones Internas</li>
          <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Hosting + Dominio (1 año)</li>
          <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Botón Flotante WhatsApp</li>
          <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Optimización de Carga</li>
        </ul>
        <a href="contacto.php?servicio=desarrollo-web" class="w-full inline-block text-center py-3 text-sm font-bold bg-white/5 hover:bg-blue-500 hover:text-black border border-white/10 hover:border-blue-500 transition-all">
          Cotizar Informativa
        </a>
      </div>

      <!-- Plan 3 (Destacado) -->
      <div class="glass-card p-8 rounded-2xl border border-emerald-500/50 relative bg-emerald-950/10 flex flex-col h-full group transform md:-translate-y-4 shadow-[0_15px_30px_rgba(16,185,129,0.15)]">
        <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-emerald-500 text-black text-[10px] font-bold px-4 py-1 uppercase tracking-wider">Recomendado</div>
        <h3 class="text-xl font-bold text-white mb-2">Web Corporativa</h3>
        <p class="text-xs text-gray-400 mb-6">Para empresas establecidas que buscan liderar su sector con un CMS autogestionable.</p>
        <div class="mb-6 border-b border-white/10 pb-6">
          <span class="text-3xl font-bold text-emerald-400">S/ 800</span>
          <span class="text-xs text-gray-500 font-medium"> PEN / Pago único</span>
        </div>
        <ul class="space-y-4 text-xs text-gray-300 mb-8 flex-1">
          <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">✓</span> CMS Autoadministrable (Blog/Proyectos)</li>
          <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">✓</span> Hasta 10 Secciones</li>
          <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">✓</span> Correos Corporativos</li>
          <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">✓</span> SEO On-Page Avanzado</li>
          <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">✓</span> Capacitación de Uso</li>
        </ul>
        <a href="contacto.php?servicio=desarrollo-web" class="w-full inline-block text-center py-3 text-sm font-bold bg-emerald-500 text-black hover:bg-emerald-400 transition-all shadow-[0_0_15px_rgba(16,185,129,0.4)]">
          Cotizar Corporativa
        </a>
      </div>

      <!-- Plan 4 -->
      <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-purple-500/50 transition-all flex flex-col h-full group">
        <h3 class="text-xl font-bold text-white mb-2">E-commerce</h3>
        <p class="text-xs text-gray-400 mb-6">Tienda virtual completa para automatizar tus ventas, pagos e inventario 24/7.</p>
        <div class="mb-6 border-b border-white/10 pb-6">
          <span class="text-3xl font-bold text-purple-400">S/ 1000</span>
          <span class="text-xs text-gray-500 font-medium"> PEN / Pago único</span>
        </div>
        <ul class="space-y-4 text-xs text-gray-300 mb-8 flex-1">
          <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> Pasarela de Pagos (Tarjetas/Yape)</li>
          <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> Panel de Gestión de Stock y Ventas</li>
          <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> Carga de Primeros 30 Productos</li>
          <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> Cálculo de Costos Envío</li>
          <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> Carrito Abandonado Automático</li>
        </ul>
        <a href="contacto.php?servicio=desarrollo-web" class="w-full inline-block text-center py-3 text-sm font-bold bg-white/5 hover:bg-purple-500 hover:text-white border border-white/10 hover:border-purple-500 transition-all">
          Cotizar E-commerce
        </a>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section class="relative z-10 py-20 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 border-t border-white/5">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <p class="text-xs uppercase tracking-widest text-blue-400 font-bold mb-3">Nuestros Resultados</p>
      <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
        Proyectos <span class="gradient-text">Destacados</span>
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Project 1 -->
      <div class="glass-card rounded-2xl overflow-hidden border border-white/10 group relative flex flex-col h-full bg-[#121217]">
        <div class="h-64 md:h-80 w-full overflow-hidden bg-black relative">
          <div class="absolute inset-0 bg-blue-500/20 mix-blend-overlay z-10 group-hover:opacity-0 transition-opacity duration-500"></div>
          <img src="imagenes-web/shania.webp" alt="Rediseño de e-commerce para Fajas Shania - desarrollo web en Perú" width="800" height="500" loading="lazy" class="w-full h-full object-cover object-top opacity-70 group-hover:opacity-100 transition-all duration-700 group-hover:scale-105">
        </div>
        <div class="p-8 flex-1 flex flex-col">
          <div class="flex items-center gap-2 mb-4">
            <span class="text-[10px] font-bold uppercase tracking-wider text-purple-400 bg-purple-500/10 px-2.5 py-1">E-Commerce</span>
            <span class="text-[10px] font-bold uppercase tracking-wider text-gray-400 bg-white/5 px-2.5 py-1">WooCommerce</span>
          </div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors">Fajas Shania</h3>
          <p class="text-sm text-gray-400 mb-6 flex-1">
            Rediseño total de tienda online. Optimización de embudo de ventas, pasarela de pagos integrada y sincronización de inventario en tiempo real.
          </p>
          <a href="https://fajasshania.com/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm text-white font-bold hover:text-blue-400 transition-colors mt-auto">
            Visitar Tienda <span class="group-hover:translate-x-1 transition-transform">→</span>
          </a>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="glass-card rounded-2xl overflow-hidden border border-white/10 group relative flex flex-col h-full bg-[#121217]">
        <div class="h-64 md:h-80 w-full overflow-hidden bg-black relative">
          <div class="absolute inset-0 bg-teal-500/20 mix-blend-overlay z-10 group-hover:opacity-0 transition-opacity duration-500"></div>
          <img src="imagenes-web/eratgo.webp" alt="Desarrollo de plataforma SaaS Eratgo con Next.js y React" width="800" height="500" loading="lazy" class="w-full h-full object-cover object-top opacity-70 group-hover:opacity-100 transition-all duration-700 group-hover:scale-105">
        </div>
        <div class="p-8 flex-1 flex flex-col">
          <div class="flex items-center gap-2 mb-4">
            <span class="text-[10px] font-bold uppercase tracking-wider text-blue-400 bg-blue-500/10 px-2.5 py-1">Aplicación Web</span>
            <span class="text-[10px] font-bold uppercase tracking-wider text-gray-400 bg-white/5 px-2.5 py-1">Next.js / React</span>
          </div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-teal-400 transition-colors">Eratgo</h3>
          <p class="text-sm text-gray-400 mb-6 flex-1">
            Plataforma SaaS de lectura de Ebooks en la nube. Arquitectura moderna, tiempos de carga instantáneos y panel de control administrativo personalizado.
          </p>
          <a href="https://eratgo.com/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm text-white font-bold hover:text-teal-400 transition-colors mt-auto">
            Visitar Plataforma <span class="group-hover:translate-x-1 transition-transform">→</span>
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Process Section -->
  <section class="relative z-10 py-16 bg-[#0a0a0e] border-t border-white/10">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <p class="text-xs uppercase tracking-widest text-blue-400 font-bold mb-3">Metodología Ágil</p>
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
          Proceso de Desarrollo en <span class="gradient-text">4 Pasos Clave</span>
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        
        <div class="glass-card p-6 rounded-2xl border border-white/10 space-y-3">
          <span class="text-3xl font-extrabold text-blue-500 block">01</span>
          <h3 class="text-base font-bold text-white">Brief & Arquitectura</h3>
          <p class="text-xs text-gray-400 leading-relaxed">Analizamos tu negocio, competencia y palabras clave objetivo para estructurar la web.</p>
        </div>

        <div class="glass-card p-6 rounded-2xl border border-white/10 space-y-3">
          <span class="text-3xl font-extrabold text-teal-400 block">02</span>
          <h3 class="text-base font-bold text-white">Diseño UX/UI en Figma</h3>
          <p class="text-xs text-gray-400 leading-relaxed">Diseñamos prototipos visuales interactivos y modernos acordes a tu identidad de marca.</p>
        </div>

        <div class="glass-card p-6 rounded-2xl border border-white/10 space-y-3">
          <span class="text-3xl font-extrabold text-purple-400 block">03</span>
          <h3 class="text-base font-bold text-white">Desarrollo Next.js & SEO</h3>
          <p class="text-xs text-gray-400 leading-relaxed">Programación de código limpio, animación de componentes e integración SEO On-Page.</p>
        </div>

        <div class="glass-card p-6 rounded-2xl border border-white/10 space-y-3">
          <span class="text-3xl font-extrabold text-emerald-400 block">04</span>
          <h3 class="text-base font-bold text-white">Pruebas QA & Lanzamiento</h3>
          <p class="text-xs text-gray-400 leading-relaxed">Auditoría PageSpeed 95+, configuración de dominio SSL e indexación en Google Console.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Technical SEO & Web Development FAQs -->
  <section class="relative z-10 py-20 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
      
      <div class="lg:col-span-4 space-y-4">
        <p class="text-xs uppercase tracking-widest text-teal-400 font-bold">Resolvemos tus dudas</p>
        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-white leading-tight">
          Preguntas Frecuentes sobre <span class="gradient-text">Desarrollo Web & SEO</span>
        </h2>
        <p class="text-xs text-gray-400 leading-relaxed">
          Consulta todo lo que necesitas saber antes de iniciar tu nuevo proyecto digital con nuestro equipo.
        </p>
      </div>

      <div class="lg:col-span-8 space-y-4">
        
        <div class="glass-card rounded-xl p-6 border border-white/10 space-y-2">
          <h3 class="text-base font-bold text-white flex items-center gap-2">
            <span class="text-blue-400">01.</span> ¿Por qué el desarrollo en Next.js es superior para el SEO en Google?
          </h3>
          <p class="text-xs text-gray-400 leading-relaxed pt-1">
            Next.js utiliza Renderizado en Servidor (SSR) y Generación Estática (SSG), lo que permite que los robots de Google rastreen la web en código HTML ya procesado al instante. Esto elimina demoras de renderizado JavaScript y garantiza puntuaciones de velocidad óptimas en Core Web Vitals.
          </p>
        </div>

        <div class="glass-card rounded-xl p-6 border border-white/10 space-y-2">
          <h3 class="text-base font-bold text-white flex items-center gap-2">
            <span class="text-blue-400">02.</span> ¿Cuánto tiempo toma desarrollar una página web profesional?
          </h3>
          <p class="text-xs text-gray-400 leading-relaxed pt-1">
            Una landing page optimizada se entrega habitualmente en 5 a 8 días hábiles. Un sitio web corporativo completo requiere de 2 a 3 semanas, dependiendo de la cantidad de secciones e integraciones requeridas.
          </p>
        </div>

        <div class="glass-card rounded-xl p-6 border border-white/10 space-y-2">
          <h3 class="text-base font-bold text-white flex items-center gap-2">
            <span class="text-blue-400">03.</span> ¿Podré actualizar el contenido de la web por mi cuenta?
          </h3>
          <p class="text-xs text-gray-400 leading-relaxed pt-1">
            Sí. Integramos paneles administrables tipo CMS (Headless WordPress, Sanity o Strapi) muy fáciles de usar donde podrás editar textos, cambiar imágenes y subir artículos sin tocar código.
          </p>
        </div>

        <div class="glass-card rounded-xl p-6 border border-white/10 space-y-2">
          <h3 class="text-base font-bold text-white flex items-center gap-2">
            <span class="text-blue-400">04.</span> ¿Incluyen el certificado de seguridad SSL y el soporte técnico?
          </h3>
          <p class="text-xs text-gray-400 leading-relaxed pt-1">
            Sí, todos nuestros desarrollos incluyen certificado SSL (https), configuración de correo corporativo y 30 días de garantía de soporte técnico sin costo adicional.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Servicios Relacionados (Enlazado Interno SEO) -->
  <section class="relative z-10 py-16 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 border-t border-white/5">
    <div class="text-center max-w-3xl mx-auto mb-10">
      <h2 class="text-2xl md:text-4xl font-semibold tracking-tight text-white">
        Servicios <span class="gradient-text">relacionados</span>
      </h2>
      <p class="text-xs text-gray-400 mt-3">Complementa tu proyecto web con estas soluciones de Next Boost.</p>
    </div>
    <div class="flex flex-wrap justify-center gap-3 text-xs">
      <a href="ecommerce.php" class="glass-card px-4 py-2.5 border border-white/10 hover:border-teal-500/40 text-gray-300 hover:text-white transition-colors">Tiendas online y e-commerce</a>
      <a href="hosting-web.php" class="glass-card px-4 py-2.5 border border-white/10 hover:border-purple-500/40 text-gray-300 hover:text-white transition-colors">Hosting web y dominio</a>
      <a href="posicionamiento-seo.php" class="glass-card px-4 py-2.5 border border-white/10 hover:border-emerald-500/40 text-gray-300 hover:text-white transition-colors">Posicionamiento SEO en Google</a>
      <a href="pagina-web-wordpress-peru.php" class="glass-card px-4 py-2.5 border border-white/10 hover:border-blue-500/40 text-gray-300 hover:text-white transition-colors">Páginas web en WordPress</a>
      <a href="pagina-web-con-inteligencia-artificial.php" class="glass-card px-4 py-2.5 border border-white/10 hover:border-violet-500/40 text-gray-300 hover:text-white transition-colors">Web con inteligencia artificial</a>
      <a href="agencia-desarrollo-web-marca-blanca.php" class="glass-card px-4 py-2.5 border border-white/10 hover:border-cyan-500/40 text-gray-300 hover:text-white transition-colors">Desarrollo web marca blanca</a>
      <a href="proyectos.php" class="glass-card px-4 py-2.5 border border-white/10 hover:border-amber-500/40 text-gray-300 hover:text-white transition-colors">Ver portafolio de proyectos</a>
      <a href="blog.php" class="glass-card px-4 py-2.5 border border-white/10 hover:border-pink-500/40 text-gray-300 hover:text-white transition-colors">Blog de desarrollo web</a>
    </div>
  </section>

  <!-- Final Action Banner -->
  <section class="relative z-10 py-16 px-8 md:px-16 lg:px-20 max-w-screen-2xl mx-auto mb-16">
    <div class="glass-card rounded-3xl p-10 md:p-16 border border-blue-500/30 bg-gradient-to-r from-blue-950/40 via-[#121216] to-teal-950/40 relative overflow-hidden text-center md:text-left flex flex-col md:flex-row items-center justify-between gap-8">
      
      <div class="space-y-4 max-w-2xl">
        <span class="text-[10px] uppercase tracking-widest text-teal-400 font-extrabold bg-teal-500/10 px-3 py-1 border border-teal-500/20">Impulsa tu presencia digital</span>
        <h2 class="text-3xl md:text-5xl font-bold tracking-tight text-white leading-tight">
          ¿Listo para tener una web ultra rápida que venda más?
        </h2>
        <p class="text-sm text-gray-300 leading-relaxed">
          Cuéntanos sobre tu proyecto hoy mismo. Te entregamos una propuesta personalizada y auditoría de velocidad sin costo.
        </p>
      </div>

      <div class="shrink-0 flex flex-col items-center gap-4">
        <a href="contacto.php?servicio=desarrollo-web" class="inline-flex items-center gap-3 bg-gradient-to-r from-blue-500 to-teal-400 text-black px-8 py-4 text-sm font-bold rounded-none hover:shadow-[0_0_30px_rgba(59,130,246,0.4)] hover:scale-105 transition-all btn-primary">
          Solicitar Cotización Web
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
