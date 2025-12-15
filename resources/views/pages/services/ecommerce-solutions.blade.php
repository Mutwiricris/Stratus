@extends('layouts.detail')

@section('title', 'E-Commerce Solutions - Custom Online Stores & Marketplace Platforms | Ascend Stratus')
@section('description', 'Launch and scale your online business with our comprehensive e-commerce solutions. Custom stores, marketplace platforms, payment integration, and mobile commerce designed for African markets.')
@section('keywords', 'e-commerce solutions Africa, online store development Kenya, Shopify development, WooCommerce expert, Magento developer, marketplace platform, M-Pesa integration, mobile commerce')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[90vh] flex items-center bg-gradient-to-br from-teal-50 via-white to-cyan-50/30 overflow-hidden">
  <!-- Animated Background Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-teal-400/20 to-cyan-400/20 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-br from-blue-400/20 to-teal-400/20 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-br from-cyan-400/10 to-teal-400/10 rounded-full blur-3xl"></div>
    <!-- Floating Shopping Icons -->
    <div class="absolute top-20 left-20 text-teal-200 opacity-20 floating" style="animation-delay: 0s;">
      <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
    </div>
    <div class="absolute bottom-32 right-32 text-cyan-200 opacity-20 floating" style="animation-delay: 2s;">
      <svg class="w-20 h-20" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/></svg>
    </div>
  </div>

  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
      <!-- Left Content -->
      <div class="fade-in-up">
        <a href="{{ url('/services') }}" class="inline-flex items-center text-teal-600 hover:text-teal-700 font-medium mb-6 transition-colors duration-300 group">
          <svg class="w-4 h-4 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
          Back to Services
        </a>

        <span class="inline-flex items-center gap-2 text-teal-600 font-semibold text-sm uppercase tracking-wide mb-6 bg-teal-50 px-4 py-2 rounded-full">
          <div class="w-2 h-2 bg-teal-500 rounded-full animate-pulse"></div>
          E-Commerce Solutions
        </span>

        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-8 leading-tight">
          <span class="text-gray-900">Build Your</span>
          <span class="bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 bg-clip-text text-transparent"> Digital Storefront</span>
          <span class="block text-gray-900">That Sells 24/7</span>
        </h1>

        <p class="text-lg sm:text-xl text-gray-600 mb-8 leading-relaxed max-w-xl">
          Launch a powerful online store that converts visitors into customers. We build custom e-commerce solutions with African payment integration, mobile-first design, and the scalability to grow with your business.
        </p>

        <!-- Key Stats -->
        <div class="grid grid-cols-3 gap-6 mb-10">
          <div class="text-center">
            <div class="text-3xl font-bold text-teal-600">300%</div>
            <div class="text-sm text-gray-600">Avg. Sales Increase</div>
          </div>
          <div class="text-center">
            <div class="text-3xl font-bold text-cyan-600">50+</div>
            <div class="text-sm text-gray-600">Stores Launched</div>
          </div>
          <div class="text-center">
            <div class="text-3xl font-bold text-blue-600">99.9%</div>
            <div class="text-sm text-gray-600">Uptime Guarantee</div>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4">
          <a href="{{ url('/contact') }}" class="group inline-flex items-center justify-center bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl hover:shadow-teal-500/25 transition-all duration-500 hover:scale-105">
            Launch Your Store
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
          </a>
          <a href="#platforms" class="inline-flex items-center justify-center border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-2xl text-lg font-semibold hover:border-teal-600 hover:text-teal-600 transition-all duration-300">
            View Platforms
          </a>
        </div>
      </div>

      <!-- Right Image -->
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="relative">
          <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-6 shadow-2xl border border-gray-100">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=2070"
                 alt="E-commerce dashboard showing sales analytics and order management"
                 class="w-full h-[400px] object-cover rounded-2xl">

            <!-- Floating Stats Cards -->
            <div class="absolute -top-6 -left-6 bg-white rounded-2xl shadow-xl p-4 floating border border-gray-100">
              <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                  <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                  </svg>
                </div>
                <div>
                  <div class="text-xl font-bold text-gray-900">+247%</div>
                  <div class="text-xs text-gray-500">Revenue Growth</div>
                </div>
              </div>
            </div>

            <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-4 floating" style="animation-delay: 1s;">
              <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center">
                  <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                  </svg>
                </div>
                <div>
                  <div class="text-xl font-bold text-gray-900">2,847</div>
                  <div class="text-xs text-gray-500">Orders Today</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why E-Commerce Section -->
