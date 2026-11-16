document.addEventListener('DOMContentLoaded', () => {
    // Loader
    const loader = document.getElementById('loader');
    if (loader) {
        setTimeout(() => {
            loader.classList.add('hide');
            setTimeout(() => { loader.style.display = 'none'; }, 650);
        }, 700);
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

    // Navbar scroll
    const navbar = document.getElementById('navbar');
    if (navbar) {
        const onScroll = () => {
            if (window.scrollY > 40) navbar.classList.add('scrolled');
            else navbar.classList.remove('scrolled');
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    // Mobile nav
    const toggle = document.getElementById('navToggle');
    const mobile = document.getElementById('navMobile');
    if (toggle && mobile) {
        toggle.addEventListener('click', () => {
            toggle.classList.toggle('open');
            mobile.classList.toggle('open');
            document.body.style.overflow = mobile.classList.contains('open') ? 'hidden' : '';
        });
        mobile.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', () => {
                toggle.classList.remove('open');
                mobile.classList.remove('open');
                document.body.style.overflow = '';
            });
        });
    }
});
