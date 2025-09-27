<!-- NAVIGATION -->
<header id="navbar" class="fixed top-0 inset-x-0 z-50 w-full navbar transition-all duration-300">
  <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-3">
    <div class="flex items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center flex-shrink-0">
        <!-- Logo -->
        <div class="flex items-center">
          <a href="{{ url('/') }}" class="flex items-center space-x-3">
            <!-- <img src="{{ asset('images/logo1.png') }}" alt="Ascend Stratus" class="h-8 w-auto"> -->
            <span class="text-gray-900 font-bold text-xl">Ascend Stratus</span>
          </a>
        </div>
      </div>
      
      <!-- Desktop Navigation -->
      <ul class="hidden lg:flex items-center space-x-8 text-sm font-semibold">
        <li><a href="{{ url('/') }}" class="text-gray-800 hover:text-teal-600 transition-colors py-2">Home</a></li>
        <li class="relative group">
          <a href="{{ url('/services') }}" class="text-gray-800 hover:text-teal-600 transition-colors py-2 flex items-center gap-1">
            Services
            <svg class="w-4 h-4 group-hover:rotate-180 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </a>
          <div class="absolute top-full left-0 w-64 bg-white shadow-lg rounded-lg mt-2 opacity-0 group-hover:opacity-100 group-hover:mt-0 transition-all duration-300 invisible group-hover:visible">
            <div class="p-4">
              <a href="{{ url('/services/web-applications') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 rounded-lg">Web Applications</a>
              <a href="{{ url('/services/mobile-app-development') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 rounded-lg">Mobile App Development</a>
              <a href="{{ url('/services/digital-transformation') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 rounded-lg">Digital Transformation</a>
              <a href="{{ url('/services/dev-team-as-a-service') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 rounded-lg">Dev Team as a Service</a>
              <a href="{{ url('/services/ecommerce-solutions') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 rounded-lg">E-Commerce Solutions</a>
              <a href="{{ url('/services/enterprise-software') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 rounded-lg">Enterprise Software</a>
            </div>
          </div>
        </li>
        <li class="relative group">
          <a href="{{ url('/about') }}" class="text-gray-800 hover:text-teal-600 transition-colors py-2 flex items-center gap-1">
            About Us
            <svg class="w-4 h-4 group-hover:rotate-180 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </a>
          <div class="absolute top-full left-0 w-56 bg-white shadow-lg rounded-lg mt-2 opacity-0 group-hover:opacity-100 group-hover:mt-0 transition-all duration-300 invisible group-hover:visible">
            <div class="p-4">
              <a href="{{ url('/about') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 rounded-lg">Our Story</a>
              <a href="{{ url('/culture') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 rounded-lg">Our Culture</a>
              <a href="{{ url('/benefits') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 rounded-lg">Benefits</a>
            </div>
          </div>
        </li>
        <li><a href="{{ url('/portfolio') }}" class="text-gray-800 hover:text-teal-600 transition-colors py-2">Portfolio</a></li>
        <li><a href="{{ url('/insights') }}" class="text-gray-800 hover:text-teal-600 transition-colors py-2">Insights</a></li>
      </ul>
      
      <!-- Right Side -->
      <div class="flex items-center space-x-4">
        <a href="{{ url('/contact') }}" class="hidden sm:inline-flex bg-teal-600 text-white px-6 py-2.5 rounded-lg text-sm font-semibold hover:bg-teal-700 transition-colors">
          Contact
        </a>
        
        <!-- Language Selector -->
        <div class="hidden sm:flex items-center gap-2 text-sm">
          <span class="text-gray-700 font-medium">EN</span>
        </div>
        
        <button id="mobile-menu-btn" class="lg:hidden p-3 text-gray-700 hover:bg-teal-50 hover:text-teal-600 rounded-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-teal-200 relative z-50 cursor-pointer" aria-label="Open mobile menu" aria-expanded="false" style="min-width: 44px; min-height: 44px;">
          <div class="hamburger-icon flex flex-col justify-center items-center">
            <span class="hamburger-line block w-6 h-0.5 bg-current transition-all duration-300 mb-1"></span>
            <span class="hamburger-line block w-6 h-0.5 bg-current transition-all duration-300 mb-1"></span>
            <span class="hamburger-line block w-6 h-0.5 bg-current transition-all duration-300"></span>
          </div>
        </button>
      </div>
    </div>
  </nav>
</header>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay" class="mobile-menu-overlay lg:hidden" aria-hidden="true"></div>

