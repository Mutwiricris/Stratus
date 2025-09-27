@extends('layouts.detail')

@section('title', 'E-Commerce Solutions - Ascend Stratus')
@section('description', 'Advanced e-commerce platforms and solutions. Shopify, WooCommerce, Magento, and custom e-commerce development services.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-teal-50 via-white to-cyan-50/30 py-16 sm:py-20 md:py-28 relative overflow-hidden">
  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center">
      <a href="{{ url('/services') }}" class="inline-flex items-center text-teal-600 hover:text-teal-700 font-medium mb-4 transition-colors duration-300">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Back to Services
      </a>
      <span class="inline-flex items-center gap-2 text-teal-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 sm:mb-6 bg-teal-50 px-3 sm:px-4 py-2 rounded-full">
        <div class="w-2 h-2 bg-teal-500 rounded-full animate-pulse"></div>
        E-Commerce Solutions
      </span>
      <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 sm:mb-8 leading-[1.1]">
        Powerful E-Commerce
        <span class="bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 bg-clip-text text-transparent">Platforms That Sell</span>
      </h1>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 mb-8 sm:mb-10 leading-relaxed max-w-4xl mx-auto">
        Strengthen your online trading platform with our advanced e-commerce and cloud software designed to exceed your business needs and goals.
      </p>
      <a href="{{ url('/contact') }}" class="group relative bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-base sm:text-lg font-semibold hover:shadow-2xl hover:shadow-teal-500/25 transition-all duration-500 hover:scale-105 overflow-hidden">
        <span class="relative flex items-center justify-center gap-2">
          Start Selling Online
          <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </span>
      </a>
    </div>
  </div>
</section>

<!-- Platforms Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12 sm:mb-16">
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">E-Commerce Platforms We Work With</h2>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-teal-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">S</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-teal-600 transition-colors duration-300">Shopify</h3>
        <p class="text-gray-600 text-sm">Leading e-commerce platform</p>
      </div>
      
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-teal-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">W</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-teal-600 transition-colors duration-300">WooCommerce</h3>
        <p class="text-gray-600 text-sm">WordPress e-commerce solution</p>
      </div>
      
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-teal-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">M</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-teal-600 transition-colors duration-300">Magento</h3>
        <p class="text-gray-600 text-sm">Enterprise e-commerce platform</p>
      </div>
      
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-teal-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">C</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-teal-600 transition-colors duration-300">Custom Solutions</h3>
        <p class="text-gray-600 text-sm">Tailored e-commerce platforms</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600">
  <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6">Ready to Launch Your Online Store?</h2>
    <p class="text-lg text-teal-100 mb-8 max-w-2xl mx-auto">
      Create a powerful e-commerce platform that drives sales and grows your business.
    </p>
    <a href="{{ url('/contact') }}" class="bg-white text-teal-600 px-8 py-4 rounded-2xl text-lg font-semibold hover:bg-teal-50 hover:shadow-2xl transition-all duration-300 hover:scale-105">
      Start Selling Online
    </a>
  </div>
</section>

@endsection
