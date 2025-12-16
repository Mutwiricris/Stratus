@extends('layouts.detail')

@section('title', $portfolio->title . ' - Portfolio | Ascend Stratus')
@section('description', $portfolio->tagline)

@section('content')
<!-- Hero Section with Parallax -->
<section class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-slate-900 via-gray-900 to-cyan-900">
  <!-- Animated Background Gradient -->
  <div class="absolute inset-0 opacity-30">
    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 via-purple-500/20 to-pink-500/20 animate-gradient"></div>
  </div>

  <!-- Background Image with Parallax -->
  <div class="absolute inset-0" data-scroll-speed="0.5">
    <img src="{{ $portfolio->featured_image ?? 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426' }}"
         class="w-full h-full object-cover opacity-20 blur-sm"
         alt="{{ $portfolio->title }}">
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900/95 via-gray-900/90 to-cyan-900/95"></div>
  </div>

  <!-- Floating Shapes -->
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-float-delayed"></div>
  </div>

  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
    <!-- Breadcrumb -->
    <nav class="flex items-center gap-2 text-sm mb-8 fade-in-up" aria-label="Breadcrumb">
      <a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
        Home
      </a>
      <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
      <a href="{{ route('portfolio') }}" class="text-gray-400 hover:text-white transition-colors">Portfolio</a>
      <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
      <span class="text-cyan-400 font-medium">{{ $portfolio->title }}</span>
    </nav>

    <div class="max-w-5xl fade-in-up" style="transition-delay: 100ms;">
      <!-- Category & Badges -->
      <div class="flex flex-wrap items-center gap-3 mb-8">
        <span class="group relative inline-flex items-center gap-2 bg-gradient-to-r from-cyan-600/30 to-teal-600/30 backdrop-blur-sm text-cyan-300 px-5 py-2.5 rounded-full text-sm font-bold border border-cyan-500/50 hover:border-cyan-400 transition-all duration-300 shadow-lg shadow-cyan-500/20">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
          {{ ucfirst($portfolio->category) }}
        </span>

        @if($portfolio->is_featured)
        <span class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500/30 to-orange-500/30 backdrop-blur-sm text-amber-300 px-5 py-2.5 rounded-full text-sm font-bold border border-amber-500/50 hover:border-amber-400 transition-all duration-300 shadow-lg shadow-amber-500/20 animate-pulse-glow">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          Featured Project
        </span>
        @endif

        @if($portfolio->industry)
        <span class="inline-flex items-center gap-2 bg-purple-600/20 backdrop-blur-sm text-purple-300 px-5 py-2.5 rounded-full text-sm font-semibold border border-purple-500/30">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"></path></svg>
          {{ $portfolio->industry }}
        </span>
        @endif
      </div>

      <!-- Main Title with Animation -->
      <h1 class="text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-black mb-8 leading-tight">
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-white via-cyan-100 to-teal-200 animate-gradient-text">
          {{ $portfolio->title }}
        </span>
      </h1>

      <p class="text-xl sm:text-2xl lg:text-3xl text-cyan-100/90 mb-10 leading-relaxed font-light">
        {{ $portfolio->tagline }}
      </p>

      <!-- Project Meta Info -->
      <div class="flex flex-wrap gap-8 text-sm mb-12">
        @if($portfolio->industry)
        <div class="flex items-center gap-3 text-gray-300 bg-white/5 backdrop-blur-sm px-4 py-2 rounded-lg border border-white/10">
          <div class="w-10 h-10 rounded-full bg-cyan-500/20 flex items-center justify-center">
            <svg class="w-5 h-5 text-cyan-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"></path></svg>
          </div>
          <div>
            <div class="text-xs text-gray-500">Industry</div>
            <div class="font-semibold">{{ $portfolio->industry }}</div>
          </div>
        </div>
        @endif

        @if($portfolio->completed_at)
        <div class="flex items-center gap-3 text-gray-300 bg-white/5 backdrop-blur-sm px-4 py-2 rounded-lg border border-white/10">
          <div class="w-10 h-10 rounded-full bg-teal-500/20 flex items-center justify-center">
            <svg class="w-5 h-5 text-teal-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
          </div>
          <div>
            <div class="text-xs text-gray-500">Completed</div>
            <div class="font-semibold">{{ $portfolio->completed_at->format('F Y') }}</div>
          </div>
        </div>
        @endif

        @if($portfolio->client)
        <div class="flex items-center gap-3 text-gray-300 bg-white/5 backdrop-blur-sm px-4 py-2 rounded-lg border border-white/10">
          <div class="w-10 h-10 rounded-full bg-purple-500/20 flex items-center justify-center">
            <svg class="w-5 h-5 text-purple-400" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
          </div>
          <div>
            <div class="text-xs text-gray-500">Client</div>
            <div class="font-semibold">{{ $portfolio->client }}</div>
          </div>
        </div>
        @endif
      </div>

      <!-- CTA Buttons with Advanced Styling -->
      <div class="flex flex-wrap gap-4">
        @if($portfolio->url)
        <a href="{{ $portfolio->url }}" target="_blank" rel="noopener" class="group relative inline-flex items-center gap-3 bg-gradient-to-r from-cyan-600 to-teal-600 text-white px-8 py-4 rounded-2xl font-bold hover:shadow-2xl hover:shadow-cyan-500/50 transition-all duration-300 hover:scale-105 overflow-hidden">
          <div class="absolute inset-0 bg-gradient-to-r from-teal-600 to-cyan-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <svg class="w-6 h-6 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
          <span class="relative z-10">Visit Live Site</span>
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
        </a>
        @endif

        @if($portfolio->app_store_url)
        <a href="{{ $portfolio->app_store_url }}" target="_blank" rel="noopener" class="group inline-flex items-center gap-3 bg-white text-gray-900 px-8 py-4 rounded-2xl font-bold hover:shadow-2xl transition-all duration-300 hover:scale-105">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8 1.18-.24 2.31-.93 3.57-.84 1.51.12 2.65.72 3.4 1.8-3.12 1.87-2.38 5.98.48 7.13-.57 1.5-1.31 2.99-2.54 4.09l.01-.01zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25.29 2.58-2.34 4.5-3.74 4.25z"/></svg>
          <span>App Store</span>
        </a>
        @endif

        @if($portfolio->play_store_url)
        <a href="{{ $portfolio->play_store_url }}" target="_blank" rel="noopener" class="group inline-flex items-center gap-3 bg-white text-gray-900 px-8 py-4 rounded-2xl font-bold hover:shadow-2xl transition-all duration-300 hover:scale-105">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.6 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.5,12.92 20.16,13.19L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z"/></svg>
          <span>Google Play</span>
        </a>
        @endif
      </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
      <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
    </div>
  </div>