<section class="py-20 md:py-28 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        Why Go Digital
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
        The Future of Retail is <span class="text-teal-600">Online</span>
      </h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        Africa's e-commerce market is projected to reach $75 billion by 2025. Don't miss the opportunity to capture your share of this growing market.
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Stat Card 1 -->
      <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-2xl p-8 text-center fade-in-up">
        <div class="text-4xl font-bold text-teal-600 mb-2">500M+</div>
        <div class="text-gray-700 font-medium">Internet Users in Africa</div>
        <p class="text-sm text-gray-500 mt-2">Growing rapidly every year</p>
      </div>

      <!-- Stat Card 2 -->
      <div class="bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-8 text-center fade-in-up" style="transition-delay: 100ms;">
        <div class="text-4xl font-bold text-cyan-600 mb-2">75%</div>
        <div class="text-gray-700 font-medium">Mobile Commerce Share</div>
        <p class="text-sm text-gray-500 mt-2">Mobile-first shopping habits</p>
      </div>

      <!-- Stat Card 3 -->
      <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 text-center fade-in-up" style="transition-delay: 200ms;">
        <div class="text-4xl font-bold text-blue-600 mb-2">40%</div>
        <div class="text-gray-700 font-medium">YoY E-Commerce Growth</div>
        <p class="text-sm text-gray-500 mt-2">Fastest growing region globally</p>
      </div>

      <!-- Stat Card 4 -->
      <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 text-center fade-in-up" style="transition-delay: 300ms;">
        <div class="text-4xl font-bold text-indigo-600 mb-2">24/7</div>
        <div class="text-gray-700 font-medium">Sales Availability</div>
        <p class="text-sm text-gray-500 mt-2">Never close your store</p>
      </div>
    </div>
  </div>
</section>

