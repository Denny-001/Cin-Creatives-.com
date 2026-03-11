<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- ====================================================
     PAGE HERO — Cinematic Parallax with Floating 3D Elements
===================================================== -->
<section class="page-hero services-hero parallax-bg-section" id="services-hero"
  style="background-image: url('assets/images/backgrounds/bg-services.jpg');" data-parallax-speed="0.3">
  
  <!-- Floating 3D Service Icons -->
  <div class="floating-service-icons-3d">
    <div class="service-float-icon s1" data-speed="0.5">💻</div>
    <div class="service-float-icon s2" data-speed="0.8">🤖</div>
    <div class="service-float-icon s3" data-speed="0.6">🛒</div>
    <div class="service-float-icon s4" data-speed="0.7">🎨</div>
    <div class="service-float-icon s5" data-speed="0.9">📊</div>
    <div class="service-float-icon s6" data-speed="0.4">⚙️</div>
    <div class="service-float-icon s7" data-speed="0.5">📱</div>
    <div class="service-float-icon s8" data-speed="0.8">🤝</div>
  </div>
  
  <!-- Animated Particles -->
  <div class="services-particles" id="services-particles"></div>
  
  <!-- Gradient Orbs -->
  <div class="gradient-orbs">
    <div class="orb orb1"></div>
    <div class="orb orb2"></div>
    <div class="orb orb3"></div>
  </div>
  
  <div class="parallax-overlay" aria-hidden="true"></div>
  <div class="container section-content">
    <nav class="breadcrumb">
      <a href="index.php">Home</a>
      <span class="sep">/</span>
      <span class="current">Services</span>
    </nav>
    <span class="label-badge glow-badge" data-aos="fade-down">What We Do</span>
    <h1 class="display-2 mb-3" data-aos="fade-up">
      Digital Services That<br><span class="text-gradient gradient-animate">Drive Real Growth</span>
    </h1>
    <p class="section-subtitle" style="margin:0 auto;" data-aos="fade-up" data-aos-delay="100">
      Eight world-class services. One agency. Zero compromise on quality, delivery, or results.
    </p>
    
    <!-- Service Quick Navigation -->
    <div class="service-quick-nav" data-aos="fade-up" data-aos-delay="200">
      <div class="quick-nav-wrapper">
        <a href="#web-dev" class="quick-nav-item">💻 Web</a>
        <a href="#redesign" class="quick-nav-item">🔄 Redesign</a>
        <a href="#ecommerce" class="quick-nav-item">🛒 E-com</a>
        <a href="#software" class="quick-nav-item">⚙️ Software</a>
        <a href="#ai" class="quick-nav-item">🤖 AI</a>
        <a href="#design" class="quick-nav-item">🎨 Design</a>
        <a href="#social" class="quick-nav-item">📱 Social</a>
        <a href="#ads" class="quick-nav-item">📊 Ads</a>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     SERVICE 1: WEB DEVELOPMENT — 3D Floating Cards
===================================================== -->
<section class="section service-section" id="web-dev" style="background: var(--primary-black);">
  <div class="container">
    <div class="service-layout grid grid-2 gap-4" style="align-items:center;">
      <div class="service-content" data-aos="fade-right" data-aos-duration="1000">
        <div class="service-number">01</div>
        <span class="label-badge service-label">Web Development</span>
        <h2 class="section-title mb-3">Build Powerful <span class="text-gradient">Digital Experiences</span></h2>
        <p class="service-description">We build custom, high-performance websites and web applications using the latest technologies. Every project is optimized for speed, security, SEO, and conversion — crafted to make your business stand out and succeed online.</p>
        
        <!-- Animated Feature Cards -->
        <div class="feature-grid">
          <?php $webFeatures = [
            ['⚡','Blazing Fast Performance','Core Web Vitals optimized for top Google rankings.'],
            ['🔒','Enterprise Security','HTTPS, input validation, CSRF protection, and more.'],
            ['📱','Fully Responsive','Pixel-perfect on every device, from mobile to 4K monitors.'],
            ['🔌','CMS Integration','WordPress, Headless CMS, or fully custom admin panels.']
          ];
          foreach($webFeatures as $index => $f): ?>
          <div class="feature-card-hover" style="animation-delay: <?= $index * 0.1 ?>s">
            <div class="feature-icon"><?= $f[0] ?></div>
            <div class="feature-text">
              <h4><?= htmlspecialchars($f[1]) ?></h4>
              <p><?= htmlspecialchars($f[2]) ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        
        <div class="service-cta-group">
          <a href="contact.php?service=web-dev" class="btn btn-primary btn-glow">
            <span>Get a Web Dev Quote</span>
            <span class="btn-icon">→</span>
          </a>
          <a href="portfolio.php#web-dev" class="btn btn-secondary">
            <span>See Web Dev Work</span>
            <span class="btn-icon">→</span>
          </a>
        </div>
      </div>
      
      <div class="service-visual" data-aos="fade-left" data-aos-duration="1000">
        <div class="tech-stack-3d">
          <div class="tech-card-3d">
            <div class="tech-card-inner">
              <div class="tech-card-front">
                <div class="tech-icon">⚛️</div>
                <span>React</span>
              </div>
              <div class="tech-card-back">
                <span>Frontend</span>
              </div>
            </div>
          </div>
          <div class="tech-card-3d">
            <div class="tech-card-inner">
              <div class="tech-card-front">
                <div class="tech-icon">⚙️</div>
                <span>Laravel</span>
              </div>
              <div class="tech-card-back">
                <span>Backend</span>
              </div>
            </div>
          </div>
          <div class="tech-card-3d">
            <div class="tech-card-inner">
              <div class="tech-card-front">
                <div class="tech-icon">▲</div>
                <span>Next.js</span>
              </div>
              <div class="tech-card-back">
                <span>SSR/SSG</span>
              </div>
            </div>
          </div>
          <div class="tech-card-3d">
            <div class="tech-card-inner">
              <div class="tech-card-front">
                <div class="tech-icon">🗄️</div>
                <span>MySQL</span>
              </div>
              <div class="tech-card-back">
                <span>Database</span>
              </div>
            </div>
          </div>
          <div class="tech-card-3d">
            <div class="tech-card-inner">
              <div class="tech-card-front">
                <div class="tech-icon">☁️</div>
                <span>AWS</span>
              </div>
              <div class="tech-card-back">
                <span>Hosting</span>
              </div>
            </div>
          </div>
          <div class="tech-card-3d">
            <div class="tech-card-inner">
              <div class="tech-card-front">
                <div class="tech-icon">🔄</div>
                <span>Node.js</span>
              </div>
              <div class="tech-card-back">
                <span>API</span>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Floating Code Snippet -->
        <div class="code-snippet-float">
          <pre><span style="color:#5DD62C">function</span> <span style="color:#a8ff78">createWebsite</span>() {
  <span style="color:#5DD62C">return</span> {
    speed: <span style="color:#f8c57f">'⭐⭐⭐⭐⭐'</span>,
    seo: <span style="color:#f8c57f">'#1 Rankings'</span>,
    conversions: <span style="color:#f8c57f">'+150%'</span>
  }
}</pre>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Animated Divider -->
  <div class="service-divider">
    <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="var(--accent-green)"></path>
    </svg>
  </div>
</section>

<!-- ====================================================
     SERVICE 2: WEBSITE REDESIGN — Before/After Animation
