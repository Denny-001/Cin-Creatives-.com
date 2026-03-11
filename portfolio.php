<?php
$pageTitle = "Portfolio - CIN CREATIVES: Our Award-Winning Digital Projects";
$pageDescription = "Explore our portfolio of successful web development, e-commerce, AI automation, and design projects. See how we've helped businesses transform their digital presence.";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- ====================================================
     PAGE HERO — Video Background with Floating 3D Elements
===================================================== -->
<section class="page-hero video-bg-section" id="portfolio-hero">
    <!-- Video Background -->
    <video class="bg-video" autoplay muted loop playsinline aria-hidden="true">
        <source src="assets/videos/bg-loop2.mp4" type="video/mp4">
    </video>
    <div class="video-bg-overlay" aria-hidden="true"></div>
    
    <!-- Floating 3D Images -->
    <div class="floating-3d-images">
        <div class="float-3d" id="float-1">
            <img src="assets/images/portfolio/3d/project-float-1.png" alt="Floating Project" class="float-img">
        </div>
        <div class="float-3d" id="float-2">
            <img src="assets/images/portfolio/3d/project-float-2.png" alt="Floating Project" class="float-img">
        </div>
        <div class="float-3d" id="float-3">
            <img src="assets/images/portfolio/3d/project-float-3.png" alt="Floating Project" class="float-img">
        </div>
        <div class="float-3d" id="float-4">
            <img src="assets/images/portfolio/3d/project-float-4.png" alt="Floating Project" class="float-img">
        </div>
    </div>
    
    <!-- Floating Particles -->
    <div id="particles-js" class="particles-container"></div>
    
    <div class="container section-content">
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span class="sep">/</span>
            <span class="current">Portfolio</span>
        </nav>
        <span class="label-badge" data-aos="fade-down">Our Work</span>
        <h1 class="display-2 mb-3" data-aos="fade-up">
            Proven Results.<br>
            <span class="text-gradient">Remarkable Projects.</span>
        </h1>
        <p class="section-subtitle" style="margin:0 auto;" data-aos="fade-up" data-aos-delay="100">
            A curated selection of projects where strategy, design, and technology came together to create extraordinary outcomes.
        </p>
        
        <!-- Hero Stats with Animated Images -->
        <div class="hero-stats-images" data-aos="fade-up" data-aos-delay="200">
            <div class="stat-image-item">
                <img src="assets/images/portfolio/stats/projects-icon.png" alt="Projects" class="stat-img pulse-animation">
                <div class="stat-text">
                    <span class="stat-number">250+</span>
                    <span class="stat-label">Projects</span>
                </div>
            </div>
            <div class="stat-image-item">
                <img src="assets/images/portfolio/stats/clients-icon.png" alt="Clients" class="stat-img bounce-animation">
                <div class="stat-text">
                    <span class="stat-number">150+</span>
                    <span class="stat-label">Happy Clients</span>
                </div>
            </div>
            <div class="stat-image-item">
                <img src="assets/images/portfolio/stats/awards-icon.png" alt="Awards" class="stat-img rotate-animation">
                <div class="stat-text">
                    <span class="stat-number">12</span>
                    <span class="stat-label">Awards</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====================================================
     FEATURED PROJECT SHOWCASE - 3D Carousel
