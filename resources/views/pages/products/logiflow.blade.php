@extends('layouts.detail')

@section('title', 'LogiFlow - Advanced Logistics Management Platform')
@section('description', 'Comprehensive logistics and supply chain management solution with fleet tracking, route optimization, warehouse management, and delivery coordination.')

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
          Logistics Management Platform
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-8 leading-tight">
          <span class="bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 bg-clip-text text-transparent">
            LogiFlow
          </span>
          <br>
          <span class="text-gray-900">Management Suite</span>
        </h1>
        <p class="text-lg sm:text-xl text-gray-600 mb-10 max-w-2xl leading-relaxed">
          Advanced logistics and supply chain management platform featuring fleet tracking, route optimization, warehouse management, delivery coordination, and comprehensive analytics for modern logistics operations.
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
            Watch Demo
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M15 14h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </a>
        </div>
      </div>
      
      <!-- Hero Image/Illustration -->
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="relative">
          <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 shadow-2xl border border-gray-100">
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070" alt="LogiFlow" class="w-full h-80 object-cover rounded-2xl">
            
            <!-- Floating LogiFlow Stats -->
            <div class="absolute -top-4 -left-4 bg-white/95 backdrop-blur-sm rounded-2xl shadow-xl p-4 floating" style="animation-delay: 1s;">
              <div class="text-center">
                <div class="text-2xl font-bold text-teal-600 mb-1">40%</div>
                <div class="text-xs text-gray-600 font-medium">Cost Reduction</div>
              </div>
            </div>
            
            <div class="absolute -bottom-4 -right-4 bg-white/95 backdrop-blur-sm rounded-2xl shadow-xl p-4 floating" style="animation-delay: 1.5s;">
              <div class="text-center">
                <div class="text-2xl font-bold text-cyan-600 mb-1">Real-time</div>
                <div class="text-xs text-gray-600 font-medium">Tracking</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Platform Screenshots -->
<section class="py-24 md:py-32 bg-gradient-to-br from-gray-50 to-teal-50/30 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        Platform Preview
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">See LogiFlow in Action</h2>
      <div class="w-24 h-1 bg-gradient-to-r from-teal-600 to-cyan-600 mx-auto mb-6"></div>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Powerful interface designed for logistics professionals and supply chain managers</p>
    </div>
    
    <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
      <div class="fade-in-up">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070" alt="Logistics Dashboard" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">Logistics Command Center</h3>
            <p class="text-gray-600">Real-time visibility into fleet operations, deliveries, and supply chain performance from a unified dashboard.</p>
          </div>
        </div>
      </div>
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?q=80&w=2070" alt="Fleet Tracking" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">Fleet Tracking System</h3>
            <p class="text-gray-600">Advanced GPS tracking with route optimization, driver management, and vehicle performance monitoring.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="grid lg:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up">
        <img src="https://images.unsplash.com/photo-1586953208448-b95a79798f07?q=80&w=2070" alt="Warehouse Management" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Warehouse Operations</h4>
          <p class="text-sm text-gray-600">Intelligent warehouse management with inventory tracking and automated workflows.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 100ms;">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=2070" alt="Route Optimization" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Route Optimization</h4>
          <p class="text-sm text-gray-600">AI-powered route planning for maximum efficiency and cost reduction.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 200ms;">
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015" alt="Supply Chain Analytics" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Supply Chain Analytics</h4>
          <p class="text-sm text-gray-600">Comprehensive analytics for supply chain optimization and performance insights.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="py-20 md:py-28 px-8 bg-gradient-to-br from-dark-turquoise to-turquoise-600">
  <div class="max-w-4xl mx-auto text-center">
    <div class="fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-white mb-6">Optimize Your Logistics Operations</h2>
      <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl mx-auto">Join leading logistics companies who trust LogiFlow for their supply chain management needs.</p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="#" class="bg-cyan-300 text-dark-turquoise px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
          Start Free Trial
        </a>
        <a href="#" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
          Schedule Demo
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
