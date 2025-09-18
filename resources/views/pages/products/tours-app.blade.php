@extends('layouts.detail')

@section('title', 'Tours App - Travel & Tourism Management Platform')
@section('description', 'Comprehensive travel and tourism management platform with booking system, itinerary planning, guide management, and customer experience tools.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[70vh] flex items-center">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?q=80&w=2070" alt="Tours App" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-br from-dark-turquoise/90 via-turquoise-600/80 to-cyan-accent/70"></div>
  </div>
  <div class="relative z-10 w-full container px-6 sm:px-10 md:px-16 lg:px-24 xl:px-32 py-20">
    <div class="max-w-4xl">
      <div class="fade-in-up">
        <div class="bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-4 py-2 rounded-full text-sm font-semibold mb-4 inline-block">Travel & Tourism Platform</div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight font-heading">
          Tours Management Platform
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl leading-relaxed">
          Complete travel and tourism management solution featuring tour booking, itinerary planning, guide coordination, customer management, and immersive travel experiences.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
          <div class="bg-yellow-400 text-dark-turquoise px-6 sm:px-8 py-3 sm:py-4 rounded-lg text-base sm:text-lg font-semibold shadow-lg">
            Coming Soon - 2024
          </div>
          <a href="#features" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
            Explore Features
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Platform Preview -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-turquoise-50/30 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Revolutionary Travel Platform</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Designed for tour operators, travel agencies, and tourism businesses</p>
    </div>
    
    <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
      <div class="fade-in-up">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?q=80&w=2070" alt="Tour Management Dashboard" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">Tour Management Hub</h3>
            <p class="text-gray-600">Centralized dashboard for managing tours, bookings, guides, and customer experiences across all destinations.</p>
          </div>
        </div>
      </div>
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1551836022-deb4988cc6c0?q=80&w=2070" alt="Mobile Booking App" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">Mobile Booking Experience</h3>
            <p class="text-gray-600">Intuitive mobile app for customers to discover, book, and manage their travel experiences.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="grid lg:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up">
        <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?q=80&w=2070" alt="Itinerary Planning" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Smart Itinerary Builder</h4>
          <p class="text-sm text-gray-600">AI-powered itinerary creation with personalized recommendations and optimization.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 100ms;">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=2070" alt="Guide Network" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Guide Network</h4>
          <p class="text-sm text-gray-600">Professional guide management with ratings, scheduling, and performance tracking.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 200ms;">
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015" alt="Analytics Dashboard" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Business Intelligence</h4>
          <p class="text-sm text-gray-600">Advanced analytics for tour performance, customer insights, and revenue optimization.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Key Features -->
<section id="features" class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Complete Tourism Ecosystem</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Everything needed to run a successful travel and tourism business</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Tour Management -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up">
        <div class="w-16 h-16 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Comprehensive Tour Management</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Create, manage, and optimize tour packages with detailed itineraries, pricing, and availability management.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Dynamic tour package creation</li>
          <li>• Multi-day itinerary planning</li>
          <li>• Real-time availability tracking</li>
          <li>• Seasonal pricing and promotions</li>
          <li>• Group size and capacity management</li>
          <li>• Custom tour modifications</li>
          <li>• Multi-language tour descriptions</li>
        </ul>
      </div>
      
      <!-- Booking System -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 100ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-cyan-accent to-turquoise-500 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Advanced Booking Engine</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Powerful booking system with instant confirmations, payment processing, and customer communication.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Real-time booking and confirmations</li>
          <li>• Multiple payment gateway integration</li>
          <li>• Flexible cancellation policies</li>
          <li>• Group booking discounts</li>
          <li>• Waitlist and overbooking management</li>
          <li>• Automated booking confirmations</li>
          <li>• Mobile-responsive booking flow</li>
        </ul>
      </div>
      
      <!-- Guide Management -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-turquoise-700 to-cyan-600 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Professional Guide Network</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Manage certified tour guides with scheduling, performance tracking, and customer feedback systems.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Guide profile and certification management</li>
          <li>• Automated scheduling and assignments</li>
          <li>• Performance metrics and ratings</li>
          <li>• Multi-language guide matching</li>
          <li>• Training and certification tracking</li>
          <li>• Commission and payment management</li>
          <li>• Customer feedback integration</li>
        </ul>
      </div>
      
      <!-- Customer Experience -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 300ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-emerald-500 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Enhanced Customer Experience</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Deliver exceptional customer experiences with personalized services and seamless communication.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Personalized travel recommendations</li>
          <li>• Pre-trip planning and preparation</li>
          <li>• Real-time tour updates and notifications</li>
          <li>• Digital travel documents and tickets</li>
          <li>• In-app messaging and support</li>
          <li>• Post-trip feedback and reviews</li>
          <li>• Loyalty program integration</li>
        </ul>
      </div>
      
      <!-- Operations Management -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 400ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-indigo-500 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Operations Management</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Streamline operations with resource management, logistics coordination, and automated workflows.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Resource and equipment management</li>
          <li>• Transportation coordination</li>
          <li>• Vendor and supplier integration</li>
          <li>• Emergency contact and protocols</li>
          <li>• Insurance and safety compliance</li>
          <li>• Automated workflow management</li>
          <li>• Cost tracking and budgeting</li>
        </ul>
      </div>
      
      <!-- Analytics & Insights -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 500ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-teal-600 to-cyan-600 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2-2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Business Intelligence</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Data-driven insights for optimizing tours, pricing, and customer satisfaction with predictive analytics.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Revenue and profitability analysis</li>
          <li>• Customer behavior and preferences</li>
          <li>• Tour performance optimization</li>
          <li>• Seasonal demand forecasting</li>
          <li>• Competitive market analysis</li>
          <li>• Custom reporting dashboards</li>
          <li>• ROI and marketing effectiveness</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Coming Soon Features -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-turquoise-50/30 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Revolutionary Features Coming Soon</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Next-generation travel technology launching in 2024</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up">
        <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
          </svg>
        </div>
        <h3 class=" text-xl font-bold text-dark-turquoise mb-3">AR/VR Tour Previews</h3>
        <p class="text-gray-600 text-sm">Immersive virtual reality previews of destinations and augmented reality guided experiences during tours.</p>
      </div>
      
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up" style="transition-delay: 100ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-teal-600 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
          </svg>
        </div>
        <h3 class=" text-xl font-bold text-dark-turquoise mb-3">AI Trip Planning</h3>
        <p class="text-gray-600 text-sm">Artificial intelligence-powered trip planning with personalized recommendations based on preferences and behavior.</p>
      </div>
      
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-teal-600 to-cyan-600 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <h3 class=" text-xl font-bold text-dark-turquoise mb-3">Blockchain Verification</h3>
        <p class="text-gray-600 text-sm">Blockchain-based verification for authentic reviews, certifications, and secure transaction processing.</p>
      </div>
    </div>
  </div>
</section>

<!-- Early Access -->
<section class="py-20 md:py-28 px-8 bg-gradient-to-br from-dark-turquoise to-turquoise-600">
  <div class="max-w-4xl mx-auto text-center">
    <div class="fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-white mb-6">Get Early Access</h2>
      <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl mx-auto">Be among the first to experience the future of travel and tourism management. Join our exclusive early access program.</p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="#" class="bg-cyan-300 text-dark-turquoise px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
          Join Early Access
        </a>
        <a href="#" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
          Request Demo
        </a>
      </div>
      <p class="text-gray-300 mt-6">Limited spots available • Launching Q2 2024</p>
    </div>
  </div>
</section>
@endsection
