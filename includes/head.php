<?php
  if (!isset($page_title)) {
    $page_title = "Agencia de Desarrollo Web | Next Boost Perú";
  }
  if (!isset($page_description)) {
    $page_description = "Agencia de desarrollo web en Perú. Creamos sitios web profesionales con Next.js, hosting premium y soporte Marca Blanca para agencias.";
  }
  if (!isset($og_image)) {
    $og_image = "https://nextboost.business/imagenes-web/next-boost.png";
  }
  if (!isset($og_type)) {
    $og_type = "website";
  }
  if (!isset($og_url)) {
    // Canonical determinista: siempre apunta al dominio canónico de producción,
    // independientemente del host por el que se acceda (www, IP, etc.).
    $path = $_SERVER['SCRIPT_NAME'] ?? '/';
    if ($path === '/index.php' || $path === 'index.php') {
      $path = '/';
    }
    $og_url = 'https://nextboost.business' . strtok($path, '?');
  }
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow, max-image-preview:large">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="author" content="Next Boost">
  <link rel="canonical" href="<?= htmlspecialchars($og_url) ?>" />
  <link rel="alternate" href="<?= htmlspecialchars($og_url) ?>" hreflang="x-default" />
  <link rel="alternate" href="<?= htmlspecialchars($og_url) ?>" hreflang="es-PE" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="<?= htmlspecialchars($og_type) ?>" />
  <meta property="og:url" content="<?= htmlspecialchars($og_url) ?>" />
  <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>" />
  <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>" />
  <meta property="og:image" content="<?= htmlspecialchars($og_image) ?>" />
  <?php if (isset($article_published_time)): ?>
  <meta property="article:published_time" content="<?= htmlspecialchars($article_published_time) ?>" />
  <?php endif; ?>
  <?php if (isset($article_modified_time)): ?>
  <meta property="article:modified_time" content="<?= htmlspecialchars($article_modified_time) ?>" />
  <?php endif; ?>

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:url" content="<?= htmlspecialchars($og_url) ?>" />
  <meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>" />
  <meta name="twitter:description" content="<?= htmlspecialchars($page_description) ?>" />
  <meta name="twitter:image" content="<?= htmlspecialchars($og_image) ?>" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" as="style">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          },
          colors: {
            brand: {
              blue: '#3b82f6',
              teal: '#2dd4bf',
              dark: '#0a0a0c',
              card: '#121215',
            }
          }
        }
      }
    }
  </script>
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

    /* Strict Rectangular Buttons Enforcement */
    button, a.btn-primary, .filter-btn, .pill-btn {
      border-radius: 0px !important;
    }

    /* Stationed Hero Mockup on Hover */
    .dashboard-float .glass-card:hover {
      transform: none !important;
    }
  </style>

  <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "xg95kak4di");
  </script>

  <script>
  !function(){
  var u='https://apiseo.nextboost.business/api/track_visit.php',f='https://apiseo.nextboost.business/api/track.php',p='1',d={project_id:p,u:location.href,r:document.referrer,ua:navigator.userAgent,ts:Date.now()};
  try{fetch(u,{method:'POST',body:JSON.stringify(d),mode:'no-cors',keepalive:true})}catch(e){}
  var i=new Image();i.referrerPolicy='no-referrer';i.src=f+'?project_id='+encodeURIComponent(p)+'&u='+encodeURIComponent(d.u)+'&r='+encodeURIComponent(d.r)+'&ua='+encodeURIComponent(d.ua)+'&ts='+d.ts
  }();
  </script>
</head>
