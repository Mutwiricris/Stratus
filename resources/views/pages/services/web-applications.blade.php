@extends('layouts.detail')

@section('title', 'Web Applications Development - Ascend Stratus')
@section('description', 'Professional web application development services using Laravel, React, Vue.js, and Node.js. Fast, efficient, and scalable solutions for your business.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-50 via-white to-indigo-50/30 py-16 sm:py-20 md:py-28 relative overflow-hidden">
  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16 items-center">
      <!-- Left Column - Content -->
      <div class="order-2 lg:order-1">
        <div class="mb-6 sm:mb-8">
          <a href="{{ url('/services') }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium mb-4 transition-colors duration-300">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Back to Services
          </a>
          <span class="inline-flex items-center gap-2 text-blue-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 sm:mb-6 bg-blue-50 px-3 sm:px-4 py-2 rounded-full">
            <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
            Web Applications
          </span>
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 sm:mb-8 leading-[1.1]">
            Professional
            <span class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent">Web Application</span>
            <span class="block">Development</span>
          </h1>
        </div>
        
        <p class="text-base sm:text-lg md:text-xl text-gray-600 mb-8 sm:mb-10 leading-relaxed">
          By using advanced development tools and methods, we guarantee fast and efficient development of your web application with modern frameworks and best practices.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 items-stretch sm:items-center mb-8 sm:mb-12">
          <a href="{{ url('/contact') }}" class="group relative bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-base sm:text-lg font-semibold hover:shadow-2xl hover:shadow-blue-500/25 transition-all duration-500 hover:scale-105 overflow-hidden">
            <span class="relative flex items-center justify-center gap-2">
              Start Your Project
              <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </span>
          </a>
        </div>
      </div>
      
      <!-- Right Column - Image -->
      <div class="order-1 lg:order-2">
        <div class="relative group">
          <div class="relative overflow-hidden rounded-2xl sm:rounded-3xl shadow-2xl">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1920&q=80" 
                 alt="Web application development" 
                 class="w-full h-[250px] sm:h-[350px] md:h-[450px] lg:h-[550px] object-cover group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-600/20 via-indigo-600/10 to-purple-600/20 group-hover:opacity-75 transition-opacity duration-500"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Technologies Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12 sm:mb-16">
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Technologies We Use</h2>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">We use cutting-edge technologies to build scalable, secure, and high-performance web applications</p>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
      <!-- Laravel -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-red-500 to-orange-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">L</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">Laravel</h3>
        <p class="text-gray-600 text-sm">Robust PHP framework for backend development</p>
      </div>
      
      <!-- React -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-blue-400 to-cyan-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">R</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">React</h3>
        <p class="text-gray-600 text-sm">Modern JavaScript library for user interfaces</p>
      </div>
      
      <!-- Vue.js -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-green-400 to-emerald-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">V</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">Vue.js</h3>
        <p class="text-gray-600 text-sm">Progressive framework for building UIs</p>
      </div>
      
      <!-- Node.js -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-green-600 to-green-700 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">N</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">Node.js</h3>
        <p class="text-gray-600 text-sm">JavaScript runtime for server-side development</p>
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12 sm:mb-16">
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Key Features & Benefits</h2>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Our web applications are built with performance, security, and scalability in mind</p>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
      <!-- Responsive Design -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-blue-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">Responsive Design</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Perfect user experience across all devices and screen sizes</p>
      </div>
      
      <!-- High Performance -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-blue-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">High Performance</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Optimized for speed with advanced caching and CDN integration</p>
      </div>
      
      <!-- Security -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-blue-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-pink-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">Enterprise Security</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Built-in security features and best practices implementation</p>
      </div>
      
      <!-- Scalability -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-blue-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">Scalable Architecture</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Built to grow with your business needs and handle increased traffic</p>
      </div>
      
      <!-- API Integration -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-blue-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">API Integration</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Seamless integration with third-party services and APIs</p>
      </div>
      
      <!-- 24/7 Support -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-blue-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">24/7 Support</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Round-the-clock maintenance and support services</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600">
  <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
    <div class="fade-in-up">
      <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6">Ready to Build Your Web Application?</h2>
      <p class="text-lg text-blue-100 mb-8 max-w-2xl mx-auto">
        Let's discuss your project requirements and create a powerful web application that drives your business forward.
      </p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="{{ url('/contact') }}" class="bg-white text-blue-600 px-8 py-4 rounded-2xl text-lg font-semibold hover:bg-blue-50 hover:shadow-2xl transition-all duration-300 hover:scale-105">
          Start Your Project
        </a>
        <a href="{{ url('/services') }}" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-blue-300 transition-all duration-300 py-2">
          View All Services
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