===================================================== -->
<section class="section service-section" id="redesign" style="background: var(--secondary-black);">
  <div class="container">
    <div class="service-layout grid grid-2 gap-4" style="align-items:center;">
      <div class="service-visual order-2" data-aos="fade-left" data-aos-duration="1000">
        <div class="comparison-slider">
          <div class="comparison-container">
            <div class="comparison-before">
              <div class="comparison-label before-label">Before</div>
              <div class="comparison-content before-content">
                <div class="metric-badge negative">↓ 40% Conversions</div>
                <div class="metric-badge negative">⏱️ 8s Load Time</div>
                <div class="website-preview outdated">
                  <div class="preview-header">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>
                  </div>
                  <div class="preview-content">
                    <div class="line short"></div>
                    <div class="line medium"></div>
                    <div class="line long"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="comparison-after">
              <div class="comparison-label after-label">After</div>
              <div class="comparison-content after-content">
                <div class="metric-badge positive">↑ 140% Conversions</div>
                <div class="metric-badge positive">⚡ 1.2s Load Time</div>
                <div class="website-preview modern">
                  <div class="preview-header">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>
                  </div>
                  <div class="preview-content">
                    <div class="line short green-bg"></div>
                    <div class="line medium green-bg"></div>
                    <div class="line long green-bg"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="comparison-handle"></div>
          </div>
        </div>
        
        <!-- Results Counter Animation -->
        <div class="results-counter-grid">
          <?php $results=[['↑ 180%','Page Speed','+180'],['↑ 240%','Conversions','+240'],['↑ 150%','Session Time','+150'],['↓ 60%','Bounce Rate','-60']];
          foreach($results as $r): ?>
          <div class="counter-card">
            <div class="counter-value" data-target="<?= $r[2] ?>">0</div>
            <div class="counter-metric"><?= htmlspecialchars($r[1]) ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      
      <div class="service-content order-1" data-aos="fade-right" data-aos-duration="1000">
        <div class="service-number">02</div>
        <span class="label-badge service-label">Website Redesign</span>
        <h2 class="section-title mb-3">Transform <span class="text-gradient">Underperformers</span> into Revenue Machines</h2>
        <p class="service-description">Is your website costing you customers? We transform outdated, underperforming sites into modern, conversion-focused experiences that users love and search engines reward. Our redesigns deliver measurable business results, not just pretty pixels.</p>
        
        <!-- Before/After Stats Animation -->
        <div class="stats-showcase">
          <div class="stat-row">
            <span class="stat-label">Conversion Rate</span>
            <div class="stat-bars">
              <div class="stat-bar before" style="width: 40%"><span>1.2%</span></div>
              <div class="stat-bar after" style="width: 85%"><span>3.8%</span></div>
            </div>
          </div>
          <div class="stat-row">
            <span class="stat-label">Page Speed</span>
            <div class="stat-bars">
              <div class="stat-bar before" style="width: 30%"><span>45</span></div>
              <div class="stat-bar after" style="width: 95%"><span>96</span></div>
            </div>
          </div>
        </div>
        
        <a href="contact.php?service=redesign" class="btn btn-primary btn-glow">
          <span>Redesign My Site</span>
          <span class="btn-icon">→</span>
        </a>
      </div>
    </div>
  </div>
  
  <!-- Animated Divider -->
  <div class="service-divider reverse">
    <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M1200,120V46.29c-47.79,22.2-103.59,32.17-158,28-70.36-5.37-136.33-33.31-206.8-37.5C761.36,32.43,687.66,53.67,617,72.05c-69.27,18-138.3,24.88-209.4,13.08-36.15-6-69.85-17.84-104.45-29.34C210.51,25,87-14.29,0,52.47V120Z" opacity=".25" fill="var(--accent-green)"></path>
    </svg>
  </div>
</section>

<!-- ====================================================
     SERVICE 3: E-COMMERCE — 3D Product Showcase
===================================================== -->
<section class="section service-section particle-bg-section" id="ecommerce">
  <canvas class="particle-canvas" data-particles data-count="60" data-speed="0.25" data-color="#5DD62C" data-connect="true" aria-hidden="true"></canvas>
  
  <!-- 3D Rotating Product Cards -->
  <div class="floating-products-3d">
    <div class="product-card-3d p1">
      <div class="product-inner">
        <div class="product-front">🛍️</div>
        <div class="product-back">Sale +45%</div>
      </div>
    </div>
    <div class="product-card-3d p2">
      <div class="product-inner">
        <div class="product-front">📦</div>
        <div class="product-back">Fast Ship</div>
      </div>
    </div>
    <div class="product-card-3d p3">
      <div class="product-inner">
        <div class="product-front">💳</div>
        <div class="product-back">Secure</div>
      </div>
    </div>
  </div>
  
  <div class="container section-content">
    <div class="section-header text-center">
      <div class="service-number centered">03</div>
      <span class="label-badge service-label">E-commerce Development</span>
      <h2 class="section-title" data-aos="fade-up">Sell More with <span class="text-gradient">Intelligent Stores</span></h2>
      <p class="section-subtitle" style="margin:1rem auto 3rem;" data-aos="fade-up" data-aos-delay="100">Full-featured online stores engineered for maximum sales, seamless UX, and effortless management.</p>
    </div>
    
    <div class="grid grid-3 ecommerce-grid">
      <?php $ecomFeatures = [
        ['🛒','Custom Cart & Checkout','Optimized checkout flows that maximize conversions and minimize cart abandonment.'],
        ['💳','Payment Integration','Stripe, PayPal, Flutterwave, Paystack, and 20+ payment gateways.'],
        ['📦','Inventory Management','Real-time stock tracking, automated alerts, and warehouse integration.'],
        ['🔍','Product Discovery','Advanced search, filters, AI recommendations, and smart categories.'],
        ['📊','Sales Analytics','Comprehensive dashboards with real-time sales, traffic, and conversion data.'],
        ['🚚','Shipping & Logistics','Automated shipping calculations, tracking integration, and order management.'],
      ];
      foreach($ecomFeatures as $index => $f): ?>
      <div class="feature-3d-card" data-aos="fade-up" data-aos-delay="<?= $index * 50 ?>">
        <div class="feature-3d-inner">
          <div class="feature-3d-icon"><?= $f[0] ?></div>
          <h3><?= htmlspecialchars($f[1]) ?></h3>
          <p><?= htmlspecialchars($f[2]) ?></p>
          <div class="feature-3d-glow"></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    
    <div style="margin-top:3rem; text-align:center;" data-aos="fade-up">
      <a href="contact.php?service=ecommerce" class="btn btn-primary btn-lg btn-glow">
        <span>Build My Store</span>
        <span class="btn-icon">→</span>
      </a>
    </div>
  </div>
</section>

<!-- ====================================================
     SERVICE 4: SOFTWARE DEV — Code Animation
===================================================== -->
<section class="section service-section" id="software" style="background: var(--secondary-black);">
  <!-- Animated Code Rain Background -->
  <div class="code-rain" id="code-rain"></div>
  
  <div class="container">
    <div class="service-layout grid grid-2 gap-4" style="align-items:center;">
      <div class="service-content" data-aos="fade-right" data-aos-duration="1000">
        <div class="service-number">04</div>
        <span class="label-badge service-label">Software Development</span>
        <h2 class="section-title mb-3">Custom Software <span class="text-gradient">Built to Scale</span></h2>
        <p class="service-description">From SaaS platforms to enterprise-grade systems, we architect and build custom software solutions designed for scale, performance, and long-term value. We own the full development lifecycle — from requirements to deployment.</p>
        
        <div class="software-types">
          <?php $softwareTypes=[
            ['SaaS Platforms','Multi-tenant cloud applications'],
            ['ERP Systems','Enterprise resource planning'],
            ['API Development','RESTful & GraphQL APIs'],
            ['Mobile Apps','iOS & Android solutions']
          ];
          foreach($softwareTypes as $st): ?>
          <div class="type-pill">
            <span class="pill-icon">✓</span>
            <div>
              <h4><?= htmlspecialchars($st[0]) ?></h4>
              <p><?= htmlspecialchars($st[1]) ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        
        <a href="contact.php?service=software" class="btn btn-primary btn-glow">
          <span>Discuss Your Project</span>
          <span class="btn-icon">→</span>
        </a>
      </div>
      
      <div class="service-visual" data-aos="fade-left" data-aos-duration="1000">
        <div class="code-terminal">
          <div class="terminal-header">
            <span class="terminal-dot red"></span>
            <span class="terminal-dot yellow"></span>
            <span class="terminal-dot green"></span>
            <span class="terminal-title">cin-software.js</span>
          </div>
          <div class="terminal-body">
            <pre><span class="line"><span class="keyword">class</span> <span class="class-name">CinSoftware</span> {</span>
<span class="line">  <span class="keyword">constructor</span>() {</span>
<span class="line">    <span class="this">this</span>.<span class="property">architecture</span> = <span class="string">'microservices'</span>;</span>
<span class="line">    <span class="this">this</span>.<span class="property">testing</span> = <span class="string">'TDD + 95% coverage'</span>;</span>
<span class="line">    <span class="this">this</span>.<span class="property">deploy</span> = <span class="string">'CI/CD pipeline'</span>;</span>
<span class="line">    <span class="this">this</span>.<span class="property">scale</span> = <span class="string">'Auto-scaling enabled'</span>;</span>
<span class="line">  }</span>
<span class="line"></span>
<span class="line">  <span class="function">deliver</span>() {</span>
<span class="line">    <span class="keyword">return</span> <span class="string">'🚀 Enterprise-grade solution'</span>;</span>
<span class="line">  }</span>
<span class="line">}</span></pre>
            <div class="cursor-blink"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     SERVICE 5: AI AUTOMATION — Neural Network Visualization
