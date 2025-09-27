@extends('layouts.detail')

@section('title', 'Ascend Spa - Spa & Salon Management System')
@section('description', 'Complete spa and salon management system with booking, services, multi-location support, payments, and expense tracking.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[70vh] flex items-center">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=2074" alt="African Luxury Spa" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-br from-dark-turquoise/90 via-turquoise-600/80 to-cyan-accent/70"></div>
  </div>
  <div class="relative z-10 w-full container px-6 sm:px-10 md:px-16 lg:px-24 xl:px-32 py-20">
    <div class="max-w-4xl">
      <div class="fade-in-up">
        <div class="bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-4 py-2 rounded-full text-sm font-semibold mb-4 inline-block">Spa & Salon Management</div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight font-heading">
          Ascend Spa Management System
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl leading-relaxed">
          Complete spa and salon management solution featuring booking management, service scheduling, multi-location support, integrated payments, and comprehensive expense tracking.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
          <a href="#pricing" class="bg-cyan-300 text-dark-turquoise px-6 sm:px-8 py-3 sm:py-4 rounded-lg text-base sm:text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
            Start Free Trial
          </a>
          <a href="#demo" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
            Watch Demo
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Product Screenshots -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-turquoise-50/30 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">See Ascend Spa in Action</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Beautiful, intuitive interface designed for spa and salon professionals</p>
    </div>
    
    <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
      <div class="fade-in-up">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=2070" alt="African Spa Dashboard" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">Comprehensive Dashboard</h3>
            <p class="text-gray-600">Get a complete overview of your spa's performance with real-time analytics, upcoming appointments, and key metrics.</p>
          </div>
        </div>
      </div>
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=2070" alt="African Spa Booking Interface" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">Smart Booking System</h3>
            <p class="text-gray-600">Intuitive booking interface that makes scheduling appointments effortless for both staff and customers.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="grid lg:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up">
        <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=2070" alt="African Spa Service Management" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Service Catalog</h4>
          <p class="text-sm text-gray-600">Manage all your services, packages, and pricing in one place.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 100ms;">
        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?q=80&w=2126" alt="African Spa Staff Scheduling" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Staff Scheduling</h4>
          <p class="text-sm text-gray-600">Efficient staff management with automated scheduling and availability tracking.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 200ms;">
        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2070" alt="African Spa Payment Processing" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Payment Processing</h4>
          <p class="text-sm text-gray-600">Secure, integrated payment system with support for tips and gift cards.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Key Features -->
<section class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Everything You Need to Run Your Spa</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Streamline operations, delight customers, and grow your business with our comprehensive management platform</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Booking Management -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up">
        <div class="w-16 h-16 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Smart Booking System</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Online booking portal, appointment scheduling, automated reminders, and waitlist management to maximize bookings.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• 24/7 online booking with real-time availability</li>
          <li>• Automated SMS and email reminders</li>
          <li>• Intelligent waitlist management</li>
          <li>• Recurring appointment scheduling</li>
          <li>• Mobile-responsive booking widget</li>
        </ul>
      </div>
      
      <!-- Service Management -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 100ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-cyan-accent to-turquoise-500 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Service Catalog</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Comprehensive service management with packages, pricing, duration tracking, and inventory integration for seamless operations.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Unlimited service and package creation</li>
          <li>• Dynamic pricing with seasonal adjustments</li>
          <li>• Service duration and resource tracking</li>
          <li>• Inventory integration and alerts</li>
          <li>• Commission and tip management</li>
        </ul>
      </div>
      
      <!-- Multi-Location -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-turquoise-700 to-cyan-600 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Multi-Location Support</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Manage multiple spa locations from a single dashboard with centralized reporting, staff transfers, and unified customer profiles.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Centralized multi-location dashboard</li>
          <li>• Cross-location staff scheduling</li>
          <li>• Unified customer profiles and history</li>
          <li>• Location-specific reporting and analytics</li>
          <li>• Inventory transfers between locations</li>
        </ul>
      </div>
      
      <!-- Payment Processing -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 300ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-emerald-500 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Payment Processing</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Secure payment gateway with support for cards, digital wallets, gift cards, and flexible payment plans with automated billing.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• PCI-compliant payment processing</li>
          <li>• Support for all major payment methods</li>
          <li>• Digital gift cards and loyalty programs</li>
          <li>• Flexible payment plans and deposits</li>
          <li>• Automated recurring billing</li>
        </ul>
      </div>
      
      <!-- Staff Management -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 400ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-indigo-500 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Staff Management</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Complete staff scheduling, performance tracking, commission management, and training modules with role-based access controls.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Intelligent staff scheduling and availability</li>
          <li>• Performance metrics and KPI tracking</li>
          <li>• Commission and payroll management</li>
          <li>• Role-based access and permissions</li>
          <li>• Training modules and certification tracking</li>
        </ul>
      </div>
      
      <!-- Analytics -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 500ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-teal-600 to-cyan-600 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2-2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Analytics & Reports</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Advanced analytics dashboard with revenue tracking, customer insights, staff performance, and customizable reports for data-driven decisions.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Real-time revenue and booking analytics</li>
          <li>• Customer lifetime value tracking</li>
          <li>• Staff performance and productivity metrics</li>
          <li>• Customizable reports and dashboards</li>
          <li>• Predictive analytics and forecasting</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-turquoise-50/30 px-8">
  <div class="max-w-6xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Simple, Transparent Pricing</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Choose the perfect plan for your spa or salon business</p>
    </div>
    
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Starter Plan -->
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up">
        <div class="text-center mb-8">
          <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">Starter</h3>
          <div class="text-4xl font-bold text-dark-turquoise mb-2">$49<span class="text-lg text-gray-500">/month</span></div>
          <p class="text-gray-600">Perfect for small spas</p>
        </div>
        <ul class="space-y-4 mb-8">
          <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Up to 2 staff members</li>
          <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Online booking system</li>
          <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Payment processing</li>
          <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Basic reporting</li>
        </ul>
        <button class="w-full bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-6 py-3 rounded-lg font-semibold btn-animate hover:shadow-lg transition-all">
          Start Free Trial
        </button>
      </div>
      
      <!-- Professional Plan -->
      <div class="bg-gradient-to-br from-turquoise-600 to-cyan-accent text-white rounded-2xl p-8 shadow-2xl transform scale-105 fade-in-up" style="transition-delay: 100ms;">
        <div class="text-center mb-8">
          <div class="bg-white/20 text-white px-3 py-1 rounded-full text-sm font-semibold mb-4 inline-block">Most Popular</div>
          <h3 class=" text-2xl font-bold mb-2">Professional</h3>
          <div class="text-4xl font-bold mb-2">$99<span class="text-lg opacity-80">/month</span></div>
          <p class="opacity-90">For growing businesses</p>
        </div>
        <ul class="space-y-4 mb-8">
          <li class="flex items-center"><svg class="w-5 h-5 text-white mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Up to 10 staff members</li>
          <li class="flex items-center"><svg class="w-5 h-5 text-white mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Multi-location support</li>
          <li class="flex items-center"><svg class="w-5 h-5 text-white mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Advanced analytics</li>
          <li class="flex items-center"><svg class="w-5 h-5 text-white mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Marketing tools</li>
          <li class="flex items-center"><svg class="w-5 h-5 text-white mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Priority support</li>
        </ul>
        <button class="w-full bg-white text-turquoise-600 px-6 py-3 rounded-lg font-semibold btn-animate hover:shadow-lg transition-all">
          Start Free Trial
        </button>
      </div>
      
      <!-- Enterprise Plan -->
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up" style="transition-delay: 200ms;">
        <div class="text-center mb-8">
          <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">Enterprise</h3>
          <div class="text-4xl font-bold text-dark-turquoise mb-2">$199<span class="text-lg text-gray-500">/month</span></div>
          <p class="text-gray-600">For large operations</p>
        </div>
        <ul class="space-y-4 mb-8">
          <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Unlimited staff</li>
          <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Unlimited locations</li>
          <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Custom integrations</li>
          <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Dedicated account manager</li>
        </ul>
        <button class="w-full bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-6 py-3 rounded-lg font-semibold btn-animate hover:shadow-lg transition-all">
          Contact Sales
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="py-20 md:py-28 px-8 bg-gradient-to-br from-dark-turquoise to-turquoise-600">
  <div class="max-w-4xl mx-auto text-center">
    <div class="fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-white mb-6">Ready to Transform Your Spa Business?</h2>
      <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl mx-auto">Join thousands of spa owners who have streamlined their operations and increased revenue with Ascend Spa.</p>
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