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
            <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?q=80&w=2070" alt="African Logistics Operations" class="w-full h-80 object-cover rounded-2xl">
            
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
          <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=2070" alt="African Business Dashboard" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">Logistics Command Center</h3>
            <p class="text-gray-600">Real-time visibility into fleet operations, deliveries, and supply chain performance from a unified dashboard.</p>
          </div>
        </div>
      </div>
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?q=80&w=2070" alt="African Fleet Management" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">Fleet Tracking System</h3>
            <p class="text-gray-600">Advanced GPS tracking with route optimization, driver management, and vehicle performance monitoring.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="grid lg:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up">
        <img src="https://images.unsplash.com/photo-1566576912321-d58ddd7a6088?q=80&w=2070" alt="African Warehouse Operations" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Warehouse Operations</h4>
          <p class="text-sm text-gray-600">Intelligent warehouse management with inventory tracking and automated workflows.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 100ms;">
        <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?q=80&w=2070" alt="African Transportation Routes" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Route Optimization</h4>
          <p class="text-sm text-gray-600">AI-powered route planning for maximum efficiency and cost reduction.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 200ms;">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=2070" alt="African Supply Chain Analytics" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Supply Chain Analytics</h4>
          <p class="text-sm text-gray-600">Comprehensive analytics for supply chain optimization and performance insights.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Key Features -->