===================================================== -->
<section class="section service-section neural-bg" id="ai">
  <!-- Neural Network Canvas -->
  <canvas class="neural-canvas" id="neural-network"></canvas>
  
  <!-- Floating AI Icons -->
  <div class="floating-ai-icons">
    <div class="ai-float-icon">🧠</div>
    <div class="ai-float-icon">🤖</div>
    <div class="ai-float-icon">⚡</div>
    <div class="ai-float-icon">💡</div>
  </div>
  
  <div class="container section-content">
    <div class="section-header text-center">
      <div class="service-number centered">05</div>
      <span class="label-badge service-label">AI Automation</span>
      <h2 class="section-title" data-aos="fade-up">Intelligence That <span class="text-gradient">Amplifies Your Team</span></h2>
      <p class="section-subtitle" style="margin:1rem auto 3rem;" data-aos="fade-up" data-aos-delay="100">Harness the power of artificial intelligence to automate repetitive tasks, unlock insights, and scale operations without scaling costs.</p>
    </div>
    
    <div class="grid grid-4 ai-grid">
      <?php $aiServices=[
        ['🤖','Workflow Automation','Automate repetitive business processes with intelligent bots.'],
        ['📊','Predictive Analytics','AI models that forecast trends and inform strategic decisions.'],
        ['💬','AI Chatbots','24/7 intelligent customer support that actually understands users.'],
        ['🔗','System Integration','Connect all your tools, APIs, and data sources with smart pipelines.']
      ];
      foreach($aiServices as $index => $ai): ?>
      <div class="ai-card" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
        <div class="ai-icon-wrapper">
          <div class="ai-pulse"></div>
          <span class="ai-icon"><?= $ai[0] ?></span>
        </div>
        <h3><?= htmlspecialchars($ai[1]) ?></h3>
        <p><?= htmlspecialchars($ai[2]) ?></p>
        <div class="ai-metrics">
          <span class="metric">↓ 40% costs</span>
          <span class="metric">↑ 24/7</span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    
    <div style="text-align:center; margin-top:3rem;" data-aos="fade-up">
      <a href="contact.php?service=ai" class="btn btn-primary btn-lg btn-glow">
        <span>Automate My Business</span>
        <span class="btn-icon">→</span>
      </a>
    </div>
  </div>
</section>

<!-- ====================================================
     SERVICE 6: GRAPHIC DESIGN — Creative Studio
===================================================== -->
<section class="section service-section" id="design" style="background: var(--secondary-black);">
  <div class="container">
    <div class="service-layout grid grid-2 gap-4" style="align-items:center;">
      <div class="service-visual order-2" data-aos="fade-left" data-aos-duration="1000">
        <div class="design-showcase">
          <div class="design-grid">
            <div class="design-item floating-1">🎨</div>
            <div class="design-item floating-2">🖌️</div>
            <div class="design-item floating-3">✏️</div>
            <div class="design-item floating-4">📐</div>
          </div>
          <div class="color-palette">
            <div class="color-dot" style="background: #5DD62C;"></div>
            <div class="color-dot" style="background: #337418;"></div>
            <div class="color-dot" style="background: #F8F8F8;"></div>
            <div class="color-dot" style="background: #0F0F0F;"></div>
          </div>
          <div class="design-stats">
            <div class="design-stat">
              <span class="stat-number">50+</span>
              <span class="stat-label">Projects</span>
            </div>
            <div class="design-stat">
              <span class="stat-number">12</span>
              <span class="stat-label">Awards</span>
            </div>
          </div>
        </div>
      </div>
      
      <div class="service-content order-1" data-aos="fade-right" data-aos-duration="1000">
        <div class="service-number">06</div>
        <span class="label-badge service-label">Graphic Design</span>
        <h2 class="section-title mb-3">Visuals That <span class="text-gradient">Command Attention</span></h2>
        <p class="service-description">Visual communication that captivates, converts, and endures. From brand identities that tell your story to marketing materials that command attention — our designers create work that makes an impact and drives results.</p>
        
        <div class="design-services-grid">
          <?php $designWork = [['🎨','Brand Identity'],['📐','UI/UX Design'],['🖼️','Print Design'],['📲','Social Graphics']]; ?>
          <?php foreach($designWork as $dw): ?>
          <div class="design-service-pill">
            <span><?= $dw[0] ?></span>
            <?= htmlspecialchars($dw[1]) ?>
          </div>
          <?php endforeach; ?>
        </div>
        
        <a href="contact.php?service=design" class="btn btn-primary btn-glow">
          <span>Start a Design Project</span>
          <span class="btn-icon">→</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     SERVICE 7: SOCIAL MEDIA — Live Feed Animation
===================================================== -->
<section class="section service-section" id="social" style="background: var(--primary-black);">
  <!-- Live Social Feed Animation -->
  <div class="social-feed-animation">
    <div class="post floating-post p1">
      <div class="post-header">📱 Instagram • 2m ago</div>
      <div class="post-content">❤️ 1.2k likes • New campaign launching!</div>
    </div>
    <div class="post floating-post p2">
      <div class="post-header">🐦 Twitter • 5m ago</div>
      <div class="post-content">🔄 500 retweets • Amazing results!</div>
    </div>
    <div class="post floating-post p3">
      <div class="post-header">💼 LinkedIn • 10m ago</div>
      <div class="post-content">👍 300 reactions • Industry insights</div>
    </div>
  </div>
  
  <div class="container">
    <div class="service-layout grid grid-2 gap-4" style="align-items:center;">
      <div class="service-content" data-aos="fade-right" data-aos-duration="1000">
        <div class="service-number">07</div>
        <span class="label-badge service-label">Social Media Management</span>
        <h2 class="section-title mb-3">Build a Community That <span class="text-gradient">Converts</span></h2>
        <p class="service-description">Build a magnetic brand presence across Instagram, Facebook, LinkedIn, TikTok, and X. Our social media team combines creative content with data-driven strategy to grow your audience and turn followers into loyal customers.</p>
        
        <ul class="social-features">
          <?php $socialFeats=['Content Calendar & Strategy','Daily/Weekly Posting & Scheduling','Community Management & Engagement','Influencer Outreach & Partnerships','Monthly Performance Reports']; ?>
          <?php foreach($socialFeats as $sf): ?>
          <li><span class="check">✓</span><?= htmlspecialchars($sf) ?></li>
          <?php endforeach; ?>
        </ul>
        
        <a href="contact.php?service=social" class="btn btn-primary btn-glow">
          <span>Grow My Social</span>
          <span class="btn-icon">→</span>
        </a>
      </div>
      
      <div class="service-visual" data-aos="fade-left" data-aos-duration="1000">
        <div class="platform-stats">
          <?php $platforms=[['Instagram','125K','92'],['TikTok','280K','88'],['LinkedIn','45K','79'],['Facebook','98K','85']]; ?>
          <?php foreach($platforms as $p): ?>
          <div class="platform-row">
            <span class="platform-name"><?= $p[0] ?></span>
            <span class="platform-reach"><?= $p[1] ?> followers</span>
            <div class="platform-progress">
              <div class="progress-fill-animated" style="width: <?= $p[2] ?>%"></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     SERVICE 8: ONLINE ADVERTISING — ROI Dashboard
