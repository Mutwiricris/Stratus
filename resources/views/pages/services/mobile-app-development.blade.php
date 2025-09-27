@extends('layouts.detail')

@section('title', 'Mobile App Development - Native & Cross-Platform Solutions | Ascend Stratus')
@section('description', 'Comprehensive mobile app development services for African businesses. Native iOS/Android and cross-platform solutions using React Native, Flutter, Swift, and Kotlin with African market focus.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[90vh] flex items-center bg-gradient-to-br from-gray-50 via-white to-green-50/30 overflow-hidden">
  <!-- Background Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-green-400/20 to-emerald-400/20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-br from-teal-400/20 to-green-400/20 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-br from-emerald-400/10 to-green-400/10 rounded-full blur-3xl"></div>
  </div>
  
  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
    <div class="grid lg:grid-cols-2 gap-16 lg:gap-20 items-center">
      <div class="fade-in-up">
        <a href="{{ url('/services') }}" class="inline-flex items-center text-green-600 hover:text-green-700 font-medium mb-4 transition-colors duration-300">
          <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
          Back to Services
        </a>
        <span class="inline-block text-green-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-green-50 px-4 py-2 rounded-full">
          Mobile App Development
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-8 leading-tight">
          <span class="bg-gradient-to-r from-green-600 via-emerald-600 to-teal-600 bg-clip-text text-transparent">
            Mobile Apps
          </span>
          <br>
          <span class="text-gray-900">That Transform Businesses</span>
        </h1>
        <p class="text-lg sm:text-xl text-gray-600 mb-10 max-w-2xl leading-relaxed">
          Comprehensive mobile app development services for African businesses. We create native iOS/Android and cross-platform solutions that drive user engagement, increase revenue, and scale your business across Africa's growing mobile market.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
          <a href="#solutions" class="group inline-flex items-center bg-gradient-to-r from-green-600 via-emerald-600 to-teal-600 text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl hover:shadow-green-500/25 transition-all duration-500 hover:scale-105">
            <span class="relative flex items-center gap-2">
              Start Your App Project
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </span>
          </a>
          <a href="#portfolio" class="group inline-flex items-center text-gray-700 hover:text-green-600 font-semibold transition-colors duration-300">
            View Portfolio
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M15 14h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </a>
        </div>
      </div>
      
      <!-- Hero Image/Illustration -->
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="relative">
          <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 shadow-2xl border border-gray-100">
            <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2070" alt="African Mobile App Development" class="w-full h-80 object-cover rounded-2xl">
            
            <!-- Floating Stats -->
            <div class="absolute -top-4 -left-4 bg-white/95 backdrop-blur-sm rounded-2xl shadow-xl p-4 floating" style="animation-delay: 1s;">
              <div class="text-center">
                <div class="text-2xl font-bold text-green-600 mb-1">50+</div>
                <div class="text-xs text-gray-600 font-medium">Apps Built</div>
              </div>
            </div>
            
            <div class="absolute -bottom-4 -right-4 bg-white/95 backdrop-blur-sm rounded-2xl shadow-xl p-4 floating" style="animation-delay: 1.5s;">
              <div class="text-center">
                <div class="text-2xl font-bold text-emerald-600 mb-1">4.9★</div>
                <div class="text-xs text-gray-600 font-medium">App Rating</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- App Development Solutions -->
<section class="py-24 md:py-32 bg-gradient-to-br from-gray-50 to-green-50/30 px-4 sm:px-6 lg:px-8" id="solutions">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-green-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-green-50 px-4 py-2 rounded-full">
        Our Solutions
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Comprehensive Mobile App Solutions</h2>
      <div class="w-24 h-1 bg-gradient-to-r from-green-600 to-emerald-600 mx-auto mb-6"></div>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">From native iOS/Android apps to cross-platform solutions, we deliver mobile experiences that drive business growth</p>
    </div>
    
    <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
      <div class="fade-in-up">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=2070" alt="African Native App Development" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class="text-2xl font-bold text-dark-turquoise mb-2">Native App Development</h3>
            <p class="text-gray-600">High-performance native apps built specifically for iOS and Android platforms using Swift, Kotlin, and platform-specific APIs for optimal user experience.</p>
          </div>
        </div>
      </div>
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=2070" alt="African Cross-Platform Development" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class="text-2xl font-bold text-dark-turquoise mb-2">Cross-Platform Solutions</h3>
            <p class="text-gray-600">Cost-effective cross-platform apps using React Native and Flutter that work seamlessly across iOS and Android with shared codebase and faster time-to-market.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="grid lg:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up">
        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=2070" alt="African Progressive Web Apps" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Progressive Web Apps</h4>
          <p class="text-sm text-gray-600">Modern web applications that work like native apps with offline capabilities and push notifications.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 100ms;">
        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2070" alt="African Enterprise Apps" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Enterprise Mobile Apps</h4>
          <p class="text-sm text-gray-600">Custom enterprise solutions for internal operations, employee productivity, and business process automation.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 200ms;">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=2070" alt="African App Maintenance" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibent text-dark-turquoise mb-2">App Maintenance & Support</h4>
          <p class="text-sm text-gray-600">Ongoing maintenance, updates, bug fixes, and feature enhancements to keep your app running smoothly.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Development Process -->
<section class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class="text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Our Mobile App Development Process</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">A proven methodology that ensures successful app delivery from concept to launch</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Discovery & Planning -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up">
        <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-emerald-600 rounded-2xl flex items-center justify-center mb-6">
          <span class="text-white font-bold text-2xl">1</span>
        </div>
        <h3 class="text-xl font-bold text-dark-turquoise mb-4">Discovery & Planning</h3>
        <p class="text-gray-600 leading-relaxed mb-4">We analyze your business requirements, target audience, and market to create a comprehensive app strategy.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Market research & analysis</li>
          <li>• User persona development</li>
          <li>• Feature prioritization</li>
          <li>• Technical architecture planning</li>
          <li>• Project timeline & budget</li>
        </ul>
      </div>
      
      <!-- Design & Prototyping -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 100ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-2xl flex items-center justify-center mb-6">
          <span class="text-white font-bold text-2xl">2</span>
        </div>
        <h3 class="text-xl font-bold text-dark-turquoise mb-4">Design & Prototyping</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Creating intuitive user interfaces and engaging user experiences that resonate with African users.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Wireframing & user flows</li>
          <li>• UI/UX design</li>
          <li>• Interactive prototypes</li>
          <li>• Design system creation</li>
          <li>• User testing & feedback</li>
        </ul>
      </div>
      
      <!-- Development & Testing -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-teal-600 to-cyan-600 rounded-2xl flex items-center justify-center mb-6">
          <span class="text-white font-bold text-2xl">3</span>
        </div>
        <h3 class="text-xl font-bold text-dark-turquoise mb-4">Development & Testing</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Agile development with continuous testing to ensure high-quality, bug-free applications.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Agile development methodology</li>
          <li>• Code reviews & quality assurance</li>
          <li>• Automated & manual testing</li>
          <li>• Performance optimization</li>
          <li>• Security implementation</li>
        </ul>
      </div>
      
      <!-- Launch & Support -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 300ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-cyan-600 to-blue-600 rounded-2xl flex items-center justify-center mb-6">
          <span class="text-white font-bold text-2xl">4</span>
        </div>
        <h3 class="text-xl font-bold text-dark-turquoise mb-4">Launch & Support</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Successful app store deployment with ongoing maintenance and feature updates.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• App store optimization</li>
          <li>• Deployment & launch</li>
          <li>• User analytics setup</li>
          <li>• Ongoing maintenance</li>
          <li>• Feature enhancements</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Technology Stack -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-green-50/30 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class="text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Technologies We Master</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Cutting-edge mobile technologies for superior app performance</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="bg-white rounded-2xl p-6 shadow-lg text-center fade-in-up">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center">
          <span class="text-white font-bold text-sm">RN</span>
        </div>
        <h4 class="font-bold text-gray-900 mb-2">React Native</h4>
        <p class="text-sm text-gray-600">Cross-platform development</p>
      </div>
      
      <div class="bg-white rounded-2xl p-6 shadow-lg text-center fade-in-up" style="transition-delay: 100ms;">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center">
          <span class="text-white font-bold text-sm">Flutter</span>
        </div>
        <h4 class="font-bold text-gray-900 mb-2">Flutter</h4>
        <p class="text-sm text-gray-600">Google's UI toolkit</p>
      </div>
      
      <div class="bg-white rounded-2xl p-6 shadow-lg text-center fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-orange-500 to-red-500 rounded-2xl flex items-center justify-center">
          <span class="text-white font-bold text-sm">Swift</span>
        </div>
        <h4 class="font-bold text-gray-900 mb-2">Swift</h4>
        <p class="text-sm text-gray-600">Native iOS development</p>
      </div>
      
      <div class="bg-white rounded-2xl p-6 shadow-lg text-center fade-in-up" style="transition-delay: 300ms;">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center">
          <span class="text-white font-bold text-sm">Kotlin</span>
        </div>
        <h4 class="font-bold text-gray-900 mb-2">Kotlin</h4>
        <p class="text-sm text-gray-600">Modern Android development</p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class="text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Success Stories from Africa</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">See how our mobile apps are transforming businesses across the continent</p>
    </div>
    
    <div class="grid lg:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up">
        <div class="flex items-center mb-6">
          <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?q=80&w=150" alt="Sarah Ochieng" class="w-16 h-16 rounded-full object-cover mr-4">
          <div>
            <h4 class="font-bold text-dark-turquoise">Sarah Ochieng</h4>
            <p class="text-gray-600 text-sm">CEO, KenyaTech Solutions</p>
          </div>
        </div>
        <p class="text-gray-600 leading-relaxed">"Our fintech app built by Ascend Stratus has processed over $2M in transactions in the first year. The seamless M-Pesa integration and user-friendly design have made us the preferred payment solution for small businesses in Nairobi."</p>
      </div>
      
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up" style="transition-delay: 100ms;">
        <div class="flex items-center mb-6">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=150" alt="Kofi Mensah" class="w-16 h-16 rounded-full object-cover mr-4">
          <div>
            <h4 class="font-bold text-dark-turquoise">Kofi Mensah</h4>
            <p class="text-gray-600 text-sm">Founder, GhanaHealth App</p>
          </div>
        </div>
        <p class="text-gray-600 leading-relaxed">"The telemedicine app exceeded our expectations. With over 10,000 active users, we're connecting patients with doctors across Ghana. The offline functionality was crucial for rural areas with limited internet connectivity."</p>
      </div>
      
      <div class="bg-white rounded-2xl p-8 shadow-lg fade-in-up" style="transition-delay: 200ms;">
        <div class="flex items-center mb-6">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150" alt="Amara Diallo" class="w-16 h-16 rounded-full object-cover mr-4">
          <div>
            <h4 class="font-bold text-dark-turquoise">Amara Diallo</h4>
            <p class="text-gray-600 text-sm">Director, AgriConnect Mali</p>
          </div>
        </div>
        <p class="text-gray-600 leading-relaxed">"Our agriculture marketplace app has connected over 5,000 farmers with buyers across West Africa. The multi-language support and SMS integration have been game-changers for farmers in remote areas."</p>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="py-20 md:py-28 px-8 bg-gradient-to-br from-green-600 to-emerald-600">
  <div class="max-w-4xl mx-auto text-center">
    <div class="fade-in-up">
      <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Ready to Build Your Mobile App?</h2>
      <p class="text-lg md:text-xl text-green-100 mb-8 max-w-2xl mx-auto">Transform your business with a custom mobile app designed for the African market. Let's bring your vision to life.</p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="#" class="bg-white text-green-600 px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:bg-green-50 hover:text-green-700 transition-colors">
          Start Your App Project
        </a>
        <a href="#" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-emerald-300 transition-all duration-300 py-2">
          View Portfolio
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
    
   