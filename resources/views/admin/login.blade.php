<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        :root {
            --bg-dark: #0f172a;
            --bg-card: #1e293b;
            --bg-hover: #334155;
            --accent-cyan: #38bdf8;
            --accent-indigo: #6366f1;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --transition-smooth: all 0.3s ease;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-main);
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
            background-image: 
                radial-gradient(circle at 20% 50%, rgba(99, 102, 241, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(56, 189, 248, 0.15) 0%, transparent 50%);
        }

        .glass-card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3);
            transition: var(--transition-smooth);
        }

        .glass-card:hover {
            border: 1px solid rgba(56, 189, 248, 0.3);
        }

        .form-control {
            background-color: var(--bg-dark);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-main);
            transition: var(--transition-smooth);
        }

        .form-control:focus {
            background-color: var(--bg-dark);
            border-color: var(--accent-cyan);
            box-shadow: 0 0 0 0.25rem rgba(56, 189, 248, 0.25);
            color: var(--text-main);
        }

        .form-control::placeholder {
            color: var(--text-muted);
        }

        .input-group-text {
            background-color: var(--bg-dark);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-muted);
        }

        .btn-gradient {
            background: linear-gradient(135deg, var(--accent-cyan), var(--accent-indigo));
            border: none;
            color: white;
            font-weight: 600;
            transition: var(--transition-smooth);
        }

        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -10px var(--accent-indigo);
            color: white;
        }

        .btn-gradient:active {
            transform: translateY(0);
        }

        .text-muted {
            color: var(--text-muted) !important;
        }

        .form-check-input {
            background-color: var(--bg-dark);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .form-check-input:checked {
            background-color: var(--accent-cyan);
            border-color: var(--accent-cyan);
        }

        .form-check-input:focus {
            box-shadow: 0 0 0 0.25rem rgba(56, 189, 248, 0.25);
        }

        a {
            color: var(--accent-cyan);
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        a:hover {
            color: var(--accent-indigo);
        }

        .logo-icon {
            background: linear-gradient(135deg, var(--accent-cyan), var(--accent-indigo));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .invalid-feedback {
            color: #f87171;
        }

        .was-validated .form-control:invalid {
            border-color: #f87171;
        }

        .was-validated .form-control:valid {
            border-color: #4ade80;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="glass-card p-4 p-sm-5">
                    <!-- Logo/Header -->
                    <div class="text-center mb-4">
                        <i class="bi bi-shield-lock-fill logo-icon" style="font-size: 3rem;"></i>
                        <h2 class="fw-bold mt-3 mb-1">Admin Portal</h2>
                        <p class="text-muted">Sign in to your dashboard</p>
                    </div>

                    <!-- Login Form -->
                    <form id="adminLoginForm" method="POST" action="/login">
                        @csrf
                        <!-- Email Field -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input 
                                    type="email" 
                                    class="form-control" 
                                    id="email" 
                                    placeholder="admin@example.com" 
                                    name="email"
                                    required
                                >
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>
                        </div>

                        <!-- Password Field -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-lock"></i>
                                </span>
                                <input 
                                    type="password" 
                                    name="password"
                                    class="form-control" 
                                    id="password" 
                                    placeholder="Enter your password" 
                                    required
                                    minlength="6"
                                >
                                <button class="input-group-text" type="button" id="togglePassword">
                                    <i class="bi bi-eye" id="toggleIcon"></i>
                                </button>
                                <div class="invalid-feedback">
                                    Password must be at least 6 characters.
                                </div>
                            </div>
                        </div>

                        <!-- Remember Me + Forgot Password -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                                <label class="form-check-label text-muted" for="rememberMe">
                                    Remember me
                                </label>
                            </div>
                            
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-gradient w-100 py-2 mb-3">
                            <span id="btnText">Sign In</span>
                            <span id="btnSpinner" class="spinner-border spinner-border-sm ms-2 d-none" role="status"></span>
                        </button>

                        <!-- Alert for demo -->
                        <div id="loginAlert" class="alert d-none" role="alert"></div>
                    </form>
                </div>

                <!-- Footer -->
                <p class="text-center text-muted mt-4 small">
                    © {{ now()->year }} K.M AL-AMIN Portfolio. All rights reserved.
                </p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('bi-eye');
                toggleIcon.classList.add('bi-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('bi-eye-slash');
                toggleIcon.classList.add('bi-eye');
            }
        });

        
    </script>
</body>
</html>