===================================================== -->
<section class="section service-section motion-gradient" id="ads">
  <div class="container section-content">
    <div class="section-header text-center">
      <div class="service-number centered">08</div>
      <span class="label-badge service-label">Online Advertising</span>
      <h2 class="section-title" data-aos="fade-up">Turn Clicks Into <span class="text-gradient">Revenue</span></h2>
      <p class="section-subtitle" style="margin:1rem auto 3rem;" data-aos="fade-up" data-aos-delay="100">Precision-targeted ad campaigns that turn marketing budget into measurable business growth.</p>
    </div>
    
    <div class="ads-dashboard">
      <div class="dashboard-header">
        <span class="dashboard-title">Campaign Performance</span>
        <span class="dashboard-live">LIVE</span>
      </div>
      <div class="dashboard-metrics">
        <div class="metric-item">
          <span class="metric-label">Total Spend</span>
          <span class="metric-value">$124.5K</span>
        </div>
        <div class="metric-item">
          <span class="metric-label">Revenue</span>
          <span class="metric-value highlight">$486.2K</span>
        </div>
        <div class="metric-item">
          <span class="metric-label">ROAS</span>
          <span class="metric-value">3.9x</span>
        </div>
      </div>
    </div>
    
    <div class="grid grid-3" style="margin-top: 3rem;">
      <?php $adServices=[
        ['🎯','Google Ads (PPC)','Search, display, and Shopping campaigns with laser-precise targeting.','$1.2M+','Ad Spend Managed'],
        ['📣','Meta & Social Ads','Facebook, Instagram, TikTok, and LinkedIn ads that convert.','3.8x','Average ROAS'],
        ['📊','Remarketing','Bring back warm audiences with personalized ads.','↓40%','Cost Per Acquisition']
      ];
      foreach($adServices as $index => $ad): ?>
      <div class="ad-card" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
        <div class="ad-icon"><?= $ad[0] ?></div>
        <h3><?= htmlspecialchars($ad[1]) ?></h3>
        <p><?= htmlspecialchars($ad[2]) ?></p>
        <div class="ad-metric">
          <span class="metric-number"><?= htmlspecialchars($ad[3]) ?></span>
          <span class="metric-label"><?= htmlspecialchars($ad[4]) ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    
    <div style="margin-top:3rem; text-align:center;" data-aos="fade-up">
      <a href="contact.php?service=advertising" class="btn btn-primary btn-lg btn-glow">
        <span>Launch My Campaign</span>
        <span class="btn-icon">→</span>
      </a>
    </div>
  </div>
</section>

<!-- ====================================================
     CTA SECTION — Cinematic Finale
===================================================== -->
<section class="cta-section services-cta" id="services-cta" style="background: var(--primary-black); position: relative; overflow: hidden;">
  <!-- 3D Floating Icons -->
  <div class="cta-floating-icons">
    <div class="cta-float-icon c1">💻</div>
    <div class="cta-float-icon c2">🤖</div>
    <div class="cta-float-icon c3">📈</div>
    <div class="cta-float-icon c4">🎨</div>
    <div class="cta-float-icon c5">⚡</div>
  </div>
  
  <div class="cta-bg-glow" aria-hidden="true"></div>
  <div class="container" style="position:relative;z-index:2;text-align:center;">
    <h2 class="cta-title" data-aos="fade-up">Not Sure Which Service<br><span class="text-gradient">You Need?</span></h2>
    <p class="cta-desc" data-aos="fade-up" data-aos-delay="100">We'll help you figure it out. Book a free 30-minute strategy call and let's map out the perfect plan for your business.</p>
    <a href="contact.php" class="btn btn-primary btn-lg btn-glow" data-aos="fade-up" data-aos-delay="200">
      <span>Book Free Strategy Call</span>
      <span class="btn-icon">→</span>
    </a>
    <div class="cta-guarantee">
      <span class="guarantee-icon">✓</span>
      <span>No commitment • 100% free</span>
    </div>
  </div>
</section>

<!-- GSAP Animation Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/MotionPathPlugin.min.js"></script>

