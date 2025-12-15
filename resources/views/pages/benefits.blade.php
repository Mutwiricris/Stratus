@extends('layouts.detail')

@section('title', 'Platform Benefits - Ascend Stratus')
@section('description', 'Discover how Ascend Stratus empowers African businesses with cutting-edge technology, unified intelligence, and transformative digital solutions.')

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
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          <span>Award-Winning Platform</span>
        </div>

        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
          <span class="text-gray-900">Transform Your</span>
          <br>
          <span class="bg-gradient-to-r from-cyan-600 via-teal-600 to-blue-600 bg-clip-text text-transparent">Digital Future</span>
        </h1>

        <p class="text-xl text-gray-600 mb-8 leading-relaxed">
          Unlock unprecedented growth with Africa's most comprehensive digital platform. Seamlessly integrate AI, automation, and intelligence across your entire business ecosystem.
        </p>

        <!-- Key Stats -->
        <div class="grid grid-cols-3 gap-4 mb-10">
          <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 border border-gray-100 shadow-sm">
            <div class="text-2xl font-bold text-cyan-600 mb-1">500+</div>
            <div class="text-xs text-gray-600">Businesses</div>
          </div>
          <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 border border-gray-100 shadow-sm">
            <div class="text-2xl font-bold text-teal-600 mb-1">99.9%</div>
            <div class="text-xs text-gray-600">Uptime</div>
          </div>
          <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 border border-gray-100 shadow-sm">
            <div class="text-2xl font-bold text-blue-600 mb-1">24/7</div>
            <div class="text-xs text-gray-600">Support</div>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4">
          <a href="#benefits" class="group inline-flex items-center justify-center bg-gradient-to-r from-cyan-600 to-teal-600 text-white px-8 py-4 rounded-xl font-semibold hover:shadow-2xl hover:shadow-cyan-500/30 transition-all duration-300 hover:scale-105">
            <span>Explore Benefits</span>
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
            </svg>
          </a>
          <a href="#platform" class="inline-flex items-center justify-center bg-white text-gray-700 px-8 py-4 rounded-xl font-semibold border-2 border-gray-200 hover:border-cyan-600 hover:text-cyan-600 transition-all duration-300">
            View Platform
          </a>
        </div>
      </div>

      <!-- Right Visual -->
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="relative">
          <!-- Main Image Card -->
          <div class="relative bg-gradient-to-br from-white to-gray-50 rounded-3xl p-6 shadow-2xl border border-gray-100">
            <div class="relative rounded-2xl overflow-hidden">
              <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=2070" alt="Modern Technology Platform" class="w-full h-96 object-cover">
              <div class="absolute inset-0 bg-gradient-to-t from-cyan-900/60 via-transparent to-transparent"></div>

              <!-- Floating Badge -->
              <div class="absolute bottom-4 left-4 right-4 bg-white/95 backdrop-blur-md rounded-xl p-4 shadow-lg">
                <div class="flex items-center justify-between">
                  <div>
                    <div class="text-sm text-gray-600 mb-1">Platform Performance</div>
                    <div class="flex items-center gap-2">
                      <div class="text-2xl font-bold text-cyan-600">Excellent</div>
                      <div class="flex gap-1">
                        <span class="text-yellow-400">★</span>
                        <span class="text-yellow-400">★</span>
                        <span class="text-yellow-400">★</span>
                        <span class="text-yellow-400">★</span>
                        <span class="text-yellow-400">★</span>
                      </div>
                    </div>
                  </div>
                  <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-emerald-500 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Floating Metric Cards -->
          <div class="absolute -top-6 -left-6 bg-white rounded-2xl shadow-xl p-5 floating border border-gray-100" style="animation-delay: 1s;">
            <div class="flex items-center gap-3">
              <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-xl flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
              </div>
              <div>
                <div class="text-xs text-gray-600">Processing Speed</div>
                <div class="text-lg font-bold text-gray-900">10x Faster</div>
              </div>
            </div>
          </div>

          <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-5 floating border border-gray-100" style="animation-delay: 1.5s;">
            <div class="flex items-center gap-3">
              <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-500 rounded-xl flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
              </div>
              <div>
                <div class="text-xs text-gray-600">Security Level</div>
                <div class="text-lg font-bold text-gray-900">Enterprise</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Core Benefits Section -->
