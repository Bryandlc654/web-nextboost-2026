<?php
  $page_title = "Blog | Next Boost — Agencia de Desarrollo Web";
  $page_description = "Artículos, guías y noticias sobre desarrollo web, diseño, SEO, marketing digital y tecnología. Aprende con los expertos de Next Boost.";
  $og_url = "https://nextboost.business/blog.php";
?>
<!DOCTYPE html>
<html lang="es" class="dark scroll-smooth">
<?php include 'includes/head.php'; ?>

<!-- Datos Estructurados JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Blog",
      "@id": "https://nextboost.business/blog.php/#blog",
      "url": "https://nextboost.business/blog.php",
      "name": "Blog | Next Boost",
      "description": "Artículos y guías sobre desarrollo web, diseño, SEO y marketing digital.",
      "publisher": {
        "@type": "Organization",
        "@id": "https://nextboost.business/#organization",
        "name": "Next Boost"
      }
    }
  ]
}
</script>

<body class="bg-black text-white antialiased selection:bg-blue-500/30">
  <?php include 'includes/header.php'; ?>

  <!-- Hero Section -->
  <section class="relative z-10 pt-28 pb-16 px-8 md:px-16 lg:px-20 overflow-hidden">
    <div class="absolute inset-0 grid-bg opacity-30"></div>
    <div class="absolute top-20 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-blue-600/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-screen-2xl mx-auto relative z-10">
      <div class="text-center">
        <p class="text-xs tracking-[0.2em] uppercase text-blue-400 mb-4 animate-in">Blog</p>
        <h1 class="text-4xl md:text-6xl font-medium tracking-tight animate-in animate-in-d1">
          Insights sobre <span class="gradient-text">desarrollo web</span>
        </h1>
        <p class="mt-6 text-gray-400 max-w-2xl mx-auto text-sm md:text-base animate-in animate-in-d2">
          Artículos, guías y tendencias sobre diseño, desarrollo, SEO y marketing digital para impulsar tu negocio.
        </p>
      </div>
    </div>
  </section>

  <!-- Blog Articles Grid -->
  <section class="relative z-10 py-16 px-8 md:px-16 lg:px-20">
    <div class="max-w-screen-2xl mx-auto">
      
      <!-- Filtros de Categoría -->
      <div class="flex flex-wrap items-center gap-3 mb-12 justify-center animate-in animate-in-d3">
        <button class="blog-filter-btn active px-4 py-2 text-xs font-medium border border-white/10 bg-white/5 text-white transition-all hover:border-blue-500/50" data-filter="all">Todos</button>
        <button class="blog-filter-btn px-4 py-2 text-xs font-medium border border-white/10 bg-transparent text-gray-400 transition-all hover:border-blue-500/50 hover:text-white" data-filter="desarrollo-web">Desarrollo Web</button>
        <button class="blog-filter-btn px-4 py-2 text-xs font-medium border border-white/10 bg-transparent text-gray-400 transition-all hover:border-blue-500/50 hover:text-white" data-filter="seo">SEO</button>
        <button class="blog-filter-btn px-4 py-2 text-xs font-medium border border-white/10 bg-transparent text-gray-400 transition-all hover:border-blue-500/50 hover:text-white" data-filter="marketing">Marketing Digital</button>
        <button class="blog-filter-btn px-4 py-2 text-xs font-medium border border-white/10 bg-transparent text-gray-400 transition-all hover:border-blue-500/50 hover:text-white" data-filter="diseno">Diseño</button>
        <button class="blog-filter-btn px-4 py-2 text-xs font-medium border border-white/10 bg-transparent text-gray-400 transition-all hover:border-blue-500/50 hover:text-white" data-filter="tecnologia">Tecnología</button>
      </div>

      <!-- Grid de Artículos -->
      <div id="blog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
          $blog_data = json_decode(file_get_contents('blog.json'), true);
          if ($blog_data && isset($blog_data['data'])) {
            $categories = [
              'desarrollo-web' => ['label' => 'Desarrollo Web', 'color' => 'blue'],
              'seo' => ['label' => 'SEO', 'color' => 'emerald'],
              'marketing' => ['label' => 'Marketing Digital', 'color' => 'teal'],
              'diseno' => ['label' => 'Diseño', 'color' => 'purple'],
              'tecnologia' => ['label' => 'Tecnología', 'color' => 'cyan']
            ];
            foreach ($blog_data['data'] as $index => $article) {
              $cat = $categories[$article['category']] ?? ['label' => 'General', 'color' => 'gray'];
              $delay = min($index * 0.05, 0.5);
        ?>
          <article class="blog-item group relative animate-in" style="animation-delay: <?php echo $delay; ?>s;" data-category="<?php echo htmlspecialchars($article['category']); ?>">
            <a href="<?php echo htmlspecialchars($article['href']); ?>" class="block h-full">
              <div class="glass-card h-full border border-white/5 hover:border-<?php echo $cat['color']; ?>-500/30 transition-all duration-300 overflow-hidden flex flex-col">
                <!-- Image Placeholder -->
                <div class="relative h-48 bg-gradient-to-br from-<?php echo $cat['color']; ?>-900/30 to-blue-900/30 flex items-center justify-center overflow-hidden">
                  <?php if (!empty($article['image'])): ?>
                    <img src="<?php echo htmlspecialchars($article['image']); ?>" alt="<?php echo htmlspecialchars($article['title']); ?>" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                  <?php else: ?>
                    <div class="text-center p-6">
                      <svg class="w-12 h-12 text-<?php echo $cat['color']; ?>-400/50 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                      <span class="text-xs text-<?php echo $cat['color']; ?>-400/70 font-medium"><?php echo htmlspecialchars($cat['label']); ?></span>
                    </div>
                  <?php endif; ?>
                  <div class="absolute top-3 left-3">
                    <span class="text-[10px] font-bold uppercase tracking-wider bg-<?php echo $cat['color']; ?>-500/20 text-<?php echo $cat['color']; ?>-400 border border-<?php echo $cat['color']; ?>-500/30 px-2.5 py-1"><?php echo htmlspecialchars($cat['label']); ?></span>
                  </div>
                </div>
                <!-- Content -->
                <div class="p-6 flex flex-col flex-1">
                  <h3 class="text-lg font-bold text-white mb-2 group-hover:text-<?php echo $cat['color']; ?>-400 transition-colors leading-tight"><?php echo htmlspecialchars($article['title']); ?></h3>
                  <p class="text-sm text-gray-400 leading-relaxed flex-1"><?php echo htmlspecialchars($article['description']); ?></p>
                  <div class="flex items-center justify-between mt-4 pt-4 border-t border-white/5">
                    <span class="text-[11px] text-gray-500"><?php echo date('d M Y', strtotime($article['created_at'])); ?></span>
                    <span class="text-[11px] text-gray-500 flex items-center gap-1">
                      <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                      <?php echo htmlspecialchars($article['read_time']); ?>
                    </span>
                  </div>
                </div>
              </div>
            </a>
          </article>
        <?php
            }
          }
        ?>
      </div>

    </div>
  </section>

  <!-- Newsletter CTA -->
  <section class="relative z-10 py-20 px-8 md:px-16 lg:px-20">
    <div class="max-w-screen-2xl mx-auto">
      <div class="relative overflow-hidden border border-white/10 bg-gradient-to-br from-[#111115] to-[#0a0a0e] p-10 md:p-16">
        <div class="absolute -top-32 -right-32 w-64 h-64 bg-blue-600/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute -bottom-32 -left-32 w-64 h-64 bg-teal-500/10 rounded-full blur-[100px] pointer-events-none"></div>
        
        <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
          <div>
            <h3 class="text-2xl md:text-3xl font-semibold text-white mb-3">¿Quieres estar al día?</h3>
            <p class="text-gray-400 text-sm max-w-lg">Recibe nuestros artículos más recientes sobre desarrollo web, estrategias SEO y tendencias digitales directamente en tu correo.</p>
          </div>
          <div class="flex w-full md:w-auto">
            <input type="email" placeholder="tu@email.com" class="flex-1 md:w-72 px-5 py-3 bg-white/5 border border-white/10 text-white text-sm placeholder-gray-500 focus:outline-none focus:border-blue-500/50 transition-colors">
            <button class="px-6 py-3 bg-blue-600 hover:bg-blue-500 text-white text-sm font-bold transition-colors whitespace-nowrap">
              Suscribirme
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const filterBtns = document.querySelectorAll('.blog-filter-btn');
      const articles = document.querySelectorAll('.blog-item');
      
      filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          const filter = btn.getAttribute('data-filter');
          
          filterBtns.forEach(b => {
            b.classList.remove('active', 'bg-white/5', 'text-white');
            b.classList.add('bg-transparent', 'text-gray-400');
          });
          btn.classList.add('active', 'bg-white/5', 'text-white');
          btn.classList.remove('bg-transparent', 'text-gray-400');
          
          articles.forEach(article => {
            if (filter === 'all' || article.getAttribute('data-category') === filter) {
              article.style.display = '';
            } else {
              article.style.display = 'none';
            }
          });
        });
      });
    });
  </script>

</body>
</html>
