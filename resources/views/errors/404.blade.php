<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found | K.M. AL-AMIN</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/home/css/style.css') }}">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 position-relative overflow-hidden">
    
    <!-- Custom Cursor -->
    <div class="custom-cursor" id="custom-cursor"></div>

    <!-- Background Glow -->
    <div class="position-absolute top-50 start-50 translate-middle w-50 h-50 bg-gradient-custom rounded-circle opacity-10" style="filter: blur(150px); z-index: -1;"></div>

    <div class="container text-center z-1">
        <h1 class="display-1 fw-bold text-gradient tech-font" style="font-size: 8rem;">404</h1>
        <h2 class="text-white mb-4">Page Not Found</h2>
        <p class="lead max-w-2xl mx-auto mb-5">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        <a href="/" class="btn-custom btn-primary-custom btn-lg">Back to Home <i class="ph ph-house ms-2"></i></a>
    </div>

    <!-- Custom JS for Cursor -->
    <script src="{{ asset('assets/home/js/main.js') }}"></script>
</body>
</html>
