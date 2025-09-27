@extends('layouts.detail')

@section('title', 'About Us - Ascend Stratus')
@section('description', 'Learn about Ascend Stratus, a multi-sector holding company revolutionizing foundational businesses through technology. Discover our story, mission, and the team behind our success.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-gray-50 via-white to-teal-50/30 min-h-screen relative overflow-hidden">
  <!-- Background Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-teal-400/20 to-cyan-400/20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-tr from-blue-400/20 to-teal-400/20 rounded-full blur-3xl"></div>
  </div>
  
  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-24 flex items-center min-h-screen">
    <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16 items-center w-full">
      <!-- Left Column - Content -->
      <div class="order-2 lg:order-1 fade-in-up">
        <div class="mb-6 sm:mb-8">
          <span class="inline-flex items-center gap-2 text-teal-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 sm:mb-6 bg-teal-50 px-3 sm:px-4 py-2 rounded-full">
            <div class="w-2 h-2 bg-teal-500 rounded-full animate-pulse"></div>
            About Ascend Stratus
          </span>
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-gray-900 mb-6 sm:mb-8 leading-[1.1]">
            Engineering software
            <span class="bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 bg-clip-text text-transparent">that empowers</span>
            <span class="block">businesses.</span>
          </h1>
        </div>
        
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-600 mb-8 sm:mb-10 leading-relaxed">
          We are a multi-sector holding company revolutionizing foundational businesses through technology. Our mission is to build intelligent platforms that drive efficiency, scalability, and innovation across diverse industries.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 items-stretch sm:items-center mb-8 sm:mb-12">
          <a href="#story" class="group relative bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-base sm:text-lg font-semibold hover:shadow-2xl hover:shadow-teal-500/25 transition-all duration-500 hover:scale-105 overflow-hidden">
            <span class="relative flex items-center justify-center gap-2">
              Our Story
              <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </span>
          </a>
          <a href="{{ url('/contact') }}" class="group border-2 border-gray-300 text-gray-700 px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-base sm:text-lg font-semibold hover:border-teal-600 hover:text-teal-600 hover:bg-teal-50 transition-all duration-300 backdrop-blur-sm bg-white/50">
            <span class="flex items-center justify-center gap-2">
              <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
              </svg>
              Get In Touch
            </span>
          </a>
        </div>
      </div>
      
      <!-- Right Column - Image -->
      <div class="order-1 lg:order-2">
        <div class="relative group">
          <div class="relative overflow-hidden rounded-2xl sm:rounded-3xl shadow-2xl">
            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=1920&q=80" 
                 alt="Software development team working on innovative solutions" 
                 class="w-full h-[250px] sm:h-[350px] md:h-[450px] lg:h-[550px] object-cover group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-br from-teal-600/20 via-cyan-600/10 to-blue-600/20 group-hover:opacity-75 transition-opacity duration-500"></div>
          </div>
          
          <!-- Floating Elements - Hidden on mobile, visible on larger screens -->
          <div class="hidden sm:block absolute -top-4 -right-4 w-20 h-20 lg:w-24 lg:h-24 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-2xl shadow-lg flex items-center justify-center floating">
            <svg class="w-6 h-6 lg:w-8 lg:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
            </svg>
          </div>
          
          <div class="hidden sm:block absolute -bottom-4 -left-4 lg:-bottom-6 lg:-left-6 w-28 h-16 lg:w-32 lg:h-20 bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-3 lg:p-4 floating">
            <div class="text-xl lg:text-2xl font-bold text-gray-900">1500+</div>
            <div class="text-xs text-gray-600 font-medium">Projects Delivered</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Company Story Section -->
<section id="story" class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12 sm:mb-16 lg:mb-20">
      <span class="inline-block text-teal-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 bg-teal-50 px-3 sm:px-4 py-2 rounded-full">
        Our Story
      </span>
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Transforming Industries Through Innovation</h2>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">From humble beginnings to global impact, discover how we've revolutionized businesses across multiple sectors</p>
    </div>
    
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
      <!-- Left Column - Story Content -->
      <div class="space-y-6">
        <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-xl flex items-center justify-center mr-4">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900">Our Mission</h3>
          </div>
          <p class="text-gray-600 leading-relaxed">To revolutionize foundational businesses through intelligent technology solutions that drive efficiency, scalability, and sustainable growth across diverse industries.</p>
        </div>
        
        <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-500 rounded-xl flex items-center justify-center mr-4">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900">Our Vision</h3>
          </div>
          <p class="text-gray-600 leading-relaxed">To be the leading technology partner for businesses worldwide, creating innovative platforms that transform industries and empower organizations to achieve unprecedented success.</p>
        </div>
        
        <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mr-4">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900">Our Approach</h3>
          </div>
          <p class="text-gray-600 leading-relaxed">We believe in collaborative partnerships, combining deep industry expertise with cutting-edge technology to deliver solutions that not only meet current needs but anticipate future challenges.</p>
        </div>
      </div>
      
      <!-- Right Column - Image & Stats -->
      <div class="space-y-8">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1920&q=80" 
               alt="Ascend Stratus team collaboration" 
               class="w-full h-64 sm:h-80 object-cover rounded-2xl shadow-xl">
          <div class="absolute inset-0 bg-gradient-to-br from-teal-600/20 via-cyan-600/10 to-blue-600/20 rounded-2xl"></div>
        </div>
        
        <!-- Quick Stats -->
        <div class="grid grid-cols-2 gap-4">
          <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-xl p-6 text-center">
            <div class="text-2xl sm:text-3xl font-bold text-teal-600 mb-2">15+</div>
            <div class="text-sm text-gray-600">Years Experience</div>
          </div>
          <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-xl p-6 text-center">
            <div class="text-2xl sm:text-3xl font-bold text-blue-600 mb-2">50+</div>
            <div class="text-sm text-gray-600">Countries Served</div>
          </div>
          <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 text-center">
            <div class="text-2xl sm:text-3xl font-bold text-green-600 mb-2">2500+</div>
            <div class="text-sm text-gray-600">Happy Clients</div>
          </div>
          <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-xl p-6 text-center">
            <div class="text-2xl sm:text-3xl font-bold text-orange-600 mb-2">99%</div>
            <div class="text-sm text-gray-600">Satisfaction Rate</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Stats Section -->
<section class="py-16 sm:py-20 md:py-28 relative bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 overflow-hidden">
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12 sm:mb-16">
      <span class="inline-block text-cyan-100 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 bg-white/10 px-3 sm:px-4 py-2 rounded-full">
        Our Impact
      </span>
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 sm:mb-6">Delivering Results That Matter</h2>
      <p class="text-base sm:text-lg md:text-xl text-cyan-100 max-w-3xl mx-auto">Our track record speaks for itself - trusted by businesses worldwide</p>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-5 gap-4 sm:gap-6 lg:gap-8">
      <div class="text-center">
        <div class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2 text-white counter" data-target="12">0</div>
        <div class="text-sm sm:text-base text-cyan-100">countries</div>
      </div>
      <div class="text-center">
        <div class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2 text-white counter" data-target="15">0</div>
        <div class="text-sm sm:text-base text-cyan-100">Year</div>
      </div>
      <div class="text-center">
        <div class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2 text-white"><span class="counter" data-target="98">0</span>%</div>
        <div class="text-sm sm:text-base text-cyan-100">Satisfaction</div>
      </div>
      <div class="text-center">
        <div class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2 text-white"><span class="counter" data-target="1500">0</span></div>
        <div class="text-sm sm:text-base text-cyan-100">Projects</div>
      </div>
      <div class="text-center col-span-2 md:col-span-1">
        <div class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2 text-white"><span class="counter" data-target="20">0</span></div>
        <div class="text-sm sm:text-base text-cyan-100">Devs</div>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12 sm:mb-16">
      <span class="inline-block text-teal-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 bg-teal-50 px-3 sm:px-4 py-2 rounded-full">
        Why Choose Us
      </span>
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Speed is in our blood</h2>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">The best software for big challenges. We have ready-made solutions for healthcare, fintech, industry and logistics.</p>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
      <!-- Fast Delivery -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-teal-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">Fast Delivery</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Rapid development cycles with agile methodologies to get your product to market faster.</p>
      </div>
      
      <!-- Expert Team -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-teal-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">Expert Team</h3>
        <p class="text-gray-600 text-sm leading-relaxed">15+ years of combined experience with certified professionals in latest technologies.</p>
      </div>
      
      <!-- 24/7 Support -->
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-teal-200 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">24/7 Support</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Round-the-clock support and maintenance to ensure your systems run smoothly.</p>
      </div>
    </div>
  </div>
</section>

<!-- Company Culture Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12 sm:mb-16">
      <span class="inline-block text-teal-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 bg-teal-50 px-3 sm:px-4 py-2 rounded-full">
        Our Culture
      </span>
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Building Tomorrow Together</h2>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Our culture is built on innovation, collaboration, and continuous learning. We foster an environment where creativity thrives and everyone can make a meaningful impact.</p>
    </div>
    
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-16">
      <!-- Left Column - Culture Values -->
      <div class="space-y-8">
        <div class="flex items-start space-x-4">
          <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-xl flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Innovation First</h3>
            <p class="text-gray-600 leading-relaxed">We encourage bold thinking and creative problem-solving. Every team member is empowered to propose new ideas and drive innovation.</p>
          </div>
        </div>
        
        <div class="flex items-start space-x-4">
          <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-500 rounded-xl flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Collaborative Spirit</h3>
            <p class="text-gray-600 leading-relaxed">We believe in the power of teamwork. Cross-functional collaboration and knowledge sharing are at the heart of everything we do.</p>
          </div>
        </div>
        
        <div class="flex items-start space-x-4">
          <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Continuous Learning</h3>
            <p class="text-gray-600 leading-relaxed">We invest in our team's growth through training, conferences, and skill development programs. Learning never stops at Ascend Stratus.</p>
          </div>
        </div>
      </div>
      
      <!-- Right Column - Image -->
      <div class="relative">
        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=1920&q=80" 
             alt="Team collaboration at Ascend Stratus" 
             class="w-full h-80 object-cover rounded-2xl shadow-xl">
        <div class="absolute inset-0 bg-gradient-to-br from-teal-600/20 via-cyan-600/10 to-blue-600/20 rounded-2xl"></div>
      </div>
    </div>
    
    <!-- Culture Stats -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-2xl p-6 text-center">
        <div class="text-3xl font-bold text-teal-600 mb-2">95%</div>
        <div class="text-sm text-gray-600">Employee Satisfaction</div>
      </div>
      <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-6 text-center">
        <div class="text-3xl font-bold text-blue-600 mb-2">40+</div>
        <div class="text-sm text-gray-600">Training Hours/Year</div>
      </div>
      <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6 text-center">
        <div class="text-3xl font-bold text-green-600 mb-2">12</div>
        <div class="text-sm text-gray-600">Countries Represented</div>
      </div>
      <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-6 text-center">
        <div class="text-3xl font-bold text-orange-600 mb-2">3.2%</div>
        <div class="text-sm text-gray-600">Annual Turnover</div>
      </div>
    </div>
  </div>
</section>

<!-- Leadership Team Section -->


@endsection
         
