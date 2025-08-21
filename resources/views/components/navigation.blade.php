<!-- NAVIGATION -->
<header id="navbar" class="fixed top-0 inset-x-0 z-50 w-full navbar navbar-transparent">
  <nav class="mx-auto max-w-7xl px-3 sm:px-4 lg:px-6 xl:px-8 py-3 sm:py-4">
    <div class="flex items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center flex-shrink-0">
        <a href="{{ url('/') }}">
          <img src="{{ asset('images/logo1.png') }}" alt="Ascend Stratus" class="h-9 sm:h-8 w-auto">
        </a>
      </div>
      
      <!-- Desktop Navigation -->
      <ul class="hidden lg:flex items-center space-x-4 xl:space-x-6 text-sm font-medium">
        <li><a href="{{ url('/about') }}" class="text-white/90 hover:text-white transition-all duration-300 hover:scale-105 px-3 py-2 rounded-md hover:bg-white/10">About</a></li>
        <li><a href="{{ url('/benefits') }}" class="text-white/90 hover:text-white transition-all duration-300 hover:scale-105 px-3 py-2 rounded-md hover:bg-white/10">Benefits</a></li>
        <li><a href="{{ url('/products') }}" class="text-white/90 hover:text-white transition-all duration-300 hover:scale-105 px-3 py-2 rounded-md hover:bg-white/10">Products</a></li>
        <li><a href="{{ url('/culture') }}" class="text-white/90 hover:text-white transition-all duration-300 hover:scale-105 px-3 py-2 rounded-md hover:bg-white/10">Culture</a></li>
        <li><a href="{{ url('/portfolio') }}" class="text-white/90 hover:text-white transition-all duration-300 hover:scale-105 px-3 py-2 rounded-md hover:bg-white/10">Portfolio</a></li>
        <li><a href="{{ url('/insights') }}" class="text-white/90 hover:text-white transition-all duration-300 hover:scale-105 px-3 py-2 rounded-md hover:bg-white/10">Insights</a></li>
        <li><a href="{{ url('/contact') }}" class="text-white/90 hover:text-white transition-all duration-300 hover:scale-105 px-3 py-2 rounded-md hover:bg-white/10">Contact</a></li>
      </ul>
      
      <!-- CTA and Mobile Menu Button -->
      <div class="flex items-center space-x-3 sm:space-x-4">
        <a href="{{ url('/contact') }}" class="hidden sm:inline-flex bg-cyan-300 text-dark-turquoise px-4 lg:px-6 py-2.5 rounded-md text-sm font-semibold btn-animate hover:bg-white hover:text-dark-turquoise transition-colors">
GET IN TOUCH        </a>
        <button id="mobile-menu-btn" class="lg:hidden p-2 text-white hover:bg-white/20 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-white/20" aria-label="Open mobile menu" aria-expanded="false">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>
  </nav>
</header>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay" class="mobile-menu-overlay lg:hidden" aria-hidden="true"></div>

<!-- Mobile Menu -->
<nav id="mobile-menu" class="mobile-menu lg:hidden fixed top-0 right-0 h-full w-80 sm:w-96 bg-black/95 backdrop-blur-xl border-l border-white/10 z-50" role="dialog" aria-modal="true" aria-labelledby="mobile-menu-title">
  <div class="flex flex-col h-full">
    <!-- Mobile Menu Header -->
    <div class="flex justify-between items-center p-6 border-b border-white/10">
      <a href="{{ url('/') }}">
        <img src="{{ asset('images/logo1.png') }}" alt="Ascend Stratus" class="h-8 w-auto" id="mobile-menu-title">
      </a>
      <button id="mobile-menu-close" class="p-2 text-white hover:bg-white/20 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-white/20" aria-label="Close mobile menu">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
    
    <!-- Mobile Menu Content -->
    <div class="flex-1 overflow-y-auto px-6 py-6">
      <ul class="space-y-2 text-base font-medium">
        <li><a href="{{ url('/about') }}" class="block text-white/90 hover:text-white hover:bg-white/10 transition-all duration-200 py-3 px-4 rounded-lg">About</a></li>
        <li><a href="{{ url('/benefits') }}" class="block text-white/90 hover:text-white hover:bg-white/10 transition-all duration-200 py-3 px-4 rounded-lg">Benefits</a></li>
        <li><a href="{{ url('/products') }}" class="block text-white/90 hover:text-white hover:bg-white/10 transition-all duration-200 py-3 px-4 rounded-lg">Products</a></li>
        <li><a href="{{ url('/culture') }}" class="block text-white/90 hover:text-white hover:bg-white/10 transition-all duration-200 py-3 px-4 rounded-lg">Culture</a></li>
        <li><a href="{{ url('/portfolio') }}" class="block text-white/90 hover:text-white hover:bg-white/10 transition-all duration-200 py-3 px-4 rounded-lg">Portfolio</a></li>
        <li><a href="{{ url('/insights') }}" class="block text-white/90 hover:text-white hover:bg-white/10 transition-all duration-200 py-3 px-4 rounded-lg">Insights</a></li>
        <li><a href="{{ url('/contact') }}" class="block text-white/90 hover:text-white hover:bg-white/10 transition-all duration-200 py-3 px-4 rounded-lg">Contact</a></li>
      </ul>
    </div>
    
    <!-- Mobile Menu Footer -->
    <div class="p-6 border-t border-white/10">
      <button class="w-full bg-cyan-300 text-dark-turquoise px-6 py-3 rounded-lg text-base font-semibold btn-animate hover:bg-white hover:text-dark-turquoise transition-colors focus:outline-none focus:ring-2 focus:ring-cyan-400">
        Partner With Us
      </button>
    </div>
  </div>
</nav>
