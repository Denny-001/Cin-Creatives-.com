<?php
// CIN CREATIVES — HEADER INCLUDE
// Detects current page for active nav states
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$site_url = 'http://' . $_SERVER['HTTP_HOST'] . '/cincreatives/';
$asset_url = $site_url . 'assets/';

// Page meta configuration
$pages_meta = [
  'index'     => ['title' => 'CIN CREATIVES — Premium Digital Agency | Web, AI & Design',
                  'desc'  => 'CIN CREATIVES is a premier digital agency offering web development, AI automation, e-commerce, software development, graphic design, and online advertising services.'],
  'about'     => ['title' => 'About Us — CIN CREATIVES | Our Story & Team',
                  'desc'  => 'Learn about CIN CREATIVES, our mission, team of experts, and why top businesses trust us for web development, design, and AI automation solutions.'],
  'services'  => ['title' => 'Our Services — CIN CREATIVES | Full-Stack Digital Solutions',
                  'desc'  => 'Explore our full range of digital services including web development, redesign, e-commerce, software dev, AI automation, graphic design, and social media management.'],
  'portfolio' => ['title' => 'Portfolio — CIN CREATIVES | Our Work & Case Studies',
                  'desc'  => 'Browse CIN CREATIVES portfolio showcasing premium web development, design, and digital marketing projects for clients across various industries.'],
  'blog'      => ['title' => 'Blog & Insights — CIN CREATIVES | Digital Agency Expertise',
                  'desc'  => 'Stay updated with CIN CREATIVES blog featuring insights on web development, AI automation, digital design trends, and online marketing strategies.'],
  'Contact'   => ['title' => 'Contact Us — CIN CREATIVES | Get a Free Consultation',
                  'desc'  => 'Contact CIN CREATIVES to discuss your project. Get a free consultation for web development, design, AI automation, or digital marketing services.'],
];

$meta = $pages_meta[$current_page] ?? $pages_meta['index'];
$og_image = $site_url . 'assets/images/og-image.jpg';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Primary Meta -->
  <title><?= htmlspecialchars($meta['title']) ?></title>
  <meta name="description" content="<?= htmlspecialchars($meta['desc']) ?>">
  <meta name="keywords" content="web development, web design, e-commerce, AI automation, software development, graphic design, social media, digital agency">
  <meta name="author" content="CIN CREATIVES">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="<?= $site_url . ($current_page === 'index' ? '' : $current_page . '.php') ?>">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $site_url ?>">
  <meta property="og:title" content="<?= htmlspecialchars($meta['title']) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($meta['desc']) ?>">
  <meta property="og:image" content="<?= $og_image ?>">
  <meta property="og:site_name" content="CIN CREATIVES">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($meta['title']) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($meta['desc']) ?>">
  <meta name="twitter:image" content="<?= $og_image ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="<?= $asset_url ?>images/favicon.svg">
  <link rel="apple-touch-icon" href="<?= $asset_url ?>images/apple-touch-icon.png">

  <!-- Preconnect for performance -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://unpkg.com">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?= $asset_url ?>css/style.css">
  <link rel="stylesheet" href="<?= $asset_url ?>css/animations.css">
  <link rel="stylesheet" href="<?= $asset_url ?>css/motion-bg.css">
  <link rel="stylesheet" href="<?= $asset_url ?>css/responsive.css">

  <!-- JSON-LD Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "CIN CREATIVES",
    "description": "<?= addslashes($meta['desc']) ?>",
    "url": "<?= $site_url ?>",
    "logo": "<?= $site_url ?>assets/images/logo.png",
    "contactPoint": {
      "@type": "ContactPoint",
      "contactType": "customer service",
      "availableLanguage": ["English"]
    },
    "sameAs": [
      "https://facebook.com/cincreatives",
      "https://instagram.com/cincreatives",
      "https://twitter.com/cincreatives",
      "https://linkedin.com/company/cincreatives"
    ],
    "serviceArea": {
      "@type": "Place",
      "name": "Global"
    },
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Digital Agency Services",
      "itemListElement": [
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Web Development"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "E-commerce Development"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "AI Automation"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Graphic Design"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Social Media Management"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Online Advertising"}}
      ]
    }
  }
  </script>
</head>
<body class="page-transition">

<!-- Page Loader -->
<div id="page-loader">
  <div class="loader-logo">CIN<span>CREATIVES</span></div>
  <div class="loader-bar"><div class="loader-bar-fill"></div></div>
</div>

<!-- Custom Cursor -->
<div class="cursor" id="cursor"></div>
<div class="cursor-follower" id="cursor-follower"></div>

<!-- Back to Top -->
<button id="back-to-top" aria-label="Back to top">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>
  </svg>
</button>