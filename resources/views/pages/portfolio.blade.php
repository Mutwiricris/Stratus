@extends('layouts.detail')

@section('title', 'Portfolio - Ascend Stratus')
@section('description', 'Explore our portfolio of active ventures and successful transformations across logistics, fintech, agritech, and energy sectors.')

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
          Our Portfolio
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-8 leading-tight">
          <span class="bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 bg-clip-text text-transparent">
            Transforming Industries.
          </span>
          <br>
          <span class="text-gray-900">Delivering Results.</span>
        </h1>
        <p class="text-lg sm:text-xl text-gray-600 mb-10 max-w-2xl leading-relaxed">
          Discover our portfolio of active ventures and successful transformations that are revolutionizing foundational industries through intelligent technology solutions.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
          <a href="#ventures" class="group inline-flex items-center bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl hover:shadow-teal-500/25 transition-all duration-500 hover:scale-105">
            <span class="relative flex items-center gap-2">
              View Ventures
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </span>
          </a>
          <a href="#case-studies" class="group inline-flex items-center text-gray-700 hover:text-teal-600 font-semibold transition-colors duration-300">
            Case Studies
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
            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070" alt="Portfolio" class="w-full h-80 object-cover rounded-2xl">
            
            <!-- Floating Portfolio Stats -->
            <div class="absolute -top-4 -left-4 bg-white/95 backdrop-blur-sm rounded-2xl shadow-xl p-4 floating" style="animation-delay: 1s;">
              <div class="text-center">
                <div class="text-2xl font-bold text-teal-600 mb-1">7+</div>
                <div class="text-xs text-gray-600 font-medium">Active Ventures</div>
              </div>
            </div>
            
            <div class="absolute -bottom-4 -right-4 bg-white/95 backdrop-blur-sm rounded-2xl shadow-xl p-4 floating" style="animation-delay: 1.5s;">
              <div class="text-center">
                <div class="text-2xl font-bold text-cyan-600 mb-1">4</div>
                <div class="text-xs text-gray-600 font-medium">Industries</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Active Ventures Section -->
<section id="ventures" class="py-24 md:py-32 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        Active Ventures
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Our Portfolio</h2>
      <div class="w-24 h-1 bg-gradient-to-r from-teal-600 to-cyan-600 mx-auto mb-6"></div>
      <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Our diverse portfolio spans multiple sectors, each leveraging our unified platform for unprecedented growth and efficiency</p>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
      <!-- LogiFlow -->
      <div class="bg-gradient-to-br from-turquoise-50 to-cyan-50 rounded-2xl overflow-hidden card-hover fade-in-up">
        <div class="relative h-64">
          <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070" alt="LogiFlow" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-dark-turquoise/80 to-transparent"></div>
          <div class="absolute bottom-6 left-6">
            <div class="bg-cyan-300 text-dark-turquoise px-3 py-1 rounded-full text-sm font-semibold mb-2">Logistics</div>
            <h3 class="text-2xl font-bold text-white">LogiFlow</h3>
          </div>
        </div>
        <div class="p-8">
          <p class="text-gray-600 mb-4 leading-relaxed">
            Revolutionary supply chain optimization platform that reduces logistics costs by 35% while improving delivery times through AI-powered route optimization and predictive analytics.
          </p>
          <div class="flex items-center justify-between">
            <div class="flex space-x-4 text-sm">
              <span class="text-turquoise-600 font-semibold">35% Cost Reduction</span>
              <span class="text-turquoise-600 font-semibold">50+ Partners</span>
            </div>
            <a href="#" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors">Learn More →</a>
          </div>
        </div>
      </div>
      
      <!-- FinanceCore -->
      <div class="bg-gradient-to-br from-turquoise-50 to-cyan-50 rounded-2xl overflow-hidden card-hover fade-in-up" style="transition-delay: 100ms;">
        <div class="relative h-64">
          <img src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?q=80&w=2070" alt="FinanceCore" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-turquoise-600/80 to-transparent"></div>
          <div class="absolute bottom-6 left-6">
            <div class="bg-cyan-300 text-dark-turquoise px-3 py-1 rounded-full text-sm font-semibold mb-2">FinTech</div>
            <h3 class="text-2xl font-bold text-white">FinanceCore</h3>
          </div>
        </div>
        <div class="p-8">
          <p class="text-gray-600 mb-4 leading-relaxed">
            Next-generation financial infrastructure platform enabling seamless cross-border transactions and automated compliance management for enterprise clients.
          </p>
          <div class="flex items-center justify-between">
            <div class="flex space-x-4 text-sm">
              <span class="text-turquoise-600 font-semibold">$2B+ Processed</span>
              <span class="text-turquoise-600 font-semibold">99.9% Uptime</span>
            </div>
            <a href="#" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors">Learn More →</a>
          </div>
        </div>
      </div>
      
      <!-- AgriSmart -->
      <div class="bg-gradient-to-br from-turquoise-50 to-cyan-50 rounded-2xl overflow-hidden card-hover fade-in-up" style="transition-delay: 200ms;">
        <div class="relative h-64">
          <img src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?q=80&w=2070" alt="AgriSmart" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-cyan-accent/80 to-transparent"></div>
          <div class="absolute bottom-6 left-6">
            <div class="bg-cyan-300 text-dark-turquoise px-3 py-1 rounded-full text-sm font-semibold mb-2">AgriTech</div>
            <h3 class="text-2xl font-bold text-white">AgriSmart</h3>
          </div>
        </div>
        <div class="p-8">
          <p class="text-gray-600 mb-4 leading-relaxed">
            Precision agriculture platform combining IoT sensors, satellite imagery, and machine learning to optimize crop yields while reducing resource consumption.
          </p>
          <div class="flex items-center justify-between">
            <div class="flex space-x-4 text-sm">
              <span class="text-turquoise-600 font-semibold">25% Yield Increase</span>
              <span class="text-turquoise-600 font-semibold">30% Water Savings</span>
            </div>
            <a href="#" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors">Learn More →</a>
          </div>
        </div>
      </div>
      
      <!-- EnergyGrid -->
      <div class="bg-gradient-to-br from-turquoise-50 to-cyan-50 rounded-2xl overflow-hidden card-hover fade-in-up" style="transition-delay: 300ms;">
        <div class="relative h-64">
          <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?q=80&w=2070" alt="EnergyGrid" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-turquoise-700/80 to-transparent"></div>
          <div class="absolute bottom-6 left-6">
            <div class="bg-cyan-300 text-dark-turquoise px-3 py-1 rounded-full text-sm font-semibold mb-2">Energy</div>
            <h3 class="text-2xl font-bold text-white">EnergyGrid</h3>
          </div>
        </div>
        <div class="p-8">
          <p class="text-gray-600 mb-4 leading-relaxed">
            Smart grid management system that optimizes energy distribution, integrates renewable sources, and reduces operational costs through predictive maintenance.
          </p>
          <div class="flex items-center justify-between">
            <div class="flex space-x-4 text-sm">
              <span class="text-turquoise-600 font-semibold">40% Efficiency Gain</span>
              <span class="text-turquoise-600 font-semibold">Carbon Neutral</span>
            </div>
            <a href="#" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors">Learn More →</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio Stats -->
