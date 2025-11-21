@extends('layouts.detail')

@section('title', 'Ascend Stratus - Leading Technology Solutions & Digital Transformation in Africa')
@section('description', 'Transform your business with Ascend Stratus - Africa\'s premier technology holding company. We provide enterprise software, fintech solutions, mobile app development, and digital transformation services designed specifically for African markets.')
@section('keywords', 'enterprise software Africa, fintech solutions Kenya, mobile app development Africa, digital transformation, business automation, custom software development, African technology company, payment processing, digital banking, LogiFlow, AgriSmart')

@section('og_title', 'Ascend Stratus - Transform Your Business with Cutting-Edge Technology')
@section('og_description', 'Leading African technology company providing enterprise software, fintech solutions, and mobile applications. Join hundreds of successful businesses that have transformed with our solutions.')
@section('og_image', asset('images/ascend-stratus-social.jpg'))

@section('twitter_title', 'Ascend Stratus - Technology Solutions for African Businesses')
@section('twitter_description', 'Enterprise software, fintech solutions & mobile apps designed for Africa. Transform your business today.')

@push('structured-data')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => 'Ascend Stratus - Home',
    'description' => 'Transform your business with Africa\'s leading technology solutions provider',
    'url' => url('/'),
    'mainEntity' => [
        '@type' => 'Organization',
        'name' => 'Ascend Stratus',
        'alternateName' => 'Ascend Stratus Holdings',
        'description' => 'Multi-sector technology holding company transforming businesses across Africa',
        'foundingDate' => '2020',
        'numberOfEmployees' => '50-100',
        'industry' => 'Technology Services',
        'serviceArea' => [
            '@type' => 'Place',
            'name' => 'Africa'
        ],
        'makesOffer' => [
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Enterprise Software Development',
                    'category' => 'Software Development',
                    'description' => 'Custom enterprise applications with AI-powered features'
                ]
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Fintech Solutions',
                    'category' => 'Financial Technology',
                    'description' => 'Payment processing, digital banking, and mobile money integration'
                ]
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Mobile App Development',
                    'category' => 'Mobile Development',
                    'description' => 'Native iOS/Android and cross-platform applications'
                ]
            ]
        ]
    ],
    'breadcrumb' => [
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => url('/')
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@section('content')

<!-- Welcome Modal for First-Time Visitors -->
@include('components.welcome-modal')

<!-- HERO SECTION -->
<section class="relative min-h-screen overflow-hidden bg-gray-50">
  <!-- Background Elements -->
  <div class="absolute inset-0 bg-gradient-to-br from-white via-gray-50 to-cyan-50 animate-gradient-x"></div>
  
  <div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">
    <!-- Top Hero Content -->
    <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16 items-center mb-16 sm:mb-20 lg:mb-24">
      <!-- Left Column - Content -->
      <div class="order-2 lg:order-1 fade-in-up">
        <div class="mb-8">
          <span class="inline-flex items-center gap-2 text-teal-600 font-semibold text-sm uppercase tracking-wide mb-6 slide-in-left bg-teal-50 px-4 py-2 rounded-full" style="transition-delay: 100ms;">
            <div class="w-2 h-2 bg-teal-500 rounded-full animate-pulse"></div>
            ASCEND STRATUS
          </span>
          <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-gray-900 mb-8 leading-[1.1] fade-in-scale" style="transition-delay: 200ms;">
            Next-gen software
            <span class="bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 bg-clip-text text-transparent">for ambitious</span>
            <span class="block">African businesses.</span>
          </h1>
        </div>
        
        <p class="text-lg sm:text-xl lg:text-2xl text-gray-600 mb-10 leading-relaxed max-w-2xl slide-in-left" style="transition-delay: 300ms;">
          We are a full-service digital transformation partner, helping you build and scale your business with cutting-edge technology.
        </p>
        
        <!-- Trust Indicators -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-10 slide-in-left" style="transition-delay: 350ms;">
          <div class="flex items-center gap-3 bg-white/80 backdrop-blur-sm rounded-xl px-4 py-3 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
            <div class="w-8 h-8 bg-teal-100 rounded-lg flex items-center justify-center">
              <svg class="w-4 h-4 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <span class="text-sm font-medium text-gray-700">ISO 27001 Certified</span>
          </div>
          <div class="flex items-center gap-3 bg-white/80 backdrop-blur-sm rounded-xl px-4 py-3 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
            <div class="w-8 h-8 bg-teal-100 rounded-lg flex items-center justify-center">
              <svg class="w-4 h-4 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <span class="text-sm font-medium text-gray-700">99.9% Uptime SLA</span>
          </div>
          <div class="flex items-center gap-3 bg-white/80 backdrop-blur-sm rounded-xl px-4 py-3 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
            <div class="w-8 h-8 bg-teal-100 rounded-lg flex items-center justify-center">
              <svg class="w-4 h-4 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <span class="text-sm font-medium text-gray-700">24/7 Support</span>
          </div>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 items-stretch sm:items-center mb-12 fade-in-up" style="transition-delay: 400ms;">
          <a href='/contact' class="group relative bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl hover:shadow-teal-500/25 transition-all duration-500 hover:scale-105 btn-animate overflow-hidden w-full sm:w-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-teal-700 via-cyan-700 to-blue-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <span class="relative flex items-center justify-center gap-2">
              Get Started Today
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </span>
          </a>
          <a href='/services' class="group border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-2xl text-lg font-semibold hover:border-teal-600 hover:text-teal-600 hover:bg-teal-50 transition-all duration-300 btn-animate backdrop-blur-sm bg-white/50 w-full sm:w-auto">
            <span class="flex items-center justify-center gap-2">
              <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
              </svg>
              View Our Work
            </span>
          </a>
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
        <div class="relative group">
          <!-- Main Image -->
          <div class="relative overflow-hidden rounded-3xl shadow-2xl">
            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=1920&q=80" 
                 alt="African technology professionals in modern corporate office developing innovative software solutions" 
                 loading="eager"
                 class="w-full h-[350px] sm:h-[450px] lg:h-[550px] object-cover group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-br from-teal-600/20 via-cyan-600/10 to-blue-600/20 group-hover:opacity-75 transition-opacity duration-500"></div>
          </div>
          
          <!-- Floating Elements -->
          <div class="absolute -top-4 -right-4 w-24 h-24 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-2xl shadow-lg flex items-center justify-center floating" style="animation-delay: 1s;">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
          
          <div class="absolute -bottom-6 -left-6 w-32 h-20 bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-4 floating" style="animation-delay: 2s;">
            <div class="text-2xl font-bold text-gray-900">3+</div>
            <div class="text-xs text-gray-600 font-medium">Years Experience</div>
          </div>
          
          <!-- Background Decoration -->
          <div class="absolute -z-10 top-8 right-8 w-72 h-72 bg-gradient-to-br from-teal-200/30 to-cyan-200/30 rounded-full blur-2xl"></div>
        </div>
      </div>
    </div>

    <!-- What We Do Section -->
    <div class="py-16 lg:py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in-up">
          <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
            Our Process
          </span>
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">How We Bring Your Ideas to Life</h2>
          <div class="w-24 h-1 bg-gradient-to-r from-teal-600 to-cyan-600 mx-auto mb-6"></div>
          <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
            We follow a proven, transparent process to ensure your project is a success from start to finish. Our collaborative approach keeps you in the loop every step of the way.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
          <!-- Connecting Lines -->
          <div class="hidden lg:block absolute top-1/2 -translate-y-1/2 left-0 w-full h-px bg-gray-200"></div>
          <div class="hidden lg:block absolute top-1/2 -translate-y-1/2 left-0 w-full">
            <div class="flex justify-around">
              <div class="w-4 h-4 bg-teal-600 rounded-full ring-8 ring-white"></div>
              <div class="w-4 h-4 bg-teal-600 rounded-full ring-8 ring-white"></div>
              <div class="w-4 h-4 bg-teal-600 rounded-full ring-8 ring-white"></div>
              <div class="w-4 h-4 bg-teal-600 rounded-full ring-8 ring-white"></div>
            </div>
          </div>

          <!-- Step 1: Discovery & Strategy -->
          <div class="text-center fade-in-up z-10" style="transition-delay: 100ms;">
            <div class="w-20 h-20 mx-auto mb-6 bg-teal-100 rounded-full flex items-center justify-center ring-4 ring-white">
              <span class="text-3xl font-bold text-teal-600">1</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Discovery & Strategy</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
              We start by understanding your vision, goals, and challenges. This phase includes market research, requirement gathering, and creating a detailed project roadmap.
            </p>
          </div>

          <!-- Step 2: Design & Prototyping -->
          <div class="text-center fade-in-up z-10" style="transition-delay: 200ms;">
            <div class="w-20 h-20 mx-auto mb-6 bg-cyan-100 rounded-full flex items-center justify-center ring-4 ring-white">
              <span class="text-3xl font-bold text-cyan-600">2</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Design & Prototyping</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
              Our team creates intuitive UI/UX designs and interactive prototypes. We focus on user-centric design to ensure a seamless and engaging experience for your audience.
            </p>
          </div>

          <!-- Step 3: Development & Testing -->
          <div class="text-center fade-in-up z-10" style="transition-delay: 300ms;">
            <div class="w-20 h-20 mx-auto mb-6 bg-blue-100 rounded-full flex items-center justify-center ring-4 ring-white">
              <span class="text-3xl font-bold text-blue-600">3</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Development & Testing</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
              Using agile methodologies, our developers write clean, scalable code. Rigorous testing is performed at every stage to ensure a bug-free, high-performance product.
            </p>
          </div>

          <!-- Step 4: Deployment & Support -->
          <div class="text-center fade-in-up z-10" style="transition-delay: 400ms;">
            <div class="w-20 h-20 mx-auto mb-6 bg-indigo-100 rounded-full flex items-center justify-center ring-4 ring-white">
              <span class="text-3xl font-bold text-indigo-600">4</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Deployment & Support</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
              We handle the deployment process and provide ongoing support and maintenance to ensure your application runs smoothly and continues to evolve with your business.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Enhanced Statistics Section -->
    <div class="relative bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 rounded-3xl p-8 sm:p-12 lg:p-16 mb-16 lg:mb-24 text-white overflow-hidden">
      <!-- Background Pattern -->
      <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full">
          <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <defs>
              <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
              </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#grid)" />
          </svg>
        </div>
      </div>
      
      <div class="relative z-10">
        <div class="text-center mb-16 fade-in-up">
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">Delivering Results That Matter</h2>
          <p class="text-lg sm:text-xl text-cyan-100 max-w-3xl mx-auto">Our track record speaks for itself - trusted by businesses worldwide</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-5 gap-8 lg:gap-12">
          <!-- <div class="text-center fade-in-up" style="transition-delay: 100ms;">
            <div class="text-4xl lg:text-5xl font-bold mb-2 counter" data-target="12">0</div>
            <div class="text-base text-cyan-100">countries</div>
          </div> -->
          <div class="text-center fade-in-up" style="transition-delay: 200ms;">
            <div class="text-4xl lg:text-5xl font-bold mb-2 counter" data-target="3">0</div>
            <div class="text-base text-cyan-100">Year</div>
          </div>
          <div class="text-center fade-in-up" style="transition-delay: 300ms;">
            <div class="text-4xl lg:text-5xl font-bold mb-2"><span class="counter" data-target="98">0</span>%</div>
            <div class="text-base text-cyan-100">Satisfaction</div>
          </div>
          <div class="text-center fade-in-up" style="transition-delay: 400ms;">
            <div class="text-4xl lg:text-5xl font-bold mb-2"><span class="counter" data-target="30">0</span>+</div>
            <div class="text-base text-cyan-100">Projects</div>
          </div>
          <div class="text-center fade-in-up" style="transition-delay: 500ms;">
            <div class="text-4xl lg:text-5xl font-bold mb-2"><span class="counter" data-target="2">0</span></div>
            <div class="text-base text-cyan-100">Devs</div>
          </div>
        </div>
      </div>
    </div>

    <!-- About Us Section -->
    <div class="py-16 lg:py-24 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
          <!-- Left Column - Image -->
          <div class="relative fade-in-left">
            <div class="aspect-w-4 aspect-h-3 rounded-3xl overflow-hidden shadow-2xl">
              <img src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?auto=format&fit=crop&w=1920&q=80" 
                   alt="Team of diverse professionals collaborating in a modern office" 
                   class="w-full h-full object-cover">
            </div>
            <div class="absolute -bottom-8 -right-8 w-40 h-40 bg-gradient-to-br from-teal-100 to-cyan-100 rounded-full blur-2xl"></div>
          </div>

          <!-- Right Column - Content -->
          <div class="fade-in-up">
            <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
              Who We Are
            </span>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">Your Partner in Digital Innovation</h2>
            <p class="text-lg text-gray-600 mb-8 leading-relaxed">
              Ascend Stratus is a forward-thinking technology partner dedicated to helping African businesses thrive in the digital age. We combine deep industry expertise with cutting-edge technology to deliver solutions that drive growth, efficiency, and real-world impact.
            </p>
            
            <div class="grid sm:grid-cols-2 gap-8">
              <div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 flex items-center gap-3">
                  <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                  Our Mission
                </h3>
                <p class="text-gray-600 text-sm">
                  To empower businesses with innovative and scalable technology solutions that drive sustainable growth.
                </p>
              </div>
              <div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 flex items-center gap-3">
                  <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                  Our Vision
                </h3>
                <p class="text-gray-600 text-sm">
                  To be the leading catalyst for digital transformation across Africa, fostering a future of innovation and opportunity.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Showcase Section -->
    <div class="py-16 lg:py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in-up">
          <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
            Our Work
          </span>
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Innovative Solutions for Modern Challenges</h2>
          <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
            We've partnered with businesses across various industries to build exceptional digital products. Explore some of our success stories.
          </p>
        </div>

        <!-- Tabbed Showcase -->
        <div x-data="{ activeTab: 'fintech' }">
          <!-- Tabs -->
          <div class="flex justify-center mb-12 fade-in-up">
            <div class="bg-gray-100 p-2 rounded-full flex space-x-2">
              <button @click="activeTab = 'fintech'" :class="{ 'bg-teal-600 text-white': activeTab === 'fintech', 'text-gray-600': activeTab !== 'fintech' }" class="px-6 py-2 text-sm font-semibold rounded-full transition-colors duration-300">
                FinTech
              </button>
              <button @click="activeTab = 'logistics'" :class="{ 'bg-teal-600 text-white': activeTab === 'logistics', 'text-gray-600': activeTab !== 'logistics' }" class="px-6 py-2 text-sm font-semibold rounded-full transition-colors duration-300">
                Logistics
              </button>
              <button @click="activeTab = 'healthcare'" :class="{ 'bg-teal-600 text-white': activeTab === 'healthcare', 'text-gray-600': activeTab !== 'healthcare' }" class="px-6 py-2 text-sm font-semibold rounded-full transition-colors duration-300">
                Healthcare
              </button>
            </div>
          </div>

          <!-- Tab Content -->
          <div class="relative">
            <!-- FinTech Panel -->
            <div x-show="activeTab === 'fintech'" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100">
              <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="relative">
                  <div class="aspect-w-16 aspect-h-9 rounded-2xl overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1554224155-8d04421a1f3a?auto=format&fit=crop&w=1920&q=80" alt="Fintech application dashboard" class="w-full h-full object-cover">
                  </div>
                </div>
                <div>
                  <h3 class="text-2xl font-bold text-gray-900 mb-4">Digital Banking Platform</h3>
                  <p class="text-gray-600 mb-6">
                    A comprehensive digital banking solution with mobile payments, P2P transfers, and budgeting tools. We integrated with M-Pesa for seamless transactions, boosting user adoption by 60%.
                  </p>
                  <div class="flex flex-wrap gap-3 mb-6">
                    <span class="bg-teal-100 text-teal-700 text-xs font-medium px-3 py-1 rounded-full">Laravel</span>
                    <span class="bg-cyan-100 text-cyan-700 text-xs font-medium px-3 py-1 rounded-full">React Native</span>
                    <span class="bg-blue-100 text-blue-700 text-xs font-medium px-3 py-1 rounded-full">M-Pesa API</span>
                  </div>
                  <a href="#" class="text-teal-600 font-semibold hover:underline">View Case Study &rarr;</a>
                </div>
              </div>
            </div>

            <!-- Logistics Panel -->
            <div x-show="activeTab === 'logistics'" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100">
              <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="relative">
                  <div class="aspect-w-16 aspect-h-9 rounded-2xl overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1586528116311-0692421b3a9f?auto=format&fit=crop&w=1920&q=80" alt="Logistics and supply chain management" class="w-full h-full object-cover">
                  </div>
                </div>
                <div>
                  <h3 class="text-2xl font-bold text-gray-900 mb-4">LogiFlow Supply Chain</h3>
                  <p class="text-gray-600 mb-6">
                    An end-to-end logistics platform for real-time tracking, fleet management, and route optimization. Reduced delivery times by 25% and improved operational efficiency.
                  </p>
                  <div class="flex flex-wrap gap-3 mb-6">
                    <span class="bg-teal-100 text-teal-700 text-xs font-medium px-3 py-1 rounded-full">Node.js</span>
                    <span class="bg-cyan-100 text-cyan-700 text-xs font-medium px-3 py-1 rounded-full">Vue.js</span>
                    <span class="bg-blue-100 text-blue-700 text-xs font-medium px-3 py-1 rounded-full">Google Maps API</span>
                  </div>
                  <a href="#" class="text-teal-600 font-semibold hover:underline">View Case Study &rarr;</a>
                </div>
              </div>
            </div>

            <!-- Healthcare Panel -->
            <div x-show="activeTab === 'healthcare'" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100">
              <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="relative">
                  <div class="aspect-w-16 aspect-h-9 rounded-2xl overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba9996a?auto=format&fit=crop&w=1920&q=80" alt="Healthcare technology" class="w-full h-full object-cover">
                  </div>
                </div>
                <div>
                  <h3 class="text-2xl font-bold text-gray-900 mb-4">Telemedicine Platform</h3>
                  <p class="text-gray-600 mb-6">
                    A secure telemedicine app connecting patients with doctors for virtual consultations. Features include video calls, e-prescriptions, and electronic health records.
                  </p>
                  <div class="flex flex-wrap gap-3 mb-6">
                    <span class="bg-teal-100 text-teal-700 text-xs font-medium px-3 py-1 rounded-full">Python (Django)</span>
                    <span class="bg-cyan-100 text-cyan-700 text-xs font-medium px-3 py-1 rounded-full">Flutter</span>
                    <span class="bg-blue-100 text-blue-700 text-xs font-medium px-3 py-1 rounded-full">WebRTC</span>
                  </div>
                  <a href="#" class="text-teal-600 font-semibold hover:underline">View Case Study &rarr;</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <!-- Testimonials Section -->
    <div class="py-16 lg:py-24 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in-up">
          <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
            Testimonials
          </span>
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Trusted by Industry Leaders</h2>
          <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
            We're proud to have partnered with amazing companies and delivered outstanding results. Here's what they have to say about us.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Testimonial 1 -->
          <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 card-hover fade-in-up" style="transition-delay: 100ms;">
            <div class="flex items-center mb-6">
              <img class="w-16 h-16 rounded-full mr-4 object-cover" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Sarah Wairimu">
              <div>
                <div class="font-semibold text-gray-900">Sarah Wairimu</div>
                <div class="text-sm text-gray-600">Operations Director, MedTech Solutions</div>
              </div>
            </div>
            <blockquote class="text-gray-700 leading-relaxed">
              "Ascend Stratus delivered a custom mobile app that streamlined our patient management system. Their expertise resulted in a 40% increase in operational efficiency."
            </blockquote>
          </div>

          <!-- Testimonial 2 -->
          <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 card-hover fade-in-up" style="transition-delay: 200ms;">
            <div class="flex items-center mb-6">
              <img class="w-16 h-16 rounded-full mr-4 object-cover" src="https://randomuser.me/api/portraits/men/75.jpg" alt="John Omondi">
              <div>
                <div class="font-semibold text-gray-900">John Omondi</div>
                <div class="text-sm text-gray-600">CEO, KenyaFresh Logistics</div>
              </div>
            </div>
            <blockquote class="text-gray-700 leading-relaxed">
              "The logistics platform they built for us has been a game-changer. Real-time tracking and route optimization have cut our costs by 15%. Highly recommended!"
            </blockquote>
          </div>

          <!-- Testimonial 3 -->
          <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 card-hover fade-in-up" style="transition-delay: 300ms;">
            <div class="flex items-center mb-6">
              <img class="w-16 h-16 rounded-full mr-4 object-cover" src="https://randomuser.me/api/portraits/women/85.jpg" alt="Amina Yusuf">
              <div>
                <div class="font-semibold text-gray-900">Amina Yusuf</div>
                <div class="text-sm text-gray-600">Founder, AgriConnect</div>
              </div>
            </div>
            <blockquote class="text-gray-700 leading-relaxed">
              "Working with Ascend Stratus was a fantastic experience. They understood our vision for AgriConnect and delivered a robust platform that connects farmers to markets."
            </blockquote>
          </div>
        </div>
      </div>
    </div>

    <!-- Technology Stack Section -->
    <div class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
                    Our Tech Stack
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Modern Technologies for Powerful Solutions</h2>
                <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    We leverage a modern, battle-tested technology stack to build reliable, scalable, and high-performance applications that meet the demands of today's digital landscape.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <!-- Frontend -->
                <div class="text-center fade-in-up" style="transition-delay: 100ms;">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                        <img src="https://cdn.svgporn.com/logos/react.svg" alt="React" class="h-12">
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">React</h3>
                </div>
                <!-- Backend -->
                <div class="text-center fade-in-up" style="transition-delay: 200ms;">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                        <img src="https://cdn.svgporn.com/logos/laravel.svg" alt="Laravel" class="h-12">
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Laravel</h3>
                </div>
                <!-- Mobile -->
                <div class="text-center fade-in-up" style="transition-delay: 300ms;">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                        <img src="https://cdn.svgporn.com/logos/flutter.svg" alt="Flutter" class="h-12">
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Flutter</h3>
                </div>
                <!-- Database -->
                <div class="text-center fade-in-up" style="transition-delay: 400ms;">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                        <img src="https://cdn.svgporn.com/logos/mysql.svg" alt="MySQL" class="h-12">
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">MySQL</h3>
                </div>
                <!-- Cloud -->
                <div class="text-center fade-in-up" style="transition-delay: 500ms;">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                        <img src="https://cdn.svgporn.com/logos/aws.svg" alt="AWS" class="h-12">
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">AWS</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section -->
    <div class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
                    From the Blog
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Insights and Innovations</h2>
                <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Stay updated with the latest trends in technology, software development, and digital transformation from our team of experts.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover fade-in-up" style="transition-delay: 100ms;">
                    <a href="#" class="block">
                        <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1920&q=80" alt="Blog post image on data analytics">
                    </a>
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">July 15, 2024</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3"><a href="#" class="hover:text-teal-600 transition-colors">The Future of FinTech in Africa</a></h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Exploring the rapid growth of financial technology across the continent and what it means for businesses and consumers.
                        </p>
                        <a href="#" class="text-teal-600 font-semibold hover:underline">Read More &rarr;</a>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover fade-in-up" style="transition-delay: 200ms;">
                    <a href="#" class="block">
                        <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1920&q=80" alt="Blog post image on collaboration">
                    </a>
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">June 28, 2024</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3"><a href="#" class="hover:text-teal-600 transition-colors">Scaling Your Business with Cloud-Native Solutions</a></h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            A deep dive into how cloud-native architecture can provide the scalability and resilience your business needs to grow.
                        </p>
                        <a href="#" class="text-teal-600 font-semibold hover:underline">Read More &rarr;</a>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover fade-in-up" style="transition-delay: 300ms;">
                    <a href="#" class="block">
                        <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1920&q=80" alt="Blog post image on teamwork">
                    </a>
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">June 12, 2024</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3"><a href="#" class="hover:text-teal-600 transition-colors">The Importance of User-Centric Design</a></h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Why putting the user first is the key to building successful and engaging digital products that stand the test of time.
                        </p>
                        <a href="#" class="text-teal-600 font-semibold hover:underline">Read More &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Background Elements -->
      <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-teal-400/10 to-cyan-400/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-blue-400/10 to-teal-400/10 rounded-full blur-3xl"></div>
      </div>

      <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16 fade-in-up">
          <span class="inline-flex items-center gap-2 text-teal-600 font-semibold text-sm uppercase tracking-wide mb-6 bg-teal-50 px-4 py-2 rounded-full">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            Our Expertise
          </span>
          <h2 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
            Transforming Business Through 
            <span class="bg-gradient-to-r from-teal-600 to-cyan-600 bg-clip-text text-transparent">Technology</span>
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
            We deliver cutting-edge solutions that drive growth, efficiency, and innovation across Africa's most dynamic industries.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
          <!-- Enterprise Software -->
          <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-teal-200 fade-in-up relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-teal-50 to-cyan-50 rounded-full -translate-y-16 translate-x-16 group-hover:scale-150 transition-transform duration-500"></div>
            <div class="relative z-10">
              <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                </svg>
              </div>
              <span class="inline-block bg-gradient-to-r from-teal-500 to-cyan-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4">FLAGSHIP</span>
              <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-teal-600 transition-colors">Enterprise Software</h3>
              <p class="text-gray-600 mb-6 leading-relaxed">
                Comprehensive fintech and SaaS solutions including payment processing, digital banking, and AI-powered business intelligence designed for African markets.
              </p>
              <a href="{{ url('/services/enterprise-software') }}" class="inline-flex items-center text-teal-600 font-semibold hover:text-teal-700 transition-colors group">
                Explore Solutions
                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
              </a>
            </div>
          </div>

          <!-- Mobile App Development -->
          <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-teal-200 fade-in-up relative overflow-hidden" style="transition-delay: 100ms;">
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-emerald-50 to-green-50 rounded-full -translate-y-16 translate-x-16 group-hover:scale-150 transition-transform duration-500"></div>
            <div class="relative z-10">
              <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-green-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a1 1 0 001-1V4a1 1 0 00-1-1H8a1 1 0 00-1 1v16a1 1 0 001 1z"/>
                </svg>
              </div>
              <span class="inline-block bg-gradient-to-r from-emerald-500 to-green-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4">POPULAR</span>
              <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-emerald-600 transition-colors">Mobile App Development</h3>
              <p class="text-gray-600 mb-6 leading-relaxed">
                Native iOS/Android and cross-platform applications with M-Pesa integration, offline capabilities, and multi-language support for African markets.
              </p>
              <a href="{{ url('/services/mobile-app-development') }}" class="inline-flex items-center text-emerald-600 font-semibold hover:text-emerald-700 transition-colors group">
                View Portfolio
                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
              </a>
            </div>
          </div>

          <!-- Custom E-Commerce -->
          <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-teal-200 fade-in-up relative overflow-hidden" style="transition-delay: 200ms;">
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-50 to-indigo-50 rounded-full -translate-y-16 translate-x-16 group-hover:scale-150 transition-transform duration-500"></div>
            <div class="relative z-10">
              <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
              </div>
              <span class="inline-block bg-gradient-to-r from-purple-500 to-indigo-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4">TRENDING</span>
              <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-purple-600 transition-colors">Custom E-Commerce</h3>
              <p class="text-gray-600 mb-6 leading-relaxed">
                Tailored online stores and marketplace platforms with African payment integration, mobile-first design, and multi-currency support.
              </p>
              <a href="{{ url('/services/dev-team-as-a-service') }}" class="inline-flex items-center text-purple-600 font-semibold hover:text-purple-700 transition-colors group">
                Get Started
                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
              </a>
            </div>
          </div>

          <!-- Digital Transformation -->
          <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-teal-200 fade-in-up relative overflow-hidden" style="transition-delay: 300ms;">
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-50 to-cyan-50 rounded-full -translate-y-16 translate-x-16 group-hover:scale-150 transition-transform duration-500"></div>
            <div class="relative z-10">
              <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
              </div>
              <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors">Digital Transformation</h3>
              <p class="text-gray-600 mb-6 leading-relaxed">
                Comprehensive modernization of business processes with AI, machine learning, cloud computing, and data analytics solutions.
              </p>
              <a href="{{ url('/services/digital-transformation') }}" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors group">
                Learn More
                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
              </a>
            </div>
          </div>

          <!-- Web Applications -->
          <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-teal-200 fade-in-up relative overflow-hidden" style="transition-delay: 400ms;">
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-orange-50 to-red-50 rounded-full -translate-y-16 translate-x-16 group-hover:scale-150 transition-transform duration-500"></div>
            <div class="relative z-10">
              <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
              </div>
              <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-orange-600 transition-colors">Web Applications</h3>
              <p class="text-gray-600 mb-6 leading-relaxed">
                High-performance web applications using Laravel, modern JavaScript frameworks, and cloud-native architectures for scalability.
              </p>
              <a href="{{ url('/services/web-applications') }}" class="inline-flex items-center text-orange-600 font-semibold hover:text-orange-700 transition-colors group">
                View Projects
                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
              </a>
            </div>
          </div>

          <!-- Consulting Services -->
          <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-teal-200 fade-in-up relative overflow-hidden" style="transition-delay: 500ms;">
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-gray-50 to-slate-50 rounded-full -translate-y-16 translate-x-16 group-hover:scale-150 transition-transform duration-500"></div>
            <div class="relative z-10">
              <div class="w-16 h-16 bg-gradient-to-br from-gray-600 to-slate-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
              </div>
              <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-gray-600 transition-colors">Tech Consulting</h3>
              <p class="text-gray-600 mb-6 leading-relaxed">
                Strategic technology consulting, architecture design, and dedicated development teams to accelerate your digital initiatives.
              </p>
              <a href="{{ route('contact') }}" class="inline-flex items-center text-gray-600 font-semibold hover:text-gray-700 transition-colors group">
                Get Consultation
                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
              </a>
            </div>
          </div>
      </div>

        <!-- CTA Section -->
        <div class="text-center fade-in-up">
          <div class="bg-gradient-to-r from-teal-600 to-cyan-600 rounded-3xl p-12 text-white">
            <h3 class="text-3xl font-bold mb-4">Ready to Transform Your Business?</h3>
            <p class="text-xl text-teal-100 mb-8 max-w-2xl mx-auto">
              Join hundreds of successful African businesses that have accelerated their growth with our solutions.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
              <a href="{{ route('contact') }}" class="bg-white text-teal-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-50 transition-all duration-300 hover:scale-105 shadow-lg">
                Start Your Project
              </a>
              <a href="{{ url('/portfolio') }}" class="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold hover:bg-white hover:text-teal-600 transition-all duration-300">
                View Our Work
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Technology Stack Section -->
    <div class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
                    Our Tech Stack
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Modern Technologies for Powerful Solutions</h2>
                <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    We leverage a modern, battle-tested technology stack to build reliable, scalable, and high-performance applications that meet the demands of today's digital landscape.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <!-- Frontend -->
                <div class="text-center fade-in-up" style="transition-delay: 100ms;">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                        <img src="https://cdn.svgporn.com/logos/react.svg" alt="React" class="h-12">
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">React</h3>
                </div>
                <!-- Backend -->
                <div class="text-center fade-in-up" style="transition-delay: 200ms;">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                        <img src="https://cdn.svgporn.com/logos/laravel.svg" alt="Laravel" class="h-12">
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Laravel</h3>
                </div>
                <!-- Mobile -->
                <div class="text-center fade-in-up" style="transition-delay: 300ms;">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                        <img src="https://cdn.svgporn.com/logos/flutter.svg" alt="Flutter" class="h-12">
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Flutter</h3>
                </div>
                <!-- Database -->
                <div class="text-center fade-in-up" style="transition-delay: 400ms;">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                        <img src="https://cdn.svgporn.com/logos/mysql.svg" alt="MySQL" class="h-12">
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">MySQL</h3>
                </div>
                <!-- Cloud -->
                <div class="text-center fade-in-up" style="transition-delay: 500ms;">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                        <img src="https://cdn.svgporn.com/logos/aws.svg" alt="AWS" class="h-12">
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">AWS</h3>
                </div>
            </div>
        </div>
    </div>



        <!-- PROFESSIONAL CTA SECTION -->
        <section class="py-20 md:py-28 bg-gradient-to-br from-slate-900 to-gray-800 text-white">
            <div class="max-w-4xl mx-auto text-center px-8">
                <div class="fade-in-up">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Transform Your Business?</h2>
                    <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                        Join hundreds of successful companies that have accelerated their growth with our enterprise solutions.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12">
                        <a href="{{ route('contact') }}" class="bg-gradient-to-r from-teal-500 to-cyan-500 text-white px-10 py-4 rounded-lg text-lg font-semibold hover:from-teal-600 hover:to-cyan-600 transition-all duration-300 hover:scale-105 shadow-xl">
                            Start Your Project
                        </a>
                        <a href="{{ route('contact') }}" class="border-2 border-white text-white px-10 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-gray-900 transition-all duration-300">
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
      

    </main>

    <!-- Modern Footer -->
    

    

@endsection
