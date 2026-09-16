?php
  $page_title = "PÃ¡gina Web Salones de Belleza PerÃº | Web para Salones | Next Boost";
  $page_description = "PÃ¡ginas web para salones de belleza en PerÃº. MenÃº de servicios, reserva de citas, portafolio de trabajos y WhatsApp integrado.";
?>
<!DOCTYPE html>
<html lang="es" class="dark scroll-smooth">
<?php include 'includes/head.php'; ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://nextboost.business/pagina-web-salones-belleza-peru.php/#service",
      "name": "PÃ¡gina Web para Salones de Belleza en PerÃº",
      "serviceType": "Desarrollo Web Salones de Belleza",
      "provider": {
        "@type": "Organization",
        "name": "Next Boost",
        "url": "https://nextboost.business/"
      },
      "description": "PÃ¡ginas web profesionales para salones de belleza en PerÃº con menÃº de servicios, reserva de citas online, portafolio de trabajos e integraciÃ³n WhatsApp.",
      "areaServed": "PerÃº",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Planes Web Salones de Belleza",
        "itemListElement": [
          {
            "@type": "Offer",
            "price": "450.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Plan BÃ¡sico SalÃ³n"
            }
          },
          {
            "@type": "Offer",
            "price": "550.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Plan Informativa SalÃ³n"
            }
          },
          {
            "@type": "Offer",
            "price": "800.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Plan Profesional SalÃ³n"
            }
          },
          {
            "@type": "Offer",
            "price": "1000.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Plan Premium SalÃ³n"
            }
          }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://nextboost.business/pagina-web-salones-belleza-peru.php/#breadcrumb",
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
          "name": "PÃ¡gina Web Salones de Belleza PerÃº",
          "item": "https://nextboost.business/pagina-web-salones-belleza-peru.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://nextboost.business/pagina-web-salones-belleza-peru.php/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Â¿Las clientas pueden agendar citas online desde la web?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SÃ­, el plan Profesional y Premium incluyen un sistema de reservas donde la clienta selecciona el servicio, fecha y hora preferida. La cita se envÃ­a a tu WhatsApp para confirmar al instante."
          }
        },
        {
          "@type": "Question",
          "name": "Â¿Incluye galerÃ­a o portafolio de trabajos realizados?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SÃ­, creamos una galerÃ­a antes/despuÃ©s y portafolio de cortes, coloraciones, peinados y tratamientos. Puedes actualizar las fotos desde tu panel para mostrar tus Ãºltimos trabajos."
          }
        },
        {
          "@type": "Question",
          "name": "Â¿Muestra precios de todos los servicios del salÃ³n?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SÃ­, incluimos un menÃº completo de servicios organizado por categorÃ­as (corte, color, tratamientos, manicure, etc.) con precios, duraciÃ³n estimada y descripciÃ³n de cada tratamiento."
          }
        }
      ]
    }
  ]
}
</script>

