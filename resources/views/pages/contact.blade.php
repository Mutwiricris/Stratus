@extends('layouts.detail')

@section('title', 'Contact - Ascend Stratus')
@section('description', 'Get in touch with Ascend Stratus. Connect with our team to explore partnership opportunities and transformative solutions.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[70vh] flex items-center">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2069" alt="Contact" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-br from-dark-turquoise/90 via-turquoise-600/80 to-cyan-accent/70"></div>
  </div>
  <div class="relative z-10 w-full container px-6 sm:px-10 md:px-16 lg:px-24 xl:px-32 py-20">
    <div class="max-w-4xl">
      <div class="fade-in-up">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight font-heading">
          Let's Build the Future Together
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl leading-relaxed">
          Ready to transform your industry? Connect with our team to explore partnership opportunities, discuss your challenges, and discover how we can help you ascend to new heights.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
          <a href="#contact-form" class="bg-cyan-300 text-dark-turquoise px-6 sm:px-8 py-3 sm:py-4 rounded-lg text-base sm:text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
            Get in Touch
          </a>
          <a href="#offices" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
            Our Locations
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Methods -->
<section class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Connect With Us</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Multiple ways to reach our team and start your transformation journey</p>
    </div>
    
    <div class="grid md:grid-cols-3 gap-8 mb-16">
      <!-- General Inquiries -->
      <div class="bg-gradient-to-br from-turquoise-50 to-cyan-50 rounded-2xl p-8 text-center card-hover fade-in-up">
        <div class="w-16 h-16 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-2xl flex items-center justify-center mx-auto mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">General Inquiries</h3>
        <p class="text-gray-600 mb-6 leading-relaxed">Questions about our platform, services, or partnership opportunities</p>
        <a href="mailto:hello@ascendstratus.com" class="text-turquoise-600 hover:text-dark-turquoise font-semibold transition-colors">
          hello@ascendstratus.com
        </a>
      </div>
      
      <!-- Partnership -->
      <div class="bg-gradient-to-br from-turquoise-50 to-cyan-50 rounded-2xl p-8 text-center card-hover fade-in-up" style="transition-delay: 100ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-cyan-accent to-turquoise-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Partnerships</h3>
        <p class="text-gray-600 mb-6 leading-relaxed">Strategic partnerships, venture collaboration, and investment opportunities</p>
        <a href="mailto:partnerships@ascendstratus.com" class="text-turquoise-600 hover:text-dark-turquoise font-semibold transition-colors">
          partnerships@ascendstratus.com
        </a>
      </div>
      
      <!-- Careers -->
      <div class="bg-gradient-to-br from-turquoise-50 to-cyan-50 rounded-2xl p-8 text-center card-hover fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-turquoise-700 to-cyan-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Careers</h3>
        <p class="text-gray-600 mb-6 leading-relaxed">Join our team of world-class engineers, strategists, and innovators</p>
        <a href="mailto:careers@ascendstratus.com" class="text-turquoise-600 hover:text-dark-turquoise font-semibold transition-colors">
          careers@ascendstratus.com
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Contact Form -->
<section id="contact-form" class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-turquoise-50/30 px-8">
  <div class="max-w-4xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Send Us a Message</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Tell us about your project, challenges, or partnership interests</p>
    </div>
    
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden fade-in-up">
      <div class="grid lg:grid-cols-2 gap-0">
        <!-- Form -->
        <div class="p-8 lg:p-12">
          <form class="space-y-6">
            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label for="first_name" class="block text-sm font-semibold text-dark-turquoise mb-2">First Name</label>
                <input type="text" id="first_name" name="first_name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-turquoise-600 focus:border-transparent transition-colors" placeholder="John">
              </div>
              <div>
                <label for="last_name" class="block text-sm font-semibold text-dark-turquoise mb-2">Last Name</label>
                <input type="text" id="last_name" name="last_name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-turquoise-600 focus:border-transparent transition-colors" placeholder="Doe">
              </div>
            </div>
            
            <div>
              <label for="email" class="block text-sm font-semibold text-dark-turquoise mb-2">Email Address</label>
              <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-turquoise-600 focus:border-transparent transition-colors" placeholder="john@company.com">
            </div>
            
            <div>
              <label for="company" class="block text-sm font-semibold text-dark-turquoise mb-2">Company</label>
              <input type="text" id="company" name="company" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-turquoise-600 focus:border-transparent transition-colors" placeholder="Your Company">
            </div>
            
            <div>
              <label for="inquiry_type" class="block text-sm font-semibold text-dark-turquoise mb-2">Inquiry Type</label>
              <select id="inquiry_type" name="inquiry_type" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-turquoise-600 focus:border-transparent transition-colors">
                <option value="">Select an option</option>
                <option value="partnership">Partnership Opportunity</option>
                <option value="platform">Platform Demo</option>
                <option value="venture">Venture Collaboration</option>
                <option value="careers">Career Opportunities</option>
                <option value="general">General Inquiry</option>
              </select>
            </div>
            
            <div>
              <label for="message" class="block text-sm font-semibold text-dark-turquoise mb-2">Message</label>
              <textarea id="message" name="message" rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-turquoise-600 focus:border-transparent transition-colors resize-none" placeholder="Tell us about your project, challenges, or how we can help..."></textarea>
            </div>
            
            <button type="submit" class="w-full bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:shadow-xl transition-all">
              Send Message
            </button>
          </form>
        </div>
        
        <!-- Contact Info -->
        <div class="bg-gradient-to-br from-dark-turquoise to-turquoise-600 p-8 lg:p-12 text-white">
          <h3 class=" text-3xl font-bold mb-8">Get in Touch</h3>
          
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
@endsection