<!-- Custom Services JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  
  // ====================================================
  // FLOATING SERVICE ICONS ANIMATION
  // ====================================================
  const floatIcons = document.querySelectorAll('.service-float-icon');
  
  floatIcons.forEach(icon => {
    const speed = parseFloat(icon.getAttribute('data-speed') || '0.5');
    const randomX = (Math.random() - 0.5) * 200;
    const randomY = (Math.random() - 0.5) * 200;
    const randomRotate = (Math.random() - 0.5) * 360;
    
    gsap.to(icon, {
      x: randomX,
      y: randomY,
      rotation: randomRotate,
      duration: 10 + Math.random() * 10,
      repeat: -1,
      yoyo: true,
      ease: "sine.inOut",
      delay: Math.random() * 5
    });
  });
  
  // ====================================================
  // PARALLAX EFFECT ON MOUSE MOVE
  // ====================================================
  document.addEventListener('mousemove', (e) => {
    const mouseX = e.clientX / window.innerWidth - 0.5;
    const mouseY = e.clientY / window.innerHeight - 0.5;
    
    gsap.to('.service-float-icon', {
      x: (i, el) => parseFloat(el._gsap?.x || 0) + mouseX * 30,
      y: (i, el) => parseFloat(el._gsap?.y || 0) + mouseY * 30,
      duration: 0.5
    });
  });
  
  // ====================================================
  // ANIMATED COUNTERS
  // ====================================================
  const counters = document.querySelectorAll('.counter-value');
  
  counters.forEach(counter => {
    const target = parseInt(counter.getAttribute('data-target'));
    
    gsap.to(counter, {
      innerHTML: target,
      duration: 2,
      snap: { innerHTML: 1 },
      scrollTrigger: {
        trigger: counter,
        start: 'top bottom',
        end: 'bottom top',
        toggleActions: 'play none none reverse'
      }
    });
  });
  
  // ====================================================
  // SERVICE CARDS STAGGER ANIMATION
  // ====================================================
  gsap.utils.toArray('.service-section').forEach((section, index) => {
    gsap.from(section.querySelectorAll('.service-content > *'), {
      scrollTrigger: {
        trigger: section,
        start: 'top 80%',
        end: 'bottom 20%',
        toggleActions: 'play none none reverse'
      },
      y: 50,
      opacity: 0,
      duration: 0.8,
      stagger: 0.1,
      delay: index * 0.1
    });
    
    gsap.from(section.querySelectorAll('.service-visual > *'), {
      scrollTrigger: {
        trigger: section,
        start: 'top 80%',
        end: 'bottom 20%'
      },
      scale: 0.8,
      opacity: 0,
      duration: 0.8,
      delay: 0.3 + index * 0.1
    });
  });
  
  // ====================================================
  // BEFORE/AFTER COMPARISON SLIDER
  // ====================================================
  const comparisonContainer = document.querySelector('.comparison-container');
  
  if (comparisonContainer) {
    let isDragging = false;
    const handle = document.querySelector('.comparison-handle');
    const before = document.querySelector('.comparison-before');
    
    const updateWidth = (x) => {
      const rect = comparisonContainer.getBoundingClientRect();
      let width = ((x - rect.left) / rect.width) * 100;
      width = Math.min(100, Math.max(0, width));
      before.style.width = width + '%';
      handle.style.left = width + '%';
    };
    
    handle.addEventListener('mousedown', () => isDragging = true);
    
    document.addEventListener('mousemove', (e) => {
      if (!isDragging) return;
      updateWidth(e.clientX);
    });
    
    document.addEventListener('mouseup', () => isDragging = false);
  }
  
  // ====================================================
  // NEURAL NETWORK CANVAS
  // ====================================================
  const neuralCanvas = document.getElementById('neural-network');
  
  if (neuralCanvas) {
    const ctx = neuralCanvas.getContext('2d');
    let width, height;
    const nodes = [];
    const nodeCount = 20;
    
    const resize = () => {
      width = neuralCanvas.width = window.innerWidth;
      height = neuralCanvas.height = 400;
    };
    
    const initNodes = () => {
      for (let i = 0; i < nodeCount; i++) {
        nodes.push({
          x: Math.random() * width,
          y: Math.random() * height,
          vx: (Math.random() - 0.5) * 0.5,
          vy: (Math.random() - 0.5) * 0.5
        });
      }
    };
    
    const draw = () => {
      ctx.clearRect(0, 0, width, height);
      
      // Draw connections
      ctx.strokeStyle = 'rgba(93, 214, 44, 0.15)';
      ctx.lineWidth = 1;
      
      for (let i = 0; i < nodes.length; i++) {
        for (let j = i + 1; j < nodes.length; j++) {
          const dx = nodes[i].x - nodes[j].x;
          const dy = nodes[i].y - nodes[j].y;
          const dist = Math.sqrt(dx * dx + dy * dy);
          
          if (dist < 150) {
            ctx.beginPath();
            ctx.moveTo(nodes[i].x, nodes[i].y);
            ctx.lineTo(nodes[j].x, nodes[j].y);
            ctx.stroke();
          }
        }
      }
      
      // Draw nodes
      nodes.forEach(node => {
        ctx.beginPath();
        ctx.arc(node.x, node.y, 3, 0, Math.PI * 2);
        ctx.fillStyle = '#5DD62C';
        ctx.shadowColor = '#5DD62C';
        ctx.shadowBlur = 10;
        ctx.fill();
        ctx.shadowBlur = 0;
      });
      
      // Update positions
      nodes.forEach(node => {
        node.x += node.vx;
        node.y += node.vy;
        
        if (node.x < 0 || node.x > width) node.vx *= -1;
        if (node.y < 0 || node.y > height) node.vy *= -1;
      });
      
      requestAnimationFrame(draw);
    };
    
    resize();
    initNodes();
    draw();
    
    window.addEventListener('resize', resize);
  }
  
  // ====================================================
  // CODE RAIN ANIMATION
  // ====================================================
  const codeRain = document.getElementById('code-rain');
  
  if (codeRain) {
    const chars = '01'.split('');
    const columns = Math.floor(window.innerWidth / 20);
    
    for (let i = 0; i < columns; i++) {
      const column = document.createElement('div');
      column.className = 'code-column';
      column.style.left = i * 20 + 'px';
      column.style.animationDuration = 3 + Math.random() * 5 + 's';
      column.style.animationDelay = Math.random() * 5 + 's';
      
      let content = '';
      for (let j = 0; j < 20; j++) {
        content += chars[Math.floor(Math.random() * chars.length)] + '<br>';
      }
      column.innerHTML = content;
      codeRain.appendChild(column);
    }
  }
});
</script>

<style>
/* ====================================================
   SERVICES PAGE — ATTRACTIVE STYLES
==================================================== */

/* Service Number */
.service-number {
  font-size: 5rem;
  font-weight: 900;
  color: rgba(93, 214, 44, 0.1);
  line-height: 1;
  margin-bottom: 0.5rem;
  font-family: var(--font-heading);
}

.service-number.centered {
  text-align: center;
  font-size: 4rem;
}

/* Service Label */
.service-label {
  margin-bottom: 1rem;
}

/* Service Description */
.service-description {
  color: var(--text-muted);
  line-height: 1.9;
  margin-bottom: 2rem;
  font-size: 1rem;
}

/* Service CTA Group */
.service-cta-group {
  display: flex;
  align-items: center;
  gap: 1.5rem;
  flex-wrap: wrap;
}

.cta-note {
  color: var(--text-muted);
  font-size: 0.9rem;
}

/* ====================================================
   HERO SECTION STYLES
==================================================== */
.services-hero {
  min-height: 90vh;
  position: relative;
  overflow: hidden;
}

.floating-service-icons-3d {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 2;
  pointer-events: none;
}

.service-float-icon {
  position: absolute;
  font-size: 3rem;
  filter: drop-shadow(0 0 20px rgba(93, 214, 44, 0.3));
  opacity: 0.2;
  animation: float 10s ease-in-out infinite;
}

.service-float-icon.s1 { top: 20%; left: 10%; }
.service-float-icon.s2 { top: 60%; right: 15%; }
.service-float-icon.s3 { bottom: 30%; left: 20%; }
.service-float-icon.s4 { top: 40%; right: 25%; }
.service-float-icon.s5 { bottom: 20%; left: 30%; }
.service-float-icon.s6 { top: 70%; right: 35%; }
.service-float-icon.s7 { bottom: 40%; left: 40%; }
.service-float-icon.s8 { top: 30%; right: 45%; }

@keyframes float {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  25% { transform: translate(50px, -50px) rotate(10deg); }
  50% { transform: translate(20px, -100px) rotate(-5deg); }
  75% { transform: translate(-30px, -50px) rotate(5deg); }
}

/* Gradient Orbs */
.gradient-orbs {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  pointer-events: none;
}

.orb {
  position: absolute;
  border-radius: 50%;
  filter: blur(60px);
  opacity: 0.3;
  animation: orbFloat 20s ease-in-out infinite;
}