<section id="benefits" class="py-24 md:py-32 px-4 sm:px-6 lg:px-8 bg-white">
  <div class="max-w-7xl mx-auto">
    <!-- Section Header -->
    <div class="text-center mb-20 fade-in-up">
      <div class="inline-flex items-center gap-2 bg-teal-100 text-teal-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
        </svg>
        <span>Platform Advantages</span>
      </div>
      <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
        Why Leading Businesses
        <span class="bg-gradient-to-r from-cyan-600 to-teal-600 bg-clip-text text-transparent"> Choose Us</span>
      </h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
        Experience unparalleled advantages through our integrated ecosystem designed specifically for African markets
      </p>
    </div>

    <!-- Benefits Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
      <!-- Benefit 1 -->
      <div class="group fade-in-up">
        <div class="relative overflow-hidden rounded-2xl mb-6 h-64 shadow-lg">
          <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="AI-Powered Analytics">
          <div class="absolute inset-0 bg-gradient-to-t from-cyan-900/90 via-cyan-900/50 to-transparent"></div>
          <div class="absolute inset-0 flex flex-col justify-end p-6">
            <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
              </svg>
            </div>
            <h3 class="text-white font-bold text-2xl mb-2">AI-Powered Analytics</h3>
            <p class="text-cyan-100 text-sm">Real-time insights with machine learning</p>
          </div>
        </div>
        <div class="px-2">
          <p class="text-gray-600 leading-relaxed mb-4">
            Harness the power of artificial intelligence to transform your data into actionable insights. Our advanced ML models predict trends, optimize operations, and drive smarter decisions.
          </p>
          <ul class="space-y-2">
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-cyan-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Predictive analytics & forecasting
            </li>
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-cyan-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Automated data processing
            </li>
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-cyan-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Custom dashboards & reports
            </li>
          </ul>
        </div>
      </div>

      <!-- Benefit 2 -->
      <div class="group fade-in-up" style="transition-delay: 100ms;">
        <div class="relative overflow-hidden rounded-2xl mb-6 h-64 shadow-lg">
          <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=2034" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Seamless Integration">
          <div class="absolute inset-0 bg-gradient-to-t from-teal-900/90 via-teal-900/50 to-transparent"></div>
          <div class="absolute inset-0 flex flex-col justify-end p-6">
            <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
            </div>
            <h3 class="text-white font-bold text-2xl mb-2">Seamless Integration</h3>
            <p class="text-teal-100 text-sm">Connect everything, everywhere</p>
          </div>
        </div>
        <div class="px-2">
          <p class="text-gray-600 leading-relaxed mb-4">
            Integrate with any system effortlessly. Our platform connects with M-Pesa, banks, ERPs, CRMs, and custom APIs to create a unified digital ecosystem for your business.
          </p>
          <ul class="space-y-2">
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-teal-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              REST & GraphQL APIs
            </li>
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-teal-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Mobile money integration
            </li>
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-teal-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Pre-built connectors
            </li>
          </ul>
        </div>
      </div>

      <!-- Benefit 3 -->
      <div class="group fade-in-up" style="transition-delay: 200ms;">
        <div class="relative overflow-hidden rounded-2xl mb-6 h-64 shadow-lg">
          <img src="https://images.unsplash.com/photo-1563986768494-4dee2763ff3f?q=80&w=2068" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Scalable Infrastructure">
          <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/50 to-transparent"></div>
          <div class="absolute inset-0 flex flex-col justify-end p-6">
            <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"/>
              </svg>
            </div>
            <h3 class="text-white font-bold text-2xl mb-2">Cloud-Native Scale</h3>
            <p class="text-blue-100 text-sm">Grow without limits</p>
          </div>
        </div>
        <div class="px-2">
          <p class="text-gray-600 leading-relaxed mb-4">
            Built on AWS and Azure infrastructure, our platform automatically scales with your growth. Handle 10 users or 10 million—the platform adapts seamlessly to your needs.
          </p>
          <ul class="space-y-2">
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Auto-scaling architecture
            </li>
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              99.9% uptime SLA
            </li>
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Global CDN delivery
            </li>
          </ul>
        </div>
      </div>

      <!-- Benefit 4 -->
      <div class="group fade-in-up" style="transition-delay: 300ms;">
        <div class="relative overflow-hidden rounded-2xl mb-6 h-64 shadow-lg">
          <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?q=80&w=2070" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="African Market Expertise">
          <div class="absolute inset-0 bg-gradient-to-t from-purple-900/90 via-purple-900/50 to-transparent"></div>
          <div class="absolute inset-0 flex flex-col justify-end p-6">
            <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <h3 class="text-white font-bold text-2xl mb-2">Africa-First Design</h3>
            <p class="text-purple-100 text-sm">Built for African businesses</p>
          </div>
        </div>
        <div class="px-2">
          <p class="text-gray-600 leading-relaxed mb-4">
            Designed specifically for African markets with local payment systems, multi-currency support, offline-first architecture, and optimized for low-bandwidth environments.
          </p>
          <ul class="space-y-2">
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-purple-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              M-Pesa, Airtel Money ready
            </li>
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-purple-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Offline-capable features
            </li>
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-purple-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Multi-language support
            </li>
          </ul>
        </div>
      </div>

      <!-- Benefit 5 -->
      <div class="group fade-in-up" style="transition-delay: 400ms;">
        <div class="relative overflow-hidden rounded-2xl mb-6 h-64 shadow-lg">
          <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Enterprise Security">
          <div class="absolute inset-0 bg-gradient-to-t from-red-900/90 via-red-900/50 to-transparent"></div>
          <div class="absolute inset-0 flex flex-col justify-end p-6">
            <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
              </svg>
            </div>
            <h3 class="text-white font-bold text-2xl mb-2">Bank-Grade Security</h3>
            <p class="text-red-100 text-sm">Your data, protected</p>
          </div>
        </div>
        <div class="px-2">
          <p class="text-gray-600 leading-relaxed mb-4">
            Military-grade encryption, SOC 2 compliance, and ISO 27001 certified infrastructure ensure your business data remains secure and compliant with international standards.
          </p>
          <ul class="space-y-2">
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-red-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              End-to-end encryption
            </li>
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-red-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              SOC 2 & ISO 27001
            </li>
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-red-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              GDPR compliant
            </li>
          </ul>
        </div>
      </div>

      <!-- Benefit 6 -->
      <div class="group fade-in-up" style="transition-delay: 500ms;">
        <div class="relative overflow-hidden rounded-2xl mb-6 h-64 shadow-lg">
          <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Expert Support">
          <div class="absolute inset-0 bg-gradient-to-t from-green-900/90 via-green-900/50 to-transparent"></div>
          <div class="absolute inset-0 flex flex-col justify-end p-6">
            <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
              </svg>
            </div>
            <h3 class="text-white font-bold text-2xl mb-2">24/7 Expert Support</h3>
            <p class="text-green-100 text-sm">We're always here for you</p>
          </div>
        </div>
        <div class="px-2">
          <p class="text-gray-600 leading-relaxed mb-4">
            Round-the-clock support from experienced engineers and business consultants. Get help via live chat, phone, email, or schedule dedicated training sessions for your team.
          </p>
          <ul class="space-y-2">
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-green-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Live chat & phone support
            </li>
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-green-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Dedicated account manager
            </li>
            <li class="flex items-center text-sm text-gray-600">
              <svg class="w-5 h-5 text-green-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Free training & onboarding
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Platform Overview Section -->
<section id="platform" class="py-24 md:py-32 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-900 via-slate-900 to-gray-900 text-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <div class="inline-flex items-center gap-2 bg-cyan-900/40 backdrop-blur-sm text-cyan-300 px-4 py-2 rounded-full text-sm font-semibold mb-6 border border-cyan-700/30">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
        </svg>
        <span>Platform Technology</span>
      </div>
      <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6">
        Built on Modern
        <span class="bg-gradient-to-r from-cyan-400 to-teal-400 bg-clip-text text-transparent"> Tech Stack</span>
      </h2>
      <p class="text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">
        Enterprise-grade infrastructure powered by cutting-edge technologies and best practices
      </p>
    </div>

    <!-- Platform Features Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-20">
      <div class="group bg-gradient-to-br from-gray-800/50 to-slate-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-700/50 hover:border-cyan-500/50 transition-all duration-300 fade-in-up">
        <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
          </svg>
        </div>
        <h4 class="text-xl font-bold mb-3">Microservices</h4>
        <p class="text-gray-400 leading-relaxed">Modular architecture for flexibility and scalability</p>
      </div>

      <div class="group bg-gradient-to-br from-gray-800/50 to-slate-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-700/50 hover:border-teal-500/50 transition-all duration-300 fade-in-up" style="transition-delay: 100ms;">
        <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-green-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
          </svg>
        </div>
        <h4 class="text-xl font-bold mb-3">PostgreSQL</h4>
        <p class="text-gray-400 leading-relaxed">Enterprise-grade database with advanced features</p>
      </div>

      <div class="group bg-gradient-to-br from-gray-800/50 to-slate-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-700/50 hover:border-blue-500/50 transition-all duration-300 fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
          </svg>
        </div>
        <h4 class="text-xl font-bold mb-3">Cloud Native</h4>
        <p class="text-gray-400 leading-relaxed">AWS & Azure infrastructure for reliability</p>
      </div>

      <div class="group bg-gradient-to-br from-gray-800/50 to-slate-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-700/50 hover:border-purple-500/50 transition-all duration-300 fade-in-up" style="transition-delay: 300ms;">
        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
          </svg>
        </div>
        <h4 class="text-xl font-bold mb-3">Real-time</h4>
        <p class="text-gray-400 leading-relaxed">WebSocket & Redis for instant updates</p>
      </div>
    </div>

    <!-- Tech Stack Logos -->
    <div class="bg-gradient-to-br from-gray-800/30 to-slate-800/30 backdrop-blur-sm rounded-2xl p-12 border border-gray-700/30 fade-in-up">
      <div class="text-center mb-10">
        <h3 class="text-2xl font-bold mb-3">Powered By Industry Leaders</h3>
        <p class="text-gray-400">Technologies trusted by Fortune 500 companies</p>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center opacity-70">
        <div class="flex items-center justify-center">
          <span class="text-2xl font-bold text-gray-400">Laravel</span>
        </div>
        <div class="flex items-center justify-center">
          <span class="text-2xl font-bold text-gray-400">React</span>
        </div>
        <div class="flex items-center justify-center">
          <span class="text-2xl font-bold text-gray-400">PostgreSQL</span>
        </div>
        <div class="flex items-center justify-center">
          <span class="text-2xl font-bold text-gray-400">Redis</span>
        </div>
        <div class="flex items-center justify-center">
          <span class="text-2xl font-bold text-gray-400">AWS</span>
        </div>
        <div class="flex items-center justify-center">
          <span class="text-2xl font-bold text-gray-400">Docker</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Success Metrics Section -->
