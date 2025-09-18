@extends('layouts.detail')

@section('title', ' Ascend Stratus')
@section('description', 'Learn about Ascend Stratus, a modern multi-sector holding company revolutionizing foundational industries through technology and innovation.')

@section('content')

<!-- HERO SECTION -->
<section class="bg-gray-50 min-h-screen">
  <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20">
    <!-- Top Hero Content -->
    <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center mb-16 lg:mb-24">
      <!-- Left Column - Content -->
      <div class="order-2 lg:order-1 fade-in-up">
        <div class="mb-6">
          <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 slide-in-left" style="transition-delay: 100ms;">
            ASCEND STRATUS
          </span>
          <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight fade-in-scale" style="transition-delay: 200ms;">
            Engineering software
            <span class="text-teal-600">for real</span>
            <span class="block">business impact.</span>
          </h1>
        </div>
        
        <p class="text-lg lg:text-xl text-gray-600 mb-8 leading-relaxed max-w-lg slide-in-left" style="transition-delay: 300ms;">
          Specializing in custom software development, mobile apps, and digital transformation. With 15 years of experience and 98% customer satisfaction from 1,500+ completed projects.
        </p>
        
        <!-- Trust Indicators -->
        <div class="flex flex-wrap items-center gap-6 mb-8 slide-in-left" style="transition-delay: 350ms;">
          <div class="flex items-center gap-2 text-sm text-gray-600">
            <svg class="w-5 h-5 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span>ISO 27001 Certified</span>
          </div>
          <div class="flex items-center gap-2 text-sm text-gray-600">
            <svg class="w-5 h-5 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span>99.9% Uptime SLA</span>
          </div>
          <div class="flex items-center gap-2 text-sm text-gray-600">
            <svg class="w-5 h-5 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span>24/7 Support</span>
          </div>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center mb-12 fade-in-up" style="transition-delay: 400ms;">
          <button class="bg-gradient-to-r from-teal-600 to-cyan-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:from-teal-700 hover:to-cyan-700 transition-all duration-300 hover:scale-105 hover:shadow-xl btn-animate shadow-lg">
            Get Started Today
          </button>
          <button class="border-2 border-teal-600 text-teal-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-teal-600 hover:text-white transition-all duration-300 btn-animate">
            View Our Work
          </button>
        </div>
        
        <!-- Client Logos -->
        <div class="slide-in-left" style="transition-delay: 500ms;">
          <p class="text-sm text-gray-500 mb-4">Trusted by industry leaders</p>
          <div class="flex items-center gap-8 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition-all duration-300">
            <div class="w-20 h-8 bg-gray-200 rounded flex items-center justify-center text-xs font-semibold text-gray-600">Work with us</div>
            <!-- <div class="w-20 h-8 bg-gray-200 rounded flex items-center justify-center text-xs font-semibold text-gray-600">CLIENT 2</div>
            <div class="w-20 h-8 bg-gray-200 rounded flex items-center justify-center text-xs font-semibold text-gray-600">CLIENT 3</div>
            <div class="w-20 h-8 bg-gray-200 rounded flex items-center justify-center text-xs font-semibold text-gray-600">CLIENT 4</div> -->
          </div>
        </div>
      </div>
      
      <!-- Right Column - Image -->
      <div class="order-1 lg:order-2 slide-in-right" style="transition-delay: 200ms;">
        <div class="relative">
          <img src="{{ asset('images/main.jpg') }}" 
               alt="Team working in modern office" 
               class="w-full h-[300px] sm:h-[400px] lg:h-[500px] object-cover rounded-2xl shadow-2xl hover:scale-105 transition-transform duration-700">
          <div class="absolute inset-0 bg-gradient-to-br from-teal-600/10 to-transparent rounded-2xl"></div>
        </div>
      </div>
    </div>

    <!-- What We Do Section - Integrated -->
    <div class="bg-slate-900 rounded-3xl p-8 lg:p-16 mb-16 lg:mb-24 relative overflow-hidden fade-in-up" style="transition-delay: 500ms;">
      <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-1/3 h-full">
          <svg viewBox="0 0 400 400" class="w-full h-full opacity-10">
            <path d="M0,0 Q200,100 400,0 L400,400 L0,400 Z" fill="url(#gradient)" />
            <defs>
              <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#0d9488;stop-opacity:0.3" />
                <stop offset="100%" style="stop-color:#0d9488;stop-opacity:0.1" />
              </linearGradient>
            </defs>
          </svg>
        </div>
      </div>
      
      <div class="relative z-10">
        <div class="max-w-3xl">
          <span class="inline-block text-teal-400 font-semibold text-sm uppercase tracking-wide mb-4 slide-in-left" style="transition-delay: 600ms;">
            WHAT DOES ASCEND STRATUS DO?
          </span>
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight fade-in-scale" style="transition-delay: 700ms;">
            We <span class="text-teal-400">custom software together</span>
            <span class="block">with our customers.</span>
          </h2>
        </div>
      </div>
    </div>

    <!-- Enhanced Statistics Section -->
    <div class="bg-gradient-to-r from-teal-600 to-cyan-600 rounded-3xl p-8 lg:p-16 mb-16 lg:mb-24 text-white">
      <div class="text-center mb-12 fade-in-up">
        <h2 class="text-3xl lg:text-4xl font-bold mb-4">Delivering Results That Matter</h2>
        <p class="text-lg text-cyan-100 max-w-2xl mx-auto">Our track record speaks for itself - trusted by businesses worldwide</p>
      </div>
      
      <div class="grid grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-12 text-center">
        <div class="fade-in-up" style="transition-delay: 100ms;">
          <div class="text-4xl lg:text-5xl font-bold mb-2 counter" data-target="50">0</div>
          <div class="text-lg font-semibold text-cyan-100 mb-1">Countries</div>
          <div class="text-sm text-cyan-200">Global presence</div>
        </div>
        <div class="fade-in-up" style="transition-delay: 200ms;">
          <div class="text-4xl lg:text-5xl font-bold mb-2 counter" data-target="15">0</div>
          <div class="text-lg font-semibold text-cyan-100 mb-1">Years</div>
          <div class="text-sm text-cyan-200">Industry experience</div>
        </div>
        <div class="fade-in-up" style="transition-delay: 300ms;">
          <div class="text-4xl lg:text-5xl font-bold mb-2"><span class="counter" data-target="99">0</span>%</div>
          <div class="text-lg font-semibold text-cyan-100 mb-1">Satisfaction</div>
          <div class="text-sm text-cyan-200">Client retention rate</div>
        </div>
        <div class="fade-in-up" style="transition-delay: 400ms;">
          <div class="text-4xl lg:text-5xl font-bold mb-2 counter" data-target="2500">0</div>
          <div class="text-lg font-semibold text-cyan-100 mb-1">Projects</div>
          <div class="text-sm text-cyan-200">Successfully delivered</div>
        </div>
        <div class="fade-in-up" style="transition-delay: 500ms;">
          <div class="text-4xl lg:text-5xl font-bold mb-2"><span class="counter" data-target="24">0</span>/7</div>
          <div class="text-lg font-semibold text-cyan-100 mb-1">Support</div>
          <div class="text-sm text-cyan-200">Always available</div>
        </div>
      </div>
    </div>

    <!-- About Ascend Stratus Section -->
    <div class="mb-16 lg:mb-24">
      <div class="text-center mb-12 fade-in-up">
        <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2">About Ascend Stratus</h2>
        <div class="w-16 h-1 bg-teal-600 mx-auto"></div>
        <p class="text-lg text-gray-600 mt-4 max-w-3xl mx-auto">Established 15 years ago, Ascend Stratus specializes in inventing, designing, developing, and maintaining custom software solutions. We pride ourselves on honesty, innovation, and deep domain knowledge.</p>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Honesty -->
        <div class="text-center card-hover fade-in-up border border-cyan-200 rounded-lg" style="transition-delay: 100ms;">
          <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center">
            <svg class="w-12 h-12 text-teal-600" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-3">Honesty</h3>
          <p class="text-sm text-gray-600 leading-relaxed">
            We believe in transparent communication and honest business practices. Our clients trust us because we deliver on our promises with 98% customer satisfaction from 1,500+ completed projects.
          </p>
        </div>

        <!-- Innovative -->
        <div class="text-center card-hover border border-cyan-200 rounded-lg p-6 fade-in-up" style="transition-delay: 200ms;">
          <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center">
            <svg class="w-12 h-12 text-teal-600" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
            </svg>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-3">Innovative</h3>
          <p class="text-sm text-gray-600 leading-relaxed">
            We believe that continuous innovation is the key to future success. Our team is driven by the passion for creating cutting-edge software that challenges the standards of technology and design.
          </p>
        </div>

        <!-- Domain Knowledge -->
        <div class="text-center card-hover fade-in-up border border-cyan-200 rounded-lg" style="transition-delay: 300ms;">
          <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center">
            <svg class="w-12 h-12 text-teal-600" fill="currentColor" viewBox="0 0 24 24">
              <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-3">Domain Knowledge</h3>
          <p class="text-sm text-gray-600 leading-relaxed">
            We serve Process Engineering & Manufacturing, Healthcare, Business Services, Startups, and FinTech industries with deep understanding of each sector's unique challenges and requirements.
          </p>
        </div>

        <!-- Full-service -->
        <div class="text-center card-hover fade-in-up border border-cyan-200 rounded-lg" style="transition-delay: 400ms;">
          <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center">
            <svg class="w-12 h-12 text-teal-600" fill="currentColor" viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2m8-10a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm8 6v6m3-3h-6"/>
            </svg>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-3">Full-service</h3>
          <p class="text-sm text-gray-600 leading-relaxed">
            We offer a full spectrum of services from concept development to final implementation. Our clients enjoy a seamless experience with a single point of contact for all their software needs.
          </p>
        </div>
      </div>
    </div>

    <!-- Showcase Section -->
    <div class="mb-16 lg:mb-24">
      <div class="text-center mb-12 fade-in-up">
        <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-8">This is what we work on every day.</h2>
      </div>

      <!-- Case Study 1 - Featured -->
      <div class="bg-teal-100 rounded-3xl p-8 lg:p-12 mb-8 relative overflow-hidden card-hover fade-in-up border border-cyan-200 rounded-lg" style="transition-delay: 100ms;">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
          <div class="slide-in-left" style="transition-delay: 200ms;">
            <div class="flex items-center gap-4 mb-6">
              <span class="text-teal-600 font-bold text-lg">01.</span>
              <span class="bg-teal-600 text-white px-3 py-1 rounded-full text-sm font-medium">Showcase</span>
            </div>
            
            <div class="mb-6">
              <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 bg-teal-600 rounded-lg flex items-center justify-center">
                  <span class="text-white font-bold text-lg">AS</span>
                </div>
                <div>
                  <h3 class="font-bold text-gray-900">Ascend Spectrum</h3>
                  <p class="text-sm text-gray-600">Healthcare Management Platform</p>
                </div>
              </div>
              
              <h4 class="text-xl lg:text-2xl font-bold text-teal-800 mb-4">
                Patients in control and employees unburdened.
              </h4>
            </div>
            
            <div class="flex items-center gap-2 text-teal-600">
              <span class="text-sm font-medium">Digital transformation</span>
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
              </svg>
            </div>
          </div>
          
          <div class="relative">
            <div class="bg-white rounded-2xl p-4 shadow-2xl transform rotate-3">
              <img src="{{ asset('images/main.jpg') }}" 
                   alt="Healthcare platform interface" 
                   class="w-full h-64 object-cover rounded-lg">
            </div>
          </div>
        </div>
      </div>

      <!-- Case Studies Grid -->
      <div class="grid md:grid-cols-2 gap-8 mb-8">
        <!-- Case Study 2 -->
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
          <div class="flex items-center justify-between mb-4">
            <span class="text-gray-500 font-bold">02.</span>
            <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-sm">Case Study</span>
          </div>
          
          <div class="flex items-center gap-3 mb-4">
            <div class="w-12 h-12 bg-gray-800 rounded-lg flex items-center justify-center">
              <span class="text-white font-bold">RP</span>
            </div>
            <div class="flex-1">
              <h4 class="font-bold text-gray-900">Retail Pro - International</h4>
              <p class="text-sm text-gray-600">App management</p>
            </div>
          </div>
          
          <div class="flex items-center gap-2 text-gray-600 mt-6">
            <span class="text-sm font-medium">Digital transformation</span>
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </div>
        </div>

        <!-- Case Study 3 -->
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
          <div class="flex items-center justify-between mb-4">
            <span class="text-gray-500 font-bold">03.</span>
            <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-sm">Case Study</span>
          </div>
          
          <div class="flex items-center gap-3 mb-4">
            <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center">
              <span class="text-white font-bold">LP</span>
            </div>
            <div class="flex-1">
              <h4 class="font-bold text-gray-900">LogiFlow</h4>
              <p class="text-sm text-gray-600">Site identity & Digital connections</p>
            </div>
          </div>
          
          <div class="flex items-center gap-2 text-gray-600 mt-6">
            <span class="text-sm font-medium">Web Development</span>
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </div>
        </div>
      </div>

      <!-- View All Button -->
      <div class="text-center">
        <button class="bg-white border-2 border-gray-900 text-gray-900 px-8 py-3 rounded-lg font-semibold hover:bg-gray-900 hover:text-white transition-colors">
          View all of our case studies
        </button>
      </div>
    </div>

    <!-- Professional Testimonials Section -->
    <div class="mb-16 lg:mb-24 bg-gradient-to-br from-gray-50 to-teal-50/30 py-16 rounded-3xl">
      <div class="text-center mb-16 fade-in-up">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Trusted by leading organizations across multiple industries</p>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
        <!-- Testimonial 1 -->
        <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 card-hover fade-in-up" style="transition-delay: 100ms;">
          <div class="flex items-center mb-6">
            <div class="flex text-teal-500">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
            </div>
          </div>
          <blockquote class="text-gray-700 mb-6 leading-relaxed">
            "Ascend Stratus delivered a custom mobile app that streamlined our patient management system. Their Laravel and Swift expertise resulted in a 40% increase in operational efficiency."
          </blockquote>
          <div class="flex items-center">
            <div class="w-12 h-12 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
              SW
            </div>
            <div>
              <div class="font-semibold text-gray-900">Sarah Wairimu</div>
              <div class="text-sm text-gray-600">Operations Director, MedTech Solutions</div>
            </div>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 card-hover fade-in-up" style="transition-delay: 200ms;">
          <div class="flex items-center mb-6">
            <div class="flex text-teal-500">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
            </div>
          </div>
          <blockquote class="text-gray-700 mb-6 leading-relaxed">
            "Ascend Stratus built our e-commerce platform using Craft CMS. The custom solution increased our online sales by 60% and improved customer experience significantly."
          </blockquote>
          <div class="flex items-center">
            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
              MJ
            </div>
            <div>
              <div class="font-semibold text-gray-900">Michael Johnson</div>
              <div class="text-sm text-gray-600">CEO, RetailTech Innovations</div>
            </div>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 card-hover fade-in-up" style="transition-delay: 300ms;">
          <div class="flex items-center mb-6">
            <div class="flex text-teal-500">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
            </div>
          </div>
          <blockquote class="text-gray-700 mb-6 leading-relaxed">
            "Their digital transformation services helped us modernize our entire business infrastructure. The custom software solution integrated AI and cloud computing perfectly."
          </blockquote>
          <div class="flex items-center">
            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
              RD
            </div>
            <div>
              <div class="font-semibold text-gray-900">Robert Davis</div>
              <div class="text-sm text-gray-600">CTO, FinTech Dynamics</div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Client Logos -->
      <div class="text-center fade-in-up" style="transition-delay: 400ms;">
        <p class="text-sm text-gray-500 mb-8">Trusted by leading organizations worldwide</p>
        <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6 lg:gap-8">
          <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100 flex items-center justify-center h-20 hover:shadow-md transition-shadow duration-300 opacity-60 grayscale hover:opacity-100 hover:grayscale-0">
            <span class="text-lg font-bold text-gray-700">TechCorp</span>
          </div>
          <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100 flex items-center justify-center h-20 hover:shadow-md transition-shadow duration-300 opacity-60 grayscale hover:opacity-100 hover:grayscale-0">
            <div class="bg-blue-600 text-white px-3 py-2 rounded font-bold text-sm">InnovateLab</div>
          </div>
          <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100 flex items-center justify-center h-20 hover:shadow-md transition-shadow duration-300 opacity-60 grayscale hover:opacity-100 hover:grayscale-0">
            <span class="text-lg font-bold text-gray-700">GlobalTech</span>
          </div>
          <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100 flex items-center justify-center h-20 hover:shadow-md transition-shadow duration-300 opacity-60 grayscale hover:opacity-100 hover:grayscale-0">
            <div class="bg-teal-600 text-white px-3 py-2 rounded text-sm font-bold">NEXUS</div>
          </div>
          <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100 flex items-center justify-center h-20 hover:shadow-md transition-shadow duration-300 opacity-60 grayscale hover:opacity-100 hover:grayscale-0">
            <span class="text-lg font-bold text-gray-700">FutureSoft</span>
          </div>
          <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100 flex items-center justify-center h-20 hover:shadow-md transition-shadow duration-300 opacity-60 grayscale hover:opacity-100 hover:grayscale-0">
            <div class="bg-gray-800 text-white px-3 py-2 rounded text-sm font-bold">APEX</div>
          </div>
          <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100 flex items-center justify-center h-20 hover:shadow-md transition-shadow duration-300 opacity-60 grayscale hover:opacity-100 hover:grayscale-0">
            <span class="text-lg font-bold text-gray-700">Microsoft</span>
          </div>
          <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100 flex items-center justify-center h-20 hover:shadow-md transition-shadow duration-300 opacity-60 grayscale hover:opacity-100 hover:grayscale-0">
            <div class="bg-red-600 text-white px-3 py-2 rounded text-sm font-bold">Oracle</div>
          </div>
          <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100 flex items-center justify-center h-20 hover:shadow-md transition-shadow duration-300 opacity-60 grayscale hover:opacity-100 hover:grayscale-0">
            <span class="text-lg font-bold text-gray-700">Salesforce</span>
          </div>
          <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100 flex items-center justify-center h-20 hover:shadow-md transition-shadow duration-300 opacity-60 grayscale hover:opacity-100 hover:grayscale-0">
            <div class="bg-green-600 text-white px-3 py-2 rounded text-sm font-bold">AWS</div>
          </div>
          <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100 flex items-center justify-center h-20 hover:shadow-md transition-shadow duration-300 opacity-60 grayscale hover:opacity-100 hover:grayscale-0">
            <span class="text-lg font-bold text-gray-700">IBM</span>
          </div>
          <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100 flex items-center justify-center h-20 hover:shadow-md transition-shadow duration-300 opacity-60 grayscale hover:opacity-100 hover:grayscale-0">
            <div class="bg-purple-600 text-white px-3 py-2 rounded text-sm font-bold">Your Logo Here</div>
          </div>
        </div>
      </div>

    <!-- Services Section -->
    <div class="bg-slate-900 rounded-3xl p-8 lg:p-16 mb-16 lg:mb-24">
      <div class="text-center mb-12">
        <span class="inline-block text-teal-400 font-semibold text-sm uppercase tracking-wide mb-4">
          WHAT WE DO
        </span>
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-8">Our Core Services</h2>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <!-- App Development -->
        <div class="bg-white rounded-2xl p-6 relative">
          <div class="absolute top-4 right-4">
            <span class="bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">POPULAR</span>
          </div>
          <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-teal-600" fill="currentColor" viewBox="0 0 24 24">
              <path d="M7 2v11h3v9l7-12h-4l4-8z"/>
            </svg>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-3">Mobile App Development</h3>
          <p class="text-sm text-gray-600 mb-4">
            Creating native iOS and Android applications using Swift and modern frameworks. 15 years of experience delivering mobile solutions.
          </p>
          <button class="text-teal-600 font-semibold text-sm hover:underline">Read more</button>
        </div>

        <!-- Web Applications -->
        <div class="bg-white rounded-2xl p-6 relative">
          <div class="absolute top-4 right-4">
            <span class="bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">POPULAR</span>
          </div>
          <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-teal-600" fill="currentColor" viewBox="0 0 24 24">
              <path d="M3 3h18v18H3V3zm16 16V5H5v14h14z"/>
            </svg>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-3">Custom Software Development</h3>
          <p class="text-sm text-gray-600 mb-4">
            Building bespoke software solutions using Laravel PHP framework and modern web technologies. Tailored to your specific business needs.
          </p>
          <button class="text-teal-600 font-semibold text-sm hover:underline">Read more</button>
        </div>

        <!-- Digital Transformation -->
        <div class="bg-white rounded-2xl p-6">
          <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-teal-600" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
            </svg>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-3">Digital Transformation</h3>
          <p class="text-sm text-gray-600 mb-4">
            Guiding businesses through modernizing their digital infrastructure with AI, machine learning, and cloud computing integration.
          </p>
          <button class="text-teal-600 font-semibold text-sm hover:underline">Read more</button>
        </div>

        <!-- Dev Team as a Service -->
        <div class="bg-white rounded-2xl p-6">
          <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-teal-600" fill="currentColor" viewBox="0 0 24 24">
              <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A1.5 1.5 0 0 0 18.5 7h-3c-.83 0-1.5.67-1.5 1.5v6c0 .83.67 1.5 1.5 1.5H17v6h3z"/>
            </svg>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-3">Dev Team as a Service</h3>
          <p class="text-sm text-gray-600 mb-4">
            Team as a Service model offers flexibility and efficiency in development, allowing organizations to respond quickly to changing needs and hire specific expertise for projects.
          </p>
          <button class="text-teal-600 font-semibold text-sm hover:underline">Read more</button>
        </div>

        <!-- High-End Websites -->
        <div class="bg-white rounded-2xl p-6">
          <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-teal-600" fill="currentColor" viewBox="0 0 24 24">
              <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
            </svg>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-3">Web Development</h3>
          <p class="text-sm text-gray-600 mb-4">
            Crafting high-end websites and web-based applications using Craft CMS. Professional solutions for innovative companies and startups.
          </p>
          <button class="text-teal-600 font-semibold text-sm hover:underline">Read more</button>
        </div>

        <!-- E-Commerce -->
        <div class="bg-white rounded-2xl p-6">
          <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-teal-600" fill="currentColor" viewBox="0 0 24 24">
              <path d="M7 18c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12L8.1 13h7.45c.75 0 1.41-.41 1.75-1.03L21.7 4H5.21l-.94-2H1zm16 16c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
            </svg>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-3">E-Commerce Solutions</h3>
          <p class="text-sm text-gray-600 mb-4">
            Developing online stores and e-commerce platforms with advanced features and cloud integration to exceed your business goals.
          </p>
          <button class="text-teal-600 font-semibold text-sm hover:underline">Read more</button>
        </div>
      </div>

      <!-- See All Services Button -->
      <div class="text-center">
        <button class="bg-teal-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-teal-700 transition-colors">
          See all our services
        </button>
      </div>
    </div>

    <!-- Software Solutions Section -->
    <div class="bg-slate-900 rounded-3xl p-8 lg:p-16 mb-16 lg:mb-24">
      <div class="text-center mb-12">
        <span class="inline-block text-teal-400 font-semibold text-sm uppercase tracking-wide mb-4">
          WHAT TECHNOLOGIES DO WE USE?
        </span>
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-8">The best software for big challenges</h2>
        <p class="text-gray-300 max-w-3xl mx-auto">
          Our pit crew of tech experts, armed with AI, machine learning, and cloud computing, is tuning your business for the digital race. We strive to put your business in pole position with our pioneering software.
        </p>
      </div>

      <div class="flex items-center justify-center mb-8">
        <div class="flex items-center gap-4">
          <button class="p-2 text-white hover:text-teal-400 transition-colors">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>
            </svg>
          </button>
          <span class="text-white font-semibold">Software Solutions</span>
          <button class="p-2 text-white hover:text-teal-400 transition-colors">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
            </svg>
          </button>
        </div>
      </div>

      <div class="grid md:grid-cols-3 gap-6">
        <!-- Craft CMS -->
        <div class="bg-white rounded-2xl p-6">
          <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
            </svg>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-3">Craft CMS</h3>
          <p class="text-sm text-gray-600 mb-4">
            Craft CMS is a content management system that is incredibly flexible and user-friendly. It offers a clean, intuitive interface and powerful features for content creation and management.
          </p>
          <div class="flex items-center gap-2 text-red-500">
            <span class="text-sm font-medium">Websites & E-commerce</span>
          </div>
        </div>

        <!-- Swift -->
        <div class="bg-white rounded-2xl p-6">
          <div class="w-12 h-12 bg-teal-600 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
            </svg>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-3">Swift</h3>
          <p class="text-sm text-gray-600 mb-4">
            We also develop in Swift for iOS development and native iOS applications. Swift is Apple's programming language for iOS, macOS, watchOS, and tvOS app development.
          </p>
          <div class="flex items-center gap-2 text-teal-600">
            <span class="text-sm font-medium">iOS apps in Xcode</span>
          </div>
        </div>

        <!-- Laravel -->
        <div class="bg-white rounded-2xl p-6">
          <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.02c-.01.003-.021.005-.032.005-.01 0-.021-.002-.031-.005l-.065-.02L.707 18.755a.378.378 0 01-.188-.326V9.584c0-.138.073-.26.188-.327l9.025-5.21c.117-.067.262-.067.379 0L14.44 6.4l4.323-2.49c.117-.068.262-.068.379 0l4.5 2.59zm-1 6.674l-3.819-2.2v-4.29l3.819 2.2v4.29zm-4.138-8.179l-3.819 2.2L10.86 3.925l3.819-2.2 3.825 2.2zM8.678 9.583l-7.25-4.18v8.36l7.25 4.18V9.583zm1.377.795l3.819-2.2v8.36l-3.819 2.2v-8.36z"/>
            </svg>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-3">Laravel</h3>
          <p class="text-sm text-gray-600 mb-4">
            Laravel is a powerful PHP framework that makes it easy to build modern web applications. It provides elegant syntax and powerful features for rapid development.
          </p>
          <div class="flex items-center gap-2 text-red-500">
            <span class="text-sm font-medium">PHP</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Industries Section -->
    <div class="mb-16 lg:mb-24">
      <div class="text-center mb-12">
        <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4">
          FOR WHO
        </span>
        <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-8">
          Wij hebben kant-en-klare oplossingen voor gezondheidszorg, fintech, industrie en logistiek
        </h2>
      </div>

      <div class="flex flex-wrap justify-center gap-4 mb-12">
        <div class="flex items-center gap-3 bg-gray-100 rounded-full px-4 py-2">
          <div class="w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center">
            <span class="text-white text-xs font-bold">I</span>
          </div>
          <span class="text-gray-700 font-medium">Industry</span>
        </div>
        <div class="flex items-center gap-3 bg-gray-100 rounded-full px-4 py-2">
          <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
            <span class="text-white text-xs font-bold">T</span>
          </div>
          <span class="text-gray-700 font-medium">Transportation & logistics</span>
        </div>
        <div class="flex items-center gap-3 bg-gray-100 rounded-full px-4 py-2">
          <div class="w-8 h-8 bg-red-600 rounded-full flex items-center justify-center">
            <span class="text-white text-xs font-bold">H</span>
          </div>
          <span class="text-gray-700 font-medium">Healthcare</span>
        </div>
        <div class="flex items-center gap-3 bg-gray-100 rounded-full px-4 py-2">
          <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center">
            <span class="text-white text-xs font-bold">F</span>
          </div>
          <span class="text-gray-700 font-medium">Fintech</span>
        </div>
        <div class="flex items-center gap-3 bg-gray-100 rounded-full px-4 py-2">
          <div class="w-8 h-8 bg-purple-600 rounded-full flex items-center justify-center">
            <span class="text-white text-xs font-bold">S</span>
          </div>
          <span class="text-gray-700 font-medium">Services / B2B</span>
        </div>
        <div class="flex items-center gap-3 bg-gray-100 rounded-full px-4 py-2">
          <div class="w-8 h-8 bg-teal-600 rounded-full flex items-center justify-center">
            <span class="text-white text-xs font-bold">S</span>
          </div>
          <span class="text-gray-700 font-medium">Startups</span>
        </div>
      </div>

      <div class="text-center">
        <button class="text-teal-600 font-semibold hover:underline">View more...</button>
      </div>
    </div>

    <!-- Contact Section -->
    <div class="bg-slate-900 rounded-3xl p-8 lg:p-16">
      <div class="grid lg:grid-cols-2 gap-12 items-start">
        <!-- Left Column -->
        <div>
          <span class="inline-block text-teal-400 font-semibold text-sm uppercase tracking-wide mb-4">
            PLAN EEN VRIJBLIJVEND GESPREK
          </span>
          <h2 class="text-3xl lg:text-4xl font-bold text-white mb-8">
            Thinking together about the best solution....
          </h2>
          
          <div class="mb-8">
            <p class="text-gray-300 mb-6">
              Together with our customers, we come up with unique software solutions. It starts with an idea, a direction and then our experience comes for the rest.
            </p>
            
            <div class="mb-6">
              <h4 class="text-white font-semibold mb-4">Where does our strength lie?</h4>
              <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center gap-2">
                  <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                  <span class="text-gray-300 text-sm">Collaborate</span>
                </div>
                <div class="flex items-center gap-2">
                  <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                  <span class="text-gray-300 text-sm">Result-oriented</span>
                </div>
                <div class="flex items-center gap-2">
                  <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                  <span class="text-gray-300 text-sm">Speed</span>
                </div>
                <div class="flex items-center gap-2">
                  <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                  <span class="text-gray-300 text-sm">Transparent</span>
                </div>
                <div class="flex items-center gap-2">
                  <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                  <span class="text-gray-300 text-sm">Quality</span>
                </div>
                <div class="flex items-center gap-2">
                  <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                  <span class="text-gray-300 text-sm">Expertise</span>
                </div>
              </div>
            </div>
            
            <div>
              <h4 class="text-white font-semibold mb-4">Wat is een goed plan?</h4>
              <div class="space-y-3">
                <div class="flex items-start gap-3">
                  <span class="bg-teal-600 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm font-bold">1</span>
                  <div>
                    <p class="text-white font-medium">We analyze your question and</p>
                    <p class="text-gray-400 text-sm">everything on the table</p>
                  </div>
                </div>
                <div class="flex items-start gap-3">
                  <span class="bg-teal-600 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm font-bold">2</span>
                  <div>
                    <p class="text-white font-medium">A meeting with</p>
                    <p class="text-gray-400 text-sm">everything on the table</p>
                  </div>
                </div>
                <div class="flex items-start gap-3">
                  <span class="bg-teal-600 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm font-bold">3</span>
                  <div>
                    <p class="text-white font-medium">We will make a</p>
                    <p class="text-gray-400 text-sm">competitive</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Right Column - Contact Form -->
        <div class="bg-white rounded-2xl p-8">
          <h3 class="text-xl font-bold text-gray-900 mb-6 text-center">Plan een vrijblijvend gesprek</h3>
          
          <form class="space-y-4">
            <div>
              <input type="text" placeholder="Name" 
                     class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-600 focus:border-transparent">
            </div>
            
            <div>
              <input type="text" placeholder="Company name" 
                     class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-600 focus:border-transparent">
            </div>
            
            <div>
              <input type="email" placeholder="Email" 
                     class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-600 focus:border-transparent">
            </div>
            
            <div>
              <input type="tel" placeholder="Phone number" 
                     class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-600 focus:border-transparent">
            </div>
            
            <div>
              <textarea placeholder="Message" rows="4"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-600 focus:border-transparent resize-none"></textarea>
            </div>
            
            <div class="flex items-start gap-3">
              <input type="checkbox" id="privacy" class="mt-1">
              <label for="privacy" class="text-sm text-gray-600">
                To get you right to the first line quickly. Please let us know what you signed in detail.
              </label>
            </div>
            
            <button type="submit" 
                    class="w-full bg-slate-900 text-white py-3 rounded-lg font-semibold hover:bg-slate-800 transition-colors">
              Send
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


        <!-- PROFESSIONAL CTA SECTION -->
        <section class="py-20 md:py-28 bg-gradient-to-br from-slate-900 to-gray-800 text-white">
            <div class="max-w-4xl mx-auto text-center px-8">
                <div class="fade-in-up">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Transform Your Business?</h2>
                    <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                        Join hundreds of successful companies that have accelerated their growth with our enterprise solutions.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12">
                        <a href="#contact" class="bg-gradient-to-r from-teal-500 to-cyan-500 text-white px-10 py-4 rounded-lg text-lg font-semibold hover:from-teal-600 hover:to-cyan-600 transition-all duration-300 hover:scale-105 shadow-xl">
                            Start Your Project
                        </a>
                        <a href="#" class="border-2 border-white text-white px-10 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-gray-900 transition-all duration-300">
                            Schedule Consultation
                        </a>
                    </div>
                    
                    <!-- Trust Badges -->
                    <div class="flex flex-wrap justify-center items-center gap-8 opacity-70">
                        <div class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-teal-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm">Enterprise Security</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-teal-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm">Certified Partners</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-teal-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-sm">Money-back Guarantee</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TEAM/LEADERSHIP SECTION -->
        

    <!-- BLOG SECTION -->
        <section id="blog" class="py-20 md:py-28 px-8 bg-gradient-to-br from-gray-50 to-turquoise-50/30">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16 fade-in-up">
                    <h2 class="text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">From Our Blog</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">Stay updated with our latest insights, news, and industry trends.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Blog Post 1 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up border border-cyan-200 rounded-lg">
                        <div class="relative h-48">
                            <img src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Modern Agriculture Technology" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark-turquoise mb-3">The Future of AgriTech in Africa</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Explore how technology is revolutionizing agriculture across the continent.</p>
                            <a href="/insights/agritech-future" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors">Read More →</a>
                        </div>
                    </div>
                    
                    <!-- Blog Post 2 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up border border-cyan-200 rounded-lg" style="transition-delay: 100ms;">
                        <div class="relative h-48">
                            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Logistics Warehouse Innovation" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark-turquoise mb-3">Innovating Logistics: A Case Study</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Discover how our LogiFlow solution transformed supply chain efficiency.</p>
                            <a href="/insights/logistics-case-study" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors">Read More →</a>
                        </div>
                    </div>
                    
                    <!-- Blog Post 3 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover fade-in-up border border-cyan-200 rounded-lg" style="transition-delay: 200ms;">
                        <div class="relative h-48">
                            <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="AI Technology Development" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark-turquoise mb-3">Empowering Businesses with AI</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Learn about our AI-driven platforms and their impact on various sectors.</p>
                            <a href="/insights/ai-empowerment" class="text-dark-turquoise hover:text-turquoise-600 font-semibold transition-colors">Read More →</a>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-16 fade-in-up">
                    <a href="/insights" class="bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:shadow-xl transition-all">
                        View All Articles
                    </a>
                </div>
            </div>
        </section>

    </main>

    <!-- Modern Footer -->
    

    

@endsection