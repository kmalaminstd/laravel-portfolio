document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

    gsap.registerPlugin(ScrollTrigger);

    const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (reduced) {
        document.querySelectorAll('.gs_reveal, .gs_reveal_up, .gs_reveal_left, .gs_reveal_right, .gs_reveal_scale').forEach(el => {
            el.style.opacity = '1';
            el.style.visibility = 'visible';
        });
        return;
    }

    // Generic reveal
    gsap.utils.toArray('.gs_reveal').forEach(elem => {
        gsap.fromTo(elem,
            { y: 40, opacity: 0 },
            {
                y: 0, opacity: 1, duration: 0.9, ease: 'power3.out',
                scrollTrigger: { trigger: elem, start: 'top 88%', toggleActions: 'play none none none' },
                onStart: () => { elem.style.visibility = 'visible'; }
            }
        );
    });

    gsap.utils.toArray('.gs_reveal_up').forEach(elem => {
        const delay = parseFloat(elem.getAttribute('data-delay') || 0);
        gsap.fromTo(elem,
            { y: 60, opacity: 0 },
            {
                y: 0, opacity: 1, duration: 1, delay, ease: 'power3.out',
                scrollTrigger: { trigger: elem, start: 'top 88%', toggleActions: 'play none none none' },
                onStart: () => { elem.style.visibility = 'visible'; }
            }
        );
    });

    gsap.utils.toArray('.gs_reveal_left').forEach(elem => {
        gsap.fromTo(elem,
            { x: -50, opacity: 0 },
            {
                x: 0, opacity: 1, duration: 1, ease: 'power3.out',
                scrollTrigger: { trigger: elem, start: 'top 85%', toggleActions: 'play none none none' },
                onStart: () => { elem.style.visibility = 'visible'; }
            }
        );
    });

    gsap.utils.toArray('.gs_reveal_right').forEach(elem => {
        gsap.fromTo(elem,
            { x: 50, opacity: 0 },
            {
                x: 0, opacity: 1, duration: 1, ease: 'power3.out',
                scrollTrigger: { trigger: elem, start: 'top 85%', toggleActions: 'play none none none' },
                onStart: () => { elem.style.visibility = 'visible'; }
            }
        );
    });

    gsap.utils.toArray('.gs_reveal_scale').forEach(elem => {
        const delay = parseFloat(elem.getAttribute('data-delay') || 0);
        gsap.fromTo(elem,
            { scale: 0.92, opacity: 0 },
            {
                scale: 1, opacity: 1, duration: 1, delay, ease: 'power2.out',
                scrollTrigger: { trigger: elem, start: 'top 90%', toggleActions: 'play none none none' },
                onStart: () => { elem.style.visibility = 'visible'; }
            }
        );
    });
});
