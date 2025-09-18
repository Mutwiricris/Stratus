@extends('layouts.detail')

@section('title', 'Products - Ascend Stratus')
@section('description', 'Discover our comprehensive software solutions designed to transform industries and streamline operations.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[70vh] flex items-center">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070" alt="Products" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-br from-dark-turquoise/90 via-turquoise-600/80 to-cyan-accent/70"></div>
  </div>
  <div class="relative z-10 w-full container px-6 sm:px-10 md:px-16 lg:px-24 xl:px-32 py-20">
    <div class="max-w-4xl">
      <div class="fade-in-up">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight font-heading">
          Software Solutions That Transform
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl leading-relaxed">
          Comprehensive software products designed to revolutionize industries and streamline operations across diverse business sectors.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
          <a href="#products-grid" class="bg-cyan-300 text-dark-turquoise px-6 sm:px-8 py-3 sm:py-4 rounded-lg text-base sm:text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
            Explore Products
          </a>
          <a href="{{ url('/contact') }}" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
            Request Demo
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Products Grid -->
<section id="products-grid" class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Our Product Portfolio</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">From spa management to logistics optimization, our solutions drive efficiency and growth</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Ascend Spa -->
      <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up">
        <div class="relative h-64">
          <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?q=80&w=2074" alt="Ascend Spa" class="w-full h-full object-cover">
          <div class="absolute top-4 left-4">
            <span class="bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-3 py-1 rounded-full text-sm font-semibold">Spa & Salon</span>
          </div>
        </div>
        <div class="p-8">
          <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Ascend Spa</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">Complete spa/salon management system featuring booking management, service scheduling, multi-location support, integrated payments, and comprehensive expense tracking.</p>
          <div class="flex items-center justify-between mb-4">
            <div class="text-lg font-bold text-turquoise-600">Starting at $49/month</div>
            <div class="text-sm text-gray-500">✓ 14-day free trial</div>
          </div>
          <a href="{{ url('/products/ascend-spa') }}" class="w-full bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-6 py-3 rounded-lg font-semibold btn-animate text-center block hover:shadow-lg transition-all">
            Learn More
          </a>
        </div>
      </div>
      
      <!-- Retail Pro -->
      <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up" style="transition-delay: 100ms;">
        <div class="relative h-64">
          <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=2070" alt="Retail Pro" class="w-full h-full object-cover">
          <div class="absolute top-4 left-4">
            <span class="bg-gradient-to-r from-cyan-accent to-turquoise-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Retail</span>
          </div>
        </div>
        <div class="p-8">
          <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Retail Pro</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">Comprehensive wholesale/retail management system handling inventory control, financial management, sales analytics, and providing actionable business insights.</p>
          <div class="flex items-center justify-between mb-4">
            <div class="text-lg font-bold text-turquoise-600">Starting at $79/month</div>
            <div class="text-sm text-gray-500">✓ Free setup</div>
          </div>
          <a href="{{ url('/products/retail-pro') }}" class="w-full bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-6 py-3 rounded-lg font-semibold btn-animate text-center block hover:shadow-lg transition-all">
            Learn More
          </a>
        </div>
      </div>
      
      <!-- Pool Billiard App -->
      <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up" style="transition-delay: 200ms;">
        <div class="relative h-64">
          <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?q=80&w=2070" alt="Pool Billiard App" class="w-full h-full object-cover">
          <div class="absolute top-4 left-4">
            <span class="bg-gradient-to-r from-green-600 to-emerald-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Sports</span>
          </div>
        </div>
        <div class="p-8">
          <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Pool Billiard App</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">Connect pool players worldwide, manage tournaments and matches, view live scores for snooker, 8-ball, 9-ball games. Like FlashScore for pool sports.</p>
          <div class="flex items-center justify-between mb-4">
            <div class="text-lg font-bold text-turquoise-600">Free with Premium</div>
            <div class="text-sm text-gray-500">✓ Community features</div>
          </div>
          <a href="{{ url('/products/pool-billiard') }}" class="w-full bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-6 py-3 rounded-lg font-semibold btn-animate text-center block hover:shadow-lg transition-all">
            Learn More
          </a>
        </div>
      </div>
      
      <!-- Tours App -->
      <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up" style="transition-delay: 300ms;">
        <div class="relative h-64">
          <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?q=80&w=2035" alt="Tours App" class="w-full h-full object-cover">
          <div class="absolute top-4 left-4">
            <span class="bg-gradient-to-r from-purple-600 to-indigo-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Travel</span>
          </div>
          <div class="absolute top-4 right-4">
            <span class="bg-teal-600 text-white px-2 py-1 rounded-full text-xs font-semibold">Coming Soon</span>
          </div>
        </div>
        <div class="p-8">
          <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Tours App</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">Complete tour management webapp and mobile app for travel agencies and tour operators. Streamline bookings, itineraries, and customer management.</p>
          <div class="flex items-center justify-between mb-4">
            <div class="text-lg font-bold text-gray-500">Coming Soon</div>
            <div class="text-sm text-gray-500">✓ Early access available</div>
          </div>
          <a href="{{ url('/products/tours-app') }}" class="w-full bg-gray-400 text-white px-6 py-3 rounded-lg font-semibold text-center block cursor-not-allowed">
            Coming Soon
          </a>
        </div>
      </div>
      
      <!-- Events Pro -->
      <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up" style="transition-delay: 400ms;">
        <div class="relative h-64">
          <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=2070" alt="Events Management" class="w-full h-full object-cover">
          <div class="absolute top-4 left-4">
            <span class="bg-gradient-to-r from-pink-600 to-rose-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Events</span>
          </div>
        </div>
        <div class="p-8">
          <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Events Pro</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">Comprehensive events management software and mobile app for planning, organizing, and executing events of all sizes with attendee management and analytics.</p>
          <div class="flex items-center justify-between mb-4">
            <div class="text-lg font-bold text-turquoise-600">Starting at $99/month</div>
            <div class="text-sm text-gray-500">✓ Custom branding</div>
          </div>
          <a href="{{ url('/products/events-pro') }}" class="w-full bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-6 py-3 rounded-lg font-semibold btn-animate text-center block hover:shadow-lg transition-all">
            Learn More
          </a>
        </div>
      </div>
      
      <!-- AgriSmart -->
      <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up" style="transition-delay: 500ms;">
        <div class="relative h-64">
          <img src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?q=80&w=2070" alt="Agriculture Solution" class="w-full h-full object-cover">
          <div class="absolute top-4 left-4">
            <span class="bg-gradient-to-r from-green-700 to-lime-600 text-white px-3 py-1 rounded-full text-sm font-semibold">AgriTech</span>
          </div>
        </div>
        <div class="p-8">
          <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">AgriSmart</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">Advanced agriculture management solution with IoT integration, crop monitoring, weather analytics, and yield optimization for modern farming operations.</p>
          <div class="flex items-center justify-between mb-4">
            <div class="text-lg font-bold text-turquoise-600">Custom Pricing</div>
            <div class="text-sm text-gray-500">✓ IoT hardware included</div>
          </div>
          <a href="{{ url('/products/agrismart') }}" class="w-full bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-6 py-3 rounded-lg font-semibold btn-animate text-center block hover:shadow-lg transition-all">
            Learn More
          </a>
        </div>
      </div>
      
      <!-- LogiFlow -->
      <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up md:col-span-2 lg:col-span-1" style="transition-delay: 600ms;">
        <div class="relative h-64">
          <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070" alt="Logistics Solution" class="w-full h-full object-cover">
          <div class="absolute top-4 left-4">
            <span class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Logistics</span>
          </div>
        </div>
        <div class="p-8">
          <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">LogiFlow</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">Complete logistics management solution for supply chain optimization, real-time tracking, delivery management, and route optimization for enterprises.</p>
          <div class="flex items-center justify-between mb-4">
            <div class="text-lg font-bold text-turquoise-600">Enterprise Pricing</div>
            <div class="text-sm text-gray-500">✓ Dedicated support</div>
          </div>
          <a href="{{ url('/products/logiflow') }}" class="w-full bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-6 py-3 rounded-lg font-semibold btn-animate text-center block hover:shadow-lg transition-all">
            Learn More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Features Comparison -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-turquoise-50/30 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Why Choose Our Solutions</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Common features across all our products that drive success</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="text-center fade-in-up">
        <div class="w-16 h-16 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-2xl flex items-center justify-center mx-auto mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <h3 class=" text-xl font-bold text-dark-turquoise mb-3">Easy Setup</h3>
        <p class="text-gray-600 leading-relaxed">Quick deployment with minimal technical requirements and comprehensive onboarding support.</p>
      </div>
      
      <div class="text-center fade-in-up" style="transition-delay: 100ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-cyan-accent to-turquoise-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
          </svg>
        </div>
        <h3 class=" text-xl font-bold text-dark-turquoise mb-3">Secure & Reliable</h3>
        <p class="text-gray-600 leading-relaxed">Enterprise-grade security with 99.9% uptime guarantee and automated backups.</p>
      </div>
      
      <div class="text-center fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-turquoise-700 to-cyan-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
          </svg>
        </div>
        <h3 class=" text-xl font-bold text-dark-turquoise mb-3">Analytics & Insights</h3>
        <p class="text-gray-600 leading-relaxed">Advanced reporting and analytics to help you make data-driven business decisions.</p>
      </div>
      
      <div class="text-center fade-in-up" style="transition-delay: 300ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-indigo-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 11-9.75 9.75A9.75 9.75 0 0112 2.25z"></path>
          </svg>
        </div>
        <h3 class=" text-xl font-bold text-dark-turquoise mb-3">24/7 Support</h3>
        <p class="text-gray-600 leading-relaxed">Round-the-clock customer support with dedicated account managers for enterprise clients.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-r from-dark-turquoise to-turquoise-600">
  <div class="max-w-4xl mx-auto text-center px-8">
    <div class="fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-white mb-6">Ready to Transform Your Business?</h2>
      <p class="text-lg text-cyan-100 mb-8 max-w-2xl mx-auto">
        Choose the perfect solution for your industry and start your digital transformation journey today.
      </p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="{{ url('/contact') }}" class="bg-cyan-300 text-dark-turquoise px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
          Request Demo
        </a>
        <a href="{{ url('/contact') }}" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
          Talk to Sales
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
