<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- ====================================================
     HERO SECTION — Three.js Particle Background
===================================================== -->
<section class="hero particle-bg-section" id="home">
  <canvas id="hero-canvas" aria-hidden="true"></canvas>
  <div class="floating-shapes" aria-hidden="true">
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>
  </div>
  <div class="container">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
      <div class="hero-content hero-col-left">
        <div class="hero-eyebrow">
          <span class="label-badge">⚡ Creative  Digital Agency</span>
        </div>
        <h1 class="hero-title display-1">
          We Build<br>
          <span class="text-gradient" id="typed-text" data-words='["Digital Futures.", "Bold Brands.", "Smart Systems.", "AI Solutions."]'>Digital Futures.</span>
        </h1>
        <p class="hero-description">
          CIN CREATIVES delivers enterprise-grade web development, AI automation, and creative design solutions that transform businesses and drive measurable growth.
        </p>
        <div class="hero-actions">
          <a href="services.php" class="btn btn-primary btn-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            Explore Services
          </a>
          <a href="portfolio.php" class="btn btn-outline btn-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            View Our Work
          </a>
        </div>
        <div class="hero-stats">
          <div class="stat-item">
            <span class="stat-number counter-val" data-target="250" data-suffix="+">250+</span>
            <span class="stat-label">Projects Delivered</span>
          </div>
          <div class="stat-item">
            <span class="stat-number counter-val" data-target="98" data-suffix="%">98%</span>
            <span class="stat-label">Client Satisfaction</span>
          </div>
          <div class="stat-item">
            <span class="stat-number counter-val" data-target="8" data-suffix=" Yrs">8 Yrs</span>
            <span class="stat-label">Industry Experience</span>
          </div>
        </div>
      </div>

      <!-- Hero visual card -->
      <div class="hero-visual" aria-hidden="true">
        <div style="position: relative; display: flex; justify-content: center;">
          <div class="glass-card float-anim" style="padding: 2rem; max-width: 420px; width: 100%;">
            <div style="display:flex; gap: 0.5rem; margin-bottom: 1.25rem;">
              <div style="width:12px;height:12px;border-radius:50%;background:#ff5f57;"></div>
              <div style="width:12px;height:12px;border-radius:50%;background:#febc2e;"></div>
              <div style="width:12px;height:12px;border-radius:50%;background:#28c840;"></div>
            </div>
            <div style="font-family: 'Inter', monospace; font-size: 0.82rem; color: var(--text-muted); line-height: 2;">
              <div><span style="color:#5DD62C">const</span> <span style="color:#a8ff78">agency</span> = {</div>
              <div style="padding-left:1.5rem"><span style="color:#5DD62C">name</span>: <span style="color:#f8c57f">'CIN CREATIVES'</span>,</div>
              <div style="padding-left:1.5rem"><span style="color:#5DD62C">services</span>: <span style="color:#a8ff78">2</span>,</div>
              <div style="padding-left:1.5rem"><span style="color:#5DD62C">clients</span>: <span style="color:#a8ff78">50</span><span style="color:#5DD62C">+</span>,</div>
              <div style="padding-left:1.5rem"><span style="color:#5DD62C">quality</span>: <span style="color:#f8c57f">'premium'</span>,</div>
              <div style="padding-left:1.5rem"><span style="color:#5DD62C">ai</span>: <span style="color:#f8c57f">'enabled'</span></div>
              <div>}</div>
            </div>
            <div style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid rgba(255,255,255,0.06);">
              <div style="display: flex; align-items: center; gap: 12px;">
                <div style="width: 36px; height: 36px; border-radius: 10px; background: rgba(93,214,44,0.15); display:flex; align-items:center; justify-content:center; font-size: 1rem;">🚀</div>
                <div>
                  <div style="font-size: 0.85rem; font-weight: 600;">New project started</div>
                  <div style="font-size: 0.75rem; color: var(--text-muted);">AI automation dashboard</div>
                </div>
                <div class="status-dot" style="margin-left: auto;"></div>
              </div>
            </div>
          </div>

          <!-- Floating badges -->
          <div class="glass-card float-anim-2" style="position:absolute; top: -20px; right: -30px; padding: 0.875rem 1.25rem; border-radius: 16px; display: flex; gap: 10px; align-items: center;">
            <div style="font-size: 1.4rem;">⭐</div>
            <div>
              <div style="font-size: 0.8rem; font-weight: 700; color: var(--soft-white);">4.1 Rating</div>
              <div style="font-size: 0.7rem; color: var(--text-muted);">50+ Reviews</div>
            </div>
          </div>

          <div class="glass-card float-anim-3" style="position:absolute; bottom: -20px; left: -30px; padding: 0.875rem 1.25rem; border-radius: 16px; display: flex; gap: 10px; align-items: center;">
            <div style="font-size: 1.4rem;">🎯</div>
            <div>
              <div style="font-size: 0.8rem; font-weight: 700; color: var(--soft-white);">98% On-Time</div>
              <div style="font-size: 0.7rem; color: var(--text-muted);">Delivery Rate</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     MARQUEE TECH STRIP
