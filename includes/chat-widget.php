<!-- AI Chat Widget -->
<div id="chat-widget" class="fixed bottom-5 right-5 z-50">
  
  <!-- Tooltip (shows once after 5s, fades after 8s) -->
  <div id="chat-tooltip" class="absolute bottom-full right-0 mb-3 opacity-0 transition-opacity duration-500 pointer-events-none whitespace-nowrap">
    <div class="bg-white text-gray-800 text-xs font-medium px-3 py-2 rounded-lg shadow-lg relative">
      <span class="block">En que puedo ayudarte?</span>
      <div class="absolute top-full right-4 -mt-1 w-2 h-2 bg-white transform rotate-45"></div>
    </div>
  </div>

  <!-- Chat Bubble Button -->
  <button id="chat-bubble" class="w-12 h-12 bg-[#1a1a24] hover:bg-[#22222e] border border-white/10 hover:border-white/20 rounded-full flex items-center justify-center transition-all duration-300 group relative shadow-lg">
    <svg id="chat-icon" class="w-5 h-5 text-blue-400 group-hover:text-blue-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
    <svg id="chat-close-icon" class="w-5 h-5 text-gray-400 hover:text-white hidden transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
  </button>

  <!-- Chat Window -->
  <div id="chat-window" class="hidden absolute bottom-16 right-0 w-[360px] max-w-[calc(100vw-2.5rem)] bg-[#0d0d11] border border-white/10 rounded-xl shadow-2xl overflow-hidden transform translate-y-3 opacity-0 transition-all duration-250 origin-bottom-right">
    
    <!-- Header -->
    <div class="bg-[#111117] border-b border-white/10 px-4 py-3 flex items-center justify-between">
      <div class="flex items-center gap-2.5">
        <div class="w-8 h-8 rounded-full bg-blue-500/10 border border-blue-500/20 flex items-center justify-center">
          <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
        </div>
        <div>
          <h4 class="text-xs font-semibold text-white">Next Boost</h4>
          <p class="text-[10px] text-gray-500">Asistente virtual</p>
        </div>
      </div>
      <button id="chat-minimize" class="text-gray-500 hover:text-gray-300 transition-colors p-1 rounded">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
      </button>
    </div>

    <!-- Messages -->
    <div id="chat-messages" class="h-[320px] overflow-y-auto p-4 space-y-3 scroll-smooth">
      <div class="flex items-start gap-2 animate-in">
        <div class="w-6 h-6 rounded-full bg-blue-500/10 border border-blue-500/20 flex items-center justify-center shrink-0">
          <svg class="w-3 h-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
        </div>
        <div class="bg-white/5 border border-white/10 rounded-xl rounded-tl-sm px-3 py-2.5 max-w-[85%]">
          <p class="text-[13px] text-gray-300 leading-relaxed">Hola! En que puedo ayudarte?</p>
          <span class="text-[10px] text-gray-600 mt-1 block">Ahora</span>
        </div>
      </div>
    </div>

    <!-- Typing Indicator -->
    <div id="chat-typing" class="hidden px-4 pb-2">
      <div class="flex items-center gap-1.5 text-gray-500">
        <span class="w-1.5 h-1.5 bg-gray-500 rounded-full animate-bounce" style="animation-delay:0ms"></span>
        <span class="w-1.5 h-1.5 bg-gray-500 rounded-full animate-bounce" style="animation-delay:150ms"></span>
        <span class="w-1.5 h-1.5 bg-gray-500 rounded-full animate-bounce" style="animation-delay:300ms"></span>
        <span class="text-[11px] ml-1">Escribiendo...</span>
      </div>
    </div>

    <!-- Quick Replies -->
    <div id="chat-quick-replies" class="px-4 pb-3 flex flex-wrap gap-1.5">
      <button class="quick-reply text-[11px] px-2.5 py-1 bg-white/5 border border-white/10 text-gray-400 rounded-md hover:bg-white/10 hover:text-white transition-all">Cuanto cuesta?</button>
      <button class="quick-reply text-[11px] px-2.5 py-1 bg-white/5 border border-white/10 text-gray-400 rounded-md hover:bg-white/10 hover:text-white transition-all">Quiero cotizar</button>
    </div>

    <!-- Input -->
    <div class="border-t border-white/10 p-3 bg-[#0a0a0e]">
      <form id="chat-form" class="flex items-center gap-2">
        <input type="text" id="chat-input" placeholder="Escribe tu mensaje..." class="flex-1 bg-white/5 border border-white/10 rounded-lg px-3 py-2 text-[13px] text-white placeholder-gray-600 focus:outline-none focus:border-blue-500/30 transition-colors" autocomplete="off">
        <button type="submit" id="chat-send" class="w-8 h-8 bg-blue-600 hover:bg-blue-500 rounded-lg flex items-center justify-center transition-colors shrink-0">
          <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
        </button>
      </form>
    </div>

    <!-- Lead Capture Form -->
    <div id="chat-lead-form" class="hidden border-t border-white/10 p-3 bg-[#0a0a0e]">
      <p class="text-[11px] text-gray-500 mb-2">Dejanos tus datos:</p>
      <form id="chat-lead-submit" class="space-y-2">
        <input type="text" id="lead-name" placeholder="Nombre" required class="w-full bg-white/5 border border-white/10 rounded-lg px-3 py-2 text-[13px] text-white placeholder-gray-600 focus:outline-none focus:border-blue-500/30">
        <input type="tel" id="lead-phone" placeholder="Celular / WhatsApp" required class="w-full bg-white/5 border border-white/10 rounded-lg px-3 py-2 text-[13px] text-white placeholder-gray-600 focus:outline-none focus:border-blue-500/30">
        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white py-2 rounded-lg text-[13px] font-medium transition-colors">Enviar</button>
      </form>
    </div>

    <!-- Powered By -->
    <div class="px-3 py-1.5 bg-[#08080a] border-t border-white/5 text-center">
      <p class="text-[9px] text-gray-600">Powered by <span class="text-blue-500/60 font-medium">Next Boost</span></p>
    </div>
  </div>