</section>

<!-- Animated Stats Bar -->
@if($portfolio->metrics)
<section class="bg-gradient-to-r from-cyan-600 via-teal-600 to-cyan-600 py-12 relative overflow-hidden">
  <div class="absolute inset-0 bg-black/20"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
      @foreach(array_slice($portfolio->metrics, 0, 4, true) as $key => $value)
      <div class="text-center fade-in-up group" style="transition-delay: {{ $loop->index * 100 }}ms;">
        <div class="text-4xl md:text-5xl font-black text-white mb-2 group-hover:scale-110 transition-transform" data-counter="{{ preg_replace('/[^0-9]/', '', $value) }}">
          {{ $value }}
        </div>
        <div class="text-cyan-100 font-semibold text-sm md:text-base uppercase tracking-wider">
          {{ str_replace('_', ' ', $key) }}
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <!-- Animated Background Pattern -->
  <div class="absolute inset-0 opacity-10">
    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
  </div>
</section>
@endif

<!-- Main Content -->
<section class="py-20 md:py-32 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-gray-50">
  <div class="max-w-7xl mx-auto">
    <div class="grid lg:grid-cols-3 gap-16">
      <!-- Main Content Column -->
      <div class="lg:col-span-2 space-y-20">
        <!-- Project Overview -->
        <div class="fade-in-up">
          <div class="flex items-center gap-4 mb-8">
            <div class="w-1 h-12 bg-gradient-to-b from-cyan-600 to-teal-600 rounded-full"></div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900">Project Overview</h2>
          </div>
          <div class="prose prose-lg max-w-none">
            <p class="text-xl text-gray-700 leading-relaxed">
              {!! nl2br(e($portfolio->description)) !!}
            </p>
          </div>
        </div>

        <!-- Challenge & Solution in Modern Cards -->
        <div class="grid md:grid-cols-2 gap-8 fade-in-up">
          @if($portfolio->challenge)
          <div class="group relative">
            <div class="absolute inset-0 bg-gradient-to-br from-rose-500 to-pink-500 rounded-3xl blur opacity-20 group-hover:opacity-30 transition-opacity"></div>
            <div class="relative bg-gradient-to-br from-rose-50 to-pink-50 border-2 border-rose-200 rounded-3xl p-8 hover:shadow-2xl transition-all duration-300">
              <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-rose-500 to-pink-500 rounded-2xl mb-6 shadow-lg shadow-rose-500/30">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
              </div>
              <h3 class="text-2xl font-black text-rose-900 mb-4">The Challenge</h3>
              <p class="text-rose-800 leading-relaxed">{!! nl2br(e($portfolio->challenge)) !!}</p>
            </div>
          </div>
          @endif

          @if($portfolio->solution)
          <div class="group relative">
            <div class="absolute inset-0 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-3xl blur opacity-20 group-hover:opacity-30 transition-opacity"></div>
            <div class="relative bg-gradient-to-br from-emerald-50 to-teal-50 border-2 border-emerald-200 rounded-3xl p-8 hover:shadow-2xl transition-all duration-300">
              <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-2xl mb-6 shadow-lg shadow-emerald-500/30">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              </div>
              <h3 class="text-2xl font-black text-emerald-900 mb-4">Our Solution</h3>
              <p class="text-emerald-800 leading-relaxed">{!! nl2br(e($portfolio->solution)) !!}</p>
            </div>
          </div>
          @endif
        </div>

        <!-- Key Features - Enhanced -->
        <div class="fade-in-up">
          <div class="flex items-center gap-4 mb-8">
            <div class="w-1 h-12 bg-gradient-to-b from-cyan-600 to-teal-600 rounded-full"></div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900">Key Features</h2>
          </div>
          <p class="text-lg text-gray-600 mb-10">Discover the powerful features that make this project stand out and deliver exceptional value.</p>

          <div class="grid md:grid-cols-2 gap-6">
            @foreach($portfolio->features as $index => $feature)
            <div class="group relative fade-in-up" style="transition-delay: {{ $index * 50 }}ms;">
              <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-teal-500/10 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
              <div class="relative bg-white rounded-2xl p-8 border-2 border-gray-100 hover:border-cyan-300 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                <!-- Icon with gradient background -->
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-2xl mb-5 shadow-lg shadow-cyan-500/30 group-hover:scale-110 transition-transform">
                  <span class="text-3xl">{{ $feature['icon'] ?? '✨' }}</span>
                </div>

                <!-- Feature Title -->
                <h4 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-cyan-600 transition-colors">
                  {{ $feature['title'] }}
                </h4>

                <!-- Feature Description -->
                <p class="text-gray-600 leading-relaxed">
                  {{ $feature['description'] }}
                </p>

                <!-- Hover Accent -->
                <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-cyan-500/5 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity"></div>
              </div>
            </div>
            @endforeach
          </div>
        </div>

        <!-- Technology Deep Dive -->
        <div class="fade-in-up">
          <div class="flex items-center gap-4 mb-8">
            <div class="w-1 h-12 bg-gradient-to-b from-purple-600 to-pink-600 rounded-full"></div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900">Technology Stack</h2>
          </div>
          <p class="text-lg text-gray-600 mb-10">Built with cutting-edge technologies to ensure performance, scalability, and maintainability.</p>

          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($portfolio->technologies as $tech => $description)
            <div class="group relative overflow-hidden rounded-2xl border-2 border-gray-100 hover:border-purple-300 transition-all duration-300 hover:shadow-xl">
              <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-pink-500/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
              <div class="relative p-6">
                <div class="flex items-center gap-3 mb-3">
                  <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center text-white font-bold shadow-lg shadow-purple-500/30 group-hover:scale-110 transition-transform">
                    {{ substr(is_numeric($tech) ? $description : $tech, 0, 1) }}
                  </div>
                  <h5 class="font-bold text-gray-900 group-hover:text-purple-600 transition-colors">
                    {{ is_numeric($tech) ? $description : $tech }}
                  </h5>
                </div>
                @if(!is_numeric($tech))
                <p class="text-sm text-gray-600">{{ $description }}</p>
                @endif
              </div>
            </div>
            @endforeach
          </div>
        </div>

        <!-- Client Testimonial - Enhanced -->
        @if($portfolio->testimonial)
        <div class="fade-in-up">
          <div class="relative overflow-hidden rounded-3xl">
            <!-- Gradient Background -->
            <div class="absolute inset-0 bg-gradient-to-br from-cyan-600 via-teal-600 to-cyan-700"></div>

            <!-- Pattern Overlay -->
            <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

            <div class="relative z-10 p-10 md:p-16">
              <!-- Quote Icon -->
              <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl mb-8">
                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
              </div>

              <!-- Testimonial Content -->
              <blockquote class="text-2xl md:text-3xl text-white leading-relaxed mb-10 font-light italic">
                "{{ $portfolio->testimonial['content'] ?? $portfolio->testimonial['quote'] }}"
              </blockquote>

              <!-- Author Info -->
              <div class="flex items-center gap-6">
                @if(isset($portfolio->testimonial['photo']))
                <img src="{{ $portfolio->testimonial['photo'] }}"
                     alt="{{ $portfolio->testimonial['name'] }}"
                     class="w-20 h-20 rounded-2xl border-4 border-white/30 shadow-2xl object-cover">
                @else
                <div class="w-20 h-20 rounded-2xl bg-white/20 backdrop-blur-sm border-4 border-white/30 flex items-center justify-center text-white font-black text-3xl shadow-2xl">
                  {{ substr($portfolio->testimonial['name'], 0, 1) }}
                </div>
                @endif

                <div class="flex-1">
                  <div class="font-bold text-white text-xl mb-1">{{ $portfolio->testimonial['name'] }}</div>
                  <div class="text-cyan-100 font-medium">{{ $portfolio->testimonial['position'] ?? $portfolio->testimonial['role'] }}</div>
                  @if(isset($portfolio->testimonial['company']))
                  <div class="text-cyan-200/80 text-sm mt-1">{{ $portfolio->testimonial['company'] }}</div>
                  @endif
                </div>

                <!-- 5 Star Rating -->
                <div class="hidden sm:flex gap-1">
                  @for($i = 0; $i < 5; $i++)
                  <svg class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                  @endfor
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif

        <!-- Project Impact -->
        @if($portfolio->metrics && count($portfolio->metrics) > 4)
        <div class="fade-in-up">
          <div class="flex items-center gap-4 mb-8">
            <div class="w-1 h-12 bg-gradient-to-b from-cyan-600 to-teal-600 rounded-full"></div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900">Project Impact</h2>
          </div>

          <div class="grid sm:grid-cols-2 gap-6">
            @foreach(array_slice($portfolio->metrics, 4, null, true) as $key => $value)
            <div class="group relative">
              <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-teal-500/10 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
              <div class="relative bg-gradient-to-br from-gray-50 to-white border-2 border-gray-100 hover:border-cyan-300 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl">
                <div class="text-5xl font-black bg-clip-text text-transparent bg-gradient-to-r from-cyan-600 to-teal-600 mb-3">
                  {{ $value }}
                </div>
                <div class="text-gray-700 font-semibold text-lg capitalize">
                  {{ str_replace('_', ' ', $key) }}
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        @endif
      </div>

      <!-- Enhanced Sidebar -->
      <div class="space-y-8">
        <!-- Project Details Card -->
        <div class="bg-gradient-to-br from-white to-gray-50 rounded-3xl p-8 border-2 border-gray-200 shadow-xl sticky top-24 fade-in-up">
          <h3 class="text-2xl font-black text-gray-900 mb-8 flex items-center gap-3">
            <svg class="w-6 h-6 text-cyan-600" fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
            Project Details
          </h3>

          <!-- Key Metrics -->
          @if($portfolio->metrics)
          <div class="space-y-4 mb-8">
            @foreach(array_slice($portfolio->metrics, 0, 4, true) as $key => $value)
            <div class="group relative overflow-hidden rounded-xl border border-gray-200 hover:border-cyan-300 transition-colors">
              <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/5 to-teal-500/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
              <div class="relative flex items-center justify-between p-4">
                <span class="text-sm font-semibold text-gray-600 capitalize">{{ str_replace('_', ' ', $key) }}</span>
                <span class="text-xl font-black bg-clip-text text-transparent bg-gradient-to-r from-cyan-600 to-teal-600">{{ $value }}</span>
              </div>
            </div>
            @endforeach
          </div>
          @endif

          <!-- Technologies -->
          <div class="mb-8">
            <h4 class="text-lg font-bold text-gray-900 mb-5 flex items-center gap-2">
              <svg class="w-5 h-5 text-cyan-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              Tech Stack
            </h4>
            <div class="flex flex-wrap gap-2">
              @foreach(array_slice($portfolio->technologies, 0, 10, true) as $tech => $description)
              <span class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-cyan-50 to-teal-50 text-cyan-800 rounded-xl text-sm font-bold border border-cyan-200 hover:border-cyan-300 hover:shadow-md transition-all">
                {{ is_numeric($tech) ? $description : $tech }}
              </span>
              @endforeach
              @if(count($portfolio->technologies) > 10)
              <span class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-600 rounded-xl text-sm font-bold">
                +{{ count($portfolio->technologies) - 10 }} more
              </span>
              @endif
            </div>
          </div>

          <!-- CTA -->
          <div class="pt-8 border-t-2 border-gray-200">
            <div class="bg-gradient-to-br from-cyan-50 to-teal-50 rounded-2xl p-6 mb-4 border border-cyan-200">
              <p class="text-sm font-semibold text-cyan-900 mb-3">Interested in a similar project?</p>
              <p class="text-xs text-cyan-700">Let's discuss how we can bring your vision to life with cutting-edge technology and innovative solutions.</p>
            </div>

            <a href="{{ route('contact') }}" class="group relative block w-full text-center bg-gradient-to-r from-cyan-600 to-teal-600 text-white px-6 py-4 rounded-2xl font-bold hover:shadow-2xl hover:shadow-cyan-500/50 transition-all duration-300 hover:scale-105 overflow-hidden">
              <div class="absolute inset-0 bg-gradient-to-r from-teal-600 to-cyan-600 opacity-0 group-hover:opacity-100 transition-opacity"></div>
              <div class="relative flex items-center justify-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                <span>Start Your Project</span>
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
              </div>
            </a>
          </div>
        </div>

        <!-- Share Card -->
        <div class="bg-white rounded-2xl p-6 border-2 border-gray-200 shadow-lg fade-in-up">
          <h4 class="text-lg font-bold text-gray-900 mb-4">Share This Project</h4>
          <div class="flex gap-3">
            <button onclick="shareOnTwitter()" class="flex-1 flex items-center justify-center gap-2 bg-sky-500 text-white px-4 py-3 rounded-xl font-semibold hover:bg-sky-600 transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
              <span class="hidden sm:inline">Tweet</span>
            </button>
            <button onclick="shareOnLinkedIn()" class="flex-1 flex items-center justify-center gap-2 bg-blue-600 text-white px-4 py-3 rounded-xl font-semibold hover:bg-blue-700 transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
              <span class="hidden sm:inline">Share</span>
            </button>
            <button onclick="copyLink()" class="flex-1 flex items-center justify-center gap-2 bg-gray-600 text-white px-4 py-3 rounded-xl font-semibold hover:bg-gray-700 transition-colors">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
              <span class="hidden sm:inline">Copy</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Related Projects - Enhanced -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-gray-50 to-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">More Success Stories</h2>
      <p class="text-xl text-gray-600 max-w-2xl mx-auto">Explore other innovative projects from our portfolio that showcase our expertise and commitment to excellence.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      @php
        $relatedProjects = \App\Models\Portfolio::where('is_published', true)
          ->where('id', '!=', $portfolio->id)
          ->where('category', $portfolio->category)
          ->inRandomOrder()
          ->limit(3)
          ->get();

        if($relatedProjects->count() < 3) {
          $relatedProjects = \App\Models\Portfolio::where('is_published', true)
            ->where('id', '!=', $portfolio->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();
        }
      @endphp

      @foreach($relatedProjects as $index => $project)
      <a href="{{ route('portfolio.show', $project->slug) }}" class="group block fade-in-up" style="transition-delay: {{ $index * 100 }}ms;">
        <div class="relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border-2 border-gray-100 hover:border-cyan-300">
          <!-- Image -->
          <div class="relative h-64 overflow-hidden">
            <img src="{{ $project->featured_image ?? 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426' }}"
                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                 alt="{{ $project->title }}">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/50 to-transparent opacity-80"></div>

            <!-- Category Badge -->
            <div class="absolute top-4 left-4">
              <span class="inline-flex items-center gap-2 bg-white/90 backdrop-blur-sm text-gray-900 px-4 py-2 rounded-full text-xs font-bold shadow-lg">
                {{ $project->category }}
              </span>
            </div>

            <!-- Title Overlay -->
            <div class="absolute bottom-4 left-4 right-4">
              <h3 class="text-white font-black text-2xl mb-2 group-hover:text-cyan-300 transition-colors">
                {{ $project->title }}
              </h3>
            </div>
          </div>

          <!-- Content -->
          <div class="p-6">
            <p class="text-gray-600 mb-6 line-clamp-2 leading-relaxed">{{ $project->tagline }}</p>

            <!-- Tech Tags -->
            <div class="flex flex-wrap gap-2 mb-6">
              @foreach(array_slice($project->technologies, 0, 3, true) as $tech => $description)
              <span class="px-3 py-1 bg-cyan-50 text-cyan-700 rounded-lg text-xs font-semibold">
                {{ is_numeric($tech) ? $description : $tech }}
              </span>
              @endforeach
            </div>

            <!-- View Button -->
            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
              <span class="text-cyan-600 font-bold text-sm group-hover:text-cyan-700">View Project</span>
              <svg class="w-5 h-5 text-cyan-600 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
            </div>
          </div>
        </div>
      </a>
      @endforeach
    </div>

    <div class="text-center mt-16 fade-in-up">
      <a href="{{ route('portfolio') }}" class="group inline-flex items-center gap-3 bg-gradient-to-r from-cyan-600 to-teal-600 text-white px-10 py-5 rounded-2xl font-bold shadow-xl hover:shadow-2xl hover:shadow-cyan-500/50 transition-all duration-300 hover:scale-105">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        <span>View All Projects</span>
        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
      </a>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="relative py-20 px-4 sm:px-6 lg:px-8 overflow-hidden">
  <!-- Gradient Background -->
  <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-cyan-900 to-teal-900"></div>

  <!-- Animated Pattern -->
  <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

  <div class="relative z-10 max-w-4xl mx-auto text-center">
    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 fade-in-up">
      Ready to Start Your Project?
    </h2>
    <p class="text-xl md:text-2xl text-cyan-100 mb-10 fade-in-up" style="transition-delay: 100ms;">
      Let's create something amazing together. Transform your vision into reality with our expert team.
    </p>
    <div class="flex flex-wrap gap-4 justify-center fade-in-up" style="transition-delay: 200ms;">
      <a href="{{ route('contact') }}" class="group inline-flex items-center gap-3 bg-white text-gray-900 px-10 py-5 rounded-2xl font-bold shadow-2xl hover:shadow-3xl hover:scale-105 transition-all duration-300">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
        <span>Get In Touch</span>
        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
      </a>
      <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-3 bg-transparent text-white px-10 py-5 rounded-2xl font-bold border-2 border-white/30 hover:border-white hover:bg-white/10 transition-all duration-300">
        <span>View More Projects</span>
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
      </a>
    </div>
  </div>
</section>

<!-- Custom Animations -->
<style>
@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-20px); }
}

