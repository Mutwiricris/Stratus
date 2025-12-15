@extends('layouts.detail')

@section('title', 'Dev Team as a Service - Dedicated Software Development Teams | Ascend Stratus')
@section('description', 'Scale your development capacity with dedicated teams. Get experienced developers, designers, and project managers integrated with your workflow. Flexible engagement models.')
@section('keywords', 'dedicated development team Kenya, software outsourcing Africa, dev team as a service, remote developers, staff augmentation, IT outsourcing')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[90vh] flex items-center bg-gradient-to-br from-indigo-50 via-white to-purple-50/30 overflow-hidden">
  <!-- Animated Background -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-indigo-400/20 to-purple-400/20 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-br from-purple-400/20 to-pink-400/20 rounded-full blur-3xl"></div>
    <!-- Floating Team Icons -->
    <div class="absolute top-32 left-24 text-indigo-200 opacity-20 floating" style="animation-delay: 0s;">
      <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
    </div>
    <div class="absolute bottom-24 right-24 text-purple-200 opacity-20 floating" style="animation-delay: 2s;">
      <svg class="w-20 h-20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
    </div>
  </div>

  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
      <!-- Left Content -->
      <div class="fade-in-up">
        <a href="{{ url('/services') }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-700 font-medium mb-6 transition-colors duration-300 group">
          <svg class="w-4 h-4 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
          Back to Services
        </a>

        <span class="inline-flex items-center gap-2 text-indigo-600 font-semibold text-sm uppercase tracking-wide mb-6 bg-indigo-50 px-4 py-2 rounded-full">
          <div class="w-2 h-2 bg-indigo-500 rounded-full animate-pulse"></div>
          Dev Team as a Service
        </span>

        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-8 leading-tight">
          <span class="text-gray-900">Your Extended</span>
          <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 bg-clip-text text-transparent"> Development Team</span>
          <span class="block text-gray-900">On Demand</span>
        </h1>

        <p class="text-lg sm:text-xl text-gray-600 mb-8 leading-relaxed max-w-xl">
          Scale your development capacity instantly with dedicated, pre-vetted teams. No recruitment headaches, no overhead costs - just skilled developers integrated seamlessly into your workflow.
        </p>

        <!-- Key Stats -->
        <div class="grid grid-cols-3 gap-6 mb-10">
          <div class="text-center">
            <div class="text-3xl font-bold text-indigo-600">48h</div>
            <div class="text-sm text-gray-600">Team Assembly</div>
          </div>
          <div class="text-center">
            <div class="text-3xl font-bold text-purple-600">40%</div>
            <div class="text-sm text-gray-600">Cost Savings</div>
          </div>
          <div class="text-center">
            <div class="text-3xl font-bold text-pink-600">100%</div>
            <div class="text-sm text-gray-600">Dedicated Focus</div>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4">
          <a href="{{ url('/contact') }}" class="group inline-flex items-center justify-center bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl hover:shadow-indigo-500/25 transition-all duration-500 hover:scale-105">
            Build Your Team
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
          </a>
          <a href="#engagement-models" class="inline-flex items-center justify-center border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-2xl text-lg font-semibold hover:border-indigo-600 hover:text-indigo-600 transition-all duration-300">
            View Models
          </a>
        </div>
      </div>

      <!-- Right Image -->
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="relative">
          <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-6 shadow-2xl border border-gray-100">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070"
                 alt="Development team collaborating on software project"
                 class="w-full h-[400px] object-cover rounded-2xl">

            <!-- Floating Team Card -->
            <div class="absolute -top-6 -left-6 bg-white rounded-2xl shadow-xl p-4 floating border border-gray-100">
              <div class="flex items-center gap-3">
                <div class="flex -space-x-2">
                  <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100" class="w-8 h-8 rounded-full border-2 border-white object-cover" alt="Team member">
                  <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100" class="w-8 h-8 rounded-full border-2 border-white object-cover" alt="Team member">
                  <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100" class="w-8 h-8 rounded-full border-2 border-white object-cover" alt="Team member">
                </div>
                <div>
                  <div class="text-sm font-bold text-gray-900">Your Team</div>
                  <div class="text-xs text-gray-500">Ready in 48h</div>
                </div>
              </div>
            </div>

            <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-4 floating" style="animation-delay: 1s;">
              <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                  <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </div>
                <div>
                  <div class="text-xl font-bold text-gray-900">98%</div>
                  <div class="text-xs text-gray-500">Client Retention</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-20 md:py-28 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 fade-in-up">
      <span class="inline-block text-indigo-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-indigo-50 px-4 py-2 rounded-full">
        Why Dev Team as a Service
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
        Focus on Your Product, <span class="text-indigo-600">Not Recruitment</span>
      </h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        Building an in-house team is expensive and time-consuming. With DTaaS, you get immediate access to senior developers without the overhead.
      </p>
    </div>

    <div class="grid md:grid-cols-2 gap-12 items-center">
      <!-- Comparison Table -->
      <div class="fade-in-up">
        <div class="bg-gray-50 rounded-2xl p-8">
          <h3 class="text-xl font-bold text-gray-900 mb-6">Traditional Hiring vs DTaaS</h3>
          <div class="space-y-4">
            <div class="flex items-center justify-between p-4 bg-white rounded-xl">
              <span class="text-gray-600">Time to hire</span>
              <div class="flex gap-4">
                <span class="text-red-500 font-semibold">3-6 months</span>
                <span class="text-green-600 font-bold">48 hours</span>
              </div>
            </div>
            <div class="flex items-center justify-between p-4 bg-white rounded-xl">
              <span class="text-gray-600">Recruitment cost</span>
              <div class="flex gap-4">
                <span class="text-red-500 font-semibold">$10-30K</span>
                <span class="text-green-600 font-bold">$0</span>
              </div>
            </div>
            <div class="flex items-center justify-between p-4 bg-white rounded-xl">
              <span class="text-gray-600">Benefits & overhead</span>
              <div class="flex gap-4">
                <span class="text-red-500 font-semibold">+40%</span>
                <span class="text-green-600 font-bold">Included</span>
              </div>
            </div>
            <div class="flex items-center justify-between p-4 bg-white rounded-xl">
              <span class="text-gray-600">Scale up/down</span>
              <div class="flex gap-4">
                <span class="text-red-500 font-semibold">Difficult</span>
                <span class="text-green-600 font-bold">Instant</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Benefits -->
      <div class="space-y-6 fade-in-up" style="transition-delay: 200ms;">
        <div class="flex gap-4">
          <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
          <div>
            <h4 class="font-bold text-gray-900 mb-2">Instant Scalability</h4>
            <p class="text-gray-600">Add or remove team members based on project demands. No long-term commitments required.</p>
          </div>
        </div>

        <div class="flex gap-4">
          <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
            </svg>
          </div>
          <div>
            <h4 class="font-bold text-gray-900 mb-2">Pre-Vetted Talent</h4>
            <p class="text-gray-600">All developers undergo rigorous technical assessments and have proven track records.</p>
          </div>
        </div>

        <div class="flex gap-4">
          <div class="w-12 h-12 bg-pink-100 rounded-xl flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
          </div>
          <div>
            <h4 class="font-bold text-gray-900 mb-2">Seamless Integration</h4>
            <p class="text-gray-600">Teams integrate with your existing tools, processes, and communication channels.</p>
          </div>
        </div>

        <div class="flex gap-4">
          <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <div>
            <h4 class="font-bold text-gray-900 mb-2">Predictable Costs</h4>
            <p class="text-gray-600">Transparent monthly rates with no hidden fees. Budget with confidence.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Engagement Models Section -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-indigo-50/30" id="engagement-models">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 fade-in-up">
      <span class="inline-block text-indigo-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-indigo-50 px-4 py-2 rounded-full">
        Engagement Models
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
        Choose Your Engagement Model
      </h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        Flexible options designed to match your project needs and budget
      </p>
    </div>

    <div class="grid lg:grid-cols-3 gap-8">
      <!-- Staff Augmentation -->
      <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-indigo-200 transition-all duration-500 fade-in-up">
        <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-indigo-500/25">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-indigo-600 transition-colors">Staff Augmentation</h3>
        <p class="text-gray-600 mb-6">Add individual developers to your existing team. Perfect for filling skill gaps or handling increased workload.</p>

        <div class="space-y-3 mb-8">
          <div class="flex items-center text-sm text-gray-600">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            1-5 developers
          </div>
          <div class="flex items-center text-sm text-gray-600">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            You manage the team
          </div>
          <div class="flex items-center text-sm text-gray-600">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            Hourly or monthly rates
          </div>
          <div class="flex items-center text-sm text-gray-600">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            Flexible commitment
          </div>
        </div>

        <div class="border-t border-gray-100 pt-6">
          <div class="text-sm text-gray-500 mb-2">Starting from</div>
          <div class="text-3xl font-bold text-gray-900">$40<span class="text-lg font-normal text-gray-500">/hour</span></div>
        </div>
      </div>

      <!-- Dedicated Team -->
      <div class="group bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl p-8 shadow-xl text-white relative overflow-hidden fade-in-up" style="transition-delay: 100ms;">
        <div class="absolute top-0 right-0 bg-yellow-400 text-gray-900 text-xs font-bold px-4 py-1 rounded-bl-lg">MOST POPULAR</div>
        <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <h3 class="text-2xl font-bold mb-3">Dedicated Team</h3>
        <p class="text-indigo-100 mb-6">A complete team working exclusively on your project. Includes PM, developers, QA, and designer as needed.</p>

        <div class="space-y-3 mb-8">
          <div class="flex items-center text-sm">
            <svg class="w-5 h-5 text-yellow-400 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            Full team (3-10 members)
          </div>
          <div class="flex items-center text-sm">
            <svg class="w-5 h-5 text-yellow-400 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            Project manager included
          </div>
          <div class="flex items-center text-sm">
            <svg class="w-5 h-5 text-yellow-400 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            100% dedicated to your project
          </div>
          <div class="flex items-center text-sm">
            <svg class="w-5 h-5 text-yellow-400 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            6+ month commitment
          </div>
        </div>

        <div class="border-t border-white/20 pt-6">
          <div class="text-sm text-indigo-200 mb-2">Starting from</div>
          <div class="text-3xl font-bold">$8,000<span class="text-lg font-normal text-indigo-200">/month</span></div>
        </div>
      </div>

      <!-- Project-Based -->
      <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-indigo-200 transition-all duration-500 fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-purple-500/25">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-indigo-600 transition-colors">Project-Based</h3>
        <p class="text-gray-600 mb-6">Fixed-price engagement for well-defined projects. We handle everything from start to finish.</p>

        <div class="space-y-3 mb-8">
          <div class="flex items-center text-sm text-gray-600">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            Fixed scope & price
          </div>
          <div class="flex items-center text-sm text-gray-600">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            End-to-end delivery
          </div>
          <div class="flex items-center text-sm text-gray-600">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            Milestone payments
          </div>
          <div class="flex items-center text-sm text-gray-600">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            Risk-free guarantee
          </div>
        </div>

        <div class="border-t border-gray-100 pt-6">
          <div class="text-sm text-gray-500 mb-2">Projects starting from</div>
          <div class="text-3xl font-bold text-gray-900">$5,000</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Available Roles Section -->
