@extends('layouts.detail')

@section('title', 'Enterprise Software Solutions - Ascend Stratus')
@section('description', 'Scalable enterprise software solutions including ERP, CRM, HRM systems, and business analytics platforms for large organizations.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-indigo-50 via-white to-purple-50/30 py-16 sm:py-20 md:py-28 relative overflow-hidden">
  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center">
      <a href="{{ url('/services') }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-700 font-medium mb-4 transition-colors duration-300">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Back to Services
      </a>
      <span class="inline-flex items-center gap-2 text-indigo-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 sm:mb-6 bg-indigo-50 px-3 sm:px-4 py-2 rounded-full">
        <div class="w-2 h-2 bg-indigo-500 rounded-full animate-pulse"></div>
        Enterprise Software
      </span>
      <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 sm:mb-8 leading-[1.1]">
        Enterprise-Grade
        <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">Software Solutions</span>
      </h1>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 mb-8 sm:mb-10 leading-relaxed max-w-4xl mx-auto">
        Scalable enterprise solutions including ERP, CRM, and business management systems tailored to your organization's needs.
      </p>
      <a href="{{ url('/contact') }}" class="group relative bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-base sm:text-lg font-semibold hover:shadow-2xl hover:shadow-indigo-500/25 transition-all duration-500 hover:scale-105 overflow-hidden">
        <span class="relative flex items-center justify-center gap-2">
          Get Enterprise Solution
          <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </span>
      </a>
    </div>
  </div>
</section>

<!-- Solutions Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12 sm:mb-16">
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Enterprise Solutions We Provide</h2>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-indigo-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">ERP</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-indigo-600 transition-colors duration-300">ERP Systems</h3>
        <p class="text-gray-600 text-sm">Enterprise Resource Planning</p>
      </div>
      
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-indigo-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">CRM</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-indigo-600 transition-colors duration-300">CRM Platforms</h3>
        <p class="text-gray-600 text-sm">Customer Relationship Management</p>
      </div>
      
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-indigo-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">HRM</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-indigo-600 transition-colors duration-300">HRM Systems</h3>
        <p class="text-gray-600 text-sm">Human Resource Management</p>
      </div>
      
      <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:border-indigo-200 transition-all duration-300 text-center">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <span class="text-white font-bold text-lg">BI</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-indigo-600 transition-colors duration-300">Business Analytics</h3>
        <p class="text-gray-600 text-sm">Data-driven insights and reporting</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
  <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6">Ready to Scale Your Enterprise?</h2>
    <p class="text-lg text-indigo-100 mb-8 max-w-2xl mx-auto">
      Transform your business operations with our enterprise-grade software solutions.
    </p>
    <a href="{{ url('/contact') }}" class="bg-white text-indigo-600 px-8 py-4 rounded-2xl text-lg font-semibold hover:bg-indigo-50 hover:shadow-2xl transition-all duration-300 hover:scale-105">
      Get Enterprise Solution
    </a>
  </div>
</section>

@endsection