@keyframes float-delayed {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(20px); }
}

@keyframes gradient {
  0%, 100% { transform: translateX(-25%); }
  50% { transform: translateX(25%); }
}

@keyframes gradient-text {
  0%, 100% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
}

@keyframes pulse-glow {
  0%, 100% { box-shadow: 0 0 20px rgba(251, 191, 36, 0.3); }
  50% { box-shadow: 0 0 30px rgba(251, 191, 36, 0.6); }
}

.animate-float {
  animation: float 6s ease-in-out infinite;
}

.animate-float-delayed {
  animation: float-delayed 8s ease-in-out infinite;
}

.animate-gradient {
  animation: gradient 15s ease infinite;
  background-size: 200% 200%;
}

.animate-gradient-text {
  animation: gradient-text 8s ease infinite;
  background-size: 200% auto;
}

.animate-pulse-glow {
  animation: pulse-glow 2s ease-in-out infinite;
}
</style>

<!-- Share Functions -->
<script>
function shareOnTwitter() {
  const url = window.location.href;
  const text = "{{ $portfolio->title }} - {{ $portfolio->tagline }}";
  window.open(`https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=${encodeURIComponent(text)}`, '_blank', 'width=600,height=400');
}

function shareOnLinkedIn() {
  const url = window.location.href;
  window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(url)}`, '_blank', 'width=600,height=400');
}

function copyLink() {
  const url = window.location.href;
  navigator.clipboard.writeText(url).then(() => {
    alert('Link copied to clipboard!');
  });
}
</script>
@endsection