===================================================== -->
<div style="padding: 1.5rem 0; border-top: 1px solid rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(32,32,32,0.5); overflow:hidden;">
  <div class="marquee-wrap">
    <div class="marquee-track">
      <?php
      $tech = ['Web Development','Website Redesign','E-commerce Dev','Software Solutions','AI Automation','Graphic Design','Social Media','Online Advertising','UI/UX Design','SEO Strategy','Brand Identity','Cloud Solutions'];
      foreach(array_merge($tech,$tech) as $t): ?>
        <span class="marquee-item"><span class="marquee-dot"></span><?= htmlspecialchars($t) ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- ====================================================
     SERVICES OVERVIEW — Aurora Background
===================================================== -->
<section class="section aurora-bg" id="services-overview">
  <div class="aurora-layers" aria-hidden="true">
    <div class="aurora-layer al1"></div>
    <div class="aurora-layer al2"></div>
    <div class="aurora-layer al3"></div>
  </div>
  <div class="container section-content">
    <div class="section-header text-center">
      <span class="label-badge">Our Services</span>
      <h2 class="section-title reveal-line center" data-aos="fade-up">Everything You Need to<br>Dominate Your Market</h2>
      <p class="section-subtitle" style="margin: 1rem auto 0;" data-aos="fade-up" data-aos-delay="100">From stunning websites to intelligent automation — we craft digital solutions that perform, impress, and convert.</p>
    </div>

    <div class="grid grid-4 stagger-children" id="services-grid">
      <?php
      $services = [
        ['icon'=>'🌐','title'=>'Web Development','desc'=>'Custom, high-performance websites built on modern stacks. Fast, scalable, and built to convert visitors into customers.','link'=>'services.php#web-dev'],
        ['icon'=>'🎨','title'=>'Website Redesign','desc'=>'Transform your outdated site into a modern, conversion-optimized digital experience your users will love.','link'=>'services.php#redesign'],
        ['icon'=>'🛒','title'=>'E-commerce Dev','desc'=>'Full-featured online stores with seamless checkout, payment integration, and powerful inventory management.','link'=>'services.php#ecommerce'],
        ['icon'=>'💻','title'=>'Software Dev','desc'=>'Custom software solutions — from SaaS platforms to enterprise tools — engineered for reliability and scale.','link'=>'services.php#software'],
        ['icon'=>'🤖','title'=>'AI Automation','desc'=>'Leverage AI and machine learning to automate workflows, reduce costs, and gain actionable business intelligence.','link'=>'services.php#ai'],
        ['icon'=>'✏️','title'=>'Graphic Design','desc'=>'Brand identities, marketing materials, and UI/UX designs that communicate your value with clarity and style.','link'=>'services.php#design'],
        ['icon'=>'📱','title'=>'Social Media','desc'=>'Strategic content planning, community management, and data-driven campaigns that grow your following.','link'=>'services.php#social'],
        ['icon'=>'📣','title'=>'Online Advertising','desc'=>'PPC, display, and social ad campaigns with precision targeting to maximize ROI and grow your revenue.','link'=>'services.php#ads'],
      ];
      foreach($services as $i => $s): ?>
      <div class="service-card tilt-card" data-aos="fade-up" data-aos-delay="<?= $i * 60 ?>">
        <div class="service-icon" aria-hidden="true"><?= $s['icon'] ?></div>
        <h3 class="service-title"><?= htmlspecialchars($s['title']) ?></h3>
        <p class="service-desc"><?= htmlspecialchars($s['desc']) ?></p>
        <a href="<?= $s['link'] ?>" class="service-link">
          Learn More
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center" style="margin-top: 3rem;" data-aos="fade-up">
      <a href="services.php" class="btn btn-outline btn-lg">View All Services</a>
    </div>
  </div>
</section>

<!-- ====================================================
     WHY CHOOSE US — Dot Grid Background
