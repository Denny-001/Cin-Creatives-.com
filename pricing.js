// Pricing Page Specific JavaScript
document.addEventListener('DOMContentLoaded', function() {
    
    // Tab Switching with Animation
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabPanes = document.querySelectorAll('.tab-pane');
    
    if (tabBtns.length) {
        tabBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const tabId = this.getAttribute('data-tab');
                
                // Remove active class from all buttons and panes
                tabBtns.forEach(b => b.classList.remove('active'));
                tabPanes.forEach(p => {
                    p.classList.remove('active');
                    p.style.opacity = '0';
                });
                
                // Add active class to current button
                this.classList.add('active');
                
                // Show new pane with animation
                const activePane = document.getElementById(tabId);
                activePane.classList.add('active');
                
                // Fade in animation
                setTimeout(() => {
                    activePane.style.opacity = '1';
                }, 50);
            });
        });
    }
    
    // FAQ Accordion with Smooth Animation
    const faqQuestions = document.querySelectorAll('.faq-question-enhanced');
    
    if (faqQuestions.length) {
        faqQuestions.forEach(question => {
            question.addEventListener('click', function() {
                const faqItem = this.parentElement;
                const answer = faqItem.querySelector('.faq-answer-enhanced');
                const toggleIcon = this.querySelector('.faq-toggle-icon');
                
                // Check if current item is active
                const isActive = faqItem.classList.contains('active');
                
                // Close all other items
                document.querySelectorAll('.faq-item-enhanced').forEach(otherItem => {
                    if (otherItem !== faqItem && otherItem.classList.contains('active')) {
                        otherItem.classList.remove('active');
                        const otherAnswer = otherItem.querySelector('.faq-answer-enhanced');
                        const otherIcon = otherItem.querySelector('.faq-toggle-icon');
                        otherAnswer.style.maxHeight = null;
                        if (otherIcon) otherIcon.textContent = '+';
                    }
                });
                
                // Toggle current item
                if (isActive) {
                    faqItem.classList.remove('active');
                    answer.style.maxHeight = null;
                    toggleIcon.textContent = '+';
                } else {
                    faqItem.classList.add('active');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    toggleIcon.textContent = '−';
                    
                    // Smooth scroll to the opened item (optional)
                    setTimeout(() => {
                        faqItem.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                    }, 100);
                }
            });
        });
    }
    
    // Parallax Effect for Comparison Section
    const parallaxSection = document.querySelector('.parallax-bg-section');
    
    if (parallaxSection) {
        window.addEventListener('scroll', function() {
            const scrollPosition = window.pageYOffset;
            const sectionTop = parallaxSection.offsetTop;
            const sectionHeight = parallaxSection.offsetHeight;
            
            // Check if section is in view
            if (scrollPosition > sectionTop - window.innerHeight && 
                scrollPosition < sectionTop + sectionHeight) {
                
                const speed = 0.25; // Match data-parallax-speed
                const yPos = (scrollPosition - sectionTop) * speed;
                parallaxSection.style.backgroundPositionY = yPos + 'px';
            }
        });
    }
    
    // Animate Counters in Hero Section
    const statValues = document.querySelectorAll('.hero-stat-item .stat-value');
    
    if (statValues.length) {
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const target = element.getAttribute('data-target') || 
                                  (element.textContent.includes('%') ? 100 : 
                                   element.textContent.includes('24/7') ? 24 : 0);
                    
                    if (target !== 0) {
                        animateCounter(element, target);
                    }
                    observer.unobserve(element);
                }
            });
        }, observerOptions);
        
        statValues.forEach(stat => observer.observe(stat));
    }
    
    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 50; // 50 steps
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = target + (element.textContent.includes('%') ? '%' : '');
                clearInterval(timer);
            } else {
                element.textContent = Math.round(current) + (element.textContent.includes('%') ? '%' : '');
            }
        }, 20);
    }
    
    // Hover effect for pricing cards
    const pricingCards = document.querySelectorAll('.pricing-card');
    
    pricingCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            // Optional: Add sound or additional effects
        });
        
        card.addEventListener('mouseleave', function() {
            // Reset any temporary styles
        });
    });
    
    // URL Parameter Handling for Plan Selection
    const urlParams = new URLSearchParams(window.location.search);
    const planParam = urlParams.get('plan');
    
    if (planParam) {
        // Open the corresponding tab based on plan parameter
        if (planParam.includes('web')) {
            document.getElementById('tab-web-btn').click();
        } else if (planParam.includes('marketing')) {
            document.getElementById('tab-marketing-btn').click();
        } else if (planParam.includes('software')) {
            document.getElementById('tab-software-btn').click();
        }
        
        // Highlight the specific plan card
        setTimeout(() => {
            const planCards = document.querySelectorAll('.pricing-card');
            planCards.forEach(card => {
                const link = card.querySelector('a[href*="' + planParam + '"]');
                if (link) {
                    card.style.animation = 'pulse 1s ease 3';
                    card.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            });
        }, 500);
    }
    
    // Add pulse animation keyframes if not exists
    const style = document.createElement('style');
    style.textContent = `
        @keyframes pulse {
            0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(93, 214, 44, 0.7); }
            50% { transform: scale(1.02); box-shadow: 0 0 20px 10px rgba(93, 214, 44, 0.3); }
            100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(93, 214, 44, 0); }
        }
    `;
    document.head.appendChild(style);
});