===================================================== -->
<section class="featured-showcase" style="background: var(--primary-black);">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="label-badge">Featured Work</span>
            <h2 class="section-title">Our <span class="text-gradient">Masterpieces</span></h2>
            <p class="section-description">Take a closer look at our most innovative projects</p>
        </div>
        
        <!-- 3D Image Carousel -->
        <div class="carousel-3d-container" data-aos="fade-up">
            <div class="carousel-3d" id="carousel3d">
                <div class="carousel-item active">
                    <div class="project-3d-card">
                        <div class="project-3d-image">
                            <img src="assets/images/portfolio/featured/fintech-dashboard.jpg" alt="FinTech Dashboard">
                            <div class="image-glow"></div>
                        </div>
                        <div class="project-3d-content">
                            <h3>FinTech Analytics Platform</h3>
                            <p>Real-time financial intelligence with AI predictions</p>
                            <div class="project-tags">
                                <span>React</span>
                                <span>Node.js</span>
                                <span>AI/ML</span>
                            </div>
                            <a href="#" class="btn-small">View Case Study →</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="project-3d-card">
                        <div class="project-3d-image">
                            <img src="assets/images/portfolio/featured/ecommerce-luxury.jpg" alt="Luxury E-commerce">
                            <div class="image-glow"></div>
                        </div>
                        <div class="project-3d-content">
                            <h3>Luxury Fashion Store</h3>
                            <p>High-end e-commerce with AR try-on</p>
                            <div class="project-tags">
                                <span>Shopify</span>
                                <span>Vue.js</span>
                                <span>AR/VR</span>
                            </div>
                            <a href="#" class="btn-small">View Case Study →</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="project-3d-card">
                        <div class="project-3d-image">
                            <img src="assets/images/portfolio/featured/ai-healthcare.jpg" alt="Healthcare AI">
                            <div class="image-glow"></div>
                        </div>
                        <div class="project-3d-content">
                            <h3>AI Healthcare Platform</h3>
                            <p>Diagnostic assistance for 50+ clinics</p>
                            <div class="project-tags">
                                <span>Python</span>
                                <span>TensorFlow</span>
                                <span>React</span>
                            </div>
                            <a href="#" class="btn-small">View Case Study →</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Carousel Controls -->
            <button class="carousel-control prev">←</button>
            <button class="carousel-control next">→</button>
            
            <!-- Carousel Dots -->
            <div class="carousel-dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>
</section>

<!-- ====================================================
     PORTFOLIO FILTER & GRID - Masonry with Parallax Images