<!-- Platforms Section -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-teal-50/30" id="platforms">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        Platform Expertise
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
        E-Commerce Platforms We Master
      </h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        Whether you need a quick launch or a fully custom solution, we have expertise across all major platforms
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Shopify -->
      <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 text-center fade-in-up">
        <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-green-500/25">
          <span class="text-white font-bold text-2xl">S</span>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">Shopify</h3>
        <p class="text-gray-600 text-sm mb-4">Perfect for quick launches and scaling businesses. Includes Shopify Plus for enterprise.</p>
        <ul class="text-sm text-gray-500 space-y-2">
          <li>Quick 2-week setup</li>
          <li>100+ payment gateways</li>
          <li>Built-in SEO tools</li>
        </ul>
      </div>

      <!-- WooCommerce -->
      <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 text-center fade-in-up" style="transition-delay: 100ms;">
        <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-purple-500 to-purple-700 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-purple-500/25">
          <span class="text-white font-bold text-2xl">W</span>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">WooCommerce</h3>
        <p class="text-gray-600 text-sm mb-4">Flexible WordPress solution with unlimited customization and no monthly fees.</p>
        <ul class="text-sm text-gray-500 space-y-2">
          <li>Full code ownership</li>
          <li>Unlimited products</li>
          <li>WordPress ecosystem</li>
        </ul>
      </div>

      <!-- Magento -->
      <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 text-center fade-in-up" style="transition-delay: 200ms;">
        <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-orange-500/25">
          <span class="text-white font-bold text-2xl">M</span>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">Magento</h3>
        <p class="text-gray-600 text-sm mb-4">Enterprise-grade platform for large catalogs and complex B2B requirements.</p>
        <ul class="text-sm text-gray-500 space-y-2">
          <li>Multi-store capable</li>
          <li>Advanced B2B features</li>
          <li>Unlimited scalability</li>
        </ul>
      </div>

      <!-- Custom Laravel -->
      <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 text-center fade-in-up" style="transition-delay: 300ms;">
        <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-teal-500/25">
          <span class="text-white font-bold text-2xl">C</span>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">Custom Built</h3>
        <p class="text-gray-600 text-sm mb-4">Fully bespoke solution with Laravel for unique business requirements.</p>
        <ul class="text-sm text-gray-500 space-y-2">
          <li>100% custom code</li>
          <li>Unique workflows</li>
          <li>Full IP ownership</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="py-20 md:py-28 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        Complete Solution
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
        Everything Your Store Needs to <span class="text-teal-600">Succeed</span>
      </h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        We don't just build stores - we build complete e-commerce ecosystems designed for the African market
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- African Payment Integration -->
      <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 fade-in-up">
        <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">African Payment Integration</h3>
        <p class="text-gray-600 mb-4">Accept payments the way your customers prefer - M-Pesa, Airtel Money, MTN MoMo, cards, and bank transfers.</p>
        <ul class="text-sm text-gray-500 space-y-2">
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>M-Pesa & Mobile Money</li>
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Visa/Mastercard/Amex</li>
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Multi-currency support</li>
        </ul>
      </div>

      <!-- Mobile-First Design -->
      <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 fade-in-up" style="transition-delay: 100ms;">
        <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">Mobile-First Design</h3>
        <p class="text-gray-600 mb-4">75% of African online shoppers use mobile. We design for mobile-first to capture every sale.</p>
        <ul class="text-sm text-gray-500 space-y-2">
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Touch-optimized checkout</li>
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Fast loading on 3G/4G</li>
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>PWA capabilities</li>
        </ul>
      </div>

      <!-- Inventory Management -->
      <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 fade-in-up" style="transition-delay: 200ms;">
        <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">Smart Inventory</h3>
        <p class="text-gray-600 mb-4">Real-time stock tracking, low-stock alerts, and multi-location inventory management.</p>
        <ul class="text-sm text-gray-500 space-y-2">
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Auto-reorder points</li>
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Multi-warehouse support</li>
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Barcode scanning</li>
        </ul>
      </div>

      <!-- Shipping & Logistics -->
      <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 fade-in-up" style="transition-delay: 300ms;">
        <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">Shipping Integration</h3>
        <p class="text-gray-600 mb-4">Connect with local and international carriers for seamless order fulfillment.</p>
        <ul class="text-sm text-gray-500 space-y-2">
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Local courier integration</li>
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Real-time tracking</li>
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Rate comparison</li>
        </ul>
      </div>

      <!-- Marketing Tools -->
      <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 fade-in-up" style="transition-delay: 400ms;">
        <div class="w-14 h-14 bg-gradient-to-br from-pink-500 to-rose-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">Marketing Tools</h3>
        <p class="text-gray-600 mb-4">Built-in tools to attract customers, boost sales, and grow your business.</p>
        <ul class="text-sm text-gray-500 space-y-2">
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>SEO optimization</li>
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Email marketing</li>
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Discount & coupon codes</li>
        </ul>
      </div>

      <!-- Analytics & Reporting -->
      <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 fade-in-up" style="transition-delay: 500ms;">
        <div class="w-14 h-14 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">Analytics & Insights</h3>
        <p class="text-gray-600 mb-4">Understand your customers and make data-driven decisions to grow sales.</p>
        <ul class="text-sm text-gray-500 space-y-2">
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Sales dashboards</li>
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Customer behavior tracking</li>
          <li class="flex items-center"><svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Conversion optimization</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Process Section -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-900 to-gray-800 text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 fade-in-up">
      <span class="inline-block text-teal-400 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-400/10 px-4 py-2 rounded-full">
        Our Process
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
        From Idea to Launch in <span class="text-teal-400">4 Simple Steps</span>
      </h2>
      <p class="text-lg text-gray-400 max-w-3xl mx-auto">
        We follow a proven process to launch your store quickly without compromising on quality
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Step 1 -->
      <div class="relative fade-in-up">
        <div class="bg-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700 hover:border-teal-500/50 transition-all duration-300">
          <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-teal-500/25">
            <span class="text-2xl font-bold text-white">1</span>
          </div>
          <h3 class="text-xl font-bold mb-3">Discovery Call</h3>
          <p class="text-gray-400">We understand your business, products, target market, and goals to recommend the best solution.</p>
        </div>
        <div class="hidden lg:block absolute top-1/2 -right-4 w-8 h-0.5 bg-gradient-to-r from-teal-500 to-transparent"></div>
      </div>

      <!-- Step 2 -->
      <div class="relative fade-in-up" style="transition-delay: 100ms;">
        <div class="bg-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700 hover:border-teal-500/50 transition-all duration-300">
          <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-cyan-500/25">
            <span class="text-2xl font-bold text-white">2</span>
          </div>
          <h3 class="text-xl font-bold mb-3">Design & Plan</h3>
          <p class="text-gray-400">We create mockups and a detailed project plan with timeline and deliverables you approve.</p>
        </div>
        <div class="hidden lg:block absolute top-1/2 -right-4 w-8 h-0.5 bg-gradient-to-r from-cyan-500 to-transparent"></div>
      </div>

      <!-- Step 3 -->
      <div class="relative fade-in-up" style="transition-delay: 200ms;">
        <div class="bg-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700 hover:border-teal-500/50 transition-all duration-300">
          <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-blue-500/25">
            <span class="text-2xl font-bold text-white">3</span>
          </div>
          <h3 class="text-xl font-bold mb-3">Build & Test</h3>
          <p class="text-gray-400">Our team builds your store with weekly updates. Rigorous testing ensures everything works perfectly.</p>
        </div>
        <div class="hidden lg:block absolute top-1/2 -right-4 w-8 h-0.5 bg-gradient-to-r from-blue-500 to-transparent"></div>
      </div>

      <!-- Step 4 -->
      <div class="fade-in-up" style="transition-delay: 300ms;">
        <div class="bg-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700 hover:border-teal-500/50 transition-all duration-300">
          <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-indigo-500/25">
            <span class="text-2xl font-bold text-white">4</span>
          </div>
          <h3 class="text-xl font-bold mb-3">Launch & Grow</h3>
          <p class="text-gray-400">We launch your store and provide training, then ongoing support to help you scale.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 md:py-28 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        Success Stories
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
        Trusted by Growing <span class="text-teal-600">African Businesses</span>
      </h2>
    </div>

    <div class="grid lg:grid-cols-3 gap-8">
      <!-- Testimonial 1 -->
      <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 fade-in-up">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        </div>
        <p class="text-gray-600 mb-6 leading-relaxed">"Our Shopify store went live in just 3 weeks. Within 6 months, we had 500% more sales than our physical shop. The M-Pesa integration was seamless - our customers love it!"</p>
        <div class="flex items-center">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100" alt="Grace Mwende" class="w-12 h-12 rounded-full object-cover mr-4">
          <div>
            <div class="font-bold text-gray-900">Grace Mwende</div>
            <div class="text-sm text-gray-500">Founder, NairobiStyle Fashion</div>
          </div>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 fade-in-up" style="transition-delay: 100ms;">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        </div>
        <p class="text-gray-600 mb-6 leading-relaxed">"We needed a custom WooCommerce solution for our wholesale business. Ascend Stratus delivered exactly what we needed - B2B pricing, bulk orders, and credit management. Game changer!"</p>
        <div class="flex items-center">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100" alt="James Ochieng" class="w-12 h-12 rounded-full object-cover mr-4">
          <div>
            <div class="font-bold text-gray-900">James Ochieng</div>
            <div class="text-sm text-gray-500">MD, EastAfrica Distributors</div>
          </div>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 fade-in-up" style="transition-delay: 200ms;">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        </div>
        <p class="text-gray-600 mb-6 leading-relaxed">"The marketplace platform they built connects 200+ artisans with customers across Africa. The multi-vendor management and automated payouts make running it effortless."</p>
        <div class="flex items-center">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100" alt="Amara Diallo" class="w-12 h-12 rounded-full object-cover mr-4">
          <div>
            <div class="font-bold text-gray-900">Amara Diallo</div>
            <div class="text-sm text-gray-500">Founder, AfriCraft Marketplace</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-teal-50/30">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        FAQ
      </span>
      <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">
        Common Questions
      </h2>
    </div>

    <div class="space-y-4" x-data="{ open: 1 }">
      <!-- FAQ 1 -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden fade-in-up">
        <button @click="open = open === 1 ? null : 1" class="w-full px-6 py-5 text-left flex items-center justify-between">
          <span class="font-semibold text-gray-900">How long does it take to launch an e-commerce store?</span>
          <svg class="w-5 h-5 text-teal-600 transition-transform" :class="{ 'rotate-180': open === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div x-show="open === 1" x-collapse class="px-6 pb-5">
          <p class="text-gray-600">For standard Shopify or WooCommerce stores, we can launch in 2-4 weeks. Custom-built solutions typically take 6-12 weeks depending on complexity. We'll provide a detailed timeline during our discovery call.</p>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden fade-in-up" style="transition-delay: 100ms;">
        <button @click="open = open === 2 ? null : 2" class="w-full px-6 py-5 text-left flex items-center justify-between">
          <span class="font-semibold text-gray-900">Do you integrate with M-Pesa and other mobile money?</span>
          <svg class="w-5 h-5 text-teal-600 transition-transform" :class="{ 'rotate-180': open === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div x-show="open === 2" x-collapse class="px-6 pb-5">
          <p class="text-gray-600">Yes! We specialize in African payment integrations. We can connect your store with M-Pesa, Airtel Money, MTN MoMo, Orange Money, and other regional mobile money systems, plus traditional card payments.</p>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden fade-in-up" style="transition-delay: 200ms;">
        <button @click="open = open === 3 ? null : 3" class="w-full px-6 py-5 text-left flex items-center justify-between">
          <span class="font-semibold text-gray-900">What ongoing support do you provide after launch?</span>
          <svg class="w-5 h-5 text-teal-600 transition-transform" :class="{ 'rotate-180': open === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div x-show="open === 3" x-collapse class="px-6 pb-5">
          <p class="text-gray-600">All our packages include 30 days of free support. We offer ongoing maintenance packages for updates, security patches, new features, and 24/7 technical support. Many clients stay with us for years as their growth partner.</p>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden fade-in-up" style="transition-delay: 300ms;">
        <button @click="open = open === 4 ? null : 4" class="w-full px-6 py-5 text-left flex items-center justify-between">
          <span class="font-semibold text-gray-900">Can you migrate my existing store to a new platform?</span>
          <svg class="w-5 h-5 text-teal-600 transition-transform" :class="{ 'rotate-180': open === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div x-show="open === 4" x-collapse class="px-6 pb-5">
          <p class="text-gray-600">Absolutely! We handle full migrations including products, customers, orders, and content. We ensure zero downtime during the switch and can migrate from any platform to your chosen solution.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-br from-teal-600 via-cyan-600 to-blue-600 relative overflow-hidden">
  <!-- Background Pattern -->
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-0 left-0 w-full h-full">
      <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
        <defs>
          <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
            <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
          </pattern>
        </defs>
        <rect width="100" height="100" fill="url(#grid)" />
      </svg>
    </div>
  </div>

  <div class="relative z-10 max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
    <div class="fade-in-up">
      <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6">
        Ready to Start Selling Online?
      </h2>
      <p class="text-xl text-teal-100 mb-10 max-w-2xl mx-auto">
        Join 50+ African businesses that have launched successful online stores with us. Get a free consultation and store mockup.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center bg-white text-teal-600 px-8 py-4 rounded-2xl text-lg font-semibold hover:bg-teal-50 hover:shadow-2xl transition-all duration-300 hover:scale-105">
          Get Free Consultation
          <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </a>
        <a href="{{ url('/portfolio') }}" class="inline-flex items-center justify-center border-2 border-white text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:bg-white hover:text-teal-600 transition-all duration-300">
          View Our Work
        </a>
      </div>

      <!-- Trust Indicators -->
      <div class="mt-12 flex flex-wrap justify-center items-center gap-8 text-teal-100">
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
          </svg>
          <span>Free Consultation</span>
        </div>
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
          </svg>
          <span>30-Day Support Included</span>
        </div>
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
          </svg>
          <span>Money-Back Guarantee</span>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
