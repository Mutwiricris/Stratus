@extends('layouts.detail')

@section('title', ' Ascend Stratus')
@section('description', 'Learn about Ascend Stratus, a modern multi-sector holding company revolutionizing foundational industries through technology and innovation.')

@section('content')

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
        Coding and Development Tools
      </h2>
    </div>
    <div class="w-full overflow-hidden">
      <div class="flex animate-marquee whitespace-nowrap">
        <div class="flex items-center justify-center space-x-8 md:space-x-12 lg:space-x-16 mx-4">
          <img src="https://cdn.simpleicons.org/git/" class="h-8 md:h-10 lg:h-12" alt="Git">
          <img src="https://cdn.simpleicons.org/github/" class="h-8 md:h-10 lg:h-12" alt="GitHub">
          <img src="https://cdn.simpleicons.org/gitlab/" class="h-8 md:h-10 lg:h-12" alt="GitLab">
          <img src="https://cdn.simpleicons.org/jira/" class="h-8 md:h-10 lg:h-12" alt="Jira">
          <img src="https://cdn.simpleicons.org/confluence/" class="h-8 md:h-10 lg:h-12" alt="Confluence">
          <img src="https://cdn.simpleicons.org/figma/" class="h-8 md:h-10 lg:h-12" alt="Figma">
          <img src="https://cdn.simpleicons.org/docker/" class="h-8 md:h-10 lg:h-12" alt="Docker">
          <img src="https://cdn.simpleicons.org/kubernetes/" class="h-8 md:h-10 lg:h-12" alt="Kubernetes">
          <img src="https://cdn.simpleicons.org/javascript/" class="h-8 md:h-10 lg:h-12" alt="JavaScript">
          <img src="https://cdn.simpleicons.org/typescript/" class="h-8 md:h-10 lg:h-12" alt="TypeScript">
          <img src="https://cdn.simpleicons.org/nodedotjs/" class="h-8 md:h-10 lg:h-12" alt="Node.js">
          <img src="https://cdn.simpleicons.org/react/" class="h-8 md:h-10 lg:h-12" alt="React">
          <img src="https://cdn.simpleicons.org/vuedotjs/" class="h-8 md:h-10 lg:h-12" alt="Vue.js">
          <img src="https://cdn.simpleicons.org/angular/" class="h-8 md:h-10 lg:h-12" alt="Angular">
          <img src="https://cdn.simpleicons.org/php/" class="h-8 md:h-10 lg:h-12" alt="PHP">
          <img src="https://cdn.simpleicons.org/laravel/" class="h-8 md:h-10 lg:h-12" alt="Laravel">
          <img src="https://cdn.simpleicons.org/symfony/" class="h-8 md:h-10 lg:h-12" alt="Symfony">
          <img src="https://cdn.simpleicons.org/python/" class="h-8 md:h-10 lg:h-12" alt="Python">
          <img src="https://cdn.simpleicons.org/django/" class="h-8 md:h-10 lg:h-12" alt="Django">
          <img src="https://cdn.simpleicons.org/flask/" class="h-8 md:h-10 lg:h-12" alt="Flask">
        </div>
        <div class="flex items-center justify-center space-x-8 md:space-x-12 lg:space-x-16 mx-4">
          <img src="https://cdn.simpleicons.org/git/" class="h-8 md:h-10 lg:h-12" alt="Git">
          <img src="https://cdn.simpleicons.org/github/" class="h-8 md:h-10 lg:h-12" alt="GitHub">
          <img src="https://cdn.simpleicons.org/gitlab/" class="h-8 md:h-10 lg:h-12" alt="GitLab">
          <img src="https://cdn.simpleicons.org/jira/" class="h-8 md:h-10 lg:h-12" alt="Jira">
          <img src="https://cdn.simpleicons.org/confluence/" class="h-8 md:h-10 lg:h-12" alt="Confluence">
          <img src="https://cdn.simpleicons.org/figma/" class="h-8 md:h-10 lg:h-12" alt="Figma">
          <img src="https://cdn.simpleicons.org/docker/" class="h-8 md:h-10 lg:h-12" alt="Docker">
          <img src="https://cdn.simpleicons.org/kubernetes/" class="h-8 md:h-10 lg:h-12" alt="Kubernetes">
          <img src="https://cdn.simpleicons.org/javascript/" class="h-8 md:h-10 lg:h-12" alt="JavaScript">
          <img src="https://cdn.simpleicons.org/typescript/" class="h-8 md:h-10 lg:h-12" alt="TypeScript">
          <img src="https://cdn.simpleicons.org/nodedotjs/" class="h-8 md:h-10 lg:h-12" alt="Node.js">
          <img src="https://cdn.simpleicons.org/react/" class="h-8 md:h-10 lg:h-12" alt="React">
          <img src="https://cdn.simpleicons.org/vuedotjs/" class="h-8 md:h-10 lg:h-12" alt="Vue.js">
          <img src="https://cdn.simpleicons.org/angular/" class="h-8 md:h-10 lg:h-12" alt="Anogular">
          <img src="https://cdn.simpleicons.org/php/" class="h-8 md:h-10 lg:h-12" alt="PHP">
          <img src="https://cdn.simpleicons.org/laravel/" class="h-8 md:h-10 lg:h-12" alt="Laravel">
          <img src="https://cdn.simpleicons.org/symfony/" class="h-8 md:h-10 lg:h-12" alt="Symfony">
          <img src="https://cdn.simpleicons.org/python/" class="h-8 md:h-10 lg:h-12" alt="Python">
          <img src="https://cdn.simpleicons.org/django/" class="h-8 md:h-10 lg:h-12" alt="Django">
          <img src="https://cdn.simpleicons.org/flask/" class="h-8 md:h-10 lg:h-12" alt="Flask">
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
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Professional Business Executive" class="relative rounded-lg shadow-2xl w-full h-auto object-cover z-10">
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
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="w-full h-56 object-cover rounded-lg mb-4" alt="Business Team Collaboration">
                        <h3 class="font-bold text-dark-turquoise">01. Cross-Venture Intelligence</h3>
                        <p class="text-sm text-gray-600 mt-1">Leverage insights and data across our entire venture ecosystem for competitive advantage.</p>
                    </div>
                    <!-- Benefit Item -->
                    <div class="fade-in-up" style="transition-delay: 100ms;">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="w-full h-56 object-cover rounded-lg mb-4" alt="Strategic Business Meeting">
                        <h3 class="font-bold text-dark-turquoise">02. Unified Platform Access</h3>
                        <p class="text-sm text-gray-600 mt-1">Single integrated platform connecting all ventures with shared resources and intelligence.</p>
                    </div>
                    <!-- Benefit Item -->
                    <div class="fade-in-up" style="transition-delay: 200ms;">
                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="w-full h-56 object-cover rounded-lg mb-4" alt="Business Team Community">
                        <h3 class="font-bold text-dark-turquoise">03. Multi-Sector Expertise</h3>
                        <p class="text-sm text-gray-600 mt-1">Access to specialized knowledge across logistics, fintech, agritech, and energy sectors.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-12 mt-12 md:px-16 lg:px-32">
                    <!-- Benefit Item -->
                    <div class="fade-in-up" style="transition-delay: 300ms;">
                        <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="w-full h-56 object-cover rounded-lg mb-4" alt="Tech Startup Growth">
                        <h3 class="font-bold text-dark-turquoise">04. Scalable Infrastructure</h3>
                        <p class="text-sm text-gray-600 mt-1">Enterprise-grade technology stack that grows with your business needs and demands.</p>
                    </div>
                    <!-- Benefit Item -->
                    <div class="fade-in-up" style="transition-delay: 400ms;">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="w-full h-56 object-cover rounded-lg mb-4" alt="Business Success Celebration">
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
                            <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80" alt="Luxury Spa Interior" class="w-full h-full object-cover">
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
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Modern Retail Store" class="w-full h-full object-cover">
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
                            <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Pool Billiard Hall" class="w-full h-full object-cover">
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
                            <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2035&q=80" alt="Travel Tour Destination" class="w-full h-full object-cover">
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
                            <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Event Management Setup" class="w-full h-full object-cover">
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
                            <img src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Modern Agriculture Technology" class="w-full h-full object-cover">
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
                            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Logistics Warehouse Operations" class="w-full h-full object-cover">
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
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" class="w-full h-full object-cover" alt="Team Collaboration Meeting">
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
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" class="w-full h-full object-cover" alt="Technology Innovation Workspace">
                    </div>
                     <div class="rounded-lg overflow-hidden fade-in-up" style="transition-delay: 600ms;">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="w-full h-full object-cover" alt="Strategic Business Presentation">
                    </div>
                </div>
            </div>
        </section>

        <!-- FINAL IMAGE GALLERY -->
        <section class="pb-20 md:pb-28 px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="rounded-lg overflow-hidden fade-in-up">
                        <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80" class="w-full h-64 object-cover" alt="Diverse Business Team">
                    </div>
                    <div class="rounded-lg overflow-hidden fade-in-up" style="transition-delay: 100ms;">
                        <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="w-full h-64 object-cover" alt="Business Community Networking">
                    </div>
                    <div class="rounded-lg overflow-hidden fade-in-up" style="transition-delay: 200ms;">
                        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="w-full h-64 object-cover" alt="Tech Startup Innovation">
                    </div>
                    <div class="rounded-lg overflow-hidden fade-in-up" style="transition-delay: 300ms;">
                        <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" class="w-full h-64 object-cover" alt="Modern Workspace Design">
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
                            <img src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Modern Agriculture Technology" class="w-full h-full object-cover">
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
                            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Logistics Warehouse Innovation" class="w-full h-full object-cover">
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
                            <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="AI Technology Development" class="w-full h-full object-cover">
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
    

    

@endsection