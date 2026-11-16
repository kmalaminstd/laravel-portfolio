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

    // Defaults
    ScrollTrigger.config({ ignoreMobileResize: true });
    gsap.defaults({ ease: 'power3.out' });

    // ---- Hero entrance (timeline, not scroll) ----
    const heroTl = gsap.timeline({ defaults: { ease: 'power3.out' } });
    const heroEls = {
        meta: document.querySelector('.hero-meta'),
        title: document.querySelector('.hero-title'),
        lead: document.querySelector('.hero-lead'),
        actions: document.querySelector('.hero-actions'),
        visual: document.querySelector('.hero-visual')
    };
    if (heroEls.title) {
        gsap.set([heroEls.meta, heroEls.title, heroEls.lead, heroEls.actions, heroEls.visual].filter(Boolean), {
            opacity: 0, visibility: 'visible'
        });
        if (heroEls.visual) {
            heroTl.fromTo(heroEls.visual, { opacity: 0, y: 40, scale: 0.96 }, { opacity: 1, y: 0, scale: 1, duration: 1.1 }, 0.15);
        }
        if (heroEls.meta) {
            heroTl.fromTo(heroEls.meta, { opacity: 0, y: 24 }, { opacity: 1, y: 0, duration: 0.7 }, 0.25);
        }
        heroTl.fromTo(heroEls.title, { opacity: 0, y: 60 }, { opacity: 1, y: 0, duration: 1 }, 0.35);
        if (heroEls.lead) {
            heroTl.fromTo(heroEls.lead, { opacity: 0, y: 30 }, { opacity: 1, y: 0, duration: 0.8 }, 0.55);
        }
        if (heroEls.actions) {
            heroTl.fromTo(heroEls.actions, { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.7 }, 0.7);
        }
    }

    // ---- Generic reveals with scrub-friendly batch ----
    const reveal = (selector, fromVars, toVars = {}) => {
        gsap.utils.toArray(selector).forEach(elem => {
            const delay = parseFloat(elem.getAttribute('data-delay') || 0);
            gsap.fromTo(elem,
                { ...fromVars, opacity: 0 },
                {
                    ...fromVars,
                    ...toVars,
                    opacity: 1,
                    y: 0,
                    x: 0,
                    scale: 1,
                    duration: toVars.duration || 1,
                    delay,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: elem,
                        start: toVars.start || 'top 88%',
                        toggleActions: 'play none none none'
                    },
                    onStart: () => { elem.style.visibility = 'visible'; }
                }
            );
        });
    };

    // Skip elements already handled by hero timeline
    gsap.utils.toArray('.gs_reveal').forEach(elem => {
        if (elem.closest('.hero')) return;
        gsap.fromTo(elem,
            { y: 36, opacity: 0 },
            {
                y: 0, opacity: 1, duration: 0.9,
                scrollTrigger: { trigger: elem, start: 'top 88%', toggleActions: 'play none none none' },
                onStart: () => { elem.style.visibility = 'visible'; }
            }
        );
    });

    gsap.utils.toArray('.gs_reveal_up').forEach(elem => {
        if (elem.closest('.hero')) return;
        const delay = parseFloat(elem.getAttribute('data-delay') || 0);
        gsap.fromTo(elem,
            { y: 56, opacity: 0 },
            {
                y: 0, opacity: 1, duration: 1, delay,
                scrollTrigger: { trigger: elem, start: 'top 88%', toggleActions: 'play none none none' },
                onStart: () => { elem.style.visibility = 'visible'; }
            }
        );
    });

    gsap.utils.toArray('.gs_reveal_left').forEach(elem => {
        gsap.fromTo(elem,
            { x: -48, opacity: 0 },
            {
                x: 0, opacity: 1, duration: 1,
                scrollTrigger: { trigger: elem, start: 'top 85%', toggleActions: 'play none none none' },
                onStart: () => { elem.style.visibility = 'visible'; }
            }
        );
    });

    gsap.utils.toArray('.gs_reveal_right').forEach(elem => {
        gsap.fromTo(elem,
            { x: 48, opacity: 0 },
            {
                x: 0, opacity: 1, duration: 1,
                scrollTrigger: { trigger: elem, start: 'top 85%', toggleActions: 'play none none none' },
                onStart: () => { elem.style.visibility = 'visible'; }
            }
        );
    });

    gsap.utils.toArray('.gs_reveal_scale').forEach(elem => {
        if (elem.closest('.hero')) return;
        const delay = parseFloat(elem.getAttribute('data-delay') || 0);
        gsap.fromTo(elem,
            { scale: 0.9, opacity: 0 },
            {
                scale: 1, opacity: 1, duration: 1, delay, ease: 'power2.out',
                scrollTrigger: { trigger: elem, start: 'top 90%', toggleActions: 'play none none none' },
                onStart: () => { elem.style.visibility = 'visible'; }
            }
        );
    });

    // ---- Advanced: parallax on hero visual ----
    if (heroEls.visual) {
        gsap.to(heroEls.visual, {
            yPercent: 18,
            ease: 'none',
            scrollTrigger: {
                trigger: '.hero',
                start: 'top top',
                end: 'bottom top',
                scrub: 0.6
            }
        });
    }

    // ---- Advanced: project image parallax + clip reveal ----
    gsap.utils.toArray('.project-row').forEach((row) => {
        const media = row.querySelector('.project-media');
        const img = media && media.querySelector('img');
        const info = row.querySelector('.project-info');

        if (media) {
            gsap.fromTo(media,
                { clipPath: 'inset(12% 12% 12% 12%)' },
                {
                    clipPath: 'inset(0% 0% 0% 0%)',
                    duration: 1.2,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: row,
                        start: 'top 80%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        if (img) {
            gsap.fromTo(img,
                { scale: 1.12 },
                {
                    scale: 1,
                    ease: 'none',
                    scrollTrigger: {
                        trigger: row,
                        start: 'top bottom',
                        end: 'bottom top',
                        scrub: 0.8
                    }
                }
            );
        }

        if (info) {
            gsap.fromTo(info,
                { y: 40, opacity: 0 },
                {
                    y: 0, opacity: 1, duration: 1,
                    scrollTrigger: {
                        trigger: row,
                        start: 'top 75%',
                        toggleActions: 'play none none none'
                    },
                    onStart: () => { info.style.visibility = 'visible'; }
                }
            );
        }
    });

    // ---- Advanced: staggered skill tags ----
    gsap.utils.toArray('.skill-groups .skill-tags').forEach(group => {
        const tags = group.querySelectorAll('.skill-tag');
        if (!tags.length) return;
        gsap.set(tags, { opacity: 0, y: 16 });
        ScrollTrigger.batch(tags, {
            start: 'top 90%',
            onEnter: (batch) => {
                gsap.to(batch, {
                    opacity: 1,
                    y: 0,
                    duration: 0.55,
                    stagger: 0.05,
                    ease: 'power2.out',
                    overwrite: true
                });
            },
            once: true
        });
    });

    // ---- Advanced: service items stagger ----
    const services = gsap.utils.toArray('.service-item');
    if (services.length) {
        gsap.set(services, { opacity: 0, y: 28 });
        ScrollTrigger.batch(services, {
            start: 'top 88%',
            onEnter: (batch) => {
                gsap.to(batch, {
                    opacity: 1,
                    y: 0,
                    duration: 0.7,
                    stagger: 0.08,
                    ease: 'power3.out',
                    overwrite: true
                });
            },
            once: true
        });
    }

    // ---- Advanced: about statement slight scrub ----
    const statement = document.querySelector('.about-statement');
    if (statement) {
        gsap.fromTo(statement,
            { y: 30 },
            {
                y: -10,
                ease: 'none',
                scrollTrigger: {
                    trigger: statement,
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: 1
                }
            }
        );
    }

    // ---- Advanced: section title underline draw via scaleX on pseudo alternative ----
    gsap.utils.toArray('.section-title').forEach(title => {
        if (title.closest('.hero')) return;
        gsap.fromTo(title,
            { opacity: 0, y: 28 },
            {
                opacity: 1, y: 0, duration: 0.9,
                scrollTrigger: { trigger: title, start: 'top 90%', toggleActions: 'play none none none' },
                onStart: () => { title.style.visibility = 'visible'; }
            }
        );
    });

    // ---- Pin-style sticky skills intro (desktop only) ----
    const skillsIntro = document.querySelector('.skills-intro');
    const skillsLayout = document.querySelector('.skills-layout');
    if (skillsIntro && skillsLayout && window.innerWidth > 900) {
        // CSS already has sticky; enhance with subtle opacity fade when leaving
        gsap.to(skillsIntro, {
            opacity: 0.35,
            ease: 'none',
            scrollTrigger: {
                trigger: skillsLayout,
                start: 'center center',
                end: 'bottom top',
                scrub: true
            }
        });
    }

    // Refresh after images load
    window.addEventListener('load', () => ScrollTrigger.refresh());
});