<section class="py-20 md:py-28 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 fade-in-up">
      <span class="inline-block text-indigo-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-indigo-50 px-4 py-2 rounded-full">
        Available Expertise
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
        Roles We Can Fill
      </h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        Access a diverse pool of talent across the full software development lifecycle
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="bg-gray-50 rounded-xl p-6 hover:bg-indigo-50 transition-colors duration-300 fade-in-up">
        <div class="text-3xl mb-4">Backend</div>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>Laravel/PHP</li>
          <li>Node.js</li>
          <li>Python/Django</li>
          <li>Java/Spring</li>
        </ul>
      </div>

      <div class="bg-gray-50 rounded-xl p-6 hover:bg-indigo-50 transition-colors duration-300 fade-in-up" style="transition-delay: 100ms;">
        <div class="text-3xl mb-4">Frontend</div>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>React.js</li>
          <li>Vue.js</li>
          <li>Angular</li>
          <li>Next.js</li>
        </ul>
      </div>

      <div class="bg-gray-50 rounded-xl p-6 hover:bg-indigo-50 transition-colors duration-300 fade-in-up" style="transition-delay: 200ms;">
        <div class="text-3xl mb-4">Mobile</div>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>Flutter</li>
          <li>React Native</li>
          <li>iOS (Swift)</li>
          <li>Android (Kotlin)</li>
        </ul>
      </div>

      <div class="bg-gray-50 rounded-xl p-6 hover:bg-indigo-50 transition-colors duration-300 fade-in-up" style="transition-delay: 300ms;">
        <div class="text-3xl mb-4">DevOps</div>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>AWS/GCP/Azure</li>
          <li>Docker/Kubernetes</li>
          <li>CI/CD Pipelines</li>
          <li>Infrastructure as Code</li>
        </ul>
      </div>

      <div class="bg-gray-50 rounded-xl p-6 hover:bg-indigo-50 transition-colors duration-300 fade-in-up" style="transition-delay: 400ms;">
        <div class="text-3xl mb-4">QA</div>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>Manual Testing</li>
          <li>Automated Testing</li>
          <li>Performance Testing</li>
          <li>Security Testing</li>
        </ul>
      </div>

      <div class="bg-gray-50 rounded-xl p-6 hover:bg-indigo-50 transition-colors duration-300 fade-in-up" style="transition-delay: 500ms;">
        <div class="text-3xl mb-4">UI/UX</div>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>User Research</li>
          <li>Wireframing</li>
          <li>Visual Design</li>
          <li>Prototyping</li>
        </ul>
      </div>

      <div class="bg-gray-50 rounded-xl p-6 hover:bg-indigo-50 transition-colors duration-300 fade-in-up" style="transition-delay: 600ms;">
        <div class="text-3xl mb-4">Database</div>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>MySQL/PostgreSQL</li>
          <li>MongoDB</li>
          <li>Redis</li>
          <li>Database Design</li>
        </ul>
      </div>

      <div class="bg-gray-50 rounded-xl p-6 hover:bg-indigo-50 transition-colors duration-300 fade-in-up" style="transition-delay: 700ms;">
        <div class="text-3xl mb-4">PM</div>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>Agile/Scrum</li>
          <li>Technical PMs</li>
          <li>Product Owners</li>
          <li>Business Analysts</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- How It Works Section -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-900 to-indigo-900 text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 fade-in-up">
      <span class="inline-block text-indigo-400 font-semibold text-sm uppercase tracking-wide mb-4 bg-indigo-400/10 px-4 py-2 rounded-full">
        Simple Process
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
        Get Your Team in <span class="text-indigo-400">3 Easy Steps</span>
      </h2>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="relative fade-in-up">
        <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-indigo-400/50 transition-all duration-300">
          <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-indigo-500/25">
            <span class="text-2xl font-bold">1</span>
          </div>
          <h3 class="text-xl font-bold mb-3">Share Requirements</h3>
          <p class="text-gray-400">Tell us about your project, required skills, team size, and timeline. We'll propose the best team composition.</p>
        </div>
        <div class="hidden md:block absolute top-1/2 -right-4 w-8 h-0.5 bg-gradient-to-r from-indigo-500 to-transparent"></div>
      </div>

      <div class="relative fade-in-up" style="transition-delay: 100ms;">
        <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-indigo-400/50 transition-all duration-300">
          <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-purple-500/25">
            <span class="text-2xl font-bold">2</span>
          </div>
          <h3 class="text-xl font-bold mb-3">Meet Your Team</h3>
          <p class="text-gray-400">Within 48 hours, we present hand-picked candidates. Interview them, review portfolios, and choose your team.</p>
        </div>
        <div class="hidden md:block absolute top-1/2 -right-4 w-8 h-0.5 bg-gradient-to-r from-purple-500 to-transparent"></div>
      </div>

      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-indigo-400/50 transition-all duration-300">
          <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-red-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-pink-500/25">
            <span class="text-2xl font-bold">3</span>
          </div>
          <h3 class="text-xl font-bold mb-3">Start Building</h3>
          <p class="text-gray-400">Your team integrates with your workflow immediately. We handle onboarding, tools, and ongoing support.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-20 md:py-28 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 fade-in-up">
      <span class="inline-block text-indigo-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-indigo-50 px-4 py-2 rounded-full">
        FAQ
      </span>
      <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">
        Common Questions
      </h2>
    </div>

    <div class="space-y-4" x-data="{ open: 1 }">
      <div class="bg-gray-50 rounded-2xl overflow-hidden fade-in-up">
        <button @click="open = open === 1 ? null : 1" class="w-full px-6 py-5 text-left flex items-center justify-between">
          <span class="font-semibold text-gray-900">What time zone do your developers work in?</span>
          <svg class="w-5 h-5 text-indigo-600 transition-transform" :class="{ 'rotate-180': open === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div x-show="open === 1" x-collapse class="px-6 pb-5">
          <p class="text-gray-600">Our developers are based in East Africa (EAT, UTC+3) but can adjust working hours to overlap with your team. Many of our teams work flexible hours to ensure 4-6 hours of overlap with US or European time zones.</p>
        </div>
      </div>

      <div class="bg-gray-50 rounded-2xl overflow-hidden fade-in-up" style="transition-delay: 100ms;">
        <button @click="open = open === 2 ? null : 2" class="w-full px-6 py-5 text-left flex items-center justify-between">
          <span class="font-semibold text-gray-900">What if a developer isn't a good fit?</span>
          <svg class="w-5 h-5 text-indigo-600 transition-transform" :class="{ 'rotate-180': open === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div x-show="open === 2" x-collapse class="px-6 pb-5">
          <p class="text-gray-600">We offer a 2-week trial period with every engagement. If you're not satisfied with a team member, we'll replace them at no additional cost. Your success is our priority.</p>
        </div>
      </div>

      <div class="bg-gray-50 rounded-2xl overflow-hidden fade-in-up" style="transition-delay: 200ms;">
        <button @click="open = open === 3 ? null : 3" class="w-full px-6 py-5 text-left flex items-center justify-between">
          <span class="font-semibold text-gray-900">How do you ensure code quality?</span>
          <svg class="w-5 h-5 text-indigo-600 transition-transform" :class="{ 'rotate-180': open === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div x-show="open === 3" x-collapse class="px-6 pb-5">
          <p class="text-gray-600">We follow industry best practices including code reviews, automated testing, CI/CD pipelines, and coding standards. All code is documented and follows clean architecture principles.</p>
        </div>
      </div>

      <div class="bg-gray-50 rounded-2xl overflow-hidden fade-in-up" style="transition-delay: 300ms;">
        <button @click="open = open === 4 ? null : 4" class="w-full px-6 py-5 text-left flex items-center justify-between">
          <span class="font-semibold text-gray-900">Who owns the intellectual property?</span>
          <svg class="w-5 h-5 text-indigo-600 transition-transform" :class="{ 'rotate-180': open === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div x-show="open === 4" x-collapse class="px-6 pb-5">
          <p class="text-gray-600">You own 100% of the intellectual property. All code, designs, and documentation created by our team belongs to you. We sign NDAs and IP assignment agreements before starting any project.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 relative overflow-hidden">
  <div class="absolute inset-0 opacity-10">
    <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
      <defs>
        <pattern id="grid-dtaas" width="10" height="10" patternUnits="userSpaceOnUse">
          <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
        </pattern>
      </defs>
      <rect width="100" height="100" fill="url(#grid-dtaas)" />
    </svg>
  </div>

  <div class="relative z-10 max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
    <div class="fade-in-up">
      <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6">
        Ready to Scale Your Development?
      </h2>
      <p class="text-xl text-indigo-100 mb-10 max-w-2xl mx-auto">
        Get your dedicated team in 48 hours. No recruitment fees, no overhead - just skilled developers ready to build your product.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center bg-white text-indigo-600 px-8 py-4 rounded-2xl text-lg font-semibold hover:bg-indigo-50 hover:shadow-2xl transition-all duration-300 hover:scale-105">
          Schedule a Consultation
          <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </a>
        <a href="{{ url('/portfolio') }}" class="inline-flex items-center justify-center border-2 border-white text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:bg-white hover:text-indigo-600 transition-all duration-300">
          View Our Work
        </a>
      </div>

      <div class="mt-12 flex flex-wrap justify-center items-center gap-8 text-indigo-100">
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
          </svg>
          <span>2-Week Trial Period</span>
        </div>
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
          </svg>
          <span>No Long-Term Contracts</span>
        </div>
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
          </svg>
          <span>100% IP Ownership</span>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
