<!-- Lead Generation Modal (Hidden by default) -->
<div id="lead-modal" class="fixed inset-0 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-300">
  <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" id="lead-modal-backdrop"></div>
  
  <div class="bg-[#121212] border border-white/10 rounded-2xl w-full max-w-3xl mx-4 relative z-10 overflow-hidden shadow-2xl transform scale-95 transition-transform duration-300" id="lead-modal-content">
    
    <!-- Close Button -->
    <button id="close-modal" class="absolute top-4 right-4 text-gray-400 hover:text-white transition-colors z-20">
      <svg aria-hidden="true" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
    </button>

    <!-- Progress Bar -->
    <div class="w-full h-1 bg-gray-800">
      <div id="modal-progress" class="h-full bg-gradient-to-r from-blue-500 to-teal-400 w-1/4 transition-all duration-500"></div>
    </div>

    <div class="p-8 md:p-10 min-h-[400px] flex flex-col">
      
      <!-- STEP 1: Domain Check (Loader) -->
      <div id="step-1" class="step-container flex-1 flex flex-col items-center justify-center text-center animate-in fade-in zoom-in duration-300">
        <div class="w-16 h-16 border-4 border-blue-500/30 border-t-blue-500 rounded-full animate-spin mb-6"></div>
        <h3 class="text-2xl font-semibold text-white mb-2">Comprobando disponibilidad...</h3>
        <p class="text-gray-400"><span id="display-domain" class="text-teal-400 font-mono"></span></p>
      </div>

      <!-- STEP 2: Select Pages -->
      <div id="step-2" class="step-container hidden flex-1 flex-col animate-in fade-in slide-in-from-right-8 duration-300">
        <div class="text-center mb-8">
          <span class="inline-block bg-teal-500/10 text-teal-400 px-3 py-1 rounded-full text-xs font-semibold border border-teal-500/20 mb-3">¡Excelente elección! Dominio disponible para cotizar</span>
          <h3 class="text-2xl md:text-3xl font-semibold text-white mb-2">¿Qué tipo de web necesitas?</h3>
          <p class="text-gray-400 text-sm">Selecciona las secciones que requiere tu proyecto.</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
          <label class="cursor-pointer group">
            <input type="checkbox" name="pages[]" value="Landing Page" class="peer sr-only" checked>
            <div class="border border-white/10 bg-[#1a1a1a] rounded-xl p-4 text-center peer-checked:border-blue-500 peer-checked:bg-blue-500/10 transition-all h-full">
              <div class="w-8 h-8 mx-auto bg-white/5 rounded-lg flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">🚀</div>
              <span class="text-sm text-gray-300 font-medium">Landing Page</span>
            </div>
          </label>
          <label class="cursor-pointer group">
            <input type="checkbox" name="pages[]" value="Web Informativa" class="peer sr-only">
            <div class="border border-white/10 bg-[#1a1a1a] rounded-xl p-4 text-center peer-checked:border-blue-500 peer-checked:bg-blue-500/10 transition-all h-full">
              <div class="w-8 h-8 mx-auto bg-white/5 rounded-lg flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">📄</div>
              <span class="text-sm text-gray-300 font-medium">Web Informativa</span>
            </div>
          </label>
          <label class="cursor-pointer group">
            <input type="checkbox" name="pages[]" value="Corporativa" class="peer sr-only">
            <div class="border border-white/10 bg-[#1a1a1a] rounded-xl p-4 text-center peer-checked:border-blue-500 peer-checked:bg-blue-500/10 transition-all h-full">
              <div class="w-8 h-8 mx-auto bg-white/5 rounded-lg flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">🏢</div>
              <span class="text-sm text-gray-300 font-medium">Corporativa</span>
            </div>
          </label>
          <label class="cursor-pointer group">
            <input type="checkbox" name="pages[]" value="E-commerce" class="peer sr-only">
            <div class="border border-white/10 bg-[#1a1a1a] rounded-xl p-4 text-center peer-checked:border-blue-500 peer-checked:bg-blue-500/10 transition-all h-full">
              <div class="w-8 h-8 mx-auto bg-white/5 rounded-lg flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">🛒</div>
              <span class="text-sm text-gray-300 font-medium">E-commerce</span>
            </div>
          </label>
        </div>
        <div class="mt-auto flex justify-end">
          <button type="button" class="next-step bg-white text-black px-8 py-3 rounded-xl font-bold hover:bg-gray-200 transition-colors">Siguiente Paso →</button>
        </div>
      </div>

      <!-- STEP 3: Select Plan -->
      <div id="step-3" class="step-container hidden flex-1 flex-col animate-in fade-in slide-in-from-right-8 duration-300">
        <div class="text-center mb-8">
          <h3 class="text-2xl md:text-3xl font-semibold text-white mb-2">Elige un Plan Base</h3>
          <p class="text-gray-400 text-sm">Te guiaremos para ajustarlo a tu medida.</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
          <label class="cursor-pointer group relative">
            <input type="radio" name="plan" value="Landing Page (S/ 450)" class="peer sr-only" checked>
            <div class="border border-white/10 bg-[#1a1a1a] rounded-xl p-5 peer-checked:border-teal-500 peer-checked:bg-teal-500/5 transition-all h-full">
              <h4 class="text-white font-bold text-base md:text-lg mb-1">Landing Page</h4>
              <p class="text-teal-400 text-sm font-semibold mb-3">Desde S/ 450</p>
              <ul class="text-xs text-gray-400 space-y-2">
                <li>✓ Alta Conversión</li>
                <li>✓ Una Sola Página</li>
                <li>✓ Responsivo</li>
              </ul>
            </div>
          </label>
          <label class="cursor-pointer group relative">
            <input type="radio" name="plan" value="Web Informativa (S/ 550)" class="peer sr-only">
            <div class="border border-white/10 bg-[#1a1a1a] rounded-xl p-5 peer-checked:border-blue-500 peer-checked:bg-blue-500/5 transition-all h-full">
              <h4 class="text-white font-bold text-base md:text-lg mb-1">Informativa</h4>
              <p class="text-blue-400 text-sm font-semibold mb-3">Desde S/ 550</p>
              <ul class="text-xs text-gray-400 space-y-2">
                <li>✓ Hasta 5 Páginas</li>
                <li>✓ Form. Contacto</li>
                <li>✓ SEO Básico</li>
              </ul>
            </div>
          </label>
          <label class="cursor-pointer group relative">
            <input type="radio" name="plan" value="Corporativa (S/ 800)" class="peer sr-only">
            <div class="border border-white/10 bg-[#1a1a1a] rounded-xl p-5 peer-checked:border-emerald-500 peer-checked:bg-emerald-500/5 transition-all h-full relative overflow-hidden">
              <div class="absolute top-0 right-0 bg-emerald-500 text-black text-[9px] font-bold px-2 py-1 rounded-bl-lg uppercase">Ideal</div>
              <h4 class="text-white font-bold text-base md:text-lg mb-1">Corporativa</h4>
              <p class="text-emerald-400 text-sm font-semibold mb-3">Desde S/ 800</p>
              <ul class="text-xs text-gray-400 space-y-2">
                <li>✓ Panel Administrable</li>
                <li>✓ Hasta 10 Páginas</li>
                <li>✓ SEO Avanzado</li>
              </ul>
            </div>
          </label>
          <label class="cursor-pointer group relative">
            <input type="radio" name="plan" value="E-commerce (S/ 1000)" class="peer sr-only">
            <div class="border border-white/10 bg-[#1a1a1a] rounded-xl p-5 peer-checked:border-purple-500 peer-checked:bg-purple-500/5 transition-all h-full">
              <h4 class="text-white font-bold text-base md:text-lg mb-1">E-Commerce</h4>
              <p class="text-purple-400 text-sm font-semibold mb-3">Desde S/ 1000</p>
              <ul class="text-xs text-gray-400 space-y-2">
                <li>✓ Pasarela Pagos</li>
                <li>✓ Panel Ventas</li>
                <li>✓ Stock Ilimitado</li>
              </ul>
            </div>
          </label>
        </div>
        <div class="mt-auto flex justify-between">
          <button type="button" class="prev-step text-gray-400 hover:text-white px-4 py-3 text-sm font-medium transition-colors">← Volver</button>
          <button type="button" class="next-step bg-white text-black px-8 py-3 rounded-xl font-bold hover:bg-gray-200 transition-colors">Último Paso →</button>
        </div>
      </div>

      <!-- STEP 4: Contact Form -->
      <div id="step-4" class="step-container hidden flex-1 flex-col animate-in fade-in slide-in-from-right-8 duration-300">
        <div class="text-center mb-6">
          <h3 class="text-2xl md:text-3xl font-semibold text-white mb-2">Resumen de tu Cotización</h3>
          <p class="text-gray-400 text-sm">Déjanos tus datos y te enviaremos la propuesta en menos de 24h.</p>
        </div>
        
        <form id="lead-final-form" class="space-y-4">
          <!-- Honeypot (Anti-spam) -->
          <div class="hidden" aria-hidden="true">
            <input type="text" name="website_url_hp" tabindex="-1" autocomplete="off">
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs text-gray-400 mb-1">Nombre Completo *</label>
              <input type="text" name="name" required class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500">
            </div>
            <div>
              <label class="block text-xs text-gray-400 mb-1">Correo Electrónico *</label>
              <input type="email" name="email" required class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500">
            </div>
            <div>
              <label class="block text-xs text-gray-400 mb-1">Teléfono / WhatsApp *</label>
              <input type="tel" name="phone" required class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500">
            </div>
            <div>
              <label class="block text-xs text-gray-400 mb-1">Empresa (Opcional)</label>
              <input type="text" name="company" class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500">
            </div>
          </div>
          
          <div id="form-error" class="hidden text-red-400 text-xs font-semibold text-center mt-2"></div>
          
          <div class="mt-8 flex justify-between items-center">
            <button type="button" class="prev-step text-gray-400 hover:text-white px-4 py-3 text-sm font-medium transition-colors">← Volver</button>
            <button type="submit" id="submit-btn" class="bg-gradient-to-r from-blue-600 to-teal-500 text-white px-8 py-3 rounded-xl font-bold hover:shadow-[0_0_20px_rgba(37,99,235,0.4)] transition-all flex items-center gap-2">
              <span>Enviar Solicitud</span>
            </button>
          </div>
        </form>
      </div>

      <!-- SUCCESS STEP -->
      <div id="step-success" class="step-container hidden flex-1 flex-col items-center justify-center text-center animate-in fade-in zoom-in duration-300">
        <div class="w-16 h-16 bg-green-500/20 text-green-400 rounded-full flex items-center justify-center mb-6">
          <svg aria-hidden="true" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
        </div>
        <h3 class="text-3xl font-semibold text-white mb-2">¡Solicitud Enviada!</h3>
        <p class="text-gray-400 max-w-sm mx-auto mb-8">Hemos recibido los datos para tu dominio. Nos comunicaremos contigo por correo o WhatsApp muy pronto.</p>
        <button type="button" class="close-modal-btn bg-white/10 hover:bg-white/20 text-white px-8 py-3 rounded-xl font-medium transition-colors">Cerrar</button>
      </div>

    </div>
  </div>
