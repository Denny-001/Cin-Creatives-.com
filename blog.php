<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- ====================================================
     PAGE HERO — Animated Gradient Background
===================================================== -->
<section class="page-hero motion-gradient" id="blog-hero">
  <div class="hero-bg-glow" aria-hidden="true"></div>
  <div class="container section-content">
    <nav class="breadcrumb"><a href="index.php">Home</a><span class="sep">/</span><span class="current">Blog</span></nav>
    <span class="label-badge" data-aos="fade-down">Insights & Resources</span>
    <h1 class="display-2 mb-3" data-aos="fade-up">Digital Intelligence.<br><span class="text-gradient">Delivered Weekly.</span></h1>
    <p class="section-subtitle" style="margin:0 auto;" data-aos="fade-up" data-aos-delay="100">Stay ahead with expert insights on web development, AI, design trends, and digital marketing strategies from the CIN CREATIVES team.</p>
  </div>
</section>

<!-- ====================================================
     FEATURED POST
===================================================== -->
<section class="section" id="featured-post" style="background: var(--primary-black);">
  <div class="container">
    <div class="grid grid-2 gap-4" style="align-items:center;">
      <div class="img-zoom-wrap" style="border-radius:var(--radius); overflow:hidden; aspect-ratio:4/3; background:linear-gradient(135deg,#202020,#1a3a0a);" data-aos="fade-right">
        <div style="width:100%; height:100%; display:flex; align-items:center; justify-content:center; font-size:6rem;">🤖</div>
      </div>
      <div data-aos="fade-left">
        <span class="label-badge">Featured Post</span>
        <div style="display:flex; gap:1rem; align-items:center; margin-bottom:1rem; font-size:0.82rem; color:var(--text-muted);">
          <span class="blog-category">AI & Automation</span>
          <span>•</span>
          <span>February 20, 2026</span>
          <span>•</span>
          <span>8 min read</span>
        </div>
        <h2 style="font-size:clamp(1.5rem,3vw,2.2rem); font-weight:800; line-height:1.3; margin-bottom:1rem;">The Complete Guide to AI Automation for Small Businesses in 2026</h2>
        <p style="color:var(--text-muted); line-height:1.8; margin-bottom:1.5rem;">Discover how artificial intelligence is leveling the playing field for small businesses. From chatbots to predictive analytics, we break down exactly how to automate your workflows without a massive tech budget...</p>
        <div style="display:flex; align-items:center; gap:1rem; margin-bottom:2rem;">
          <div style="width:40px;height:40px;border-radius:50%;background:rgba(93,214,44,0.15);border:2px solid rgba(93,214,44,0.3);display:flex;align-items:center;justify-content:center;font-weight:700;color:var(--accent-green);">M</div>
          <div><div style="font-weight:600;font-size:0.9rem;">Maya Johnson</div><div style="font-size:0.8rem;color:var(--text-muted);">AI Engineer, CIN CREATIVES</div></div>
        </div>
        <a href="#" class="btn btn-primary">
          Read Full Article
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     BLOG GRID — Particle Background
===================================================== -->
<section class="section particle-bg-section" id="blog-grid" style="background: var(--secondary-black);">
  <canvas class="particle-canvas" data-particles data-count="35" data-speed="0.2" data-color="#5DD62C" data-connect="false" aria-hidden="true"></canvas>
  <div class="container section-content">
    <div class="section-header">
      <div style="display:flex; align-items:flex-end; justify-content:space-between; flex-wrap:wrap; gap:1rem;">
        <div>
          <span class="label-badge">All Articles</span>
          <h2 class="section-title" data-aos="fade-up">Latest Insights</h2>
        </div>
        <div class="filter-btns" data-grid="#blog-articles" data-aos="fade-left">
          <button class="filter-btn active" data-filter="all">All</button>
          <button class="filter-btn" data-filter="web">Web Dev</button>
          <button class="filter-btn" data-filter="ai">AI</button>
          <button class="filter-btn" data-filter="design">Design</button>
          <button class="filter-btn" data-filter="marketing">Marketing</button>
        </div>
      </div>
    </div>

    <div class="grid grid-3 filter-grid" id="blog-articles">
      <?php
      $posts = [
        ['cat'=>'web','label'=>'Web Development','emoji'=>'🌐','title'=>'10 Web Performance Secrets That Will Boost Your Google Rankings in 2026','excerpt'=>'Core Web Vitals have never mattered more. Here are the exact techniques our team uses to achieve 100/100 PageSpeed scores consistently.','author'=>'Jordan Chen','date'=>'Feb 18, 2026','read'=>'6 min'],
        ['cat'=>'design','label'=>'UI/UX Design','emoji'=>'🎨','title'=>'The Dark Mode Design System That Converted 40% More Users','excerpt'=>'We redesigned a SaaS dashboard using our dark-first design system and saw conversion rates jump dramatically. Here\'s the full case study.','author'=>'Priya Patel','date'=>'Feb 15, 2026','read'=>'5 min'],
        ['cat'=>'marketing','label'=>'Digital Marketing','emoji'=>'📈','title'=>'How We Generated $1.2M in Revenue for a Client Using Meta Ads','excerpt'=>'A behind-the-scenes look at the ad strategy, creative approach, and audience targeting that drove exceptional ROAS for our e-commerce client.','author'=>'Sam Okafor','date'=>'Feb 12, 2026','read'=>'9 min'],
        ['cat'=>'ai','label'=>'AI & Automation','emoji'=>'🤖','title'=>'5 AI Tools Every Agency Should Be Using Right Now (We Use Them All)','excerpt'=>'From content generation to code assistance, these are the exact AI tools that have tripled our team\'s productivity in the last 12 months.','author'=>'Maya Johnson','date'=>'Feb 10, 2026','read'=>'7 min'],
        ['cat'=>'web','label'=>'E-commerce','emoji'=>'🛒','title'=>'Why 73% of Online Stores Fail and How to Be in the Winning 27%','excerpt'=>'After auditing 100+ e-commerce stores, we identified the 8 critical factors that separate thriving online businesses from struggling ones.','author'=>'Alex Rivera','date'=>'Feb 7, 2026','read'=>'8 min'],
        ['cat'=>'design','label'=>'Branding','emoji'=>'✏️','title'=>'Building a Brand Identity That Earns 10x More Trust Online','excerpt'=>'Brand consistency across digital touchpoints can increase revenue by 23%. Here\'s our proven framework for building trust through design.','author'=>'Alex Rivera','date'=>'Feb 4, 2026','read'=>'6 min'],
        ['cat'=>'marketing','label'=>'SEO','emoji'=>'🔍','title'=>'The 2026 SEO Playbook: AI Search, Zero-Click, and What Actually Works','excerpt'=>'With Google\'s AI Overviews changing search forever, here\'s how to adapt your SEO strategy to stay visible and keep driving organic traffic.','author'=>'Sam Okafor','date'=>'Feb 1, 2026','read'=>'10 min'],
        ['cat'=>'ai','label'=>'AI & Automation','emoji'=>'🧠','title'=>'We Automated 80% of Our Client Onboarding With AI — Here\'s How','excerpt'=>'From intake forms to project kickoff, we built an end-to-end AI onboarding pipeline that saves 15 hours per client. Full walkthrough included.','author'=>'Maya Johnson','date'=>'Jan 28, 2026','read'=>'8 min'],
        ['cat'=>'web','label'=>'Web Development','emoji'=>'⚡','title'=>'Next.js 15 vs SvelteKit: Which Should You Choose for Your Next Project?','excerpt'=>'An honest, battle-tested comparison of two of the most powerful JavaScript frameworks with real-world performance benchmarks.','author'=>'Jordan Chen','date'=>'Jan 25, 2026','read'=>'7 min'],
      ];
      foreach($posts as $i => $post): ?>
      <div class="blog-card" data-category="<?= $post['cat'] ?>" data-aos="fade-up" data-aos-delay="<?= ($i % 3) * 80 ?>">
        <div class="card-image" style="background:linear-gradient(135deg, #202020, #1a3a0a); display:flex; align-items:center; justify-content:center; font-size:4rem;">
          <?= $post['emoji'] ?>
        </div>
        <div class="blog-body">
          <div class="blog-meta">
            <span class="blog-category"><?= htmlspecialchars($post['label']) ?></span>
            <span><?= htmlspecialchars($post['date']) ?></span>
            <span><?= htmlspecialchars($post['read']) ?> read</span>
          </div>
          <h3 class="blog-title"><?= htmlspecialchars($post['title']) ?></h3>
          <p class="blog-excerpt"><?= htmlspecialchars($post['excerpt']) ?></p>
          <div style="display:flex; align-items:center; justify-content:space-between;">
            <div style="display:flex; align-items:center; gap:8px;">
              <div style="width:28px; height:28px; border-radius:50%; background:rgba(93,214,44,0.15); display:flex; align-items:center; justify-content:center; font-weight:700; font-size:0.75rem; color:var(--accent-green);"><?= strtoupper($post['author'][0]) ?></div>
              <span style="font-size:0.8rem; color:var(--text-muted);"><?= htmlspecialchars($post['author']) ?></span>
            </div>
            <a href="#" class="blog-read-more">
              Read
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center; margin-top:3rem;" data-aos="fade-up">
      <button class="btn btn-outline" onclick="this.textContent='Loading...'">Load More Articles</button>
    </div>
  </div>