===================================================== -->
<section class="section" id="portfolio-grid" style="background: var(--primary-black);">
    <div class="container">
        <!-- Filter buttons with animated icons -->
        <div class="filter-wrapper" data-aos="fade-up">
            <div class="filter-btns" id="portfolio-filters">
                <button class="filter-btn active" data-filter="all">
                    <img src="assets/images/portfolio/filters/all-icon.png" alt="All" class="filter-icon">
                    All Projects
                </button>
                <button class="filter-btn" data-filter="web">
                    <img src="assets/images/portfolio/filters/web-icon.png" alt="Web" class="filter-icon">
                    Web Development
                </button>
                <button class="filter-btn" data-filter="ecommerce">
                    <img src="assets/images/portfolio/filters/ecommerce-icon.png" alt="E-commerce" class="filter-icon">
                    E-commerce
                </button>
                <button class="filter-btn" data-filter="software">
                    <img src="assets/images/portfolio/filters/software-icon.png" alt="Software" class="filter-icon">
                    Software
                </button>
                <button class="filter-btn" data-filter="ai">
                    <img src="assets/images/portfolio/filters/ai-icon.png" alt="AI" class="filter-icon">
                    AI Automation
                </button>
                <button class="filter-btn" data-filter="design">
                    <img src="assets/images/portfolio/filters/design-icon.png" alt="Design" class="filter-icon">
                    Design
                </button>
            </div>
        </div>

        <!-- Portfolio Masonry Grid with Parallax Images -->
        <div class="grid grid-3 portfolio-masonry filter-grid">
            <?php
            $projects = [
                [
                    'title' => 'LuxeShop E-commerce Platform',
                    'cat' => 'ecommerce',
                    'label' => 'E-commerce',
                    'desc' => 'A full-featured multi-vendor marketplace with AI product recommendations that drove 180% sales increase.',
                    'tech' => ['Laravel', 'Vue.js', 'Stripe'],
                    'img' => 'ecommerce-1.jpg',
                    'result' => '+180% Sales',
                    'client' => 'LuxeShop',
                    'year' => '2024'
                ],
                [
                    'title' => 'FinTech Analytics Dashboard',
                    'cat' => 'software',
                    'label' => 'Software Dev',
                    'desc' => 'Real-time financial intelligence platform processing 500K+ transactions daily for a fintech startup.',
                    'tech' => ['React', 'Node.js', 'PostgreSQL'],
                    'img' => 'fintech-1.jpg',
                    'result' => '500K txns/day',
                    'client' => 'CapitalFlow',
                    'year' => '2024'
                ],
                [
                    'title' => 'AI Content Automation Suite',
                    'cat' => 'ai',
                    'label' => 'AI Automation',
                    'desc' => 'GPT-4 powered content creation platform with automated publishing saving clients 40hrs/week.',
                    'tech' => ['Python', 'OpenAI', 'FastAPI'],
                    'img' => 'ai-1.jpg',
                    'result' => '40hrs saved/wk',
                    'client' => 'ContentGenius',
                    'year' => '2023'
                ],
                [
                    'title' => 'Nexus Real Estate Portal',
                    'cat' => 'web',
                    'label' => 'Web Development',
                    'desc' => 'Property listing and management platform with 3D virtual tours and AI-powered property matching.',
                    'tech' => ['Next.js', 'Three.js', 'MongoDB'],
                    'img' => 'realestate-1.jpg',
                    'result' => '3M+ page views',
                    'client' => 'Nexus Properties',
                    'year' => '2024'
                ],
                [
                    'title' => 'EcoWear Brand Identity',
                    'cat' => 'design',
                    'label' => 'Graphic Design',
                    'desc' => 'Complete brand identity system for a sustainable fashion startup, from logo to full design system.',
                    'tech' => ['Figma', 'Illustrator', 'Photoshop'],
                    'img' => 'design-1.jpg',
                    'result' => 'Brand of the Year',
                    'client' => 'EcoWear',
                    'year' => '2023'
                ],
                [
                    'title' => 'HealthTech SaaS Platform',
                    'cat' => 'software',
                    'label' => 'Software Dev',
                    'desc' => 'Telemedicine and patient management SaaS used by 200+ clinics across 15 countries.',
                    'tech' => ['Laravel', 'React', 'AWS'],
                    'img' => 'healthtech-1.jpg',
                    'result' => '200+ Clinics',
                    'client' => 'MediCare Solutions',
                    'year' => '2024'
                ],
                [
                    'title' => 'TrendMart Social Commerce',
                    'cat' => 'ecommerce',
                    'label' => 'E-commerce',
                    'desc' => 'Social-first shopping experience combining Instagram shopping with a custom storefront.',
                    'tech' => ['Shopify Plus', 'React', 'Meta API'],
                    'img' => 'social-1.jpg',
                    'result' => '+240% Revenue',
                    'client' => 'TrendMart',
                    'year' => '2024'
                ],
                [
                    'title' => 'SmartDesk AI Assistant',
                    'cat' => 'ai',
                    'label' => 'AI Automation',
                    'desc' => 'Enterprise AI assistant integrated with Slack, Jira, and Salesforce for workflow automation.',
                    'tech' => ['Python', 'LangChain', 'GPT-4'],
                    'img' => 'smartdesk-1.jpg',
                    'result' => '60% less meetings',
                    'client' => 'TechCorp',
                    'year' => '2023'
                ],
                [
                    'title' => 'Apex Fitness App',
                    'cat' => 'web',
                    'label' => 'Web Development',
                    'desc' => 'Gamified fitness tracking web app with real-time leaderboards and personalized AI coaching.',
                    'tech' => ['React', 'Firebase', 'Node.js'],
                    'img' => 'fitness-1.jpg',
                    'result' => '50K users',
                    'client' => 'Apex Fitness',
                    'year' => '2024'
                ],
            ];

            foreach($projects as $i => $p): 
                $animation = ($i % 3 == 0) ? 'fade-up' : (($i % 3 == 1) ? 'zoom-in' : 'flip-left');
                $delay = ($i % 3) * 100;
            ?>
            <div class="portfolio-card" data-category="<?= $p['cat'] ?>" data-aos="<?= $animation ?>" data-aos-delay="<?= $delay ?>">
                <div class="card-image-wrapper">
                    <div class="card-image parallax-container">
                        <img src="assets/images/portfolio/projects/<?= $p['img'] ?>" 
                             alt="<?= htmlspecialchars($p['title']) ?>" 
                             class="portfolio-img parallax-img"
                             loading="lazy">
                        
                        <!-- Image Overlay with Effects -->
                        <div class="image-overlay">
                            <div class="overlay-content">
                                <span class="project-client"><?= htmlspecialchars($p['client']) ?></span>
                                <span class="project-year"><?= $p['year'] ?></span>
                            </div>
                        </div>
                        
                        <!-- Result Badge with Animation -->
                        <div class="result-badge floating-badge">
                            <span class="badge-icon">🏆</span>
                            <span><?= htmlspecialchars($p['result']) ?></span>
                        </div>
                        
                        <!-- 3D Hover Effect Elements -->
                        <div class="hover-3d-elements">
                            <div class="hover-dot dot-1"></div>
                            <div class="hover-dot dot-2"></div>
                            <div class="hover-dot dot-3"></div>
                        </div>
                    </div>
                    
                    <!-- Portfolio Overlay on Hover -->
                    <div class="portfolio-overlay">
                        <div class="overlay-inner">
                            <div class="overlay-icons">
                                <span class="overlay-icon" onclick="openLightbox(<?= $i ?>)">🔍</span>
                                <span class="overlay-icon" onclick="shareProject('<?= $p['title'] ?>')">📤</span>
                            </div>
                            <a href="contact.php?project=<?= urlencode($p['title']) ?>" class="btn btn-primary btn-sm">
                                Start Similar Project
                                <span class="btn-icon">→</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-body">
                    <div class="portfolio-header">
                        <span class="portfolio-tag">
                            <img src="assets/images/portfolio/tags/<?= $p['cat'] ?>-icon.png" alt="" class="tag-icon">
                            <?= htmlspecialchars($p['label']) ?>
                        </span>
                        <span class="portfolio-rating">
                            <?php for($r=0; $r<5; $r++): ?>★<?php endfor; ?>
                        </span>
                    </div>
                    <h3 class="portfolio-title"><?= htmlspecialchars($p['title']) ?></h3>
                    <p class="portfolio-desc"><?= htmlspecialchars($p['desc']) ?></p>
                    
                    <!-- Technology Stack with Icons -->
                    <div class="portfolio-tech">
                        <?php foreach($p['tech'] as $tech): ?>
                        <span class="tech-badge">
                            <img src="assets/images/portfolio/tech/<?= strtolower($tech) ?>-icon.png" alt="" class="tech-icon">
                            <?= htmlspecialchars($tech) ?>
                        </span>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- Project Actions -->
                    <div class="portfolio-actions">
                        <a href="#" class="case-study-link">
                            View Case Study
                            <span class="link-icon">→</span>
                        </a>
                        <button class="save-project" onclick="saveProject(<?= $i ?>)">
                            <span class="save-icon">🤍</span>
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Load More Button with Animation -->
        <div class="load-more-wrapper" data-aos="fade-up">
            <button class="btn btn-outline btn-large" id="loadMoreBtn">
                <span>Load More Projects</span>
                <img src="assets/images/portfolio/load-more-icon.png" alt="" class="btn-icon-spin">
            </button>
        </div>
    </div>