<section class="py-20 md:py-28 bg-gradient-to-br from-dark-turquoise to-turquoise-700">
  <div class="max-w-7xl mx-auto px-8">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-white mb-4">Portfolio Impact</h2>
      <p class="text-lg text-cyan-100 max-w-2xl mx-auto">Measurable results across our venture ecosystem</p>
    </div>
    
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
      <div class="text-center fade-in-up">
        <div class="text-5xl md:text-6xl font-extrabold text-cyan-300 mb-2">$5B+</div>
        <div class="text-white font-semibold mb-2">Total Value Created</div>
        <div class="text-sm text-cyan-100">Across all ventures</div>
      </div>
      <div class="text-center fade-in-up" style="transition-delay: 100ms;">
        <div class="text-5xl md:text-6xl font-extrabold text-cyan-300 mb-2">200+</div>
        <div class="text-white font-semibold mb-2">Enterprise Clients</div>
        <div class="text-sm text-cyan-100">Served globally</div>
      </div>
      <div class="text-center fade-in-up" style="transition-delay: 200ms;">
        <div class="text-5xl md:text-6xl font-extrabold text-cyan-300 mb-2">4</div>
        <div class="text-white font-semibold mb-2">Core Sectors</div>
        <div class="text-sm text-cyan-100">Transformed industries</div>
      </div>
      <div class="text-center fade-in-up" style="transition-delay: 300ms;">
        <div class="text-5xl md:text-6xl font-extrabold text-cyan-300 mb-2">95%</div>
        <div class="text-white font-semibold mb-2">Client Retention</div>
        <div class="text-sm text-cyan-100">Long-term partnerships</div>
      </div>
    </div>
  </div>
</section>

