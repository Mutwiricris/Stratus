@extends('layouts.detail')

@section('title', 'Contact - Ascend Stratus')
@section('description', 'Get in touch with Ascend Stratus. Connect with our team to explore partnership opportunities and transformative solutions.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-gray-50 via-white to-teal-50/30 min-h-screen relative overflow-hidden flex items-center">
  <!-- Background Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-teal-400/20 to-cyan-400/20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-tr from-blue-400/20 to-teal-400/20 rounded-full blur-3xl"></div>
  </div>
  
  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">
    <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16 items-center">
      <!-- Left Column - Content -->
      <div class="fade-in-up">
        <div class="mb-8">
          <span class="inline-flex items-center gap-2 text-teal-600 font-semibold text-sm uppercase tracking-wide mb-6 slide-in-left bg-teal-50 px-4 py-2 rounded-full">
            <div class="w-2 h-2 bg-teal-500 rounded-full animate-pulse"></div>
            Contact Us
          </span>
          <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-gray-900 mb-8 leading-[1.1] fade-in-scale">
            Ready to build
            <span class="bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 bg-clip-text text-transparent">smart software</span>
            <span class="block">together?</span>
          </h1>
        </div>
        
        <p class="text-lg sm:text-xl lg:text-2xl text-gray-600 mb-10 leading-relaxed max-w-2xl slide-in-left">
          Let's discuss your project and see how we can help your business grow.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 items-stretch sm:items-center mb-12 fade-in-up">
          <a href="#contact-form" class="group relative bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl hover:shadow-teal-500/25 transition-all duration-500 hover:scale-105 btn-animate overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-teal-700 via-cyan-700 to-blue-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <span class="relative flex items-center justify-center gap-2">
              Get in Touch
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </span>
          </a>
          <a href="#offices" class="group border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-2xl text-lg font-semibold hover:border-teal-600 hover:text-teal-600 hover:bg-teal-50 transition-all duration-300 btn-animate backdrop-blur-sm bg-white/50">
            <span class="flex items-center justify-center gap-2">
              <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
              Our Locations
            </span>
          </a>
        </div>
      </div>
      
      <!-- Right Column - Image -->
      <div class="slide-in-right">
        <div class="relative group">
          <!-- Main Image -->
          <div class="relative overflow-hidden rounded-3xl shadow-2xl">
            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&w=1920&q=80" 
                 alt="African team collaboration and communication" 
                 class="w-full h-[350px] sm:h-[450px] lg:h-[550px] object-cover group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-br from-teal-600/20 via-cyan-600/10 to-blue-600/20 group-hover:opacity-75 transition-opacity duration-500"></div>
          </div>
          
          <!-- Floating Elements -->
          <div class="absolute -top-4 -right-4 w-24 h-24 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-2xl shadow-lg flex items-center justify-center floating" style="animation-delay: 1s;">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
          </div>
          
          <div class="absolute -bottom-6 -left-6 w-32 h-20 bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-4 floating" style="animation-delay: 2s;">
            <div class="text-2xl font-bold text-gray-900">24/7</div>
            <div class="text-xs text-gray-600 font-medium">Support Available</div>
          </div>
          
          <!-- Background Decoration -->
          <div class="absolute -z-10 top-8 right-8 w-72 h-72 bg-gradient-to-br from-teal-200/30 to-cyan-200/30 rounded-full blur-2xl"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Methods -->
<section class="py-20 md:py-28 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        Get In Touch
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Connect With Us</h2>
      <div class="w-24 h-1 bg-gradient-to-r from-teal-600 to-cyan-600 mx-auto mb-6"></div>
      <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Multiple ways to reach our team and start your transformation journey</p>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-16">
      <!-- General Inquiries -->
      <div class="group text-center bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 hover:-translate-y-2 fade-in-up">
        <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-teal-600 transition-colors duration-300">General Inquiries</h3>
        <p class="text-gray-600 mb-6 leading-relaxed">Questions about our platform, services, or partnership opportunities</p>
        <a href="mailto:hello@ascendstratus.com" class="text-teal-600 hover:text-teal-700 font-semibold transition-colors">
          hello@ascendstratus.com
        </a>
      </div>
      
      <!-- Partnership -->
      <div class="group text-center bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 hover:-translate-y-2 fade-in-up" style="transition-delay: 100ms;">
        <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-blue-500 to-purple-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-teal-600 transition-colors duration-300">Partnerships</h3>
        <p class="text-gray-600 mb-6 leading-relaxed">Strategic partnerships, venture collaboration, and investment opportunities</p>
        <a href="mailto:partnerships@ascendstratus.com" class="text-teal-600 hover:text-teal-700 font-semibold transition-colors">
          partnerships@ascendstratus.com
        </a>
      </div>
      
      <!-- Careers -->
      <div class="group text-center bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 hover:-translate-y-2 fade-in-up" style="transition-delay: 200ms;">
        <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-teal-600 transition-colors duration-300">Careers</h3>
        <p class="text-gray-600 mb-6 leading-relaxed">Join our team of world-class engineers, strategists, and innovators</p>
        <a href="mailto:careers@ascendstratus.com" class="text-teal-600 hover:text-teal-700 font-semibold transition-colors">
          careers@ascendstratus.com
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Contact Form -->
<section id="contact-form" class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-teal-50/30 px-4 sm:px-6 lg:px-8">
  <div class="max-w-6xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        Contact Form
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
      <div class="w-24 h-1 bg-gradient-to-r from-teal-600 to-cyan-600 mx-auto mb-6"></div>
      <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Tell us about your project, challenges, or partnership interests</p>
    </div>
    
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden fade-in-up border border-gray-100">
      <div class="grid lg:grid-cols-2 gap-0">
        <!-- Form -->
        <div class="p-8 lg:p-12">
          <!-- Success Message -->
          @if(session('success'))
          <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 rounded-lg">
            <div class="flex items-center">
              <svg class="w-5 h-5 text-emerald-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <p class="text-emerald-700 font-medium">{{ session('success') }}</p>
            </div>
          </div>
          @endif

          <!-- Warning Message -->
          @if(session('warning'))
          <div class="mb-6 p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
            <div class="flex items-center">
              <svg class="w-5 h-5 text-yellow-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16c-.77.833.192 2.5 1.732 2.5z"></path>
              </svg>
              <p class="text-yellow-700 font-medium">{{ session('warning') }}</p>
            </div>
          </div>
          @endif

          <!-- Error Messages -->
          @if($errors->any())
          <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
            <div class="flex items-start">
              <svg class="w-5 h-5 text-red-600 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <div>
                <p class="text-red-700 font-medium mb-2">Please fix the following errors:</p>
                <ul class="text-red-600 text-sm list-disc list-inside">
                  @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          @endif

          <!-- Toast Messages -->
          @if(session('toast'))
          <div id="page-toast" class="mb-6 p-4 rounded-lg shadow-lg 
            @if(session('toast.type') === 'success') bg-emerald-600 text-white
            @elseif(session('toast.type') === 'error') bg-red-600 text-white
            @elseif(session('toast.type') === 'warning') bg-amber-600 text-white
            @else bg-blue-600 text-white
            @endif">
            @if(session('toast.title'))
            <div class="font-semibold">{{ session('toast.title') }}</div>
            <div class="text-sm opacity-90">{{ session('toast.message') }}</div>
            @else
            <div>{{ session('toast.message') }}</div>
            @endif
          </div>
          <script>
            // Auto-hide toast after duration
            setTimeout(() => {
              const toast = document.getElementById('page-toast');
              if (toast) {
                toast.style.transition = 'opacity 0.5s';
                toast.style.opacity = '0';
                setTimeout(() => toast.remove(), 500);
              }
            }, {{ session('toast.duration', 5000) }});
          </script>
          @endif

          <!-- Livewire Contact Form -->
          <livewire:contact-form />
        </div>
        
        <!-- Contact Info -->
        <div class="bg-gradient-to-br from-teal-600 via-cyan-600 to-blue-600 p-8 lg:p-12 text-white relative overflow-hidden">
          <!-- Background Pattern -->
          <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full">
              <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                  <pattern id="grid-contact" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
                  </pattern>
                </defs>
                <rect width="100" height="100" fill="url(#grid-contact)" />
              </svg>
            </div>
          </div>
          <div class="relative z-10">
            <h3 class="text-3xl font-bold mb-8">Get in Touch</h3>
          
          <div class="space-y-8">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
              </div>
              <div>
                <p class="text-cyan-100 leading-relaxed">
                  Kerugoya<br>
                  Kirinyaga, Kenya
                </p>
              </div>
            </div>
            
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-lg mb-2">Phone</h4>
                <p class="text-cyan-100">+254110407501</p>
              </div>
            </div>
            
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              
            </div>
            
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-lg mb-2">Follow Us</h4>
                <div class="flex space-x-4">
                  <a href="#" class="text-cyan-100 hover:text-white transition-colors">LinkedIn</a>
                  <a href="#" class="text-cyan-100 hover:text-white transition-colors">Twitter</a>
                  <a href="#" class="text-cyan-100 hover:text-white transition-colors">Medium</a>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Process Section -->
<section class="py-24 md:py-32 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        Our Process
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">How We Work Together</h2>
      <div class="w-24 h-1 bg-gradient-to-r from-teal-600 to-cyan-600 mx-auto mb-6"></div>
      <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Our streamlined approach to partnership development and project delivery</p>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10">
      <!-- Step 1 -->
      <div class="group text-center fade-in-up">
        <div class="relative mb-8">
          <div class="w-20 h-20 mx-auto bg-gradient-to-br from-teal-500 to-cyan-500 rounded-3xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
            <span class="text-2xl font-bold text-white">1</span>
          </div>
          <div class="absolute -top-2 -right-2 w-8 h-8 bg-teal-400 rounded-full flex items-center justify-center">
            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
          </div>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-teal-600 transition-colors duration-300">Initial Consultation</h3>
        <p class="text-gray-600 leading-relaxed">We discuss your challenges, goals, and vision to understand how we can best support your transformation journey.</p>
      </div>
      
      <!-- Step 2 -->
      <div class="group text-center fade-in-up" style="transition-delay: 100ms;">
        <div class="relative mb-8">
          <div class="w-20 h-20 mx-auto bg-gradient-to-br from-blue-500 to-purple-500 rounded-3xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
            <span class="text-2xl font-bold text-white">2</span>
          </div>
          <div class="absolute -top-2 -right-2 w-8 h-8 bg-blue-400 rounded-full flex items-center justify-center">
            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
            </svg>
          </div>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-teal-600 transition-colors duration-300">Strategic Planning</h3>
        <p class="text-gray-600 leading-relaxed">We develop a comprehensive strategy and roadmap tailored to your specific industry and business requirements.</p>
      </div>
      
      <!-- Step 3 -->
      <div class="group text-center fade-in-up" style="transition-delay: 200ms;">
        <div class="relative mb-8">
          <div class="w-20 h-20 mx-auto bg-gradient-to-br from-green-500 to-emerald-500 rounded-3xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
            <span class="text-2xl font-bold text-white">3</span>
          </div>
          <div class="absolute -top-2 -right-2 w-8 h-8 bg-green-400 rounded-full flex items-center justify-center">
            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
          </div>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-teal-600 transition-colors duration-300">Implementation</h3>
        <p class="text-gray-600 leading-relaxed">Our expert team implements the solution with continuous monitoring and optimization for maximum impact.</p>
      </div>
      
      <!-- Step 4 -->
      <div class="group text-center fade-in-up" style="transition-delay: 300ms;">
        <div class="relative mb-8">
          <div class="w-20 h-20 mx-auto bg-gradient-to-br from-orange-500 to-red-500 rounded-3xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
            <span class="text-2xl font-bold text-white">4</span>
          </div>
          <div class="absolute -top-2 -right-2 w-8 h-8 bg-orange-400 rounded-full flex items-center justify-center">
            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
            </svg>
          </div>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-teal-600 transition-colors duration-300">Ongoing Support</h3>
        <p class="text-gray-600 leading-relaxed">We provide continuous support, updates, and strategic guidance to ensure long-term success and growth.</p>
      </div>
    </div>
  </div>
</section>

<!-- Office Locations -->


<!-- CTA Section -->


<!-- Why Choose Us Section -->
<section class="py-24 md:py-32 bg-gradient-to-br from-gray-50 to-teal-50/30 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        Why Partner With Us
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Ready to Transform Your Business?</h2>
      <div class="w-24 h-1 bg-gradient-to-r from-teal-600 to-cyan-600 mx-auto mb-6"></div>
      <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Join hundreds of companies that trust us to deliver exceptional software solutions</p>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Benefit 1 -->
      <div class="group text-center bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 hover:-translate-y-2 fade-in-up">
        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">Fast Delivery</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Average project delivery in 3-6 months with agile methodology</p>
      </div>
      
      <!-- Benefit 2 -->
      <div class="group text-center bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 hover:-translate-y-2 fade-in-up" style="transition-delay: 100ms;">
        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-blue-500 to-purple-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">Quality Assured</h3>
        <p class="text-gray-600 text-sm leading-relaxed">ISO 27001 certified with 99% client satisfaction rate</p>
      </div>
      
      <!-- Benefit 3 -->
      <div class="group text-center bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 hover:-translate-y-2 fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">Expert Team</h3>
        <p class="text-gray-600 text-sm leading-relaxed">3+ senior developers with 15 years industry experience</p>
      </div>
      
      <!-- Benefit 4 -->
      <div class="group text-center bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-teal-200 transition-all duration-500 hover:-translate-y-2 fade-in-up" style="transition-delay: 300ms;">
        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">24/7 Support</h3>
        <p class="text-gray-600 text-sm leading-relaxed">Round-the-clock support and maintenance services</p>
      </div>
    </div>
  </div>
</section>

<!-- Client Success Stories Section -->
<section class="py-20 md:py-28 bg-gradient-to-r from-dark-turquoise to-turquoise-600">
  <div class="max-w-4xl mx-auto text-center px-8">
    <div class="fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-white mb-6">Ready to Start Your Transformation?</h2>
      <p class="text-lg text-cyan-100 mb-8 max-w-2xl mx-auto">
        Join the companies that are already transforming their industries with Ascend Stratus. Let's discuss how we can help you achieve unprecedented growth.
      </p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="#contact-form" class="bg-cyan-300 text-dark-turquoise px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
          Schedule a Demo
        </a>
        <a href="{{ url('/platform') }}" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
          Learn About Our Platform
        </a>
      </div>
    </div>
  </div>
</section>

<script>
function toggleFAQ(button) {
  const content = button.nextElementSibling;
  const icon = button.querySelector('svg');
  
  if (content.classList.contains('hidden')) {
    content.classList.remove('hidden');
    icon.style.transform = 'rotate(180deg)';
  } else {
    content.classList.add('hidden');
    icon.style.transform = 'rotate(0deg)';
  }
}
</script>

@endsection