</section>

<!-- ====================================================
     NEWSLETTER CTA — Aurora
===================================================== -->
<section class="section aurora-bg" id="blog-newsletter">
  <div class="aurora-layers" aria-hidden="true">
    <div class="aurora-layer al1"></div>
    <div class="aurora-layer al2"></div>
  </div>
  <div class="container section-content" style="text-align:center;">
    <span class="label-badge" data-aos="fade-down">Newsletter</span>
    <h2 class="section-title" data-aos="fade-up">Get Weekly Digital Insights<br><span class="text-gradient">Straight to Your Inbox</span></h2>
    <p class="section-subtitle" style="margin:1rem auto 2.5rem;" data-aos="fade-up" data-aos-delay="100">Join 8,000+ marketers, developers, and founders who get our best content every week. No spam. Unsubscribe anytime.</p>
    <form style="display:flex; gap:0.75rem; max-width:480px; margin:0 auto; flex-wrap:wrap; justify-content:center;" data-aos="fade-up" data-aos-delay="200" onsubmit="handleNewsletterForm(event)">
      <input type="email" id="blog-newsletter-email" name="email" placeholder="Your email address" required
        style="flex:1; min-width:220px; background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.15); border-radius:50px; color:var(--soft-white); padding:14px 22px; font-size:0.95rem; outline:none; font-family:inherit;">
      <button type="submit" class="btn btn-primary" style="border-radius:50px;">Subscribe Free</button>
    </form>
    <p style="font-size:0.8rem; color:var(--text-muted); margin-top:1rem;" data-aos="fade-up" data-aos-delay="250">📧 8,000+ subscribers · No spam · Unsubscribe any time</p>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
