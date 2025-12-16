<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO Meta Tags -->
    <title>@yield('title', 'Ascend Stratus - Leading Technology Solutions & Digital Transformation in Africa')</title>
    <meta name="description" content="@yield('description', 'Ascend Stratus is a premier technology holding company providing enterprise software, fintech solutions, mobile app development, and digital transformation services across Africa. Transform your business with our cutting-edge solutions.')">
    <meta name="keywords" content="@yield('keywords', 'enterprise software, fintech solutions, mobile app development, digital transformation, technology solutions Africa, business automation, custom software development, African technology company')">
    <meta name="author" content="Ascend Stratus">
    <meta name="robots" content="@yield('robots', 'index, follow')">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Reverb WebSocket Configuration -->
    <meta name="reverb-key" content="{{ config('broadcasting.connections.reverb.key') }}">
    <meta name="reverb-host" content="{{ config('broadcasting.connections.reverb.options.host') }}">
    <meta name="reverb-port" content="{{ config('broadcasting.connections.reverb.options.port') }}">
    <meta name="reverb-scheme" content="{{ config('broadcasting.connections.reverb.options.scheme') }}">

    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="description" content="Ascend Stratus builds smart, custom software and mobile apps (iOS/Android) for real business impact. Specializing in Digital Transformation, Laravel, and Craft CMS." />

<meta name="robots" content="index, follow" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="canonical" href="https://www.ascendstratus.com/" />

<meta property="og:title" content="Smart Custom Software for Business Growth - Ascend Stratus" />

<meta property="og:description" content="We deliver full-service custom web, mobile, and digital transformation solutions to leading enterprises across Africa. Get 99.9% uptime and 24/7 support." />

<meta property="og:url" content="https://www.ascendstratus.com/" />

<meta property="og:type" content="website" />

<meta property="og:image" content="https://ascendstratus.com/images/social-share-image.jpg" />

<meta name="twitter:card" content="summary_large_image" />

<meta name="twitter:title" content="Smart Custom Software for Business Growth - Ascend Stratus" />

<meta name="twitter:description" content="We deliver full-service custom web, mobile, and digital transformation solutions to leading enterprises across Africa." />

<meta name="twitter:image" content="https://ascendstratus.com/images/social-share-image.jpg" />

<meta name="twitter:site" content="@AscendStratus" />
    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title" content="@yield('og_title', 'Ascend Stratus - Leading Technology Solutions & Digital Transformation in Africa')">
    <meta property="og:description" content="@yield('og_description', 'Transform your business with cutting-edge enterprise software, fintech solutions, and mobile applications designed specifically for African markets.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Ascend Stratus">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Ascend Stratus - Leading Technology Solutions in Africa')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Enterprise software, fintech solutions, and mobile app development for African businesses.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/twitter-card.jpg'))">
    <meta name="twitter:site" content="@ascendstratus">
    <meta name="twitter:creator" content="@ascendstratus">
    
    <!-- Favicon and Icons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    
    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.tailwindcss.com">
    
    <!-- DNS Prefetch -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//images.unsplash.com">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
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
                        'scale-in': 'scaleIn 0.5s ease-out forwards',
                        'gradient-x': 'gradient-x 15s ease infinite'
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
                        },
                        'gradient-x': {
                            '0%, 100%': {
                                'background-size': '200% 200%',
                                'background-position': 'left center'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'right center'
                            }
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
            background: linear-gradient(135deg, rgba(20, 184, 166, 0.2) 0%, rgba(59, 130, 246, 0.15) 100%);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(20, 184, 166, 0.2);
            z-index: 1000;
        }
        .navbar-scrolled {
            background: linear-gradient(135deg, rgba(20, 184, 166, 0.3) 0%, rgba(59, 130, 246, 0.25) 100%) !important;
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border-bottom: 1px solid rgba(20, 184, 166, 0.3);
            box-shadow: 0 8px 32px rgba(20, 184, 166, 0.2), 0 4px 16px rgba(0, 0, 0, 0.1);
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
            pointer-events: none;
        }
        .mobile-menu.open {
            transform: translateX(0);
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
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
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: all 0.3s ease;
            z-index: 1040;
        }
        .mobile-menu-overlay.open {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
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
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.98) 0%, rgba(115, 218, 194, 0.98) 50%, rgba(204, 251, 241, 0.98) 100%);
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
    
    <!-- Structured Data - Organization Schema -->
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Ascend Stratus',
        'description' => 'Leading technology holding company providing enterprise software, fintech solutions, and digital transformation services across Africa',
        'url' => url('/'),
        'logo' => asset('images/logo.png'),
        'foundingDate' => '2020',
        'address' => [
            '@type' => 'PostalAddress',
            'addressCountry' => 'Kenya',
            'addressRegion' => 'Nairobi'
        ],
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+254-700-000-000',
            'contactType' => 'Customer Service',
            'availableLanguage' => ['English', 'Swahili']
        ],
        'sameAs' => [
            'https://linkedin.com/company/ascend-stratus',
            'https://twitter.com/ascendstratus'
        ],
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name' => 'Technology Solutions',
            'itemListElement' => [
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Enterprise Software Development',
                        'description' => 'Custom enterprise software solutions for African businesses'
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Fintech Solutions',
                        'description' => 'Payment processing, digital banking, and mobile money integration'
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Mobile App Development',
                        'description' => 'Native and cross-platform mobile applications'
                    ]
                ]
            ]
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    
    @stack('structured-data')
    
    <!-- Google Analytics 4 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    
    @stack('head-scripts')

    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
    @stack('styles')
    @livewireStyles
</head>

<body class="bg-white text-gray-900 antialiased font-sans overflow-x-hidden selection:bg-teal-100 selection:text-teal-900">
    @include('components.navigation')
    
    <main class="pt-20">
        @yield('content')
    </main>
    @include('components.footer')
    
    @include('components.cookie-modal')

    @include('components.scripts')
    <script src="{{ asset('js/navigation.js') }}"></script>

    <!-- Laravel Echo & Reverb WebSocket (MUST load before live-chat.js) -->
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.16.1/dist/echo.iife.min.js"></script>
    <script src="{{ asset('js/echo-setup.js') }}?v={{ time() }}"></script>

    <!-- Contact Widget (includes live-chat.js which depends on Echo) -->
    @include('components.contact-widget')

    @stack('scripts')
    @livewireScripts
</body>
</html>
