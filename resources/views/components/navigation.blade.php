<!-- NAVIGATION -->
<style>
  /* Floating Pill Navbar Styles */
  #navbar {
    top: 24px;
    width: calc(100% - 48px);
    max-width: 1200px;
    margin: 0 auto;
    border-radius: 100px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(24px);
    -webkit-backdrop-filter: blur(24px);
    border: 1px solid rgba(0, 0, 0, 0.05);
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    transition: transform 0.8s cubic-bezier(0.34, 1.56, 0.64, 1), opacity 0.8s ease, background-color 0.3s ease;
  }

  /* When hidden during curtain */
  #navbar.as-hidden-nav {
    opacity: 0;
    transform: translateY(-40px);
    pointer-events: none;
  }

  /* When revealed after curtain */
  #navbar.as-revealed {
    opacity: 1;
    transform: translateY(0);
    pointer-events: auto;
  }

  /* Scrolled state for the pill */
  #navbar.navbar-scrolled {
    background: rgba(15, 30, 48, 0.95);
    border-color: rgba(20, 184, 166, 0.3);
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4), 0 0 20px rgba(20, 184, 166, 0.1);
  }

  /* Text colors based on scroll state */
  #navbar.navbar-scrolled .as-nav-text,
  #navbar.navbar-scrolled .as-nav-link {
    color: #f3f4f6;
    /* text-gray-100 */
  }

  #navbar.navbar-scrolled .as-mobile-btn {
    color: #f3f4f6;
    /* text-gray-100 */
  }

  /* Dropdown hover animations */
  .nav-dropdown {
    opacity: 0;
    transform: translateY(10px) scale(0.95);
    pointer-events: none;
    transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .group:hover .nav-dropdown {
    opacity: 1;
    transform: translateY(0) scale(1);
    pointer-events: auto;
  }

  /* Mobile trigger adjustments for pill */
  @media (max-width: 1024px) {
    #navbar {
      top: 16px;
      width: calc(100% - 32px);
      border-radius: 24px;
    }
  }
</style>

<header id="navbar" class="fixed inset-x-0 z-50">
  <nav class="w-full px-6 py-3">
    <div class="flex items-center justify-between">

      <!-- Logo -->
      <div class="flex items-center flex-shrink-0">
        <a href="{{ url('/') }}" class="flex items-center space-x-3 group">
          <div
            class="w-8 h-8 rounded-full bg-gradient-to-tr from-teal-500 to-cyan-500 flex items-center justify-center text-white font-bold text-lg group-hover:shadow-[0_0_15px_rgba(20,184,166,0.6)] transition-shadow">
            A</div>
          <span
            class="font-bold text-xl tracking-wide group-hover:text-teal-400 text-gray-900 transition-colors as-nav-text">Ascend
            Stratus</span>
        </a>
      </div>

      <!-- Desktop Navigation -->
      <ul class="hidden lg:flex items-center space-x-8 text-sm font-semibold">
        <li><a href="{{ url('/') }}"
            class="text-gray-800 hover:text-teal-500 transition-colors py-2 relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-teal-400 after:transition-all hover:after:w-full as-nav-link">Home</a>
        </li>

        <li class="relative group">
          <a href="{{ url('/services') }}"
            class="text-gray-800 hover:text-teal-500 transition-colors py-2 flex items-center gap-1 relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-teal-400 after:transition-all hover:after:w-full as-nav-link">
            Services
            <svg class="w-4 h-4 text-teal-600 group-hover:rotate-180 transition-transform duration-300 as-nav-icon"
              fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <!-- Glass dropdown -->
          <div
            class="nav-dropdown absolute top-full left-0 w-64 bg-slate-900/95 backdrop-blur-xl border border-white/10 shadow-2xl rounded-2xl mt-4 z-50 overflow-hidden">
            <div class="p-2">
              <a href="{{ url('/services/web-applications') }}"
                class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl transition-colors">Web
                Applications</a>
              <a href="{{ url('/services/mobile-app-development') }}"
                class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl transition-colors">Mobile
                App Development</a>
              <a href="{{ url('/services/digital-transformation') }}"
                class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl transition-colors">Digital
                Transformation</a>
              <a href="{{ url('/services/dev-team-as-a-service') }}"
                class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl transition-colors">Dev
                Team as a Service</a>
              <a href="{{ url('/services/ecommerce-solutions') }}"
                class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl transition-colors">E-Commerce
                Solutions</a>
              <a href="{{ url('/services/enterprise-software') }}"
                class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl transition-colors">Enterprise
                Software</a>
            </div>
          </div>
        </li>

        <li class="relative group">
          <a href="{{ url('/about') }}"
            class="text-gray-800 hover:text-teal-500 transition-colors py-2 flex items-center gap-1 relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-teal-400 after:transition-all hover:after:w-full as-nav-link">
            About Us
            <svg class="w-4 h-4 text-teal-600 group-hover:rotate-180 transition-transform duration-300 as-nav-icon"
              fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <div
            class="nav-dropdown absolute top-full left-0 w-56 bg-slate-900/95 backdrop-blur-xl border border-white/10 shadow-2xl rounded-2xl mt-4 z-50 overflow-hidden">
            <div class="p-2">
              <a href="{{ url('/about') }}"
                class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl transition-colors">Our
                Story</a>
              <a href="{{ url('/culture') }}"
                class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl transition-colors">Our
                Culture</a>
              <a href="{{ url('/benefits') }}"
                class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl transition-colors">Benefits</a>
            </div>
          </div>
        </li>

        <li><a href="{{ url('/portfolio') }}"
            class="text-gray-800 hover:text-teal-500 transition-colors py-2 relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-teal-400 after:transition-all hover:after:w-full as-nav-link">Portfolio</a>
        </li>
        <li><a href="{{ url('/insights') }}"
            class="text-gray-800 hover:text-teal-500 transition-colors py-2 relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-teal-400 after:transition-all hover:after:w-full as-nav-link">Insights</a>
        </li>
      </ul>

      <!-- Right Side -->
      <div class="flex items-center space-x-4">
        <a href="{{ url('/contact') }}"
          class="hidden sm:inline-flex items-center justify-center bg-teal-500 text-white px-6 py-2 rounded-full text-sm font-bold hover:bg-teal-600 hover:shadow-[0_0_20px_rgba(20,184,166,0.4)] transition-all duration-300">
          Start Project
        </a>

        <button id="mobile-menu-btn"
          class="lg:hidden p-2 text-gray-900 hover:text-teal-500 rounded-full transition-colors focus:outline-none as-mobile-btn"
          aria-label="Open mobile menu">
          <div class="flex flex-col justify-center items-center w-6 h-6">
            <span class="block w-5 h-0.5 bg-current transition-all duration-300 mb-1.5"></span>
            <span class="block w-5 h-0.5 bg-current transition-all duration-300"></span>
          </div>
        </button>
      </div>

    </div>
  </nav>
