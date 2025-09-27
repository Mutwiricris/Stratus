@extends('layouts.detail')

@section('title', 'Custom E-Commerce Solutions - Ascend Stratus')
@section('description', 'Tailored e-commerce platforms designed for African businesses. Custom online stores, marketplace solutions, mobile commerce, and payment integration.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[80vh] flex items-center bg-gradient-to-br from-gray-50 via-white to-purple-50/30 overflow-hidden">
  <!-- Background Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-purple-400/20 to-pink-400/20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-br from-blue-400/20 to-purple-400/20 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-br from-pink-400/10 to-purple-400/10 rounded-full blur-3xl"></div>
  </div>
  
  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
    <div class="grid lg:grid-cols-2 gap-16 lg:gap-20 items-center">
      <div class="fade-in-up">
        <a href="{{ url('/services') }}" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-medium mb-4 transition-colors duration-300">
          <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
          Back to Services
        </a>
        <span class="inline-block text-purple-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-purple-50 px-4 py-2 rounded-full">
          Custom E-Commerce Solutions
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-8 leading-tight">
          <span class="bg-gradient-to-r from-purple-600 via-pink-600 to-blue-600 bg-clip-text text-transparent">
            Custom E-Commerce
          </span>
          <br>
          <span class="text-gray-900">Solutions for Africa</span>
        </h1>
        <p class="text-lg sm:text-xl text-gray-600 mb-10 max-w-2xl leading-relaxed">
          Tailored e-commerce platforms designed specifically for African businesses. From custom online stores to marketplace solutions, mobile commerce, and integrated payment systems.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
          <a href="#pricing" class="group inline-flex items-center bg-gradient-to-r from-purple-600 via-pink-600 to-blue-600 text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl hover:shadow-purple-500/25 transition-all duration-500 hover:scale-105">
            <span class="relative flex items-center gap-2">
              Start Your Project
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </span>
          </a>
          <a href="#demo" class="group inline-flex items-center text-gray-700 hover:text-purple-600 font-semibold transition-colors duration-300">
            View Portfolio
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
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=2070" alt="African E-Commerce Business" class="w-full h-80 object-cover rounded-2xl">
            
            <!-- Floating Stats -->
            <div class="absolute -top-4 -left-4 bg-white/95 backdrop-blur-sm rounded-2xl shadow-xl p-4 floating" style="animation-delay: 1s;">
              <div class="text-center">
                <div class="text-2xl font-bold text-purple-600 mb-1">300%</div>
                <div class="text-xs text-gray-600 font-medium">Sales Increase</div>
              </div>
            </div>
            
            <div class="absolute -bottom-4 -right-4 bg-white/95 backdrop-blur-sm rounded-2xl shadow-xl p-4 floating" style="animation-delay: 1.5s;">
              <div class="text-center">
                <div class="text-2xl font-bold text-pink-600 mb-1">24/7</div>
                <div class="text-xs text-gray-600 font-medium">Support</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Solutions Preview -->
<section class="py-24 md:py-32 bg-gradient-to-br from-gray-50 to-purple-50/30 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-purple-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-purple-50 px-4 py-2 rounded-full">
        Our Solutions
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Custom E-Commerce Solutions</h2>
      <div class="w-24 h-1 bg-gradient-to-r from-purple-600 to-pink-600 mx-auto mb-6"></div>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Tailored for African businesses and market needs</p>
    </div>
    
    <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
      <div class="fade-in-up">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=2070" alt="African Online Store" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class="text-2xl font-bold text-dark-turquoise mb-2">Custom Online Stores</h3>
            <p class="text-gray-600">Fully customized e-commerce platforms built from the ground up to match your brand and business requirements.</p>
          </div>
        </div>
      </div>
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2070" alt="African Mobile Commerce" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class="text-2xl font-bold text-dark-turquoise mb-2">Mobile Commerce Solutions</h3>
            <p class="text-gray-600">Mobile-first e-commerce solutions optimized for African mobile usage patterns and payment preferences.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="grid lg:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up">
        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=2070" alt="African Marketplace" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Marketplace Platforms</h4>
          <p class="text-sm text-gray-600">Multi-vendor marketplace solutions connecting buyers and sellers across Africa.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 100ms;">
        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=2070" alt="African Payment Integration" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Payment Integration</h4>
          <p class="text-sm text-gray-600">Seamless integration with African payment gateways and mobile money systems.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 200ms;">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=2070" alt="African Analytics" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Advanced Analytics</h4>
          <p class="text-sm text-gray-600">Comprehensive analytics and reporting for data-driven business decisions.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Key Features -->
<section class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class="text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Complete E-Commerce Ecosystem</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Everything you need to succeed in African e-commerce</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Custom Development -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up">
        <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-dark-turquoise mb-4">Custom Development</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Bespoke e-commerce solutions built from scratch to meet your unique business requirements.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Custom design and branding</li>
          <li>• Scalable architecture</li>
          <li>• API integrations</li>
          <li>• Performance optimization</li>
          <li>• Security implementation</li>
          <li>• SEO optimization</li>
          <li>• Multi-language support</li>
        </ul>
      </div>
      
      <!-- Mobile Commerce -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 100ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-pink-600 to-purple-500 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-dark-turquoise mb-4">Mobile-First Design</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Optimized for African mobile usage patterns with fast loading and intuitive interfaces.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Progressive Web Apps (PWA)</li>
          <li>• Mobile payment integration</li>
          <li>• Offline functionality</li>
          <li>• Touch-optimized interface</li>
          <li>• Fast loading times</li>
          <li>• App store deployment</li>
          <li>• Push notifications</li>
        </ul>
      </div>
      
      <!-- Payment Solutions -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-cyan-600 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-dark-turquoise mb-4">African Payment Integration</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Seamless integration with popular African payment methods and mobile money systems.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• M-Pesa integration</li>
          <li>• Airtel Money support</li>
          <li>• Bank transfer options</li>
          <li>• Card payment processing</li>
          <li>• Multi-currency support</li>
          <li>• Secure payment gateway</li>
          <li>• Fraud protection</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Plans -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-purple-50/30 px-8" id="pricing">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class="text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Choose Your E-Commerce Package</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Flexible pricing for businesses of all sizes across Africa</p>
    </div>
    
    <div class="grid lg:grid-cols-3 gap-8">
      <!-- Starter Package -->
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up">
        <div class="text-center mb-8">
          <h3 class="text-2xl font-bold text-dark-turquoise mb-2">Starter Store</h3>
          <div class="text-4xl font-bold text-gray-900 mb-2">Custom Price<span class="text-lg text-gray-500"> one-time</span></div>
          <p class="text-gray-600">Perfect for small businesses starting online</p>
        </div>
        <ul class="space-y-3 mb-8">
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Up to 100 products
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Mobile-responsive design
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Payment gateway integration
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            3 months support
          </li>
        </ul>
        <a href="#" class="w-full bg-gradient-to-r from-purple-600 to-pink-600 text-white py-3 px-6 rounded-lg font-semibold hover:shadow-lg transition-all duration-300 text-center block">
          Get Started
        </a>
      </div>
      
      <!-- Professional Package -->
      <div class="bg-white rounded-2xl p-8 shadow-2xl border-2 border-purple-600 relative fade-in-up" style="transition-delay: 100ms;">
        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
          <span class="bg-gradient-to-r from-purple-600 to-pink-600 text-white px-4 py-2 rounded-full text-sm font-semibold">Most Popular</span>
        </div>
        <div class="text-center mb-8">
          <h3 class="text-2xl font-bold text-dark-turquoise mb-2">Professional Store</h3>
          <div class="text-4xl font-bold text-gray-900 mb-2">Custom Price<span class="text-lg text-gray-500"> one-time</span></div>
          <p class="text-gray-600">Ideal for growing businesses</p>
        </div>
        <ul class="space-y-3 mb-8">
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Up to 1,000 products
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Custom design & branding
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Advanced analytics
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Mobile app included
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            6 months support
          </li>
        </ul>
        <a href="#" class="w-full bg-gradient-to-r from-purple-600 to-pink-600 text-white py-3 px-6 rounded-lg font-semibold hover:shadow-lg transition-all duration-300 text-center block">
          Get Started
        </a>
      </div>
      
      <!-- Enterprise Package -->
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up" style="transition-delay: 200ms;">
        <div class="text-center mb-8">
          <h3 class="text-2xl font-bold text-dark-turquoise mb-2">Enterprise Solution</h3>
          <div class="text-4xl font-bold text-gray-900 mb-2">Custom<span class="text-lg text-gray-500"> quote</span></div>
          <p class="text-gray-600">For large-scale operations</p>
        </div>
        <ul class="space-y-3 mb-8">
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Unlimited products
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Multi-vendor marketplace
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Custom integrations
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Dedicated support team
          </li>
          <li class="flex items-center text-gray-600">
            <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            12 months support
          </li>
        </ul>
        <a href="#" class="w-full bg-gradient-to-r from-purple-600 to-pink-600 text-white py-3 px-6 rounded-lg font-semibold hover:shadow-lg transition-all duration-300 text-center block">
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
      <h2 class="text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Success Stories from Africa</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">See how our custom e-commerce solutions are transforming businesses across the continent</p>
    </div>
    
    <div class="grid lg:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up">
        <div class="flex items-center mb-6">
          <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?q=80&w=150" alt="Fatima Okonkwo" class="w-16 h-16 rounded-full object-cover mr-4">
          <div>
            <h4 class="font-bold text-dark-turquoise">Fatima Okonkwo</h4>
            <p class="text-gray-600 text-sm">CEO, AfriStyle Fashion</p>
          </div>
        </div>
        <p class="text-gray-600 leading-relaxed">"Our custom e-commerce platform has transformed our business. Sales increased by 400% in the first year, and the mobile-first design perfectly serves our African customers. The integrated mobile money payments were a game-changer."</p>
      </div>
      
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up" style="transition-delay: 100ms;">
        <div class="flex items-center mb-6">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=150" alt="David Mwangi" class="w-16 h-16 rounded-full object-cover mr-4">
          <div>
            <h4 class="font-bold text-dark-turquoise">David Mwangi</h4>
            <p class="text-gray-600 text-sm">Founder, TechHub Marketplace</p>
          </div>
        </div>
        <p class="text-gray-600 leading-relaxed">"The multi-vendor marketplace solution exceeded our expectations. We now connect over 500 vendors with thousands of customers across East Africa. The platform handles everything seamlessly, from payments to logistics."</p>
      </div>
      
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up" style="transition-delay: 200ms;">
        <div class="flex items-center mb-6">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150" alt="Aisha Diallo" class="w-16 h-16 rounded-full object-cover mr-4">
          <div>
            <h4 class="font-bold text-dark-turquoise">Aisha Diallo</h4>
            <p class="text-gray-600 text-sm">Director, Sahel Organics</p>
          </div>
        </div>
        <p class="text-gray-600 leading-relaxed">"The custom analytics dashboard gives us insights we never had before. We can track customer behavior, optimize our product offerings, and make data-driven decisions that have improved our profit margins by 35%."</p>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="py-20 md:py-28 px-8 bg-gradient-to-br from-purple-600 to-pink-600">
  <div class="max-w-4xl mx-auto text-center">
    <div class="fade-in-up">
      <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Ready to Launch Your Custom E-Commerce Solution?</h2>
      <p class="text-lg md:text-xl text-purple-100 mb-8 max-w-2xl mx-auto">Join successful African businesses who chose custom e-commerce solutions tailored for their market. Start your digital transformation today.</p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="#" class="bg-white text-purple-600 px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:bg-purple-50 hover:text-purple-700 transition-colors">
          Start Your Project
        </a>
        <a href="#" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-pink-300 transition-all duration-300 py-2">
          Schedule Consultation
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
