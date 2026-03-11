/**
 * CIN CREATIVES — MAIN JS
 * Core interactions: cursor, navbar, smooth scroll, counters,
 * accordions, tabs, filter, ripple, back-to-top, AOS init, loader
 */

'use strict';

/* ======================================================
   PAGE LOADER
====================================================== */
window.addEventListener('load', () => {
  const loader = document.getElementById('page-loader');
  if (loader) {
    setTimeout(() => { loader.classList.add('loaded'); }, 1600);
  }
});

/* ======================================================
   AOS INIT
====================================================== */
document.addEventListener('DOMContentLoaded', () => {
  if (typeof AOS !== 'undefined') {
    AOS.init({
      duration: 700,
      easing: 'ease-out-cubic',
      once: true,
      offset: 80,
      delay: 0,
    });
  }
});

/* ======================================================
   CUSTOM CURSOR
====================================================== */
(function initCursor() {
  const cursor = document.getElementById('cursor');
  const follower = document.getElementById('cursor-follower');
  if (!cursor || !follower) return;
  if (window.matchMedia('(pointer: coarse)').matches) {
    cursor.style.display = 'none';
    follower.style.display = 'none';
    document.body.style.cursor = 'auto';
    return;
  }

  let mx = 0, my = 0, fx = 0, fy = 0;
  document.addEventListener('mousemove', e => {
    mx = e.clientX; my = e.clientY;
    cursor.style.left = mx + 'px';
    cursor.style.top = my + 'px';
  });

  function followCursor() {
    fx += (mx - fx) * 0.1;
    fy += (my - fy) * 0.1;
    follower.style.left = fx + 'px';
    follower.style.top = fy + 'px';
    requestAnimationFrame(followCursor);
  }
  followCursor();

  // Cursor states
  const hoverEls = document.querySelectorAll('a, button, .btn, .service-card, .portfolio-card, label, input, textarea, select, .filter-btn, .tab-btn, .accordion-header');
  hoverEls.forEach(el => {
    el.addEventListener('mouseenter', () => {
      cursor.style.width = '8px';
      cursor.style.height = '8px';
      follower.style.width = '60px';
      follower.style.height = '60px';
      follower.style.borderColor = 'rgba(93,214,44,0.6)';
    });
    el.addEventListener('mouseleave', () => {
      cursor.style.width = '14px';
      cursor.style.height = '14px';
      follower.style.width = '40px';
      follower.style.height = '40px';
      follower.style.borderColor = 'rgba(93,214,44,0.5)';
    });
  });

  document.addEventListener('mousedown', () => {
    cursor.style.transform = 'translate(-50%,-50%) scale(0.7)';
  });
  document.addEventListener('mouseup', () => {
    cursor.style.transform = 'translate(-50%,-50%) scale(1)';
  });
})();

/* ======================================================
   NAVBAR
====================================================== */
(function initNavbar() {
  const navbar = document.getElementById('navbar');
  const toggle = document.getElementById('navbar-toggle');
  const menu = document.getElementById('navbar-menu');
  const overlay = document.getElementById('navbar-overlay');

  if (!navbar) return;

  // Scroll state
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 60);
    const btt = document.getElementById('back-to-top');
    if (btt) btt.classList.toggle('visible', window.scrollY > 400);
  }, { passive: true });

  // Mobile toggle
  if (toggle && menu && overlay) {
    toggle.addEventListener('click', () => {
      const isOpen = menu.classList.toggle('open');
      toggle.classList.toggle('open', isOpen);
      overlay.classList.toggle('active', isOpen);
      toggle.setAttribute('aria-expanded', isOpen);
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    overlay.addEventListener('click', closeMobileMenu);
    document.addEventListener('keydown', e => {
      if (e.key === 'Escape') closeMobileMenu();
    });

    function closeMobileMenu() {
      menu.classList.remove('open');
      toggle.classList.remove('open');
      overlay.classList.remove('active');
      toggle.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    }
  }
})();

/* ======================================================
   BACK TO TOP
====================================================== */
(function initBackToTop() {
  const btn = document.getElementById('back-to-top');
  if (!btn) return;
  btn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
})();

/* ======================================================
   SMOOTH SCROLL FOR ANCHOR LINKS
====================================================== */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    const targetId = this.getAttribute('href');
    if (targetId === '#') return;
    const target = document.querySelector(targetId);
    if (target) {
      e.preventDefault();
      const offset = 80;
      const top = target.getBoundingClientRect().top + window.scrollY - offset;
      window.scrollTo({ top, behavior: 'smooth' });
    }
  });
});

