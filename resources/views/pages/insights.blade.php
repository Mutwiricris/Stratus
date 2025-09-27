@extends('layouts.detail')

@section('title', 'Insights - Ascend Stratus')
@section('description', 'Stay informed with the latest industry insights, thought leadership, and innovation trends from Ascend Stratus experts.')

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
          Industry Insights
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-8 leading-tight">
          <span class="text-gray-900">Industry Insights &</span>
          <br>
          <span class="bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 bg-clip-text text-transparent">
            Innovation
          </span>
        </h1>
        <p class="text-lg sm:text-xl text-gray-600 mb-10 max-w-2xl leading-relaxed">
          Explore cutting-edge perspectives on technology, industry transformation, and the future of business from our team of experts and thought leaders.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
          <a href="#latest" class="group inline-flex items-center bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl hover:shadow-teal-500/25 transition-all duration-500 hover:scale-105">
            <span class="relative flex items-center gap-2">
              Latest Articles
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </span>
          </a>
          <a href="#newsletter" class="group inline-flex items-center text-gray-700 hover:text-teal-600 font-semibold transition-colors duration-300">
            Subscribe to Newsletter
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
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=2070" alt="Insights" class="w-full h-80 object-cover rounded-2xl">
            
            <!-- Floating Insights Stats -->
            <div class="absolute -top-4 -left-4 bg-white/95 backdrop-blur-sm rounded-2xl shadow-xl p-4 floating" style="animation-delay: 1s;">
              <div class="text-center">
                <div class="text-2xl font-bold text-teal-600 mb-1">50+</div>
                <div class="text-xs text-gray-600 font-medium">Articles</div>
              </div>
            </div>
            
            <div class="absolute -bottom-4 -right-4 bg-white/95 backdrop-blur-sm rounded-2xl shadow-xl p-4 floating" style="animation-delay: 1.5s;">
              <div class="text-center">
                <div class="text-2xl font-bold text-cyan-600 mb-1">10K+</div>
                <div class="text-xs text-gray-600 font-medium">Readers</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Featured Article -->
<section class="py-24 md:py-32 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        Featured Content
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Featured Insight</h2>
      <div class="w-24 h-1 bg-gradient-to-r from-teal-600 to-cyan-600 mx-auto mb-6"></div>
      <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Our latest deep dive into industry transformation</p>
    </div>
    
    <div class="bg-gradient-to-br from-turquoise-50 to-cyan-50 rounded-3xl overflow-hidden shadow-2xl fade-in-up">
      <div class="grid lg:grid-cols-2 gap-0">
        <div class="relative h-80 lg:h-auto">
          <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2072" alt="The Future of AI in Enterprise" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-dark-turquoise/60 to-transparent lg:bg-gradient-to-r lg:from-transparent lg:to-turquoise-600/20"></div>
        </div>
        <div class="p-8 lg:p-12 flex flex-col justify-center">
          <div class="flex items-center gap-4 mb-4">
            <span class="bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-3 py-1 rounded-full text-sm font-semibold">Featured</span>
            <span class="text-gray-500 text-sm">March 15, 2024</span>
          </div>
          <h3 class=" text-3xl md:text-4xl font-bold text-dark-turquoise mb-4">The Future of AI in Enterprise: Beyond Automation</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">
            As artificial intelligence evolves beyond simple automation, enterprises are discovering new ways to leverage AI for strategic advantage. This comprehensive analysis explores the next frontier of AI implementation and its transformative potential.
          </p>
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
              <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=100" alt="Sarah Chen" class="w-10 h-10 rounded-full object-cover">
              <div>
                <div class="font-semibold text-dark-turquoise">Sarah Chen</div>
                <div class="text-sm text-gray-500">Chief Technology Officer</div>
              </div>
            </div>
            <a href="#" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors group">
              Read Article
              <svg class="w-5 h-5 ml-2 inline group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Latest Articles -->
