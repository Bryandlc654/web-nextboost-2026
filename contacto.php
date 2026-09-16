<!DOCTYPE html>
<html lang="es" class="dark scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto & Cotización — Next Boost | Agencia de Desarrollo Web Premium</title>
  <meta name="description" content="Contáctanos para cotizar tu nuevo sitio web, e-commerce o plataforma SaaS. Desarrollos ultra rápidos en Next.js, WordPress y soluciones Marca Blanca.">
  <link rel="canonical" href="https://nextboost.business/contacto.php" />
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://nextboost.business/contacto.php" />
  <meta property="og:title" content="Contacto & Cotización — Next Boost | Agencia de Desarrollo Web Premium" />
  <meta property="og:description" content="Contáctanos para cotizar tu nuevo sitio web, e-commerce o plataforma SaaS. Desarrollos ultra rápidos en Next.js, WordPress y soluciones Marca Blanca." />
  <meta property="og:image" content="https://nextboost.business/imagenes-web/next-boost.png" />
  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:url" content="https://nextboost.business/contacto.php" />
  <meta name="twitter:title" content="Contacto & Cotización — Next Boost | Agencia de Desarrollo Web Premium" />
  <meta name="twitter:description" content="Contáctanos para cotizar tu nuevo sitio web, e-commerce o plataforma SaaS. Desarrollos ultra rápidos en Next.js, WordPress y soluciones Marca Blanca." />
  <meta name="twitter:image" content="https://nextboost.business/imagenes-web/next-boost.png" />
  <link rel="stylesheet" href="assets/css/tailwind.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #08080a;
      color: #f3f4f6;
      overflow-x: hidden;
    }
    
    .grid-bg {
      background-size: 40px 40px;
      background-image: 
        linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
      mask-image: linear-gradient(to right, transparent 0%, black 100%);
      -webkit-mask-image: linear-gradient(to right, transparent 0%, black 100%);
    }

    .glass-card {
      background: rgba(18, 18, 22, 0.65);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.07);
    }

    .glass-input {
      background: rgba(10, 10, 14, 0.7);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      color: #ffffff;
      transition: all 0.3s ease;
    }
    .glass-input:focus {
      border-color: #3b82f6;
      box-shadow: 0 0 15px rgba(59, 130, 246, 0.25);
      outline: none;
    }

    .gradient-text {
      background: linear-gradient(135deg, #60a5fa 0%, #2dd4bf 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .glow-pulse {
      animation: pulseGlow 6s ease-in-out infinite alternate;
    }
    @keyframes pulseGlow {
      0% { opacity: 0.15; transform: scale(1); }
      100% { opacity: 0.35; transform: scale(1.1); }
    }

    .badge-gradient {
      background: linear-gradient(90deg, rgba(59, 130, 246, 0.15) 0%, rgba(45, 212, 191, 0.15) 100%);
      border: 1px solid rgba(59, 130, 246, 0.3);
      border-radius: 0px !important;
    }

    /* Rectangular button enforcement */
    button, a.btn-primary, .filter-btn, .pill-btn {
      border-radius: 0px !important;
    }

    .pill-btn {
      border: 1px solid rgba(255, 255, 255, 0.1);
      background: rgba(255, 255, 255, 0.03);
      transition: all 0.25s ease;
    }
    .pill-btn.active, .pill-btn:hover {
      border-color: #2dd4bf;
      background: rgba(45, 212, 191, 0.15);
      color: #ffffff;
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

  <!-- Hero Contacto -->
  <main class="relative z-10 max-w-screen-2xl mx-auto px-8 md:px-16 lg:px-20 py-12 lg:py-20">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <div class="inline-flex items-center gap-2.5 px-4 py-1.5 badge-gradient text-xs font-medium text-blue-300 animate-in mb-6">
        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
        <span class="tracking-wide">Respuesta Garantizada en Menos de 24 Horas</span>
      </div>
      <h1 class="text-4xl md:text-6xl font-normal leading-[1.1] tracking-tight text-white mb-6">
        Hablemos de tu próximo <br>
        <span class="gradient-text font-medium">proyecto digital</span>
      </h1>
      <p class="text-base md:text-lg text-gray-400 font-light leading-relaxed">
        Déjanos tus requerimientos o agenda una videollamada con nuestros desarrolladores senior. Transformemos tus ideas en experiencias web de alto rendimiento.
      </p>
    </div>

    <!-- Contact Grid Container -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
      
      <!-- Left Column: Direct Channels & Offices (5 cols) -->
      <div class="lg:col-span-5 space-y-6">
        
        <!-- Direct WhatsApp Card -->
        <div class="glass-card rounded-2xl p-6 border border-emerald-500/20 bg-gradient-to-br from-emerald-950/20 via-[#121215] to-teal-950/20 relative overflow-hidden group">
          <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-3">
              <div class="w-12 h-12 rounded-none bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm10.748-6.732c-.301-.15-1.784-.881-2.06-.982-.275-.101-.476-.15-.676.15-.199.3-.776.982-.951 1.181-.175.201-.351.226-.652.076-.301-.15-1.272-.469-2.423-1.496-.896-.798-1.501-1.783-1.677-2.083-.175-.3-.018-.462.13-.61.135-.133.301-.35.451-.525.15-.175.2-.299.3-.5.1-.201.05-.376-.025-.526-.075-.15-.676-1.63-.926-2.231-.243-.585-.49-.505-.676-.514-.175-.008-.376-.01-.576-.01-.2 0-.526.075-.802.375-.275.3-1.051 1.028-1.051 2.508 0 1.48 1.077 2.907 1.227 3.107.15.201 2.119 3.236 5.134 4.539.717.31 1.277.495 1.713.633.721.229 1.377.197 1.895.119.578-.087 1.784-.729 2.035-1.432.25-.702.25-1.303.175-1.432-.075-.13-.275-.205-.576-.355z"/></svg>
              </div>
              <div>
                <span class="text-[10px] text-emerald-400 font-bold uppercase tracking-wider block">Atención Inmediata</span>
                <h4 class="text-lg font-semibold text-white">Chat por WhatsApp</h4>
              </div>
            </div>
            <span class="text-[10px] font-bold text-emerald-300 bg-emerald-500/20 px-2.5 py-1 rounded-none flex items-center gap-1.5">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>Online ahora
            </span>
          </div>
          <p class="text-xs text-gray-400 mb-6 leading-relaxed">
            ¿Prefieres resolver tus dudas de inmediato por mensaje directo? Escríbenos y un especialista técnico te atenderá sin esperas.
          </p>
          <a href="https://wa.me/51962469836?text=Hola%20Next%20Boost,%20quisiera%20cotizar%20un%20proyecto%20web" target="_blank" rel="noopener noreferrer" class="w-full inline-flex items-center justify-center gap-2 bg-emerald-500 hover:bg-emerald-400 text-black font-bold py-3 px-6 text-sm transition-all shadow-lg shadow-emerald-500/20 group/wa">
            Abrir WhatsApp Web Directo
            <svg class="w-4 h-4 transition-transform group-hover/wa:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>

        <!-- Direct Contact Cards -->
        <div class="glass-card rounded-2xl p-6 space-y-6">
          <h3 class="text-lg font-semibold text-white border-b border-white/5 pb-3">Canales Corporativos</h3>
          
          <!-- Email -->
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 rounded-none bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 shrink-0 mt-1">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div>
              <span class="text-[10px] text-gray-500 uppercase tracking-widest block font-medium">Correo Electrónico</span>
              <a href="mailto:info@nextboost.business" class="text-sm font-semibold text-white hover:text-blue-400 transition-colors">info@nextboost.business</a>
              <p class="text-xs text-gray-400 mt-0.5">Respuestas comerciales & soporte técnico</p>
            </div>
          </div>

          <!-- Phone -->
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 rounded-none bg-teal-500/10 border border-teal-500/20 flex items-center justify-center text-teal-400 shrink-0 mt-1">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div>
              <span class="text-[10px] text-gray-500 uppercase tracking-widest block font-medium">Línea Telefónica</span>
              <a href="tel:+51962469836" class="text-sm font-semibold text-white hover:text-teal-400 transition-colors">+51 962 469 836</a>
              <p class="text-xs text-gray-400 mt-0.5">Lunes a Viernes: 8:00 AM - 7:00 PM (GMT-5)</p>
            </div>
          </div>

          <!-- Location -->
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 rounded-none bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 shrink-0 mt-1">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div>
              <span class="text-[10px] text-gray-500 uppercase tracking-widest block font-medium">Oficina Principal</span>
              <p class="text-sm font-semibold text-white">Miraflores, Lima — Perú</p>
              <p class="text-xs text-gray-400 mt-0.5">Atención presencial previa cita & Remota Global</p>
            </div>
          </div>

        </div>

        <!-- White-Label Badge Card -->
        <div class="glass-card rounded-2xl p-6 border border-blue-500/20 bg-blue-950/10 flex items-center gap-4">
          <div class="w-10 h-10 rounded-none bg-blue-500/20 flex items-center justify-center text-blue-400 shrink-0">
            🔒
          </div>
          <div>
            <h4 class="text-sm font-bold text-white mb-0.5">¿Eres una Agencia de Marketing?</h4>
            <p class="text-xs text-gray-400 leading-relaxed">
              Ofrecemos contratos NDA estrictos de Marca Blanca para desarrollar los proyectos de tus clientes bajo tu propia identidad.
            </p>
          </div>
        </div>

      </div>

      <!-- Right Column: Interactive Quote Form (7 cols) -->
      <div class="lg:col-span-7">
        <div class="glass-card rounded-2xl p-8 lg:p-10 border border-white/10 relative shadow-2xl">
          <h2 class="text-2xl font-bold text-white mb-2">Solicitar Cotización Personalizada</h2>
          <p class="text-xs text-gray-400 mb-8 leading-relaxed">
            Completa el siguiente formulario con los detalles de tu proyecto y nuestro equipo técnico te enviará una propuesta detallada en menos de 24 horas.
          </p>

          <form id="contact-form" class="space-y-6">
            
            <!-- Service Selector -->
            <div>
              <label class="block text-xs font-semibold uppercase tracking-wider text-gray-300 mb-3">
                1. ¿Qué servicio necesitas? <span class="text-blue-400">*</span>
              </label>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <label class="glass-input p-3 flex items-center gap-3 cursor-pointer hover:border-blue-500/40 select-none">
                  <input type="checkbox" name="services" value="desarrollo-web" class="w-4 h-4 text-blue-500 rounded-none focus:ring-0 bg-transparent" checked>
                  <span class="text-xs font-medium text-gray-200">Desarrollo Web / Next.js</span>
                </label>
                <label class="glass-input p-3 flex items-center gap-3 cursor-pointer hover:border-blue-500/40 select-none">
                  <input type="checkbox" name="services" value="ecommerce" class="w-4 h-4 text-blue-500 rounded-none focus:ring-0 bg-transparent">
                  <span class="text-xs font-medium text-gray-200">E-Commerce / WooCommerce</span>
                </label>
                <label class="glass-input p-3 flex items-center gap-3 cursor-pointer hover:border-blue-500/40 select-none">
                  <input type="checkbox" name="services" value="landing-page" class="w-4 h-4 text-blue-500 rounded-none focus:ring-0 bg-transparent">
                  <span class="text-xs font-medium text-gray-200">Landing Page de Alta Conversión</span>
                </label>
                <label class="glass-input p-3 flex items-center gap-3 cursor-pointer hover:border-blue-500/40 select-none">
                  <input type="checkbox" name="services" value="marca-blanca" class="w-4 h-4 text-blue-500 rounded-none focus:ring-0 bg-transparent">
                  <span class="text-xs font-medium text-gray-200">Marca Blanca para Agencias</span>
                </label>
              </div>
            </div>

            <!-- Budget Selector -->
            <div>
              <label class="block text-xs font-semibold uppercase tracking-wider text-gray-300 mb-3">
                2. Presupuesto estimado del proyecto
              </label>
              <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                <button type="button" class="budget-pill pill-btn px-3 py-2 text-xs text-center text-gray-300 font-medium active">S/ 450 - S/ 550</button>
                <button type="button" class="budget-pill pill-btn px-3 py-2 text-xs text-center text-gray-300 font-medium">S/ 550 - S/ 800</button>
                <button type="button" class="budget-pill pill-btn px-3 py-2 text-xs text-center text-gray-300 font-medium">S/ 800 - S/ 1000</button>
                <button type="button" class="budget-pill pill-btn px-3 py-2 text-xs text-center text-gray-300 font-medium">S/ 1000 +</button>
              </div>
            </div>

            <!-- Input Fields Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label for="nombre" class="block text-xs font-medium text-gray-400 mb-1.5">Nombre y Apellido <span class="text-blue-400">*</span></label>
                <input type="text" id="nombre" required placeholder="Ej. Carlos Mendoza" class="glass-input w-full px-4 py-3 text-sm rounded-none">
              </div>
              <div>
                <label for="email" class="block text-xs font-medium text-gray-400 mb-1.5">Correo Corporativo <span class="text-blue-400">*</span></label>
                <input type="email" id="email" required placeholder="carlos@tuempresa.com" class="glass-input w-full px-4 py-3 text-sm rounded-none">
              </div>
              <div>
                <label for="telefono" class="block text-xs font-medium text-gray-400 mb-1.5">Teléfono / WhatsApp <span class="text-blue-400">*</span></label>
                <input type="tel" id="telefono" required placeholder="+51 900 000 000" class="glass-input w-full px-4 py-3 text-sm rounded-none">
              </div>
              <div>
                <label for="empresa" class="block text-xs font-medium text-gray-400 mb-1.5">Empresa / Marca</label>
                <input type="text" id="empresa" placeholder="Nombre de tu negocio" class="glass-input w-full px-4 py-3 text-sm rounded-none">
              </div>
            </div>

            <!-- Message details -->
            <div>
              <label for="mensaje" class="block text-xs font-medium text-gray-400 mb-1.5">Detalles del Proyecto o Mensaje <span class="text-blue-400">*</span></label>
              <textarea id="mensaje" rows="4" required placeholder="Cuéntanos brevemente sobre los objetivos de tu web, funcionalidades requeridas o tiempos deseados de entrega..." class="glass-input w-full px-4 py-3 text-sm rounded-none"></textarea>
            </div>

            <!-- Submission CTA -->
            <div>
              <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-teal-400 text-black font-bold py-4 px-8 text-sm uppercase tracking-wider rounded-none hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] hover:scale-[1.01] transition-all flex items-center justify-center gap-2 group/btn">
                <span>Enviar Solicitud de Cotización</span>
                <svg class="w-4 h-4 transition-transform group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </button>
              <p class="text-[10px] text-gray-500 text-center mt-3">
                🔒 Tus datos están protegidos bajo estricta confidencialidad. No enviamos spam.
              </p>
            </div>

          </form>

          <!-- Feedback Success Message (Hidden by default) -->
          <div id="success-alert" class="hidden absolute inset-0 bg-[#0c0c0e]/95 backdrop-blur-md rounded-2xl p-8 flex flex-col items-center justify-center text-center z-30 animate-in">
            <div class="w-16 h-16 rounded-full bg-teal-500/20 text-teal-400 border border-teal-500/40 flex items-center justify-center text-2xl font-bold mb-4 shadow-lg shadow-teal-500/20">
              ✓
            </div>
            <h3 class="text-2xl font-bold text-white mb-2">¡Solicitud Recibida con Éxito!</h3>
            <p class="text-sm text-gray-300 max-w-md leading-relaxed mb-6">
              Gracias por contactar a Next Boost. Un desarrollador senior revisará tus requerimientos y te enviará una propuesta técnica comercial a tu correo en menos de 24 horas.
            </p>
            <button id="close-alert-btn" class="bg-white text-black font-bold py-3 px-8 text-xs uppercase tracking-wider rounded-none hover:bg-gray-200 transition-colors">
              Aceptar & Volver
            </button>
          </div>

        </div>
      </div>

    </div>
  </main>

  <!-- Assurance Features Section -->
  <section class="relative z-10 py-16 px-8 md:px-16 lg:px-20 border-t border-white/5 bg-black/40">
    <div class="max-w-screen-2xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
      
      <div class="glass-card p-6 rounded-2xl flex flex-col items-center gap-3">
        <div class="w-12 h-12 rounded-none bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 text-xl font-bold">
          ⚡
        </div>
        <h4 class="text-base font-bold text-white">Cotización en 24h</h4>
        <p class="text-xs text-gray-400 leading-relaxed">
          Recibe un desglose claro de inversión, entregables y cronograma técnico detallado sin sorpresas.
        </p>
      </div>

      <div class="glass-card p-6 rounded-2xl flex flex-col items-center gap-3">
        <div class="w-12 h-12 rounded-none bg-teal-500/10 border border-teal-500/20 flex items-center justify-center text-teal-400 text-xl font-bold">
          🚀
        </div>
        <h4 class="text-base font-bold text-white">100% Código Limpio & Rápido</h4>
        <p class="text-xs text-gray-400 leading-relaxed">
          Desarrollos sin plantillas lentas. Páginas optimizadas para PageSpeed 95+ y conversión máxima.
        </p>
      </div>

      <div class="glass-card p-6 rounded-2xl flex flex-col items-center gap-3">
        <div class="w-12 h-12 rounded-none bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 text-xl font-bold">
          🛡️
        </div>
        <h4 class="text-base font-bold text-white">Garantía & Soporte</h4>
        <p class="text-xs text-gray-400 leading-relaxed">
          Todos los proyectos incluyen 30 días de soporte post-lanzamiento y garantía de correcto funcionamiento.
        </p>
      </div>

    </div>
  </section>

  <?php include 'includes/footer.php'; ?>

  <!-- Confetti Library -->
  <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // Budget Pill Selector Logic
      const budgetPills = document.querySelectorAll('.budget-pill');
      budgetPills.forEach(pill => {
        pill.addEventListener('click', () => {
          budgetPills.forEach(p => p.classList.remove('active'));
          pill.classList.add('active');
        });
      });

      // Form Submit Handler
      const contactForm = document.getElementById('contact-form');
      const successAlert = document.getElementById('success-alert');
      const closeAlertBtn = document.getElementById('close-alert-btn');

      contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const btn = contactForm.querySelector('button[type="submit"]');
        const originalBtnHTML = btn.innerHTML;
        btn.disabled = true;
        btn.innerHTML = '<span class="animate-spin inline-block w-4 h-4 border-2 border-transparent border-t-white rounded-full mr-2"></span> Enviando...';

        // Gather budget
        const activeBudget = document.querySelector('.budget-pill.active')?.textContent || 'No especificado';
        
        // Gather services
        const selectedServices = Array.from(document.querySelectorAll('input[name="services"]:checked')).map(cb => cb.nextElementSibling.textContent).join(', ');

        const baseMessage = document.getElementById('mensaje').value;
        const fullMessage = `Servicios de interés: ${selectedServices}\nPresupuesto estimado: ${activeBudget}\n\nDetalles del Proyecto:\n${baseMessage}`;

        const formData = new FormData();
        formData.append('name', document.getElementById('nombre').value);
        formData.append('email', document.getElementById('email').value);
        formData.append('phone', document.getElementById('telefono').value);
        formData.append('company', document.getElementById('empresa').value);
        formData.append('message', fullMessage);

        try {
          const response = await fetch('api/send-contact.php', {
            method: 'POST',
            body: formData
          });
          const result = await response.json();

          if(result.success) {
            successAlert.classList.remove('hidden');
            if (typeof confetti === 'function') {
              confetti({
                particleCount: 150,
                spread: 70,
                origin: { y: 0.6 },
                colors: ['#3b82f6', '#2dd4bf', '#a855f7', '#10b981']
              });
            }
          } else {
            alert(result.message);
          }
        } catch(error) {
          alert('Hubo un error de conexión. Intenta nuevamente.');
        } finally {
          btn.disabled = false;
          btn.innerHTML = originalBtnHTML;
        }
      });

      closeAlertBtn.addEventListener('click', () => {
        successAlert.classList.add('hidden');
        contactForm.reset();
      });
    });
  </script>

</body>
</html>