</section>

<!-- ====================================================
     LIGHTBOX GALLERY - For Image Previews
===================================================== -->
<div class="lightbox-overlay" id="lightbox">
    <div class="lightbox-container">
        <button class="lightbox-close">×</button>
        <button class="lightbox-prev">←</button>
        <button class="lightbox-next">→</button>
        
        <div class="lightbox-content">
            <img src="" alt="" id="lightbox-image">
            <div class="lightbox-info">
                <h3 id="lightbox-title"></h3>
                <p id="lightbox-desc"></p>
            </div>
        </div>
        
        <div class="lightbox-thumbnails" id="lightbox-thumbnails"></div>
    </div>
</div>

<!-- ====================================================
     PROJECT SHOWCASE VIDEO SECTION
===================================================== -->
<section class="video-showcase" style="background: var(--primary-black);">
    <div class="container">
        <div class="video-showcase-grid">
            <div class="video-content" data-aos="fade-right">
                <span class="label-badge">In Action</span>
                <h2>See How We Build<br><span class="text-gradient">Digital Excellence</span></h2>
                <p>Watch our process from concept to completion. See how we transform ideas into powerful digital solutions.</p>
                <div class="video-stats">
                    <div class="video-stat">
                        <img src="assets/images/portfolio/video/projects-icon.png" alt="">
                        <span>250+ Projects</span>
                    </div>
                    <div class="video-stat">
                        <img src="assets/images/portfolio/video/team-icon.png" alt="">
                        <span>24 Experts</span>
                    </div>
                </div>
            </div>
            
            <div class="video-wrapper" data-aos="fade-left">
                <div class="video-thumbnail floating-video">
                    <img src="assets/images/portfolio/video/showcase-thumb.jpg" alt="Video Showcase">
                    <button class="play-button pulse-animation">
                        <span class="play-icon">▶</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====================================================
     RESULTS SECTION — Animated Gradient with Image Icons
