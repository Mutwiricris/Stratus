@extends('layouts.detail')

@section('title', 'Benefits & Platform - Ascend Stratus')
@section('description', 'Discover the benefits of partnering with Ascend Stratus and explore our unified intelligence platform that drives efficiency and innovation across sectors.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[70vh] flex items-center">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1579758629938-03607ccDB445?q=80&w=2070" alt="Platform Benefits" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-br from-dark-turquoise/90 via-turquoise-600/85 to-cyan-accent/75"></div>
  </div>
  <div class="relative z-10 w-full container px-6 sm:px-10 md:px-16 lg:px-24 xl:px-32 py-20">
    <div class="max-w-4xl">
      <div class="fade-in-up">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight font-heading">
          Unified Platform. Unlimited Potential.
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl leading-relaxed">
          Experience the power of cross-venture intelligence and unified platform access that transforms how businesses operate, scale, and innovate across multiple sectors.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
          <a href="#platform" class="bg-cyan-300 text-dark-turquoise px-6 sm:px-8 py-3 sm:py-4 rounded-lg text-base sm:text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
            Explore Platform
          </a>
          <a href="#benefits" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
            View Benefits
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Key Benefits Section -->
<section id="benefits" class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Why Partner With Ascend Stratus</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Unlock competitive advantages through our integrated ecosystem of intelligent solutions</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Benefit 1 -->
      <div class="fade-in-up">
        <div class="relative overflow-hidden rounded-2xl mb-6 group">
          <img src="https://images.unsplash.com/photo-1579758629938-03607ccDB445?q=80&w=2070" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" alt="Cross-Venture Intelligence">
          <div class="absolute inset-0 bg-gradient-to-t from-dark-turquoise/80 to-transparent"></div>
          <div class="absolute bottom-4 left-4 text-white">
            <span class="text-2xl font-bold">01</span>
          </div>
        </div>
        <h3 class="font-bold text-dark-turquoise text-xl mb-3">Cross-Venture Intelligence</h3>
        <p class="text-gray-600 leading-relaxed">Leverage insights and data across our entire venture ecosystem for competitive advantage. Access real-time analytics and predictive intelligence that spans multiple industries.</p>
      </div>
      
      <!-- Benefit 2 -->
      <div class="fade-in-up" style="transition-delay: 100ms;">
        <div class="relative overflow-hidden rounded-2xl mb-6 group">
          <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1932" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" alt="Unified Platform">
          <div class="absolute inset-0 bg-gradient-to-t from-turquoise-600/80 to-transparent"></div>
          <div class="absolute bottom-4 left-4 text-white">
            <span class="text-2xl font-bold">02</span>
          </div>
        </div>
        <h3 class="font-bold text-dark-turquoise text-xl mb-3">Unified Platform Access</h3>
        <p class="text-gray-600 leading-relaxed">Single integrated platform connecting all ventures with shared resources and intelligence. Streamline operations with seamless data flow and automated workflows.</p>
      </div>
      
      <!-- Benefit 3 -->
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="relative overflow-hidden rounded-2xl mb-6 group">
          <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=2070" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" alt="Multi-Sector Expertise">
          <div class="absolute inset-0 bg-gradient-to-t from-cyan-accent/80 to-transparent"></div>
          <div class="absolute bottom-4 left-4 text-white">
            <span class="text-2xl font-bold">03</span>
          </div>
        </div>
        <h3 class="font-bold text-dark-turquoise text-xl mb-3">Multi-Sector Expertise</h3>
        <p class="text-gray-600 leading-relaxed">Access specialized knowledge across logistics, fintech, agritech, and energy sectors. Benefit from deep industry insights and best practices.</p>
      </div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12 md:px-16 lg:px-32">
      <!-- Benefit 4 -->
      <div class="fade-in-up" style="transition-delay: 300ms;">
        <div class="relative overflow-hidden rounded-2xl mb-6 group">
          <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86?q=80&w=2070" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" alt="Scalable Infrastructure">
          <div class="absolute inset-0 bg-gradient-to-t from-turquoise-700/80 to-transparent"></div>
          <div class="absolute bottom-4 left-4 text-white">
            <span class="text-2xl font-bold">04</span>
          </div>
        </div>
        <h3 class="font-bold text-dark-turquoise text-xl mb-3">Scalable Infrastructure</h3>
        <p class="text-gray-600 leading-relaxed">Enterprise-grade technology stack that grows with your business needs and demands. Cloud-native architecture ensures reliability and performance.</p>
      </div>
      
      <!-- Benefit 5 -->
      <div class="fade-in-up" style="transition-delay: 400ms;">
        <div class="relative overflow-hidden rounded-2xl mb-6 group">
          <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" alt="Transformative Results">
          <div class="absolute inset-0 bg-gradient-to-t from-dark-turquoise/80 to-transparent"></div>
          <div class="absolute bottom-4 left-4 text-white">
            <span class="text-2xl font-bold">05</span>
          </div>
        </div>
        <h3 class="font-bold text-dark-turquoise text-xl mb-3">Transformative Results</h3>
        <p class="text-gray-600 leading-relaxed">Proven track record of 40% efficiency improvements and 10x faster scaling for partners. Measurable ROI through data-driven optimization.</p>
      </div>
    </div>
  </div>
</section>

<!-- Platform Overview Section -->
<section id="platform" class="py-20 md:py-28 bg-gradient-to-br from-cyan-50 via-turquoise-50 to-cyan-100">
  <div class="max-w-7xl mx-auto px-8">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">The Ascend Platform</h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">A comprehensive ecosystem that connects, analyzes, and optimizes business operations across multiple sectors through intelligent automation and data-driven insights.</p>
    </div>
    
    <div class="grid lg:grid-cols-2 gap-16 items-center mb-20">
      <div class="fade-in-up">
        <h3 class=" text-3xl md:text-4xl font-bold text-dark-turquoise mb-6">Intelligent Data Integration</h3>
        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
          Our platform seamlessly integrates data from all your business operations, creating a unified view that enables smarter decision-making and automated optimization.
        </p>
        <div class="space-y-4">
          <div class="flex items-center space-x-3">
            <div class="w-6 h-6 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-full flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <span class="text-gray-700">Real-time data synchronization across all systems</span>
          </div>
          <div class="flex items-center space-x-3">
            <div class="w-6 h-6 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-full flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <span class="text-gray-700">Advanced analytics and predictive modeling</span>
          </div>
          <div class="flex items-center space-x-3">
            <div class="w-6 h-6 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-full flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <span class="text-gray-700">Automated workflow optimization</span>
          </div>
        </div>
      </div>
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070" alt="Platform Dashboard" class="rounded-2xl shadow-2xl w-full">
          <div class="absolute inset-0 bg-gradient-to-t from-dark-turquoise/20 to-transparent rounded-2xl"></div>
        </div>
      </div>
    </div>
    
    <!-- Platform Features Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl border border-white/40 card-hover fade-in-up">
        <div class="w-12 h-12 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-xl flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
          </svg>
        </div>
        <h4 class="font-bold text-dark-turquoise mb-2">Analytics Engine</h4>
        <p class="text-sm text-gray-600">Advanced data processing and insights generation</p>
      </div>
      
      <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl border border-white/40 card-hover fade-in-up" style="transition-delay: 100ms;">
        <div class="w-12 h-12 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-xl flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
          </svg>
        </div>
        <h4 class="font-bold text-dark-turquoise mb-2">Automation Hub</h4>
        <p class="text-sm text-gray-600">Intelligent workflow automation and optimization</p>
      </div>
      
      <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl border border-white/40 card-hover fade-in-up" style="transition-delay: 200ms;">
        <div class="w-12 h-12 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-xl flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
          </svg>
        </div>
        <h4 class="font-bold text-dark-turquoise mb-2">Integration Layer</h4>
        <p class="text-sm text-gray-600">Seamless connectivity across all systems</p>
      </div>
      
      <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl border border-white/40 card-hover fade-in-up" style="transition-delay: 300ms;">
        <div class="w-12 h-12 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-xl flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
        </div>
        <h4 class="font-bold text-dark-turquoise mb-2">Security Core</h4>
        <p class="text-sm text-gray-600">Enterprise-grade security and compliance</p>
      </div>
    </div>
  </div>
</section>

<!-- Success Metrics Section -->
<section class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Proven Results</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Our platform delivers measurable improvements across key business metrics</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
      <div class="text-center fade-in-up">
        <div class="text-5xl md:text-6xl font-extrabold bg-gradient-to-r from-turquoise-600 to-cyan-accent bg-clip-text text-transparent mb-2">40%</div>
        <div class="text-dark-turquoise font-semibold mb-2">Efficiency Gain</div>
        <div class="text-sm text-gray-600">Average improvement in operational efficiency</div>
      </div>
      <div class="text-center fade-in-up" style="transition-delay: 100ms;">
        <div class="text-5xl md:text-6xl font-extrabold bg-gradient-to-r from-turquoise-600 to-cyan-accent bg-clip-text text-transparent mb-2">10x</div>
        <div class="text-dark-turquoise font-semibold mb-2">Faster Scaling</div>
        <div class="text-sm text-gray-600">Accelerated growth through unified platform</div>
      </div>
      <div class="text-center fade-in-up" style="transition-delay: 200ms;">
        <div class="text-5xl md:text-6xl font-extrabold bg-gradient-to-r from-turquoise-600 to-cyan-accent bg-clip-text text-transparent mb-2">99.9%</div>
        <div class="text-dark-turquoise font-semibold mb-2">Uptime</div>
        <div class="text-sm text-gray-600">Reliable platform availability</div>
      </div>
      <div class="text-center fade-in-up" style="transition-delay: 300ms;">
        <div class="text-5xl md:text-6xl font-extrabold bg-gradient-to-r from-turquoise-600 to-cyan-accent bg-clip-text text-transparent mb-2">24/7</div>
        <div class="text-dark-turquoise font-semibold mb-2">Support</div>
        <div class="text-sm text-gray-600">Round-the-clock expert assistance</div>
      </div>
    </div>
    
    <!-- Testimonial -->
    <div class="bg-gradient-to-r from-dark-turquoise to-turquoise-600 rounded-2xl p-8 md:p-12 text-center fade-in-up">
      <blockquote class="text-xl md:text-2xl text-white mb-6 leading-relaxed">
        "The Ascend platform has transformed how we operate across multiple business units. The cross-venture intelligence capabilities have given us insights we never had before."
      </blockquote>
      <div class="flex items-center justify-center space-x-4">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face" alt="Client" class="w-12 h-12 rounded-full">
        <div class="text-left">
          <div class="text-cyan-300 font-semibold">Marcus Johnson</div>
          <div class="text-cyan-100 text-sm">VP of Operations, TechCorp</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-br from-cyan-50 to-turquoise-50">
  <div class="max-w-4xl mx-auto text-center px-8">
    <div class="fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-6">Experience the Platform</h2>
      <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
        See how our unified platform can transform your business operations and unlock new opportunities for growth.
      </p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="{{ url('/contact') }}" class="bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:shadow-xl transition-all">
          Schedule Demo
        </a>
        <a href="{{ url('/case-studies') }}" class="text-dark-turquoise hover:text-turquoise-600 font-medium border-b border-dark-turquoise/40 hover:border-turquoise-600 transition-all duration-300 py-2">
          View Case Studies
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
