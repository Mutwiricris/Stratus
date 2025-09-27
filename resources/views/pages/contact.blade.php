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
          <form class="space-y-6">
            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label for="first_name" class="block text-sm font-semibold text-gray-900 mb-3">First Name</label>
                <input type="text" id="first_name" name="first_name" class="w-full px-4 py-4 border border-gray-300 rounded-2xl focus:ring-2 focus:ring-teal-600 focus:border-transparent transition-all duration-300 hover:border-teal-300" placeholder="John">
              </div>
              <div>
                <label for="last_name" class="block text-sm font-semibold text-gray-900 mb-3">Last Name</label>
                <input type="text" id="last_name" name="last_name" class="w-full px-4 py-4 border border-gray-300 rounded-2xl focus:ring-2 focus:ring-teal-600 focus:border-transparent transition-all duration-300 hover:border-teal-300" placeholder="Doe">
              </div>
            </div>
            
            <div>
              <label for="email" class="block text-sm font-semibold text-gray-900 mb-3">Email Address</label>
              <input type="email" id="email" name="email" class="w-full px-4 py-4 border border-gray-300 rounded-2xl focus:ring-2 focus:ring-teal-600 focus:border-transparent transition-all duration-300 hover:border-teal-300" placeholder="john@company.com">
            </div>
            
            <div>
              <label for="company" class="block text-sm font-semibold text-gray-900 mb-3">Company</label>
              <input type="text" id="company" name="company" class="w-full px-4 py-4 border border-gray-300 rounded-2xl focus:ring-2 focus:ring-teal-600 focus:border-transparent transition-all duration-300 hover:border-teal-300" placeholder="Your Company">
            </div>
            
            <div>
              <label for="inquiry_type" class="block text-sm font-semibold text-gray-900 mb-3">Inquiry Type</label>
              <select id="inquiry_type" name="inquiry_type" class="w-full px-4 py-4 border border-gray-300 rounded-2xl focus:ring-2 focus:ring-teal-600 focus:border-transparent transition-all duration-300 hover:border-teal-300">
                <option value="">Select an option</option>
                <option value="partnership">Partnership Opportunity</option>
                <option value="platform">Platform Demo</option>
                <option value="venture">Venture Collaboration</option>
                <option value="careers">Career Opportunities</option>
                <option value="general">General Inquiry</option>
              </select>
            </div>
            
            <div>
              <label for="message" class="block text-sm font-semibold text-gray-900 mb-3">Message</label>
              <textarea id="message" name="message" rows="6" class="w-full px-4 py-4 border border-gray-300 rounded-2xl focus:ring-2 focus:ring-teal-600 focus:border-transparent transition-all duration-300 hover:border-teal-300 resize-none" placeholder="Tell us about your project, challenges, or how we can help..."></textarea>
            </div>
            
            <button type="submit" class="group w-full bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl hover:shadow-teal-500/25 transition-all duration-500 hover:scale-105 btn-animate overflow-hidden">
              <div class="absolute inset-0 bg-gradient-to-r from-teal-700 via-cyan-700 to-blue-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              <span class="relative flex items-center justify-center gap-2">
                Send Message
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                </svg>
              </span>
            </button>
          </form>
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
                <h4 class="font-semibold text-lg mb-2">Headquarters</h4>
                <p class="text-cyan-100 leading-relaxed">
                  Lowerhill<br>
                  Nairobi, Kenya
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
              <div>
                <h4 class="font-semibold text-lg mb-2">Business Hours</h4>
                <p class="text-cyan-100 leading-relaxed">
                  Monday - Friday: 9:00 AM - 6:00 PM PST<br>
                  Weekend: By appointment
                </p>
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
<section id="offices" class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Global Presence</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Our offices around the world, supporting ventures and partnerships globally</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Nairobi Office -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up">
        <div class="w-16 h-16 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Nairobi Office</h3>
        <p class="text-gray-600 mb-4 leading-relaxed">Our East African hub, driving innovation and partnerships across the region.</p>
        <div class="text-sm text-gray-500">
          <p>Lowerhill</p>
          <p>Nairobi, Kenya</p>
          <p class="mt-2">+254110407501</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-turquoise-50/30 px-8">
  <div class="max-w-4xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Frequently Asked Questions</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Common questions about partnerships, our platform, and working with Ascend Stratus</p>
    </div>
    
    <div class="space-y-6">
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up">
        <h3 class=" text-xl font-bold text-dark-turquoise mb-4">What types of partnerships does Ascend Stratus pursue?</h3>
        <p class="text-gray-600 leading-relaxed">We partner with companies across logistics, fintech, agritech, and energy sectors. We're particularly interested in ventures that can benefit from our unified platform and are ready to scale their operations through technology-driven transformation.</p>
      </div>
      
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up" style="transition-delay: 100ms;">
        <h3 class=" text-xl font-bold text-dark-turquoise mb-4">How does the Ascend Stratus platform work?</h3>
        <p class="text-gray-600 leading-relaxed">Our platform provides a unified infrastructure that combines AI, machine learning, IoT integration, and advanced analytics. It's designed to be industry-agnostic while providing specialized modules for different sectors, enabling rapid deployment and scalability.</p>
      </div>
      
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up" style="transition-delay: 200ms;">
        <h3 class=" text-xl font-bold text-dark-turquoise mb-4">What is the typical timeline for partnership development?</h3>
        <p class="text-gray-600 leading-relaxed">Partnership timelines vary based on complexity and scope. Initial discussions and platform demos typically occur within 2-4 weeks. Full partnership development and platform integration can range from 3-12 months depending on the venture's specific requirements.</p>
      </div>
      
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up" style="transition-delay: 300ms;">
        <h3 class=" text-xl font-bold text-dark-turquoise mb-4">Do you provide ongoing support after partnership establishment?</h3>
        <p class="text-gray-600 leading-relaxed">Yes, we provide comprehensive ongoing support including technical assistance, strategic guidance, performance optimization, and access to our network of industry experts and additional partnership opportunities.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
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
<section class="py-24 md:py-32 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        Success Stories
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">What Our Clients Say</h2>
      <div class="w-24 h-1 bg-gradient-to-r from-teal-600 to-cyan-600 mx-auto mb-6"></div>
      <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Real feedback from companies we've helped transform</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Testimonial 1 -->
      <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 fade-in-up">
        <div class="flex items-center mb-6">
          <div class="flex text-yellow-400">
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
        <p class="text-gray-600 mb-6 leading-relaxed">"Ascend Stratus built our e-commerce platform with M-Pesa integration. Our online sales increased by 300% in just 6 months. Best investment we've made!"</p>
        <div class="flex items-center">
          <div class="w-12 h-12 bg-gradient-to-r from-teal-600 to-cyan-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
            MW
          </div>
          <div>
            <div class="font-semibold text-gray-900">Mary Wanjiku</div>
            <div class="text-sm text-gray-500">Founder, Nairobi Fashion Hub</div>
          </div>
        </div>
      </div>
      
      <!-- Testimonial 2 -->
      <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 fade-in-up" style="transition-delay: 100ms;">
        <div class="flex items-center mb-6">
          <div class="flex text-yellow-400">
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
        <p class="text-gray-600 mb-6 leading-relaxed">"They built our school management system with fee payment via M-Pesa. Parents can now pay fees easily and we track everything digitally. Amazing work!"</p>
        <div class="flex items-center">
          <div class="w-12 h-12 bg-gradient-to-r from-green-600 to-emerald-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
            JK
          </div>
          <div>
            <div class="font-semibold text-gray-900">James Kiprotich</div>
            <div class="text-sm text-gray-500">Principal, Mombasa Academy</div>
          </div>
        </div>
      </div>
      
      <!-- Testimonial 3 -->
      <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 fade-in-up" style="transition-delay: 200ms;">
        <div class="flex items-center mb-6">
          <div class="flex text-yellow-400">
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
        <p class="text-gray-600 mb-6 leading-relaxed">"Our logistics company needed a fleet management system. They delivered beyond expectations with real-time tracking and automated invoicing. Efficiency up 50%!"</p>
        <div class="flex items-center">
          <div class="w-12 h-12 bg-gradient-to-r from-purple-600 to-pink-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
            DO
          </div>
          <div>
            <div class="font-semibold text-gray-900">David Otieno</div>
            <div class="text-sm text-gray-500">MD, Kisumu Transport Ltd</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-24 md:py-32 bg-gradient-to-br from-gray-50 to-teal-50/30 px-4 sm:px-6 lg:px-8">
  <div class="max-w-4xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        FAQ
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Frequently Asked Questions</h2>
      <div class="w-24 h-1 bg-gradient-to-r from-teal-600 to-cyan-600 mx-auto mb-6"></div>
      <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Get answers to common questions about our services and process</p>
    </div>
    
    <div class="space-y-6">
      <!-- FAQ Item 1 -->
      <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden fade-in-up">
        <button class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-300 focus:outline-none focus:bg-gray-50" onclick="toggleFAQ(this)">
          <h3 class="text-lg font-semibold text-gray-900 pr-4">How long does a typical software development project take?</h3>
          <svg class="w-6 h-6 text-teal-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="px-8 pb-6 hidden">
          <p class="text-gray-600 leading-relaxed">Project timelines vary based on complexity and scope. Simple applications typically take 2-3 months, while complex enterprise solutions may require 6-12 months. We provide detailed timelines during our initial consultation and keep you updated throughout the development process.</p>
        </div>
      </div>
      
      <!-- FAQ Item 2 -->
      <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden fade-in-up" style="transition-delay: 100ms;">
        <button class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-300 focus:outline-none focus:bg-gray-50" onclick="toggleFAQ(this)">
          <h3 class="text-lg font-semibold text-gray-900 pr-4">What technologies do you specialize in?</h3>
          <svg class="w-6 h-6 text-teal-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="px-8 pb-6 hidden">
          <p class="text-gray-600 leading-relaxed">We work with modern technologies including React, Vue.js, Laravel, Node.js, Python, and cloud platforms like AWS and Azure. Our team stays current with the latest frameworks and tools to deliver cutting-edge solutions that scale with your business needs.</p>
        </div>
      </div>
      
      <!-- FAQ Item 3 -->
      <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden fade-in-up" style="transition-delay: 200ms;">
        <button class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-300 focus:outline-none focus:bg-gray-50" onclick="toggleFAQ(this)">
          <h3 class="text-lg font-semibold text-gray-900 pr-4">Do you provide ongoing support and maintenance?</h3>
          <svg class="w-6 h-6 text-teal-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="px-8 pb-6 hidden">
          <p class="text-gray-600 leading-relaxed">Yes, we offer comprehensive support packages including 24/7 monitoring, regular updates, security patches, and feature enhancements. Our support team ensures your software continues to perform optimally and evolves with your business requirements.</p>
        </div>
      </div>
      
      <!-- FAQ Item 4 -->
      <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden fade-in-up" style="transition-delay: 300ms;">
        <button class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-300 focus:outline-none focus:bg-gray-50" onclick="toggleFAQ(this)">
          <h3 class="text-lg font-semibold text-gray-900 pr-4">What is your development process like?</h3>
          <svg class="w-6 h-6 text-teal-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="px-8 pb-6 hidden">
          <p class="text-gray-600 leading-relaxed">We follow an agile methodology with regular sprints, continuous communication, and iterative development. You'll receive regular updates, participate in sprint reviews, and have the opportunity to provide feedback throughout the development cycle to ensure the final product meets your expectations.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Office Locations Section -->
