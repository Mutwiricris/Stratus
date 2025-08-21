<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ascend Stratus - Engineering Software. Empowering Bussinesses.</title>
    <meta name="description" content="Ascend Stratus is a modern, multi-sector holding company revolutionizing foundational Bussinesses through technology. We build intelligent software platforms that drive efficiency, scalability, and innovation across diverse sectors.">
    
    <script src="https://cdn.tailwindcss.com"></script>
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
        will-change: transform, background-color;
        transform: translateZ(0); /* Hardware acceleration */
        background: #0f766e; /* dark-turquoise */
    }
    .navbar-scrolled {
        background: #0f766e !important; /* dark-turquoise */
        border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.12), 0 2px 8px rgba(0, 0, 0, 0.08);
        transform: translateY(0);
    }
    .hero-content {
        animation: fadeInUp 1s ease-out;
    }
    .hero-stats {
        animation: fadeInUp 1.2s ease-out;
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
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
    .btn-animate:active {
        transform: translateY(0);
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
    @media (max-width: 1024px) {
        .navbar {
            padding: 0.75rem 1rem;
        }
        .mobile-menu {
            width: 85vw;
            max-width: 400px;
        }
    }
    @media (max-width: 768px) {
        .navbar {
            padding: 0.625rem 1rem;
        }
        .mobile-menu {
            width: 90vw;
            max-width: 380px;
        }
    }
    @media (max-width: 640px) {
        .hero-title { font-size: 2.5rem; line-height: 1.1; }
        .navbar {
            padding: 0.5rem 1rem;
        }
        .mobile-menu {
            width: 100vw;
            max-width: none;
        }
        .navbar nav {
            padding-left: 1rem;
            padding-right: 1rem;
        }
    }
    @media (max-width: 480px) {
        .hero-title { font-size: 2rem; line-height: 1.1; }
        .navbar {
            padding: 0.5rem 0.75rem;
        }
        .navbar nav {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }
        .mobile-menu {
            padding: 1rem;
        }
    }
    @media (max-width: 375px) {
        .navbar {
            padding: 0.5rem;
        }
        .navbar nav {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }
    }
    @keyframes marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .animate-marquee {
        animation: marquee 25s linear infinite;
    }
    .animate-marquee:hover {
        animation-play-state: paused;
    }
</style>

<body class="bg-white text-gray-900 antialiased font-sans">

<script>
// Enhanced navbar scroll behavior with performance optimization
let ticking = false;
let lastScrollY = 0;

function updateNavbar() {
    const navbar = document.getElementById('navbar');
    const mobileMenu = document.getElementById('mobile-menu');
    const currentScrollY = window.scrollY;
    const scrolled = currentScrollY > 50;
    
    // Only update if scroll direction or state changed
    if (Math.abs(currentScrollY - lastScrollY) > 5) {
        if (scrolled) {
            navbar.classList.add('navbar-scrolled');
            if (mobileMenu) {
                mobileMenu.classList.add('scrolled');
            }
        } else {
            navbar.classList.remove('navbar-scrolled');
            if (mobileMenu) {
                mobileMenu.classList.remove('scrolled');
            }
        }
        lastScrollY = currentScrollY;
    }
    ticking = false;
}

function requestNavbarUpdate() {
    if (!ticking) {
        requestAnimationFrame(updateNavbar);
        ticking = true;
    }
}

window.addEventListener('scroll', requestNavbarUpdate, { passive: true });

// Enhanced mobile menu functionality
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    let isMenuOpen = false;
    
    function openMobileMenu() {
        if (isMenuOpen) return;
        
        isMenuOpen = true;
        mobileMenu.classList.add('open');
        mobileMenuOverlay.classList.add('open');
        document.body.style.overflow = 'hidden';
        
        // Update ARIA attributes
        mobileMenuBtn.setAttribute('aria-expanded', 'true');
        mobileMenu.setAttribute('aria-hidden', 'false');
        mobileMenuOverlay.setAttribute('aria-hidden', 'false');
        
        // Focus management
        mobileMenuClose.focus();
    }
    
    function closeMobileMenu() {
        if (!isMenuOpen) return;
        
        isMenuOpen = false;
        mobileMenu.classList.remove('open');
        mobileMenuOverlay.classList.remove('open');
        document.body.style.overflow = '';
        
        // Update ARIA attributes
        mobileMenuBtn.setAttribute('aria-expanded', 'false');
        mobileMenu.setAttribute('aria-hidden', 'true');
        mobileMenuOverlay.setAttribute('aria-hidden', 'true');
        
        // Return focus to menu button
        mobileMenuBtn.focus();
    }
    
    // Event listeners
    mobileMenuBtn.addEventListener('click', openMobileMenu);
    mobileMenuClose.addEventListener('click', closeMobileMenu);
    mobileMenuOverlay.addEventListener('click', closeMobileMenu);
    
    // Close mobile menu when clicking on navigation links
    const mobileLinks = mobileMenu.querySelectorAll('a[href^="#"]');
    mobileLinks.forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && isMenuOpen) {
            closeMobileMenu();
        }
    });
    
    // Trap focus within mobile menu when open
    mobileMenu.addEventListener('keydown', function(e) {
        if (!isMenuOpen || e.key !== 'Tab') return;
        
        const focusableElements = mobileMenu.querySelectorAll(
            'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
        );
        const firstElement = focusableElements[0];
        const lastElement = focusableElements[focusableElements.length - 1];
        
        if (e.shiftKey && document.activeElement === firstElement) {
            e.preventDefault();
            lastElement.focus();
        } else if (!e.shiftKey && document.activeElement === lastElement) {
            e.preventDefault();
            firstElement.focus();
        }
    });
});
</script>