<section id="latest" class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-turquoise-50/30 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Latest Articles</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Stay updated with our latest insights and industry analysis</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Article 1 -->
      <article class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up">
        <div class="relative h-48">
          <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=2070" alt="Quantum Computing Revolution" class="w-full h-full object-cover">
          <div class="absolute top-4 left-4">
            <span class="bg-turquoise-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Technology</span>
          </div>
        </div>
        <div class="p-6">
          <div class="text-sm text-gray-500 mb-2">March 10, 2024 • 8 min read</div>
          <h3 class=" text-xl font-bold text-dark-turquoise mb-3 leading-tight">Quantum Computing: The Next Industrial Revolution</h3>
          <p class="text-gray-600 mb-4 leading-relaxed">Exploring how quantum computing will reshape industries and create unprecedented opportunities for innovation and growth.</p>
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
              <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=100" alt="Dr. Michael Torres" class="w-8 h-8 rounded-full object-cover">
              <span class="text-sm text-gray-600">Dr. Michael Torres</span>
            </div>
            <a href="#" class="text-turquoise-600 hover:text-dark-turquoise font-medium transition-colors">Read More</a>
          </div>
        </div>
      </article>
      
      <!-- Article 2 -->
      <article class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up" style="transition-delay: 100ms;">
        <div class="relative h-48">
          <img src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?q=80&w=2070" alt="Sustainable Finance" class="w-full h-full object-cover">
          <div class="absolute top-4 left-4">
            <span class="bg-cyan-accent text-white px-3 py-1 rounded-full text-sm font-semibold">Finance</span>
          </div>
        </div>
        <div class="p-6">
          <div class="text-sm text-gray-500 mb-2">March 8, 2024 • 6 min read</div>
          <h3 class=" text-xl font-bold text-dark-turquoise mb-3 leading-tight">Sustainable Finance: Building Tomorrow's Economy</h3>
          <p class="text-gray-600 mb-4 leading-relaxed">How ESG principles and sustainable finance are driving the next wave of economic transformation and investment strategies.</p>
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
              <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?q=80&w=100" alt="Emma Rodriguez" class="w-8 h-8 rounded-full object-cover">
              <span class="text-sm text-gray-600">Emma Rodriguez</span>
            </div>
            <a href="#" class="text-turquoise-600 hover:text-dark-turquoise font-medium transition-colors">Read More</a>
          </div>
        </div>
      </article>
      
      <!-- Article 3 -->
      <article class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up" style="transition-delay: 200ms;">
        <div class="relative h-48">
          <img src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?q=80&w=2070" alt="AgriTech Innovation" class="w-full h-full object-cover">
          <div class="absolute top-4 left-4">
            <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">AgriTech</span>
          </div>
        </div>
        <div class="p-6">
          <div class="text-sm text-gray-500 mb-2">March 5, 2024 • 7 min read</div>
          <h3 class=" text-xl font-bold text-dark-turquoise mb-3 leading-tight">Precision Agriculture: Feeding the Future</h3>
          <p class="text-gray-600 mb-4 leading-relaxed">How IoT, AI, and satellite technology are revolutionizing agriculture to meet global food security challenges.</p>
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
              <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=100" alt="Dr. James Liu" class="w-8 h-8 rounded-full object-cover">
              <span class="text-sm text-gray-600">Dr. James Liu</span>
            </div>
            <a href="#" class="text-turquoise-600 hover:text-dark-turquoise font-medium transition-colors">Read More</a>
          </div>
        </div>
      </article>
      
      <!-- Article 4 -->
      <article class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up" style="transition-delay: 300ms;">
        <div class="relative h-48">
          <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070" alt="Supply Chain Innovation" class="w-full h-full object-cover">
          <div class="absolute top-4 left-4">
            <span class="bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Logistics</span>
          </div>
        </div>
        <div class="p-6">
          <div class="text-sm text-gray-500 mb-2">March 3, 2024 • 5 min read</div>
          <h3 class=" text-xl font-bold text-dark-turquoise mb-3 leading-tight">The Resilient Supply Chain: Lessons from Disruption</h3>
          <p class="text-gray-600 mb-4 leading-relaxed">Building adaptive supply chains that can withstand global disruptions while maintaining efficiency and sustainability.</p>
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
              <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=100" alt="Alex Thompson" class="w-8 h-8 rounded-full object-cover">
              <span class="text-sm text-gray-600">Alex Thompson</span>
            </div>
            <a href="#" class="text-turquoise-600 hover:text-dark-turquoise font-medium transition-colors">Read More</a>
          </div>
        </div>
      </article>
      
      <!-- Article 5 -->
      <article class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up" style="transition-delay: 400ms;">
        <div class="relative h-48">
          <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?q=80&w=2070" alt="Clean Energy" class="w-full h-full object-cover">
          <div class="absolute top-4 left-4">
            <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Energy</span>
          </div>
        </div>
        <div class="p-6">
          <div class="text-sm text-gray-500 mb-2">February 28, 2024 • 9 min read</div>
          <h3 class=" text-xl font-bold text-dark-turquoise mb-3 leading-tight">Smart Grids: Powering the Clean Energy Transition</h3>
          <p class="text-gray-600 mb-4 leading-relaxed">How intelligent energy infrastructure is enabling the shift to renewable energy sources and sustainable power systems.</p>
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
              <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=100" alt="Dr. Lisa Park" class="w-8 h-8 rounded-full object-cover">
              <span class="text-sm text-gray-600">Dr. Lisa Park</span>
            </div>
            <a href="#" class="text-turquoise-600 hover:text-dark-turquoise font-medium transition-colors">Read More</a>
          </div>
        </div>
      </article>
      
      <!-- Article 6 -->
      <article class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up" style="transition-delay: 500ms;">
        <div class="relative h-48">
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070" alt="Digital Transformation" class="w-full h-full object-cover">
          <div class="absolute top-4 left-4">
            <span class="bg-indigo-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Digital</span>
          </div>
        </div>
        <div class="p-6">
          <div class="text-sm text-gray-500 mb-2">February 25, 2024 • 6 min read</div>
          <h3 class=" text-xl font-bold text-dark-turquoise mb-3 leading-tight">Digital Transformation: Beyond Technology</h3>
          <p class="text-gray-600 mb-4 leading-relaxed">Understanding the cultural and organizational changes required for successful digital transformation initiatives.</p>
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
              <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=100" alt="Marcus Johnson" class="w-8 h-8 rounded-full object-cover">
              <span class="text-sm text-gray-600">Marcus Johnson</span>
            </div>
            <a href="#" class="text-turquoise-600 hover:text-dark-turquoise font-medium transition-colors">Read More</a>
          </div>
        </div>
      </article>
    </div>
    
    <!-- Load More Button -->
    <div class="text-center mt-12 fade-in-up">
      <button class="bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-8 py-3 rounded-lg font-semibold btn-animate shadow-lg hover:shadow-xl transition-all">
        Load More Articles
      </button>
    </div>
  </div>