===================================================== -->
<section class="section dot-grid-bg" id="why-us">
  <div class="section-content">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 5rem; align-items: center;">
        <div data-aos="fade-right">
          <span class="label-badge">Why CIN CREATIVES</span>
          <h2 class="section-title mb-4">We Don't Just Deliver<br>Projects. We Deliver Results.</h2>
          <p class="section-subtitle mb-5">We combine technical excellence with creative brilliance to build digital experiences that truly move the needle for your business.</p>
          <div class="feature-list">
            <?php $features = [
              ['🏆','Award-Winning Quality','Every project is crafted to the highest standards with meticulous attention to detail.'],
              ['⚡','Lightning Fast Delivery','We move fast without compromising quality, thanks to our proven agile process.'],
              ['🔒','Secure by Default','Enterprise-grade security practices baked into every solution we build.'],
              ['📊','Data-Driven Approach','All decisions informed by real analytics, testing, and performance data.'],
            ];
            foreach($features as $f): ?>
            <div class="feature-item" data-aos="fade-up">
              <div class="fi-icon" aria-hidden="true"><?= $f[0] ?></div>
              <div>
                <h4><?= htmlspecialchars($f[1]) ?></h4>
                <p><?= htmlspecialchars($f[2]) ?></p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <div style="margin-top: 2rem;" data-aos="fade-up">
            <a href="about.php" class="btn btn-primary">Meet Our Team</a>
          </div>
        </div>

        <div data-aos="fade-left">
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem;">
            <?php $stats2 = [
              ['250+','Projects Completed','🚀'],
              ['98%','Client Satisfaction','⭐'],
              ['45+','Expert Team Members','👥'],
              ['8+','Years of Excellence','🏅'],
            ];
            foreach($stats2 as $st): ?>
            <div class="glass-card" style="padding: 2rem; text-align: center;">
              <div style="font-size: 2rem; margin-bottom: 0.75rem;" aria-hidden="true"><?= $st[2] ?></div>
              <div style="font-size: 2rem; font-weight: 900; font-family: var(--font-heading); color: var(--accent-green); line-height: 1;"><?= htmlspecialchars($st[0]) ?></div>
              <div style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.4rem;"><?= htmlspecialchars($st[1]) ?></div>
            </div>
            <?php endforeach; ?>
          </div>

          <div class="glass-card" style="padding: 1.75rem; margin-top: 1.25rem; display: flex; gap: 1rem; align-items: center;">
            <div style="font-size: 2.5rem;" aria-hidden="true">🤝</div>
            <div>
              <div style="font-weight: 700; margin-bottom: 0.25rem;">Trusted by 25+ Brands</div>
              <div style="font-size: 0.85rem; color: var(--text-muted);">From startups to Fortune 50 companies worldwide.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     PORTFOLIO PREVIEW — Video Background
===================================================== -->
<section class="section video-bg-section" id="portfolio-preview" style="background: var(--secondary-black);">
  <video class="bg-video" autoplay muted loop playsinline aria-hidden="true">
    <source src="assets/videos/bg-loop1.mp4" type="video/mp4">
  </video>
  <div class="video-bg-overlay" aria-hidden="true"></div>
  <div class="container section-content">
    <div class="section-header">
      <div style="display: flex; align-items: flex-end; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
        <div>
          <span class="label-badge">Portfolio</span>
          <h2 class="section-title" data-aos="fade-up">Featured Work</h2>
        </div>
        <a href="portfolio.php" class="btn btn-outline" data-aos="fade-left">View All Projects</a>
      </div>
    </div>

    <div class="grid grid-3">
      <?php
      $projects = [
        ['title'=>'Luxe Commerce Platform','cat'=>'E-commerce','tag'=>'ecommerce','desc'=>'Complete Shopify alternative built on Laravel with custom checkout and AI recommendations.','img'=>'assets/images/portfolio/proj-1.jpg'],
        ['title'=>'FinTech Dashboard','cat'=>'Software Dev','tag'=>'software','desc'=>'Enterprise-grade financial analytics platform with real-time data visualization.','img'=>'assets/images/portfolio/proj-2.jpg'],
        ['title'=>'AI Content Studio','cat'=>'AI Automation','tag'=>'ai','desc'=>'GPT-powered content creation tool with automated publishing workflows.','img'=>'assets/images/portfolio/proj-3.jpg'],
      ];
      foreach($projects as $proj): ?>
      <div class="portfolio-card" data-aos="fade-up">
        <div class="card-image">
          <img src="<?= htmlspecialchars($proj['img']) ?>" alt="<?= htmlspecialchars($proj['title']) ?>" loading="lazy" onerror="this.style.background='linear-gradient(135deg, #202020, #1a3a0a)'; this.alt='';">
          <div class="portfolio-overlay">
            <a href="portfolio.php" class="btn btn-primary btn-sm">View Case Study</a>
          </div>
        </div>
        <div class="portfolio-body">
          <span class="portfolio-tag"><?= htmlspecialchars($proj['cat']) ?></span>
          <h3 class="portfolio-title"><?= htmlspecialchars($proj['title']) ?></h3>
          <p class="portfolio-desc"><?= htmlspecialchars($proj['desc']) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ====================================================
     COUNTERS SECTION — Animated Gradient Background
