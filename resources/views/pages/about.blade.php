@extends('layouts.detail')

@section('title', 'About Us - Ascend Stratus')
@section('description', 'Learn about Ascend Stratus, a modern multi-sector holding company revolutionizing foundational industries through technology and innovation.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[70vh] flex items-center">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1920&q=80" alt="About Ascend Stratus" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-dark-turquoise/90 via-turquoise-700/80 to-cyan-accent/70"></div>
  </div>
  <div class="relative z-10 w-full container px-6 sm:px-10 md:px-16 lg:px-24 xl:px-32 py-20">
    <div class="max-w-4xl">
      <div class="fade-in-up">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight font-heading">
          Engineering the Future of Business
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl leading-relaxed">
          We are Ascend Stratus – a modern, multi-sector holding company committed to revolutionizing foundational industries through cutting-edge technology and transformative innovation.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
          <a href="#mission" class="bg-cyan-300 text-dark-turquoise px-6 sm:px-8 py-3 sm:py-4 rounded-lg text-base sm:text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
            Our Mission
          </a>
          <a href="#team" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
            Meet Our Team
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Mission & Vision Section -->
<section id="mission" class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <div class="fade-in-up">
        <h2 class="font-serif text-4xl md:text-5xl font-bold text-dark-turquoise mb-6">The Ascend Principle</h2>
        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
          Our philosophy is simple yet profound: we believe in transformative growth that redefines what's possible. The Ascend Principle guides everything we do – from the ventures we support to the technologies we develop.
        </p>
        <div class="space-y-4">
          <div class="flex items-start space-x-4">
            <div class="w-8 h-8 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-full flex items-center justify-center flex-shrink-0 mt-1">
              <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <div>
              <h3 class="font-semibold text-dark-turquoise mb-2">Innovation-First Approach</h3>
              <p class="text-gray-600">We pioneer breakthrough technologies that transform entire industries and create lasting value.</p>
            </div>
          </div>
          <div class="flex items-start space-x-4">
            <div class="w-8 h-8 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-full flex items-center justify-center flex-shrink-0 mt-1">
              <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <div>
              <h3 class="font-semibold text-dark-turquoise mb-2">Cross-Venture Intelligence</h3>
              <p class="text-gray-600">Leverage insights and data across our entire ecosystem for unprecedented competitive advantage.</p>
            </div>
          </div>
          <div class="flex items-start space-x-4">
            <div class="w-8 h-8 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-full flex items-center justify-center flex-shrink-0 mt-1">
              <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <div>
              <h3 class="font-semibold text-dark-turquoise mb-2">Sustainable Impact</h3>
              <p class="text-gray-600">Create solutions that benefit businesses, communities, and the environment for generations.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1600880292203-943bb448de84?q=80&w=1974" alt="Innovation" class="rounded-2xl shadow-2xl w-full">
          <div class="absolute -bottom-6 -right-6 bg-gradient-to-r from-turquoise-600 to-cyan-accent p-6 rounded-2xl shadow-xl">
            <div class="text-white text-center">
              <div class="text-3xl font-bold mb-2">4+</div>
              <div class="text-sm opacity-90">Core Sectors</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Section -->
<section class="py-20 md:py-28 bg-gradient-to-r from-cyan-50 to-turquoise-50">
  <div class="max-w-7xl mx-auto px-8">
    <div class="text-center mb-16 fade-in-up">
      <h2 class="font-serif text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Transforming Industries at Scale</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Our impact spans across multiple sectors, driving efficiency and innovation through intelligent platforms.</p>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
      <div class="bg-white/80 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center card-hover fade-in-up">
        <div class="text-3xl md:text-4xl font-extrabold text-dark-turquoise mb-2">40%</div>
        <div class="text-sm text-gray-600">Average Efficiency Improvement</div>
      </div>
      <div class="bg-white/80 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center card-hover fade-in-up" style="transition-delay: 100ms;">
        <div class="text-3xl md:text-4xl font-extrabold text-dark-turquoise mb-2">10x</div>
        <div class="text-sm text-gray-600">Faster Scaling</div>
      </div>
      <div class="bg-white/80 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center card-hover fade-in-up" style="transition-delay: 200ms;">
        <div class="text-3xl md:text-4xl font-extrabold text-dark-turquoise mb-2">100%</div>
        <div class="text-sm text-gray-600">Cross-Venture Integration</div>
      </div>
      <div class="bg-white/80 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center card-hover fade-in-up" style="transition-delay: 300ms;">
        <div class="text-3xl md:text-4xl font-extrabold text-dark-turquoise mb-2">24/7</div>
        <div class="text-sm text-gray-600">Platform Availability</div>
      </div>
    </div>
  </div>
</section>

<!-- Our Story Section -->
<section class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <div class="fade-in-up">
        <img src="https://images.unsplash.com/photo-1573496774439-fe3923b03629?q=80&w=1974" alt="Our Story" class="rounded-2xl shadow-2xl w-full">
      </div>
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <h2 class="font-serif text-4xl md:text-5xl font-bold text-dark-turquoise mb-6">Our Story</h2>
        <div class="space-y-6 text-gray-600 leading-relaxed">
          <p>
            Founded with a vision to bridge the gap between traditional industries and cutting-edge technology, Ascend Stratus emerged from the recognition that foundational sectors needed more than incremental improvements – they needed transformation.
          </p>
          <p>
            Our journey began with a simple observation: while technology was rapidly advancing, many critical industries remained fragmented, inefficient, and resistant to change. We saw an opportunity to create a unified platform that could accelerate innovation across multiple sectors simultaneously.
          </p>
          <p>
            Today, we're proud to be at the forefront of this transformation, working with world-class Tools to build the intelligent systems that will power the next generation of business operations.
          </p>
        </div>
        <div class="mt-8">
          <a href="{{ url('/ventures') }}" class="inline-flex items-center text-dark-turquoise font-semibold hover:text-cyan-accent transition-colors group">
            Explore Our Ventures
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Leadership Team Section -->
<section id="team" class="py-20 md:py-28 bg-dark-turquoise">
  <div class="max-w-7xl mx-auto px-8">
    <div class="text-center mb-16 fade-in-up">
      <h2 class="font-serif text-4xl md:text-5xl font-bold text-white mb-4">Our Team</h2>
      <p class="text-lg text-cyan-100 max-w-2xl mx-auto">Meet the visionaries driving transformation across industries</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Team Member 1 -->
      <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center card-hover fade-in-up">
        <img src="{{asset('images/image32.webp')}}" alt="CEO" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
        <h3 class="font-bold text-white text-lg mb-2">Chrispus Mutwiri Gitonga</h3>
        <p class="text-cyan-300 text-sm mb-3">Chief Technology Officer</p>
        <p class="text-cyan-100 text-sm">Laravel and PHP expert with over 4 years of experience in building scalable enterprise platforms across multiple industries.</p>
      </div>
      <!-- Team Member 2 -->
      <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center card-hover fade-in-up" style="transition-delay: 100ms;">
        <img src="{{asset('images/image copy.png')}}" alt="CTO" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
        <h3 class="font-bold text-white text-lg mb-2">Chege Antony</h3>
        <p class="text-cyan-300 text-sm mb-3">100000X Vibe coder in python and machine learning</p>
        <p class="text-cyan-100 text-sm">AI and machine learning expert with deep experience in building scalable enterprise platforms across multiple industries.</p>
      </div>
      <!-- Team Member 3 -->
      
    </div>
  </div>
</section>

<!-- Values Section -->
<section class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class="font-serif text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Our Core Values</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">The principles that guide our decisions and shape our culture</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-gradient-to-br from-turquoise-50 to-cyan-50 p-8 rounded-2xl border border-turquoise-100 card-hover fade-in-up">
        <div class="w-12 h-12 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-xl flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
          </svg>
        </div>
        <h3 class="font-bold text-dark-turquoise text-xl mb-3">Innovation Excellence</h3>
        <p class="text-gray-600">We constantly push boundaries, embracing cutting-edge technologies to solve complex industry challenges.</p>
      </div>
      <div class="bg-gradient-to-br from-turquoise-50 to-cyan-50 p-8 rounded-2xl border border-turquoise-100 card-hover fade-in-up" style="transition-delay: 100ms;">
        <div class="w-12 h-12 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-xl flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <h3 class="font-bold text-dark-turquoise text-xl mb-3">Collaborative Growth</h3>
        <p class="text-gray-600">We believe in the power of partnership, building lasting relationships that drive mutual success.</p>
      </div>
      <div class="bg-gradient-to-br from-turquoise-50 to-cyan-50 p-8 rounded-2xl border border-turquoise-100 card-hover fade-in-up" style="transition-delay: 200ms;">
        <div class="w-12 h-12 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-xl flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <h3 class="font-bold text-dark-turquoise text-xl mb-3">Integrity First</h3>
        <p class="text-gray-600">We operate with transparency, accountability, and ethical practices in everything we do.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-r from-dark-turquoise to-turquoise-600">
  <div class="max-w-4xl mx-auto text-center px-8">
    <div class="fade-in-up">
      <h2 class="font-serif text-4xl md:text-5xl font-bold text-white mb-6">Ready to Transform Your Industry?</h2>
      <p class="text-lg text-cyan-100 mb-8 max-w-2xl mx-auto">
        Join the growing ecosystem of forward-thinking companies leveraging our platform to drive unprecedented growth and innovation.
      </p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="{{ url('/contact') }}" class="bg-cyan-300 text-dark-turquoise px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
          Partner With Us
        </a>
        <a href="{{ url('/platform') }}" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
          Explore Our Platform
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