<body>

  <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
    <div class="absolute -top-40 -left-40 w-[600px] h-[600px] bg-pink-600/10 rounded-full glow-pulse"></div>
    <div class="absolute bottom-[20%] -right-40 w-[500px] h-[500px] bg-purple-500/5 rounded-full glow-pulse" style="animation-delay: -1.5s;"></div>
    <div class="absolute inset-0 grid-bg"></div>
  </div>

  <?php include 'includes/header.php'; ?>

  <main class="relative z-10 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 py-16 lg:py-24">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

      <div class="lg:col-span-7 space-y-6">
        <div class="inline-flex items-center gap-2.5 px-4 py-1.5 badge-gradient text-xs font-medium text-pink-300 animate-in">
          <span class="w-2 h-2 rounded-full bg-pink-500 animate-pulse"></span>
          <span class="tracking-wide">Soluciones Web para Salones de Belleza</span>
        </div>

        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-white leading-[1.1]">
          PÃ¡gina Web para Salones de Belleza <br>
          <span class="bg-gradient-to-r from-pink-400 to-purple-500 text-transparent bg-clip-text">en PerÃº</span>
        </h1>

        <p class="text-base md:text-lg text-gray-300 font-normal leading-relaxed max-w-2xl">
          Atrae mÃ¡s clientas y agenda mÃ¡s citas con una <strong class="text-white">web profesional para tu salÃ³n de belleza</strong>. MenÃº de servicios con precios, reserva de citas online, portafolio de trabajos y WhatsApp directo.
        </p>

        <div class="grid grid-cols-3 gap-4 pt-4 border-t border-white/10 max-w-xl">
          <div class="glass-card p-3 rounded-none text-center border border-emerald-500/20">
            <span class="text-2xl md:text-3xl font-extrabold text-emerald-400 block">99/100</span>
            <span class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Performance</span>
          </div>
          <div class="glass-card p-3 rounded-none text-center border border-blue-500/20">
            <span class="text-2xl md:text-3xl font-extrabold text-blue-400 block">100/100</span>
            <span class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">SEO Score</span>
          </div>
          <div class="glass-card p-3 rounded-none text-center border border-pink-500/20">
            <span class="text-2xl md:text-3xl font-extrabold text-pink-300 block">&lt;0.8s</span>
            <span class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Tiempo Carga</span>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 pt-4">
          <a href="contacto.php?servicio=salones-belleza" class="inline-flex items-center justify-center gap-3 bg-gradient-to-r from-pink-500 to-purple-500 text-white px-8 py-4 text-sm font-bold rounded-none hover:shadow-[0_0_30px_rgba(236,72,153,0.4)] hover:scale-105 transition-all btn-primary group">
            Cotizar Mi Web de SalÃ³n
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
          <a href="https://wa.me/51962469836?text=Hola%20Next%20Boost,%20deseo%20cotizar%20una%20web%20para%20mi%20sal%C3%B3n%20de%20belleza" target="_blank" class="inline-flex items-center justify-center gap-2 border border-white/20 hover:border-emerald-500/50 bg-white/5 hover:bg-emerald-500/10 text-white hover:text-emerald-400 px-6 py-4 text-sm font-semibold transition-all">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            AsesorÃ­a por WhatsApp
          </a>
        </div>
      </div>

      <div class="lg:col-span-5 relative lg:-ml-4">
        <div class="glass-card rounded-2xl p-6 border border-white/10 space-y-6 relative overflow-hidden bg-gradient-to-b from-[#121217] to-[#08080a]">
          <div class="flex items-center justify-between border-b border-white/10 pb-4">
            <span class="text-xs font-mono text-gray-400 flex items-center gap-2">
              <span class="w-2 h-2 rounded-full bg-pink-400"></span>
              MenÃº de Servicios
            </span>
            <span class="text-[10px] font-bold text-pink-400 bg-pink-500/10 px-2.5 py-1 border border-pink-500/20">ACTIVO</span>
          </div>
          <div class="space-y-3">
            <div class="p-3 bg-white/5 border border-white/10 flex items-center gap-3">
              <div class="w-10 h-10 bg-pink-500/20 flex items-center justify-center text-pink-400 shrink-0 text-lg">âœ‚ï¸</div>
              <div class="flex-1">
                <p class="text-xs font-bold text-white">Corte y Peinado</p>
                <p class="text-[10px] text-gray-400">Lavado, corte, secado y peinado</p>
              </div>
              <span class="text-xs font-bold text-pink-400">S/ 45</span>
            </div>
            <div class="p-3 bg-white/5 border border-white/10 flex items-center gap-3">
              <div class="w-10 h-10 bg-purple-500/20 flex items-center justify-center text-purple-400 shrink-0 text-lg">ðŸŽ¨</div>
              <div class="flex-1">
                <p class="text-xs font-bold text-white">ColoraciÃ³n Full</p>
                <p class="text-[10px] text-gray-400">Tinte, mechas, reflejos y bÃ¡lago</p>
              </div>
              <span class="text-xs font-bold text-purple-400">S/ 120</span>
            </div>
            <div class="p-3 bg-white/5 border border-white/10 flex items-center gap-3">
              <div class="w-10 h-10 bg-rose-500/20 flex items-center justify-center text-rose-400 shrink-0 text-lg">ðŸ’…</div>
              <div class="flex-1">
                <p class="text-xs font-bold text-white">Manicure & Pedicure</p>
                <p class="text-[10px] text-gray-400">Esmaltado permanente, nail art</p>
              </div>
              <span class="text-xs font-bold text-rose-400">S/ 35</span>
            </div>
          </div>
          <div class="grid grid-cols-2 gap-3 pt-2">
            <div class="p-2.5 bg-white/5 border border-white/5 text-center">
              <span class="text-lg font-extrabold text-pink-400 block">+200</span>
              <span class="text-[10px] text-gray-400">Citas Mensuales</span>
            </div>
            <div class="p-2.5 bg-white/5 border border-white/5 text-center">
              <span class="text-lg font-extrabold text-purple-400 block">4.9 â˜…</span>
              <span class="text-[10px] text-gray-400">CalificaciÃ³n Google</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

  <section class="relative z-10 py-20 bg-[#070709] border-y border-white/10">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <p class="text-xs uppercase tracking-widest text-pink-400 font-bold mb-3">La Ventaja Next Boost</p>
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
          Â¿Por quÃ© elegirnos <span class="bg-gradient-to-r from-pink-400 to-purple-500 text-transparent bg-clip-text">para tu salÃ³n?</span>
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
        <div class="glass-card p-8 rounded-2xl border border-red-500/20 bg-red-950/10 space-y-6">
          <div class="flex items-center gap-3 border-b border-red-500/20 pb-4">
            <span class="w-3 h-3 rounded-full bg-red-500"></span>
            <h3 class="text-xl font-bold text-white">Salones sin Web Profesional</h3>
          </div>
          <ul class="space-y-4 text-xs text-gray-300">
            <li class="flex items-start gap-3"><span class="text-red-400 font-bold shrink-0">âœ•</span><span><strong>Sin precios visibles:</strong> Las clientas llaman para preguntar precios y no siempre responden.</span></li>
            <li class="flex items-start gap-3"><span class="text-red-400 font-bold shrink-0">âœ•</span><span><strong>Cero presencia en Google:</strong> Cuando buscan "salÃ³n de belleza cerca" no apareces en los resultados.</span></li>
            <li class="flex items-start gap-3"><span class="text-red-400 font-bold shrink-0">âœ•</span><span><strong>Sin portafolio digital:</strong> No muestras tus trabajos y las clientas eligen a la competencia.</span></li>
            <li class="flex items-start gap-3"><span class="text-red-400 font-bold shrink-0">âœ•</span><span><strong>Citas por WhatsApp desordenadas:</strong> Se pierden mensajes y se olvidan confirmaciones.</span></li>
          </ul>
        </div>

        <div class="glass-card p-8 rounded-2xl border-2 border-emerald-500/30 bg-emerald-950/10 space-y-6">
          <div class="flex items-center gap-3 border-b border-emerald-500/20 pb-4">
            <span class="w-3 h-3 rounded-full bg-emerald-400 animate-pulse"></span>
            <h3 class="text-xl font-bold text-white">Web SalÃ³n Next Boost</h3>
          </div>
          <ul class="space-y-4 text-xs text-gray-200">
            <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span><span><strong>MenÃº de servicios con precios:</strong> Cada servicio con descripciÃ³n, duraciÃ³n y precio visible al instante.</span></li>
            <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span><span><strong>SEO para salones de belleza:</strong> Aparece cuando buscan "salÃ³n de belleza en" + tu zona.</span></li>
            <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span><span><strong>Portafolio de trabajos:</strong> GalerÃ­a antes/despuÃ©s que enamora a nuevas clientas.</span></li>
            <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span><span><strong>Reserva de citas organizada:</strong> La clienta elige servicio, fecha y hora. ConfirmaciÃ³n automÃ¡tica.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="relative z-10 py-20 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <p class="text-xs uppercase tracking-widest text-purple-400 font-bold mb-3">Funcionalidades que enamoran</p>
      <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
        Todo lo que tu salÃ³n <span class="bg-gradient-to-r from-pink-400 to-purple-500 text-transparent bg-clip-text">necesita online</span>
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-pink-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-pink-500/10 border border-pink-500/20 flex items-center justify-center text-pink-400 group-hover:bg-pink-500 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">MenÃº de Servicios</h3>
        <p class="text-xs text-gray-400 leading-relaxed">Todos tus servicios organizados por categorÃ­as con precios, duraciÃ³n y descripciÃ³n. Corte, color, tratamientos, manicure y mÃ¡s.</p>
      </article>

      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-purple-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 group-hover:bg-purple-400 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Reserva de Citas Online</h3>
        <p class="text-xs text-gray-400 leading-relaxed">La clienta selecciona el servicio, dÃ­a y hora disponible. Recibe confirmaciÃ³n automÃ¡tica por WhatsApp sin perder tiempo al telÃ©fono.</p>
      </article>

      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-rose-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-rose-500/10 border border-rose-500/20 flex items-center justify-center text-rose-400 group-hover:bg-rose-500 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Portafolio Antes/DespuÃ©s</h3>
        <p class="text-xs text-gray-400 leading-relaxed">GalerÃ­a interactiva de tus mejores trabajos: cortes, coloraciones, peinados y nail art que demuestran tu talento y fidelizan clientas.</p>
      </article>

      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-yellow-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-yellow-500/10 border border-yellow-500/20 flex items-center justify-center text-yellow-400 group-hover:bg-yellow-500 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Precios y Promociones</h3>
        <p class="text-xs text-gray-400 leading-relaxed">MenÃº de precios completo y promociones destacadas (2x1, descuentos por referidos, paquetes de novia) que aumentan tus ventas.</p>
      </article>

      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-emerald-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 group-hover:bg-emerald-400 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">UbicaciÃ³n y Horarios</h3>
        <p class="text-xs text-gray-400 leading-relaxed">Mapa interactivo con direcciÃ³n exacta, horarios de atenciÃ³n, estacionamiento cercano y un clic para llegar con Google Maps.</p>
      </article>

      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-blue-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 group-hover:bg-blue-500 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Testimonios de Clientas</h3>
        <p class="text-xs text-gray-400 leading-relaxed">ReseÃ±as y testimonios de clientas satisfechas con fotos y estrellas. Prueba social que convence a nuevas clientas a agendar.</p>
      </article>
    </div>
  </section>

  <section class="relative z-10 py-20 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 border-t border-white/5 bg-[#0a0a0e]/50">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <p class="text-xs uppercase tracking-widest text-emerald-400 font-bold mb-3">InversiÃ³n Clara</p>
      <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
        Planes y Precios <span class="bg-gradient-to-r from-pink-400 to-purple-500 text-transparent bg-clip-text">para Salones de Belleza</span>
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 max-w-6xl mx-auto">
      <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-pink-500/50 transition-all flex flex-col h-full group">
        <h3 class="text-xl font-bold text-white mb-2">BÃ¡sico</h3>
        <p class="text-xs text-gray-400 mb-6">Para salones que quieren una presencia online con servicios y precios.</p>
        <div class="mb-6 border-b border-white/10 pb-6">
          <span class="text-3xl font-bold text-pink-400">S/ 450</span>
          <span class="text-xs text-gray-500 font-medium"> PEN / Pago Ãºnico</span>
        </div>
        <ul class="space-y-4 text-xs text-gray-300 mb-8 flex-1">
          <li class="flex items-start gap-3"><span class="text-pink-400 font-bold shrink-0">âœ“</span> MenÃº de Servicios con Precios</li>
          <li class="flex items-start gap-3"><span class="text-pink-400 font-bold shrink-0">âœ“</span> GalerÃ­a de Trabajos (10 fotos)</li>
          <li class="flex items-start gap-3"><span class="text-pink-400 font-bold shrink-0">âœ“</span> BotÃ³n de Cita por WhatsApp</li>
          <li class="flex items-start gap-3"><span class="text-pink-400 font-bold shrink-0">âœ“</span> UbicaciÃ³n en Google Maps</li>
          <li class="flex items-start gap-3"><span class="text-pink-400 font-bold shrink-0">âœ“</span> Horarios y Datos de Contacto</li>
        </ul>
        <a href="contacto.php?servicio=salones-belleza&plan=basico" class="w-full inline-block text-center py-3 text-sm font-bold bg-white/5 hover:bg-pink-500 hover:text-black border border-white/10 hover:border-pink-500 transition-all">
          Elegir Plan BÃ¡sico
        </a>
      </div>

      <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-pink-500/50 transition-all flex flex-col h-full group">
        <h3 class="text-xl font-bold text-white mb-2">Informativa</h3>
        <p class="text-xs text-gray-400 mb-6">Para salones que quieren ampliar su presencia online con mÃ¡s secciones y contenido de sus servicios.</p>
        <div class="mb-6 border-b border-white/10 pb-6">
          <span class="text-3xl font-bold text-pink-400">S/ 550</span>
          <span class="text-xs text-gray-500 font-medium"> PEN / Pago Ãºnico</span>
        </div>
        <ul class="space-y-4 text-xs text-gray-300 mb-8 flex-1">
          <li class="flex items-start gap-3"><span class="text-pink-400 font-bold shrink-0">âœ“</span> Todo lo del plan bÃ¡sico</li>
          <li class="flex items-start gap-3"><span class="text-pink-400 font-bold shrink-0">âœ“</span> Hasta 3 Secciones Informativas</li>
          <li class="flex items-start gap-3"><span class="text-pink-400 font-bold shrink-0">âœ“</span> GalerÃ­a de Trabajos Ampliada</li>
          <li class="flex items-start gap-3"><span class="text-pink-400 font-bold shrink-0">âœ“</span> PÃ¡gina de Precios y Promociones</li>
          <li class="flex items-start gap-3"><span class="text-pink-400 font-bold shrink-0">âœ“</span> BotÃ³n de Cita por WhatsApp</li>
        </ul>
        <a href="contacto.php?servicio=salones-belleza&plan=informativa" class="w-full inline-block text-center py-3 text-sm font-bold bg-white/5 hover:bg-pink-500 hover:text-black border border-white/10 hover:border-pink-500 transition-all">
          Elegir Plan Informativa
        </a>
      </div>

      <div class="glass-card p-8 rounded-2xl border border-emerald-500/50 relative bg-emerald-950/10 flex flex-col h-full group transform md:-translate-y-4 shadow-[0_15px_30px_rgba(16,185,129,0.15)]">
        <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-emerald-500 text-black text-[10px] font-bold px-4 py-1 uppercase tracking-wider">Recomendado</div>
        <h3 class="text-xl font-bold text-white mb-2">Profesional</h3>
        <p class="text-xs text-gray-400 mb-6">Para salones que buscan digitalizar citas y destacar con su portafolio.</p>
        <div class="mb-6 border-b border-white/10 pb-6">
          <span class="text-3xl font-bold text-emerald-400">S/ 800</span>
          <span class="text-xs text-gray-500 font-medium"> PEN / Pago Ãºnico</span>
        </div>
        <ul class="space-y-4 text-xs text-gray-300 mb-8 flex-1">
          <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span> Todo lo del Plan BÃ¡sico</li>
          <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span> Sistema de Reserva de Citas</li>
          <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span> Portafolio Ilimitado Antes/DespuÃ©s</li>
          <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span> SEO Local para Salones</li>
          <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span> Promociones Destacadas</li>
        </ul>
        <a href="contacto.php?servicio=salones-belleza&plan=profesional" class="w-full inline-block text-center py-3 text-sm font-bold bg-emerald-500 text-black hover:bg-emerald-400 transition-all shadow-[0_0_15px_rgba(16,185,129,0.4)]">
          Elegir Plan Profesional
        </a>
      </div>

      <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-purple-500/50 transition-all flex flex-col h-full group">
        <h3 class="text-xl font-bold text-white mb-2">Premium</h3>
        <p class="text-xs text-gray-400 mb-6">Para salones y cadenas que necesitan la soluciÃ³n completa con blog.</p>
        <div class="mb-6 border-b border-white/10 pb-6">
          <span class="text-3xl font-bold text-purple-400">S/ 1000</span>
          <span class="text-xs text-gray-500 font-medium"> PEN / Pago Ãºnico</span>
        </div>
        <ul class="space-y-4 text-xs text-gray-300 mb-8 flex-1">
          <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">âœ“</span> Todo lo del Plan Profesional</li>
          <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">âœ“</span> Blog de Tendencias y Tutos</li>
          <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">âœ“</span> Sistema de FidelizaciÃ³n</li>
          <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">âœ“</span> GalerÃ­a de Video de Trabajos</li>
          <li class="flex items-start gap-3"><span class="text-purple-400 font-bold shrink-0">âœ“</span> Soporte y CapacitaciÃ³n 30 dÃ­as</li>
        </ul>
        <a href="contacto.php?servicio=salones-belleza&plan=premium" class="w-full inline-block text-center py-3 text-sm font-bold bg-white/5 hover:bg-purple-500 hover:text-white border border-white/10 hover:border-purple-500 transition-all">
          Elegir Plan Premium
        </a>
      </div>
    </div>
  </section>

  <section class="relative z-10 py-20 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
      <div class="lg:col-span-4 space-y-4">
        <p class="text-xs uppercase tracking-widest text-purple-400 font-bold">Resolvemos tus dudas</p>
        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-white leading-tight">
          Preguntas Frecuentes sobre <span class="bg-gradient-to-r from-pink-400 to-purple-500 text-transparent bg-clip-text">Webs para Salones</span>
        </h2>
        <p class="text-xs text-gray-400 leading-relaxed">Todo lo que necesitas saber antes de crear la web de tu salÃ³n de belleza.</p>
      </div>

      <div class="lg:col-span-8 space-y-4">
        <div class="glass-card rounded-xl p-6 border border-white/10 space-y-2">
          <h3 class="text-base font-bold text-white flex items-center gap-2">
            <span class="text-pink-400">01.</span> Â¿Las clientas pueden agendar citas online desde la web?
          </h3>
          <p class="text-xs text-gray-400 leading-relaxed pt-1">
            SÃ­, el plan Profesional y Premium incluyen un sistema de reservas donde la clienta selecciona el servicio, fecha y hora preferida. La cita se envÃ­a a tu WhatsApp para confirmar al instante.
          </p>
        </div>

        <div class="glass-card rounded-xl p-6 border border-white/10 space-y-2">
          <h3 class="text-base font-bold text-white flex items-center gap-2">
            <span class="text-pink-400">02.</span> Â¿Incluye galerÃ­a o portafolio de trabajos realizados?
          </h3>
          <p class="text-xs text-gray-400 leading-relaxed pt-1">
            SÃ­, creamos una galerÃ­a antes/despuÃ©s y portafolio de cortes, coloraciones, peinados y tratamientos. Puedes actualizar las fotos desde tu panel para mostrar tus Ãºltimos trabajos.
          </p>
        </div>

        <div class="glass-card rounded-xl p-6 border border-white/10 space-y-2">
          <h3 class="text-base font-bold text-white flex items-center gap-2">
            <span class="text-pink-400">03.</span> Â¿Muestra precios de todos los servicios del salÃ³n?
          </h3>
          <p class="text-xs text-gray-400 leading-relaxed pt-1">
            SÃ­, incluimos un menÃº completo de servicios organizado por categorÃ­as (corte, color, tratamientos, manicure, etc.) con precios, duraciÃ³n estimada y descripciÃ³n de cada tratamiento.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="relative z-10 py-16 px-8 md:px-16 lg:px-20 max-w-screen-2xl mx-auto mb-16">
    <div class="glass-card rounded-3xl p-10 md:p-16 border border-pink-500/30 bg-gradient-to-r from-pink-950/40 via-[#121216] to-purple-950/40 relative overflow-hidden text-center md:text-left flex flex-col md:flex-row items-center justify-between gap-8">
      <div class="space-y-4 max-w-2xl">
        <span class="text-[10px] uppercase tracking-widest text-pink-400 font-extrabold bg-pink-500/10 px-3 py-1 border border-pink-500/20">Impulsa tu salÃ³n</span>
        <h2 class="text-3xl md:text-5xl font-bold tracking-tight text-white leading-tight">
          Â¿Listo para agendar mÃ¡s citas y crecer tu salÃ³n?
        </h2>
        <p class="text-sm text-gray-300 leading-relaxed">CuÃ©ntanos sobre tu salÃ³n y te entregamos una propuesta personalizada sin costo.</p>
      </div>
      <div class="shrink-0 flex flex-col items-center gap-4">
        <a href="contacto.php?servicio=salones-belleza" class="inline-flex items-center gap-3 bg-gradient-to-r from-pink-500 to-purple-500 text-white px-8 py-4 text-sm font-bold rounded-none hover:shadow-[0_0_30px_rgba(236,72,153,0.4)] hover:scale-105 transition-all btn-primary">
          Solicitar CotizaciÃ³n
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <span class="text-[10px] text-gray-400 uppercase tracking-widest font-semibold">Respuesta garantizada en &lt; 24 hrs</span>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>

</body>
</html>