<section class="py-24 md:py-32 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        Global Presence
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Our Offices Worldwide</h2>
      <div class="w-24 h-1 bg-gradient-to-r from-teal-600 to-cyan-600 mx-auto mb-6"></div>
      <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">With offices across multiple continents, we're always close to our clients</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Main Office - Nairobi -->
      <div class="bg-white rounded-2xl p-8 shadow-xl border-2 border-teal-200 hover:shadow-2xl transition-all duration-300 fade-in-up relative">
        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
          <span class="bg-gradient-to-r from-teal-600 to-cyan-600 text-white px-6 py-2 rounded-full text-sm font-semibold">Headquarters</span>
        </div>
        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-2xl flex items-center justify-center">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Nairobi, Kenya</h3>
        <div class="space-y-3 text-center">
          <p class="text-gray-600 flex items-center justify-center">
            <svg class="w-4 h-4 mr-2 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Westlands, Nairobi CBD
          </p>
          <p class="text-gray-600 flex items-center justify-center">
            <svg class="w-4 h-4 mr-2 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
            </svg>
            +254 700 123 456
          </p>
          <p class="text-gray-600 flex items-center justify-center">
            <svg class="w-4 h-4 mr-2 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            EAT (UTC+3)
          </p>
          <p class="text-gray-600 flex items-center justify-center">
            <svg class="w-4 h-4 mr-2 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            hello@ascendstratus.co.ke
          </p>
        </div>
      </div>
      
      <!-- Remote Services -->
      <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 fade-in-up" style="transition-delay: 100ms;">
        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-blue-500 to-purple-500 rounded-2xl flex items-center justify-center">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9m0 9c-5 0-9-4-9-9s4-9 9-9"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Global Remote Services</h3>
        <div class="space-y-3 text-center">
          <p class="text-gray-600 flex items-center justify-center">
            <svg class="w-4 h-4 mr-2 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Serving clients worldwide
          </p>
          <p class="text-gray-600 flex items-center justify-center">
            <svg class="w-4 h-4 mr-2 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            24/7 Development Support
          </p>
          <p class="text-gray-600 flex items-center justify-center">
            <svg class="w-4 h-4 mr-2 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
            English & Swahili Support
          </p>
          <p class="text-gray-600 flex items-center justify-center">
            <svg class="w-4 h-4 mr-2 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
            Fast African Time Zone Response
          </p>
        </div>
      </div>
      
      <!-- East Africa Hub -->
      <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">East Africa Tech Hub</h3>
        <div class="space-y-3 text-center">
          <p class="text-gray-600 flex items-center justify-center">
            <svg class="w-4 h-4 mr-2 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
            </svg>
            Leading Kenya's Digital Transformation
          </p>
          <p class="text-gray-600 flex items-center justify-center">
            <svg class="w-4 h-4 mr-2 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
            </svg>
            Competitive East African Rates
          </p>
          <p class="text-gray-600 flex items-center justify-center">
            <svg class="w-4 h-4 mr-2 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
            </svg>
            Serving Uganda, Tanzania, Rwanda
          </p>
          <p class="text-gray-600 flex items-center justify-center">
            <svg class="w-4 h-4 mr-2 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
            </svg>
            Innovation from Silicon Savannah
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Plans Section -->
<section class="py-24 md:py-32 bg-gradient-to-br from-gray-50 to-teal-50/30 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-4 py-2 rounded-full">
        Pricing Plans
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Choose Your Perfect Plan</h2>
      <div class="w-24 h-1 bg-gradient-to-r from-teal-600 to-cyan-600 mx-auto mb-6"></div>
      <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Flexible pricing options designed to scale with your business needs</p>
    </div>
    
    <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
      <!-- Starter Plan -->
      <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 fade-in-up">
        <div class="text-center mb-8">
          <h3 class="text-2xl font-bold text-gray-900 mb-2">Startup MVP</h3>
          <p class="text-gray-600 mb-6">Perfect for Kenyan startups</p>
          <div class="mb-6">
            <span class="text-4xl font-bold text-teal-600">KSh 150K</span>
            <span class="text-gray-500">/project</span>
          </div>
          <a href="#contact-form" class="w-full bg-teal-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-teal-700 transition-colors duration-300 inline-block">
            Get Started
          </a>
        </div>
        <ul class="space-y-4">
          <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-gray-600">MVP Web Application</span>
          </li>
          <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-gray-600">Laravel + React/Vue.js</span>
          </li>
          <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-gray-600">Mobile-first responsive design</span>
          </li>
          <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-gray-600">M-Pesa payment integration</span>
          </li>
          <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-gray-600">3 months free support</span>
          </li>
        </ul>
      </div>
      
      <!-- Professional Plan -->
      <div class="bg-white rounded-2xl p-8 shadow-xl border-2 border-teal-200 hover:shadow-2xl transition-all duration-300 fade-in-up relative" style="transition-delay: 100ms;">
        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
          <span class="bg-gradient-to-r from-teal-600 to-cyan-600 text-white px-6 py-2 rounded-full text-sm font-semibold">Most Popular</span>
        </div>
        <div class="text-center mb-8">
          <h3 class="text-2xl font-bold text-gray-900 mb-2">Business Pro</h3>
          <p class="text-gray-600 mb-6">Ideal for growing East African companies</p>
          <div class="mb-6">
            <span class="text-4xl font-bold text-teal-600">KSh 450K</span>
            <span class="text-gray-500">/project</span>
          </div>
          <a href="#contact-form" class="w-full bg-gradient-to-r from-teal-600 to-cyan-600 text-white px-6 py-3 rounded-lg font-semibold hover:shadow-lg transition-all duration-300 inline-block">
            Get Started
          </a>
        </div>
        <ul class="space-y-4">
          <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-gray-600">Full-stack web application</span>
          </li>
          <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-gray-600">User management & authentication</span>
          </li>
          <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-gray-600">MySQL database & admin panel</span>
          </li>
          <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-gray-600">REST API + Mobile app ready</span>
          </li>
          <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-gray-600">M-Pesa + Airtel Money integration</span>
          </li>
          <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-gray-600">6 months support & training</span>
          </li>
        </ul>
      </div>
      
      <!-- Enterprise Plan -->
      <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 fade-in-up" style="transition-delay: 200ms;">
        <div class="text-center mb-8">
          <h3 class="text-2xl font-bold text-gray-900 mb-2">Enterprise Scale</h3>
          <p class="text-gray-600 mb-6">For corporations & government</p>
          <div class="mb-6">
            <span class="text-4xl font-bold text-teal-600">KSh 1M+</span>
            <span class="text-gray-500">/custom quote</span>
          </div>
          <a href="#contact-form" class="w-full bg-gray-900 text-white px-6 py-3 rounded-lg font-semibold hover:bg-gray-800 transition-colors duration-300 inline-block">
            Schedule Consultation
          </a>
        </div>
        <ul class="space-y-4">
          <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-gray-600">Enterprise software solution</span>
          </li>
          <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-gray-600">Web + Mobile + Desktop apps</span>
          </li>
          <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-gray-600">Cloud hosting on AWS/Azure</span>
          </li>
          <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-gray-600">Dedicated development team</span>
          </li>
          <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-gray-600">12 months warranty & updates</span>
          </li>
          <li class="flex items-center">
            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-gray-600">24/7 priority support in Nairobi</span>
          </li>
        </ul>
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