===================================================== -->
<section class="section-sm motion-gradient" id="counters">
  <div class="container section-content">
    <div class="counter-grid">
      <?php $counters = [
        ['250','+','Projects Done','🚀'],
        ['98','%','Happy Clients','😊'],
        ['45','','Team Members','👥'],
        ['8','+','Years Experience','🏆'],
      ];
      foreach($counters as $c): ?>
      <div class="counter-item" data-aos="fade-up">
        <span class="counter-val" data-target="<?= $c[0] ?>" data-suffix="<?= $c[1] ?>"><?= $c[0].$c[1] ?></span>
        <div class="counter-label"><?= htmlspecialchars($c[2]) ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ====================================================
     TESTIMONIALS
===================================================== -->
<section class="section" id="testimonials" style="background: var(--primary-black);">
  <div class="container">
    <div class="section-header text-center">
      <span class="label-badge">Testimonials</span>
      <h2 class="section-title" data-aos="fade-up">What Our Clients Say</h2>
    </div>
    <div class="grid grid-3">
      <?php $testimonials = [
        ['text'=>'"CIN CREATIVES transformed our online presence completely. Our e-commerce revenue doubled within 3 months of launch. Absolutely phenomenal work!"','name'=>'Sarah Mitchell','role'=>'CEO, TechRetail Co.','stars'=>5],
        ['text'=>'"The AI automation system they built saved us 40 hours of manual work per week. Game-changing technology delivered with exceptional professionalism."','name'=>'James Okafor','role'=>'CTO, DataFlow Labs','stars'=>5],
        ['text'=>'"Our social media following grew by 300% in 6 months. Their content strategy and execution is world-class. Highly recommend to any growing brand."','name'=>'Priya Sharma','role'=>'Marketing Director, Bloom Brands','stars'=>5],
      ];
      foreach($testimonials as $t): ?>
      <div class="testimonial-card" data-aos="fade-up">
        <div class="stars" aria-label="5 stars">
          <?php for($s=0;$s<$t['stars'];$s++) echo '<span>★</span>'; ?>
        </div>
        <p class="testimonial-text"><?= htmlspecialchars($t['text']) ?></p>
        <div class="testimonial-author">
          <div class="testimonial-avatar" aria-hidden="true" style="display:flex;align-items:center;justify-content:center;font-size:1.2rem;font-weight:700;color:var(--accent-green);"><?= strtoupper($t['name'][0]) ?></div>
          <div>
            <div class="testimonial-name"><?= htmlspecialchars($t['name']) ?></div>
            <div class="testimonial-role"><?= htmlspecialchars($t['role']) ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ====================================================
     CTA SECTION — Floating Shapes Background
===================================================== -->
<section class="cta-section shapes-bg-section" id="cta-home">
  <div class="shapes-container js-floating-shapes" aria-hidden="true">
    <div class="abs-shape s1"></div>
    <div class="abs-shape s2"></div>
    <div class="abs-shape s3"></div>
  </div>
  <div class="cta-bg-glow" aria-hidden="true"></div>
  <div class="container" style="position:relative;z-index:2;text-align:center;">
    <span class="label-badge" data-aos="fade-down">Ready to Start?</span>
    <h2 class="cta-title" data-aos="fade-up">Let's Build Something<br><span class="text-gradient">Extraordinary Together</span></h2>
    <p class="cta-desc" data-aos="fade-up" data-aos-delay="100">From strategy to execution, we're your full-stack digital partner. Let's talk about your project — no obligation, just great ideas.</p>
    <div class="flex-center gap-3" data-aos="fade-up" data-aos-delay="200" style="flex-wrap:wrap;">
      <a href="contact.php" class="btn btn-primary btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
        Start Free Consultation
      </a>
      <a href="pricing.php" class="btn btn-outline btn-lg">View Pricing Plans</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>