</div>

<!-- Confetti Library -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('lead-modal');
  const modalContent = document.getElementById('lead-modal-content');
  const domainForm = document.getElementById('domain-search-form');
  const domainInput = document.getElementById('domain-input');
  const displayDomain = document.getElementById('display-domain');
  const progressBar = document.getElementById('modal-progress');
  
  let currentStep = 1;
  let searchData = {
    domain: '',
    pages: [],
    plan: ''
  };

  // Open Modal on Search
  if(domainForm) {
    domainForm.addEventListener('submit', (e) => {
      e.preventDefault();
      searchData.domain = domainInput.value.trim();
      if(!searchData.domain) return;
      
      displayDomain.textContent = searchData.domain;
      openModal();
      
      // Simulate Domain Check (Step 1 -> Step 2)
      setTimeout(() => {
        goToStep(2);
      }, 2000);
    });
  }

  // Next/Prev Buttons
  document.querySelectorAll('.next-step').forEach(btn => {
    btn.addEventListener('click', () => {
      if(currentStep === 2) {
        // Collect pages
        const checked = Array.from(document.querySelectorAll('input[name="pages[]"]:checked')).map(cb => cb.value);
        if(checked.length === 0) {
          alert("Por favor selecciona al menos una página.");
          return;
        }
        searchData.pages = checked;
      }
      if(currentStep === 3) {
        // Collect plan
        const plan = document.querySelector('input[name="plan"]:checked');
        if(plan) searchData.plan = plan.value;
      }
      goToStep(currentStep + 1);
    });
  });

  document.querySelectorAll('.prev-step').forEach(btn => {
    btn.addEventListener('click', () => {
      goToStep(currentStep - 1);
    });
  });

  // Final Form Submit
  const finalForm = document.getElementById('lead-final-form');
  if(finalForm) {
    finalForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const btn = document.getElementById('submit-btn');
      const errorDiv = document.getElementById('form-error');
      
      btn.disabled = true;
      btn.innerHTML = '<span class="animate-spin inline-block w-4 h-4 border-2 border-white/30 border-t-white rounded-full"></span> Enviando...';
      errorDiv.classList.add('hidden');

      const formData = new FormData(finalForm);
      formData.append('domain', searchData.domain);
      formData.append('pages', searchData.pages.join(', '));
      formData.append('plan', searchData.plan);

      try {
        const response = await fetch('api/send-quote.php', {
          method: 'POST',
          body: formData
        });
        
        const result = await response.json();
        
        if (result.success) {
          goToStep(5); // Success step
          if (typeof confetti === 'function') {
            confetti({
              particleCount: 150,
              spread: 70,
              origin: { y: 0.6 },
              colors: ['#3b82f6', '#2dd4bf', '#a855f7', '#10b981'] // Brand colors
            });
          }
        } else {
          throw new Error(result.message);
        }
      } catch (error) {
        errorDiv.textContent = error.message || "Ocurrió un error de conexión.";
        errorDiv.classList.remove('hidden');
        btn.disabled = false;
        btn.innerHTML = '<span>Intentar de nuevo</span>';
      }
    });
  }

  // Modal Controls
  function openModal() {
    currentStep = 1;
    updateSteps();
    modal.classList.remove('hidden');
    // trigger reflow
    void modal.offsetWidth;
    modal.classList.remove('opacity-0');
    modalContent.classList.remove('scale-95');
    document.body.style.overflow = 'hidden';
  }

  function closeModal() {
    modal.classList.add('opacity-0');
    modalContent.classList.add('scale-95');
    setTimeout(() => {
      modal.classList.add('hidden');
      document.body.style.overflow = '';
      // Reset form
      if(finalForm) finalForm.reset();
      currentStep = 1;
      updateSteps();
    }, 300);
  }

  document.getElementById('close-modal').addEventListener('click', closeModal);
  document.getElementById('lead-modal-backdrop').addEventListener('click', closeModal);
  document.querySelectorAll('.close-modal-btn').forEach(btn => btn.addEventListener('click', closeModal));

  function goToStep(step) {
    currentStep = step;
    updateSteps();
  }

  function updateSteps() {
    document.querySelectorAll('.step-container').forEach(el => el.classList.add('hidden'));
    
    let targetId = currentStep === 5 ? 'step-success' : `step-${currentStep}`;
    const target = document.getElementById(targetId);
    if(target) target.classList.remove('hidden');

    // Update Progress Bar
    const progress = currentStep === 5 ? 100 : (currentStep / 4) * 100;
    progressBar.style.width = `${progress}%`;
  }
});
</script>
