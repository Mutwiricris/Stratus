@extends('layouts.detail')

@section('title', 'About Us - Ascend Stratus | Leading African Technology Company')
@section('description', 'Learn about Ascend Stratus, a multi-sector technology company revolutionizing businesses through innovation. Discover our story, mission, values, and the expert team behind our success.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-slate-50 via-white to-cyan-50">
  <!-- Animated Background Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-cyan-500/10 to-teal-500/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-blue-500/10 to-cyan-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
    <div class="absolute top-1/3 left-1/3 w-96 h-96 bg-gradient-to-r from-teal-200/5 to-cyan-200/5 rounded-full blur-3xl"></div>
  </div>

  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24 flex items-center min-h-screen">
    <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16 items-center w-full">
      <!-- Left Column - Content -->
      <div class="order-2 lg:order-1 fade-in-up">
        <div class="mb-8">
          <span class="inline-flex items-center gap-2 text-teal-600 font-semibold text-sm uppercase tracking-wide mb-6 bg-teal-50 px-4 py-2 rounded-full border border-teal-100">
            <div class="w-2 h-2 bg-teal-500 rounded-full animate-pulse"></div>
            About Ascend Stratus
          </span>
          <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-gray-900 mb-8 leading-[1.1]">
            Engineering software
            <span class="block bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 bg-clip-text text-transparent">that empowers</span>
            <span class="block">businesses.</span>
          </h1>
        </div>

        <p class="text-lg sm:text-xl lg:text-2xl text-gray-600 mb-10 leading-relaxed">
          We are a technology company revolutionizing foundational businesses through innovative software. Our mission is to build intelligent platforms that drive efficiency, scalability, and growth.
        </p>

        <!-- Key Highlights -->
        <div class="grid grid-cols-2 gap-4 mb-10">
          <div class="bg-white/90 backdrop-blur-sm rounded-xl p-4 border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300">
            <div class="text-3xl font-extrabold bg-gradient-to-r from-teal-600 to-cyan-600 bg-clip-text text-transparent mb-1">12+</div>
            <div class="text-sm text-gray-600 font-medium">Years Experience</div>
          </div>
          <div class="bg-white/90 backdrop-blur-sm rounded-xl p-4 border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300">
            <div class="text-3xl font-extrabold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent mb-1">50+</div>
            <div class="text-sm text-gray-600 font-medium">Projects Delivered</div>
          </div>
          <div class="bg-white/90 backdrop-blur-sm rounded-xl p-4 border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300">
            <div class="text-3xl font-extrabold bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent mb-1">98%</div>
            <div class="text-sm text-gray-600 font-medium">Client Satisfaction</div>
          </div>
          <div class="bg-white/90 backdrop-blur-sm rounded-xl p-4 border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300">
            <div class="text-3xl font-extrabold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent mb-1">15+</div>
            <div class="text-sm text-gray-600 font-medium">Team Members</div>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 items-stretch sm:items-center">
          <a href="#story" class="group relative bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl hover:shadow-teal-500/30 transition-all duration-500 hover:scale-105 overflow-hidden">
            <span class="relative flex items-center justify-center gap-2">
              Our Story
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
              </svg>
            </span>
          </a>
          <a href="{{ url('/contact') }}" class="group border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-2xl text-lg font-semibold hover:border-teal-600 hover:text-teal-600 hover:bg-teal-50 transition-all duration-300 backdrop-blur-sm bg-white/50">
            <span class="flex items-center justify-center gap-2">
              <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
              </svg>
              Get In Touch
            </span>
          </a>
        </div>
      </div>

      <!-- Right Column - Image with Enhanced Floating Cards -->
      <div class="order-1 lg:order-2">
        <div class="relative group">
          <div class="relative overflow-hidden rounded-3xl shadow-2xl">
            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=1920&q=80"
                 alt="African software development team working on innovative technology solutions in modern office"
                 class="w-full h-[350px] sm:h-[450px] lg:h-[550px] object-cover group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-br from-teal-600/20 via-cyan-600/10 to-blue-600/20 group-hover:opacity-75 transition-opacity duration-500"></div>
          </div>

          <!-- Floating Elements -->
          <div class="absolute -top-6 -right-6 w-28 h-28 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-3xl shadow-2xl flex flex-col items-center justify-center floating border border-teal-200" style="animation-delay: 1s;">
            <svg class="w-10 h-10 text-white mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
            </svg>
            <span class="text-xs text-white font-bold">Code</span>
          </div>

          <div class="absolute -bottom-6 -left-6 w-36 h-24 bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl p-4 floating border border-gray-200" style="animation-delay: 2s;">
            <div class="text-3xl font-extrabold bg-gradient-to-r from-teal-600 to-cyan-600 bg-clip-text text-transparent">50+</div>
            <div class="text-xs text-gray-600 font-semibold">Projects Delivered</div>
          </div>

          <div class="absolute top-1/2 -left-8 w-24 h-24 bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl p-3 floating flex flex-col items-center justify-center border border-gray-200" style="animation-delay: 3s;">
            <div class="text-2xl font-extrabold text-blue-600">12+</div>
            <div class="text-[10px] text-gray-600 font-semibold text-center">Countries</div>
          </div>

          <!-- Background Decoration -->
          <div class="absolute -z-10 -top-8 -right-8 w-72 h-72 bg-gradient-to-br from-teal-300/20 to-cyan-300/20 rounded-full blur-3xl"></div>
          <div class="absolute -z-10 -bottom-8 -left-8 w-72 h-72 bg-gradient-to-tr from-blue-300/20 to-teal-300/20 rounded-full blur-3xl"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Company Story Section -->
<section id="story" class="py-24 md:py-32 px-4 sm:px-6 lg:px-8 bg-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-5 py-2 rounded-full border border-teal-100">
        Our Story
      </span>
      <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-6">
        Transforming Industries Through
        <span class="block bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 bg-clip-text text-transparent">Innovation</span>
      </h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">From humble beginnings to global impact, discover how we've revolutionized businesses across multiple sectors</p>
    </div>

    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
      <!-- Left Column - Mission, Vision, Approach -->
      <div class="space-y-6 fade-in-up">
        <div class="group bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 hover:-translate-y-1">
          <div class="flex items-center mb-4">
            <div class="w-14 h-14 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-teal-600 transition-colors">Our Mission</h3>
          </div>
          <p class="text-gray-600 leading-relaxed text-lg">To revolutionize foundational businesses through intelligent technology solutions that drive efficiency, scalability, and sustainable growth across diverse industries.</p>
        </div>

        <div class="group bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:shadow-2xl hover:border-blue-200 transition-all duration-500 hover:-translate-y-1">
          <div class="flex items-center mb-4">
            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors">Our Vision</h3>
          </div>
          <p class="text-gray-600 leading-relaxed text-lg">To be the leading technology partner for businesses worldwide, creating innovative platforms that transform industries and empower organizations to achieve unprecedented success.</p>
        </div>

        <div class="group bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:shadow-2xl hover:border-green-200 transition-all duration-500 hover:-translate-y-1">
          <div class="flex items-center mb-4">
            <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-green-600 transition-colors">Our Approach</h3>
          </div>
          <p class="text-gray-600 leading-relaxed text-lg">We believe in collaborative partnerships, combining deep industry expertise with cutting-edge technology to deliver solutions that anticipate future challenges.</p>
        </div>
      </div>

      <!-- Right Column - Image & Enhanced Stats -->
      <div class="space-y-8 fade-in-up" style="transition-delay: 200ms;">
        <div class="relative group">
          <div class="absolute -inset-1 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-3xl blur opacity-25 group-hover:opacity-50 transition duration-500"></div>
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&w=1920&q=80"
                 alt="African business executives and technology team collaborating in modern corporate environment"
                 class="w-full h-80 object-cover rounded-3xl shadow-2xl">
            <div class="absolute inset-0 bg-gradient-to-br from-teal-600/20 via-cyan-600/10 to-blue-600/20 rounded-3xl"></div>
          </div>
        </div>

        <!-- Enhanced Quick Stats -->
        <div class="grid grid-cols-2 gap-4">
          <div class="relative group">
            <div class="absolute inset-0 bg-gradient-to-br from-teal-500/20 to-cyan-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300"></div>
            <div class="relative bg-gradient-to-br from-teal-50 to-cyan-50 rounded-2xl p-6 text-center border border-teal-100 hover:border-teal-300 transition-all duration-300 hover:-translate-y-1">
              <div class="text-3xl font-extrabold bg-gradient-to-r from-teal-600 to-cyan-600 bg-clip-text text-transparent mb-2">12+</div>
              <div class="text-sm text-gray-600 font-medium">Years Experience</div>
            </div>
          </div>
          <div class="relative group">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300"></div>
            <div class="relative bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-6 text-center border border-blue-100 hover:border-blue-300 transition-all duration-300 hover:-translate-y-1">
              <div class="text-3xl font-extrabold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-2">12+</div>
              <div class="text-sm text-gray-600 font-medium">Countries Served</div>
            </div>
          </div>
          <div class="relative group">
            <div class="absolute inset-0 bg-gradient-to-br from-green-500/20 to-emerald-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300"></div>
            <div class="relative bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6 text-center border border-green-100 hover:border-green-300 transition-all duration-300 hover:-translate-y-1">
              <div class="text-3xl font-extrabold bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent mb-2">50+</div>
              <div class="text-sm text-gray-600 font-medium">Happy Clients</div>
            </div>
          </div>
          <div class="relative group">
            <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-red-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300"></div>
            <div class="relative bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-6 text-center border border-orange-100 hover:border-orange-300 transition-all duration-300 hover:-translate-y-1">
              <div class="text-3xl font-extrabold bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent mb-2">98%</div>
              <div class="text-sm text-gray-600 font-medium">Satisfaction Rate</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Enhanced Stats Section with Glassmorphism -->
<section class="py-24 md:py-32 relative bg-gradient-to-br from-gray-900 via-slate-900 to-gray-900 overflow-hidden">
  <!-- Animated Background -->
  <div class="absolute inset-0">
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-teal-500/20 to-cyan-500/20 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-blue-500/20 to-teal-500/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-cyan-100 font-semibold text-sm uppercase tracking-wide mb-6 bg-white/10 px-5 py-2 rounded-full border border-white/20">
        Our Impact
      </span>
      <h2 class="text-4xl lg:text-5xl font-extrabold mb-6 bg-gradient-to-r from-teal-400 to-cyan-400 bg-clip-text text-transparent">
        Delivering Results That Matter
      </h2>
      <p class="text-xl text-cyan-100 max-w-3xl mx-auto">Our track record speaks for itself - trusted by businesses worldwide</p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-5 gap-6 lg:gap-8">
      <div class="text-center fade-in-up group" style="transition-delay: 100ms;">
        <div class="relative">
          <div class="absolute inset-0 bg-gradient-to-r from-teal-500/20 to-cyan-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300"></div>
          <div class="relative bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 group-hover:border-teal-400/50 transition-all duration-300">
            <div class="text-5xl font-extrabold mb-2 bg-gradient-to-r from-teal-400 to-cyan-400 bg-clip-text text-transparent">
              <span class="counter" data-target="12">0</span>+
            </div>
            <div class="text-base text-cyan-100 font-medium">Countries</div>
          </div>
        </div>
      </div>
      <div class="text-center fade-in-up group" style="transition-delay: 200ms;">
        <div class="relative">
          <div class="absolute inset-0 bg-gradient-to-r from-green-500/20 to-emerald-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300"></div>
          <div class="relative bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 group-hover:border-green-400/50 transition-all duration-300">
            <div class="text-5xl font-extrabold mb-2 bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">
              <span class="counter" data-target="12">0</span>+
            </div>
            <div class="text-base text-cyan-100 font-medium">Years</div>
          </div>
        </div>
      </div>
      <div class="text-center fade-in-up group" style="transition-delay: 300ms;">
        <div class="relative">
          <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-indigo-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300"></div>
          <div class="relative bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 group-hover:border-blue-400/50 transition-all duration-300">
            <div class="text-5xl font-extrabold mb-2 bg-gradient-to-r from-blue-400 to-indigo-400 bg-clip-text text-transparent">
              <span class="counter" data-target="98">0</span>%
            </div>
            <div class="text-base text-cyan-100 font-medium">Satisfaction</div>
          </div>
        </div>
      </div>
      <div class="text-center fade-in-up group" style="transition-delay: 400ms;">
        <div class="relative">
          <div class="absolute inset-0 bg-gradient-to-r from-purple-500/20 to-pink-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300"></div>
          <div class="relative bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 group-hover:border-purple-400/50 transition-all duration-300">
            <div class="text-5xl font-extrabold mb-2 bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
              <span class="counter" data-target="50">0</span>+
            </div>
            <div class="text-base text-cyan-100 font-medium">Projects</div>
          </div>
        </div>
      </div>
      <div class="text-center fade-in-up group col-span-2 md:col-span-1" style="transition-delay: 500ms;">
        <div class="relative">
          <div class="absolute inset-0 bg-gradient-to-r from-orange-500/20 to-red-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300"></div>
          <div class="relative bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 group-hover:border-orange-400/50 transition-all duration-300">
            <div class="text-5xl font-extrabold mb-2 bg-gradient-to-r from-orange-400 to-red-400 bg-clip-text text-transparent">
              <span class="counter" data-target="15">0</span>+
            </div>
            <div class="text-base text-cyan-100 font-medium">Team Members</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-24 md:py-32 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 via-white to-cyan-50">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-5 py-2 rounded-full border border-teal-100">
        Why Choose Us
      </span>
      <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-6">
        Speed & Excellence
        <span class="block bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 bg-clip-text text-transparent">In Every Delivery</span>
      </h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Ready-made solutions for healthcare, fintech, logistics, and more. We move fast without compromising quality.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Fast Delivery -->
      <div class="group bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 hover:-translate-y-2 fade-in-up">
        <div class="relative inline-block mb-6">
          <div class="absolute inset-0 bg-gradient-to-br from-teal-400 to-cyan-400 rounded-2xl blur-lg opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
          <div class="relative w-16 h-16 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-teal-600 transition-colors duration-300">Fast Delivery</h3>
        <p class="text-gray-600 leading-relaxed">Rapid development cycles with agile methodologies to get your product to market faster than ever.</p>
      </div>

      <!-- Expert Team -->
      <div class="group bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:shadow-2xl hover:border-blue-200 transition-all duration-500 hover:-translate-y-2 fade-in-up" style="transition-delay: 100ms;">
        <div class="relative inline-block mb-6">
          <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-indigo-400 rounded-2xl blur-lg opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
          <div class="relative w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-300">Expert Team</h3>
        <p class="text-gray-600 leading-relaxed">12+ years of combined experience with certified professionals mastering the latest technologies.</p>
      </div>

      <!-- 24/7 Support -->
      <div class="group bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:shadow-2xl hover:border-green-200 transition-all duration-500 hover:-translate-y-2 fade-in-up" style="transition-delay: 200ms;">
        <div class="relative inline-block mb-6">
          <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-emerald-400 rounded-2xl blur-lg opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
          <div class="relative w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-green-600 transition-colors duration-300">24/7 Support</h3>
        <p class="text-gray-600 leading-relaxed">Round-the-clock support and maintenance to ensure your systems run smoothly at all times.</p>
      </div>

      <!-- Scalable Solutions -->
      <div class="group bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:shadow-2xl hover:border-purple-200 transition-all duration-500 hover:-translate-y-2 fade-in-up" style="transition-delay: 300ms;">
        <div class="relative inline-block mb-6">
          <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-pink-400 rounded-2xl blur-lg opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
          <div class="relative w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
            </svg>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-purple-600 transition-colors duration-300">Scalable Solutions</h3>
        <p class="text-gray-600 leading-relaxed">Built for growth - our solutions scale seamlessly as your business expands and evolves.</p>
      </div>

      <!-- Security First -->
      <div class="group bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:shadow-2xl hover:border-orange-200 transition-all duration-500 hover:-translate-y-2 fade-in-up" style="transition-delay: 400ms;">
        <div class="relative inline-block mb-6">
          <div class="absolute inset-0 bg-gradient-to-br from-orange-400 to-red-400 rounded-2xl blur-lg opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
          <div class="relative w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
            </svg>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-orange-600 transition-colors duration-300">Security First</h3>
        <p class="text-gray-600 leading-relaxed">Enterprise-grade security with ISO 27001 certification and industry best practices.</p>
      </div>

      <!-- Cost Effective -->
      <div class="group bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:shadow-2xl hover:border-cyan-200 transition-all duration-500 hover:-translate-y-2 fade-in-up" style="transition-delay: 500ms;">
        <div class="relative inline-block mb-6">
          <div class="absolute inset-0 bg-gradient-to-br from-cyan-400 to-blue-400 rounded-2xl blur-lg opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
          <div class="relative w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-cyan-600 transition-colors duration-300">Cost Effective</h3>
        <p class="text-gray-600 leading-relaxed">Maximum value for your investment with transparent pricing and no hidden costs.</p>
      </div>
    </div>
  </div>
</section>

<!-- Company Culture Section -->
<section class="py-24 md:py-32 px-4 sm:px-6 lg:px-8 bg-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-5 py-2 rounded-full border border-teal-100">
        Our Culture
      </span>
      <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-6">
        Building Tomorrow
        <span class="block bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 bg-clip-text text-transparent">Together</span>
      </h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Our culture is built on innovation, collaboration, and continuous learning. We foster creativity where everyone makes an impact.</p>
    </div>

    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-16">
      <!-- Left Column - Culture Values -->
      <div class="space-y-8 fade-in-up">
        <div class="flex items-start space-x-4 group">
          <div class="w-14 h-14 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300 shadow-lg">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
          </div>
          <div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">Innovation First</h3>
            <p class="text-gray-600 leading-relaxed text-lg">We encourage bold thinking and creative problem-solving. Every team member is empowered to propose new ideas and drive innovation.</p>
          </div>
        </div>

        <div class="flex items-start space-x-4 group">
          <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300 shadow-lg">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
            </svg>
          </div>
          <div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">Collaborative Spirit</h3>
            <p class="text-gray-600 leading-relaxed text-lg">We believe in the power of teamwork. Cross-functional collaboration and knowledge sharing are at the heart of everything we do.</p>
          </div>
        </div>

        <div class="flex items-start space-x-4 group">
          <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300 shadow-lg">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
            </svg>
          </div>
          <div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors">Continuous Learning</h3>
            <p class="text-gray-600 leading-relaxed text-lg">We invest in growth through training, conferences, and skill development programs. Learning never stops at Ascend Stratus.</p>
          </div>
        </div>
      </div>

      <!-- Right Column - Image -->
      <div class="relative fade-in-up" style="transition-delay: 200ms;">
        <div class="relative group">
          <div class="absolute -inset-1 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-3xl blur opacity-25 group-hover:opacity-50 transition duration-500"></div>
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?auto=format&fit=crop&w=1920&q=80"
                 alt="African technology professionals collaborating on innovative solutions in modern workspace"
                 class="w-full h-80 object-cover rounded-3xl shadow-2xl">
            <div class="absolute inset-0 bg-gradient-to-br from-teal-600/20 via-cyan-600/10 to-blue-600/20 rounded-3xl"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Enhanced Culture Stats -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="relative group">
        <div class="absolute inset-0 bg-gradient-to-br from-teal-500/20 to-cyan-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300"></div>
        <div class="relative bg-gradient-to-br from-teal-50 to-cyan-50 rounded-2xl p-8 text-center border border-teal-100 hover:border-teal-300 transition-all duration-300 hover:-translate-y-1">
          <div class="text-4xl font-extrabold bg-gradient-to-r from-teal-600 to-cyan-600 bg-clip-text text-transparent mb-2">98%</div>
          <div class="text-sm text-gray-600 font-medium">Employee Satisfaction</div>
        </div>
      </div>
      <div class="relative group">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300"></div>
        <div class="relative bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 text-center border border-blue-100 hover:border-blue-300 transition-all duration-300 hover:-translate-y-1">
          <div class="text-4xl font-extrabold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-2">40+</div>
          <div class="text-sm text-gray-600 font-medium">Training Hours/Year</div>
        </div>
      </div>
      <div class="relative group">
        <div class="absolute inset-0 bg-gradient-to-br from-green-500/20 to-emerald-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300"></div>
        <div class="relative bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 text-center border border-green-100 hover:border-green-300 transition-all duration-300 hover:-translate-y-1">
          <div class="text-4xl font-extrabold bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent mb-2">12+</div>
          <div class="text-sm text-gray-600 font-medium">Countries Represented</div>
        </div>
      </div>
      <div class="relative group">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-red-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300"></div>
        <div class="relative bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-8 text-center border border-orange-100 hover:border-orange-300 transition-all duration-300 hover:-translate-y-1">
          <div class="text-4xl font-extrabold bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent mb-2">3%</div>
          <div class="text-sm text-gray-600 font-medium">Annual Turnover</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-24 md:py-32 bg-gradient-to-br from-gray-900 via-slate-900 to-gray-900 text-white relative overflow-hidden">
  <!-- Animated Background -->
  <div class="absolute inset-0">
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-teal-500/20 to-cyan-500/20 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-blue-500/20 to-teal-500/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
  </div>

  <div class="relative max-w-4xl mx-auto text-center px-8 fade-in-up">
    <h2 class="text-4xl md:text-6xl font-extrabold mb-6 bg-gradient-to-r from-teal-400 via-cyan-400 to-blue-400 bg-clip-text text-transparent">
      Ready to Build Something Amazing?
    </h2>
    <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed">
      Join the businesses that trust us to transform their operations with cutting-edge technology.
    </p>
    <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
      <a href="{{ route('contact') }}" class="group bg-gradient-to-r from-teal-500 via-cyan-500 to-blue-500 text-white px-12 py-5 rounded-2xl text-lg font-bold hover:shadow-2xl hover:shadow-teal-500/50 transition-all duration-300 hover:scale-105 w-full sm:w-auto">
        <span class="flex items-center justify-center gap-2">
          Start Your Project
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </span>
      </a>
      <a href="{{ url('/services') }}" class="group border-2 border-white/50 text-white px-12 py-5 rounded-2xl text-lg font-bold hover:bg-white hover:text-gray-900 transition-all duration-300 backdrop-blur-sm w-full sm:w-auto hover:border-white">
        Our Services
      </a>
    </div>
  </div>
</section>

<!-- Counter Animation Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const counters = document.querySelectorAll('.counter');
  const speed = 200;

  const animateCounter = (counter) => {
    const target = +counter.getAttribute('data-target');
    const count = +counter.innerText;
    const inc = target / speed;

    if (count < target) {
      counter.innerText = Math.ceil(count + inc);
      setTimeout(() => animateCounter(counter), 1);
    } else {
      counter.innerText = target;
    }
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(counter => observer.observe(counter));
});
</script>

@endsection
