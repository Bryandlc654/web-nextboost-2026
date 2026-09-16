<?php
require_once __DIR__ . '/../includes/ai-config.php';
session_start();
if (!isset($_SESSION['admin_id'])) { header('Location: index.php'); exit; }

require_once __DIR__ . '/../includes/db.php';
$db = getDB();

$totalLeads = $db->query("SELECT COUNT(*) FROM leads")->fetchColumn();
$totalMessages = $db->query("SELECT COUNT(*) FROM messages")->fetchColumn();
$todayLeads = $db->query("SELECT COUNT(*) FROM leads WHERE DATE(created_at) = DATE('now')")->fetchColumn();
$recentLeads = $db->query("
    SELECT l.*, (SELECT COUNT(*) FROM messages m WHERE m.lead_id = l.id) as msg_count
    FROM leads l ORDER BY l.created_at DESC LIMIT 50
")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Next Boost</title>
    <link rel="stylesheet" href="../assets/css/tailwind.css">
    <style>
        @keyframes fade-in { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }
        .animate-in { animation: fade-in 0.3s ease-out forwards; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #0a0a0e; }
        ::-webkit-scrollbar-thumb { background: #333; border-radius: 3px; }
    </style>
</head>
<body class="bg-[#08080a] min-h-screen text-white">
    
    <!-- Top Bar -->
    <header class="bg-[#0d0d11] border-b border-white/10 px-6 py-3 flex items-center justify-between sticky top-0 z-40">
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 rounded-lg bg-gradient-to-r from-blue-500 to-teal-400 flex items-center justify-center">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            </div>
            <span class="font-bold text-sm">Next Boost Admin</span>
        </div>
        <div class="flex items-center gap-4">
            <a href="https://nextboost.business/" target="_blank" class="text-xs text-gray-400 hover:text-blue-400 transition-colors">Ver sitio</a>
            <a href="logout.php" class="text-xs text-gray-400 hover:text-red-400 transition-colors">Cerrar sesion</a>
        </div>
    </header>

    <main class="max-w-7xl mx-auto p-6">
        
        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
            <div class="bg-[#0d0d11] border border-white/10 rounded-xl p-4">
                <p class="text-[10px] text-gray-500 uppercase tracking-wider">Total Leads</p>
                <p class="text-2xl font-bold text-white mt-1"><?= $totalLeads ?></p>
            </div>
            <div class="bg-[#0d0d11] border border-white/10 rounded-xl p-4">
                <p class="text-[10px] text-gray-500 uppercase tracking-wider">Mensajes</p>
                <p class="text-2xl font-bold text-white mt-1"><?= $totalMessages ?></p>
            </div>
            <div class="bg-[#0d0d11] border border-white/10 rounded-xl p-4">
                <p class="text-[10px] text-gray-500 uppercase tracking-wider">Hoy</p>
                <p class="text-2xl font-bold text-teal-400 mt-1"><?= $todayLeads ?></p>
            </div>
            <div class="bg-[#0d0d11] border border-white/10 rounded-xl p-4">
                <p class="text-[10px] text-gray-500 uppercase tracking-wider">Conversaciones</p>
                <p class="text-2xl font-bold text-blue-400 mt-1"><?= $totalMessages > 0 ? count(array_unique(array_column($recentLeads, 'id'))) : 0 ?></p>
            </div>
        </div>

        <!-- Main Content: Two Column -->
        <div class="grid grid-cols-1 lg:grid-cols-[350px_1fr] gap-6">
            
            <!-- Left: Leads List -->
            <div class="bg-[#0d0d11] border border-white/10 rounded-xl overflow-hidden">
                <div class="px-4 py-3 border-b border-white/10 flex items-center justify-between">
                    <h2 class="text-sm font-bold text-white">Leads</h2>
                    <span class="text-[10px] text-gray-500"><?= count($recentLeads) ?> registros</span>
                </div>
                <div id="leads-list" class="divide-y divide-white/5 max-h-[calc(100vh-320px)] overflow-y-auto">
                    <?php foreach ($recentLeads as $lead): ?>
                    <button 
                        onclick="loadMessages(<?= $lead['id'] ?>)" 
                        data-lead-id="<?= $lead['id'] ?>"
                        data-page-url="<?= htmlspecialchars($lead['page_url'] ?? '') ?>"
                        class="w-full text-left px-4 py-3 hover:bg-white/5 transition-colors group lead-item"
                    >
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-r from-blue-500/20 to-teal-400/20 border border-white/10 flex items-center justify-center">
                                    <span class="text-xs font-bold text-blue-400"><?= strtoupper(substr($lead['name'], 0, 1)) ?></span>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-200 group-hover:text-white"><?= htmlspecialchars($lead['name']) ?></p>
                                    <p class="text-[10px] text-gray-500"><?= htmlspecialchars($lead['phone'] ?: $lead['email'] ?: $lead['ip_address']) ?></p>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="text-[10px] text-gray-500"><?= date('d/m H:i', strtotime($lead['created_at'])) ?></span>
                                <?php if ($lead['msg_count'] > 0): ?>
                                    <span class="block text-[10px] text-blue-400"><?= $lead['msg_count'] ?> msg</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </button>
                    <?php endforeach; ?>
                    <?php if (empty($recentLeads)): ?>
                    <div class="px-4 py-8 text-center text-gray-500 text-sm">No hay leads aun</div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Right: Chat View -->
            <div class="bg-[#0d0d11] border border-white/10 rounded-xl flex flex-col h-[calc(100vh-220px)]">
                
                <!-- Chat Header -->
                <div id="chat-header" class="px-5 py-3 border-b border-white/10 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-gradient-to-r from-blue-500/20 to-teal-400/20 border border-white/10 flex items-center justify-center">
                            <span id="chat-avatar-letter" class="text-sm font-bold text-blue-400">?</span>
                        </div>
                        <div>
                            <p id="chat-lead-name" class="text-sm font-bold text-white">Selecciona un lead</p>
                            <p id="chat-lead-info" class="text-[10px] text-gray-500">Haz click en un lead para ver la conversacion</p>
                        </div>
                    </div>
                    <div id="chat-lead-meta" class="hidden text-right text-[10px] text-gray-500">
                        <p id="chat-lead-page"></p>
                        <p id="chat-lead-time"></p>
                    </div>
                </div>

                <!-- Messages -->
                <div id="chat-messages" class="flex-1 overflow-y-auto p-5 space-y-3">
                    <div class="flex items-center justify-center h-full text-gray-600 text-sm">
                        Selecciona un lead para ver los mensajes
                    </div>
                </div>

                <!-- Reply Box -->
                <div id="chat-reply-box" class="hidden border-t border-white/10 p-4">
                    <form id="reply-form" class="flex items-center gap-2">
                        <input type="hidden" id="reply-lead-id">
                        <input type="text" id="reply-input" placeholder="Escribe una respuesta..." class="flex-1 bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-blue-500/50">
                        <button type="submit" class="w-10 h-10 bg-blue-600 hover:bg-blue-500 rounded-xl flex items-center justify-center transition-colors shrink-0">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
    let currentLeadId = null;

    async function loadMessages(leadId) {
        currentLeadId = leadId;
        
        // Highlight active lead
        document.querySelectorAll('.lead-item').forEach(el => {
            el.classList.remove('bg-blue-500/10');
            if (el.dataset.leadId == leadId) el.classList.add('bg-blue-500/10');
        });

        const msgContainer = document.getElementById('chat-messages');
        msgContainer.innerHTML = '<div class="flex items-center justify-center h-full"><div class="text-gray-500 text-sm">Cargando...</div></div>';

        try {
            const res = await fetch('get-messages.php?lead_id=' + leadId);
            const data = await res.json();

            // Update header
            const leadItem = document.querySelector('[data-lead-id="' + leadId + '"]');
            const leadName = leadItem?.querySelector('.text-sm.font-semibold')?.textContent || 'Lead';
            const leadInfo = leadItem?.querySelector('.text-\\[10px\\]')?.textContent || '';

            document.getElementById('chat-avatar-letter').textContent = leadName.charAt(0).toUpperCase();
            document.getElementById('chat-lead-name').textContent = leadName;
            document.getElementById('chat-lead-info').textContent = leadInfo;
            document.getElementById('reply-lead-id').value = leadId;
            document.getElementById('chat-reply-box').classList.remove('hidden');
            document.getElementById('chat-lead-meta').classList.remove('hidden');

            if (data.success && data.messages.length > 0) {
                document.getElementById('chat-lead-page').textContent = leadItem?.dataset.pageUrl || '';
                document.getElementById('chat-lead-time').textContent = 'Primera vez: ' + new Date(data.messages[0].created_at).toLocaleString('es-PE');

                let html = '';
                data.messages.forEach(msg => {
                    const isVisitor = msg.sender === 'visitor';
                    const align = isVisitor ? 'justify-start' : 'justify-end';
                    const bubble = isVisitor
                        ? 'bg-white/5 border-white/10 text-gray-200'
                        : 'bg-blue-600 border-blue-500/30 text-white';

                    html += `
                    <div class="flex ${align} animate-in">
                        <div class="${bubble} border px-4 py-3 max-w-[70%] rounded-2xl ${isVisitor ? 'rounded-tl-md' : 'rounded-tr-md'}">
                            <p class="text-sm">${escapeHtml(msg.message)}</p>
                            <span class="text-[10px] opacity-50 mt-1 block">${new Date(msg.created_at).toLocaleTimeString('es-PE', {hour:'2-digit', minute:'2-digit'})}</span>
                        </div>
                    </div>`;
                });
                msgContainer.innerHTML = html;
                msgContainer.scrollTop = msgContainer.scrollHeight;
            } else {
                msgContainer.innerHTML = '<div class="flex items-center justify-center h-full text-gray-600 text-sm">Sin mensajes aun</div>';
            }
        } catch(e) {
            msgContainer.innerHTML = '<div class="flex items-center justify-center h-full text-red-400 text-sm">Error al cargar mensajes</div>';
        }
    }

    document.getElementById('reply-form').addEventListener('submit', async (e) => {
        e.preventDefault();
        const input = document.getElementById('reply-input');
        const msg = input.value.trim();
        if (!msg || !currentLeadId) return;

        // Optimistic UI
        const msgContainer = document.getElementById('chat-messages');
        const div = document.createElement('div');
        div.className = 'flex justify-end animate-in';
        div.innerHTML = `<div class="bg-blue-600 border border-blue-500/30 text-white border px-4 py-3 max-w-[70%] rounded-2xl rounded-tr-md"><p class="text-sm">${escapeHtml(msg)}</p><span class="text-[10px] opacity-50 mt-1 block">Ahora</span></div>`;
        msgContainer.appendChild(div);
        msgContainer.scrollTop = msgContainer.scrollHeight;
        input.value = '';

        try {
            await fetch('send-admin-reply.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'lead_id=' + currentLeadId + '&message=' + encodeURIComponent(msg)
            });
        } catch(e) {}
    });

    function escapeHtml(t) { const d = document.createElement('div'); d.textContent = t; return d.innerHTML; }

    // Auto-refresh leads every 30s
    setInterval(() => { location.reload(); }, 30000);
    </script>
</body>
</html>