<section class="py-24 md:py-32 px-4 sm:px-6 lg:px-8 bg-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <div class="inline-flex items-center gap-2 bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
        </svg>
        <span>Proven Results</span>
      </div>
      <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
        Numbers That
        <span class="bg-gradient-to-r from-cyan-600 to-teal-600 bg-clip-text text-transparent"> Speak Volumes</span>
      </h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
        Real metrics from businesses using our platform
      </p>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mb-20">
      <div class="text-center fade-in-up">
        <div class="relative inline-block mb-4">
          <div class="text-6xl md:text-7xl font-extrabold bg-gradient-to-r from-cyan-600 to-teal-600 bg-clip-text text-transparent">
            500+
          </div>
          <div class="absolute -top-2 -right-2 w-4 h-4 bg-cyan-500 rounded-full animate-ping"></div>
        </div>
        <div class="text-lg font-bold text-gray-900 mb-2">Active Businesses</div>
        <div class="text-sm text-gray-600">Across 12 African countries</div>
      </div>

      <div class="text-center fade-in-up" style="transition-delay: 100ms;">
        <div class="relative inline-block mb-4">
          <div class="text-6xl md:text-7xl font-extrabold bg-gradient-to-r from-teal-600 to-green-600 bg-clip-text text-transparent">
            2M+
          </div>
          <div class="absolute -top-2 -right-2 w-4 h-4 bg-teal-500 rounded-full animate-ping" style="animation-delay: 0.2s;"></div>
        </div>
        <div class="text-lg font-bold text-gray-900 mb-2">Transactions</div>
        <div class="text-sm text-gray-600">Processed monthly</div>
      </div>

      <div class="text-center fade-in-up" style="transition-delay: 200ms;">
        <div class="relative inline-block mb-4">
          <div class="text-6xl md:text-7xl font-extrabold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
            45%
          </div>
          <div class="absolute -top-2 -right-2 w-4 h-4 bg-blue-500 rounded-full animate-ping" style="animation-delay: 0.4s;"></div>
        </div>
        <div class="text-lg font-bold text-gray-900 mb-2">Cost Reduction</div>
        <div class="text-sm text-gray-600">Average savings</div>
      </div>

      <div class="text-center fade-in-up" style="transition-delay: 300ms;">
        <div class="relative inline-block mb-4">
          <div class="text-6xl md:text-7xl font-extrabold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">
            98%
          </div>
          <div class="absolute -top-2 -right-2 w-4 h-4 bg-purple-500 rounded-full animate-ping" style="animation-delay: 0.6s;"></div>
        </div>
        <div class="text-lg font-bold text-gray-900 mb-2">Satisfaction</div>
        <div class="text-sm text-gray-600">Client rating</div>
      </div>
    </div>

    <!-- Testimonial -->
    <div class="bg-gradient-to-br from-cyan-600 to-teal-600 rounded-3xl p-10 md:p-16 shadow-2xl fade-in-up">
      <div class="max-w-4xl mx-auto">
        <div class="flex items-center justify-center mb-8">
          <div class="flex gap-1">
            <svg class="w-8 h-8 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            <svg class="w-8 h-8 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            <svg class="w-8 h-8 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            <svg class="w-8 h-8 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            <svg class="w-8 h-8 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          </div>
        </div>
        <blockquote class="text-2xl md:text-3xl text-white font-medium text-center mb-10 leading-relaxed">
          "Ascend Stratus has completely transformed our operations. The platform's intelligence and automation capabilities have given us a competitive edge we never thought possible in the African market."
        </blockquote>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=80&h=80&fit=crop&crop=face" alt="Client" class="w-20 h-20 rounded-full border-4 border-white/30">
          <div class="text-center sm:text-left">
            <div class="text-white font-bold text-xl mb-1">David Omondi</div>
            <div class="text-cyan-100 text-sm">CEO, KenyaTech Solutions</div>
            <div class="text-cyan-200 text-xs mt-1">Nairobi, Kenya</div>
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
      Ready to Transform
      <span class="bg-gradient-to-r from-cyan-600 to-teal-600 bg-clip-text text-transparent"> Your Business?</span>
    </h2>
    <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
      Join 500+ businesses already using our platform to drive growth and innovation across Africa
    </p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
      <a href="{{ url('/contact') }}" class="group inline-flex items-center justify-center bg-gradient-to-r from-cyan-600 to-teal-600 text-white px-10 py-5 rounded-xl text-lg font-semibold hover:shadow-2xl hover:shadow-cyan-500/30 transition-all duration-300 hover:scale-105">
        <span>Get Started Today</span>
        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
        </svg>
      </a>
      <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center bg-white text-gray-700 px-10 py-5 rounded-xl text-lg font-semibold border-2 border-gray-200 hover:border-cyan-600 hover:text-cyan-600 transition-all duration-300">
        Schedule Demo
      </a>
    </div>
    <p class="text-sm text-gray-500 mt-8">
      No credit card required • Free 30-day trial • Cancel anytime
    </p>
  </div>
</section>
@endsection
