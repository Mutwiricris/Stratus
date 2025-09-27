@extends('layouts.detail')

@section('title', 'Dev Team as a Service - Ascend Stratus')
@section('description', 'Flexible development team services. Scale your team with our expert developers, DevOps engineers, QA specialists, and project managers.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-orange-50 via-white to-red-50/30 py-16 sm:py-20 md:py-28 relative overflow-hidden">
  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center">
      <a href="{{ url('/services') }}" class="inline-flex items-center text-orange-600 hover:text-orange-700 font-medium mb-4 transition-colors duration-300">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Back to Services
      </a>
      <span class="inline-flex items-center gap-2 text-orange-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 sm:mb-6 bg-orange-50 px-3 sm:px-4 py-2 rounded-full">
        <div class="w-2 h-2 bg-orange-500 rounded-full animate-pulse"></div>
        Dev Team as a Service
      </span>
      <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 sm:mb-8 leading-[1.1]">
        Scale Your Development
        <span class="bg-gradient-to-r from-orange-600 via-red-600 to-pink-600 bg-clip-text text-transparent">Team On-Demand</span>
      </h1>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 mb-8 sm:mb-10 leading-relaxed max-w-4xl mx-auto">
        Team as a Service model offers flexibility and efficiency in development, allowing organizations to respond quickly to changing needs and hire specific expertise for projects.
      </p>
      <a href="{{ url('/contact') }}" class="group relative bg-gradient-to-r from-orange-600 via-red-600 to-pink-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-base sm:text-lg font-semibold hover:shadow-2xl hover:shadow-orange-500/25 transition-all duration-500 hover:scale-105 overflow-hidden">
        <span class="relative flex items-center justify-center gap-2">
          Build Your Team
          <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </span>
      </a>
    </div>
  </div>
</section>

<!-- Expertise Areas -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12 sm:mb-16">
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Our Expertise Areas</h2>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-orange-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">FS</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-orange-600 transition-colors duration-300">Full-Stack Development</h3>
        <p class="text-gray-600 text-sm">End-to-end development expertise</p>
      </div>
      
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-orange-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">DO</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-orange-600 transition-colors duration-300">DevOps Engineering</h3>
        <p class="text-gray-600 text-sm">CI/CD and infrastructure automation</p>
      </div>
      
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-orange-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">QA</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-orange-600 transition-colors duration-300">Quality Assurance</h3>
        <p class="text-gray-600 text-sm">Testing and quality management</p>
      </div>
      
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-orange-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">PM</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-orange-600 transition-colors duration-300">Project Management</h3>
        <p class="text-gray-600 text-sm">Agile project delivery</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-r from-orange-600 via-red-600 to-pink-600">
  <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6">Ready to Scale Your Team?</h2>
    <p class="text-lg text-orange-100 mb-8 max-w-2xl mx-auto">
      Get the right talent for your project with our flexible team-as-a-service model.
    </p>
    <a href="{{ url('/contact') }}" class="bg-white text-orange-600 px-8 py-4 rounded-2xl text-lg font-semibold hover:bg-orange-50 hover:shadow-2xl transition-all duration-300 hover:scale-105">
      Build Your Team
    </a>
  </div>
</section>

@endsection
