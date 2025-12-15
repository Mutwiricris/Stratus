<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scroll-behavior: smooth;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <title>@yield('title', 'Ascend Stratus - Leading Technology Solutions & Digital Transformation in Africa')</title>
    <meta name="description" content="@yield('description', 'Ascend Stratus is a premier technology holding company providing enterprise software, fintech solutions, mobile app development, and digital transformation services across Africa. Transform your business with our cutting-edge solutions.')">
    <meta name="keywords" content="@yield('keywords', 'enterprise software, fintech solutions, mobile app development, digital transformation, technology solutions Africa, business automation, custom software development, African technology company')">
    <meta name="author" content="Ascend Stratus">
    <meta name="robots" content="@yield('robots', 'index, follow')">
    <link rel="canonical" href="{{ url()->current() }}">
    
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
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://cdn.tailwindcss.com">
    
    <!-- DNS Prefetch -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="dns-prefetch" href="//images.unsplash.com">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|montserrat:700" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'neutral-900': '#1a1a1a',
                        'neutral-700': '#4a4a4a',
                        'neutral-200': '#f5f5f5',
                        'accent': '#00d084',
                        'white': '#ffffff',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Montserrat', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}"/>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            color: #4a4a4a;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            color: #1a1a1a;
        }
    </style>
    
    <!-- Structured Data - Organization Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Ascend Stratus",
        "description": "Leading technology holding company providing enterprise software, fintech solutions, and digital transformation services across Africa",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('images/logo.png') }}",
        "foundingDate": "2020",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "Kenya",
            "addressRegion": "Nairobi"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+254-700-000-000",
            "contactType": "Customer Service",
            "availableLanguage": ["English", "Swahili"]
        },
        "sameAs": [
            "https://linkedin.com/company/ascend-stratus",
            "https://twitter.com/ascendstratus"
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Technology Solutions",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Enterprise Software Development",
                        "description": "Custom enterprise software solutions for African businesses"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Fintech Solutions",
                        "description": "Payment processing, digital banking, and mobile money integration"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Mobile App Development",
                        "description": "Native and cross-platform mobile applications"
                    }
                }
            ]
        }
    }
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
</head>
<body class="bg-white">
    <!-- Loading Screen -->
    @include('components.loading-screen')
    
    <div id="app">
        @include('layouts.header')
        <main>
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>

    <!-- Cookie Consent Modal -->
    @include('components.cookie-modal')
    
    <!-- Scroll to Top Button -->
    @include('components.scroll-to-top')

    <!-- Contact Modal (Simple & Working) -->
    @include('components.contact-modal')

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    
    <!-- Enhanced Scripts -->
    @include('components.scripts')
    
    @stack('scripts')
</body>
</html>
