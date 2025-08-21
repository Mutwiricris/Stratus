@extends('layouts.detail')

@section('title', 'Culture - Ascend Stratus')
@section('description', 'Discover the culture and values that drive Ascend Stratus - The Ascend Principle in action across our organization and partnerships.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[70vh] flex items-center">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1920&q=80" alt="Culture at Ascend Stratus" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-dark-turquoise/95 via-turquoise-800/90 to-dark-turquoise/85"></div>
  </div>
  <div class="relative z-10 w-full container px-6 sm:px-10 md:px-16 lg:px-24 xl:px-32 py-20">
    <div class="max-w-4xl">
      <div class="fade-in-up">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight font-heading">
          The Ascend Principle in Action
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl leading-relaxed">
          Our culture is built on transformative growth, innovation excellence, and the unwavering belief that together we can redefine what's possible in foundational industries.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
          <a href="#values" class="bg-cyan-300 text-dark-turquoise px-6 sm:px-8 py-3 sm:py-4 rounded-lg text-base sm:text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
            Our Values
          </a>
          <a href="#team-culture" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
            Team Culture
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Core Values Section -->
<section id="values" class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class="font-serif text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Our Core Values</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">The fundamental principles that guide our decisions, shape our culture, and drive our mission forward</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
      <div class="fade-in-up">
        <div class="bg-gradient-to-br from-turquoise-50 to-cyan-50 p-8 rounded-2xl border border-turquoise-100 card-hover h-full">
          <div class="w-16 h-16 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
          <h3 class="font-bold text-dark-turquoise text-xl mb-4">01. Innovation First</h3>
          <p class="text-gray-600 leading-relaxed">We pioneer breakthrough technologies that transform entire industries and create lasting value. Innovation isn't just what we do – it's who we are.</p>
        </div>
      </div>
      
      <div class="fade-in-up" style="transition-delay: 100ms;">
        <div class="bg-gradient-to-br from-turquoise-50 to-cyan-50 p-8 rounded-2xl border border-turquoise-100 card-hover h-full">
          <div class="w-16 h-16 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
          </div>
          <h3 class="font-bold text-dark-turquoise text-xl mb-4">02. Partnership Excellence</h3>
          <p class="text-gray-600 leading-relaxed">We build lasting relationships with our partners, ensuring mutual success and growth. Every partnership is a commitment to shared transformation.</p>
        </div>
      </div>
      
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="bg-gradient-to-br from-turquoise-50 to-cyan-50 p-8 rounded-2xl border border-turquoise-100 card-hover h-full">
          <div class="w-16 h-16 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"></path>
            </svg>
          </div>
          <h3 class="font-bold text-dark-turquoise text-xl mb-4">03. Transformative Growth</h3>
          <p class="text-gray-600 leading-relaxed">We commit to building new models that redefine what's possible in foundational industries. Growth that transforms, not just scales.</p>
        </div>
      </div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:px-16 lg:px-32">
      <div class="fade-in-up" style="transition-delay: 300ms;">
        <div class="bg-gradient-to-br from-turquoise-50 to-cyan-50 p-8 rounded-2xl border border-turquoise-100 card-hover h-full">
          <div class="w-16 h-16 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
            </svg>
          </div>
          <h3 class="font-bold text-dark-turquoise text-xl mb-4">04. Data-Driven Decisions</h3>
          <p class="text-gray-600 leading-relaxed">We leverage cross-venture intelligence and analytics to make informed strategic choices. Every decision is backed by insights, not assumptions.</p>
        </div>
      </div>
      
      <div class="fade-in-up" style="transition-delay: 400ms;">
        <div class="bg-gradient-to-br from-turquoise-50 to-cyan-50 p-8 rounded-2xl border border-turquoise-100 card-hover h-full">
          <div class="w-16 h-16 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <h3 class="font-bold text-dark-turquoise text-xl mb-4">05. Sustainable Impact</h3>
          <p class="text-gray-600 leading-relaxed">We create solutions that benefit businesses, communities, and the environment for generations. Impact that lasts, change that matters.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Team Culture Section -->
<section id="team-culture" class="py-20 md:py-28 bg-gradient-to-br from-dark-turquoise to-turquoise-700">
  <div class="max-w-7xl mx-auto px-8">
    <div class="text-center mb-16 fade-in-up">
      <h2 class="font-serif text-4xl md:text-5xl font-bold text-white mb-4">How We Work Together</h2>
      <p class="text-lg text-cyan-100 max-w-2xl mx-auto">Our collaborative approach fosters innovation, accelerates growth, and creates lasting impact</p>
    </div>
    
    <div class="grid lg:grid-cols-2 gap-16 items-center mb-20">
      <div class="fade-in-up">
        <h3 class="font-serif text-3xl md:text-4xl font-bold text-white mb-6">Collaborative Excellence</h3>
        <p class="text-lg text-cyan-100 mb-6 leading-relaxed">
          We believe that the best solutions emerge from diverse perspectives working in harmony. Our culture encourages open dialogue, creative thinking, and collective problem-solving.
        </p>
        <div class="space-y-4">
          <div class="flex items-start space-x-4">
            <div class="w-8 h-8 bg-cyan-300 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
              <svg class="w-4 h-4 text-dark-turquoise" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold text-cyan-300 mb-2">Cross-Functional Teams</h4>
              <p class="text-cyan-100">Diverse expertise working together on complex challenges</p>
            </div>
          </div>
          <div class="flex items-start space-x-4">
            <div class="w-8 h-8 bg-cyan-300 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
              <svg class="w-4 h-4 text-dark-turquoise" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold text-cyan-300 mb-2">Continuous Learning</h4>
              <p class="text-cyan-100">Always evolving, always growing, always improving</p>
            </div>
          </div>
          <div class="flex items-start space-x-4">
            <div class="w-8 h-8 bg-cyan-300 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
              <svg class="w-4 h-4 text-dark-turquoise" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold text-cyan-300 mb-2">Open Innovation</h4>
              <p class="text-cyan-100">Ideas can come from anywhere, innovation happens everywhere</p>
            </div>
          </div>
        </div>
      </div>
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2070" alt="Team Collaboration" class="rounded-2xl shadow-2xl w-full">
          <div class="absolute inset-0 bg-gradient-to-t from-dark-turquoise/30 to-transparent rounded-2xl"></div>
        </div>
      </div>
    </div>
    
    <!-- Culture Stats -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
      <div class="text-center fade-in-up">
        <div class="text-4xl md:text-5xl font-extrabold text-cyan-300 mb-2">95%</div>
        <div class="text-white font-semibold mb-1">Employee Satisfaction</div>
        <div class="text-sm text-cyan-100">Team engagement score</div>
      </div>
      <div class="text-center fade-in-up" style="transition-delay: 100ms;">
        <div class="text-4xl md:text-5xl font-extrabold text-cyan-300 mb-2">50+</div>
        <div class="text-white font-semibold mb-1">Team Members</div>
        <div class="text-sm text-cyan-100">Global talent network</div>
      </div>
      <div class="text-center fade-in-up" style="transition-delay: 200ms;">
        <div class="text-4xl md:text-5xl font-extrabold text-cyan-300 mb-2">15+</div>
        <div class="text-white font-semibold mb-1">Countries</div>
        <div class="text-sm text-cyan-100">Diverse global presence</div>
      </div>
      <div class="text-center fade-in-up" style="transition-delay: 300ms;">
        <div class="text-4xl md:text-5xl font-extrabold text-cyan-300 mb-2">24/7</div>
        <div class="text-white font-semibold mb-1">Innovation</div>
        <div class="text-sm text-cyan-100">Always pushing boundaries</div>
      </div>
    </div>
  </div>
</section>

<!-- Work Environment Section -->
<section class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class="font-serif text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Our Work Environment</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Creating spaces and experiences that inspire innovation and foster collaboration</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Environment Feature 1 -->
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover fade-in-up">
        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2070" alt="Modern Workspace" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="font-bold text-dark-turquoise text-lg mb-3">Modern Workspaces</h3>
          <p class="text-gray-600">State-of-the-art facilities designed to inspire creativity and facilitate collaboration across teams.</p>
        </div>
      </div>
      
      <!-- Environment Feature 2 -->
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover fade-in-up" style="transition-delay: 100ms;">
        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=2070" alt="Remote Flexibility" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="font-bold text-dark-turquoise text-lg mb-3">Flexible Work</h3>
          <p class="text-gray-600">Hybrid and remote work options that support work-life balance and global collaboration.</p>
        </div>
      </div>
      
      <!-- Environment Feature 3 -->
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover fade-in-up" style="transition-delay: 200ms;">
        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=2070" alt="Learning & Development" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="font-bold text-dark-turquoise text-lg mb-3">Continuous Learning</h3>
          <p class="text-gray-600">Ongoing professional development opportunities and access to cutting-edge technologies.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Employee Testimonials Section -->
<section class="py-20 md:py-28 bg-gradient-to-br from-cyan-50 to-turquoise-50">
  <div class="max-w-7xl mx-auto px-8">
    <div class="text-center mb-16 fade-in-up">
      <h2 class="font-serif text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">What Our Team Says</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Hear from the people who make Ascend Stratus extraordinary</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Testimonial 1 -->
      <div class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl border border-white/40 card-hover fade-in-up">
        <div class="flex items-center mb-4">
          <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=60&h=60&fit=crop&crop=face" alt="Team Member" class="w-12 h-12 rounded-full mr-4">
          <div>
            <div class="font-semibold text-dark-turquoise">Sarah Chen</div>
            <div class="text-sm text-gray-600">Senior Engineer</div>
          </div>
        </div>
        <p class="text-gray-600 leading-relaxed">"The collaborative culture here is unlike anywhere I've worked before. Every voice matters, and innovation truly happens at every level."</p>
      </div>
      
      <!-- Testimonial 2 -->
      <div class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl border border-white/40 card-hover fade-in-up" style="transition-delay: 100ms;">
        <div class="flex items-center mb-4">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face" alt="Team Member" class="w-12 h-12 rounded-full mr-4">
          <div>
            <div class="font-semibold text-dark-turquoise">Marcus Rodriguez</div>
            <div class="text-sm text-gray-600">Product Manager</div>
          </div>
        </div>
        <p class="text-gray-600 leading-relaxed">"Working across multiple sectors gives me insights I never had before. The cross-venture intelligence approach is revolutionary."</p>
      </div>
      
      <!-- Testimonial 3 -->
      <div class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl border border-white/40 card-hover fade-in-up" style="transition-delay: 200ms;">
        <div class="flex items-center mb-4">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=60&h=60&fit=crop&crop=face" alt="Team Member" class="w-12 h-12 rounded-full mr-4">
          <div>
            <div class="font-semibold text-dark-turquoise">David Kim</div>
            <div class="text-sm text-gray-600">Data Scientist</div>
          </div>
        </div>
        <p class="text-gray-600 leading-relaxed">"The learning opportunities are endless. I'm constantly challenged to grow and explore new technologies and methodologies."</p>
      </div>
    </div>
  </div>
</section>

<!-- Join Our Team CTA -->
<section class="py-20 md:py-28 bg-gradient-to-r from-dark-turquoise to-turquoise-600">
  <div class="max-w-4xl mx-auto text-center px-8">
    <div class="fade-in-up">
      <h2 class="font-serif text-4xl md:text-5xl font-bold text-white mb-6">Join Our Mission</h2>
      <p class="text-lg text-cyan-100 mb-8 max-w-2xl mx-auto">
        Be part of a team that's transforming industries and building the future of business operations. Your expertise can help shape tomorrow.
      </p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="{{ url('/careers') }}" class="bg-cyan-300 text-dark-turquoise px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
          View Open Positions
        </a>
        <a href="{{ url('/about') }}#team" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
          Meet Our Team
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