</section>

<!-- Newsletter Section -->
<section id="newsletter" class="py-20 md:py-28 bg-gradient-to-r from-dark-turquoise to-turquoise-600">
  <div class="max-w-4xl mx-auto text-center px-8">
    <div class="fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-white mb-6">Stay Informed</h2>
      <p class="text-lg text-cyan-100 mb-8 max-w-2xl mx-auto">
        Subscribe to our newsletter and get the latest insights, industry analysis, and innovation trends delivered to your inbox.
      </p>
      <div class="max-w-md mx-auto">
        <form class="flex flex-col sm:flex-row gap-4">
          <input type="email" placeholder="Enter your email address" class="flex-1 px-4 py-3 rounded-lg border-0 focus:ring-2 focus:ring-cyan-300 focus:outline-none">
          <button type="submit" class="bg-cyan-300 text-dark-turquoise px-6 py-3 rounded-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
            Subscribe
          </button>
        </form>
        <p class="text-sm text-cyan-100 mt-4">No spam. Unsubscribe anytime.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-br from-cyan-50 to-turquoise-50 px-8">
  <div class="max-w-4xl mx-auto text-center">
    <div class="fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-6">Ready to Transform Your Industry?</h2>
      <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
        Discover how our platform and expertise can help your organization navigate the future of business and technology.
      </p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="{{ url('/contact') }}" class="bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:shadow-xl transition-all">
          Get Started
        </a>
        <a href="{{ url('/portfolio') }}" class="text-dark-turquoise hover:text-turquoise-600 font-medium border-b border-turquoise-600/40 hover:border-turquoise-600 transition-all duration-300 py-2">
          View Our Work
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
