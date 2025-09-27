@extends('layouts.app')

@section('content')
<!-- Platform Hero Section -->
<section class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-dark-turquoise via-teal-600 to-cyan-600 overflow-hidden">
  <!-- Background Pattern -->
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-0 left-0 w-full h-full">
      <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
        <defs>
          <pattern id="grid-platform" width="10" height="10" patternUnits="userSpaceOnUse">
            <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
          </pattern>
        </defs>
        <rect width="100" height="100" fill="url(#grid-platform)" />
      </svg>
    </div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <div class="fade-in-up">
      <span class="inline-block text-cyan-200 font-semibold text-sm uppercase tracking-wide mb-4 bg-white/10 px-4 py-2 rounded-full">
        Our Platform
      </span>
      <h1 class="text-4xl sm:text-5xl lg:text-7xl font-bold mb-8 leading-tight">
        <span class="text-white">Modern technology</span>
        <br>
        <span class="bg-gradient-to-r from-cyan-300 to-white bg-clip-text text-transparent">for smart</span>
        <br>
        <span class="text-white">solutions.</span>
      </h1>
      <p class="text-lg sm:text-xl lg:text-2xl text-cyan-100 max-w-4xl mx-auto mb-12 leading-relaxed">
        We use the latest technologies to build software that grows with your business.
      </p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="#tech-stack" class="bg-cyan-300 text-dark-turquoise px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
          Explore Technologies
        </a>
        <a href="{{ url('/contact') }}" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
          Get Started Today
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Technology Stack Section -->
<section id="tech-stack" class="py-24 md:py-32 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        Technology Stack
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Powered by Modern Technologies</h2>
      <div class="w-24 h-1 bg-gradient-to-r from-teal-600 to-cyan-600 mx-auto mb-6"></div>
      <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">The technologies we use to build software that makes a difference</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Frontend Technologies -->
      <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 fade-in-up">
        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Frontend</h3>
        <div class="space-y-3">
          <div class="flex items-center justify-between">
            <span class="text-gray-600">React</span>
            <div class="w-16 bg-gray-200 rounded-full h-2">
              <div class="bg-blue-500 h-2 rounded-full" style="width: 95%"></div>
            </div>
          </div>
          <div class="flex items-center justify-between">
            <span class="text-gray-600">Vue.js</span>
            <div class="w-16 bg-gray-200 rounded-full h-2">
              <div class="bg-green-500 h-2 rounded-full" style="width: 90%"></div>
            </div>
          </div>
          <div class="flex items-center justify-between">
            <span class="text-gray-600">Tailwind CSS</span>
            <div class="w-16 bg-gray-200 rounded-full h-2">
              <div class="bg-cyan-500 h-2 rounded-full" style="width: 98%"></div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Backend Technologies -->
      <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 fade-in-up" style="transition-delay: 100ms;">
        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-red-500 to-pink-500 rounded-2xl flex items-center justify-center">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Backend</h3>
        <div class="space-y-3">
          <div class="flex items-center justify-between">
            <span class="text-gray-600">Laravel</span>
            <div class="w-16 bg-gray-200 rounded-full h-2">
              <div class="bg-red-500 h-2 rounded-full" style="width: 96%"></div>
            </div>
          </div>
          <div class="flex items-center justify-between">
            <span class="text-gray-600">Node.js</span>
            <div class="w-16 bg-gray-200 rounded-full h-2">
              <div class="bg-green-600 h-2 rounded-full" style="width: 88%"></div>
            </div>
          </div>
          <div class="flex items-center justify-between">
            <span class="text-gray-600">Python</span>
            <div class="w-16 bg-gray-200 rounded-full h-2">
              <div class="bg-yellow-500 h-2 rounded-full" style="width: 85%"></div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Database Technologies -->
      <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Database</h3>
        <div class="space-y-3">
          <div class="flex items-center justify-between">
            <span class="text-gray-600">MySQL</span>
            <div class="w-16 bg-gray-200 rounded-full h-2">
              <div class="bg-blue-600 h-2 rounded-full" style="width: 94%"></div>
            </div>
          </div>
          <div class="flex items-center justify-between">
            <span class="text-gray-600">PostgreSQL</span>
            <div class="w-16 bg-gray-200 rounded-full h-2">
              <div class="bg-indigo-600 h-2 rounded-full" style="width: 87%"></div>
            </div>
          </div>
          <div class="flex items-center justify-between">
            <span class="text-gray-600">MongoDB</span>
            <div class="w-16 bg-gray-200 rounded-full h-2">
              <div class="bg-green-600 h-2 rounded-full" style="width: 82%"></div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Cloud & DevOps -->
      <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 fade-in-up" style="transition-delay: 300ms;">
        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Cloud & DevOps</h3>
        <div class="space-y-3">
          <div class="flex items-center justify-between">
            <span class="text-gray-600">AWS</span>
            <div class="w-16 bg-gray-200 rounded-full h-2">
              <div class="bg-orange-500 h-2 rounded-full" style="width: 92%"></div>
            </div>
          </div>
          <div class="flex items-center justify-between">
            <span class="text-gray-600">Docker</span>
            <div class="w-16 bg-gray-200 rounded-full h-2">
              <div class="bg-blue-500 h-2 rounded-full" style="width: 89%"></div>
            </div>
          </div>
          <div class="flex items-center justify-between">
            <span class="text-gray-600">Kubernetes</span>
            <div class="w-16 bg-gray-200 rounded-full h-2">
              <div class="bg-purple-500 h-2 rounded-full" style="width: 78%"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