@include('components.navigation')

<!-- HERO SECTION -->
<section class="relative min-h-[80vh] flex items-center">
  <div class="absolute inset-0">
    <img src="{{ asset('images/main.jpg') }}" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/40"></div>
  </div>
  <div class="relative z-10 w-full container px-6 sm:px-10 md:px-16 lg:px-24 xl:px-32 py-20 md:py-28">
    <div class="max-w-5xl">
      <div class="hero-content max-w-4xl">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight font-heading">
          Engineering Software. Empowering Bussinesses.
        </h1>
        <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-2xl leading-relaxed">
          We are a modern, multi-sector holding company revolutionizing foundational Bussinesses through technology. Building intelligent platforms that drive efficiency, scalability, and innovation across diverse sectors.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center mb-12">
          <button class="bg-cyan-300 text-dark-turquoise px-6 sm:px-8 py-3 sm:py-4 rounded-lg text-base sm:text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
            Explore Our Ventures
          </button>
          <a href="#platform" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
            Discover Our Platform
          </a>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-6">
          <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-4 sm:p-6 text-white card-hover">
            <div class="text-2xl sm:text-3xl font-extrabold mb-2">4+</div>
            <div class="text-xs sm:text-sm text-white/85 leading-tight">Core industry sectors transformed</div>
          </div>
          <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-4 sm:p-6 text-white card-hover">
            <div class="text-2xl sm:text-3xl font-extrabold mb-2">40%</div>
            <div class="text-xs sm:text-sm text-white/85 leading-tight">Average efficiency improvement for partners</div>
          </div>
          <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-4 sm:p-6 text-white card-hover">
            <div class="text-2xl sm:text-3xl font-extrabold mb-2">10x</div>
            <div class="text-xs sm:text-sm text-white/85 leading-tight">Faster scaling through unified platform</div>
          </div>
          <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-4 sm:p-6 text-white card-hover">
            <div class="text-2xl sm:text-3xl font-extrabold mb-2">100%</div>
            <div class="text-xs sm:text-sm text-white/85 leading-tight">Cross-venture intelligence integration</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TRUSTED LOGOS SECTION -->
