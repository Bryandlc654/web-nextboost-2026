<?php
  $page_title = "Crear Tienda Online en Perú | E-commerce - Next Boost";
  $page_description = "Creamos tu tienda online en Perú con pasarelas de pago locales (Yape, Plin, tarjetas), gestión de inventario y diseño optimizado para vender. Cotiza gratis.";
  $og_url = "https://nextboost.business/ecommerce.php";
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
      "@id": "https://nextboost.business/ecommerce.php/#service",
      "name": "Crear Tienda Online en Perú",
      "serviceType": "E-Commerce",
      "url": "https://nextboost.business/ecommerce.php",
      "image": "https://nextboost.business/imagenes-web/shania.webp",
      "provider": {
        "@type": "Organization",
        "@id": "https://nextboost.business/#organization",
        "name": "Next Boost",
        "url": "https://nextboost.business/"
      },
      "description": "Creamos tiendas online profesionales en Perú. Pasarelas de pago locales (Yape, Plin, tarjetas), gestor de inventario y diseño enfocado en conversión.",
      "areaServed": {
        "@type": "Country",
        "name": "Perú"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Planes E-Commerce",
        "itemListElement": [
          {
            "@type": "Offer",
            "price": "1000.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "E-Commerce Start"
            }
          },
          {
            "@type": "Offer",
            "price": "2500.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "E-Commerce Pro"
            }
          }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://nextboost.business/ecommerce.php/#breadcrumb",
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
          "name": "E-commerce",
          "item": "https://nextboost.business/ecommerce.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://nextboost.business/ecommerce.php/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿Cuánto cuesta crear una tienda online en Perú?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "El plan E-Commerce Start comienza en S/ 1000 e incluye diseño de tienda, WooCommerce, pasarela de pagos y hasta 30 productos. El plan Pro cuesta S/ 2500 e incluye automatización de carritos abandonados y cálculo de envíos. Es un pago único, sin mensualidades obligatorias."
          }
        },
        {
          "@type": "Question",
          "name": "¿Qué pasarelas de pago acepta mi tienda online?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Integramos MercadoPago y Niubiz, además de tarjetas Visa, Mastercard y Amex, y billeteras digitales como Yape y Plin, con depósitos directos a tu cuenta bancaria."
          }
        },
        {
          "@type": "Question",
          "name": "¿Puedo administrar mi tienda y productos sin saber programar?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sí. Entregamos un panel autoadministrable con WooCommerce donde gestionas productos, stock, precios y pedidos sin conocimientos técnicos, e incluye capacitación de uso."
          }
        },
        {
          "@type": "Question",
          "name": "¿La tienda online funcionará bien en celulares?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sí. Todas nuestras tiendas son Mobile-First: como el 80% del comercio ocurre en móviles, optimizamos velocidad de carga, botones de compra y un checkout en 3 clics."
          }
        },
        {
          "@type": "Question",
          "name": "¿La tienda online es mía o debo pagar mensualidad?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "La tienda es 100% tuya con un pago único. No cobramos comisiones por venta ni mensualidades obligatorias por uso de plataforma."
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
    <div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-purple-600/10 rounded-full glow-pulse"></div>
    <div class="absolute bottom-[20%] -left-40 w-[500px] h-[500px] bg-blue-500/5 rounded-full glow-pulse" style="animation-delay: -1.5s;"></div>
    <div class="absolute inset-0 grid-bg"></div>
  </div>

  <!-- Global Header -->
  <?php include 'includes/header.php'; ?>

  <!-- 1. ATENCIÓN: Hero Section -->
  <main class="relative z-10 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 py-16 lg:py-24">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      
      <div class="space-y-6">
        <div class="inline-flex items-center gap-2.5 px-4 py-1.5 badge-gradient text-xs font-medium text-purple-300 animate-in">
          <span class="w-2 h-2 rounded-full bg-purple-500 animate-pulse"></span>
          <span class="tracking-wide">Expertos en Comercio Electrónico</span>
        </div>

        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-white leading-[1.1]">
          Crear tienda online
          <span class="bg-gradient-to-r from-purple-400 to-blue-500 text-transparent bg-clip-text block">en Perú</span>
        </h1>

        <p class="text-base md:text-lg text-gray-300 font-normal leading-relaxed max-w-xl">
          ¿Quieres <strong class="text-white">crear una tienda online en Perú</strong> que venda 24/7? Diseñamos tiendas virtuales profesionales con pasarelas de pago locales (Yape, Plin, tarjetas), gestor de inventario y experiencia de compra en 3 clics.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 pt-4">
          <a href="contacto.php?servicio=ecommerce" class="inline-flex items-center justify-center gap-3 bg-gradient-to-r from-purple-500 to-blue-500 text-white px-8 py-4 text-sm font-bold rounded-none hover:shadow-[0_0_30px_rgba(168,85,247,0.4)] hover:scale-105 transition-all group">
            Cotizar mi Tienda Online
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
          <a href="https://wa.me/51962469836?text=Hola%20Next%20Boost,%20deseo%20asesoría%20sobre%20una%20tienda%20online" target="_blank" class="inline-flex items-center justify-center gap-2 border border-white/20 hover:border-emerald-500/50 bg-white/5 hover:bg-emerald-500/10 text-white hover:text-emerald-400 px-6 py-4 text-sm font-semibold transition-all">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            Asesoría por WhatsApp
          </a>
        </div>
      </div>

      <div class="relative">
        <div class="glass-card rounded-2xl p-4 border-2 border-purple-500/20 shadow-[0_0_50px_rgba(168,85,247,0.15)] transform md:rotate-2 hover:rotate-0 transition-transform duration-500">
          <img src="imagenes-web/shania.webp" alt="Tienda online responsiva creada por Next Boost en Perú" width="1896" height="861" fetchpriority="high" decoding="async" class="w-full rounded-xl opacity-90 hover:opacity-100 transition-opacity">
          <!-- Floating notification -->
          <div class="absolute -bottom-6 -left-6 glass-card p-4 rounded-xl border border-white/10 flex items-center gap-4 shadow-xl bg-[#0a0a0e] animate-bounce" style="animation-duration: 3s;">
            <div class="w-10 h-10 rounded-full bg-green-500/20 text-green-400 flex items-center justify-center">
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div>
              <p class="text-xs text-gray-400 font-medium">Nueva Venta Recibida</p>
              <p class="text-sm text-white font-bold">S/ 249.90 (Pagado por Yape)</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

  <!-- 2. INTERÉS: Características Clave -->
  <section class="relative z-10 py-20 bg-[#070709] border-y border-white/10">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
      
      <div class="text-center max-w-3xl mx-auto mb-16">
        <p class="text-xs uppercase tracking-widest text-blue-400 font-bold mb-3">Tecnología para Escalar</p>
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
          Todo lo que tu negocio necesita <br>
          <span class="bg-gradient-to-r from-purple-400 to-blue-500 text-transparent bg-clip-text">en una sola plataforma</span>
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-purple-500/30 transition-all">
          <div class="w-12 h-12 rounded-none bg-purple-500/10 text-purple-400 flex items-center justify-center border border-purple-500/20">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-white">Pagos Seguros al Instante</h3>
          <p class="text-xs text-gray-400 leading-relaxed">
            Acepta todas las tarjetas (Visa, Mastercard, Amex) además de billeteras digitales (Yape, Plin) con depósitos directos a tu cuenta bancaria. Todo encriptado y seguro.
          </p>
        </div>

        <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-blue-500/30 transition-all">
          <div class="w-12 h-12 rounded-none bg-blue-500/10 text-blue-400 flex items-center justify-center border border-blue-500/20">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-white">Gestión de Stock Automatizada</h3>
          <p class="text-xs text-gray-400 leading-relaxed">
            El panel administrativo restará automáticamente el inventario cada vez que vendas. Recibe alertas de stock bajo y actualiza precios de forma masiva en segundos.
          </p>
        </div>

        <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-emerald-500/30 transition-all">
          <div class="w-12 h-12 rounded-none bg-emerald-500/10 text-emerald-400 flex items-center justify-center border border-emerald-500/20">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-white">Mobile-First Inmersivo</h3>
          <p class="text-xs text-gray-400 leading-relaxed">
            El 80% del comercio ocurre en celulares. Desarrollamos interfaces fluidas, botones de compra a la medida del pulgar y tiempos de carga instantáneos en redes 4G.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. DESEO: Caso de Éxito / Portafolio -->
  <section class="relative z-10 py-20 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
    <div class="glass-card rounded-3xl overflow-hidden border border-purple-500/20 bg-gradient-to-b from-[#121217] to-black">
      <div class="grid grid-cols-1 lg:grid-cols-2">
        
        <div class="p-10 md:p-16 flex flex-col justify-center">
          <div class="inline-flex items-center gap-2 mb-6">
            <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
            <span class="text-[10px] uppercase tracking-widest text-gray-400 font-bold">Caso de Estudio Destacado</span>
          </div>
          <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Fajas Shania</h2>
          <p class="text-sm text-gray-300 leading-relaxed mb-8">
            Rediseñamos por completo la tienda online de Fajas Shania. Migramos su plataforma hacia una arquitectura ultra optimizada para móviles, reduciendo los pasos del proceso de pago (Checkout) a solo 3 clics y habilitando pagos locales.
          </p>
          <div class="grid grid-cols-2 gap-6 mb-8 border-t border-white/10 pt-8">
            <div>
              <span class="text-3xl font-extrabold text-purple-400 block">+150%</span>
              <span class="text-[10px] text-gray-500 uppercase tracking-widest font-semibold">Tasa de Conversión</span>
            </div>
            <div>
              <span class="text-3xl font-extrabold text-blue-400 block">&lt; 1.2s</span>
              <span class="text-[10px] text-gray-500 uppercase tracking-widest font-semibold">Velocidad de Carga</span>
            </div>
          </div>
          <a href="https://fajasshania.com/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-3 text-sm text-white font-bold bg-white/5 border border-white/10 px-6 py-3 w-max hover:bg-purple-500 hover:border-purple-500 transition-all group">
            Visitar Tienda en Vivo <span class="group-hover:translate-x-1 transition-transform">→</span>
          </a>
        </div>
        
        <div class="h-[400px] lg:h-auto bg-cover bg-top bg-no-repeat relative" style="background-image: url('imagenes-web/shania.webp');">
          <div class="absolute inset-0 bg-gradient-to-r from-[#121217] to-transparent lg:block hidden"></div>
          <div class="absolute inset-0 bg-gradient-to-t from-[#121217] to-transparent block lg:hidden"></div>
        </div>

      </div>
    </div>
  </section>

  <!-- 4. ACCIÓN: Precios -->
  <section class="relative z-10 py-20 bg-[#0a0a0e]/50 border-t border-white/5">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white mb-4">
          Inversión <span class="bg-gradient-to-r from-purple-400 to-blue-500 text-transparent bg-clip-text">Transparente</span>
        </h2>
        <p class="text-sm text-gray-400">Sin pagos mensuales obligatorios por uso de plataforma (adiós tarifas ocultas de Shopify). La web es 100% tuya.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        
        <!-- Tier 1 -->
        <div class="glass-card p-10 rounded-2xl border border-white/10 hover:border-purple-500/50 transition-all flex flex-col group">
          <h3 class="text-2xl font-bold text-white mb-2">E-Commerce Start</h3>
          <p class="text-xs text-gray-400 mb-6">Ideal para nuevos negocios o emprendedores que buscan formalizar sus ventas online con una solución potente.</p>
          <div class="mb-6 border-b border-white/10 pb-6">
            <span class="text-4xl font-extrabold text-white">S/ 1000</span>
            <span class="text-xs text-gray-500 font-medium"> PEN / Pago único</span>
          </div>
          <ul class="space-y-4 text-sm text-gray-300 mb-8 flex-1">
            <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> Diseño Tienda + Home + 5 Páginas</li>
            <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> WooCommerce + Panel Autoadministrable</li>
            <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> Integración de Pagos (MercadoPago / Niubiz)</li>
            <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> Carga Inicial de hasta 30 Productos</li>
            <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> Certificado SSL y Seguridad Básica</li>
          </ul>
          <a href="contacto.php?servicio=ecommerce" class="w-full inline-block text-center py-4 text-sm font-bold bg-white/5 hover:bg-purple-500 hover:text-white border border-white/10 hover:border-purple-500 transition-all">
            Comenzar con Start
          </a>
        </div>

        <!-- Tier 2 (Pro) -->
        <div class="glass-card p-10 rounded-2xl border border-blue-500/50 relative bg-blue-950/10 flex flex-col group transform md:-translate-y-4 shadow-[0_15px_30px_rgba(59,130,246,0.15)]">
          <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-blue-500 text-white text-[10px] font-bold px-4 py-1.5 uppercase tracking-widest shadow-lg">Más Popular</div>
          <h3 class="text-2xl font-bold text-white mb-2">E-Commerce Pro</h3>
          <p class="text-xs text-gray-400 mb-6">Para marcas que ya venden en volumen y necesitan automatización total, recuperación de carritos y más velocidad.</p>
          <div class="mb-6 border-b border-white/10 pb-6">
            <span class="text-4xl font-extrabold text-blue-400">S/ 2500</span>
            <span class="text-xs text-gray-500 font-medium"> PEN / Pago único</span>
          </div>
          <ul class="space-y-4 text-sm text-gray-300 mb-8 flex-1">
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Todo lo del plan Start incluido</li>
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Automatización de Carritos Abandonados</li>
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Integración con Costos de Envío (Olva/Shalom)</li>
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Carga Masiva (Ilimitados mediante Excel)</li>
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Optimización de Velocidad Extrema (Cache Varnish)</li>
          </ul>
          <a href="contacto.php?servicio=ecommerce" class="w-full inline-block text-center py-4 text-sm font-bold bg-blue-500 text-white hover:bg-blue-400 transition-all shadow-[0_0_15px_rgba(59,130,246,0.4)]">
            Elegir Nivel Pro
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- Preguntas Frecuentes (SEO) -->
  <section class="relative z-10 py-20 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 border-t border-white/5">
    <div class="text-center max-w-3xl mx-auto mb-12">
      <p class="text-xs uppercase tracking-widest text-blue-400 font-bold mb-3">Resolvemos tus dudas</p>
      <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
        Preguntas frecuentes sobre <span class="bg-gradient-to-r from-purple-400 to-blue-500 text-transparent bg-clip-text">tiendas online</span>
      </h2>
    </div>
    <div class="max-w-3xl mx-auto space-y-4">
      <details class="group glass-card rounded-xl border border-white/10 p-6">
        <summary class="flex items-center justify-between gap-4 cursor-pointer list-none text-white font-bold">
          <span>¿Cuánto cuesta crear una tienda online en Perú?</span>
          <span class="text-purple-400 group-open:rotate-45 transition-transform text-xl shrink-0">+</span>
        </summary>
        <p class="text-xs text-gray-400 leading-relaxed mt-3">El plan E-Commerce Start comienza en S/ 1000 e incluye diseño de tienda, WooCommerce, pasarela de pagos y hasta 30 productos. El plan Pro cuesta S/ 2500 e incluye automatización de carritos abandonados y cálculo de envíos. Es un pago único, sin mensualidades obligatorias.</p>
      </details>
      <details class="group glass-card rounded-xl border border-white/10 p-6">
        <summary class="flex items-center justify-between gap-4 cursor-pointer list-none text-white font-bold">
          <span>¿Qué pasarelas de pago acepta mi tienda online?</span>
          <span class="text-purple-400 group-open:rotate-45 transition-transform text-xl shrink-0">+</span>
        </summary>
        <p class="text-xs text-gray-400 leading-relaxed mt-3">Integramos MercadoPago y Niubiz, además de tarjetas Visa, Mastercard y Amex, y billeteras digitales como Yape y Plin, con depósitos directos a tu cuenta bancaria.</p>
      </details>
      <details class="group glass-card rounded-xl border border-white/10 p-6">
        <summary class="flex items-center justify-between gap-4 cursor-pointer list-none text-white font-bold">
          <span>¿Puedo administrar mi tienda y productos sin saber programar?</span>
          <span class="text-purple-400 group-open:rotate-45 transition-transform text-xl shrink-0">+</span>
        </summary>
        <p class="text-xs text-gray-400 leading-relaxed mt-3">Sí. Entregamos un panel autoadministrable con WooCommerce donde gestionas productos, stock, precios y pedidos sin conocimientos técnicos, e incluye capacitación de uso.</p>
      </details>
      <details class="group glass-card rounded-xl border border-white/10 p-6">
        <summary class="flex items-center justify-between gap-4 cursor-pointer list-none text-white font-bold">
          <span>¿La tienda online funcionará bien en celulares?</span>
          <span class="text-purple-400 group-open:rotate-45 transition-transform text-xl shrink-0">+</span>
        </summary>
        <p class="text-xs text-gray-400 leading-relaxed mt-3">Sí. Todas nuestras tiendas son Mobile-First: como el 80% del comercio ocurre en móviles, optimizamos velocidad de carga, botones de compra y un checkout en 3 clics.</p>
      </details>
      <details class="group glass-card rounded-xl border border-white/10 p-6">
        <summary class="flex items-center justify-between gap-4 cursor-pointer list-none text-white font-bold">
          <span>¿La tienda online es mía o debo pagar mensualidad?</span>
          <span class="text-purple-400 group-open:rotate-45 transition-transform text-xl shrink-0">+</span>
        </summary>
        <p class="text-xs text-gray-400 leading-relaxed mt-3">La tienda es 100% tuya con un pago único. No cobramos comisiones por venta ni mensualidades obligatorias por uso de plataforma.</p>
      </details>
    </div>
  </section>

  <!-- Servicios Relacionados (Enlazado Interno SEO) -->
  <section class="relative z-10 py-16 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 border-t border-white/5">
    <div class="text-center max-w-3xl mx-auto mb-10">
      <h2 class="text-2xl md:text-4xl font-semibold tracking-tight text-white">
        Servicios <span class="bg-gradient-to-r from-purple-400 to-blue-500 text-transparent bg-clip-text">relacionados</span>
      </h2>
      <p class="text-xs text-gray-400 mt-3">Todo lo que necesitas para vender más por internet.</p>
    </div>
    <div class="flex flex-wrap justify-center gap-3 text-xs">
      <a href="desarrollo-web.php" class="glass-card px-4 py-2.5 border border-white/10 hover:border-blue-500/40 text-gray-300 hover:text-white transition-colors">Desarrollo y diseño web</a>
      <a href="cuanto-cuesta-una-tienda-online-peru.php" class="glass-card px-4 py-2.5 border border-white/10 hover:border-purple-500/40 text-gray-300 hover:text-white transition-colors">¿Cuánto cuesta una tienda online?</a>
      <a href="hosting-web.php" class="glass-card px-4 py-2.5 border border-white/10 hover:border-purple-500/40 text-gray-300 hover:text-white transition-colors">Hosting web y dominio</a>
      <a href="posicionamiento-seo.php" class="glass-card px-4 py-2.5 border border-white/10 hover:border-emerald-500/40 text-gray-300 hover:text-white transition-colors">Posicionamiento SEO para e-commerce</a>
      <a href="redes-sociales.php" class="glass-card px-4 py-2.5 border border-white/10 hover:border-pink-500/40 text-gray-300 hover:text-white transition-colors">Marketing en redes sociales</a>
      <a href="pagina-web-wordpress-peru.php" class="glass-card px-4 py-2.5 border border-white/10 hover:border-teal-500/40 text-gray-300 hover:text-white transition-colors">Páginas web en WordPress</a>
      <a href="proyectos.php" class="glass-card px-4 py-2.5 border border-white/10 hover:border-amber-500/40 text-gray-300 hover:text-white transition-colors">Ver portafolio de proyectos</a>
      <a href="blog.php" class="glass-card px-4 py-2.5 border border-white/10 hover:border-cyan-500/40 text-gray-300 hover:text-white transition-colors">Blog de e-commerce</a>
    </div>
  </section>

  <!-- Global Footer -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>
