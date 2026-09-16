?php
  $page_title = "PÃ¡gina Web Hoteles PerÃº | Reservas Online y Web Hotelera | Next Boost";
  $page_description = "PÃ¡ginas web para hoteles y alojamientos en PerÃº. Reservas online, galerÃ­a de habitaciones, turismo local y disponibilidad en tiempo real.";
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
      "@id": "https://nextboost.business/pagina-web-hoteles-peru.php/#service",
      "name": "PÃ¡gina Web para Hoteles y Alojamientos en PerÃº",
      "serviceType": "Desarrollo Web Hotelero",
      "provider": {
        "@type": "Organization",
        "name": "Next Boost",
        "url": "https://nextboost.business/"
      },
      "description": "PÃ¡ginas web profesionales para hoteles en PerÃº con reservas online, galerÃ­a de habitaciones, disponibilidad en tiempo real, turismo local y WhatsApp.",
      "areaServed": "PerÃº",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Planes Web Hoteleros",
        "itemListElement": [
          {
            "@type": "Offer",
            "price": "450.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Plan BÃ¡sico Hotel"
            }
          },
          {
            "@type": "Offer",
            "price": "550.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Plan Informativa Hotel"
            }
          },
          {
            "@type": "Offer",
            "price": "800.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Plan Profesional Hotel"
            }
          },
          {
            "@type": "Offer",
            "price": "1000.00",
            "priceCurrency": "PEN",
            "itemOffered": {
              "@type": "Service",
              "name": "Plan Premium Hotel"
            }
          }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://nextboost.business/pagina-web-hoteles-peru.php/#breadcrumb",
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
          "name": "PÃ¡gina Web Hoteles PerÃº",
          "item": "https://nextboost.business/pagina-web-hoteles-peru.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://nextboost.business/pagina-web-hoteles-peru.php/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Â¿Se pueden hacer reservas online directamente desde la web?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SÃ­, incluimos un formulario de reservas donde el huÃ©sped selecciona fechas de check-in y check-out, tipo de habitaciÃ³n y cantidad de personas. La reserva se envÃ­a directamente a tu WhatsApp o correo para confirmaciÃ³n inmediata."
          }
        },
        {
          "@type": "Question",
          "name": "Â¿La web muestra disponibilidad de habitaciones en tiempo real?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SÃ­, el plan Profesional y Premium incluyen un sistema de disponibilidad que muestra las habitaciones libres segÃºn las fechas seleccionadas, evitando reservas duplicadas y mejorando la experiencia del huÃ©sped."
          }
        },
        {
          "@type": "Question",
          "name": "Â¿Incluye galerÃ­a de fotos de las habitaciones e instalaciones?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SÃ­, creamos galerÃ­as de alta calidad para cada tipo de habitaciÃ³n (single, doble, suite) y Ã¡reas comunes (piscina, lobby, restaurante). El plan Premium incluye recorridos virtuales 360Â°."
          }
        }
      ]
    }
  ]
}
</script>