===================================================== -->
<section class="section motion-gradient" id="portfolio-results">
    <div class="container section-content">
        <div class="section-header text-center">
            <span class="label-badge">Real Results</span>
            <h2 class="section-title" data-aos="fade-up">The Numbers Speak<br><span class="text-gradient">for Themselves</span></h2>
        </div>
        
        <div class="counter-grid">
            <?php $metrics = [
                ['$50M+', 'Revenue Generated for Clients', 'revenue-icon.png', 'pulse'],
                ['250+', 'Successful Projects Completed', 'projects-icon-large.png', 'bounce'],
                ['98%', 'Client Retention Rate', 'retention-icon.png', 'rotate'],
                ['20+', 'Countries Served', 'countries-icon.png', 'float']
            ];
            foreach($metrics as $m): ?>
            <div class="counter-item" data-aos="zoom-in">
                <div class="counter-image <?= $m[3] ?>-animation">
                    <img src="assets/images/portfolio/icons/<?= $m[2] ?>" alt="<?= $m[1] ?>">
                </div>
                <span class="counter-number"><?= htmlspecialchars($m[0]) ?></span>
                <div class="counter-label"><?= htmlspecialchars($m[1]) ?></div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Client Logo Cloud -->
        <div class="client-logo-cloud" data-aos="fade-up">
            <h4>Trusted by Industry Leaders</h4>
            <div class="logo-cloud">
                <img src="assets/images/portfolio/clients/client1.png" alt="Client" class="client-logo">
                <img src="assets/images/portfolio/clients/client2.png" alt="Client" class="client-logo">
                <img src="assets/images/portfolio/clients/client3.png" alt="Client" class="client-logo">
                <img src="assets/images/portfolio/clients/client4.png" alt="Client" class="client-logo">
                <img src="assets/images/portfolio/clients/client5.png" alt="Client" class="client-logo">
                <img src="assets/images/portfolio/clients/client6.png" alt="Client" class="client-logo">
            </div>
        </div>
    </div>
</section>

<!-- ====================================================
     TESTIMONIALS FROM CLIENTS
===================================================== -->
<section class="testimonials-portfolio">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="label-badge">Client Stories</span>
            <h2 class="section-title">What Our <span class="text-gradient">Clients Say</span></h2>
        </div>
        
        <div class="testimonial-grid">
            <?php
            $testimonials = [
                [
                    'name' => 'Sarah Johnson',
                    'position' => 'CEO, TechFlow',
                    'text' => 'CIN CREATIVES transformed our vision into reality. Their team delivered beyond our expectations, and the results speak for themselves.',
                    'image' => 'client1.jpg',
                    'project' => 'FinTech Dashboard'
                ],
                [
                    'name' => 'Michael Chen',
                    'position' => 'Founder, LuxStyle',
                    'text' => 'The e-commerce platform they built increased our sales by 200%. Their attention to detail and user experience is unmatched.',
                    'image' => 'client2.jpg',
                    'project' => 'Luxury Store'
                ],
                [
                    'name' => 'Emily Rodriguez',
                    'position' => 'CMO, InnovateCorp',
                    'text' => 'Working with CIN CREATIVES was a game-changer. Their AI automation saved us 40 hours per week.',
                    'image' => 'client3.jpg',
                    'project' => 'AI Suite'
                ]
            ];
            
            foreach($testimonials as $t): ?>
            <div class="testimonial-card" data-aos="fade-up">
                <div class="testimonial-image-wrapper">
                    <img src="assets/images/portfolio/testimonials/<?= $t['image'] ?>" alt="<?= $t['name'] ?>" class="testimonial-image">
                    <div class="image-ring"></div>
                </div>
                <div class="testimonial-content">
                    <div class="quote-icon">"</div>
                    <p class="testimonial-text"><?= $t['text'] ?></p>
                    <div class="testimonial-author">
                        <h4><?= $t['name'] ?></h4>
                        <p><?= $t['position'] ?></p>
                        <span class="project-ref">Project: <?= $t['project'] ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ====================================================
     AWARDS & RECOGNITION
