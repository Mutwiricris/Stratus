@extends('layouts.detail')

@section('title', 'Portfolio & Case Studies - Ascend Stratus')
@section('description', 'Explore our portfolio of successful projects across web applications, mobile apps, e-commerce, enterprise software, and digital transformation initiatives.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[90vh] flex items-center overflow-hidden bg-gradient-to-br from-slate-50 via-white to-cyan-50">
  <!-- Animated Background -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-cyan-500/10 to-teal-500/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
    <div class="absolute top-1/3 right-1/4 w-72 h-72 bg-gradient-to-br from-teal-500/5 to-cyan-500/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
  </div>

  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
      <!-- Left Content -->
      <div class="fade-in-up">
        <div class="inline-flex items-center gap-2 bg-cyan-100 text-cyan-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
          </svg>
          <span>Our Work</span>
        </div>

        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
          <span class="text-gray-900">Transforming</span>
          <br>
          <span class="bg-gradient-to-r from-cyan-600 via-teal-600 to-blue-600 bg-clip-text text-transparent">Ideas into Reality</span>
        </h1>

        <p class="text-xl text-gray-600 mb-8 leading-relaxed">
          Explore our portfolio of 50+ successful projects across web applications, mobile apps, e-commerce platforms, and enterprise solutions that have transformed businesses across Africa.
        </p>

        <!-- Key Stats -->
        <div class="grid grid-cols-3 gap-4 mb-10">
          <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 border border-gray-100 shadow-sm">
            <div class="text-2xl font-bold text-cyan-600 mb-1">50+</div>
            <div class="text-xs text-gray-600">Projects</div>
          </div>
          <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 border border-gray-100 shadow-sm">
            <div class="text-2xl font-bold text-teal-600 mb-1">12</div>
            <div class="text-xs text-gray-600">Countries</div>
          </div>
          <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 border border-gray-100 shadow-sm">
            <div class="text-2xl font-bold text-blue-600 mb-1">98%</div>
            <div class="text-xs text-gray-600">Success</div>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4">
          <a href="#projects" class="group inline-flex items-center justify-center bg-gradient-to-r from-cyan-600 to-teal-600 text-white px-8 py-4 rounded-xl font-semibold hover:shadow-2xl hover:shadow-cyan-500/30 transition-all duration-300 hover:scale-105">
            <span>View Projects</span>
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
            </svg>
          </a>
          <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center bg-white text-gray-700 px-8 py-4 rounded-xl font-semibold border-2 border-gray-200 hover:border-cyan-600 hover:text-cyan-600 transition-all duration-300">
            Start Your Project
          </a>
        </div>
      </div>

      <!-- Right Visual -->
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="relative">
          <div class="relative bg-gradient-to-br from-white to-gray-50 rounded-3xl p-6 shadow-2xl border border-gray-100">
            <div class="relative rounded-2xl overflow-hidden">
              <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070" alt="Portfolio Success" class="w-full h-96 object-cover">
              <div class="absolute inset-0 bg-gradient-to-t from-cyan-900/60 via-transparent to-transparent"></div>

              <!-- Floating Badge -->
              <div class="absolute bottom-4 left-4 right-4 bg-white/95 backdrop-blur-md rounded-xl p-4 shadow-lg">
                <div class="flex items-center justify-between">
                  <div>
                    <div class="text-sm text-gray-600 mb-1">Client Satisfaction</div>
                    <div class="flex items-center gap-2">
                      <div class="flex gap-1">
                        <span class="text-yellow-400 text-xl">★</span>
                        <span class="text-yellow-400 text-xl">★</span>
                        <span class="text-yellow-400 text-xl">★</span>
                        <span class="text-yellow-400 text-xl">★</span>
                        <span class="text-yellow-400 text-xl">★</span>
                      </div>
                      <span class="text-lg font-bold text-cyan-600">4.9/5</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Floating Metric Cards -->
          <div class="absolute -top-6 -left-6 bg-white rounded-2xl shadow-xl p-5 floating border border-gray-100" style="animation-delay: 1s;">
            <div class="flex items-center gap-3">
              <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
              </div>
              <div>
                <div class="text-xs text-gray-600">On-Time Delivery</div>
                <div class="text-lg font-bold text-gray-900">100%</div>
              </div>
            </div>
          </div>

          <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-5 floating border border-gray-100" style="animation-delay: 1.5s;">
            <div class="flex items-center gap-3">
              <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
              </div>
              <div>
                <div class="text-xs text-gray-600">Avg ROI</div>
                <div class="text-lg font-bold text-gray-900">250%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Filter Section -->
<section class="py-12 px-4 sm:px-6 lg:px-8 bg-white border-b border-gray-200 sticky top-0 z-40 backdrop-blur-md bg-white/95">
  <div class="max-w-7xl mx-auto">
    <div class="flex flex-wrap gap-3 justify-center">
      <button onclick="filterProjects('all')" class="filter-btn active px-6 py-2 rounded-full font-semibold transition-all duration-300 bg-cyan-600 text-white">
        All Projects
      </button>
      <button onclick="filterProjects('web')" class="filter-btn px-6 py-2 rounded-full font-semibold transition-all duration-300 bg-gray-100 text-gray-700 hover:bg-cyan-600 hover:text-white">
        Web Apps
      </button>
      <button onclick="filterProjects('mobile')" class="filter-btn px-6 py-2 rounded-full font-semibold transition-all duration-300 bg-gray-100 text-gray-700 hover:bg-cyan-600 hover:text-white">
        Mobile Apps
      </button>
      <button onclick="filterProjects('ecommerce')" class="filter-btn px-6 py-2 rounded-full font-semibold transition-all duration-300 bg-gray-100 text-gray-700 hover:bg-cyan-600 hover:text-white">
        E-Commerce
      </button>
      <button onclick="filterProjects('enterprise')" class="filter-btn px-6 py-2 rounded-full font-semibold transition-all duration-300 bg-gray-100 text-gray-700 hover:bg-cyan-600 hover:text-white">
        Enterprise
      </button>
      <button onclick="filterProjects('transformation')" class="filter-btn px-6 py-2 rounded-full font-semibold transition-all duration-300 bg-gray-100 text-gray-700 hover:bg-cyan-600 hover:text-white">
        Digital Transformation
      </button>
    </div>
  </div>
</section>

<!-- Projects Grid Section -->
<section id="projects" class="py-24 md:py-32 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <div class="inline-flex items-center gap-2 bg-teal-100 text-teal-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd"/>
        </svg>
        <span>Featured Work</span>
      </div>
      <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
        Our Latest
        <span class="bg-gradient-to-r from-cyan-600 to-teal-600 bg-clip-text text-transparent"> Success Stories</span>
      </h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
        Real projects delivering measurable results for businesses across Africa and beyond
      </p>
    </div>

    <!-- Projects Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projectsGrid">

      @foreach($portfolios as $portfolio)
      <!-- {{ $portfolio->title }} -->
      <div class="project-card group fade-in-up cursor-pointer" data-category="{{ $portfolio->category }}" onclick="window.location.href='{{ route('portfolio.show', $portfolio->slug) }}'">
        <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100">
          <div class="relative h-64 overflow-hidden">
            <img src="{{ $portfolio->featured_image ?? 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426' }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="{{ $portfolio->title }}">
            <div class="absolute inset-0 bg-gradient-to-t from-cyan-900/90 via-cyan-900/50 to-transparent"></div>
            <div class="absolute top-4 right-4">
              <span class="bg-cyan-600 text-white px-3 py-1 rounded-full text-xs font-semibold">{{ ucfirst($portfolio->category) }}</span>
            </div>
            @if($portfolio->is_featured)
            <div class="absolute top-4 left-4">
              <span class="bg-amber-500 text-white px-3 py-1 rounded-full text-xs font-semibold flex items-center gap-1">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                Featured
              </span>
            </div>
            @endif
            <div class="absolute bottom-4 left-4 right-4">
              <h3 class="text-white font-bold text-2xl mb-2">{{ $portfolio->title }}</h3>
              <p class="text-cyan-100 text-sm">{{ $portfolio->tagline }}</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4 leading-relaxed line-clamp-3">
              {{ $portfolio->description }}
            </p>
            <div class="flex flex-wrap gap-2 mb-4">
              @foreach(array_slice($portfolio->technologies, 0, 3, true) as $tech => $description)
              <span class="px-3 py-1 bg-cyan-50 text-cyan-700 rounded-full text-xs font-medium">{{ is_numeric($tech) ? $description : $tech }}</span>
              @endforeach
            </div>
            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
              <div class="flex items-center gap-2 text-sm text-gray-600">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                {{ $portfolio->completed_at?->format('M Y') ?? 'Ongoing' }}
              </div>
              <a href="{{ route('portfolio.show', $portfolio->slug) }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-cyan-600 to-teal-600 text-white px-4 py-2 rounded-lg font-semibold hover:shadow-lg hover:shadow-cyan-500/30 transition-all duration-300 group-hover:scale-105 text-sm" onclick="event.stopPropagation()">
                View Details
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      @endforeach
    </div>
  </div>
</section>

<!-- Portfolio Impact Section -->
<section class="py-24 md:py-32 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-900 via-slate-900 to-gray-900 text-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <div class="inline-flex items-center gap-2 bg-cyan-900/40 backdrop-blur-sm text-cyan-300 px-4 py-2 rounded-full text-sm font-semibold mb-6 border border-cyan-700/30">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
        </svg>
        <span>Impact Metrics</span>
      </div>
      <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6">
        Delivering Real
        <span class="bg-gradient-to-r from-cyan-400 to-teal-400 bg-clip-text text-transparent"> Business Value</span>
      </h2>
      <p class="text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">
        Measurable results across all our client projects
      </p>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="text-center fade-in-up">
        <div class="relative inline-block mb-4">
          <div class="text-6xl md:text-7xl font-extrabold bg-gradient-to-r from-cyan-400 to-teal-400 bg-clip-text text-transparent">
            $50M+
          </div>
          <div class="absolute -top-2 -right-2 w-4 h-4 bg-cyan-500 rounded-full animate-ping"></div>
        </div>
        <div class="text-lg font-bold text-white mb-2">Value Created</div>
        <div class="text-sm text-gray-400">For our clients</div>
      </div>

      <div class="text-center fade-in-up" style="transition-delay: 100ms;">
        <div class="relative inline-block mb-4">
          <div class="text-6xl md:text-7xl font-extrabold bg-gradient-to-r from-teal-400 to-green-400 bg-clip-text text-transparent">
            300K+
          </div>
          <div class="absolute -top-2 -right-2 w-4 h-4 bg-teal-500 rounded-full animate-ping" style="animation-delay: 0.2s;"></div>
        </div>
        <div class="text-lg font-bold text-white mb-2">End Users</div>
        <div class="text-sm text-gray-400">Served daily</div>
      </div>

      <div class="text-center fade-in-up" style="transition-delay: 200ms;">
        <div class="relative inline-block mb-4">
          <div class="text-6xl md:text-7xl font-extrabold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
            99.5%
          </div>
          <div class="absolute -top-2 -right-2 w-4 h-4 bg-blue-500 rounded-full animate-ping" style="animation-delay: 0.4s;"></div>
        </div>
        <div class="text-lg font-bold text-white mb-2">Uptime</div>
        <div class="text-sm text-gray-400">Average reliability</div>
      </div>

      <div class="text-center fade-in-up" style="transition-delay: 300ms;">
        <div class="relative inline-block mb-4">
          <div class="text-6xl md:text-7xl font-extrabold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
            250%
          </div>
          <div class="absolute -top-2 -right-2 w-4 h-4 bg-purple-500 rounded-full animate-ping" style="animation-delay: 0.6s;"></div>
        </div>
        <div class="text-lg font-bold text-white mb-2">Average ROI</div>
        <div class="text-sm text-gray-400">Client returns</div>
      </div>
    </div>
  </div>
</section>

<!-- Client Testimonials -->
<section class="py-24 md:py-32 px-4 sm:px-6 lg:px-8 bg-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <div class="inline-flex items-center gap-2 bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
          <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"/>
          <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"/>
        </svg>
        <span>Client Voices</span>
      </div>
      <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
        What Our
        <span class="bg-gradient-to-r from-cyan-600 to-teal-600 bg-clip-text text-transparent"> Clients Say</span>
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="bg-gradient-to-br from-cyan-600 to-teal-600 rounded-3xl p-10 shadow-2xl fade-in-up">
        <div class="flex items-center justify-center mb-6">
          <div class="flex gap-1">
            <svg class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            <svg class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            <svg class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            <svg class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            <svg class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          </div>
        </div>
        <blockquote class="text-xl text-white font-medium text-center mb-8 leading-relaxed">
          "Ascend Stratus delivered our e-commerce platform ahead of schedule with exceptional quality. Our sales increased by 200% in the first 3 months!"
        </blockquote>
        <div class="flex flex-col items-center">
          <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=80&h=80&fit=crop&crop=face" alt="Client" class="w-16 h-16 rounded-full border-4 border-white/30 mb-3">
          <div class="text-center">
            <div class="text-white font-bold text-lg">Samuel Mwangi</div>
            <div class="text-cyan-100 text-sm">CEO, ShopAfrica</div>
          </div>
        </div>
      </div>

      <div class="bg-gradient-to-br from-purple-600 to-pink-600 rounded-3xl p-10 shadow-2xl fade-in-up" style="transition-delay: 100ms;">
        <div class="flex items-center justify-center mb-6">
          <div class="flex gap-1">
            <svg class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            <svg class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            <svg class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            <svg class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            <svg class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          </div>
        </div>
        <blockquote class="text-xl text-white font-medium text-center mb-8 leading-relaxed">
          "The healthcare platform they built has revolutionized how we manage our clinics. Patient satisfaction improved by 40% and administrative costs dropped by 30%."
        </blockquote>
        <div class="flex flex-col items-center">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=80&h=80&fit=crop&crop=face" alt="Client" class="w-16 h-16 rounded-full border-4 border-white/30 mb-3">
          <div class="text-center">
            <div class="text-white font-bold text-lg">Dr. Amina Hassan</div>
            <div class="text-purple-100 text-sm">Director, MediCare Plus</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-24 md:py-32 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-slate-50 to-cyan-50">
  <div class="max-w-4xl mx-auto text-center fade-in-up">
    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
      Ready to Start
      <span class="bg-gradient-to-r from-cyan-600 to-teal-600 bg-clip-text text-transparent"> Your Project?</span>
    </h2>
    <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
      Let's transform your vision into reality with cutting-edge technology and expert execution
    </p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
      <a href="{{ url('/contact') }}" class="group inline-flex items-center justify-center bg-gradient-to-r from-cyan-600 to-teal-600 text-white px-10 py-5 rounded-xl text-lg font-semibold hover:shadow-2xl hover:shadow-cyan-500/30 transition-all duration-300 hover:scale-105">
        <span>Start Your Project</span>
        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
        </svg>
      </a>
      <a href="{{ url('/services') }}" class="inline-flex items-center justify-center bg-white text-gray-700 px-10 py-5 rounded-xl text-lg font-semibold border-2 border-gray-200 hover:border-cyan-600 hover:text-cyan-600 transition-all duration-300">
        View All Services
      </a>
    </div>
    <p class="text-sm text-gray-500 mt-8">
      Free consultation • No obligation • Response within 24 hours
    </p>
  </div>
</section>

<script>
// Filter functionality
function filterProjects(category) {
  const cards = document.querySelectorAll('.project-card');
  const buttons = document.querySelectorAll('.filter-btn');

  // Update active button
  buttons.forEach(btn => {
    btn.classList.remove('active', 'bg-cyan-600', 'text-white');
    btn.classList.add('bg-gray-100', 'text-gray-700');
  });
  event.target.classList.add('active', 'bg-cyan-600', 'text-white');
  event.target.classList.remove('bg-gray-100', 'text-gray-700');

  // Filter cards
  cards.forEach(card => {
    if (category === 'all' || card.dataset.category.includes(category)) {
      card.style.display = 'block';
      setTimeout(() => {
        card.style.opacity = '1';
        card.style.transform = 'translateY(0)';
      }, 10);
    } else {
      card.style.opacity = '0';
      card.style.transform = 'translateY(20px)';
      setTimeout(() => {
        card.style.display = 'none';
      }, 300);
    }
  });
}
</script>
@endsection
