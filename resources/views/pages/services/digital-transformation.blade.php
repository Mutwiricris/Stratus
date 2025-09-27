@extends('layouts.detail')

@section('title', 'Digital Transformation Services - Ascend Stratus')
@section('description', 'Revolutionize your business with our digital transformation services. AI/ML, Cloud, IoT, and Blockchain solutions for modern enterprises.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-purple-50 via-white to-pink-50/30 py-16 sm:py-20 md:py-28 relative overflow-hidden">
  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16 items-center">
      <!-- Left Column - Content -->
      <div class="order-2 lg:order-1">
        <div class="mb-6 sm:mb-8">
          <a href="{{ url('/services') }}" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-medium mb-4 transition-colors duration-300">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Back to Services
          </a>
          <span class="inline-flex items-center gap-2 text-purple-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 sm:mb-6 bg-purple-50 px-3 sm:px-4 py-2 rounded-full">
            <div class="w-2 h-2 bg-purple-500 rounded-full animate-pulse"></div>
            Digital Transformation
          </span>
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 sm:mb-8 leading-[1.1]">
            Transform Your Business
            <span class="bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 bg-clip-text text-transparent">with Digital</span>
            <span class="block">Innovation</span>
          </h1>
        </div>
        
        <p class="text-base sm:text-lg md:text-xl text-gray-600 mb-8 sm:mb-10 leading-relaxed">
          Revolutionize your business processes with our digital transformation services, focused on cost reduction and value creation through innovative technology integrations.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 items-stretch sm:items-center mb-8 sm:mb-12">
          <a href="{{ url('/contact') }}" class="group relative bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-base sm:text-lg font-semibold hover:shadow-2xl hover:shadow-purple-500/25 transition-all duration-500 hover:scale-105 overflow-hidden">
            <span class="relative flex items-center justify-center gap-2">
              Start Transformation
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
            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1920&q=80" 
                 alt="Digital transformation" 
                 class="w-full h-[250px] sm:h-[350px] md:h-[450px] lg:h-[550px] object-cover group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-600/20 via-pink-600/10 to-indigo-600/20 group-hover:opacity-75 transition-opacity duration-500"></div>
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
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Digital Technologies We Implement</h2>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Cutting-edge technologies that drive digital transformation and business innovation</p>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
      <!-- AI/ML -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-purple-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-purple-600 transition-colors duration-300">AI/ML</h3>
        <p class="text-gray-600 text-sm">Artificial Intelligence and Machine Learning solutions</p>
      </div>
      
      <!-- Cloud -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-purple-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-purple-600 transition-colors duration-300">Cloud Computing</h3>
        <p class="text-gray-600 text-sm">AWS, Azure, and Google Cloud Platform solutions</p>
      </div>
      
      <!-- IoT -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-purple-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-purple-600 transition-colors duration-300">IoT Solutions</h3>
        <p class="text-gray-600 text-sm">Internet of Things and smart device integration</p>
      </div>
      
      <!-- Blockchain -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-purple-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-purple-600 transition-colors duration-300">Blockchain</h3>
        <p class="text-gray-600 text-sm">Distributed ledger and cryptocurrency solutions</p>
      </div>
    </div>
  </div>
</section>

<!-- Transformation Areas Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12 sm:mb-16">
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Digital Transformation Areas</h2>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">We help transform every aspect of your business with digital solutions</p>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
      <!-- Process Automation -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-purple-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors duration-300">Process Automation</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Automate repetitive tasks and streamline business processes with RPA and workflow automation</p>
      </div>
      
      <!-- Data Analytics -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-purple-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors duration-300">Data Analytics</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Transform data into actionable insights with advanced analytics and business intelligence</p>
      </div>
      
      <!-- Customer Experience -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-purple-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors duration-300">Customer Experience</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Enhance customer interactions with personalized digital experiences and omnichannel solutions</p>
      </div>
      
      <!-- Digital Workplace -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-purple-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors duration-300">Digital Workplace</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Enable remote work and collaboration with modern digital workplace solutions</p>
      </div>
      
      <!-- Cybersecurity -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-purple-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-pink-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors duration-300">Cybersecurity</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Protect your digital assets with comprehensive security frameworks and threat management</p>
      </div>
      
      <!-- Legacy Modernization -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-purple-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors duration-300">Legacy Modernization</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Modernize legacy systems and migrate to cloud-native architectures for better performance</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600">
  <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
    <div class="fade-in-up">
      <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6">Ready to Transform Your Business?</h2>
      <p class="text-lg text-purple-100 mb-8 max-w-2xl mx-auto">
        Start your digital transformation journey with our expert team and proven methodologies for lasting business impact.
      </p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="{{ url('/contact') }}" class="bg-white text-purple-600 px-8 py-4 rounded-2xl text-lg font-semibold hover:bg-purple-50 hover:shadow-2xl transition-all duration-300 hover:scale-105">
          Start Transformation
        </a>
        <a href="{{ url('/services') }}" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-purple-300 transition-all duration-300 py-2">
          View All Services
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