<section class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Complete Logistics Management Ecosystem</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Advanced technology for modern supply chain operations across Africa</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Fleet Management -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up">
        <div class="w-16 h-16 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Fleet Management</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Comprehensive fleet tracking and management with real-time GPS monitoring.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Real-time GPS vehicle tracking</li>
          <li>• Driver behavior monitoring</li>
          <li>• Vehicle maintenance scheduling</li>
          <li>• Fuel consumption tracking</li>
          <li>• Route optimization algorithms</li>
          <li>• Geofencing and alerts</li>
          <li>• Fleet performance analytics</li>
        </ul>
      </div>
      
      <!-- Warehouse Management -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 100ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-cyan-accent to-turquoise-500 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Warehouse Operations</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Intelligent warehouse management with automated inventory control systems.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Automated inventory tracking</li>
          <li>• Barcode and RFID integration</li>
          <li>• Pick, pack, and ship optimization</li>
          <li>• Storage location management</li>
          <li>• Cycle counting automation</li>
          <li>• Stock level alerts and reordering</li>
          <li>• Warehouse performance metrics</li>
        </ul>
      </div>
      
      <!-- Supply Chain Analytics -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-turquoise-700 to-cyan-600 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2-2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Advanced Analytics</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Data-driven insights for supply chain optimization and performance improvement.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Real-time performance dashboards</li>
          <li>• Predictive analytics and forecasting</li>
          <li>• Cost analysis and optimization</li>
          <li>• Delivery performance metrics</li>
          <li>• Customer satisfaction tracking</li>
          <li>• Supply chain visibility reports</li>
          <li>• Custom KPI monitoring</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Plans -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-teal-50/30 px-8" id="pricing">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Choose Your LogiFlow Plan</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Flexible pricing options designed for businesses of all sizes across Africa</p>
    </div>
    
    <div class="grid lg:grid-cols-3 gap-8">
      <!-- Starter Plan -->
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up">
        <div class="text-center mb-8">
          <h3 class="text-2xl font-bold text-dark-turquoise mb-2">Starter</h3>
          <div class="text-4xl font-bold text-gray-900 mb-2">$99<span class="text-lg text-gray-500">/month</span></div>
          <p class="text-gray-600">Perfect for small logistics operations</p>
        </div>
        <ul class="space-y-3 mb-8">
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Up to 10 vehicles
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Basic fleet tracking
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Route optimization
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Email support
          </li>
        </ul>
        <a href="#" class="w-full bg-gradient-to-r from-teal-600 to-cyan-600 text-white py-3 px-6 rounded-lg font-semibold hover:shadow-lg transition-all duration-300 text-center block">
          Start Free Trial
        </a>
      </div>
      
      <!-- Professional Plan -->
      <div class="bg-white rounded-2xl p-8 shadow-2xl border-2 border-teal-600 relative fade-in-up" style="transition-delay: 100ms;">
        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
          <span class="bg-gradient-to-r from-teal-600 to-cyan-600 text-white px-4 py-2 rounded-full text-sm font-semibold">Most Popular</span>
        </div>
        <div class="text-center mb-8">
          <h3 class="text-2xl font-bold text-dark-turquoise mb-2">Professional</h3>
          <div class="text-4xl font-bold text-gray-900 mb-2">$299<span class="text-lg text-gray-500">/month</span></div>
          <p class="text-gray-600">Ideal for growing logistics companies</p>
        </div>
        <ul class="space-y-3 mb-8">
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Up to 50 vehicles
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Advanced fleet management
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Warehouse management
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Analytics dashboard
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Priority support
          </li>
        </ul>
        <a href="#" class="w-full bg-gradient-to-r from-teal-600 to-cyan-600 text-white py-3 px-6 rounded-lg font-semibold hover:shadow-lg transition-all duration-300 text-center block">
          Start Free Trial
        </a>
      </div>
      
      <!-- Enterprise Plan -->
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up" style="transition-delay: 200ms;">
        <div class="text-center mb-8">
          <h3 class="text-2xl font-bold text-dark-turquoise mb-2">Enterprise</h3>
          <div class="text-4xl font-bold text-gray-900 mb-2">$799<span class="text-lg text-gray-500">/month</span></div>
          <p class="text-gray-600">For large-scale logistics operations</p>
        </div>
        <ul class="space-y-3 mb-8">
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Unlimited vehicles
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Complete logistics suite
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Custom integrations
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Advanced analytics
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            24/7 dedicated support
          </li>
        </ul>
        <a href="#" class="w-full bg-gradient-to-r from-teal-600 to-cyan-600 text-white py-3 px-6 rounded-lg font-semibold hover:shadow-lg transition-all duration-300 text-center block">
          Contact Sales
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Trusted by African Businesses</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">See how LogiFlow is transforming logistics operations across the continent</p>
    </div>
    
    <div class="grid lg:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up">
        <div class="flex items-center mb-6">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150" alt="Kwame Asante" class="w-16 h-16 rounded-full object-cover mr-4">
          <div>
            <h4 class="font-bold text-dark-turquoise">Kwame Asante</h4>
            <p class="text-gray-600 text-sm">CEO, Ghana Logistics Ltd</p>
          </div>
        </div>
        <p class="text-gray-600 leading-relaxed">"LogiFlow has revolutionized our operations. We've reduced delivery times by 35% and cut operational costs significantly. The real-time tracking gives our customers confidence and helps us maintain our competitive edge in the Ghanaian market."</p>
      </div>
      
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up" style="transition-delay: 100ms;">
        <div class="flex items-center mb-6">
          <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?q=80&w=150" alt="Amina Hassan" class="w-16 h-16 rounded-full object-cover mr-4">
          <div>
            <h4 class="font-bold text-dark-turquoise">Amina Hassan</h4>
            <p class="text-gray-600 text-sm">Operations Director, East Africa Transport</p>
          </div>
        </div>
        <p class="text-gray-600 leading-relaxed">"The warehouse management features have streamlined our inventory processes across multiple locations in Kenya and Tanzania. LogiFlow's analytics help us make data-driven decisions that have improved our efficiency by 40%."</p>
      </div>
      
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up" style="transition-delay: 200ms;">
        <div class="flex items-center mb-6">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=150" alt="Thabo Mthembu" class="w-16 h-16 rounded-full object-cover mr-4">
          <div>
            <h4 class="font-bold text-dark-turquoise">Thabo Mthembu</h4>
            <p class="text-gray-600 text-sm">Fleet Manager, SA Freight Solutions</p>
          </div>
        </div>
        <p class="text-gray-600 leading-relaxed">"Managing our 200+ vehicle fleet across South Africa was challenging until we implemented LogiFlow. The route optimization and driver monitoring features have reduced fuel costs by 25% and improved customer satisfaction ratings."</p>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="py-20 md:py-28 px-8 bg-gradient-to-br from-dark-turquoise to-turquoise-600">
  <div class="max-w-4xl mx-auto text-center">
    <div class="fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-white mb-6">Transform Your Logistics Operations Today</h2>
      <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl mx-auto">Join leading African logistics companies who trust LogiFlow for their supply chain management needs. Start your free trial today.</p>
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