<!-- Mobile Menu -->
<nav id="mobile-menu" class="mobile-menu lg:hidden fixed top-0 right-0 h-full w-80 sm:w-96 bg-gradient-to-br from-teal-500/20 via-cyan-500/15 to-blue-500/20 backdrop-blur-xl shadow-2xl border-l border-teal-200/30" style="z-index: 1050; transform: translateX(100%); opacity: 0; visibility: hidden; pointer-events: none;" role="dialog" aria-modal="true" aria-labelledby="mobile-menu-title">
  <div class="flex flex-col h-full">
    <!-- Mobile Menu Header -->
    <div class="flex justify-between items-center p-6 border-b border-teal-200/30 bg-white/20 backdrop-blur-sm">
      <a href="{{ url('/') }}" class="flex items-center">
        <div class="flex items-center gap-3">
          <img src="{{ asset('images/logo1.png') }}" alt="Ascend Stratus" class="h-8 w-auto">
          <span class="text-xl font-bold text-gray-900" id="mobile-menu-title">Ascend Stratus</span>
        </div>
      </a>
      <button id="mobile-menu-close" class="p-2 text-gray-700 hover:bg-teal-100/50 hover:text-teal-600 rounded-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-teal-200" aria-label="Close mobile menu">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
    
    <!-- Mobile Menu Content -->
    <div class="flex-1 overflow-y-auto px-6 py-6">
      <ul class="space-y-3 text-base font-medium">
        <li><a href="{{ url('/') }}" class="block text-gray-800 hover:text-teal-600 hover:bg-white/50 transition-all duration-200 py-4 px-4 rounded-xl border border-transparent hover:border-teal-200/50">Home</a></li>
        <li>
          <a href="{{ url('/services') }}" class="block text-gray-800 hover:text-teal-600 hover:bg-white/50 transition-all duration-200 py-4 px-4 rounded-xl border border-transparent hover:border-teal-200/50">Services</a>
          <ul class="ml-4 mt-2 space-y-1">
            <li><a href="{{ url('/services/web-applications') }}" class="block text-gray-600 hover:text-teal-600 hover:bg-white/30 transition-all duration-200 py-2 px-3 rounded-lg text-sm">Web Applications</a></li>
            <li><a href="{{ url('/services/mobile-app-development') }}" class="block text-gray-600 hover:text-teal-600 hover:bg-white/30 transition-all duration-200 py-2 px-3 rounded-lg text-sm">Mobile Development</a></li>
            <li><a href="{{ url('/services/digital-transformation') }}" class="block text-gray-600 hover:text-teal-600 hover:bg-white/30 transition-all duration-200 py-2 px-3 rounded-lg text-sm">Digital Transformation</a></li>
          </ul>
        </li>
        <li>
          <a href="{{ url('/about') }}" class="block text-gray-800 hover:text-teal-600 hover:bg-white/50 transition-all duration-200 py-4 px-4 rounded-xl border border-transparent hover:border-teal-200/50">About Us</a>
          <ul class="ml-4 mt-2 space-y-1">
            <li><a href="{{ url('/about') }}" class="block text-gray-600 hover:text-teal-600 hover:bg-white/30 transition-all duration-200 py-2 px-3 rounded-lg text-sm">Our Story</a></li>
            <li><a href="{{ url('/culture') }}" class="block text-gray-600 hover:text-teal-600 hover:bg-white/30 transition-all duration-200 py-2 px-3 rounded-lg text-sm">Our Culture</a></li>
            <li><a href="{{ url('/benefits') }}" class="block text-gray-600 hover:text-teal-600 hover:bg-white/30 transition-all duration-200 py-2 px-3 rounded-lg text-sm">Benefits</a></li>
          </ul>
        </li>
        <li><a href="{{ url('/portfolio') }}" class="block text-gray-800 hover:text-teal-600 hover:bg-white/50 transition-all duration-200 py-4 px-4 rounded-xl border border-transparent hover:border-teal-200/50">Portfolio</a></li>
        <li><a href="{{ url('/insights') }}" class="block text-gray-800 hover:text-teal-600 hover:bg-white/50 transition-all duration-200 py-4 px-4 rounded-xl border border-transparent hover:border-teal-200/50">Insights</a></li>
      </ul>
      
      <!-- Language Selector Mobile -->
      <div class="mt-8 pt-6 border-t border-teal-200/30">
        <div class="flex items-center gap-2 px-4 py-3 bg-white/30 rounded-lg">
          <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAyMCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjIwIiBoZWlnaHQ9IjE0IiBmaWxsPSIjRkZGRkZGIi8+CjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSI0LjY2NjY3IiBmaWxsPSIjRkY0NDQ0Ii8+CjxyZWN0IHk9IjkuMzMzMzQiIHdpZHRoPSIyMCIgaGVpZ2h0PSI0LjY2NjY3IiBmaWxsPSIjRkY0NDQ0Ii8+Cjwvc3ZnPgo=" alt="EN" class="w-5 h-4">
          <span class="text-gray-700 font-medium">EN</span>
        </div>
      </div>
    </div>
    
    <!-- Mobile Menu Footer -->
    <div class="p-6 border-t border-teal-200/30 bg-white/20 backdrop-blur-sm">
      <a href="{{ url('/contact') }}" class="w-full bg-gradient-to-r from-teal-600 to-cyan-600 text-white px-6 py-4 rounded-xl text-base font-semibold hover:from-teal-700 hover:to-cyan-700 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-teal-400 block text-center shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
        Contact Us
      </a>
    </div>
  </div>
</nav>