</header>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay" class="mobile-menu-overlay lg:hidden" aria-hidden="true"></div>

<!-- Mobile Menu -->
<nav id="mobile-menu"
  class="mobile-menu lg:hidden fixed top-0 right-0 h-full w-80 sm:w-96 bg-slate-900/95 backdrop-blur-2xl shadow-2xl border-l border-white/10"
  style="z-index: 1050; transform: translateX(100%); opacity: 0; visibility: hidden; pointer-events: none;"
  role="dialog" aria-modal="true" aria-labelledby="mobile-menu-title">
  <div class="flex flex-col h-full">
    <!-- Mobile Menu Header -->
    <div class="flex justify-between items-center p-6 border-b border-white/10 bg-white/5">
      <a href="{{ url('/') }}" class="flex items-center group">
        <div class="flex items-center gap-3">
          <div
            class="w-8 h-8 rounded-full bg-gradient-to-tr from-teal-500 to-cyan-500 flex items-center justify-center text-white font-bold text-lg">
            A</div>
          <span class="text-xl font-bold text-white tracking-wide" id="mobile-menu-title">Ascend Stratus</span>
        </div>
      </a>
      <button id="mobile-menu-close"
        class="p-2 text-gray-400 hover:bg-white/10 hover:text-white rounded-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-teal-500"
        aria-label="Close mobile menu">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <!-- Mobile Menu Content -->
    <div class="flex-1 overflow-y-auto px-6 py-6 custom-scrollbar">
      <ul class="space-y-2 text-base font-medium">
        <li><a href="{{ url('/') }}"
            class="block text-gray-300 hover:text-white hover:bg-white/10 transition-all duration-200 py-3 px-4 rounded-xl border border-transparent hover:border-white/10">Home</a>
        </li>
        <li>
          <a href="{{ url('/services') }}"
            class="block text-gray-300 hover:text-white hover:bg-white/10 transition-all duration-200 py-3 px-4 rounded-xl border border-transparent hover:border-white/10">Services</a>
          <ul class="ml-4 mt-1 space-y-1 border-l border-white/10 pl-2">
            <li><a href="{{ url('/services/web-applications') }}"
                class="block text-gray-400 hover:text-teal-400 hover:bg-white/5 transition-all duration-200 py-2 px-3 rounded-lg text-sm">Web
                Applications</a></li>
            <li><a href="{{ url('/services/mobile-app-development') }}"
                class="block text-gray-400 hover:text-teal-400 hover:bg-white/5 transition-all duration-200 py-2 px-3 rounded-lg text-sm">Mobile
                App Development</a></li>
            <li><a href="{{ url('/services/enterprise-software') }}"
                class="block text-gray-400 hover:text-teal-400 hover:bg-white/5 transition-all duration-200 py-2 px-3 rounded-lg text-sm">Enterprise
                Software</a></li>
            <li><a href="{{ url('/services/digital-transformation') }}"
                class="block text-gray-400 hover:text-teal-400 hover:bg-white/5 transition-all duration-200 py-2 px-3 rounded-lg text-sm">Digital
                Transformation</a></li>
            <li><a href="{{ url('/services/dev-team-as-a-service') }}"
                class="block text-gray-400 hover:text-teal-400 hover:bg-white/5 transition-all duration-200 py-2 px-3 rounded-lg text-sm">E-Commerce
                Solutions</a></li>
          </ul>
        </li>
        <li>
          <a href="{{ url('/about') }}"
            class="block text-gray-300 hover:text-white hover:bg-white/10 transition-all duration-200 py-3 px-4 rounded-xl border border-transparent hover:border-white/10">About
            Us</a>
          <ul class="ml-4 mt-1 space-y-1 border-l border-white/10 pl-2">
            <li><a href="{{ url('/about') }}"
                class="block text-gray-400 hover:text-teal-400 hover:bg-white/5 transition-all duration-200 py-2 px-3 rounded-lg text-sm">Our
                Story</a></li>
            <li><a href="{{ url('/culture') }}"
                class="block text-gray-400 hover:text-teal-400 hover:bg-white/5 transition-all duration-200 py-2 px-3 rounded-lg text-sm">Our
                Culture</a></li>
            <li><a href="{{ url('/benefits') }}"
                class="block text-gray-400 hover:text-teal-400 hover:bg-white/5 transition-all duration-200 py-2 px-3 rounded-lg text-sm">Benefits</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="{{ url('/portfolio') }}"
            class="block text-gray-300 hover:text-white hover:bg-white/10 transition-all duration-200 py-3 px-4 rounded-xl border border-transparent hover:border-white/10">Portfolio</a>
          <ul class="ml-4 mt-1 space-y-1 border-l border-white/10 pl-2">
            <li><a href="{{ url('/products/logiflow') }}"
                class="block text-gray-400 hover:text-teal-400 hover:bg-white/5 transition-all duration-200 py-2 px-3 rounded-lg text-sm">LogiFlow</a>
            </li>
            <li><a href="{{ url('/products/agrismart') }}"
                class="block text-gray-400 hover:text-teal-400 hover:bg-white/5 transition-all duration-200 py-2 px-3 rounded-lg text-sm">AgriSmart</a>
            </li>
            <li><a href="{{ url('/products/retail-pro') }}"
                class="block text-gray-400 hover:text-teal-400 hover:bg-white/5 transition-all duration-200 py-2 px-3 rounded-lg text-sm">Retail
                Pro</a></li>
          </ul>
        </li>
        <li><a href="{{ url('/insights') }}"
            class="block text-gray-300 hover:text-white hover:bg-white/10 transition-all duration-200 py-3 px-4 rounded-xl border border-transparent hover:border-white/10">Insights</a>
        </li>
      </ul>

      <!-- Language Selector Mobile -->
      <div class="mt-8 pt-6 border-t border-white/10">
        <div
          class="flex items-center gap-2 px-4 py-3 bg-white/5 border border-white/10 rounded-lg cursor-pointer hover:bg-white/10 transition-colors">
          <img
            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAyMCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjIwIiBoZWlnaHQ9IjE0IiBmaWxsPSIjRkZGRkZGIi8+CjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSI0LjY2NjY3IiBmaWxsPSIjRkY0NDQ0Ii8+CjxyZWN0IHk9IjkuMzMzMzQiIHdpZHRoPSIyMCIgaGVpZ2h0PSI0LjY2NjY3IiBmaWxsPSIjRkY0NDQ0Ii8+Cjwvc3ZnPgo="
            alt="EN" class="w-5 h-4 rounded-sm">
          <span class="text-gray-300 font-medium">EN</span>
        </div>
      </div>
    </div>

    <!-- Mobile Menu Footer -->
    <div class="p-6 border-t border-white/10 bg-black/20">
      <a href="{{ url('/contact') }}"
        class="w-full bg-gradient-to-r from-teal-500 to-cyan-500 text-white px-6 py-4 rounded-xl text-base font-bold hover:shadow-[0_0_20px_rgba(20,184,166,0.4)] transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-teal-400 block text-center transform hover:-translate-y-0.5">
        Start Project
      </a>
    </div>
  </div>
</nav>