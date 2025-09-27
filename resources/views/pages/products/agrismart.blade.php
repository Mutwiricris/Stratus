@extends('layouts.detail')

@section('title', 'AgriSmart - Intelligent Agriculture Solution')
@section('description', 'Smart agriculture platform with IoT sensors, crop monitoring, weather analytics, and farm management tools for modern farming operations.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[80vh] flex items-center bg-gradient-to-br from-gray-50 via-white to-teal-50/30 overflow-hidden">
  <!-- Background Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-teal-400/20 to-cyan-400/20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-br from-blue-400/20 to-purple-400/20 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-br from-cyan-400/10 to-teal-400/10 rounded-full blur-3xl"></div>
  </div>
  
  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
    <div class="grid lg:grid-cols-2 gap-16 lg:gap-20 items-center">
      <div class="fade-in-up">
        <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
          Smart Agriculture Solution
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-8 leading-tight">
          <span class="bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 bg-clip-text text-transparent">
            AgriSmart
          </span>
          <br>
          <span class="text-gray-900">Intelligence Platform</span>
        </h1>
        <p class="text-lg sm:text-xl text-gray-600 mb-10 max-w-2xl leading-relaxed">
          Revolutionary agriculture technology platform featuring IoT sensors, precision farming, crop monitoring, weather analytics, and automated farm management for sustainable and profitable farming operations.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
          <a href="#pricing" class="group inline-flex items-center bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl hover:shadow-teal-500/25 transition-all duration-500 hover:scale-105">
            <span class="relative flex items-center gap-2">
              Start Free Trial
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </span>
          </a>
          <a href="#demo" class="group inline-flex items-center text-gray-700 hover:text-teal-600 font-semibold transition-colors duration-300">
            Request Demo
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
        </div>
      </div>
      
      <!-- Hero Image/Illustration -->
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="relative">
          <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 shadow-2xl border border-gray-100">
            <img src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?q=80&w=2072" alt="AgriSmart" class="w-full h-80 object-cover rounded-2xl">
            
            <!-- Floating AgriSmart Stats -->
            <div class="absolute -top-4 -left-4 bg-white/95 backdrop-blur-sm rounded-2xl shadow-xl p-4 floating" style="animation-delay: 1s;">
              <div class="text-center">
                <div class="text-2xl font-bold text-teal-600 mb-1">30%</div>
                <div class="text-xs text-gray-600 font-medium">Yield Increase</div>
              </div>
            </div>
            
            <div class="absolute -bottom-4 -right-4 bg-white/95 backdrop-blur-sm rounded-2xl shadow-xl p-4 floating" style="animation-delay: 1.5s;">
              <div class="text-center">
                <div class="text-2xl font-bold text-cyan-600 mb-1">24/7</div>
                <div class="text-xs text-gray-600 font-medium">Monitoring</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Technology Preview -->
<section class="py-24 md:py-32 bg-gradient-to-br from-gray-50 to-teal-50/30 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        Smart Technology
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Smart Farming Technology</h2>
      <div class="w-24 h-1 bg-gradient-to-r from-teal-600 to-cyan-600 mx-auto mb-6"></div>
      <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Advanced agricultural intelligence for modern farming operations</p>
    </div>
    
    <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
      <div class="fade-in-up">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070" alt="Farm Dashboard" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">Farm Intelligence Dashboard</h3>
            <p class="text-gray-600">Real-time monitoring of crops, soil conditions, weather patterns, and farm operations from a centralized platform.</p>
          </div>
        </div>
      </div>
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?q=80&w=2070" alt="IoT Sensors" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">IoT Sensor Network</h3>
            <p class="text-gray-600">Advanced sensor technology for monitoring soil moisture, temperature, humidity, and crop health in real-time.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="grid lg:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up">
        <img src="https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?q=80&w=2070" alt="Crop Monitoring" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Precision Crop Monitoring</h4>
          <p class="text-sm text-gray-600">AI-powered crop health analysis with early disease detection and growth optimization.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 100ms;">
        <img src="https://images.unsplash.com/photo-1592982736828-1d27b9b2b6d1?q=80&w=2070" alt="Weather Analytics" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Weather Intelligence</h4>
          <p class="text-sm text-gray-600">Hyperlocal weather forecasting and climate analytics for optimal farming decisions.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 200ms;">
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015" alt="Farm Analytics" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Farm Analytics</h4>
          <p class="text-sm text-gray-600">Comprehensive farm performance analytics with yield predictions and profitability insights.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Key Features -->
<section class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Complete Smart Agriculture Ecosystem</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Revolutionary technology for sustainable and profitable farming</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- IoT Monitoring -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up">
        <div class="w-16 h-16 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">IoT Sensor Network</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Advanced wireless sensor network for comprehensive farm monitoring and data collection.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Soil moisture and pH monitoring</li>
          <li>• Temperature and humidity sensors</li>
          <li>• Light intensity and UV measurements</li>
          <li>• Nutrient level detection</li>
          <li>• Wireless data transmission</li>
          <li>• Solar-powered sensor nodes</li>
          <li>• Real-time alert system</li>
        </ul>
      </div>
      
      <!-- Crop Intelligence -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 100ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-cyan-accent to-turquoise-500 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">AI Crop Intelligence</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Machine learning-powered crop analysis for optimal growth and early problem detection.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Computer vision crop health analysis</li>
          <li>• Disease and pest early detection</li>
          <li>• Growth stage identification</li>
          <li>• Yield prediction modeling</li>
          <li>• Optimal harvest timing</li>
          <li>• Crop stress identification</li>
          <li>• Quality assessment algorithms</li>
        </ul>
      </div>
      
      <!-- Precision Farming -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-turquoise-700 to-cyan-600 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Precision Farming Tools</h3>
        <p class="text-gray-600 leading-relaxed mb-4">GPS-guided precision agriculture with variable rate application and field mapping.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• GPS field mapping and zoning</li>
          <li>• Variable rate fertilizer application</li>
          <li>• Precision irrigation control</li>
          <li>• Soil sampling optimization</li>
          <li>• Equipment guidance systems</li>
          <li>• Field boundary management</li>
          <li>• Crop rotation planning</li>
        </ul>
      </div>
      
      <!-- Weather Intelligence -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 300ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-emerald-500 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Weather Intelligence</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Hyperlocal weather forecasting and climate analytics for informed farming decisions.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Hyperlocal weather forecasting</li>
          <li>• Rainfall prediction and alerts</li>
          <li>• Frost and extreme weather warnings</li>
          <li>• Growing degree day calculations</li>
          <li>• Evapotranspiration monitoring</li>
          <li>• Climate trend analysis</li>
          <li>• Seasonal planning insights</li>
        </ul>
      </div>
      
      <!-- Resource Management -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 400ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-indigo-500 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Resource Optimization</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Intelligent resource management for water, fertilizers, and energy optimization.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Smart irrigation scheduling</li>
          <li>• Fertilizer optimization algorithms</li>
          <li>• Water usage monitoring</li>
          <li>• Energy consumption tracking</li>
          <li>• Cost-benefit analysis</li>
          <li>• Sustainability metrics</li>
          <li>• Resource waste reduction</li>
        </ul>
      </div>
      
      <!-- Farm Analytics -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 500ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-teal-600 to-cyan-600 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2-2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Farm Performance Analytics</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Comprehensive analytics and reporting for data-driven farming decisions and profitability optimization.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Yield performance analysis</li>
          <li>• Profitability tracking and forecasting</li>
          <li>• Input cost optimization</li>
          <li>• Comparative field analysis</li>
          <li>• Seasonal performance trends</li>
          <li>• ROI calculations and projections</li>
          <li>• Custom reporting dashboards</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="py-20 md:py-28 px-8 bg-gradient-to-br from-dark-turquoise to-turquoise-600">
  <div class="max-w-4xl mx-auto text-center">
    <div class="fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-white mb-6">Transform Your Farm with Smart Technology</h2>
      <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl mx-auto">Join progressive farmers who are increasing yields and reducing costs with AgriSmart intelligence.</p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="#" class="bg-cyan-300 text-dark-turquoise px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
          Start Free Trial
        </a>
        <a href="#" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
          Request Demo
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
