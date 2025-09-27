@extends('layouts.detail')

@section('title', 'Mobile App Development - Ascend Stratus')
@section('description', 'Expert mobile app development services for iOS and Android. Native and cross-platform solutions using React Native, Flutter, Swift, and Kotlin.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-green-50 via-white to-emerald-50/30 py-16 sm:py-20 md:py-28 relative overflow-hidden">
  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16 items-center">
      <!-- Left Column - Content -->
      <div class="order-2 lg:order-1">
        <div class="mb-6 sm:mb-8">
          <a href="{{ url('/services') }}" class="inline-flex items-center text-green-600 hover:text-green-700 font-medium mb-4 transition-colors duration-300">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Back to Services
          </a>
          <span class="inline-flex items-center gap-2 text-green-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 sm:mb-6 bg-green-50 px-3 sm:px-4 py-2 rounded-full">
            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
            Mobile App Development
          </span>
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 sm:mb-8 leading-[1.1]">
            Native & Cross-Platform
            <span class="bg-gradient-to-r from-green-600 via-emerald-600 to-teal-600 bg-clip-text text-transparent">Mobile Apps</span>
            <span class="block">That Users Love</span>
          </h1>
        </div>
        
        <p class="text-base sm:text-lg md:text-xl text-gray-600 mb-8 sm:mb-10 leading-relaxed">
          15+ years of expertise in developing native and cross-platform apps for iOS and Android devices. We create engaging mobile experiences that drive user engagement and business growth.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 items-stretch sm:items-center mb-8 sm:mb-12">
          <a href="{{ url('/contact') }}" class="group relative bg-gradient-to-r from-green-600 via-emerald-600 to-teal-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-base sm:text-lg font-semibold hover:shadow-2xl hover:shadow-green-500/25 transition-all duration-500 hover:scale-105 overflow-hidden">
            <span class="relative flex items-center justify-center gap-2">
              Start Your App Project
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
            <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=1920&q=80" 
                 alt="Mobile app development" 
                 class="w-full h-[250px] sm:h-[350px] md:h-[450px] lg:h-[550px] object-cover group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-br from-green-600/20 via-emerald-600/10 to-teal-600/20 group-hover:opacity-75 transition-opacity duration-500"></div>
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
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Mobile Technologies We Use</h2>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">From native development to cross-platform solutions, we use the best technologies for your mobile app</p>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
      <!-- React Native -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-green-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">RN</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors duration-300">React Native</h3>
        <p class="text-gray-600 text-sm">Cross-platform mobile development</p>
      </div>
      
      <!-- Flutter -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-green-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">F</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors duration-300">Flutter</h3>
        <p class="text-gray-600 text-sm">Google's UI toolkit for cross-platform</p>
      </div>
      
      <!-- Swift -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-green-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">S</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors duration-300">Swift</h3>
        <p class="text-gray-600 text-sm">Native iOS app development</p>
      </div>
      
      <!-- Kotlin -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-green-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">K</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors duration-300">Kotlin</h3>
        <p class="text-gray-600 text-sm">Modern Android app development</p>
      </div>
    </div>
  </div>
</section>

<!-- App Types Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12 sm:mb-16">
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Types of Mobile Apps We Build</h2>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">From simple utility apps to complex enterprise solutions, we cover all mobile app categories</p>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
      <!-- E-commerce Apps -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-green-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M17 13v4a2 2 0 01-2 2H9a2 2 0 01-2-2v-4m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors duration-300">E-commerce Apps</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Shopping apps with payment integration, inventory management, and user-friendly interfaces</p>
      </div>
      
      <!-- Business Apps -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-green-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors duration-300">Business Apps</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Enterprise solutions for productivity, project management, and team collaboration</p>
      </div>
      
      <!-- Social Apps -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-green-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors duration-300">Social Apps</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Community platforms, messaging apps, and social networking solutions</p>
      </div>
      
      <!-- Healthcare Apps -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-green-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-pink-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors duration-300">Healthcare Apps</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Medical apps, telemedicine platforms, and health monitoring solutions</p>
      </div>
      
      <!-- FinTech Apps -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-green-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors duration-300">FinTech Apps</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Banking apps, payment solutions, and financial management platforms</p>
      </div>
      
      <!-- IoT Apps -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-green-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors duration-300">IoT Apps</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Smart home, wearable devices, and Internet of Things control applications</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-r from-green-600 via-emerald-600 to-teal-600">
  <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
    <div class="fade-in-up">
      <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6">Ready to Build Your Mobile App?</h2>
      <p class="text-lg text-green-100 mb-8 max-w-2xl mx-auto">
        Let's turn your mobile app idea into reality with our expert development team and proven methodologies.
      </p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="{{ url('/contact') }}" class="bg-white text-green-600 px-8 py-4 rounded-2xl text-lg font-semibold hover:bg-green-50 hover:shadow-2xl transition-all duration-300 hover:scale-105">
          Start Your App Project
        </a>
        <a href="{{ url('/services') }}" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-green-300 transition-all duration-300 py-2">
          View All Services
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
