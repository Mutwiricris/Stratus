<!-- NAVIGATION -->
<header id="navbar" class="fixed top-0 inset-x-0 z-50 w-full navbar bg-white  border-b border-gray-100">
  <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-3">
    <div class="flex items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center flex-shrink-0">
        <!-- Logo -->
        <div class="flex items-center">
          <a href="{{ url('/') }}" class="flex items-center space-x-3">
            <img src="{{ asset('images/logo1.png') }}" alt="Ascend Stratus" class="h-8 w-auto">
            <span class="text-gray-900 font-bold text-xl">Ascend Stratus</span>
          </a>
        </div>
      </div>
      
      <!-- Desktop Navigation -->
      <ul class="hidden lg:flex items-center space-x-8 text-sm font-medium">
        <li><a href="{{ url('/') }}" class="text-gray-700 hover:text-gray-900 transition-colors py-2">Home.</a></li>
        <li class="relative group">
          <a href="{{ url('/products') }}" class="text-gray-700 hover:text-gray-900 transition-colors py-2 flex items-center gap-1">
            Services. 
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </a>
        </li>
        <li class="relative group">
          <a href="{{ url('/about') }}" class="text-gray-700 hover:text-gray-900 transition-colors py-2 flex items-center gap-1">
            About us. 
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </a>
        </li>
        <li><a href="{{ url('/portfolio') }}" class="text-gray-700 hover:text-gray-900 transition-colors py-2">Cases.</a></li>
        <li><a href="{{ url('/insights') }}" class="text-gray-700 hover:text-gray-900 transition-colors py-2">Blog.</a></li>
      </ul>
      
      <!-- Right Side -->
      <div class="flex items-center space-x-4">
        <a href="{{ url('/contact') }}" class="hidden sm:inline-flex bg-teal-600 text-white px-6 py-2.5 rounded-lg text-sm font-semibold hover:bg-teal-700 transition-colors">
          Contact
        </a>
        
        <!-- Language Selector -->
        <div class="hidden sm:flex items-center gap-2 text-sm">
          <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAyMCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjIwIiBoZWlnaHQ9IjE0IiBmaWxsPSIjRkZGRkZGIi8+CjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSI0LjY2NjY3IiBmaWxsPSIjRkY0NDQ0Ii8+CjxyZWN0IHk9IjkuMzMzMzQiIHdpZHRoPSIyMCIgaGVpZ2h0PSI0LjY2NjY3IiBmaWxsPSIjRkY0NDQ0Ii8+Cjwvc3ZnPgo=" alt="EN" class="w-5 h-4">
          <span class="text-gray-700 font-medium">EN</span>
        </div>
        
        <button id="mobile-menu-btn" class="lg:hidden p-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-gray-200" aria-label="Open mobile menu" aria-expanded="false">
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
<nav id="mobile-menu" class="mobile-menu lg:hidden fixed top-0 right-0 h-full w-80 sm:w-96 bg-white shadow-2xl border-l border-gray-200 z-50" role="dialog" aria-modal="true" aria-labelledby="mobile-menu-title">
  <div class="flex flex-col h-full">
    <!-- Mobile Menu Header -->
    <div class="flex justify-between items-center p-6 border-b border-gray-200">
      <a href="{{ url('/') }}" class="flex items-center">
        <div class="flex items-center gap-3">
          <img src="{{ asset('images/logo.png') }}" alt="Ascend Stratus" class="h-8 w-auto">
          <span class="text-xl font-bold text-gray-900" id="mobile-menu-title">Ascend Stratus</span>
        </div>
      </a>
      <button id="mobile-menu-close" class="p-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-gray-200" aria-label="Close mobile menu">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
    
    <!-- Mobile Menu Content -->
    <div class="flex-1 overflow-y-auto px-6 py-6">
      <ul class="space-y-2 text-base font-medium">
        <li><a href="{{ url('/') }}" class="block text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition-all duration-200 py-3 px-4 rounded-lg">Home.</a></li>
        <li><a href="{{ url('/products') }}" class="block text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition-all duration-200 py-3 px-4 rounded-lg">Services.</a></li>
        <li><a href="{{ url('/about') }}" class="block text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition-all duration-200 py-3 px-4 rounded-lg">About us.</a></li>
        <li><a href="{{ url('/portfolio') }}" class="block text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition-all duration-200 py-3 px-4 rounded-lg">Cases.</a></li>
        <li><a href="{{ url('/insights') }}" class="block text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition-all duration-200 py-3 px-4 rounded-lg">Blog.</a></li>
      </ul>
      
      <!-- Language Selector Mobile -->
      <div class="mt-8 pt-6 border-t border-gray-200">
        <div class="flex items-center gap-2 px-4 py-3">
          <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAyMCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjIwIiBoZWlnaHQ9IjE0IiBmaWxsPSIjRkZGRkZGIi8+CjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSI0LjY2NjY3IiBmaWxsPSIjRkY0NDQ0Ii8+CjxyZWN0IHk9IjkuMzMzMzQiIHdpZHRoPSIyMCIgaGVpZ2h0PSI0LjY2NjY3IiBmaWxsPSIjRkY0NDQ0Ii8+Cjwvc3ZnPgo=" alt="EN" class="w-5 h-4">
          <span class="text-gray-700 font-medium">EN</span>
        </div>
      </div>
    </div>
    
    <!-- Mobile Menu Footer -->
    <div class="p-6 border-t border-gray-200">
      <a href="{{ url('/contact') }}" class="w-full bg-teal-600 text-white px-6 py-3 rounded-lg text-base font-semibold hover:bg-teal-700 transition-colors focus:outline-none focus:ring-2 focus:ring-teal-400 block text-center">
        Contact
      </a>
    </div>
  </div>
</nav>
