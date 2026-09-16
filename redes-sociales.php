<?php
  $page_title = "Gestión de Redes Sociales Perú | Planes desde S/500 | Next Boost";
  $page_description = "Gestión de redes sociales en Perú desde S/500/mes. Community Management, Reels y Meta Ads para convertir seguidores en clientes.";
  $og_url = "https://nextboost.business/redes-sociales.php";
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
      "@id": "https://nextboost.business/redes-sociales.php/#breadcrumb",
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
          "name": "Gestión de Redes Sociales Perú",
          "item": "https://nextboost.business/redes-sociales.php"
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://nextboost.business/redes-sociales.php/#service",
      "name": "Gestión de Redes Sociales y Community Management",
      "serviceType": "Social Media Marketing",
      "provider": {
        "@type": "Organization",
        "name": "Next Boost",
        "url": "https://nextboost.business/"
      },
      "description": "Gestión de redes sociales para empresas en Perú. Estrategia de contenidos, creación de Reels, diseño de posts y campañas publicitarias en Meta Ads.",
      "areaServed": "Perú",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Planes Mensuales de Redes Sociales",
        "itemListElement": [
          {
            "@type": "Offer",
            "price": "500.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Plan Esencial"
            }
          },
          {
            "@type": "Offer",
            "price": "800.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Plan Crecimiento"
            }
          },
          {
            "@type": "Offer",
            "price": "1500.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Plan Corporativo"
            }
          }
        ]
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://nextboost.business/redes-sociales.php/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿Qué incluye la gestión de redes sociales para mi empresa en Perú?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Nuestro servicio de gestión de redes sociales incluye estrategia de contenido, diseño de posts, edición de Reels, copywriting, programación de publicaciones, respuesta a comentarios y reportes mensuales de resultados. Los planes más avanzados añaden Meta Ads y sesiones fotográficas."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cuánto cuesta el servicio de gestión de redes sociales en Perú?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Nuestros planes de gestión de redes sociales parten desde S/500 PEN mensuales para el plan Esencial, S/800 para el plan Crecimiento (incluye Reels y Meta Ads) y S/1500 para el plan Corporativo (historias diarias y sesión fotográfica)."
          }
        },
        {
          "@type": "Question",
          "name": "¿En cuánto tiempo veo resultados con la gestión de redes sociales?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Los primeros resultados orgánicos se ven desde el primer mes con mayor engagement y alcance. Las campañas de Meta Ads generan resultados inmediatos desde el día 1. La consolidación de una comunidad sólida toma de 3 a 6 meses de trabajo constante."
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
    <div class="absolute -top-40 right-20 w-[600px] h-[600px] bg-pink-600/10 rounded-full glow-pulse"></div>
    <div class="absolute bottom-[10%] -left-40 w-[500px] h-[500px] bg-purple-500/5 rounded-full glow-pulse" style="animation-delay: -1.5s;"></div>
    <div class="absolute inset-0 grid-bg"></div>
  </div>

  <!-- Global Header -->
  <?php include 'includes/header.php'; ?>

  <!-- 1. ATENCIÓN: Hero Section -->
  <main class="relative z-10 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 py-16 lg:py-24">
    <div class="text-center max-w-4xl mx-auto space-y-8">
      
      <div class="inline-flex items-center gap-2.5 px-4 py-1.5 badge-gradient text-xs font-medium text-pink-300 animate-in mx-auto">
        <span class="w-2 h-2 rounded-full bg-pink-500 animate-pulse"></span>
        <span class="tracking-wide">Agencia de Social Media & Ads</span>
      </div>

      <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-white leading-[1.1]">
        Gestión de redes sociales en Perú <br>
        <span class="bg-gradient-to-r from-pink-400 to-purple-500 text-transparent bg-clip-text">convierte seguidores en clientes.</span>
      </h1>

      <p class="text-base md:text-xl text-gray-300 font-normal leading-relaxed max-w-2xl mx-auto">
        No publicamos por publicar. Diseñamos estrategias de contenido, Reels virales y campañas en 
        <strong class="text-white">Meta Ads</strong> enfocadas 100% en aumentar tus ventas y posicionar tu marca.
      </p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center pt-4">
        <a href="#planes" class="inline-flex items-center justify-center gap-3 bg-gradient-to-r from-pink-500 to-purple-600 text-white px-8 py-4 text-sm font-bold rounded-none hover:shadow-[0_0_30px_rgba(236,72,153,0.4)] hover:scale-105 transition-all group">
          Ver Planes Mensuales
          <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 14l-7 7m0 0l-7-7m7 7V3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>
      
      <!-- Social Media Icons (SVGs) -->
      <div class="pt-12 border-t border-white/10 mt-12 flex flex-wrap justify-center gap-8 opacity-60">
        <div class="flex items-center gap-2 font-bold text-gray-400">
          <svg class="w-6 h-6 text-pink-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg> Instagram
        </div>
        <div class="flex items-center gap-2 font-bold text-gray-400">
          <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg> Facebook
        </div>
        <div class="flex items-center gap-2 font-bold text-gray-400">
          <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 2.78-1.15 5.54-3.33 7.39-2.2 1.82-5.18 2.6-8.03 2.1-3.28-.59-6.04-2.82-7.14-5.96-1.07-3.01-.52-6.47 1.47-8.99 1.94-2.45 4.96-3.83 8.04-4.04v4.06c-1.28.14-2.61.64-3.52 1.56-1.4 1.4-1.65 3.59-.62 5.23 1.12 1.73 3.39 2.45 5.28 1.54 1.35-.64 2.22-1.99 2.29-3.48.07-4.48.04-8.97.04-13.45-.01-1.37.01-2.74-.01-4.11z"/></svg> TikTok
        </div>
      </div>
    </div>
  </main>

  <!-- 2. INTERÉS: Pilares del Servicio -->
  <section class="relative z-10 py-20 bg-[#070709] border-y border-white/10">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
      
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
          Gestión de redes sociales <br>
          <span class="bg-gradient-to-r from-pink-400 to-purple-500 text-transparent bg-clip-text">para escalar tu negocio</span>
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-pink-500/30 transition-all">
          <div class="w-12 h-12 rounded-none bg-pink-500/10 text-pink-400 flex items-center justify-center border border-pink-500/20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white">Estrategia de Contenido</h3>
          <p class="text-xs text-gray-400 leading-relaxed">
            Creamos un calendario editorial mensual con pilares de contenido enfocados en educar, generar confianza y vender de manera orgánica.
          </p>
        </div>

        <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-purple-500/30 transition-all">
          <div class="w-12 h-12 rounded-none bg-purple-500/10 text-purple-400 flex items-center justify-center border border-purple-500/20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white">Reels y Formato Corto</h3>
          <p class="text-xs text-gray-400 leading-relaxed">
            El video es el rey. Editamos Reels dinámicos con tendencias actuales y ganchos visuales para maximizar tu alcance en Instagram y TikTok.
          </p>
        </div>

        <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-blue-500/30 transition-all">
          <div class="w-12 h-12 rounded-none bg-blue-500/10 text-blue-400 flex items-center justify-center border border-blue-500/20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white">Campañas Meta Ads</h3>
          <p class="text-xs text-gray-400 leading-relaxed">
            Configuramos y optimizamos publicidad pagada en Facebook e Instagram para atraer prospectos perfilados directamente a tu WhatsApp o Web.
          </p>
        </div>

        <div class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-emerald-500/30 transition-all">
          <div class="w-12 h-12 rounded-none bg-emerald-500/10 text-emerald-400 flex items-center justify-center border border-emerald-500/20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white">Reportes de Resultados</h3>
          <p class="text-xs text-gray-400 leading-relaxed">
            Transparencia total. Recibe un informe mensual detallando el crecimiento de tu comunidad, interacción generada y costo por lead.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- 2.5 PROCESO -->
  <section class="relative z-10 py-20 border-b border-white/5 bg-[#070709]">
    <div class="max-w-screen-xl mx-auto px-8 md:px-16">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
          Cómo trabajamos tu <span class="bg-gradient-to-r from-pink-400 to-purple-500 text-transparent bg-clip-text">gestión de redes sociales</span>
        </h2>
        <p class="text-sm text-gray-400 mt-4">Un proceso claro que combina estrategia, contenido y publicidad para resultados medibles.</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
        <div class="hidden md:block absolute top-1/2 left-0 w-full h-px border-t border-dashed border-white/20 -z-10 transform -translate-y-1/2"></div>

        <div class="text-center bg-[#0a0a0e] p-6 rounded-2xl border border-white/5">
          <div class="w-16 h-16 mx-auto rounded-full bg-pink-500/20 flex items-center justify-center text-pink-400 font-black text-2xl mb-4 border-4 border-[#0a0a0e]">1</div>
          <h4 class="text-white font-bold mb-2">Estrategia y Diagnóstico</h4>
          <p class="text-xs text-gray-400">Analizamos tu marca, competencia y audiencia. Definimos pilares de contenido, tono de voz y objetivos de crecimiento medibles.</p>
        </div>

        <div class="text-center bg-[#0a0a0e] p-6 rounded-2xl border border-white/5">
          <div class="w-16 h-16 mx-auto rounded-full bg-purple-500/20 flex items-center justify-center text-purple-400 font-black text-2xl mb-4 border-4 border-[#0a0a0e]">2</div>
          <h4 class="text-white font-bold mb-2">Producción y Publicación</h4>
          <p class="text-xs text-gray-400">Diseñamos posts, editamos Reels y programamos contenido. Mantenemos tus redes activas todos los días sin que hagas nada.</p>
        </div>

        <div class="text-center bg-[#0a0a0e] p-6 rounded-2xl border border-white/5">
          <div class="w-16 h-16 mx-auto rounded-full bg-blue-500/20 flex items-center justify-center text-blue-400 font-black text-2xl mb-4 border-4 border-[#0a0a0e]">3</div>
          <h4 class="text-white font-bold mb-2">Optimización y Reportes</h4>
          <p class="text-xs text-gray-400">Medimos métricas, optimizamos campañas Meta Ads y entregamos reportes mensuales con el crecimiento real de tu comunidad.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. DESEO: Portafolio de Redes -->
  <section class="relative z-10 py-20 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 border-t border-white/5 bg-[#050507]">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <div class="inline-flex items-center gap-2 mb-4">
        <span class="w-2 h-2 rounded-full bg-pink-500 animate-pulse"></span>
        <span class="text-[10px] uppercase tracking-widest text-gray-400 font-bold">Nuestro Trabajo</span>
      </div>
      <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white mb-4">
        Resultados de nuestra <span class="bg-gradient-to-r from-pink-400 to-purple-500 text-transparent bg-clip-text">gestión de redes sociales</span>
      </h2>
      <p class="text-sm text-gray-400">Resultados reales que generan engagement y ventas para nuestros clientes.</p>
    </div>

    <!-- Contenedor Principal (Reels y Grillas) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
      
      <!-- Reels (Video Marketing) - 5 Columnas -->
      <div class="lg:col-span-5 space-y-6">
        <h3 class="text-xl font-bold text-white flex items-center gap-2 mb-6">
          <svg class="w-5 h-5 text-pink-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
          Reels
        </h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
          <div class="glass-card rounded-2xl overflow-hidden border border-white/10 flex justify-center bg-black">
            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Freel%2F3591676837673021&show_text=false&width=250" width="250" height="444" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
          </div>
          <div class="glass-card rounded-2xl overflow-hidden border border-white/10 flex justify-center bg-black">
            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1022992480129869&show_text=false&width=250" width="250" height="444" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
          </div>
          <div class="glass-card rounded-2xl overflow-hidden border border-white/10 flex justify-center bg-black">
            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1455329543309249&show_text=false&width=250" width="250" height="444" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
          </div>
        </div>
      </div>

      <!-- Grilla de Imágenes - 7 Columnas -->
      <div class="lg:col-span-7 space-y-6">
        <h3 class="text-xl font-bold text-white flex items-center gap-2 mb-6">
          <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          Post y Portadas
        </h3>
        <div class="columns-2 md:columns-3 gap-4 space-y-4">
          <div class="glass-card overflow-hidden border border-white/10 group rounded-none break-inside-avoid">
            <img src="portafolio-redes/Portada Brevetex.png" alt="Diseño de portada para redes sociales marca Brevetex" class="w-full h-auto transition-transform duration-500 group-hover:scale-110 opacity-90 group-hover:opacity-100">
          </div>
          <div class="glass-card overflow-hidden border border-white/10 group rounded-none break-inside-avoid">
            <img src="portafolio-redes/Post 6.png" alt="Post publicitario para Instagram con promoción" class="w-full h-auto transition-transform duration-500 group-hover:scale-110 opacity-90 group-hover:opacity-100">
          </div>
          <div class="glass-card overflow-hidden border border-white/10 group rounded-none break-inside-avoid">
            <img src="portafolio-redes/educacion tr.png" alt="Diseño gráfico educativo para redes sociales" class="w-full h-auto transition-transform duration-500 group-hover:scale-110 opacity-90 group-hover:opacity-100">
          </div>
          <div class="glass-card overflow-hidden border border-white/10 group rounded-none break-inside-avoid">
            <img src="portafolio-redes/aqp secretaria.png" alt="Publicación de servicios de secretaria en redes sociales" class="w-full h-auto transition-transform duration-500 group-hover:scale-110 opacity-90 group-hover:opacity-100">
          </div>
          <div class="glass-card overflow-hidden border border-white/10 group rounded-none break-inside-avoid">
            <img src="portafolio-redes/podologo.png" alt="Diseño de post para consultorio de podología" class="w-full h-auto transition-transform duration-500 group-hover:scale-110 opacity-90 group-hover:opacity-100">
          </div>
          <div class="glass-card overflow-hidden border border-white/10 group rounded-none break-inside-avoid">
            <img src="portafolio-redes/647036885_1349239417224574_5820152872763474502_n.png" alt="Campaña gráfica de marketing digital en redes sociales" class="w-full h-auto transition-transform duration-500 group-hover:scale-110 opacity-90 group-hover:opacity-100">
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- 4. ACCIÓN: Precios -->
  <section id="planes" class="relative z-10 py-20 bg-[#0a0a0e]/50 border-t border-white/5">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white mb-4">
          Planes de redes sociales <span class="bg-gradient-to-r from-pink-400 to-purple-500 text-transparent bg-clip-text">en Perú</span>
        </h2>
        <p class="text-sm text-gray-400">Escoge el nivel de intensidad que tu marca necesita hoy.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        
        <!-- Tier 1 -->
        <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-pink-500/50 transition-all flex flex-col group">
          <h3 class="text-xl font-bold text-white mb-2">Esencial</h3>
          <p class="text-xs text-gray-400 mb-6">Ideal para marcas nuevas que necesitan presencia constante y profesional en redes.</p>
          <div class="mb-6 border-b border-white/10 pb-6">
            <span class="text-4xl font-extrabold text-white">S/ 500</span>
            <span class="text-xs text-gray-500 font-medium"> PEN / mensual</span>
          </div>
          <ul class="space-y-4 text-sm text-gray-300 mb-8 flex-1">
            <li class="flex items-start gap-3"><span class="text-pink-400 font-bold shrink-0">✓</span> 12 Publicaciones al Mes (Posts/Carruseles)</li>
            <li class="flex items-start gap-3"><span class="text-pink-400 font-bold shrink-0">✓</span> 4 Historias Dinámicas (1x semana)</li>
            <li class="flex items-start gap-3"><span class="text-pink-400 font-bold shrink-0">✓</span> Diseño Gráfico y Copywriting</li>
            <li class="flex items-start gap-3"><span class="text-pink-400 font-bold shrink-0">✓</span> Respuestas a Comentarios Básicos</li>
            <li class="flex items-start gap-3 opacity-50"><span class="text-gray-500 font-bold shrink-0">✕</span> Gestión de Meta Ads (No incluido)</li>
          </ul>
          <a href="#contacto" class="w-full inline-block text-center py-4 text-sm font-bold bg-white/5 hover:bg-pink-600 hover:text-white border border-white/10 hover:border-pink-500 transition-all">
            Elegir Esencial
          </a>
        </div>

        <!-- Tier 2 (Pro) -->
        <div class="glass-card p-8 rounded-2xl border border-purple-500/50 relative bg-purple-950/10 flex flex-col group transform md:-translate-y-4 shadow-[0_15px_30px_rgba(168,85,247,0.15)]">
          <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-purple-500 text-white text-[10px] font-bold px-4 py-1.5 uppercase tracking-widest shadow-lg">El Favorito</div>
          <h3 class="text-xl font-bold text-white mb-2">Crecimiento</h3>
          <p class="text-xs text-gray-400 mb-6">Para negocios que buscan escalar e incorporar campañas de publicidad efectivas.</p>
          <div class="mb-6 border-b border-white/10 pb-6">
            <span class="text-4xl font-extrabold text-purple-400">S/ 800</span>
            <span class="text-xs text-gray-500 font-medium"> PEN / mensual</span>
          </div>
          <ul class="space-y-4 text-sm text-gray-300 mb-8 flex-1">
            <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> 15 Publicaciones al Mes</li>
            <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> 8 Historias (2x semana)</li>
            <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> Edición de 2 Reels al Mes</li>
            <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> Gestión de Meta Ads (Inversión aparte)</li>
            <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">✓</span> Reporte de Resultados Mensual</li>
          </ul>
          <a href="#contacto" class="w-full inline-block text-center py-4 text-sm font-bold bg-purple-500 text-white hover:bg-purple-400 transition-all shadow-[0_0_15px_rgba(168,85,247,0.4)]">
            Elegir Crecimiento
          </a>
        </div>

        <!-- Tier 3 -->
        <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-blue-500/50 transition-all flex flex-col group">
          <h3 class="text-xl font-bold text-white mb-2">Corporativo</h3>
          <p class="text-xs text-gray-400 mb-6">Omnipresencia digital. Alta frecuencia de videos y optimización de pauta avanzada.</p>
          <div class="mb-6 border-b border-white/10 pb-6">
            <span class="text-4xl font-extrabold text-white">S/ 1500</span>
            <span class="text-xs text-gray-500 font-medium"> PEN / mensual</span>
          </div>
          <ul class="space-y-4 text-sm text-gray-300 mb-8 flex-1">
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> 20 Publicaciones al Mes</li>
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Historias Diarias</li>
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Edición de 4 Reels al Mes</li>
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Sesión Fotográfica de Productos (Lima)</li>
            <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">✓</span> Pauta Meta Ads + Google Ads</li>
          </ul>
          <a href="#contacto" class="w-full inline-block text-center py-4 text-sm font-bold bg-white/5 hover:bg-blue-600 hover:text-white border border-white/10 hover:border-blue-500 transition-all">
            Elegir Corporativo
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
          Combina redes sociales <span class="bg-gradient-to-r from-pink-400 to-purple-500 text-transparent bg-clip-text">con más tráfico</span>
        </h2>
        <p class="text-sm text-gray-400 mt-4">Tus redes sociales atraen atención; tu web convierte y Google multiplica el resultado.</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
        <a href="desarrollo-web.php" class="glass-card p-8 rounded-2xl border border-white/10 hover:border-blue-500/50 transition-all group block">
          <div class="w-12 h-12 rounded-none bg-blue-500/10 text-blue-400 flex items-center justify-center mb-4 border border-blue-500/20 group-hover:bg-blue-500 group-hover:text-black transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white mb-2">Desarrollo Web</h3>
          <p class="text-xs text-gray-400 leading-relaxed">Convierte el tráfico de tus redes en leads con una web optimizada para ventas.</p>
          <span class="text-xs font-bold text-blue-400 mt-4 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">Ver servicio <span>→</span></span>
        </a>
        <a href="posicionamiento-seo.php" class="glass-card p-8 rounded-2xl border border-white/10 hover:border-emerald-500/50 transition-all group block">
          <div class="w-12 h-12 rounded-none bg-emerald-500/10 text-emerald-400 flex items-center justify-center mb-4 border border-emerald-500/20 group-hover:bg-emerald-400 group-hover:text-black transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white mb-2">Posicionamiento SEO</h3>
          <p class="text-xs text-gray-400 leading-relaxed">Multiplica el alcance de tu marca con tráfico orgánico desde Google.</p>
          <span class="text-xs font-bold text-emerald-400 mt-4 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">Ver servicio <span>→</span></span>
        </a>
        <a href="ecommerce.php" class="glass-card p-8 rounded-2xl border border-white/10 hover:border-teal-500/50 transition-all group block">
          <div class="w-12 h-12 rounded-none bg-teal-500/10 text-teal-400 flex items-center justify-center mb-4 border border-teal-500/20 group-hover:bg-teal-400 group-hover:text-black transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white mb-2">Tiendas Online</h3>
          <p class="text-xs text-gray-400 leading-relaxed">Vende directamente desde Instagram y Facebook con una tienda online integrada.</p>
          <span class="text-xs font-bold text-teal-400 mt-4 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">Ver servicio <span>→</span></span>
        </a>
      </div>
      <div class="text-center mt-10">
        <a href="blog.php" class="inline-flex items-center gap-2 text-sm font-semibold text-gray-300 hover:text-white transition-colors group">
          Guías de marketing digital en nuestro blog
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
          Preguntas <span class="bg-gradient-to-r from-pink-400 to-purple-500 text-transparent bg-clip-text">Frecuentes</span>
        </h2>
        <p class="text-sm text-gray-400 mt-4">Todo sobre nuestro servicio de gestión de redes sociales en Perú.</p>
      </div>
      <div class="max-w-3xl mx-auto space-y-4" id="faq-accordion">
        <div class="glass-card p-6 border border-white/5 faq-item">
          <button class="faq-btn w-full flex justify-between items-center text-left">
            <span class="text-white font-semibold text-sm">¿Qué incluye la gestión de redes sociales para mi empresa en Perú?</span>
            <svg class="faq-icon w-5 h-5 text-pink-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
          <div class="faq-answer mt-4 text-sm text-gray-400 leading-relaxed hidden">
            Nuestro servicio de gestión de redes sociales incluye estrategia de contenido, diseño de posts, edición de Reels, copywriting, programación de publicaciones, respuesta a comentarios y reportes mensuales de resultados. Los planes más avanzados añaden Meta Ads y sesiones fotográficas.
          </div>
        </div>
        <div class="glass-card p-6 border border-white/5 faq-item">
          <button class="faq-btn w-full flex justify-between items-center text-left">
            <span class="text-white font-semibold text-sm">¿Cuánto cuesta el servicio de gestión de redes sociales en Perú?</span>
            <svg class="faq-icon w-5 h-5 text-pink-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
          <div class="faq-answer mt-4 text-sm text-gray-400 leading-relaxed hidden">
            Nuestros planes de gestión de redes sociales parten desde S/500 PEN mensuales para el plan Esencial, S/800 para el plan Crecimiento (incluye Reels y Meta Ads) y S/1500 para el plan Corporativo (historias diarias y sesión fotográfica).
          </div>
        </div>
        <div class="glass-card p-6 border border-white/5 faq-item">
          <button class="faq-btn w-full flex justify-between items-center text-left">
            <span class="text-white font-semibold text-sm">¿En cuánto tiempo veo resultados con la gestión de redes sociales?</span>
            <svg class="faq-icon w-5 h-5 text-pink-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
          <div class="faq-answer mt-4 text-sm text-gray-400 leading-relaxed hidden">
            Los primeros resultados orgánicos se ven desde el primer mes con mayor engagement y alcance. Las campañas de Meta Ads generan resultados inmediatos desde el día 1. La consolidación de una comunidad sólida toma de 3 a 6 meses de trabajo constante.
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
