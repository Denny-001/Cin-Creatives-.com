/**
 * CIN CREATIVES — MOTION BACKGROUNDS JS
 * Manages: canvas particles, parallax scroll, floating shapes,
 * and section-specific motion effects
 */

'use strict';

/* ======================================================
   CANVAS PARTICLE SYSTEM (reusable)
====================================================== */
class ParticleCanvas {
  constructor(canvas, options = {}) {
    this.canvas = canvas;
    this.ctx = canvas.getContext('2d');
    this.opts = Object.assign({
      count: 60, speed: 0.3, size: 1.5, opacity: 0.5,
      color: '#5DD62C', connect: true, connectDist: 120,
    }, options);
    this.particles = [];
    this.mouse = { x: -999, y: -999 };
    this.raf = null;
    this.init();
  }

  resize() {
    const parent = this.canvas.parentElement;
    this.canvas.width = parent.offsetWidth;
    this.canvas.height = parent.offsetHeight;
  }

  init() {
    this.resize();
    this.particles = [];
    for (let i = 0; i < this.opts.count; i++) {
      this.particles.push({
        x: Math.random() * this.canvas.width,
        y: Math.random() * this.canvas.height,
        vx: (Math.random() - 0.5) * this.opts.speed,
        vy: (Math.random() - 0.5) * this.opts.speed,
        r:  Math.random() * this.opts.size + 0.5,
        o:  Math.random() * this.opts.opacity * 0.5 + this.opts.opacity * 0.5,
      });
    }

    window.addEventListener('resize', () => this.resize(), { passive: true });
    this.animate();
  }

  animate() {
    const { ctx, canvas, opts } = this;
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    this.particles.forEach((p, i) => {
      p.x += p.vx;
      p.y += p.vy;

      if (p.x < 0 || p.x > canvas.width) p.vx *= -1;
      if (p.y < 0 || p.y > canvas.height) p.vy *= -1;

      // Draw
      ctx.beginPath();
      ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
      ctx.fillStyle = opts.color;
      ctx.globalAlpha = p.o;
      ctx.fill();

      // Connect
      if (opts.connect) {
        for (let j = i + 1; j < this.particles.length; j++) {
          const q = this.particles[j];
          const dx = p.x - q.x, dy = p.y - q.y;
          const dist = Math.sqrt(dx*dx + dy*dy);
          if (dist < opts.connectDist) {
            ctx.beginPath();
            ctx.moveTo(p.x, p.y);
            ctx.lineTo(q.x, q.y);
            ctx.strokeStyle = opts.color;
            ctx.globalAlpha = (1 - dist / opts.connectDist) * 0.15;
            ctx.lineWidth = 0.5;
            ctx.stroke();
          }
        }
      }
    });

    ctx.globalAlpha = 1;
    this.raf = requestAnimationFrame(this.animate.bind(this));
  }

  destroy() {
    if (this.raf) cancelAnimationFrame(this.raf);
  }
}

/* ======================================================
   INIT ALL PARTICLE CANVASES
====================================================== */
(function initParticleCanvases() {
  document.querySelectorAll('.particle-canvas[data-particles]').forEach(canvas => {
    if (window.matchMedia('(max-width: 768px)').matches) return;
    new ParticleCanvas(canvas, {
      count: parseInt(canvas.dataset.count || '50'),
      speed: parseFloat(canvas.dataset.speed || '0.3'),
      color: canvas.dataset.color || '#5DD62C',
      connect: canvas.dataset.connect !== 'false',
    });
  });
})();

/* ======================================================
   PARALLAX SCROLL ENGINE
====================================================== */
(function initParallax() {
  if (window.matchMedia('(max-width: 768px)').matches) return;

  const sections = document.querySelectorAll('.parallax-js');
  if (!sections.length) return;

  function updateParallax() {
    sections.forEach(section => {
      const rect = section.getBoundingClientRect();
      const speed = parseFloat(section.dataset.parallaxSpeed || '0.3');
      const offset = rect.top * speed;
      section.style.backgroundPositionY = `calc(50% + ${offset}px)`;
    });
  }

  window.addEventListener('scroll', updateParallax, { passive: true });
  updateParallax();
})();

/* ======================================================
   FLOATING ABSTRACT SHAPES — JS-driven
====================================================== */
(function initFloatingShapes() {
  const containers = document.querySelectorAll('.js-floating-shapes');
  containers.forEach(container => {
    const shapes = container.querySelectorAll('.abs-shape');
    let tick = 0;

    function move() {
      tick++;
      shapes.forEach((shape, i) => {
        const amp = 20 + i * 8;
        const freq = 0.0008 + i * 0.0003;
        const phase = i * Math.PI * 0.7;
        const x = Math.sin(tick * freq + phase) * amp;
        const y = Math.cos(tick * freq * 0.7 + phase) * (amp * 0.6);
        shape.style.transform = `translate(${x}px, ${y}px)`;
      });
      requestAnimationFrame(move);
    }
    requestAnimationFrame(move);
  });
})();

/* ======================================================
   VIDEO BACKGROUND — PERFORMANCE MANAGEMENT
====================================================== */
(function initVideoBgs() {
  const videos = document.querySelectorAll('.bg-video');
  if (!videos.length) return;

  // Pause videos when out of viewport
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.play().catch(() => {});
      } else {
        entry.target.pause();
      }
    });
  }, { threshold: 0.1 });

  videos.forEach(v => {
    v.muted = true;
    v.loop = true;
    v.playsInline = true;
    observer.observe(v);
  });
})();

/* ======================================================
   SECTION ENTRANCE GLOW EFFECT
====================================================== */
(function initSectionGlow() {
  const sections = document.querySelectorAll('.motion-gradient, .aurora-bg, .shapes-bg-section');
  if (!sections.length) return;

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      entry.target.style.setProperty('--glow-intensity', entry.isIntersecting ? '1' : '0');
    });
  }, { threshold: 0.3 });

  sections.forEach(s => observer.observe(s));
})();

/* ======================================================
   DOT GRID MOUSE PARALLAX
====================================================== */
(function initDotGridParallax() {
  const section = document.querySelector('.dot-grid-bg');
  if (!section || window.matchMedia('(max-width: 768px)').matches) return;

  document.addEventListener('mousemove', e => {
    const x = (e.clientX / window.innerWidth - 0.5) * 12;
    const y = (e.clientY / window.innerHeight - 0.5) * 12;
    section.style.backgroundPositionX = `${x}px`;
    section.style.backgroundPositionY = `${y}px`;
  }, { passive: true });
})();

/* ======================================================
   AURORA LAYER MOUSE-TRACK
====================================================== */
(function initAuroraTrack() {
  if (window.matchMedia('(max-width: 768px)').matches) return;
  const layers = document.querySelectorAll('.aurora-layer');
  if (!layers.length) return;

  let targetX = 0, targetY = 0, currentX = 0, currentY = 0;

  document.addEventListener('mousemove', e => {
    targetX = (e.clientX / window.innerWidth - 0.5) * 40;
    targetY = (e.clientY / window.innerHeight - 0.5) * 30;
  }, { passive: true });

  function lerpAurora() {
    currentX += (targetX - currentX) * 0.03;
    currentY += (targetY - currentY) * 0.03;
    layers.forEach((l, i) => {
      const factor = (i + 1) * 0.5;
      l.style.transform = `translate(${currentX * factor}px, ${currentY * factor}px)`;
    });
    requestAnimationFrame(lerpAurora);
  }
  lerpAurora();
})();
