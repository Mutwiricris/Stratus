<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ascend Stratus - Engineering Software. Empowering Businesses.')</title>
    <meta name="description" content="@yield('description', 'Ascend Stratus is a modern, multi-sector holding company revolutionizing foundational businesses through technology.')">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dark-turquoise': '#0f766e',
                        'light-turquoise': '#67e8f9',
                        'cyan-secondary': '#67e8f9',
                        'cyan-accent': '#06b6d4',
                        'cyan-dark': '#0e7490',
                        'turquoise': {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            500: '#14b8a6',
                            600: '#0d9488',
                            700: '#0f766e',
                            800: '#115e59',
                            900: '#134e4a'
                        }
                    },
                    fontFamily: {
                        sans: ['Outfit', 'system-ui', 'sans-serif'],
                        heading: ['Montserrat', 'system-ui', 'sans-serif']
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease-out forwards',
                        'marquee': 'marquee 25s linear infinite',
                    },
                    animationDelay: {
                        '100': '100ms',
                        '200': '200ms',
                        '300': '300ms',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        marquee: {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body { font-family: 'Outfit', system-ui, sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Montserrat', system-ui, sans-serif; }
        html { scroll-behavior: smooth; }
        
        .navbar {
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            will-change: transform, background-color, backdrop-filter;
            transform: translateZ(0);
        }
        .navbar-scrolled {
            background: rgba(15, 118, 110, 0.95) !important;
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.12), 0 2px 8px rgba(0, 0, 0, 0.08);
        }
        .navbar-transparent {
            background: rgba(15, 118, 110, 0.9);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #0f766e 0%, #14b8a6 50%, #67e8f9 100%);
        }
        .gradient-text {
            background: linear-gradient(135deg, #0f766e, #14b8a6, #67e8f9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .btn-animate {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        .btn-animate:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(34, 211, 238, 0.3);
        }
        
        .mobile-menu {
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            transform: translateX(100%);
            will-change: transform, opacity;
            opacity: 0;
            visibility: hidden;
        }
        .mobile-menu.open {
            transform: translateX(0);
            opacity: 1;
            visibility: visible;
        }
        .mobile-menu.scrolled {
            background: rgba(15, 118, 110, 0.96) !important;
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border-left: 1px solid rgba(255, 255, 255, 0.1);
        }
        .mobile-menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 40;
        }
        .mobile-menu-overlay.open {
            opacity: 1;
            visibility: visible;
        }
        
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        .fade-in-up.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        @media (max-width: 1024px) {
            .navbar { padding: 0.75rem 1rem; }
            .mobile-menu { width: 85vw; max-width: 400px; }
        }
        @media (max-width: 768px) {
            .navbar { padding: 0.625rem 1rem; }
            .mobile-menu { width: 90vw; max-width: 380px; }
        }
        @media (max-width: 640px) {
            .navbar { padding: 0.5rem 1rem; }
            .mobile-menu { width: 100vw; max-width: none; }
        }
        @media (max-width: 480px) {
            .navbar { padding: 0.5rem 0.75rem; }
            .mobile-menu { padding: 1rem; }
        }
        @media (max-width: 375px) {
            .navbar { padding: 0.5rem; }
        }
    </style>
    
    @stack('styles')
</head>

<body class="bg-white text-gray-900 antialiased font-sans">
    @include('components.navigation')
    
    <main class="pt-20">
        @yield('content')
    </main>
    
    @include('components.footer')
    
    @include('components.scripts')
    @stack('scripts')
</body>
</html>