===================================================== -->
<section class="awards-section">
    <div class="container">
        <div class="awards-grid">
            <div class="award-item" data-aos="fade-up">
                <img src="assets/images/portfolio/awards/award1.png" alt="Webby Award" class="award-image">
                <h4>Webby Award</h4>
                <p>Best FinTech Platform 2024</p>
            </div>
            <div class="award-item" data-aos="fade-up" data-aos-delay="100">
                <img src="assets/images/portfolio/awards/award2.png" alt="CSS Design Award" class="award-image">
                <h4>CSS Design Award</h4>
                <p>Best UI/UX Design</p>
            </div>
            <div class="award-item" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/images/portfolio/awards/award3.png" alt="Awwwards" class="award-image">
                <h4>Awwwards</h4>
                <p>Site of the Day</p>
            </div>
            <div class="award-item" data-aos="fade-up" data-aos-delay="300">
                <img src="assets/images/portfolio/awards/award4.png" alt="Red Dot" class="award-image">
                <h4>Red Dot Design</h4>
                <p>Best Communication Design</p>
            </div>
        </div>
    </div>
</section>

<!-- ====================================================
     PROCESS — Dot Grid with Image Steps
===================================================== -->
<section class="section dot-grid-bg" id="portfolio-cta">
    <div class="section-content">
        <div class="container" style="text-align:center; position:relative; z-index:1;">
            <div class="cta-bg-glow" aria-hidden="true"></div>
            
            <!-- Floating Project Images -->
            <div class="cta-floating-images">
                <img src="assets/images/portfolio/cta/float-1.png" alt="" class="cta-float float-1">
                <img src="assets/images/portfolio/cta/float-2.png" alt="" class="cta-float float-2">
                <img src="assets/images/portfolio/cta/float-3.png" alt="" class="cta-float float-3">
            </div>
            
            <span class="label-badge" data-aos="fade-down">Your Project Next</span>
            <h2 class="cta-title" data-aos="fade-up">
                Ready to Create<br>
                <span class="text-gradient">Your Success Story?</span>
            </h2>
            <p class="cta-desc" data-aos="fade-up" data-aos-delay="100">
                Let's build something remarkable together. Every great project starts with a conversation.
            </p>
            <div class="flex-center gap-3" data-aos="fade-up" data-aos-delay="200" style="flex-wrap:wrap;">
                <a href="contact.php" class="btn btn-primary btn-lg">
                    Start Your Project
                    <img src="assets/images/portfolio/cta/arrow-icon.png" alt="" class="btn-icon">
                </a>
                <a href="pricing.php" class="btn btn-outline btn-lg">See Pricing</a>
            </div>
            
            <!-- Project Showcase Mini Gallery -->
            <div class="mini-gallery" data-aos="fade-up" data-aos-delay="300">
                <img src="assets/images/portfolio/mini/proj1.jpg" alt="">
                <img src="assets/images/portfolio/mini/proj2.jpg" alt="">
                <img src="assets/images/portfolio/mini/proj3.jpg" alt="">
                <img src="assets/images/portfolio/mini/proj4.jpg" alt="">
                <img src="assets/images/portfolio/mini/proj5.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- JavaScript for Portfolio Page -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    
    // ========================================
    // 3D Carousel Initialization
    // ========================================
    class Carousel3D {
        constructor() {
            this.carousel = document.getElementById('carousel3d');
            this.items = document.querySelectorAll('.carousel-item');
            this.prevBtn = document.querySelector('.carousel-control.prev');
            this.nextBtn = document.querySelector('.carousel-control.next');
            this.dots = document.querySelectorAll('.carousel-dots .dot');
            this.currentIndex = 0;
            this.totalItems = this.items.length;
            
            if (this.carousel) {
                this.init();
            }
        }
        
        init() {
            this.updateCarousel();
            
            this.prevBtn?.addEventListener('click', () => this.prevSlide());
            this.nextBtn?.addEventListener('click', () => this.nextSlide());
            
            this.dots.forEach((dot, index) => {
                dot.addEventListener('click', () => this.goToSlide(index));
            });
            
            // Auto rotate
            setInterval(() => this.nextSlide(), 5000);
        }
        
        updateCarousel() {
            this.items.forEach((item, index) => {
                item.classList.remove('active', 'prev', 'next');
                
                if (index === this.currentIndex) {
                    item.classList.add('active');
                } else if (index === (this.currentIndex - 1 + this.totalItems) % this.totalItems) {
                    item.classList.add('prev');
                } else if (index === (this.currentIndex + 1) % this.totalItems) {
                    item.classList.add('next');
                }
            });
            
            this.dots.forEach((dot, index) => {
                if (index === this.currentIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }
        
        nextSlide() {
            this.currentIndex = (this.currentIndex + 1) % this.totalItems;
            this.updateCarousel();
        }
        
        prevSlide() {
            this.currentIndex = (this.currentIndex - 1 + this.totalItems) % this.totalItems;
            this.updateCarousel();
        }
        
        goToSlide(index) {
            this.currentIndex = index;
            this.updateCarousel();
        }
    }
    
    // ========================================
    // Portfolio Filter with Animation
    // ========================================
    class PortfolioFilter {
        constructor() {
            this.filterBtns = document.querySelectorAll('.filter-btn');
            this.items = document.querySelectorAll('.portfolio-card');
            
            if (this.filterBtns.length) {
                this.init();
            }
        }
        
        init() {
            this.filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const filter = btn.getAttribute('data-filter');
                    
                    // Update active button
                    this.filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    
                    // Filter items with animation
                    this.items.forEach(item => {
                        const category = item.getAttribute('data-category');
                        
                        if (filter === 'all' || category === filter) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            }, 50);
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'scale(0.8)';
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });
        }
    }
    
    // ========================================
    // Lightbox Gallery
    // ========================================
    class Lightbox {
        constructor() {
            this.lightbox = document.getElementById('lightbox');
            this.image = document.getElementById('lightbox-image');
            this.title = document.getElementById('lightbox-title');
            this.desc = document.getElementById('lightbox-desc');
            this.closeBtn = document.querySelector('.lightbox-close');
            this.prevBtn = document.querySelector('.lightbox-prev');
            this.nextBtn = document.querySelector('.lightbox-next');
            this.currentIndex = 0;
            this.images = [];
            
            if (this.lightbox) {
                this.init();
            }
        }
        
        init() {
            // Collect all portfolio images
            document.querySelectorAll('.portfolio-card').forEach((card, index) => {
                const img = card.querySelector('.portfolio-img');
                const title = card.querySelector('.portfolio-title')?.textContent;
                const desc = card.querySelector('.portfolio-desc')?.textContent;
                
                if (img) {
                    this.images.push({
                        src: img.src,
                        title: title,
                        desc: desc
                    });
                    
                    // Add click event to open lightbox
                    card.querySelector('.overlay-icon')?.addEventListener('click', (e) => {
                        e.preventDefault();
                        this.open(index);
                    });
                }
            });
            
            this.closeBtn?.addEventListener('click', () => this.close());
            this.prevBtn?.addEventListener('click', () => this.prev());
            this.nextBtn?.addEventListener('click', () => this.next());
            
            // Close on background click
            this.lightbox.addEventListener('click', (e) => {
                if (e.target === this.lightbox) {
                    this.close();
                }
            });
        }
        
        open(index) {
            this.currentIndex = index;
            this.updateImage();
            this.lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
        
        close() {
            this.lightbox.classList.remove('active');
            document.body.style.overflow = '';
        }
        
        next() {
            this.currentIndex = (this.currentIndex + 1) % this.images.length;
            this.updateImage();
        }
        
        prev() {
            this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
            this.updateImage();
        }
        
        updateImage() {
            const img = this.images[this.currentIndex];
            this.image.src = img.src;
            this.title.textContent = img.title;
            this.desc.textContent = img.desc;
            
            // Update thumbnails
            const thumbnails = document.getElementById('lightbox-thumbnails');
            if (thumbnails) {
                thumbnails.innerHTML = '';
                this.images.forEach((img, index) => {
                    const thumb = document.createElement('img');
                    thumb.src = img.src;
                    thumb.classList.add('thumbnail');
                    if (index === this.currentIndex) {
                        thumb.classList.add('active');
                    }
                    thumb.addEventListener('click', () => this.open(index));
                    thumbnails.appendChild(thumb);
                });
            }
        }
    }
    
    // ========================================
    // Parallax Effect on Scroll
    // ========================================
    class ParallaxEffect {
        constructor() {
            this.parallaxImages = document.querySelectorAll('.parallax-img');
            
            if (this.parallaxImages.length) {
                window.addEventListener('scroll', () => this.updateParallax());
            }
        }
        
        updateParallax() {
            this.parallaxImages.forEach(img => {
                const speed = 0.1;
                const rect = img.getBoundingClientRect();
                
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    const yPos = (rect.top - window.innerHeight / 2) * speed;
                    img.style.transform = `translateY(${yPos}px) scale(1.1)`;
                }
            });
        }
    }
    
    // ========================================
    // Floating 3D Elements Animation
    // ========================================
    class Floating3D {
        constructor() {
            this.floats = document.querySelectorAll('.float-3d');
            
            if (this.floats.length) {
                this.init3D();
            }
        }
        
        init3D() {
            document.addEventListener('mousemove', (e) => {
                const mouseX = e.clientX / window.innerWidth - 0.5;
                const mouseY = e.clientY / window.innerHeight - 0.5;
                
                this.floats.forEach((float, index) => {
                    const depth = (index + 1) * 20;
                    const x = mouseX * depth;
                    const y = mouseY * depth;
                    
                    float.style.transform = `translate3d(${x}px, ${y}px, ${depth}px) rotateY(${x * 0.5}deg) rotateX(${y * 0.5}deg)`;
                });
            });
        }
    }
    
    // ========================================
    // Particles.js Background
    // ========================================
    function initParticles() {
        if (document.getElementById('particles-js')) {
            particlesJS('particles-js', {
                particles: {
                    number: { value: 80, density: { enable: true, value_area: 800 } },
                    color: { value: '#5DD62C' },
                    shape: { type: 'circle' },
                    opacity: { value: 0.3, random: true },
                    size: { value: 3, random: true },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: '#5DD62C',
                        opacity: 0.2,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 2,
                        direction: 'none',
                        random: true,
                        straight: false,
                        out_mode: 'out',
                        bounce: false
                    }
                },
                interactivity: {
                    detect_on: 'canvas',
                    events: {
                        onhover: { enable: true, mode: 'grab' },
                        onclick: { enable: true, mode: 'push' },
                        resize: true
                    },
                    modes: {
                        grab: { distance: 200, line_linked: { opacity: 0.5 } },
                        push: { particles_nb: 4 }
                    }
                },
                retina_detect: true
            });
        }
    }
    
    // ========================================
    // Load More Projects
    // ========================================
    document.getElementById('loadMoreBtn')?.addEventListener('click', function() {
        const btn = this;
        btn.classList.add('loading');
        btn.innerHTML = '<span>Loading...</span><span class="btn-spinner"></span>';
        
        // Simulate loading more projects
        setTimeout(() => {
            btn.classList.remove('loading');
            btn.innerHTML = '<span>Load More Projects</span><img src="assets/images/portfolio/load-more-icon.png" alt="" class="btn-icon-spin">';
            alert('More projects would load here. In production, this would fetch from server.');
        }, 1500);
    });
    
    // ========================================
    // Save Project Function
    // ========================================
    window.saveProject = function(index) {
        const btn = event.currentTarget;
        const icon = btn.querySelector('.save-icon');
        
        if (icon.textContent === '🤍') {
            icon.textContent = '❤️';
            icon.style.color = '#ff4444';
            
            // Show notification
            const notification = document.createElement('div');
            notification.className = 'notification';
            notification.textContent = 'Project saved to favorites!';
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 2000);
        } else {
            icon.textContent = '🤍';
            icon.style.color = '';
        }
    };
    
    // ========================================
    // Share Project
    // ========================================
    window.shareProject = function(title) {
        if (navigator.share) {
            navigator.share({
                title: title,
                text: 'Check out this amazing project from CIN CREATIVES!',
                url: window.location.href
            });
        } else {
            alert('Link copied to clipboard!');
        }
    };
    
    // ========================================
    // Initialize All Components
    // ========================================
    new Carousel3D();
    new PortfolioFilter();
    new Lightbox();
    new ParallaxEffect();
    new Floating3D();
    initParticles();
    
    // Initialize AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    }
});
</script>