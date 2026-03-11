/**
 * CIN CREATIVES — ANIMATIONS JS
 * GSAP page animations, scroll reveals, hero entrance, marquee,
 * service card reveals, and scroll-triggered sequences
 */

'use strict';

document.addEventListener('DOMContentLoaded', () => {
  if (typeof gsap === 'undefined') return;
  if (typeof ScrollTrigger !== 'undefined') gsap.registerPlugin(ScrollTrigger);

  /* ======================================================
     HERO ENTRANCE
  ====================================================== */
  const heroEl = document.querySelector('.hero-content');
  if (heroEl) {
    const tl = gsap.timeline({ delay: 1.8 });
    tl.from('.hero-eyebrow', { opacity: 0, y: 20, duration: 0.6, ease: 'power2.out' })
      .from('.hero-title', { opacity: 0, y: 40, duration: 0.8, ease: 'power3.out' }, '-=0.2')
      .from('.hero-description', { opacity: 0, y: 25, duration: 0.7, ease: 'power2.out' }, '-=0.4')
      .from('.hero-actions', { opacity: 0, y: 20, duration: 0.6, ease: 'power2.out' }, '-=0.3')
      .from('.hero-stats .stat-item', { opacity: 0, y: 20, stagger: 0.12, duration: 0.5, ease: 'power2.out' }, '-=0.2');
  }

  /* ======================================================
     SCROLL-TRIGGERED CARD REVEALS
  ====================================================== */
  if (typeof ScrollTrigger !== 'undefined') {
    // Services
    const serviceCards = document.querySelectorAll('.service-card');
    if (serviceCards.length) {
      gsap.from(serviceCards, {
        opacity: 0, y: 50, stagger: 0.1, duration: 0.7, ease: 'power2.out',
        scrollTrigger: { trigger: serviceCards[0], start: 'top 80%' }
      });
    }

    // Portfolio cards
    const portCards = document.querySelectorAll('.portfolio-card');
    if (portCards.length) {
      gsap.from(portCards, {
        opacity: 0, scale: 0.95, stagger: 0.1, duration: 0.6, ease: 'back.out(1.2)',
        scrollTrigger: { trigger: portCards[0], start: 'top 80%' }
      });
    }

    // Pricing cards
    const priceCards = document.querySelectorAll('.pricing-card');
    if (priceCards.length) {
      gsap.from(priceCards, {
        opacity: 0, y: 40, stagger: 0.15, duration: 0.7, ease: 'power2.out',
        scrollTrigger: { trigger: priceCards[0], start: 'top 80%' }
      });
    }

    // Counter section reveal
    const counterGrid = document.querySelector('.counter-grid');
    if (counterGrid) {
      gsap.from(counterGrid.children, {
        opacity: 0, y: 30, stagger: 0.15, duration: 0.6,
        scrollTrigger: { trigger: counterGrid, start: 'top 80%' }
      });
    }

    // Blog cards
    const blogCards = document.querySelectorAll('.blog-card');
    if (blogCards.length) {
      gsap.from(blogCards, {
        opacity: 0, y: 40, stagger: 0.12, duration: 0.6, ease: 'power2.out',
        scrollTrigger: { trigger: blogCards[0], start: 'top 80%' }
      });
    }

    // Team cards
    const teamCards = document.querySelectorAll('.team-card');
    if (teamCards.length) {
      gsap.from(teamCards, {
        opacity: 0, scale: 0.92, stagger: 0.12, duration: 0.6, ease: 'back.out(1.5)',
        scrollTrigger: { trigger: teamCards[0], start: 'top 80%' }
      });
    }

    // Feature items
    const featureItems = document.querySelectorAll('.feature-item');
    if (featureItems.length) {
      gsap.from(featureItems, {
        opacity: 0, x: -30, stagger: 0.1, duration: 0.5, ease: 'power2.out',
        scrollTrigger: { trigger: featureItems[0], start: 'top 80%' }
      });
    }

    // CTA sections
    const ctaSections = document.querySelectorAll('.cta-section');
    ctaSections.forEach(cta => {
      gsap.from(cta.children, {
        opacity: 0, y: 30, stagger: 0.15, duration: 0.7,
        scrollTrigger: { trigger: cta, start: 'top 80%' }
      });
    });
  }

  /* ======================================================
     GSAP MARQUEE (if not CSS marquee)
  ====================================================== */
  const marqueeTrack = document.querySelector('.marquee-track');
  if (marqueeTrack) {
    const items = marqueeTrack.innerHTML;
    marqueeTrack.innerHTML = items + items; // Duplicate for seamless loop
  }

  /* ======================================================
     PAGE SECTION PARALLAX (lightweight)
  ====================================================== */
  if (typeof ScrollTrigger !== 'undefined') {
    gsap.utils.toArray('.parallax-inner').forEach(el => {
      if (window.matchMedia('(max-width: 768px)').matches) return;
      gsap.to(el, {
        y: () => el.dataset.parallax ? parseFloat(el.dataset.parallax) : -60,
        ease: 'none',
        scrollTrigger: { trigger: el, start: 'top bottom', end: 'bottom top', scrub: 1 }
      });
    });
  }

  /* ======================================================
     TYPED TEXT INIT
  ====================================================== */
  const typedEl = document.getElementById('typed-text');
  if (typedEl && typeof window.initTyped === 'function') {
    const words = typedEl.dataset.words ? JSON.parse(typedEl.dataset.words) : ['Innovate.', 'Create.', 'Dominate.'];
    window.initTyped(typedEl, words, 80, 2200);
  }

  /* ======================================================
     HOVER GLOW ON SERVICE ICONS
  ====================================================== */
  document.querySelectorAll('.service-icon').forEach(icon => {
    icon.addEventListener('mouseenter', function() {
      gsap.to(this, { scale: 1.1, duration: 0.3, ease: 'back.out(2)' });
    });
    icon.addEventListener('mouseleave', function() {
      gsap.to(this, { scale: 1, duration: 0.3, ease: 'power2.out' });
    });
  });

  /* ======================================================
     NAVBAR LINKS HOVER EFFECT
  ====================================================== */
  document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('mouseenter', function() {
      gsap.to(this, { y: -2, duration: 0.2, ease: 'power2.out' });
    });
    link.addEventListener('mouseleave', function() {
      gsap.to(this, { y: 0, duration: 0.2, ease: 'power2.out' });
    });
  });

  /* ======================================================
     SCROLL PROGRESS INDICATOR
  ====================================================== */
  const progressBar = document.createElement('div');
  progressBar.id = 'scroll-progress';
  progressBar.style.cssText = `
    position: fixed; top: 0; left: 0; height: 2px; z-index: 10000;
    background: linear-gradient(90deg, #337418, #5DD62C);
    width: 0%; transition: width 0.1s linear; pointer-events: none;
  `;
  document.body.appendChild(progressBar);

  window.addEventListener('scroll', () => {
    const scrollTop = window.scrollY;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const progress = (scrollTop / docHeight) * 100;
    progressBar.style.width = progress + '%';
  }, { passive: true });

});
