// Three.js Hero Background
class ThreeHero {
    constructor() {
        this.scene = new THREE.Scene();
        this.camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        this.renderer = new THREE.WebGLRenderer({ 
            antialias: true,
            alpha: true 
        });
        
        this.particles = [];
        this.mouseX = 0;
        this.mouseY = 0;
        
        this.init();
    }
    
    init() {
        // Setup renderer
        const container = document.getElementById('three-canvas');
        if (!container) return;
        
        this.renderer.setSize(window.innerWidth, window.innerHeight);
        this.renderer.setPixelRatio(window.devicePixelRatio);
        container.appendChild(this.renderer.domElement);
        
        // Camera position
        this.camera.position.z = 30;
        
        // Create particles
        this.createParticles();
        
        // Add ambient light
        const ambientLight = new THREE.AmbientLight(0x404040);
        this.scene.add(ambientLight);
        
        // Add point lights
        const light1 = new THREE.PointLight(0x5DD62C, 1, 50);
        light1.position.set(10, 10, 10);
        this.scene.add(light1);
        
        const light2 = new THREE.PointLight(0x337418, 1, 50);
        light2.position.set(-10, -10, 10);
        this.scene.add(light2);
        
        // Event listeners
        window.addEventListener('resize', () => this.onResize());
        document.addEventListener('mousemove', (e) => this.onMouseMove(e));
        
        // Start animation
        this.animate();
    }
    
    createParticles() {
        const geometry = new THREE.BufferGeometry();
        const count = 2000;
        
        const positions = new Float32Array(count * 3);
        const colors = new Float32Array(count * 3);
        
        for (let i = 0; i < count; i++) {
            // Positions
            const x = (Math.random() - 0.5) * 100;
            const y = (Math.random() - 0.5) * 100;
            const z = (Math.random() - 0.5) * 50;
            
            positions[i * 3] = x;
            positions[i * 3 + 1] = y;
            positions[i * 3 + 2] = z;
            
            // Colors (shades of green)
            const greenValue = 0.3 + Math.random() * 0.7;
            colors[i * 3] = 0.2; // R
            colors[i * 3 + 1] = greenValue; // G
            colors[i * 3 + 2] = 0.1; // B
            
            // Store for animation
            this.particles.push({
                x, y, z,
                speedX: (Math.random() - 0.5) * 0.02,
                speedY: (Math.random() - 0.5) * 0.02,
                speedZ: (Math.random() - 0.5) * 0.02
            });
        }
        
        geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
        geometry.setAttribute('color', new THREE.BufferAttribute(colors, 3));
        
        const material = new THREE.PointsMaterial({
            size: 0.2,
            vertexColors: true,
            transparent: true,
            opacity: 0.8,
            blending: THREE.AdditiveBlending
        });
        
        this.particleSystem = new THREE.Points(geometry, material);
        this.scene.add(this.particleSystem);
    }
    
    onMouseMove(event) {
        this.mouseX = (event.clientX / window.innerWidth) * 2 - 1;
        this.mouseY = -(event.clientY / window.innerHeight) * 2 + 1;
    }
    
    onResize() {
        this.camera.aspect = window.innerWidth / window.innerHeight;
        this.camera.updateProjectionMatrix();
        this.renderer.setSize(window.innerWidth, window.innerHeight);
    }
    
    animate() {
        requestAnimationFrame(() => this.animate());
        
        // Rotate based on mouse
        this.particleSystem.rotation.y += 0.0001;
        this.particleSystem.rotation.x += 0.00005;
        
        // Mouse interaction
        if (this.mouseX && this.mouseY) {
            this.particleSystem.rotation.y += this.mouseX * 0.0005;
            this.particleSystem.rotation.x += this.mouseY * 0.0005;
        }
        
        // Animate individual particles
        const positions = this.particleSystem.geometry.attributes.position.array;
        
        for (let i = 0; i < this.particles.length; i++) {
            const p = this.particles[i];
            
            // Update positions
            p.x += p.speedX;
            p.y += p.speedY;
            p.z += p.speedZ;
            
            // Boundary check
            if (Math.abs(p.x) > 50) p.speedX *= -1;
            if (Math.abs(p.y) > 50) p.speedY *= -1;
            if (Math.abs(p.z) > 25) p.speedZ *= -1;
            
            positions[i * 3] = p.x;
            positions[i * 3 + 1] = p.y;
            positions[i * 3 + 2] = p.z;
        }
        
        this.particleSystem.geometry.attributes.position.needsUpdate = true;
        
        this.renderer.render(this.scene, this.camera);
    }
}