/* ======================================================
   ANIMATED COUNTERS
====================================================== */
(function initCounters() {
  const counters = document.querySelectorAll('.counter-val[data-target]');
  if (!counters.length) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el = entry.target;
      const target = parseFloat(el.dataset.target);
      const suffix = el.dataset.suffix || '';
      const prefix = el.dataset.prefix || '';
      const duration = 2000;
      const isDecimal = target % 1 !== 0;
      const start = performance.now();

      function update(now) {
        const elapsed = now - start;
        const progress = Math.min(elapsed / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        const val = isDecimal
          ? (eased * target).toFixed(1)
          : Math.floor(eased * target);
        el.textContent = prefix + val + suffix;
        if (progress < 1) requestAnimationFrame(update);
        else el.textContent = prefix + target + suffix;
      }
      requestAnimationFrame(update);
      observer.unobserve(el);
    });
  }, { threshold: 0.5 });

  counters.forEach(c => observer.observe(c));
})();

/* ======================================================
   ACCORDION
====================================================== */
(function initAccordion() {
  document.querySelectorAll('.accordion-header').forEach(header => {
    header.addEventListener('click', function() {
      const body = this.nextElementSibling;
      const isOpen = body.classList.contains('open');

      // Close siblings
      const parent = this.closest('.accordion');
      if (parent) {
        parent.querySelectorAll('.accordion-body.open').forEach(b => {
          b.classList.remove('open');
          b.previousElementSibling.classList.remove('active');
        });
      }

      if (!isOpen) {
        body.classList.add('open');
        this.classList.add('active');
      }
    });
  });
})();

/* ======================================================
   TABS
====================================================== */
(function initTabs() {
  document.querySelectorAll('.tabs-nav').forEach(nav => {
    nav.querySelectorAll('.tab-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        const target = this.dataset.tab;
        const container = this.closest('section') || this.closest('.tabs-container') || document;

        nav.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        container.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('active'));
        const pane = container.querySelector(`#${target}`);
        if (pane) {
          pane.classList.add('active');
          if (typeof AOS !== 'undefined') AOS.refresh();
        }
      });
    });
  });
})();

