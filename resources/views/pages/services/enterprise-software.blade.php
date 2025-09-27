@extends('layouts.detail')

@section('title', 'Enterprise Software Solutions - Fintech, CRM, HRM & Analytics | Ascend Stratus')
@section('description', 'Comprehensive enterprise software solutions including fintech platforms like PesaPal, advanced CRM systems, HRM solutions, business analytics, and SaaS applications for African enterprises.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[90vh] flex items-center bg-gradient-to-br from-gray-50 via-white to-indigo-50/30 overflow-hidden">
  <!-- Background Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-indigo-400/20 to-purple-400/20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-br from-blue-400/20 to-indigo-400/20 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-br from-purple-400/10 to-indigo-400/10 rounded-full blur-3xl"></div>
  </div>
  
  <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
    <div class="grid lg:grid-cols-2 gap-16 lg:gap-20 items-center">
      <div class="fade-in-up">
        <a href="{{ url('/services') }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-700 font-medium mb-4 transition-colors duration-300">
          <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
          Back to Services
        </a>
        <span class="inline-block text-indigo-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-indigo-50 px-4 py-2 rounded-full">
          Enterprise Software Solutions
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-8 leading-tight">
          <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-blue-600 bg-clip-text text-transparent">
            Enterprise-Grade
          </span>
          <br>
          <span class="text-gray-900">Fintech & SaaS Solutions</span>
        </h1>
        <p class="text-lg sm:text-xl text-gray-600 mb-10 max-w-2xl leading-relaxed">
          Comprehensive enterprise software solutions including advanced fintech platforms (like PesaPal), sophisticated CRM systems, HRM solutions, business analytics, and modern SaaS applications designed for African enterprises.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
          <a href="#solutions" class="group inline-flex items-center bg-gradient-to-r from-indigo-600 via-purple-600 to-blue-600 text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl hover:shadow-indigo-500/25 transition-all duration-500 hover:scale-105">
            <span class="relative flex items-center gap-2">
              Explore Solutions
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </span>
          </a>
          <a href="#demo" class="group inline-flex items-center text-gray-700 hover:text-indigo-600 font-semibold transition-colors duration-300">
            View Demo
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
            <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=2070" alt="African Enterprise Software Dashboard" class="w-full h-80 object-cover rounded-2xl">
            
            <!-- Floating Stats -->
            <div class="absolute -top-4 -left-4 bg-white/95 backdrop-blur-sm rounded-2xl shadow-xl p-4 floating" style="animation-delay: 1s;">
              <div class="text-center">
                <div class="text-2xl font-bold text-indigo-600 mb-1">99.9%</div>
                <div class="text-xs text-gray-600 font-medium">Uptime</div>
              </div>
            </div>
            
            <div class="absolute -bottom-4 -right-4 bg-white/95 backdrop-blur-sm rounded-2xl shadow-xl p-4 floating" style="animation-delay: 1.5s;">
              <div class="text-center">
                <div class="text-2xl font-bold text-purple-600 mb-1">24/7</div>
                <div class="text-xs text-gray-600 font-medium">Support</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Fintech Solutions Section -->
<section class="py-24 md:py-32 bg-gradient-to-br from-gray-50 to-indigo-50/30 px-4 sm:px-6 lg:px-8" id="solutions">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 fade-in-up">
      <span class="inline-block text-indigo-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-indigo-50 px-4 py-2 rounded-full">
        Fintech Solutions
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Advanced Fintech Platforms</h2>
      <div class="w-24 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 mx-auto mb-6"></div>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">Building next-generation financial technology solutions like PesaPal for African markets</p>
    </div>
    
    <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
      <div class="fade-in-up">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2070" alt="African Fintech Platform" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class="text-2xl font-bold text-dark-turquoise mb-2">Payment Processing Platform</h3>
            <p class="text-gray-600">Comprehensive payment gateway solutions supporting mobile money, card payments, and digital wallets across Africa.</p>
          </div>
        </div>
      </div>
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=2070" alt="African Digital Banking" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class="text-2xl font-bold text-dark-turquoise mb-2">Digital Banking Solutions</h3>
            <p class="text-gray-600">Modern banking platforms with account management, loan processing, and financial services integration.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="grid lg:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=2070" alt="African Mobile Money" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Mobile Money Integration</h4>
          <p class="text-sm text-gray-600">M-Pesa, Airtel Money, and other African mobile payment solutions.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 100ms;">
        <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=2070" alt="African Digital Wallets" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Digital Wallet Solutions</h4>
          <p class="text-sm text-gray-600">Secure digital wallets with multi-currency support and crypto integration.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 200ms;">
        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=2070" alt="African Financial Analytics" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Financial Analytics</h4>
          <p class="text-sm text-gray-600">Advanced financial reporting and risk management systems.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Enterprise Applications -->
<section class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class="text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Complete Enterprise Ecosystem</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Comprehensive SaaS solutions for modern African enterprises</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- CRM Systems -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up">
        <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-emerald-600 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-dark-turquoise mb-4">Advanced CRM Systems</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Sophisticated customer relationship management with AI-powered insights.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Lead management & tracking</li>
          <li>• Sales pipeline automation</li>
          <li>• Customer segmentation</li>
          <li>• Multi-channel communication</li>
          <li>• Performance analytics</li>
          <li>• Mobile CRM apps</li>
          <li>• Integration capabilities</li>
        </ul>
      </div>
      
      <!-- HRM Solutions -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 100ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-dark-turquoise mb-4">Human Resource Management</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Complete HR solutions for employee lifecycle management and organizational growth.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Employee onboarding</li>
          <li>• Payroll management</li>
          <li>• Performance tracking</li>
          <li>• Leave management</li>
          <li>• Recruitment tools</li>
          <li>• Training & development</li>
          <li>• Compliance management</li>
        </ul>
      </div>
      
      <!-- Business Analytics -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2-2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-dark-turquoise mb-4">Business Intelligence & Analytics</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Advanced analytics and reporting platforms for data-driven decision making.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Real-time dashboards</li>
          <li>• Predictive analytics</li>
          <li>• Custom reporting</li>
          <li>• Data visualization</li>
          <li>• KPI monitoring</li>
          <li>• Business forecasting</li>
          <li>• Multi-source integration</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Technology Stack -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-indigo-50/30 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class="text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Modern Technology Stack</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Built with cutting-edge technologies for scalability and performance</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="bg-white rounded-2xl p-6 shadow-lg text-center fade-in-up">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center">
          <span class="text-white font-bold text-sm">Cloud</span>
        </div>
        <h4 class="font-bold text-gray-900 mb-2">Cloud Native</h4>
        <p class="text-sm text-gray-600">AWS, Azure, Google Cloud</p>
      </div>
      
      <div class="bg-white rounded-2xl p-6 shadow-lg text-center fade-in-up" style="transition-delay: 100ms;">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center">
          <span class="text-white font-bold text-sm">API</span>
        </div>
        <h4 class="font-bold text-gray-900 mb-2">API-First</h4>
        <p class="text-sm text-gray-600">RESTful APIs, GraphQL</p>
      </div>
      
      <div class="bg-white rounded-2xl p-6 shadow-lg text-center fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center">
          <span class="text-white font-bold text-sm">AI/ML</span>
        </div>
        <h4 class="font-bold text-gray-900 mb-2">AI-Powered</h4>
        <p class="text-sm text-gray-600">Machine Learning, Analytics</p>
      </div>
      
      <div class="bg-white rounded-2xl p-6 shadow-lg text-center fade-in-up" style="transition-delay: 300ms;">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-orange-500 to-red-500 rounded-2xl flex items-center justify-center">
          <span class="text-white font-bold text-sm">Mobile</span>
        </div>
        <h4 class="font-bold text-gray-900 mb-2">Mobile-First</h4>
        <p class="text-sm text-gray-600">iOS, Android, PWA</p>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="py-20 md:py-28 px-8 bg-gradient-to-br from-indigo-600 to-purple-600">
  <div class="max-w-4xl mx-auto text-center">
    <div class="fade-in-up">
      <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Transform Your Enterprise Today</h2>
      <p class="text-lg md:text-xl text-indigo-100 mb-8 max-w-2xl mx-auto">Join leading African enterprises who trust our fintech and SaaS solutions to drive their digital transformation.</p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="#" class="bg-white text-indigo-600 px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:bg-indigo-50 hover:text-indigo-700 transition-colors">
          Get Enterprise Solution
        </a>
        <a href="#" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-purple-300 transition-all duration-300 py-2">
          Schedule Demo
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