<section class="bg-cyan-50 py-16">
  <div class="max-w-7xl mx-auto flex flex-col items-center px-6">
    <div class="text-center mb-12">
      <h2 class="text-lg md:text-xl font-semibold text-cyan-700 font-heading">
        Our Top Tools we use to transform Our operations
      </h2>
    </div>
    <div class="overflow-hidden relative">
      <div class="flex animate-marquee whitespace-nowrap">
        <div class="flex items-center space-x-16 mx-8">
          <div class="text-cyan-600 font-medium text-lg opacity-70">LogiFlow</div>
          <div class="text-cyan-600 font-medium text-lg opacity-70">FinanceCore</div>
          <div class="text-cyan-600 font-medium text-lg opacity-70">AgriSmart</div>
          <div class="text-cyan-600 font-medium text-lg opacity-70">EnergyGrid</div>
          <div class="text-cyan-600 font-medium text-lg opacity-70">DataSync</div>
          <div class="text-cyan-600 font-medium text-lg opacity-70">CloudOps</div>
          <div class="text-cyan-600 font-medium text-lg opacity-70">TechFlow</div>
        </div>
        <div class="flex items-center space-x-16 mx-8">
          <div class="text-cyan-600 font-medium text-lg opacity-70">LogiFlow</div>
          <div class="text-cyan-600 font-medium text-lg opacity-70">FinanceCore</div>
          <div class="text-cyan-600 font-medium text-lg opacity-70">AgriSmart</div>
          <div class="text-cyan-600 font-medium text-lg opacity-70">EnergyGrid</div>
          <div class="text-cyan-600 font-medium text-lg opacity-70">DataSync</div>
          <div class="text-cyan-600 font-medium text-lg opacity-70">CloudOps</div>
          <div class="text-cyan-600 font-medium text-lg opacity-70">TechFlow</div>
        </div>
      </div>
    </div>
  </div>
</section>

