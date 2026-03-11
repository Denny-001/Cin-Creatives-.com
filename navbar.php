<?php
// CIN CREATIVES — NAVBAR INCLUDE
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$base = '/cincreatives/';
$nav_links = [
  ['href' => $base . 'index.php',     'label' => 'Home',      'page' => 'index'],
  ['href' => $base . 'about.php',     'label' => 'About',     'page' => 'about'],
  ['href' => $base . 'services.php',  'label' => 'Services',  'page' => 'services'],
  ['href' => $base . 'portfolio.php', 'label' => 'Portfolio', 'page' => 'portfolio'],
  ['href' => $base . 'contact.php', 'label' => 'Contact', 'page' => 'contact'],
  ['href' => $base . 'blog.php',      'label' => 'Blog',      'page' => 'blog'],
];
?>
<!-- ======= NAVBAR ======= -->
<nav class="navbar" id="navbar" role="navigation" aria-label="Main navigation">
  <div class="container">
    <div class="navbar-inner">

      <!-- Logo -->
      <a href="<?= $base ?>index.php" class="navbar-logo" aria-label="CIN CREATIVES Home">
        <div class="logo-icon" aria-hidden="true">CC</div>
        <span class="logo-text">CIN<span>CREATIVES</span></span>
      </a>

      <!-- Mobile Toggle -->
      <button class="navbar-toggle" id="navbar-toggle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbar-menu">
        <span></span><span></span><span></span>
      </button>

      <!-- Menu -->
      <ul class="navbar-menu" id="navbar-menu" role="menubar">
        <?php foreach ($nav_links as $link): ?>
        <li role="none">
          <a href="<?= $link['href'] ?>"
             class="nav-link<?= $current_page === $link['page'] ? ' active' : '' ?>"
             role="menuitem"
             <?= $current_page === $link['page'] ? 'aria-current="page"' : '' ?>>
            <?= htmlspecialchars($link['label']) ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>

      <!-- CTA -->
      <div class="navbar-actions">
        <a href="<?= $base ?>contact.php" class="btn btn-primary btn-sm" id="nav-cta-btn">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
          </svg>
          Get a Quote
        </a>
      </div>

    </div>
  </div>
</nav>
<!-- Mobile overlay -->
<div class="navbar-overlay" id="navbar-overlay" aria-hidden="true"></div>