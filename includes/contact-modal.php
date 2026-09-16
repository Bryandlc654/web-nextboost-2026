<!-- Generic Contact Modal -->
<div id="contact-modal" class="fixed inset-0 z-[100] hidden flex items-center justify-center px-4 sm:px-6 transition-all duration-300 opacity-0">
  
  <!-- Backdrop -->
  <div id="contact-modal-backdrop" class="absolute inset-0 bg-black/80 backdrop-blur-md cursor-pointer transition-opacity duration-300"></div>

  <!-- Modal Content -->
  <div id="contact-modal-content" class="relative bg-[#0a0a0a] border border-white/10 rounded-2xl w-full max-w-lg shadow-2xl overflow-hidden flex flex-col scale-95 transition-transform duration-300">
    
    <!-- Header -->
    <div class="px-6 py-5 border-b border-white/5 flex justify-between items-center relative z-10 bg-gradient-to-r from-blue-900/20 to-teal-900/20">
      <h3 class="text-xl font-bold text-white">Contáctanos</h3>
      <button type="button" id="close-contact-modal" class="text-gray-400 hover:text-white transition-colors p-1">
        <svg aria-hidden="true" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
      </button>
    </div>

    <!-- Form Container -->
    <div class="p-6 md:p-8 relative z-10 flex-1 overflow-y-auto">
      
      <!-- Error Banner -->
      <div id="contact-form-error" class="hidden mb-6 bg-red-500/10 border border-red-500/20 text-red-400 p-4 rounded-xl text-sm"></div>

      <!-- SUCCESS MESSAGE -->
      <div id="contact-step-success" class="hidden flex-col items-center justify-center text-center animate-in fade-in zoom-in duration-300 py-8">
        <div class="w-16 h-16 bg-green-500/20 text-green-400 rounded-full flex items-center justify-center mb-6">
          <svg aria-hidden="true" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
        </div>
        <h3 class="text-2xl font-semibold text-white mb-2">¡Mensaje Enviado!</h3>
        <p class="text-gray-400 mb-8">Hemos recibido tu consulta. Nos comunicaremos contigo muy pronto.</p>
        <button type="button" class="close-contact-modal-btn bg-white/10 hover:bg-white/20 text-white px-8 py-3 rounded-xl font-medium transition-colors">Cerrar</button>
      </div>

      <!-- Contact Form -->
      <form id="contact-modal-form" class="space-y-5">
        <!-- Honeypot -->
        <div class="hidden" aria-hidden="true">
          <label for="contact_hp">Sitio Web</label>
          <input type="text" id="contact_hp" name="website_url_hp" tabindex="-1" autocomplete="off">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
          <div class="space-y-1.5">
            <label class="text-xs text-gray-400 font-medium ml-1">Nombre Completo <span class="text-red-400">*</span></label>
            <input type="text" name="name" required class="w-full bg-[#141414] border border-white/10 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors placeholder-gray-600" placeholder="Juan Pérez">
          </div>
          <div class="space-y-1.5">
            <label class="text-xs text-gray-400 font-medium ml-1">Teléfono / WhatsApp <span class="text-red-400">*</span></label>
            <input type="tel" name="phone" required class="w-full bg-[#141414] border border-white/10 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors placeholder-gray-600" placeholder="+51 987 654 321">
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
          <div class="space-y-1.5">
            <label class="text-xs text-gray-400 font-medium ml-1">Email <span class="text-red-400">*</span></label>
            <input type="email" name="email" required class="w-full bg-[#141414] border border-white/10 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors placeholder-gray-600" placeholder="juan@correo.com">
          </div>
          <div class="space-y-1.5">
            <label class="text-xs text-gray-400 font-medium ml-1">Empresa (Opcional)</label>
            <input type="text" name="company" class="w-full bg-[#141414] border border-white/10 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors placeholder-gray-600" placeholder="Mi Empresa S.A.C.">
          </div>
        </div>

        <div class="space-y-1.5">
          <label class="text-xs text-gray-400 font-medium ml-1">Cuéntanos sobre tu proyecto</label>
          <textarea name="message" rows="3" class="w-full bg-[#141414] border border-white/10 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors placeholder-gray-600 resize-none" placeholder="Necesito un e-commerce para mi marca..."></textarea>
        </div>

        <div class="pt-2">
          <button type="submit" id="contact-submit-btn" class="w-full bg-blue-600 hover:bg-blue-500 text-white py-3.5 rounded-xl font-bold transition-all shadow-[0_0_15px_rgba(37,99,235,0.3)] hover:shadow-[0_0_25px_rgba(37,99,235,0.5)] flex items-center justify-center gap-2">
            <span>Enviar Mensaje</span>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('contact-modal');
  const modalContent = document.getElementById('contact-modal-content');
  const form = document.getElementById('contact-modal-form');
  const errorDiv = document.getElementById('contact-form-error');
  const successDiv = document.getElementById('contact-step-success');

  // Trigger elements
  const triggerBtns = document.querySelectorAll('[href="#contacto"], .open-contact-modal');
  
  function openModal(e) {
    if(e) e.preventDefault();
    modal.classList.remove('hidden');
    void modal.offsetWidth; // trigger reflow
    modal.classList.remove('opacity-0');
    modalContent.classList.remove('scale-95');
    document.body.style.overflow = 'hidden';
    
    // Reset view
    form.classList.remove('hidden');
    successDiv.classList.add('hidden');
    errorDiv.classList.add('hidden');
    form.reset();
  }

  function closeModal() {
    modal.classList.add('opacity-0');
    modalContent.classList.add('scale-95');
    setTimeout(() => {
      modal.classList.add('hidden');
      document.body.style.overflow = '';
    }, 300);
  }

  triggerBtns.forEach(btn => btn.addEventListener('click', openModal));
  document.getElementById('close-contact-modal').addEventListener('click', closeModal);
  document.getElementById('contact-modal-backdrop').addEventListener('click', closeModal);
  document.querySelectorAll('.close-contact-modal-btn').forEach(btn => btn.addEventListener('click', closeModal));

  if(form) {
    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      const btn = document.getElementById('contact-submit-btn');
      
      btn.disabled = true;
      btn.innerHTML = '<span class="animate-spin inline-block w-4 h-4 border-2 border-white/30 border-t-white rounded-full"></span> Enviando...';
      errorDiv.classList.add('hidden');

      const formData = new FormData(form);

      try {
        const response = await fetch('api/send-contact.php', {
          method: 'POST',
          body: formData
        });
        
        const result = await response.json();
        
        if (result.success) {
          form.classList.add('hidden');
          successDiv.classList.remove('hidden');
          successDiv.classList.add('flex');
          
          if (typeof confetti === 'function') {
            confetti({
              particleCount: 150,
              spread: 70,
              origin: { y: 0.6 },
              colors: ['#3b82f6', '#2dd4bf', '#a855f7', '#10b981']
            });
          }
        } else {
          throw new Error(result.message);
        }
      } catch (error) {
        errorDiv.textContent = error.message || "Ocurrió un error de conexión.";
        errorDiv.classList.remove('hidden');
      } finally {
        btn.disabled = false;
        btn.innerHTML = '<span>Enviar Mensaje</span>';
      }
    });
  }
});
</script>
