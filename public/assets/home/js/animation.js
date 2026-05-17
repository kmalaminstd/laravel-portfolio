// Wait for the DOM and Loader to finish
document.addEventListener('DOMContentLoaded', () => {
    // Register ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    // Initial Hero Animations
    setTimeout(() => {
        const heroTl = gsap.timeline();

        if(document.querySelector('.hero-title')){

            heroTl.fromTo(".hero-title", 
                { y: 50, opacity: 0 }, 
                { y: 0, opacity: 1, duration: 1, ease: "power3.out" }
            )
            .fromTo(".hero-desc", 
                { y: 30, opacity: 0 }, 
                { y: 0, opacity: 1, duration: 0.8, ease: "power3.out" }, 
                "-=0.6"
            )
            .fromTo(".hero-btns > a", 
                { y: 20, opacity: 0 }, 
                { y: 0, opacity: 1, duration: 0.5, stagger: 0.2, ease: "power2.out" }, 
                "-=0.4"
            )
            .fromTo(".hero-socials > a", 
                { scale: 0, opacity: 0 }, 
                { scale: 1, opacity: 1, duration: 0.5, stagger: 0.1, ease: "back.out(1.7)" }, 
                "-=0.4"
            )
            .fromTo(".hero-image-wrapper", 
                { scale: 0.8, opacity: 0, rotation: -10 }, 
                { scale: 1, opacity: 1, rotation: 0, duration: 1.2, ease: "power3.out" }, 
                "-=1.5"
            )
            .fromTo(".floating-badge", 
                { scale: 0, opacity: 0 }, 
                { scale: 1, opacity: 1, duration: 0.6, stagger: 0.2, ease: "back.out(1.7)" }, 
                "-=0.5"
            );
        }
    }, 1200); // Wait for loader

    // Scroll Reveal Animations
    
    // General reveal
    gsap.utils.toArray('.gs_reveal').forEach(function(elem) {
        gsap.fromTo(elem, 
            { y: 50, opacity: 0 }, 
            { y: 0, opacity: 1, duration: 1, ease: "power3.out", scrollTrigger: {
                trigger: elem,
                start: "top 85%",
                toggleActions: "play none none reverse"
            }}
        );
    });

    // Reveal Up
    gsap.utils.toArray('.gs_reveal_up').forEach(function(elem) {
        let delay = elem.getAttribute('data-delay') || 0;
        gsap.fromTo(elem, 
            { y: 100, opacity: 0 }, 
            { y: 0, opacity: 1, duration: 1, delay: parseFloat(delay), ease: "power3.out", scrollTrigger: {
                trigger: elem,
                start: "top 85%",
                toggleActions: "play none none reverse"
            }}
        );
    });

    // Reveal Left
    gsap.utils.toArray('.gs_reveal_left').forEach(function(elem) {
        gsap.fromTo(elem, 
            { x: -100, opacity: 0 }, 
            { x: 0, opacity: 1, duration: 1, ease: "power3.out", scrollTrigger: {
                trigger: elem,
                start: "top 80%",
                toggleActions: "play none none reverse"
            }}
        );
    });

    // Reveal Right
    gsap.utils.toArray('.gs_reveal_right').forEach(function(elem) {
        gsap.fromTo(elem, 
            { x: 100, opacity: 0 }, 
            { x: 0, opacity: 1, duration: 1, ease: "power3.out", scrollTrigger: {
                trigger: elem,
                start: "top 80%",
                toggleActions: "play none none reverse"
            }}
        );
    });

    // Reveal Scale (used in Tech stack cards and counters)
    gsap.utils.toArray('.gs_reveal_scale').forEach(function(elem) {
        let delay = elem.getAttribute('data-delay') || 0;
        gsap.fromTo(elem, 
            { scale: 0.8, opacity: 0 }, 
            { scale: 1, opacity: 1, duration: 0.8, delay: parseFloat(delay), ease: "back.out(1.5)", scrollTrigger: {
                trigger: elem,
                start: "top 90%",
                toggleActions: "play none none reverse"
            }}
        );
    });

    // Counter Animation
    gsap.utils.toArray('.counter').forEach(function(elem) {
        let target = parseInt(elem.getAttribute('data-target'));
        gsap.to(elem, {
            innerHTML: target,
            duration: 2,
            ease: "power2.out",
            snap: { innerHTML: 1 },
            scrollTrigger: {
                trigger: elem,
                start: "top 90%",
            },
            onUpdate: function() {
                elem.innerHTML = Math.ceil(elem.innerHTML) + (target > 10 ? "+" : "");
            }
        });
    });

});
