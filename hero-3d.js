/**
 * CIN CREATIVES — HERO 3D JS
 * Three.js particle constellation grid for the hero section
 */

'use strict';

(function initHero3D() {
  const canvas = document.getElementById('hero-canvas');
  if (!canvas || typeof THREE === 'undefined') return;
  if (window.matchMedia('(max-width: 768px)').matches) return;

  const renderer = new THREE.WebGLRenderer({ canvas, alpha: true, antialias: true });
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.setSize(canvas.offsetWidth, canvas.offsetHeight);

  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(60, canvas.offsetWidth / canvas.offsetHeight, 0.1, 1000);
  camera.position.z = 5;

  /* --- Particles --- */
  const COUNT = 1200;
  const positions = new Float32Array(COUNT * 3);
  const colors = new Float32Array(COUNT * 3);
  const c1 = new THREE.Color('#5DD62C');
  const c2 = new THREE.Color('#337418');
  const c3 = new THREE.Color('#202020');

  for (let i = 0; i < COUNT; i++) {
    positions[i * 3]     = (Math.random() - 0.5) * 20;
    positions[i * 3 + 1] = (Math.random() - 0.5) * 14;
    positions[i * 3 + 2] = (Math.random() - 0.5) * 10;

    const t = Math.random();
    const c = t < 0.4 ? c1 : t < 0.7 ? c2 : c3;
    colors[i * 3]     = c.r;
    colors[i * 3 + 1] = c.g;
    colors[i * 3 + 2] = c.b;
  }

  const geometry = new THREE.BufferGeometry();
  geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
  geometry.setAttribute('color',    new THREE.BufferAttribute(colors, 3));

  const material = new THREE.PointsMaterial({
    size: 0.045,
    vertexColors: true,
    transparent: true,
    opacity: 0.75,
    sizeAttenuation: true,
  });

  const particles = new THREE.Points(geometry, material);
  scene.add(particles);

  /* --- Connection Lines --- */
  const lineMat = new THREE.LineBasicMaterial({
    color: 0x337418,
    transparent: true,
    opacity: 0.12,
  });

  // Sample subset for lines (performance)
  const LINE_SAMPLES = 80;
  const lineGroup = new THREE.Group();
  for (let i = 0; i < LINE_SAMPLES; i++) {
    const a = Math.floor(Math.random() * COUNT);
    const b = Math.floor(Math.random() * COUNT);
    const pts = [
      new THREE.Vector3(positions[a*3], positions[a*3+1], positions[a*3+2]),
      new THREE.Vector3(positions[b*3], positions[b*3+1], positions[b*3+2]),
    ];
    const lg = new THREE.BufferGeometry().setFromPoints(pts);
    lineGroup.add(new THREE.Line(lg, lineMat));
  }
  scene.add(lineGroup);

  /* --- Mouse Interaction --- */
  let mouseX = 0, mouseY = 0;
  document.addEventListener('mousemove', e => {
    mouseX = (e.clientX / window.innerWidth - 0.5) * 2;
    mouseY = (e.clientY / window.innerHeight - 0.5) * 2;
  }, { passive: true });

  /* --- Animate --- */
  const clock = new THREE.Clock();
  function animate() {
    requestAnimationFrame(animate);
    const t = clock.getElapsedTime();

    particles.rotation.y = t * 0.04 + mouseX * 0.08;
    particles.rotation.x = -mouseY * 0.04;
    lineGroup.rotation.y = particles.rotation.y;
    lineGroup.rotation.x = particles.rotation.x;

    // Pulsing opacity
    material.opacity = 0.55 + Math.sin(t * 0.8) * 0.1;

    renderer.render(scene, camera);
  }
  animate();

  /* --- Resize --- */
  const resizeObserver = new ResizeObserver(() => {
    const w = canvas.offsetWidth;
    const h = canvas.offsetHeight;
    renderer.setSize(w, h);
    camera.aspect = w / h;
    camera.updateProjectionMatrix();
  });
  resizeObserver.observe(canvas.parentElement);
})();