.orb1 {
  width: 600px;
  height: 600px;
  background: radial-gradient(circle, #5DD62C, transparent);
  top: -200px;
  right: -100px;
}

.orb2 {
  width: 400px;
  height: 400px;
  background: radial-gradient(circle, #337418, transparent);
  bottom: -100px;
  left: -150px;
  animation-delay: -5s;
}

.orb3 {
  width: 300px;
  height: 300px;
  background: radial-gradient(circle, #5DD62C, transparent);
  top: 40%;
  right: 20%;
  animation-delay: -10s;
}

@keyframes orbFloat {
  0%, 100% { transform: translate(0, 0) scale(1); }
  33% { transform: translate(30px, -30px) scale(1.1); }
  66% { transform: translate(-20px, 20px) scale(0.9); }
}

/* Glow Badge */
.glow-badge {
  animation: glowPulse 2s ease-in-out infinite;
}

@keyframes glowPulse {
  0%, 100% { box-shadow: 0 0 20px rgba(93, 214, 44, 0.3); }
  50% { box-shadow: 0 0 40px rgba(93, 214, 44, 0.6); }
}

/* Gradient Text Animation */
.gradient-animate {
  background-size: 200% 200%;
  animation: gradientMove 3s ease infinite;
}

@keyframes gradientMove {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

/* Service Quick Navigation */
.service-quick-nav {
  margin-top: 3rem;
}

.quick-nav-wrapper {
  display: flex;
  justify-content: center;
  gap: 0.5rem;
  flex-wrap: wrap;
}

.quick-nav-item {
  display: inline-flex;
  align-items: center;
  gap: 0.3rem;
  padding: 0.6rem 1.2rem;
  background: rgba(32, 32, 32, 0.6);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(93, 214, 44, 0.2);
  border-radius: 50px;
  color: var(--soft-white);
  font-size: 0.85rem;
  font-weight: 500;
  transition: all 0.3s ease;
  text-decoration: none;
}

.quick-nav-item:hover {
  background: var(--accent-green);
  color: var(--primary-black);
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(93, 214, 44, 0.3);
}

/* ====================================================
   FEATURE CARDS
==================================================== */
.feature-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1rem;
  margin-bottom: 2rem;
}

.feature-card-hover {
  display: flex;
  gap: 1rem;
  padding: 1.25rem;
  background: rgba(32, 32, 32, 0.4);
  border: 1px solid rgba(255, 255, 255, 0.06);
  border-radius: 16px;
  transition: all 0.3s ease;
  animation: fadeInUp 0.5s ease backwards;
}

.feature-card-hover:hover {
  transform: translateY(-5px);
  background: rgba(93, 214, 44, 0.1);
  border-color: rgba(93, 214, 44, 0.3);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.feature-icon {
  width: 40px;
  height: 40px;
  background: rgba(93, 214, 44, 0.1);
  border: 1px solid rgba(93, 214, 44, 0.2);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem;
  flex-shrink: 0;
}

.feature-text h4 {
  font-size: 0.95rem;
  margin-bottom: 0.25rem;
}

.feature-text p {
  font-size: 0.8rem;
  color: var(--text-muted);
}

/* ====================================================
   TECH STACK 3D CARDS
==================================================== */
.tech-stack-3d {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1rem;
  margin-bottom: 2rem;
  perspective: 1000px;
}

.tech-card-3d {
  aspect-ratio: 1;
  cursor: pointer;
}

.tech-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  transition: transform 0.6s;
  transform-style: preserve-3d;
}

.tech-card-3d:hover .tech-card-inner {
  transform: rotateY(180deg);
}

.tech-card-front, .tech-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #202020, #1a3a0a);
  border: 1px solid rgba(93, 214, 44, 0.2);
  border-radius: 16px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

.tech-card-back {
  background: linear-gradient(135deg, var(--accent-green), var(--deep-green));
  transform: rotateY(180deg);
  color: var(--primary-black);
}

.tech-icon {
  font-size: 2rem;
  margin-bottom: 0.5rem;
}

/* Code Snippet Float */
.code-snippet-float {
  background: rgba(15, 15, 15, 0.8);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(93, 214, 44, 0.2);
  border-radius: 16px;
  padding: 1.5rem;
  font-family: 'Monaco', 'Menlo', monospace;
  font-size: 0.85rem;
  animation: floatCode 3s ease-in-out infinite;
}

@keyframes floatCode {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}

/* ====================================================
   COMPARISON SLIDER
==================================================== */
.comparison-slider {
  margin-bottom: 2rem;
}

.comparison-container {
  position: relative;
  width: 100%;
  height: 300px;
  overflow: hidden;
  border-radius: 20px;
  border: 1px solid rgba(93, 214, 44, 0.2);
}

.comparison-before, .comparison-after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.comparison-before {
  width: 50%;
  z-index: 2;
  border-right: 2px solid var(--accent-green);
}

.comparison-after {
  width: 100%;
  z-index: 1;
}

.comparison-label {
  position: absolute;
  top: 20px;
  padding: 0.5rem 1rem;
  background: rgba(15, 15, 15, 0.8);
  backdrop-filter: blur(10px);
  border-radius: 50px;
  font-size: 0.8rem;
  font-weight: 600;
  z-index: 3;
}

.before-label {
  left: 20px;
  color: #ff6b6b;
}

.after-label {
  right: 20px;
  color: var(--accent-green);
}

.comparison-handle {
  position: absolute;
  top: 0;
  left: 50%;
  width: 4px;
  height: 100%;
  background: var(--accent-green);
  z-index: 4;
  cursor: ew-resize;
}

.comparison-handle::after {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 30px;
  height: 30px;
  background: var(--accent-green);
  border-radius: 50%;
  box-shadow: 0 0 20px var(--accent-green);
}

/* Metric Badges */
.metric-badge {
  position: absolute;
  padding: 0.4rem 0.8rem;
  border-radius: 50px;
  font-size: 0.8rem;
  font-weight: 600;
  z-index: 5;
}

.metric-badge.negative {
  background: rgba(255, 80, 80, 0.2);
  color: #ff6b6b;
  top: 80px;
  left: 20px;
}

.metric-badge.positive {
  background: rgba(93, 214, 44, 0.2);
  color: var(--accent-green);
  top: 80px;
  right: 20px;
}

/* Website Preview */
.website-preview {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80%;
  background: rgba(32, 32, 32, 0.9);
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

.preview-header {
  display: flex;
  gap: 0.5rem;
  padding: 0.8rem;
  background: rgba(0,0,0,0.3);
}

.dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
}

.dot.red { background: #ff5f57; }
.dot.yellow { background: #febc2e; }
.dot.green { background: #28c840; }

.preview-content {
  padding: 1rem;
  display: flex;
  flex-direction: column;
  gap: 0.8rem;
}

.line {
  height: 10px;
  background: rgba(255,255,255,0.1);
  border-radius: 5px;
}

.line.short { width: 40%; }
.line.medium { width: 70%; }
.line.long { width: 90%; }
.line.green-bg { background: rgba(93, 214, 44, 0.3); }

/* Results Counter Grid */
.results-counter-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1rem;
  margin-top: 2rem;
}

.counter-card {
  text-align: center;
  padding: 1rem;
  background: rgba(32, 32, 32, 0.4);
  border: 1px solid rgba(93, 214, 44, 0.1);
  border-radius: 12px;
}

.counter-value {
  font-size: 1.5rem;
  font-weight: 800;
  color: var(--accent-green);
  font-family: var(--font-heading);
}

.counter-metric {
  font-size: 0.75rem;
  color: var(--text-muted);
}

/* Stats Showcase */
.stats-showcase {
  margin: 2rem 0;
}

.stat-row {
  margin-bottom: 1rem;
}

.stat-label {
  display: block;
  margin-bottom: 0.3rem;
  font-size: 0.85rem;
  color: var(--text-muted);
}

.stat-bars {
  display: flex;
  gap: 2px;
  height: 30px;
  background: rgba(255,255,255,0.05);
  border-radius: 15px;
  overflow: hidden;
}

.stat-bar {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  padding-right: 10px;
  font-size: 0.75rem;
  font-weight: 600;
  transition: width 1s ease;
}

.stat-bar.before {
  background: rgba(255, 80, 80, 0.3);
  color: #ff6b6b;
}

.stat-bar.after {
  background: rgba(93, 214, 44, 0.3);
  color: var(--accent-green);
}

/* ====================================================
   E-COMMERCE 3D CARDS
==================================================== */
.floating-products-3d {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 1;
}

.product-card-3d {
  position: absolute;
  width: 80px;
  height: 80px;
  perspective: 1000px;
}

.product-card-3d.p1 { top: 20%; left: 15%; }
.product-card-3d.p2 { top: 50%; right: 20%; }
.product-card-3d.p3 { bottom: 30%; left: 25%; }

.product-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  animation: rotate3D 10s linear infinite;
}

@keyframes rotate3D {
  from { transform: rotateY(0deg) rotateX(0deg); }
  to { transform: rotateY(360deg) rotateX(360deg); }
}

.product-front, .product-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, var(--accent-green), var(--deep-green));
  border-radius: 16px;
  font-size: 2rem;
  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

.product-back {
  transform: rotateY(180deg);
  background: var(--secondary-black);
  color: var(--accent-green);
  font-size: 0.8rem;
  font-weight: 600;
}

/* Feature 3D Cards */
.ecommerce-grid {
  position: relative;
  z-index: 5;
}

.feature-3d-card {
  perspective: 1000px;
  height: 250px;
}

.feature-3d-inner {
  position: relative;
  width: 100%;
  height: 100%;
  padding: 2rem;
  background: rgba(32, 32, 32, 0.6);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(93, 214, 44, 0.2);
  border-radius: 20px;
  transition: transform 0.3s ease;
  text-align: center;
  overflow: hidden;
}

.feature-3d-card:hover .feature-3d-inner {
  transform: translateY(-10px) rotateX(5deg) rotateY(5deg);
  box-shadow: 0 20px 40px rgba(93, 214, 44, 0.2);
}

.feature-3d-icon {
  font-size: 3rem;
  margin-bottom: 1rem;
  animation: bounce 2s ease-in-out infinite;
}

@keyframes bounce {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}

.feature-3d-glow {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 200px;
  height: 200px;
  background: radial-gradient(circle, rgba(93, 214, 44, 0.3) 0%, transparent 70%);
  border-radius: 50%;
  transform: translate(-50%, -50%);
  z-index: -1;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.feature-3d-card:hover .feature-3d-glow {
  opacity: 1;
  animation: rotateGlow 3s linear infinite;
}

@keyframes rotateGlow {
  from { transform: translate(-50%, -50%) rotate(0deg); }
  to { transform: translate(-50%, -50%) rotate(360deg); }
}

/* ====================================================
   SOFTWARE CODE TERMINAL
==================================================== */
.code-rain {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  opacity: 0.1;
  pointer-events: none;
}

.code-column {
  position: absolute;
  top: -100%;
  color: var(--accent-green);
  font-family: 'Monaco', monospace;
  font-size: 12px;
  line-height: 1.2;
  animation: codeRain linear infinite;
}

@keyframes codeRain {
  to { transform: translateY(100vh); }
}

.code-terminal {
  background: #1E1E1E;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 20px 40px rgba(0,0,0,0.5);
  position: relative;
  z-index: 5;
}

.terminal-header {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 1rem;
  background: #2D2D2D;
}

.terminal-dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
}

.terminal-title {
  margin-left: 1rem;
  color: var(--text-muted);
  font-size: 0.8rem;
}

.terminal-body {
  padding: 1.5rem;
  font-family: 'Monaco', monospace;
  font-size: 0.85rem;
  line-height: 1.6;
  color: #D4D4D4;
}

.terminal-body .keyword { color: #569CD6; }
.terminal-body .class-name { color: #4EC9B0; }
.terminal-body .this { color: #DCDCAA; }
.terminal-body .property { color: #9CDCFE; }
.terminal-body .string { color: #CE9178; }
.terminal-body .function { color: #DCDCAA; }

.cursor-blink {
  display: inline-block;
  width: 8px;
  height: 16px;
  background: var(--accent-green);
  animation: blink 1s step-end infinite;
  vertical-align: middle;
}

@keyframes blink {
  0%, 100% { opacity: 1; }
  50% { opacity: 0; }
}

/* ====================================================
   AI NEURAL NETWORK SECTION
==================================================== */
.neural-bg {
  position: relative;
  overflow: hidden;
}

.neural-canvas {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}

.floating-ai-icons {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 2;
  pointer-events: none;
}

.ai-float-icon {
  position: absolute;
  font-size: 4rem;
  opacity: 0.2;
  animation: aiFloat 15s linear infinite;
}

.ai-float-icon:nth-child(1) { top: 20%; left: 10%; animation-delay: 0s; }
.ai-float-icon:nth-child(2) { top: 60%; right: 15%; animation-delay: 3s; }
.ai-float-icon:nth-child(3) { bottom: 30%; left: 20%; animation-delay: 6s; }
.ai-float-icon:nth-child(4) { top: 40%; right: 25%; animation-delay: 9s; }

@keyframes aiFloat {
  0% { transform: translate(0, 0) rotate(0deg); }
  25% { transform: translate(50px, -50px) rotate(90deg); }
  50% { transform: translate(100px, 0) rotate(180deg); }
  75% { transform: translate(50px, 50px) rotate(270deg); }
  100% { transform: translate(0, 0) rotate(360deg); }
}

/* AI Cards */
.ai-grid {
  position: relative;
  z-index: 5;
}

.ai-card {
  padding: 2rem;
  background: rgba(32, 32, 32, 0.6);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(93, 214, 44, 0.2);
  border-radius: 20px;
  text-align: center;
  transition: all 0.3s ease;
}

.ai-card:hover {
  transform: translateY(-10px);
  border-color: var(--accent-green);
  box-shadow: 0 20px 40px rgba(93, 214, 44, 0.2);
}

.ai-icon-wrapper {
  position: relative;
  width: 80px;
  height: 80px;
  margin: 0 auto 1.5rem;
}

.ai-pulse {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: rgba(93, 214, 44, 0.3);
  animation: pulse 2s ease-out infinite;
}

.ai-icon {
  position: relative;
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, var(--accent-green), var(--deep-green));
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2.5rem;
  z-index: 2;
}

.ai-metrics {
  display: flex;
  justify-content: center;
  gap: 1rem;
  margin-top: 1rem;
}

.ai-metrics .metric {
  padding: 0.3rem 0.8rem;
  background: rgba(93, 214, 44, 0.1);
  border: 1px solid rgba(93, 214, 44, 0.2);
  border-radius: 50px;
  font-size: 0.8rem;
  color: var(--accent-green);
}

/* ====================================================
   DESIGN SECTION
==================================================== */
.design-showcase {
  position: relative;
  padding: 2rem;
}

.design-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 1rem;
  margin-bottom: 2rem;
}

.design-item {
  aspect-ratio: 1;
  background: linear-gradient(135deg, #202020, #1a3a0a);
  border: 1px solid rgba(93, 214, 44, 0.2);
  border-radius: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 3rem;
  transition: all 0.3s ease;
}

.design-item:hover {
  transform: scale(1.05);
  border-color: var(--accent-green);
  box-shadow: 0 10px 30px rgba(93, 214, 44, 0.3);
}

.floating-1 { animation: floatDesign 4s ease-in-out infinite; }
.floating-2 { animation: floatDesign 5s ease-in-out infinite 0.5s; }
.floating-3 { animation: floatDesign 6s ease-in-out infinite 1s; }
.floating-4 { animation: floatDesign 7s ease-in-out infinite 1.5s; }

@keyframes floatDesign {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-20px); }
}

.color-palette {
  display: flex;
  gap: 1rem;
  justify-content: center;
  margin: 2rem 0;
}

.color-dot {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 2px solid rgba(255,255,255,0.1);
  animation: pulseColor 2s ease-in-out infinite;
}

.color-dot:nth-child(1) { animation-delay: 0s; }
.color-dot:nth-child(2) { animation-delay: 0.5s; }
.color-dot:nth-child(3) { animation-delay: 1s; }
.color-dot:nth-child(4) { animation-delay: 1.5s; }

@keyframes pulseColor {
  0%, 100% { transform: scale(1); box-shadow: 0 0 0 rgba(93,214,44,0); }
  50% { transform: scale(1.2); box-shadow: 0 0 30px currentColor; }
}

.design-stats {
  display: flex;
  justify-content: center;
  gap: 3rem;
}

.design-stat {
  text-align: center;
}

.design-stat .stat-number {
  font-size: 2rem;
  font-weight: 800;
  color: var(--accent-green);
  display: block;
}

.design-stat .stat-label {
  color: var(--text-muted);
  font-size: 0.8rem;
}

/* Design Services Pills */
.design-services-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 1rem;
  margin: 2rem 0;
}

.design-service-pill {
  padding: 1rem;
  background: rgba(93, 214, 44, 0.05);
  border: 1px solid rgba(93, 214, 44, 0.15);
  border-radius: 12px;
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-size: 0.9rem;
  transition: all 0.3s ease;
}

.design-service-pill:hover {
  background: rgba(93, 214, 44, 0.1);
  transform: translateX(5px);
}

/* ====================================================
   SOCIAL MEDIA SECTION
==================================================== */
.social-feed-animation {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  pointer-events: none;
}

.post {
  position: absolute;
  width: 250px;
  padding: 1rem;
  background: rgba(32, 32, 32, 0.8);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(93, 214, 44, 0.2);
  border-radius: 12px;
  animation: floatPost 10s linear infinite;
}

.post.floating-post.p1 { top: 20%; left: 10%; animation-delay: 0s; }
.post.floating-post.p2 { top: 50%; right: 15%; animation-delay: 3s; }
.post.floating-post.p3 { bottom: 30%; left: 20%; animation-delay: 6s; }

@keyframes floatPost {
  0% { transform: translate(0, 0) rotate(0deg); }
  25% { transform: translate(100px, -50px) rotate(5deg); }
  50% { transform: translate(200px, 0) rotate(0deg); }
  75% { transform: translate(100px, 50px) rotate(-5deg); }
  100% { transform: translate(0, 0) rotate(0deg); }
}

.post-header {
  font-size: 0.8rem;
  color: var(--text-muted);
  margin-bottom: 0.5rem;
}

.post-content {
  color: var(--soft-white);
}

/* Platform Stats */
.platform-stats {
  background: rgba(32, 32, 32, 0.6);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(93, 214, 44, 0.2);
  border-radius: 20px;
  padding: 2rem;
}

.platform-row {
  margin-bottom: 1.5rem;
}

.platform-name {
  display: inline-block;
  width: 100px;
  font-weight: 600;
}

.platform-reach {
  color: var(--accent-green);
  margin-left: 1rem;
  font-size: 0.9rem;
}

.platform-progress {
  margin-top: 0.5rem;
  height: 8px;
  background: rgba(255,255,255,0.05);
  border-radius: 4px;
  overflow: hidden;
}

.progress-fill-animated {
  height: 100%;
  background: linear-gradient(90deg, var(--accent-green), var(--deep-green));
  width: 0;
  animation: progressFill 1.5s ease forwards;
}

@keyframes progressFill {
  to { width: var(--target); }
}

/* ====================================================
   ADS DASHBOARD
==================================================== */
.ads-dashboard {
  max-width: 600px;
  margin: 0 auto;
  background: rgba(32, 32, 32, 0.8);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(93, 214, 44, 0.2);
  border-radius: 20px;
  padding: 2rem;
  box-shadow: 0 20px 40px rgba(0,0,0,0.3);
}

.dashboard-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 2rem;
  padding-bottom: 1rem;
  border-bottom: 1px solid rgba(255,255,255,0.1);
}

.dashboard-title {
  font-size: 1.2rem;
  font-weight: 600;
}

.dashboard-live {
  background: rgba(93, 214, 44, 0.2);
  color: var(--accent-green);
  padding: 0.3rem 1rem;
  border-radius: 50px;
  font-size: 0.8rem;
  font-weight: 600;
  animation: livePulse 1.5s ease-in-out infinite;
}

@keyframes livePulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.5; }
}

.dashboard-metrics {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1rem;
  text-align: center;
}

.metric-item {
  padding: 1rem;
  background: rgba(255,255,255,0.05);
  border-radius: 12px;
}

.metric-label {
  display: block;
  font-size: 0.8rem;
  color: var(--text-muted);
  margin-bottom: 0.5rem;
}

.metric-value {
  font-size: 1.5rem;
  font-weight: 700;
}

.metric-value.highlight {
  color: var(--accent-green);
}

/* Ad Cards */
.ad-card {
  padding: 2rem;
  background: rgba(32, 32, 32, 0.6);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(93, 214, 44, 0.2);
  border-radius: 20px;
  text-align: center;
  transition: all 0.3s ease;
}

.ad-card:hover {
  transform: translateY(-10px);
  border-color: var(--accent-green);
  box-shadow: 0 20px 40px rgba(93, 214, 44, 0.2);
}

.ad-icon {
  font-size: 3rem;
  margin-bottom: 1rem;
  animation: bounce 2s ease-in-out infinite;
}

.ad-metric {
  margin-top: 1.5rem;
  padding: 1rem;
  background: rgba(93, 214, 44, 0.05);
  border: 1px solid rgba(93, 214, 44, 0.15);
  border-radius: 12px;
}

.metric-number {
  font-size: 1.8rem;
  font-weight: 800;
  color: var(--accent-green);
  display: block;
}

/* ====================================================
   CTA SECTION
==================================================== */
.services-cta {
  min-height: 60vh;
  display: flex;
  align-items: center;
}

.cta-floating-icons {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  pointer-events: none;
}

.cta-float-icon {
  position: absolute;
  font-size: 3rem;
  opacity: 0.1;
  animation: ctaFloat 20s linear infinite;
}

.cta-float-icon.c1 { top: 20%; left: 10%; animation-delay: 0s; }
.cta-float-icon.c2 { top: 60%; right: 15%; animation-delay: 4s; }
.cta-float-icon.c3 { bottom: 30%; left: 20%; animation-delay: 8s; }
.cta-float-icon.c4 { top: 40%; right: 25%; animation-delay: 12s; }
.cta-float-icon.c5 { bottom: 20%; left: 30%; animation-delay: 16s; }

@keyframes ctaFloat {
  0% { transform: translate(0, 0) rotate(0deg); }
  25% { transform: translate(200px, -100px) rotate(90deg); }
  50% { transform: translate(400px, 0) rotate(180deg); }
  75% { transform: translate(200px, 100px) rotate(270deg); }
  100% { transform: translate(0, 0) rotate(360deg); }
}

.cta-guarantee {
  margin-top: 2rem;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  color: var(--text-muted);
  font-size: 0.9rem;
}

.guarantee-icon {
  width: 24px;
  height: 24px;
  background: var(--accent-green);
  color: var(--primary-black);
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
}

/* ====================================================
   SERVICE DIVIDER
==================================================== */
.service-divider {
  position: relative;
  width: 100%;
  height: 120px;
  margin-top: -1px;
  overflow: hidden;
}

.service-divider svg {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.service-divider.reverse {
  transform: rotate(180deg);
}

/* ====================================================
   ANIMATED BUTTONS
==================================================== */
.btn-glow {
  position: relative;
  overflow: hidden;
}

.btn-glow::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);
  opacity: 0;
  transition: opacity 0.3s ease;
  transform: rotate(45deg);
}

.btn-glow:hover::before {
  opacity: 1;
  animation: glowRotate 2s linear infinite;
}

@keyframes glowRotate {
  from { transform: rotate(45deg); }
  to { transform: rotate(405deg); }
}

.btn-icon {
  transition: transform 0.3s ease;
}

.btn:hover .btn-icon {
  transform: translateX(5px);
}

/* ====================================================
   RESPONSIVE DESIGN
==================================================== */
@media (max-width: 1200px) {
  .service-number { font-size: 4rem; }
  .grid-4 { grid-template-columns: repeat(2, 1fr); }
  .floating-products-3d { display: none; }
}

@media (max-width: 992px) {
  .service-layout.grid-2 {
    grid-template-columns: 1fr;
    gap: 3rem;
  }
  
  .order-2 { order: 1 !important; }
  .order-1 { order: 2 !important; }
  
  .feature-grid { grid-template-columns: 1fr; }
  .results-counter-grid { grid-template-columns: repeat(2, 1fr); }
  .grid-4 { grid-template-columns: 1fr; }
  .floating-service-icons-3d { opacity: 0.3; }
}

@media (max-width: 768px) {
  .service-number { font-size: 3rem; }
  .quick-nav-wrapper { gap: 0.3rem; }
  .quick-nav-item { padding: 0.4rem 0.8rem; font-size: 0.75rem; }
  .grid-3 { grid-template-columns: 1fr; }
  .grid-2 { grid-template-columns: 1fr; }
  .comparison-container { height: 250px; }
  .dashboard-metrics { grid-template-columns: 1fr; }
}
</style>

<?php include 'includes/footer.php'; ?>