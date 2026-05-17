document.addEventListener('DOMContentLoaded', () => {
    // 1. Remove Loader
    const loader = document.getElementById('loader');
    if (loader) {
        setTimeout(() => {
            loader.style.opacity = '0';
            loader.style.transition = 'opacity 0.5s ease';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        }, 1000);
    }

    // 2. Custom Cursor
    const cursor = document.getElementById('custom-cursor');
    if (cursor) {
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });

        // Add hover effect to links and buttons
        const hoverElements = document.querySelectorAll('a, button, .hover-trigger');
        hoverElements.forEach(el => {
            el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
            el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
        });
    }

    // 3. Navbar scroll effect
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(15, 23, 42, 0.95)';
                navbar.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.1)';
            } else {
                navbar.style.background = 'rgba(15, 23, 42, 0.85)';
                navbar.style.boxShadow = 'none';
            }
        });
    }


    // Particles.js Config

        if(document.querySelector('.particles-js')){
            particlesJS("particles-js", {
                "particles": {
                    "number": { "value": 80, "density": { "enable": true, "value_area": 800 } },
                    "color": { "value": "#38bdf8" },
                    "shape": { "type": "circle" },
                    "opacity": { "value": 0.2, "random": true },
                    "size": { "value": 3, "random": true },
                    "line_linked": { "enable": true, "distance": 150, "color": "#6366f1", "opacity": 0.1, "width": 1 },
                    "move": { "enable": true, "speed": 1, "direction": "none", "random": true, "out_mode": "out" }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": { "enable": true, "mode": "grab" },
                        "onclick": { "enable": true, "mode": "push" }
                    },
                    "modes": {
                        "grab": { "distance": 140, "line_linked": { "opacity": 0.5 } }
                    }
                },
                "retina_detect": true
            });

        }

            // Form Submit Animation
            const form = document.getElementById('contactForm');
            const submitBtn = document.getElementById('submitBtn');

            if(form) {
                form.addEventListener('submit', (e) => {
                    e.preventDefault();
                    
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Sending...';
                    submitBtn.classList.add('disabled');
                    
                    // Simulate AJAX call
                    setTimeout(() => {
                        submitBtn.innerHTML = '<i class="ph-fill ph-check-circle me-2"></i> Message Sent!';
                        submitBtn.classList.replace('btn-primary-custom', 'btn-success');
                        
                        form.reset();
                        
                        setTimeout(() => {
                            submitBtn.innerHTML = originalText;
                            submitBtn.classList.replace('btn-success', 'btn-primary-custom');
                            submitBtn.classList.remove('disabled');
                        }, 3000);
                    }, 1500);
                });
            }
        
});



