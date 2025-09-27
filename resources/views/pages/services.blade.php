@extends('layouts.detail')

@section('title', 'Software Services - Ascend Stratus')
@section('description', 'Discover our comprehensive software development services. From web applications to mobile apps, we deliver cutting-edge solutions that transform businesses.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-gray-50 via-white to-teal-50/30 min-h-screen relative overflow-hidden">
  <!-- Background Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-teal-400/20 to-cyan-400/20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-tr from-blue-400/20 to-teal-400/20 rounded-full blur-3xl"></div>
  </div>
  
  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-24 flex items-center min-h-screen">
    <div class="text-center w-full">
      <div class="mb-6 sm:mb-8">
        <span class="inline-flex items-center gap-2 text-teal-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 sm:mb-6 bg-teal-50 px-3 sm:px-4 py-2 rounded-full">
          <div class="w-2 h-2 bg-teal-500 rounded-full animate-pulse"></div>
          Our Services
        </span>
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-gray-900 mb-6 sm:mb-8 leading-[1.1]">
          Smart software
          <span class="bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 bg-clip-text text-transparent">for real business</span>
          <span class="block">impact.</span>
        </h1>
      </div>
      
      <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-600 mb-8 sm:mb-10 leading-relaxed max-w-4xl mx-auto">
        We invent, design, develop and maintain custom software together with our customers. This is what we work on every day.
      </p>
      
      <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 items-stretch sm:items-center justify-center mb-8 sm:mb-12">
        <a href="#services" class="group relative bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-base sm:text-lg font-semibold hover:shadow-2xl hover:shadow-teal-500/25 transition-all duration-500 hover:scale-105 overflow-hidden">
          <span class="relative flex items-center justify-center gap-2">
            Explore Services
            <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
          </span>
        </a>
        <a href="{{ url('/contact') }}" class="group border-2 border-gray-300 text-gray-700 px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-base sm:text-lg font-semibold hover:border-teal-600 hover:text-teal-600 hover:bg-teal-50 transition-all duration-300 backdrop-blur-sm bg-white/50">
          <span class="flex items-center justify-center gap-2">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
            Start Project
          </span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section id="services" class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12 sm:mb-16 lg:mb-20">
      <span class="inline-block text-teal-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 bg-teal-50 px-3 sm:px-4 py-2 rounded-full">
        What We Do
      </span>
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Which software solution are you looking for?</h2>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">We specialize in creating custom software solutions that drive business growth and digital transformation</p>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
      <!-- Web Applications -->
      <div class="group bg-white rounded-2xl sm:rounded-3xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 hover:-translate-y-2">
        <div class="mb-6">
          <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
          </div>
          <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">Web Applications</h3>
          <p class="text-gray-600 leading-relaxed mb-4">By using advanced development tools and methods, we guarantee fast and efficient development of your web application.</p>
          <div class="text-sm text-teal-600 font-semibold mb-4">Technologies:</div>
          <div class="flex flex-wrap gap-2 mb-6">
            <span class="px-3 py-1 bg-teal-50 text-teal-700 rounded-full text-xs font-medium">Laravel</span>
            <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-xs font-medium">React</span>
            <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-xs font-medium">Vue.js</span>
            <span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-xs font-medium">Node.js</span>
          </div>
        </div>
        <a href="{{ url('/services/web-applications') }}" class="inline-flex items-center text-teal-600 hover:text-teal-700 font-semibold group-hover:gap-3 transition-all duration-300">
          Learn More
          <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </a>
      </div>
      
      <!-- Mobile App Development -->
      <div class="group bg-white rounded-2xl sm:rounded-3xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 hover:-translate-y-2">
        <div class="mb-6">
          <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
            </svg>
          </div>
          <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">Mobile App Development</h3>
          <p class="text-gray-600 leading-relaxed mb-4">3+ years of expertise in developing native and cross-platform apps for iOS and Android devices.</p>
          <div class="text-sm text-teal-600 font-semibold mb-4">Technologies:</div>
          <div class="flex flex-wrap gap-2 mb-6">
            <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-xs font-medium">React Native</span>
            <span class="px-3 py-1 bg-cyan-50 text-cyan-700 rounded-full text-xs font-medium">Flutter</span>
            <span class="px-3 py-1 bg-gray-50 text-gray-700 rounded-full text-xs font-medium">Swift</span>
            <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-xs font-medium">Kotlin</span>
          </div>
        </div>
        <a href="{{ url('/services/mobile-app-development') }}" class="inline-flex items-center text-teal-600 hover:text-teal-700 font-semibold group-hover:gap-3 transition-all duration-300">
          Learn More
          <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </a>
      </div>
      
      <!-- Digital Transformation -->
      <div class="group bg-white rounded-2xl sm:rounded-3xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 hover:-translate-y-2">
        <div class="mb-6">
          <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
          <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">Digital Transformation</h3>
          <p class="text-gray-600 leading-relaxed mb-4">Revolutionize your business processes with our digital transformation services, focused on cost reduction and value creation.</p>
          <div class="text-sm text-teal-600 font-semibold mb-4">Technologies:</div>
          <div class="flex flex-wrap gap-2 mb-6">
            <span class="px-3 py-1 bg-orange-50 text-orange-700 rounded-full text-xs font-medium">AI/ML</span>
            <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-xs font-medium">Cloud</span>
            <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-xs font-medium">IoT</span>
            <span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-xs font-medium">Blockchain</span>
          </div>
        </div>
        <a href="{{ url('/services/digital-transformation') }}" class="inline-flex items-center text-teal-600 hover:text-teal-700 font-semibold group-hover:gap-3 transition-all duration-300">
          Learn More
          <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </a>
      </div>
      
      <!-- Dev Team as a Service -->
      <div class="group bg-white rounded-2xl sm:rounded-3xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 hover:-translate-y-2">
        <div class="mb-6">
          <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
          </div>
          <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">Dev Team as a Service</h3>
          <p class="text-gray-600 leading-relaxed mb-4">Team as a Service model offers flexibility and efficiency in development, allowing organizations to respond quickly to changing needs.</p>
          <div class="text-sm text-teal-600 font-semibold mb-4">Expertise:</div>
          <div class="flex flex-wrap gap-2 mb-6">
            <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-xs font-medium">Full-Stack</span>
            <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-xs font-medium">DevOps</span>
            <span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-xs font-medium">QA</span>
            <span class="px-3 py-1 bg-orange-50 text-orange-700 rounded-full text-xs font-medium">Project Mgmt</span>
          </div>
        </div>
        <a href="{{ url('/services/dev-team-as-a-service') }}" class="inline-flex items-center text-teal-600 hover:text-teal-700 font-semibold group-hover:gap-3 transition-all duration-300">
          Learn More
          <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </a>
      </div>
      
      <!-- E-Commerce Solutions -->
      <div class="group bg-white rounded-2xl sm:rounded-3xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 hover:-translate-y-2">
        <div class="mb-6">
          <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M17 13v4a2 2 0 01-2 2H9a2 2 0 01-2-2v-4m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
            </svg>
          </div>
          <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">E-Commerce Solutions</h3>
          <p class="text-gray-600 leading-relaxed mb-4">Strengthen your online trading platform with our advanced e-commerce and cloud software designed to exceed your business needs.</p>
          <div class="text-sm text-teal-600 font-semibold mb-4">Platforms:</div>
          <div class="flex flex-wrap gap-2 mb-6">
            <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-xs font-medium">Shopify</span>
            <span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-xs font-medium">WooCommerce</span>
            <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-xs font-medium">Magento</span>
            <span class="px-3 py-1 bg-orange-50 text-orange-700 rounded-full text-xs font-medium">Custom</span>
          </div>
        </div>
        <a href="{{ url('/services/ecommerce-solutions') }}" class="inline-flex items-center text-teal-600 hover:text-teal-700 font-semibold group-hover:gap-3 transition-all duration-300">
          Learn More
          <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </a>
      </div>
      
      <!-- Enterprise Software -->
      <div class="group bg-white rounded-2xl sm:rounded-3xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 hover:-translate-y-2">
        <div class="mb-6">
          <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
          </div>
          <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">Enterprise Software</h3>
          <p class="text-gray-600 leading-relaxed mb-4">Scalable enterprise solutions including ERP, CRM, and business management systems tailored to your organization's needs.</p>
          <div class="text-sm text-teal-600 font-semibold mb-4">Solutions:</div>
          <div class="flex flex-wrap gap-2 mb-6">
            <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-xs font-medium">ERP</span>
            <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-xs font-medium">CRM</span>
            <span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-xs font-medium">HRM</span>
            <span class="px-3 py-1 bg-orange-50 text-orange-700 rounded-full text-xs font-medium">Analytics</span>
          </div>
        </div>
        <a href="{{ url('/services/enterprise-software') }}" class="inline-flex items-center text-teal-600 hover:text-teal-700 font-semibold group-hover:gap-3 transition-all duration-300">
          Learn More
          <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </a>
      </div>
    </div>
    
    <!-- View All Services CTA -->
    <div class="text-center mt-12 sm:mt-16">
      <a href="{{ url('/contact') }}" class="group inline-flex items-center bg-gradient-to-r from-teal-600 to-cyan-600 text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl hover:shadow-teal-500/25 transition-all duration-500 hover:scale-105">
        <span class="relative flex items-center gap-2">
          Get Started with Your Project
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </span>
      </a>
    </div>
  </div>
</section>

<!-- Development Process Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12 sm:mb-16 lg:mb-20">
      <span class="inline-block text-teal-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 bg-teal-50 px-3 sm:px-4 py-2 rounded-full">
        How We Work
      </span>
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Our Development Process</h2>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">From concept to deployment, we follow a proven methodology that ensures quality, efficiency, and client satisfaction</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
      <!-- Discovery & Planning -->
      <div class="group text-center">
        <div class="relative mb-6">
          <div class="w-20 h-20 mx-auto bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
            </svg>
          </div>
          <div class="absolute -top-2 -right-2 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
            <span class="text-blue-600 font-bold text-sm">1</span>
          </div>
        </div>
        <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">Discovery & Planning</h3>
        <p class="text-gray-600 text-sm leading-relaxed">We analyze your requirements, define project scope, and create a detailed roadmap for success.</p>
      </div>
      
      <!-- Design & Prototyping -->
      <div class="group text-center">
        <div class="relative mb-6">
          <div class="w-20 h-20 mx-auto bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
            </svg>
          </div>
          <div class="absolute -top-2 -right-2 w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
            <span class="text-green-600 font-bold text-sm">2</span>
          </div>
        </div>
        <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">Design & Prototyping</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Creating intuitive user interfaces and interactive prototypes to visualize the final product.</p>
      </div>
      
      <!-- Development & Testing -->
      <div class="group text-center">
        <div class="relative mb-6">
          <div class="w-20 h-20 mx-auto bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
            </svg>
          </div>
          <div class="absolute -top-2 -right-2 w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
            <span class="text-purple-600 font-bold text-sm">3</span>
          </div>
        </div>
        <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">Development & Testing</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Building robust, scalable solutions with rigorous testing to ensure quality and performance.</p>
      </div>
      
      <!-- Launch & Support -->
      <div class="group text-center">
        <div class="relative mb-6">
          <div class="w-20 h-20 mx-auto bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
          <div class="absolute -top-2 -right-2 w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center">
            <span class="text-orange-600 font-bold text-sm">4</span>
          </div>
        </div>
        <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">Launch & Support</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Seamless deployment with ongoing maintenance and support to ensure continued success.</p>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12 sm:mb-16">
      <span class="inline-block text-teal-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 bg-teal-50 px-3 sm:px-4 py-2 rounded-full">
        Why Choose Us
      </span>
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Speed is in our blood</h2>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">The best software for big challenges. We have ready-made solutions for healthcare, fintech, industry and logistics.</p>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
      <!-- Fast Delivery -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-teal-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">Fast Delivery</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Rapid development cycles with agile methodologies to get your product to market faster.</p>
      </div>
      
      <!-- Expert Team -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-teal-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">Expert Team</h3>
        <p class="text-gray-600 text-sm leading-relaxed">3+ years of combined experience with certified professionals in latest technologies.</p>
      </div>
      
      <!-- 24/7 Support -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-teal-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">24/7 Support</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Round-the-clock maintenance and support to ensure your systems run smoothly.</p>
      </div>
    </div>
  </div>
</section>

<!-- Technologies & Tools Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12 sm:mb-16">
      <span class="inline-block text-teal-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 bg-teal-50 px-3 sm:px-4 py-2 rounded-full">
        Our Tech Stack
      </span>
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Technologies & Tools We Master</h2>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">We work with cutting-edge technologies to build scalable, secure, and high-performance solutions</p>
    </div>
    
    <!-- All Technologies in One Grid -->
    <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-8 xl:grid-cols-10 gap-4 sm:gap-6">
      <!-- Frontend Technologies -->
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">React</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue.js" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Vue.js</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/angularjs/angularjs-original.svg" alt="Angular" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Angular</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg" alt="Next.js" class="w-8 h-8 sm:w-10 sm:h-10" style="filter: invert(1)">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Next.js</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-plain.svg" alt="Tailwind CSS" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Tailwind</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" alt="TypeScript" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">TypeScript</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">JavaScript</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sass/sass-original.svg" alt="Sass" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Sass</h4>
      </div>
      
      <!-- Backend Technologies -->
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" alt="Laravel" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Laravel</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node.js" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Node.js</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Python</h4>
      </div>
        
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">PHP</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/express/express-original.svg" alt="Express.js" class="w-8 h-8 sm:w-10 sm:h-10" style="filter: invert(1)">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Express</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/django/django-plain.svg" alt="Django" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Django</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/fastapi/fastapi-original.svg" alt="FastAPI" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">FastAPI</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nestjs/nestjs-plain.svg" alt="NestJS" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">NestJS</h4>
      </div>
      
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React Native" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">React Native</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" alt="Flutter" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Flutter</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/swift/swift-original.svg" alt="Swift" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Swift</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kotlin/kotlin-original.svg" alt="Kotlin" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Kotlin</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ionic/ionic-original.svg" alt="Ionic" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Ionic</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/xamarin/xamarin-original.svg" alt="Xamarin" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Xamarin</h4>
      </div>
      
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazonwebservices/amazonwebservices-original.svg" alt="AWS" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">AWS</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" alt="Docker" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Docker</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">MySQL</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" alt="MongoDB" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">MongoDB</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Git</h4>
      </div>
      
      <div class="group text-center">
        <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto mb-3 bg-white rounded-2xl shadow-lg border border-gray-100 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma" class="w-8 h-8 sm:w-10 sm:h-10">
        </div>
        <h4 class="text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-teal-600 transition-colors duration-300">Figma</h4>
      </div>
    </div>
  </div>
  </div>
</section>

<!-- Stats Section -->
<section class="py-16 sm:py-20 md:py-28 relative bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 overflow-hidden">
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12 sm:mb-16">
      <span class="inline-block text-cyan-100 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 bg-white/10 px-3 sm:px-4 py-2 rounded-full">
        Our Impact
      </span>
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 sm:mb-6">Delivering Results That Matter</h2>
      <p class="text-base sm:text-lg md:text-xl text-cyan-100 max-w-3xl mx-auto">Our track record speaks for itself - trusted by businesses worldwide</p>
    </div>
    
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8">
      <div class="text-center">
        <div class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2 text-white">1500+</div>
        <div class="text-sm sm:text-base text-cyan-100">Projects Delivered</div>
      </div>
      <div class="text-center">
        <div class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2 text-white">500+</div>
        <div class="text-sm sm:text-base text-cyan-100">Happy Clients</div>
      </div>
      <div class="text-center">
        <div class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2 text-white">3+</div>
        <div class="text-sm sm:text-base text-cyan-100">Years Experience</div>
      </div>
      <div class="text-center">
        <div class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2 text-white">20+</div>
        <div class="text-sm sm:text-base text-cyan-100">Team Members</div>
      </div>
    </div>
  </div>
</section>

<!-- Industries We Serve Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12 sm:mb-16">
      <span class="inline-block text-teal-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 bg-teal-50 px-3 sm:px-4 py-2 rounded-full">
        Industries We Serve
      </span>
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Transforming Businesses Across Industries</h2>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Our expertise spans multiple sectors, delivering tailored solutions for diverse business needs</p>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 sm:gap-8">
      <!-- Healthcare -->
      <div class="group bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl hover:border-teal-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-red-500 to-pink-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-teal-600 transition-colors duration-300">Healthcare</h3>
        <p class="text-gray-600 text-sm">Medical apps, telemedicine, and health management systems</p>
      </div>
      
      <!-- FinTech -->
      <div class="group bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl hover:border-teal-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-teal-600 transition-colors duration-300">FinTech</h3>
        <p class="text-gray-600 text-sm">Banking solutions, payment systems, and financial platforms</p>
      </div>
      
      <!-- E-Commerce -->
      <div class="group bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl hover:border-teal-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M17 13v4a2 2 0 01-2 2H9a2 2 0 01-2-2v-4m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-teal-600 transition-colors duration-300">E-Commerce</h3>
        <p class="text-gray-600 text-sm">Online stores, marketplaces, and retail platforms</p>
      </div>
      
      <!-- Education -->
      <div class="group bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl hover:border-teal-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-teal-600 transition-colors duration-300">Education</h3>
        <p class="text-gray-600 text-sm">E-learning platforms, LMS, and educational apps</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600">
  <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
    <div class="fade-in-up">
      <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6">Ready to Transform Your Business?</h2>
      <p class="text-lg text-cyan-100 mb-8 max-w-2xl mx-auto">
        Let's discuss your project and create a custom software solution that drives real results for your business.
      </p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="{{ url('/contact') }}" class="bg-white text-teal-600 px-8 py-4 rounded-2xl text-lg font-semibold hover:bg-cyan-50 hover:shadow-2xl transition-all duration-300 hover:scale-105">
          Start Your Project
        </a>
        <a href="#services" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
          View All Services
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