// Initialize Three.js when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    if (document.getElementById('three-canvas')) {
        new ThreeHero();
    }
});

// Globe for About Page
class ThreeGlobe {
    constructor() {
        this.scene = new THREE.Scene();
        this.camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerWidth, 0.1, 1000);
        this.renderer = new THREE.WebGLRenderer({ 
            antialias: true,
            alpha: true 
        });
        
        this.init();
    }
    
    init() {
        const container = document.getElementById('globe-canvas');
        if (!container) return;
        
        this.renderer.setSize(container.clientWidth, container.clientHeight);
        this.renderer.setPixelRatio(window.devicePixelRatio);
        container.appendChild(this.renderer.domElement);
        
        this.camera.position.z = 15;
        
        // Create sphere
        const geometry = new THREE.SphereGeometry(5, 64, 64);
        const material = new THREE.MeshPhongMaterial({
            color: 0x5DD62C,
            emissive: 0x1a3a0c,
            wireframe: true,
            transparent: true,
            opacity: 0.3
        });
        
        this.globe = new THREE.Mesh(geometry, material);
        this.scene.add(this.globe);
        
        // Add outer ring
        const ringGeometry = new THREE.TorusGeometry(5.2, 0.1, 16, 100);
        const ringMaterial = new THREE.MeshPhongMaterial({
            color: 0x5DD62C,
            emissive: 0x1a3a0c,
            transparent: true,
            opacity: 0.5
        });
        
        this.ring = new THREE.Mesh(ringGeometry, ringMaterial);
        this.ring.rotation.x = Math.PI / 2;
        this.ring.rotation.z = Math.PI / 4;
        this.scene.add(this.ring);
        
        // Add particles around globe
        this.createParticles();
        
        // Lights
        const light1 = new THREE.PointLight(0x5DD62C, 1, 30);
        light1.position.set(5, 5, 5);
        this.scene.add(light1);
        
        const light2 = new THREE.PointLight(0x337418, 1, 30);
        light2.position.set(-5, -5, 5);
        this.scene.add(light2);
        
        this.animate();
    }
    
    createParticles() {
        const geometry = new THREE.BufferGeometry();
        const count = 200;
        const positions = new Float32Array(count * 3);
        
        for (let i = 0; i < count; i++) {
            const radius = 7;
            const theta = Math.random() * Math.PI * 2;
            const phi = Math.acos((Math.random() * 2) - 1);
            
            const x = radius * Math.sin(phi) * Math.cos(theta);
            const y = radius * Math.sin(phi) * Math.sin(theta);
            const z = radius * Math.cos(phi);
            
            positions[i * 3] = x;
            positions[i * 3 + 1] = y;
            positions[i * 3 + 2] = z;
        }
        
        geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
        
        const material = new THREE.PointsMaterial({
            color: 0x5DD62C,
            size: 0.1,
            transparent: true,
            blending: THREE.AdditiveBlending
        });
        
        this.particles = new THREE.Points(geometry, material);
        this.scene.add(this.particles);
    }
    
    animate() {
        requestAnimationFrame(() => this.animate());
        
        this.globe.rotation.y += 0.005;
        this.ring.rotation.y += 0.002;
        this.ring.rotation.x += 0.001;
        
        if (this.particles) {
            this.particles.rotation.y += 0.001;
        }
        
        this.renderer.render(this.scene, this.camera);
    }
}

// Initialize Globe
document.addEventListener('DOMContentLoaded', () => {
    if (document.getElementById('globe-canvas')) {
        new ThreeGlobe();
    }
});