</div>

<script>
(function() {
  const bubble = document.getElementById('chat-bubble');
  const chatWindow = document.getElementById('chat-window');
  const chatIcon = document.getElementById('chat-icon');
  const closeIcon = document.getElementById('chat-close-icon');
  const messagesContainer = document.getElementById('chat-messages');
  const chatForm = document.getElementById('chat-form');
  const chatInput = document.getElementById('chat-input');
  const typingIndicator = document.getElementById('chat-typing');
  const quickReplies = document.getElementById('chat-quick-replies');
  const leadForm = document.getElementById('chat-lead-form');
  const leadSubmit = document.getElementById('chat-lead-submit');
  const minimizeBtn = document.getElementById('chat-minimize');
  const tooltip = document.getElementById('chat-tooltip');

  let leadId = null;
  let isOpen = false;
  let isInitialized = false;
  let isSending = false;
  let tooltipShown = false;

  const API_BASE = window.location.origin + '/api/';

  // Notify visit on page load
  try {
    const fd = new FormData();
    fd.append('page', window.location.href);
    fd.append('title', document.title);
    fetch(API_BASE + 'visit-alert.php', { method: 'POST', body: fd, mode: 'no-cors' }).catch(() => {});
    // Worker fallback: process queue 2s later
    setTimeout(() => { fetch(API_BASE + 'worker.php', { mode: 'no-cors' }).catch(() => {}); }, 2000);
  } catch(e) {}

  // Show tooltip after 5s, hide after 8s
  setTimeout(() => {
    if (!isOpen && !tooltipShown) {
      tooltipShown = true;
      tooltip.style.opacity = '1';
      setTimeout(() => { tooltip.style.opacity = '0'; }, 8000);
    }
  }, 5000);

  bubble.addEventListener('click', async () => {
    tooltip.style.opacity = '0';
    isOpen = !isOpen;
    if (isOpen) {
      chatWindow.classList.remove('hidden');
      requestAnimationFrame(() => {
        chatWindow.classList.remove('translate-y-3', 'opacity-0');
      });
      chatIcon.classList.add('hidden');
      closeIcon.classList.remove('hidden');
      if (!isInitialized) await initChat();
      chatInput.focus();
    } else {
      closeChat();
    }
  });

  minimizeBtn.addEventListener('click', () => { isOpen = false; closeChat(); });

  function closeChat() {
    chatWindow.classList.add('translate-y-3', 'opacity-0');
    setTimeout(() => {
      chatWindow.classList.add('hidden');
      chatIcon.classList.remove('hidden');
      closeIcon.classList.add('hidden');
    }, 250);
  }

  async function initChat() {
    if (isInitialized) return;
    try {
      const fd = new FormData();
      fd.append('page_url', window.location.href);
      const res = await fetch(API_BASE + 'init-chat.php', { method: 'POST', body: fd });
      const data = await res.json();
      if (data.success && data.lead_id) {
        leadId = data.lead_id;
        isInitialized = true;
      }
    } catch (e) {}
  }

  chatForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    const message = chatInput.value.trim();
    if (!message || isSending) return;

    if (!isInitialized) await initChat();
    if (!leadId) return;

    isSending = true;
    chatInput.value = '';
    addMessage(message, 'visitor');
    quickReplies.classList.add('hidden');
    showTyping();

    try {
      const fd = new FormData();
      fd.append('message', message);
      fd.append('lead_id', leadId);
      const res = await fetch(API_BASE + 'chat-ai.php', { method: 'POST', body: fd });
      const data = await res.json();
      hideTyping();

      if (data.success && data.message) {
        if (data.message.includes('||FORM||')) {
          const cleanMsg = data.message.replace('||FORM||', '').trim();
          if (cleanMsg) addMessage(cleanMsg, 'admin');
          leadForm.classList.remove('hidden');
        } else {
          addMessage(data.message, 'admin');
        }
      } else {
        addMessage('Un asesor te respondiera pronto.', 'admin');
      }
    } catch (e) {
      hideTyping();
      addMessage('Error de conexion. Intenta de nuevo.', 'admin');
    }
    isSending = false;
  });

  document.querySelectorAll('.quick-reply').forEach(btn => {
    btn.addEventListener('click', () => {
      chatInput.value = btn.textContent;
      chatForm.dispatchEvent(new Event('submit'));
    });
  });

  leadSubmit.addEventListener('submit', async (e) => {
    e.preventDefault();
    const name = document.getElementById('lead-name').value.trim();
    const phone = document.getElementById('lead-phone').value.trim();
    try {
      const fd = new FormData();
      fd.append('name', name);
      fd.append('phone', phone);
      fd.append('lead_id', leadId || 0);
      await fetch(API_BASE + 'save-lead.php', { method: 'POST', body: fd });
      leadForm.classList.add('hidden');
      addMessage('Gracias ' + name + '! Te contactaremos al ' + phone + ' pronto.', 'admin');
    } catch (e) {
      addMessage('Error al enviar.', 'admin');
    }
  });

  function addMessage(text, sender) {
    const isVisitor = sender === 'visitor';
    const div = document.createElement('div');
    div.className = 'flex items-start gap-2 ' + (isVisitor ? 'flex-row-reverse' : '') + ' animate-in';
    
    const avatar = isVisitor
      ? '<div class="w-6 h-6 rounded-full bg-white/5 border border-white/10 flex items-center justify-center shrink-0"><svg class="w-3 h-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg></div>'
      : '<div class="w-6 h-6 rounded-full bg-blue-500/10 border border-blue-500/20 flex items-center justify-center shrink-0"><svg class="w-3 h-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div>';

    const bubbleClass = isVisitor
      ? 'bg-blue-600/80 border-blue-500/20 rounded-xl rounded-tr-sm'
      : 'bg-white/5 border-white/10 rounded-xl rounded-tl-sm';

    div.innerHTML = avatar + '<div class="' + bubbleClass + ' border px-3 py-2 max-w-[85%]"><p class="text-[13px] text-gray-200 leading-relaxed">' + escapeHtml(text) + '</p><span class="text-[10px] text-gray-600 mt-0.5 block">Ahora</span></div>';

    messagesContainer.appendChild(div);
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
  }

  function showTyping() { typingIndicator.classList.remove('hidden'); messagesContainer.scrollTop = messagesContainer.scrollHeight; }
  function hideTyping() { typingIndicator.classList.add('hidden'); }
  function escapeHtml(t) { const d = document.createElement('div'); d.textContent = t; return d.innerHTML; }
})();
</script>
