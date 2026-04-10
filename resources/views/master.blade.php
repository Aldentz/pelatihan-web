<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Wisata Bali - Liburan Impian Anda')</title>
    
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Bali Theme CSS -->
    <style>
        :root {
            --bali-primary: linear-gradient(135deg, #FF6B35, #F7931E);
            --bali-sea: #87CEEB;
            --bali-turquoise: #98D8C8;
            --bali-sunset: #F8B500;
            --bali-green: #2C5530;
            --bali-shadow: rgba(0,0,0,0.1);
        }

        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, var(--bali-sea) 0%, var(--bali-turquoise) 60%, #fff 100%);
            min-height: 100vh;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="waves" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse"><path d="M0 60 Q25 40 50 60 T100 60 V100 H0 Z" fill="rgba(255,255,255,0.08)"/></pattern></defs><rect width="100" height="100" fill="url(%23waves)"/></svg>');
            animation: waves 25s linear infinite;
            z-index: -1;
        }

        @keyframes waves {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100px); }
        }

        .navbar-bali {
            background: rgba(255,255,255,0.95) !important;
            backdrop-filter: blur(15px);
            box-shadow: 0 5px 25px var(--bali-shadow);
            border-bottom: 1px solid rgba(255,255,255,0.3);
        }

        .navbar-brand {
            font-weight: 700;
            background: var(--bali-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 1.5rem;
        }

        .nav-link {
            color: #333 !important;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            color: #FF6B35 !important;
            transform: translateY(-2px);
        }

        .btn-bali {
            background: var(--bali-primary);
            border: none;
            padding: 0.6rem 1.5rem;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(255,107,53,0.3);
        }

        .btn-bali:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255,107,53,0.4);
        }

        main {
            min-height: calc(100vh - 140px);
            padding: 2rem 0;
        }

        .footer-bali {
            background: linear-gradient(135deg, var(--bali-green), #1a3c20);
            color: white;
            padding: 3rem 0 1rem;
            margin-top: 4rem;
        }

        .footer-bali a {
            color: rgba(255,255,255,0.8);
            transition: color 0.3s ease;
        }

        .footer-bali a:hover {
            color: #FFD23F;
        }

        .sunflare {
            position: fixed;
            top: 10%;
            right: 5%;
            width: 150px;
            height: 150px;
            background: radial-gradient(circle, rgba(255,210,0,0.2) 0%, transparent 70%);
            border-radius: 50%;
            animation: sunflare 4s ease-in-out infinite alternate;
            z-index: -1;
            pointer-events: none;
        }

        @keyframes sunflare {
            0% { transform: scale(1) rotate(0deg); opacity: 0.3; }
            100% { transform: scale(1.1) rotate(180deg); opacity: 0.5; }
        }

        @media (max-width: 768px) {
            main { padding: 1rem 0; }
            .sunflare { display: none; }
        }
    </style>
</head>
<body>
    <!-- Sunflare Decoration -->
    <div class="sunflare"></div>
    
    <!-- Navbar -->
    @include('partial.navbar')
    
    <!-- Main Content -->
    <main class="container-fluid">
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('partial.footer')
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>