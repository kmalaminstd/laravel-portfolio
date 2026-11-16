document.addEventListener('DOMContentLoaded', () => {
    // Loader
    const loader = document.getElementById('loader');
    if (loader) {
        setTimeout(() => {
            loader.classList.add('hide');
            setTimeout(() => { loader.style.display = 'none'; }, 650);
        }, 700);
    }

    // Scroll progress bar
    let progress = document.querySelector('.scroll-progress');
    if (!progress) {
        progress = document.createElement('div');
        progress.className = 'scroll-progress';
        document.body.prepend(progress);
    }

    // Custom cursor
    const cursor = document.getElementById('custom-cursor');
    if (cursor && window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
        cursor.classList.add('visible');
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });
        const hoverTargets = 'a, button, .btn, .filter-btn, .skill-tag, .project-media, .gallery-img, .hover-trigger';
        document.querySelectorAll(hoverTargets).forEach(el => {
            el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
            el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
        });
    }

    // Navbar: scroll direction hide/show + scrolled state
    const navbar = document.getElementById('navbar');
    let lastY = window.scrollY;
    let ticking = false;

    const updateNav = () => {
        const y = window.scrollY;
        if (!navbar) return;

        if (y > 40) navbar.classList.add('scrolled');
        else navbar.classList.remove('scrolled');

        const menuOpen = navbar.classList.contains('menu-open');
        if (!menuOpen) {
            if (y > lastY && y > 120) {
                navbar.classList.add('nav-hidden');
            } else {
                navbar.classList.remove('nav-hidden');
            }
        }

        // progress
        const doc = document.documentElement;
        const max = doc.scrollHeight - window.innerHeight;
        const pct = max > 0 ? (y / max) * 100 : 0;
        if (progress) progress.style.width = pct + '%';

        lastY = y;
        ticking = false;
    };

    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(updateNav);
            ticking = true;
        }
    }, { passive: true });
    updateNav();

    // Mobile nav
    const toggle = document.getElementById('navToggle');
    const mobile = document.getElementById('navMobile');
    if (toggle && mobile && navbar) {
        toggle.addEventListener('click', () => {
            const open = mobile.classList.toggle('open');
            toggle.classList.toggle('open', open);
            navbar.classList.toggle('menu-open', open);
            if (open) navbar.classList.remove('nav-hidden');
            document.body.style.overflow = open ? 'hidden' : '';
        });
        mobile.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', () => {
                toggle.classList.remove('open');
                mobile.classList.remove('open');
                navbar.classList.remove('menu-open');
                document.body.style.overflow = '';
            });
        });
    }
});