<main class="overflow-x-hidden">

        <!-- Hero Section -->
        <section class="section-bg w-full pt-32 pb-20 md:pt-40 md:pb-28 lg:pt-48 lg:pb-32">
            <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
                <div class="text-center lg:text-left fade-in-up">
                    <h1 class="font-serif text-5xl md:text-6xl lg:text-7xl font-extrabold brand-green leading-tight">Uncapped Growth. Unmatched Impact.</h1>
                    <p class="mt-6 text-lg md:text-xl brand-green max-w-md mx-auto lg:mx-0">
                        We're a team of world-class talent, taking on a world-class mission. We believe in the power of our people to get us there.
                    </p>
                    <a href="#" class="inline-block mt-10 brand-green font-bold group">
                        Learn More <span class="inline-block transition-transform group-hover:translate-x-1">→</span>
                    </a>
                </div>
                <div class="relative w-full max-w-md mx-auto fade-in-up" style="transition-delay: 200ms;">
                    <div class="absolute -top-8 -left-8 w-32 h-32 bg-white/50 rounded-full"></div>
                    <div class="absolute -bottom-8 -right-8 w-48 h-48 bg-white/50 rounded-lg transform rotate-12"></div>
                    <img src="https://www.freepik.com/free-photo/standard-quality-control-concept-m_36027739.htm#fromView=search&page=1&position=1&uuid=17774c55-4337-466d-b72d-640182d48e34&query=Venture+Intelligence" alt="African Executive Team Member" class="relative rounded-lg shadow-2xl w-full h-auto object-cover z-10">
                </div>
            </div>
        </section>
        
        <section id="benefits" class="py-20 md:py-28 px-8">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16 fade-in-up">
                    <h2 class="font-serif text-4xl md:text-5xl font-bold text-dark-turquoise">Why Partner With Ascend Stratus</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12">
                    <!-- Benefit Item -->
                    <div class="fade-in-up">
                        <img src="https://img.freepik.com/free-photo/african-american-colleagues-working-together-office_23-2148336056.jpg" class="w-full h-56 object-cover rounded-lg mb-4" alt="African Tech Collaboration">
                        <h3 class="font-bold text-dark-turquoise">01. Cross-Venture Intelligence</h3>
                        <p class="text-sm text-gray-600 mt-1">Leverage insights and data across our entire venture ecosystem for competitive advantage.</p>
                    </div>
                    <!-- Benefit Item -->
                    <div class="fade-in-up" style="transition-delay: 100ms;">
                        <img src="https://img.freepik.com/free-photo/african-business-people-meeting-office_23-2148336055.jpg" class="w-full h-56 object-cover rounded-lg mb-4" alt="African Business Meeting">
                        <h3 class="font-bold text-dark-turquoise">02. Unified Platform Access</h3>
                        <p class="text-sm text-gray-600 mt-1">Single integrated platform connecting all ventures with shared resources and intelligence.</p>
                    </div>
                    <!-- Benefit Item -->
                    <div class="fade-in-up" style="transition-delay: 200ms;">
                        <img src="https://img.freepik.com/free-photo/african-business-team-working-together_23-2148336058.jpg" class="w-full h-56 object-cover rounded-lg mb-4" alt="African Business Community">
                        <h3 class="font-bold text-dark-turquoise">03. Multi-Sector Expertise</h3>
                        <p class="text-sm text-gray-600 mt-1">Access to specialized knowledge across logistics, fintech, agritech, and energy sectors.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-12 mt-12 md:px-16 lg:px-32">
                    <!-- Benefit Item -->
                    <div class="fade-in-up" style="transition-delay: 300ms;">
                        <img src="https://img.freepik.com/free-photo/african-american-entrepreneurs-working-startup-office_23-2148336059.jpg" class="w-full h-56 object-cover rounded-lg mb-4" alt="African Tech Growth">
                        <h3 class="font-bold text-dark-turquoise">04. Scalable Infrastructure</h3>
                        <p class="text-sm text-gray-600 mt-1">Enterprise-grade technology stack that grows with your business needs and demands.</p>
                    </div>
                    <!-- Benefit Item -->
                    <div class="fade-in-up" style="transition-delay: 400ms;">
                        <img src="https://img.freepik.com/free-photo/african-business-people-celebrating-success_23-2148336060.jpg" class="w-full h-56 object-cover rounded-lg mb-4" alt="African Business Impact">
                        <h3 class="font-bold text-dark-turquoise">05. Transformative Results</h3>
                        <p class="text-sm text-gray-600 mt-1">Proven track record of 40% efficiency improvements and 10x faster scaling for partners.</p>
                    </div>
                </div>
                <div class="text-center mt-16 fade-in-up">
                    <a href="#" class="text-dark-turquoise font-semibold border-b border-dark-turquoise hover:border-cyan-300 hover:text-cyan-600 transition">Partner With Us →</a>
                </div>
            </div>
        </section>

        <!-- CULTURE SECTION -->
        <section id="culture" class="py-20 md:py-28 px-8 bg-dark-turquoise">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16 fade-in-up">
                    <h2 class="font-serif text-4xl md:text-5xl font-bold text-white">The Ascend Principle in Action</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-12 text-white">
                    <div class="fade-in-up">
                        <h3 class="font-bold">01. Innovation First</h3>
                        <p class="text-sm text-white/80 mt-1">We pioneer breakthrough technologies that transform entire industries and create lasting value.</p>
                    </div>
                    <div class="fade-in-up" style="transition-delay: 100ms;">
                        <h3 class="font-bold">02. Partnership Excellence</h3>
                        <p class="text-sm text-white/80 mt-1">We build lasting relationships with our partners, ensuring mutual success and growth.</p>
                    </div>
                    <div class="fade-in-up" style="transition-delay: 200ms;">
                        <h3 class="font-bold">03. Transformative Growth</h3>
                        <p class="text-sm text-white/80 mt-1">We commit to building new models that redefine what's possible in foundational industries.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-12 text-white mt-12 md:px-16 lg:px-48">
                    <div class="fade-in-up" style="transition-delay: 300ms;">
                        <h3 class="font-bold">04. Data-Driven Decisions</h3>
                        <p class="text-sm text-white/80 mt-1">We leverage cross-venture intelligence and analytics to make informed strategic choices.</p>
                    </div>
                    <div class="fade-in-up" style="transition-delay: 400ms;">
                        <h3 class="font-bold">05. Sustainable Impact</h3>
                        <p class="text-sm text-white/80 mt-1">We create solutions that benefit businesses, communities, and the environment for generations.</p>
                    </div>
                </div>
                 <div class="text-center mt-16 fade-in-up">
                    <a href="#" class="text-white font-semibold border-b border-white hover:border-cyan-300 hover:text-cyan-300 transition">Learn More →</a>
                </div>
            </div>
        </section>

        <!-- PRODUCTS SECTION -->
        <section id="products" class="py-20 md:py-28 px-8 bg-gradient-to-br from-gray-50 to-turquoise-50/30">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16 fade-in-up">
                    <h2 class="font-serif text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Our Software Solutions</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">Comprehensive software products designed to transform industries and streamline operations</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Ascend Spa -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up">
                        <div class="relative h-48">
                            <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?q=80&w=2074" alt="Ascend Spa" class="w-full h-full object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-3 py-1 rounded-full text-sm font-semibold">Spa & Salon</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-serif text-2xl font-bold text-dark-turquoise mb-3">Ascend Spa</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Complete spa/salon management system for booking, services, multi-location management, payments, and expenses tracking.</p>
                            <div class="flex items-center justify-between">
                                <div class="text-sm text-turquoise-600 font-semibold">Starting at $49/month</div>
                                <a href="{{ url('/products/ascend-spa') }}" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors">Learn More →</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Retail Pro -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up" style="transition-delay: 100ms;">
                        <div class="relative h-48">
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=2070" alt="Retail Pro" class="w-full h-full object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="bg-gradient-to-r from-cyan-accent to-turquoise-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Retail</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-serif text-2xl font-bold text-dark-turquoise mb-3">Retail Pro</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Comprehensive wholesale/retail system managing inventory, finance, and providing great business insights.</p>
                            <div class="flex items-center justify-between">
                                <div class="text-sm text-turquoise-600 font-semibold">Starting at $79/month</div>
                                <a href="{{ url('/products/retail-pro') }}" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors">Learn More →</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pool Billiard App -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up" style="transition-delay: 200ms;">
                        <div class="relative h-48">
                            <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?q=80&w=2070" alt="Pool Billiard App" class="w-full h-full object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="bg-gradient-to-r from-green-600 to-emerald-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Sports</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-serif text-2xl font-bold text-dark-turquoise mb-3">Pool Billiard App</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Connect pool players communities, manage matches, and view live scores for snooker, 8-ball, 9-ball games.</p>
                            <div class="flex items-center justify-between">
                                <div class="text-sm text-turquoise-600 font-semibold">Free with Premium</div>
                                <a href="{{ url('/products/pool-billiard') }}" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors">Learn More →</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tours App -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up" style="transition-delay: 300ms;">
                        <div class="relative h-48">
                            <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?q=80&w=2035" alt="Tours App" class="w-full h-full object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="bg-gradient-to-r from-purple-600 to-indigo-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Travel</span>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span class="bg-orange-500 text-white px-2 py-1 rounded-full text-xs font-semibold">Coming Soon</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-serif text-2xl font-bold text-dark-turquoise mb-3">Tours App</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Complete tour management webapp and mobile app for travel agencies and tour operators.</p>
                            <div class="flex items-center justify-between">
                                <div class="text-sm text-gray-500 font-semibold">Coming Soon</div>
                                <a href="{{ url('/products/tours-app') }}" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors">Learn More →</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Events Management -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up" style="transition-delay: 400ms;">
                        <div class="relative h-48">
                            <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=2070" alt="Events Management" class="w-full h-full object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="bg-gradient-to-r from-pink-600 to-rose-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Events</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-serif text-2xl font-bold text-dark-turquoise mb-3">Events Pro</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Comprehensive events management software and mobile app for planning, organizing, and executing events.</p>
                            <div class="flex items-center justify-between">
                                <div class="text-sm text-turquoise-600 font-semibold">Starting at $99/month</div>
                                <a href="{{ url('/products/events-pro') }}" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors">Learn More →</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Agriculture Solution -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up" style="transition-delay: 500ms;">
                        <div class="relative h-48">
                            <img src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?q=80&w=2070" alt="Agriculture Solution" class="w-full h-full object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="bg-gradient-to-r from-green-700 to-lime-600 text-white px-3 py-1 rounded-full text-sm font-semibold">AgriTech</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-serif text-2xl font-bold text-dark-turquoise mb-3">AgriSmart</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Advanced agriculture management solution with IoT integration, crop monitoring, and yield optimization.</p>
                            <div class="flex items-center justify-between">
                                <div class="text-sm text-turquoise-600 font-semibold">Custom Pricing</div>
                                <a href="{{ url('/products/agrismart') }}" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors">Learn More →</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Logistics Solution -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up md:col-span-2 lg:col-span-1" style="transition-delay: 600ms;">
                        <div class="relative h-48">
                            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070" alt="Logistics Solution" class="w-full h-full object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Logistics</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-serif text-2xl font-bold text-dark-turquoise mb-3">LogiFlow</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Complete logistics management solution for supply chain optimization, tracking, and delivery management.</p>
                            <div class="flex items-center justify-between">
                                <div class="text-sm text-turquoise-600 font-semibold">Enterprise Pricing</div>
                                <a href="{{ url('/products/logiflow') }}" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors">Learn More →</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-16 fade-in-up">
                    <a href="{{ url('/products') }}" class="bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:shadow-xl transition-all">
                        View All Products
                    </a>
                </div>
            </div>
        </section>

        <!-- GALLERY GRID SECTION -->
        <section id="gallery" class="py-20 md:py-28 px-8">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-white p-8 rounded-lg flex flex-col justify-center fade-in-up border border-gray-200 shadow-sm">
                        <h3 class="font-serif text-2xl text-dark-turquoise">Active Ventures</h3>
                        <a href="#" class="text-dark-turquoise font-semibold mt-4 group">Explore Portfolio <span class="inline-block transition-transform group-hover:translate-x-1">→</span></a>
                    </div>
                    <div class="bg-cyan-50 p-8 rounded-lg flex flex-col justify-center fade-in-up" style="transition-delay: 100ms;">
                        <h3 class="font-serif text-2xl text-dark-turquoise">Cross-venture intelligence drives innovation</h3>
                        <a href="#" class="text-dark-turquoise font-semibold mt-4 group">Platform Overview →</a>
                    </div>
                    <div class="lg:col-span-2 row-span-2 rounded-lg overflow-hidden fade-in-up" style="transition-delay: 200ms;">
                        <img src="https://img.freepik.com/free-photo/african-team-collaboration-modern-office_23-2148336061.jpg" class="w-full h-full object-cover" alt="African Team Collaboration">
                    </div>
                    <div class="bg-white p-8 rounded-lg flex flex-col justify-center fade-in-up border border-gray-200 shadow-sm" style="transition-delay: 300ms;">
                        <h3 class="font-serif text-2xl text-dark-turquoise">Strategic Partnerships</h3>
                        <p class="text-sm text-gray-600 mt-2">Building lasting relationships that drive mutual success and growth.</p>
                        <a href="#" class="text-dark-turquoise font-semibold mt-4 group">Learn More <span class="inline-block transition-transform group-hover:translate-x-1">→</span></a>
                    </div>
                    <div class="bg-cyan-50 p-8 rounded-lg flex flex-col justify-center fade-in-up" style="transition-delay: 400ms;">
                        <h3 class="font-serif text-2xl text-dark-turquoise">Platform Launch</h3>
                        <p class="text-sm text-gray-600 mt-2">Celebrating the successful deployment of our unified intelligence platform.</p>
                    </div>
                    <div class="rounded-lg overflow-hidden fade-in-up" style="transition-delay: 500ms;">
                        <img src="https://img.freepik.com/free-photo/african-tech-innovation-workspace_23-2148336062.jpg" class="w-full h-full object-cover" alt="African Technology Innovation">
                    </div>
                     <div class="rounded-lg overflow-hidden fade-in-up" style="transition-delay: 600ms;">
                        <img src="https://img.freepik.com/free-photo/african-business-presentation-meeting-room_23-2148336063.jpg" class="w-full h-full object-cover" alt="African Strategic Presentation">
                    </div>
                </div>
            </div>
        </section>

        <!-- FINAL IMAGE GALLERY -->
        <section class="pb-20 md:pb-28 px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="rounded-lg overflow-hidden fade-in-up">
                        <img src="https://img.freepik.com/free-photo/african-business-team-diverse-office_23-2148336064.jpg" class="w-full h-64 object-cover" alt="African Business Team">
                    </div>
                    <div class="rounded-lg overflow-hidden fade-in-up" style="transition-delay: 100ms;">
                        <img src="https://img.freepik.com/free-photo/african-business-community-networking_23-2148336065.jpg" class="w-full h-64 object-cover" alt="African Business Community">
                    </div>
                    <div class="rounded-lg overflow-hidden fade-in-up" style="transition-delay: 200ms;">
                        <img src="https://img.freepik.com/free-photo/african-tech-startup-innovation_23-2148336066.jpg" class="w-full h-64 object-cover" alt="African Tech Innovation">
                    </div>
                    <div class="rounded-lg overflow-hidden fade-in-up" style="transition-delay: 300ms;">
                        <img src="https://img.freepik.com/free-photo/african-modern-workspace-design_23-2148336067.jpg" class="w-full h-64 object-cover" alt="African Modern Workspace">
                    </div>
                </div>
            </div>
        </section>

    <!-- BLOG SECTION -->
        <section id="blog" class="py-20 md:py-28 px-8 bg-gradient-to-br from-gray-50 to-turquoise-50/30">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16 fade-in-up">
                    <h2 class="font-serif text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">From Our Blog</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">Stay updated with our latest insights, news, and industry trends.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Blog Post 1 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up">
                        <div class="relative h-48">
                            <img src="https://img.freepik.com/free-photo/african-farmer-using-technology-agriculture_23-2148336068.jpg" alt="African Agriculture Technology" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="font-serif text-xl font-bold text-dark-turquoise mb-3">The Future of AgriTech in Africa</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Explore how technology is revolutionizing agriculture across the continent.</p>
                            <a href="/insights/agritech-future" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors">Read More →</a>
                        </div>
                    </div>
                    
                    <!-- Blog Post 2 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up" style="transition-delay: 100ms;">
                        <div class="relative h-48">
                            <img src="https://img.freepik.com/free-photo/african-logistics-warehouse-management_23-2148336069.jpg" alt="African Logistics Innovation" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="font-serif text-xl font-bold text-dark-turquoise mb-3">Innovating Logistics: A Case Study</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Discover how our LogiFlow solution transformed supply chain efficiency.</p>
                            <a href="/insights/logistics-case-study" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors">Read More →</a>
                        </div>
                    </div>
                    
                    <!-- Blog Post 3 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up" style="transition-delay: 200ms;">
                        <div class="relative h-48">
                            <img src="https://img.freepik.com/free-photo/african-ai-technology-development_23-2148336070.jpg" alt="African AI Technology" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="font-serif text-xl font-bold text-dark-turquoise mb-3">Empowering Businesses with AI</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Learn about our AI-driven platforms and their impact on various sectors.</p>
                            <a href="/insights/ai-empowerment" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors">Read More →</a>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-16 fade-in-up">
                    <a href="/insights" class="bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:shadow-xl transition-all">
                        View All Articles
                    </a>
                </div>
            </div>
        </section>

    </main>

    <!-- Modern Footer -->
    <footer class="bg-dark-turquoise text-white">
        <div class="max-w-7xl mx-auto px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center mb-6">
                        <img src="{{ asset('images/logo1.png') }}" alt="Ascend Stratus" class="h-10 w-auto mr-4">
                        <span class="font-serif text-2xl font-bold">Ascend Stratus</span>
                    </div>
                    <p class="text-cyan-100 mb-6 max-w-md">
                        Engineering software that empowers businesses. We build intelligent platforms that drive efficiency, scalability, and innovation across diverse sectors.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-cyan-700 rounded-lg flex items-center justify-center hover:bg-cyan-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-cyan-700 rounded-lg flex items-center justify-center hover:bg-cyan-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-cyan-700 rounded-lg flex items-center justify-center hover:bg-cyan-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.347-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.017.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="font-bold text-lg mb-6 text-cyan-300">Company</h3>
                    <ul class="space-y-4">
                        <li><a href="#about" class="text-cyan-100 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-cyan-100 hover:text-white transition-colors">Our Platform</a></li>
                        <li><a href="#" class="text-cyan-100 hover:text-white transition-colors">Ventures</a></li>
                        <li><a href="#" class="text-cyan-100 hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="text-cyan-100 hover:text-white transition-colors">News & Insights</a></li>
                    </ul>
                </div>
                
                <!-- Solutions -->
                <div>
                    <h3 class="font-bold text-lg mb-6 text-cyan-300">Solutions</h3>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-cyan-100 hover:text-white transition-colors">Logistics & Supply Chain</a></li>
                        <li><a href="#" class="text-cyan-100 hover:text-white transition-colors">Financial Technology</a></li>
                        <li><a href="#" class="text-cyan-100 hover:text-white transition-colors">AgriTech Solutions</a></li>
                        <li><a href="#" class="text-cyan-100 hover:text-white transition-colors">Energy & Utilities</a></li>
                        <li><a href="#" class="text-cyan-100 hover:text-white transition-colors">Custom Solutions</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="font-bold text-lg mb-6 text-cyan-300">Contact Us</h3>
                    <ul class="space-y-4 text-cyan-100">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a5 5 0 00-5 5c0 4.167 5 11 5 11s5-6.833 5-11a5 5 0 00-5-5zm0 7a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                            <span>Lower Hill Plaza, Nairobi</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3.5a.5.5 0 01.5-.5h15a.5.5 0 01.5.5v13a.5.5 0 01-.5.5h-15a.5.5 0 01-.5-.5v-13zM3 5v11h14V5H3zm4.5 1a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h3a.5.5 0 00.5-.5v-2a.5.5 0 00-.5-.5h-3z"></path></svg>
                            <span>+254110407501</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Newsletter Signup -->
            <div class="border-t border-cyan-700 mt-12 pt-12">
                <div class="max-w-md mx-auto text-center">
                    <h3 class="font-bold text-xl mb-4 text-cyan-300">Stay Updated</h3>
                    <p class="text-cyan-100 mb-6">Get the latest insights on industry transformation and platform updates.</p>
                    <form class="flex gap-2">
                        <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 rounded-lg bg-cyan-800 border border-cyan-600 text-white placeholder-cyan-300 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                        <button type="submit" class="bg-cyan-300 text-dark-turquoise px-6 py-3 rounded-lg font-bold hover:bg-white transition-colors">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Bottom Bar -->
            <div class="border-t border-cyan-700 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-cyan-200 text-sm">
                    © 2025 Ascend Stratus. All rights reserved.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-cyan-200 hover:text-white text-sm transition-colors">Privacy Policy</a>
                    <a href="#" class="text-cyan-200 hover:text-white text-sm transition-colors">Terms of Service</a>
                    <a href="#" class="text-cyan-200 hover:text-white text-sm transition-colors">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for anchor links with mobile menu integration
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    // Close mobile menu if open before scrolling
                    const mobileMenu = document.getElementById('mobile-menu');
                    if (mobileMenu && mobileMenu.classList.contains('open')) {
                        const event = new CustomEvent('closeMobileMenu');
                        document.dispatchEvent(event);
                        
                        // Delay scroll to allow menu close animation
                        setTimeout(() => {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }, 200);
                    } else {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });

        // Enhanced Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const animationObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Initialize animations on DOM load
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.card-hover, .fade-in-up');
            animateElements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
                animationObserver.observe(el);
            });
        });

        // Performance optimization: Add loading states
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
            
            // Preload critical images
            const criticalImages = document.querySelectorAll('img[src*="logo"], img[src*="hero"]');
            criticalImages.forEach(img => {
                if (!img.complete) {
                    img.addEventListener('load', function() {
                        this.style.opacity = '1';
                    });
                }
            });
        });

        // Listen for custom mobile menu close event
        document.addEventListener('closeMobileMenu', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            
            if (mobileMenu && mobileMenu.classList.contains('open')) {
                mobileMenu.classList.remove('open');
                mobileMenuOverlay.classList.remove('open');
                document.body.style.overflow = '';
                
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
                mobileMenu.setAttribute('aria-hidden', 'true');
                mobileMenuOverlay.setAttribute('aria-hidden', 'true');
            }
        });
    </script>

</body>
</html>