<!-- Case Studies Section -->
<section id="case-studies" class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Success Stories</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Real transformations, measurable results</p>
    </div>
    
    <div class="space-y-16">
      <!-- Case Study 1 -->
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="fade-in-up">
          <img src="https://images.unsplash.com/photo-1560250056-07ba64664864?q=80&w=1974" alt="Global Logistics Transformation" class="rounded-2xl shadow-2xl w-full">
        </div>
        <div class="fade-in-up" style="transition-delay: 200ms;">
          <div class="bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-4 py-2 rounded-full text-sm font-semibold mb-4 inline-block">Case Study</div>
          <h3 class=" text-3xl md:text-4xl font-bold text-dark-turquoise mb-4">Global Logistics Transformation</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">
            How a Fortune 500 logistics company reduced operational costs by 35% and improved delivery times by 50% through our integrated platform solution.
          </p>
          <div class="grid grid-cols-2 gap-4 mb-6">
            <div class="bg-turquoise-50 p-4 rounded-lg">
              <div class="text-2xl font-bold text-turquoise-600">35%</div>
              <div class="text-sm text-gray-600">Cost Reduction</div>
            </div>
            <div class="bg-turquoise-50 p-4 rounded-lg">
              <div class="text-2xl font-bold text-turquoise-600">50%</div>
              <div class="text-sm text-gray-600">Faster Delivery</div>
            </div>
          </div>
          <a href="{{ url('/case-studies') }}" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors group">
            Read Full Case Study
            <svg class="w-5 h-5 ml-2 inline group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
          </a>
        </div>
      </div>
      
      <!-- Case Study 2 -->
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="fade-in-up lg:order-2">
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070" alt="FinTech Innovation" class="rounded-2xl shadow-2xl w-full">
        </div>
        <div class="fade-in-up lg:order-1" style="transition-delay: 200ms;">
          <div class="bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-4 py-2 rounded-full text-sm font-semibold mb-4 inline-block">Case Study</div>
          <h3 class=" text-3xl md:text-4xl font-bold text-dark-turquoise mb-4">FinTech Innovation Platform</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">
            Enabling a regional bank to process $2B+ in transactions while maintaining 99.9% uptime and reducing compliance costs by 60%.
          </p>
          <div class="grid grid-cols-2 gap-4 mb-6">
            <div class="bg-turquoise-50 p-4 rounded-lg">
              <div class="text-2xl font-bold text-turquoise-600">$2B+</div>
              <div class="text-sm text-gray-600">Transactions Processed</div>
            </div>
            <div class="bg-turquoise-50 p-4 rounded-lg">
              <div class="text-2xl font-bold text-turquoise-600">60%</div>
              <div class="text-sm text-gray-600">Compliance Cost Reduction</div>
            </div>
          </div>
          <a href="{{ url('/case-studies') }}" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors group">
            Read Full Case Study
            <svg class="w-5 h-5 ml-2 inline group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Technology Stack Section -->
<section class="py-20 md:py-28 bg-gradient-to-br from-cyan-50 to-turquoise-50">
  <div class="max-w-7xl mx-auto px-8">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Technology Stack</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Cutting-edge technologies powering our venture ecosystem</p>
    </div>
    
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
      <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl border border-white/40 text-center card-hover fade-in-up">
        <div class="w-12 h-12 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-xl flex items-center justify-center mx-auto mb-3">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
          </svg>
        </div>
        <h4 class="font-semibold text-dark-turquoise text-sm">AI/ML</h4>
      </div>
      
      <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl border border-white/40 text-center card-hover fade-in-up" style="transition-delay: 100ms;">
        <div class="w-12 h-12 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-xl flex items-center justify-center mx-auto mb-3">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
          </svg>
        </div>
        <h4 class="font-semibold text-dark-turquoise text-sm">Cloud Native</h4>
      </div>
      
      <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl border border-white/40 text-center card-hover fade-in-up" style="transition-delay: 200ms;">
        <div class="w-12 h-12 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-xl flex items-center justify-center mx-auto mb-3">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
          </svg>
        </div>
        <h4 class="font-semibold text-dark-turquoise text-sm">Blockchain</h4>
      </div>
      
      <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl border border-white/40 text-center card-hover fade-in-up" style="transition-delay: 300ms;">
        <div class="w-12 h-12 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-xl flex items-center justify-center mx-auto mb-3">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
          </svg>
        </div>
        <h4 class="font-semibold text-dark-turquoise text-sm">Big Data</h4>
      </div>
      
      <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl border border-white/40 text-center card-hover fade-in-up" style="transition-delay: 400ms;">
        <div class="w-12 h-12 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-xl flex items-center justify-center mx-auto mb-3">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
          </svg>
        </div>
        <h4 class="font-semibold text-dark-turquoise text-sm">IoT</h4>
      </div>
      
      <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl border border-white/40 text-center card-hover fade-in-up" style="transition-delay: 500ms;">
        <div class="w-12 h-12 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-xl flex items-center justify-center mx-auto mb-3">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
          </svg>
        </div>
        <h4 class="font-semibold text-dark-turquoise text-sm">Security</h4>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-r from-dark-turquoise to-turquoise-600">
  <div class="max-w-4xl mx-auto text-center px-8">
    <div class="fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-white mb-6">Ready to Join Our Portfolio?</h2>
      <p class="text-lg text-cyan-100 mb-8 max-w-2xl mx-auto">
        Discover how our platform can transform your business and unlock new opportunities for growth and innovation.
      </p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="{{ url('/contact') }}" class="bg-cyan-300 text-dark-turquoise px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
          Partner With Us
        </a>
        <a href="{{ url('/platform') }}" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
          Explore Platform
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
