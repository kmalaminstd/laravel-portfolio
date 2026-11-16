<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K.M. AL-AMIN | PHP & Laravel Developer</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/images/AL-AMIN.png') }}">
    <meta name="description" content="Portfolio of K.M. AL-AMIN, a professional Web Developer focused on PHP and Laravel development.">
    
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/home/css/style.css') }}">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KHM234XW');</script>
    <!-- End Google Tag Manager -->

    {{-- cloudflare turnstile --}}
    <link rel="preconnect" href="https://challenges.cloudflare.com" />
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

</head>
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHM234XW"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <x-home.loader />

    <!-- Custom Cursor -->
    <x-home.custom-cursor />

    <!-- Navbar -->
    <x-home.nav />

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <x-home.footer />

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <!-- Custom JS -->
    <script src="{{ asset('assets/home/js/main.js') }}"></script>
    <script src="{{ asset('assets/home/js/animation.js') }}"></script>

    @stack('js')

</body>
</html>