<body>

  <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-indigo-600/10 rounded-full glow-pulse"></div>
    <div class="absolute bottom-[20%] -left-40 w-[500px] h-[500px] bg-blue-500/5 rounded-full glow-pulse" style="animation-delay: -1.5s;"></div>
    <div class="absolute inset-0 grid-bg"></div>
  </div>

  <?php include 'includes/header.php'; ?>

  <main class="relative z-10 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 py-16 lg:py-24">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

      <div class="lg:col-span-7 space-y-6">
        <div class="inline-flex items-center gap-2.5 px-4 py-1.5 badge-gradient text-xs font-medium text-indigo-300 animate-in">
          <span class="w-2 h-2 rounded-full bg-indigo-500 animate-pulse"></span>
          <span class="tracking-wide">Soluciones Web para Hoteles y Alojamientos</span>
        </div>

        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-white leading-[1.1]">
          PÃ¡gina Web para Hoteles y Alojamientos <br>
          <span class="bg-gradient-to-r from-indigo-400 to-blue-500 text-transparent bg-clip-text">en PerÃº</span>
        </h1>

        <p class="text-base md:text-lg text-gray-300 font-normal leading-relaxed max-w-2xl">
          Atrae mÃ¡s huÃ©spedes y recibe reservas directas con una <strong class="text-white">web profesional para tu hotel</strong>. GalerÃ­a de habitaciones, disponibilidad en tiempo real, reservas online y promociones de turismo local.
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
          <div class="glass-card p-3 rounded-none text-center border border-indigo-500/20">
            <span class="text-2xl md:text-3xl font-extrabold text-indigo-300 block">&lt;0.8s</span>
            <span class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Tiempo Carga</span>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 pt-4">
          <a href="contacto.php?servicio=hoteles" class="inline-flex items-center justify-center gap-3 bg-gradient-to-r from-indigo-500 to-blue-500 text-white px-8 py-4 text-sm font-bold rounded-none hover:shadow-[0_0_30px_rgba(99,102,241,0.4)] hover:scale-105 transition-all btn-primary group">
            Cotizar Mi Web Hotelera
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
          <a href="https://wa.me/51962469836?text=Hola%20Next%20Boost,%20deseo%20cotizar%20una%20web%20para%20mi%20hotel" target="_blank" class="inline-flex items-center justify-center gap-2 border border-white/20 hover:border-emerald-500/50 bg-white/5 hover:bg-emerald-500/10 text-white hover:text-emerald-400 px-6 py-4 text-sm font-semibold transition-all">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            AsesorÃ­a por WhatsApp
          </a>
        </div>
      </div>

      <div class="lg:col-span-5 relative lg:-ml-4">
        <div class="glass-card rounded-2xl p-6 border border-white/10 space-y-6 relative overflow-hidden bg-gradient-to-b from-[#121217] to-[#08080a]">
          <div class="flex items-center justify-between border-b border-white/10 pb-4">
            <span class="text-xs font-mono text-gray-400 flex items-center gap-2">
              <span class="w-2 h-2 rounded-full bg-indigo-400"></span>
              Panel de Habitaciones
            </span>
            <span class="text-[10px] font-bold text-indigo-400 bg-indigo-500/10 px-2.5 py-1 border border-indigo-500/20">EN VIVO</span>
          </div>
          <div class="space-y-3">
            <div class="p-3 bg-white/5 border border-white/10 flex items-center gap-3">
              <div class="w-10 h-10 bg-indigo-500/20 flex items-center justify-center text-indigo-400 shrink-0 text-lg">ðŸ¨</div>
              <div class="flex-1">
                <p class="text-xs font-bold text-white">Suite Doble Superior</p>
                <p class="text-[10px] text-gray-400">Cama king Â· Vista al mar Â· 45 mÂ²</p>
              </div>
              <span class="text-[10px] font-bold text-emerald-400 bg-emerald-500/10 px-2 py-1">DISP.</span>
            </div>
            <div class="p-3 bg-white/5 border border-white/10 flex items-center gap-3">
              <div class="w-10 h-10 bg-blue-500/20 flex items-center justify-center text-blue-400 shrink-0 text-lg">ðŸ›ï¸</div>
              <div class="flex-1">
                <p class="text-xs font-bold text-white">HabitaciÃ³n Twin</p>
                <p class="text-[10px] text-gray-400">2 camas Â· JardÃ­n Â· 28 mÂ²</p>
              </div>
              <span class="text-[10px] font-bold text-emerald-400 bg-emerald-500/10 px-2 py-1">DISP.</span>
            </div>
            <div class="p-3 bg-white/5 border border-white/10 flex items-center gap-3">
              <div class="w-10 h-10 bg-purple-500/20 flex items-center justify-center text-purple-400 shrink-0 text-lg">ðŸ‘‘</div>
              <div class="flex-1">
                <p class="text-xs font-bold text-white">Suite Presidencial</p>
                <p class="text-[10px] text-gray-400">Jacuzzi Â· Terraza privada Â· 80 mÂ²</p>
              </div>
              <span class="text-[10px] font-bold text-red-400 bg-red-500/10 px-2 py-1">OCUP.</span>
            </div>
          </div>
          <div class="grid grid-cols-2 gap-3 pt-2">
            <div class="p-2.5 bg-white/5 border border-white/5 text-center">
              <span class="text-lg font-extrabold text-indigo-400 block">92%</span>
              <span class="text-[10px] text-gray-400">OcupaciÃ³n Promedio</span>
            </div>
            <div class="p-2.5 bg-white/5 border border-white/5 text-center">
              <span class="text-lg font-extrabold text-blue-400 block">4.8 â˜…</span>
              <span class="text-[10px] text-gray-400">CalificaciÃ³n Booking</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

  <section class="relative z-10 py-20 bg-[#070709] border-y border-white/10">
    <div class="max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <p class="text-xs uppercase tracking-widest text-indigo-400 font-bold mb-3">La Ventaja Next Boost</p>
        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
          Â¿Por quÃ© elegirnos <span class="bg-gradient-to-r from-indigo-400 to-blue-500 text-transparent bg-clip-text">para tu hotel?</span>
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
        <div class="glass-card p-8 rounded-2xl border border-red-500/20 bg-red-950/10 space-y-6">
          <div class="flex items-center gap-3 border-b border-red-500/20 pb-4">
            <span class="w-3 h-3 rounded-full bg-red-500"></span>
            <h3 class="text-xl font-bold text-white">Hoteles sin Web Profesional</h3>
          </div>
          <ul class="space-y-4 text-xs text-gray-300">
            <li class="flex items-start gap-3"><span class="text-red-400 font-bold shrink-0">âœ•</span><span><strong>Dependencia total de Booking:</strong> Pagas comisiones del 15-25% por cada reserva que llega por la plataforma.</span></li>
            <li class="flex items-start gap-3"><span class="text-red-400 font-bold shrink-0">âœ•</span><span><strong>Sin galerÃ­a profesional:</strong> Las fotos desactualizadas no muestran la verdadera experiencia del huÃ©sped.</span></li>
            <li class="flex items-start gap-3"><span class="text-red-400 font-bold shrink-0">âœ•</span><span><strong>Cero presencia en Google:</strong> Los turistas no te encuentran cuando buscan "hotel en" + tu ciudad.</span></li>
            <li class="flex items-start gap-3"><span class="text-red-400 font-bold shrink-0">âœ•</span><span><strong>Sin reservas directas:</strong> Cada consulta requiere una llamada telefÃ³nica o mensaje, perdiendo rapidez.</span></li>
          </ul>
        </div>

        <div class="glass-card p-8 rounded-2xl border-2 border-emerald-500/30 bg-emerald-950/10 space-y-6">
          <div class="flex items-center gap-3 border-b border-emerald-500/20 pb-4">
            <span class="w-3 h-3 rounded-full bg-emerald-400 animate-pulse"></span>
            <h3 class="text-xl font-bold text-white">Web Hotelera Next Boost</h3>
          </div>
          <ul class="space-y-4 text-xs text-gray-200">
            <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span><span><strong>Reservas directas sin comisiones:</strong> El huÃ©sped reserva y paga directamente. TÃº conservas el 100%.</span></li>
            <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span><span><strong>GalerÃ­a profesional HD:</strong> Fotos cinematogrÃ¡ficas de habitaciones, spa, restaurante y alrededores.</span></li>
            <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span><span><strong>SEO TurÃ­stico potente:</strong> Aparece cuando buscan "hotel en Cusco", "hotel en Lima" o tu destino.</span></li>
            <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span><span><strong>Disponibilidad en tiempo real:</strong> El huÃ©sped ve fechas libres y reserva al instante sin llamar.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="relative z-10 py-20 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <p class="text-xs uppercase tracking-widest text-blue-400 font-bold mb-3">Funcionalidades que enamoran</p>
      <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
        Todo lo que tu hotel <span class="bg-gradient-to-r from-indigo-400 to-blue-500 text-transparent bg-clip-text">necesita online</span>
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-indigo-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center text-indigo-400 group-hover:bg-indigo-500 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Reservas Online</h3>
        <p class="text-xs text-gray-400 leading-relaxed">Formulario de reserva con selecciÃ³n de fechas, tipo de habitaciÃ³n y huÃ©spedes. ConfirmaciÃ³n automÃ¡tica por WhatsApp y correo.</p>
      </article>

      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-blue-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 group-hover:bg-blue-500 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m3 0h1m-1-4h.01M9 16h.01M9 12h.01M9 8h.01M15 16h.01M15 12h.01M15 8h.01"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Disponibilidad en Tiempo Real</h3>
        <p class="text-xs text-gray-400 leading-relaxed">El huÃ©sped ve quÃ© habitaciones estÃ¡n libres segÃºn sus fechas. Sin reservas duplicadas, sin confusiones, sin llamadas innecesarias.</p>
      </article>

      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-purple-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 group-hover:bg-purple-400 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">GalerÃ­a de Habitaciones HD</h3>
        <p class="text-xs text-gray-400 leading-relaxed">Fotos profesionales de cada tipo de habitaciÃ³n, Ã¡reas comunes, spa, restaurante y alrededores que enamoran al huÃ©sped.</p>
      </article>

      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-emerald-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 group-hover:bg-emerald-400 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Turismo y Actividades Locales</h3>
        <p class="text-xs text-gray-400 leading-relaxed">SecciÃ³n dedicada a tours, excursiones y actividades cercanas al hotel que aumentan el valor percibido y generan ventas adicionales.</p>
      </article>

      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-yellow-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-yellow-500/10 border border-yellow-500/20 flex items-center justify-center text-yellow-400 group-hover:bg-yellow-500 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">ReseÃ±as y Testimonios</h3>
        <p class="text-xs text-gray-400 leading-relaxed">Publica reseÃ±as de huÃ©spedes reales, estrellas de calificaciÃ³n y testimonios que generan confianza antes de reservar.</p>
      </article>

      <article class="glass-card p-8 rounded-2xl border border-white/5 space-y-4 hover:border-pink-500/30 transition-all group">
        <div class="w-12 h-12 rounded-none bg-pink-500/10 border border-pink-500/20 flex items-center justify-center text-pink-400 group-hover:bg-pink-500 group-hover:text-black transition-all">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
        </div>
        <h3 class="text-xl font-bold text-white">Chat WhatsApp Directo</h3>
        <p class="text-xs text-gray-400 leading-relaxed">BotÃ³n flotante de WhatsApp para que los huÃ©spedes pregunten sobre disponibilidad, servicios especiales o shuttle al aeropuerto.</p>
      </article>
    </div>
  </section>

  <section class="relative z-10 py-20 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 border-t border-white/5 bg-[#0a0a0e]/50">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <p class="text-xs uppercase tracking-widest text-emerald-400 font-bold mb-3">InversiÃ³n Clara</p>
      <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
        Planes y Precios <span class="bg-gradient-to-r from-indigo-400 to-blue-500 text-transparent bg-clip-text">para Hoteles</span>
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 max-w-6xl mx-auto">
      <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-indigo-500/50 transition-all flex flex-col h-full group">
        <h3 class="text-xl font-bold text-white mb-2">BÃ¡sico</h3>
        <p class="text-xs text-gray-400 mb-6">Para hostales y hospedajes que quieren una presencia online efectiva.</p>
        <div class="mb-6 border-b border-white/10 pb-6">
          <span class="text-3xl font-bold text-indigo-400">S/ 450</span>
          <span class="text-xs text-gray-500 font-medium"> PEN / Pago Ãºnico</span>
        </div>
        <ul class="space-y-4 text-xs text-gray-300 mb-8 flex-1">
          <li class="flex items-start gap-3"><span class="text-indigo-400 font-bold shrink-0">âœ“</span> GalerÃ­a de Habitaciones (5 tipos)</li>
          <li class="flex items-start gap-3"><span class="text-indigo-400 font-bold shrink-0">âœ“</span> Formulario de Consulta</li>
          <li class="flex items-start gap-3"><span class="text-indigo-400 font-bold shrink-0">âœ“</span> BotÃ³n de Reserva WhatsApp</li>
          <li class="flex items-start gap-3"><span class="text-indigo-400 font-bold shrink-0">âœ“</span> UbicaciÃ³n y Mapa</li>
          <li class="flex items-start gap-3"><span class="text-indigo-400 font-bold shrink-0">âœ“</span> Servicios e Instalaciones</li>
        </ul>
        <a href="contacto.php?servicio=hoteles&plan=basico" class="w-full inline-block text-center py-3 text-sm font-bold bg-white/5 hover:bg-indigo-500 hover:text-black border border-white/10 hover:border-indigo-500 transition-all">
          Elegir Plan BÃ¡sico
        </a>
      </div>

      <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-indigo-500/50 transition-all flex flex-col h-full group">
        <h3 class="text-xl font-bold text-white mb-2">Informativa</h3>
        <p class="text-xs text-gray-400 mb-6">Para hoteles que necesitan una web completa con informaciÃ³n detallada de sus servicios y tarifas.</p>
        <div class="mb-6 border-b border-white/10 pb-6">
          <span class="text-3xl font-bold text-indigo-400">S/ 550</span>
          <span class="text-xs text-gray-500 font-medium"> PEN / Pago Ãºnico</span>
        </div>
        <ul class="space-y-4 text-xs text-gray-300 mb-8 flex-1">
          <li class="flex items-start gap-3"><span class="text-indigo-400 font-bold shrink-0">âœ“</span> Todo lo del plan bÃ¡sico</li>
          <li class="flex items-start gap-3"><span class="text-indigo-400 font-bold shrink-0">âœ“</span> Secciones ampliadas de servicios</li>
          <li class="flex items-start gap-3"><span class="text-indigo-400 font-bold shrink-0">âœ“</span> PÃ¡gina de tarifas y promociones</li>
          <li class="flex items-start gap-3"><span class="text-indigo-400 font-bold shrink-0">âœ“</span> GalerÃ­a ampliada del hotel</li>
          <li class="flex items-start gap-3"><span class="text-indigo-400 font-bold shrink-0">âœ“</span> SEO bÃ¡sico y diseÃ±o 100% responsivo</li>
        </ul>
        <a href="contacto.php?servicio=hoteles&plan=informativa" class="w-full inline-block text-center py-3 text-sm font-bold bg-white/5 hover:bg-indigo-500 hover:text-black border border-white/10 hover:border-indigo-500 transition-all">
          Elegir Plan Informativa
        </a>
      </div>

      <div class="glass-card p-8 rounded-2xl border border-emerald-500/50 relative bg-emerald-950/10 flex flex-col h-full group transform md:-translate-y-4 shadow-[0_15px_30px_rgba(16,185,129,0.15)]">
        <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-emerald-500 text-black text-[10px] font-bold px-4 py-1 uppercase tracking-wider">Recomendado</div>
        <h3 class="text-xl font-bold text-white mb-2">Profesional</h3>
        <p class="text-xs text-gray-400 mb-6">Para hoteles que buscan reservas directas y reducir comisiones de Booking.</p>
        <div class="mb-6 border-b border-white/10 pb-6">
          <span class="text-3xl font-bold text-emerald-400">S/ 800</span>
          <span class="text-xs text-gray-500 font-medium"> PEN / Pago Ãºnico</span>
        </div>
        <ul class="space-y-4 text-xs text-gray-300 mb-8 flex-1">
          <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span> Todo lo del Plan BÃ¡sico</li>
          <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span> Sistema de Reservas Online</li>
          <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span> Disponibilidad en Tiempo Real</li>
          <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span> SEO TurÃ­stico On-Page</li>
          <li class="flex items-start gap-3"><span class="text-emerald-400 font-bold shrink-0">âœ“</span> GalerÃ­a Ilimitada</li>
        </ul>
        <a href="contacto.php?servicio=hoteles&plan=profesional" class="w-full inline-block text-center py-3 text-sm font-bold bg-emerald-500 text-black hover:bg-emerald-400 transition-all shadow-[0_0_15px_rgba(16,185,129,0.4)]">
          Elegir Plan Profesional
        </a>
      </div>

      <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-blue-500/50 transition-all flex flex-col h-full group">
        <h3 class="text-xl font-bold text-white mb-2">Premium</h3>
        <p class="text-xs text-gray-400 mb-6">Para hoteles boutique y cadenas que necesitan la experiencia completa.</p>
        <div class="mb-6 border-b border-white/10 pb-6">
          <span class="text-3xl font-bold text-blue-400">S/ 1000</span>
          <span class="text-xs text-gray-500 font-medium"> PEN / Pago Ãºnico</span>
        </div>
        <ul class="space-y-4 text-xs text-gray-300 mb-8 flex-1">
          <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">âœ“</span> Todo lo del Plan Profesional</li>
          <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">âœ“</span> Tour Virtual 360Â° de Habitaciones</li>
          <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">âœ“</span> Blog de Turismo y GuÃ­as Locales</li>
          <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">âœ“</span> SecciÃ³n de Tours y Actividades</li>
          <li class="flex items-start gap-3"><span class="text-blue-400 font-bold shrink-0">âœ“</span> Soporte y CapacitaciÃ³n 30 dÃ­as</li>
        </ul>
        <a href="contacto.php?servicio=hoteles&plan=premium" class="w-full inline-block text-center py-3 text-sm font-bold bg-white/5 hover:bg-blue-500 hover:text-white border border-white/10 hover:border-blue-500 transition-all">
          Elegir Plan Premium
        </a>
      </div>
    </div>
  </section>

  <section class="relative z-10 py-20 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
      <div class="lg:col-span-4 space-y-4">
        <p class="text-xs uppercase tracking-widest text-blue-400 font-bold">Resolvemos tus dudas</p>
        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-white leading-tight">
          Preguntas Frecuentes sobre <span class="bg-gradient-to-r from-indigo-400 to-blue-500 text-transparent bg-clip-text">Webs Hoteleras</span>
        </h2>
        <p class="text-xs text-gray-400 leading-relaxed">Todo lo que necesitas saber antes de crear la web de tu hotel.</p>
      </div>

      <div class="lg:col-span-8 space-y-4">
        <div class="glass-card rounded-xl p-6 border border-white/10 space-y-2">
          <h3 class="text-base font-bold text-white flex items-center gap-2">
            <span class="text-indigo-400">01.</span> Â¿Se pueden hacer reservas online directamente desde la web?
          </h3>
          <p class="text-xs text-gray-400 leading-relaxed pt-1">
            SÃ­, incluimos un formulario de reservas donde el huÃ©sped selecciona fechas de check-in y check-out, tipo de habitaciÃ³n y cantidad de personas. La reserva se envÃ­a directamente a tu WhatsApp o correo para confirmaciÃ³n inmediata.
          </p>
        </div>

        <div class="glass-card rounded-xl p-6 border border-white/10 space-y-2">
          <h3 class="text-base font-bold text-white flex items-center gap-2">
            <span class="text-indigo-400">02.</span> Â¿La web muestra disponibilidad de habitaciones en tiempo real?
          </h3>
          <p class="text-xs text-gray-400 leading-relaxed pt-1">
            SÃ­, el plan Profesional y Premium incluyen un sistema de disponibilidad que muestra las habitaciones libres segÃºn las fechas seleccionadas, evitando reservas duplicadas y mejorando la experiencia del huÃ©sped.
          </p>
        </div>

        <div class="glass-card rounded-xl p-6 border border-white/10 space-y-2">
          <h3 class="text-base font-bold text-white flex items-center gap-2">
            <span class="text-indigo-400">03.</span> Â¿Incluye galerÃ­a de fotos de las habitaciones e instalaciones?
          </h3>
          <p class="text-xs text-gray-400 leading-relaxed pt-1">
            SÃ­, creamos galerÃ­as de alta calidad para cada tipo de habitaciÃ³n (single, doble, suite) y Ã¡reas comunes (piscina, lobby, restaurante). El plan Premium incluye recorridos virtuales 360Â°.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="relative z-10 py-16 px-8 md:px-16 lg:px-20 max-w-screen-2xl mx-auto mb-16">
    <div class="glass-card rounded-3xl p-10 md:p-16 border border-indigo-500/30 bg-gradient-to-r from-indigo-950/40 via-[#121216] to-blue-950/40 relative overflow-hidden text-center md:text-left flex flex-col md:flex-row items-center justify-between gap-8">
      <div class="space-y-4 max-w-2xl">
        <span class="text-[10px] uppercase tracking-widest text-indigo-400 font-extrabold bg-indigo-500/10 px-3 py-1 border border-indigo-500/20">Impulsa tu hotel</span>
        <h2 class="text-3xl md:text-5xl font-bold tracking-tight text-white leading-tight">
          Â¿Listo para recibir reservas directas y ahorrar comisiones?
        </h2>
        <p class="text-sm text-gray-300 leading-relaxed">CuÃ©ntanos sobre tu hotel y te entregamos una propuesta personalizada sin costo.</p>
      </div>
      <div class="shrink-0 flex flex-col items-center gap-4">
        <a href="contacto.php?servicio=hoteles" class="inline-flex items-center gap-3 bg-gradient-to-r from-indigo-500 to-blue-500 text-white px-8 py-4 text-sm font-bold rounded-none hover:shadow-[0_0_30px_rgba(99,102,241,0.4)] hover:scale-105 transition-all btn-primary">
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
