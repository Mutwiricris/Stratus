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
                        'float': 'float 6s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'slide-up': 'slideUp 0.6s ease-out forwards',
                        'scale-in': 'scaleIn 0.5s ease-out forwards'
                    },
                    animationDelay: {
                        '100': '100ms',
                        '200': '200ms',
                        '300': '300ms',
                        '400': '400ms',
                        '500': '500ms',
                        '600': '600ms',
                        '700': '700ms',
                        '800': '800ms'
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        marquee: {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' }
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 20px rgba(20, 184, 166, 0.3)' },
                            '100%': { boxShadow: '0 0 40px rgba(20, 184, 166, 0.6), 0 0 60px rgba(20, 184, 166, 0.3)' }
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(50px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        scaleIn: {
                            '0%': { opacity: '0', transform: 'scale(0.8)' },
                            '100%': { opacity: '1', transform: 'scale(1)' }
                        }
                    },
                    screens: {
                        'xs': '475px',
                        '3xl': '1600px'
                    },
                    spacing: {
                        '18': '4.5rem',
                        '88': '22rem',
                        '128': '32rem'
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
            will-change: transform, background-color, box-shadow;
            transform: translateZ(0);
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(240, 253, 250, 0.9) 50%, rgba(255, 255, 255, 0.9) 100%);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(20, 184, 166, 0.1);
        }
        .navbar-scrolled {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(240, 253, 250, 0.95) 50%, rgba(255, 255, 255, 0.95) 100%) !important;
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border-bottom: 1px solid rgba(20, 184, 166, 0.2);
            box-shadow: 0 8px 32px rgba(20, 184, 166, 0.15), 0 4px 16px rgba(0, 0, 0, 0.1);
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
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .card-hover:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 32px 64px -12px rgba(20, 184, 166, 0.25), 0 16px 32px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(20, 184, 166, 0.3);
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }
        
        .glass-card-dark {
            background: rgba(0, 0, 0, 0.05);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.05);
        }
        
        .modern-border {
            border: 1px solid rgba(0, 208, 132, 0.2);
            border-radius: 12px;
            position: relative;
            overflow: hidden;
        }
        
        .modern-border::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(0, 208, 132, 0.5), transparent);
            animation: shimmer 3s infinite;
        }
        
        .gradient-border {
            background: linear-gradient(135deg, rgba(0, 208, 132, 0.1), rgba(6, 182, 212, 0.1));
            border: 1px solid;
            border-image: linear-gradient(135deg, rgba(0, 208, 132, 0.3), rgba(6, 182, 212, 0.3)) 1;
            border-radius: 16px;
        }
        
        .frosted-glass {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
        }
        
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        .btn-animate {
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
        }
        .btn-animate:hover {
            transform: translateY(-3px);
            box-shadow: 0 16px 40px rgba(20, 184, 166, 0.4), 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        .btn-animate::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s;
        }
        .btn-animate:hover::before {
            left: 100%;
        }
        
        .mobile-menu {
            transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
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
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.96) 0%, rgba(240, 253, 250, 0.96) 50%, rgba(204, 251, 241, 0.96) 100%) !important;
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border-left: 1px solid rgba(20, 184, 166, 0.2);
        }
        
        /* Hamburger Animation */
        .hamburger-line {
            transform-origin: center;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
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
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .fade-in-up.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .fade-in-scale {
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .fade-in-scale.visible {
            opacity: 1;
            transform: scale(1);
        }
        
        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-10px) rotate(1deg); }
            66% { transform: translateY(-5px) rotate(-1deg); }
        }
        
        .text-shadow {
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .text-shadow-lg {
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .backdrop-blur-xs {
            backdrop-filter: blur(2px);
            -webkit-backdrop-filter: blur(2px);
        }
        
        .container-query {
            container-type: inline-size;
        }
        
        @container (min-width: 768px) {
            .cq-md\:text-2xl {
                font-size: 1.5rem;
                line-height: 2rem;
            }
        }
        
        @container (min-width: 1024px) {
            .cq-lg\:text-3xl {
                font-size: 1.875rem;
                line-height: 2.25rem;
            }
        }
        
        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite alternate;
        }
        
        @keyframes pulse-glow {
            from {
                box-shadow: 0 0 20px rgba(20, 184, 166, 0.4);
            }
            to {
                box-shadow: 0 0 40px rgba(20, 184, 166, 0.8), 0 0 60px rgba(20, 184, 166, 0.4);
            }
        }
        
        .loading-spinner {
            border: 3px solid rgba(20, 184, 166, 0.3);
            border-radius: 50%;
            border-top: 3px solid #14b8a6;
            width: 24px;
            height: 24px;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Enhanced Responsive Design */
        @media (max-width: 1024px) {
            .navbar { 
                padding: 0.75rem 1rem;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.92) 0%, rgba(240, 253, 250, 0.92) 50%, rgba(255, 255, 255, 0.92) 100%);
            }
            .mobile-menu { width: 85vw; max-width: 400px; }
            h1 { font-size: clamp(2rem, 8vw, 3.5rem); }
        }
        @media (max-width: 768px) {
            .navbar { 
                padding: 0.625rem 1rem;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.94) 0%, rgba(240, 253, 250, 0.94) 50%, rgba(255, 255, 255, 0.94) 100%);
            }
            .mobile-menu { width: 90vw; max-width: 380px; }
            h1 { font-size: clamp(1.875rem, 7vw, 3rem); }
            h2 { font-size: clamp(1.5rem, 6vw, 2.5rem); }
        }
        @media (max-width: 640px) {
            .navbar { 
                padding: 0.5rem 1rem;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.96) 0%, rgba(240, 253, 250, 0.96) 50%, rgba(255, 255, 255, 0.96) 100%);
            }
            .mobile-menu { 
                width: 100vw; 
                max-width: none;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.98) 0%, rgba(240, 253, 250, 0.98) 50%, rgba(204, 251, 241, 0.98) 100%);
            }
            h1 { font-size: clamp(1.75rem, 6vw, 2.5rem); }
            h2 { font-size: clamp(1.25rem, 5vw, 2rem); }
            .floating { animation-duration: 4s; }
        }
        @media (max-width: 480px) {
            .navbar { 
                padding: 0.5rem 0.75rem;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.98) 0%, rgba(240, 253, 250, 0.98) 50%, rgba(255, 255, 255, 0.98) 100%);
            }
            .mobile-menu { padding: 1rem; }
            h1 { font-size: clamp(1.5rem, 5vw, 2.25rem); }
            h2 { font-size: clamp(1.125rem, 4vw, 1.75rem); }
        }
        @media (max-width: 375px) {
            .navbar { 
                padding: 0.5rem;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.99) 0%, rgba(240, 253, 250, 0.99) 50%, rgba(255, 255, 255, 0.99) 100%);
            }
            h1 { font-size: clamp(1.375rem, 4.5vw, 2rem); }
        }
        
        /* Reduced motion preferences */
        @media (prefers-reduced-motion: reduce) {
            .floating,
            .pulse-glow,
            .btn-animate::before {
                animation: none;
            }
            .card-hover:hover,
            .btn-animate:hover {
                transform: none;
            }
        }
        
        /* High contrast mode */
        @media (prefers-contrast: high) {
            .bg-gradient-to-r,
            .bg-gradient-to-br {
                background: #0f766e;
            }
            .text-gray-600 {
                color: #374151;
            }
        }
        
        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            .dark-mode-auto {
                background-color: #1f2937;
                color: #f9fafb;
            }
        }
    </style>
    
    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
    @stack('styles')
</head>

<body class="bg-white text-gray-900 antialiased font-sans overflow-x-hidden selection:bg-teal-100 selection:text-teal-900">
    @include('components.navigation')
    
    <main class="pt-20">
        @yield('content')
    </main>
    
    @include('components.footer')
    
    @include('components.scripts')
    <script src="{{ asset('js/navigation.js') }}"></script>
    @stack('scripts')
</body>
</html>