/* ======================================================
   PORTFOLIO / BLOG FILTER
====================================================== */
(function initFilter() {
  document.querySelectorAll('.filter-btns').forEach(container => {
    const btnList = container.querySelectorAll('.filter-btn');
    const grid = document.querySelector(container.dataset.grid || '.filter-grid');
    if (!grid) return;

    btnList.forEach(btn => {
      btn.addEventListener('click', function() {
        btnList.forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        const filter = this.dataset.filter;

        grid.querySelectorAll('[data-category]').forEach(item => {
          const cat = item.dataset.category;
          if (filter === 'all' || cat === filter) {
            item.style.display = '';
            item.animate([{opacity:0,transform:'scale(0.96)'},{opacity:1,transform:'scale(1)'}], {duration:300, fill:'both'});
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  });
})();

/* ======================================================
   RIPPLE EFFECT ON BUTTONS
====================================================== */
(function initRipple() {
  document.querySelectorAll('.btn, .btn-ripple').forEach(btn => {
    btn.addEventListener('click', function(e) {
      const rect = this.getBoundingClientRect();
      const ripple = document.createElement('span');
      const size = Math.max(rect.width, rect.height);
      ripple.className = 'ripple-effect';
      ripple.style.cssText = `
        width: ${size}px; height: ${size}px;
        left: ${e.clientX - rect.left - size / 2}px;
        top: ${e.clientY - rect.top - size / 2}px;
      `;
      this.appendChild(ripple);
      setTimeout(() => ripple.remove(), 700);
    });
  });
})();

/* ======================================================
   TILT EFFECT
====================================================== */
(function initTilt() {
  if (window.matchMedia('(pointer: coarse)').matches) return;
  document.querySelectorAll('.tilt-card').forEach(card => {
    card.addEventListener('mousemove', function(e) {
      const rect = this.getBoundingClientRect();
      const cx = rect.left + rect.width / 2;
      const cy = rect.top + rect.height / 2;
      const rx = ((e.clientY - cy) / (rect.height / 2)) * -8;
      const ry = ((e.clientX - cx) / (rect.width / 2)) * 8;
      this.style.transform = `perspective(1000px) rotateX(${rx}deg) rotateY(${ry}deg) translateZ(4px)`;
    });
    card.addEventListener('mouseleave', function() {
      this.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateZ(0)';
    });
  });
})();

/* ======================================================
   PROGRESS BARS
====================================================== */
(function initProgressBars() {
  const bars = document.querySelectorAll('.progress-fill[data-width]');
  if (!bars.length) return;
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.width = entry.target.dataset.width + '%';
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.4 });
  bars.forEach(b => observer.observe(b));
})();

/* ======================================================
   STAGGER OBSERVERS
====================================================== */
(function initStagger() {
  const groups = document.querySelectorAll('.stagger-children');
  if (!groups.length) return;
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animated');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });
  groups.forEach(g => observer.observe(g));
})();

/* ======================================================
   TYPED TEXT EFFECT
====================================================== */
window.initTyped = function(el, words, speed = 80, pause = 2000) {
  if (!el) return;
  let wordIndex = 0, charIndex = 0, deleting = false;
  const cursor = document.createElement('span');
  cursor.className = 'typed-cursor';
  el.parentNode.insertBefore(cursor, el.nextSibling);

  function type() {
    const word = words[wordIndex];
    if (!deleting) {
      el.textContent = word.slice(0, ++charIndex);
      if (charIndex === word.length) {
        deleting = true;
        return setTimeout(type, pause);
      }
    } else {
      el.textContent = word.slice(0, --charIndex);
      if (charIndex === 0) {
        deleting = false;
        wordIndex = (wordIndex + 1) % words.length;
      }
    }
    setTimeout(type, deleting ? speed / 2 : speed);
  }
  type();
};

/* ======================================================
   CONTACT FORM HANDLER
====================================================== */
(function initContactForm() {
  const form = document.getElementById('contact-form');
  if (!form) return;

  form.addEventListener('submit', async function(e) {
    e.preventDefault();
    const btn = form.querySelector('[type="submit"]');
    const originalText = btn.innerHTML;
    btn.disabled = true;
    btn.innerHTML = '<svg class="spin-slow" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg> Sending...';

    // Frontend validation
    const name = form.querySelector('#cf-name')?.value.trim();
    const email = form.querySelector('#cf-email')?.value.trim();
    const message = form.querySelector('#cf-message')?.value.trim();
    const emailRx = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!name || name.length < 2) { showToast('Please enter your full name.', 'error'); reset(); return; }
    if (!email || !emailRx.test(email)) { showToast('Please enter a valid email address.', 'error'); reset(); return; }
    if (!message || message.length < 10) { showToast('Please enter a message (min 10 chars).', 'error'); reset(); return; }

    // Simulate sending (replace with actual fetch to contact-handler.php)
    await new Promise(r => setTimeout(r, 1500));
    showToast('✓ Message sent! We\'ll reply shortly.', 'success');
    form.reset();
    reset();

    function reset() {
      btn.disabled = false;
      btn.innerHTML = originalText;
    }
  });
})();

/* ======================================================
   TOAST NOTIFICATION
====================================================== */
window.showToast = function(msg, type = 'success') {
  const existing = document.querySelector('.toast');
  if (existing) existing.remove();
  const toast = document.createElement('div');
  toast.className = `toast ${type}`;
  toast.textContent = msg;
  document.body.appendChild(toast);
  requestAnimationFrame(() => {
    requestAnimationFrame(() => toast.classList.add('show'));
  });
  setTimeout(() => {
    toast.classList.remove('show');
    setTimeout(() => toast.remove(), 400);
  }, 4000);
};

/* ======================================================
   GSAP SCROLL TRIGGER (hero elements)
====================================================== */
document.addEventListener('DOMContentLoaded', () => {
  if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
  gsap.registerPlugin(ScrollTrigger);

  // Parallax sections
  gsap.utils.toArray('.parallax-bg-section').forEach(section => {
    if (window.matchMedia('(max-width: 768px)').matches) return;
    gsap.to(section, {
      backgroundPositionY: '30%',
      ease: 'none',
      scrollTrigger: { trigger: section, start: 'top bottom', end: 'bottom top', scrub: true }
    });
  });

  // Animate section headings
  gsap.utils.toArray('.section-title').forEach(title => {
    gsap.from(title, {
      opacity: 0, y: 30,
      scrollTrigger: { trigger: title, start: 'top 88%', end: 'top 50%', scrub: false },
      duration: 0.8, ease: 'power2.out'
    });
  });
});
// Floating Shapes Animation
document.addEventListener('DOMContentLoaded', function() {
    const floatingShapes = document.querySelectorAll('.js-floating-shapes .abs-shape');
    
    if (floatingShapes.length) {
        floatingShapes.forEach((shape, index) => {
            // Random starting positions
            const randomX = Math.random() * 100 - 50;
            const randomY = Math.random() * 100 - 50;
            const randomRotate = Math.random() * 360;
            
            shape.style.transform = `translate(${randomX}px, ${randomY}px) rotate(${randomRotate}deg)`;
            
            // Animate with GSAP if available
            if (window.gsap) {
                gsap.to(shape, {
                    x: randomX * 2,
                    y: randomY * 2,
                    rotation: randomRotate + 180,
                    duration: 20 + index * 2,
                    repeat: -1,
                    yoyo: true,
                    ease: "sine.inOut"
                });
            }
        });
    }
});