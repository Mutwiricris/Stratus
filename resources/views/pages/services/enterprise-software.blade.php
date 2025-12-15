@extends('layouts.detail')

@section('title', 'Enterprise Software Solutions - Fintech, CRM, HRM & Analytics | Ascend Stratus')
@section('description', 'Comprehensive enterprise software solutions including fintech platforms, CRM, HRM, ERP, and business analytics with M-Pesa integration for African enterprises.')

@push('styles')
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    @keyframes float-delayed {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
    }
    @keyframes pulse-glow {
        0%, 100% { box-shadow: 0 0 20px rgba(99, 102, 241, 0.3); }
        50% { box-shadow: 0 0 40px rgba(99, 102, 241, 0.6); }
    }
    .float-animation { animation: float 6s ease-in-out infinite; }
    .float-animation-delayed { animation: float-delayed 6s ease-in-out infinite 2s; }
    .pulse-glow { animation: pulse-glow 3s ease-in-out infinite; }
    .fade-in-up {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.8s ease-out forwards;
    }
    @keyframes fadeInUp {
        to { opacity: 1; transform: translateY(0); }
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-indigo-50 via-white to-purple-50/30 py-16 sm:py-20 md:py-28 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-indigo-200/30 rounded-full blur-3xl float-animation"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-200/30 rounded-full blur-3xl float-animation-delayed"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-r from-indigo-100/20 to-purple-100/20 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16 items-center">
            <!-- Left Column - Content -->
            <div class="order-2 lg:order-1">
                <div class="mb-6 sm:mb-8">
                    <a href="{{ url('/services') }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-700 font-medium mb-4 transition-colors duration-300">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Back to Services
                    </a>
                    <span class="inline-flex items-center gap-2 text-indigo-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 sm:mb-6 bg-indigo-50 px-3 sm:px-4 py-2 rounded-full">
                        <div class="w-2 h-2 bg-indigo-500 rounded-full animate-pulse"></div>
                        Enterprise Software
                    </span>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 sm:mb-8 leading-[1.1]">
                        Enterprise-Grade
                        <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-blue-600 bg-clip-text text-transparent">Software Solutions</span>
                        <span class="block">for Africa</span>
                    </h1>
                </div>

                <p class="text-base sm:text-lg md:text-xl text-gray-600 mb-8 sm:mb-10 leading-relaxed">
                    Custom ERP, CRM, HRM, and fintech solutions built for the unique challenges of African enterprises. Native M-Pesa integration, multi-currency support, and offline-first architecture.
                </p>

                <!-- Impact Stats -->
                <div class="grid grid-cols-3 gap-4 mb-8 sm:mb-10">
                    <div class="text-center p-4 bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-100 shadow-lg">
                        <div class="text-2xl sm:text-3xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">99.9%</div>
                        <div class="text-xs sm:text-sm text-gray-600">Uptime SLA</div>
                    </div>
                    <div class="text-center p-4 bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-100 shadow-lg">
                        <div class="text-2xl sm:text-3xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">50K+</div>
                        <div class="text-xs sm:text-sm text-gray-600">Daily Users</div>
                    </div>
                    <div class="text-center p-4 bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-100 shadow-lg">
                        <div class="text-2xl sm:text-3xl font-bold bg-gradient-to-r from-pink-600 to-indigo-600 bg-clip-text text-transparent">24/7</div>
                        <div class="text-xs sm:text-sm text-gray-600">Support</div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 items-stretch sm:items-center">
                    <a href="{{ url('/contact') }}" class="group relative bg-gradient-to-r from-indigo-600 via-purple-600 to-blue-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-base sm:text-lg font-semibold hover:shadow-2xl hover:shadow-indigo-500/25 transition-all duration-500 hover:scale-105 overflow-hidden">
                        <span class="relative flex items-center justify-center gap-2">
                            Request Demo
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="#solutions" class="group flex items-center justify-center gap-2 text-gray-700 hover:text-indigo-600 font-semibold transition-all duration-300">
                        <span class="w-12 h-12 rounded-full bg-white shadow-lg flex items-center justify-center group-hover:shadow-xl transition-all duration-300">
                            <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </span>
                        Explore Solutions
                    </a>
                </div>
            </div>

            <!-- Right Column - Image -->
            <div class="order-1 lg:order-2">
                <div class="relative group">
                    <div class="relative overflow-hidden rounded-2xl sm:rounded-3xl shadow-2xl pulse-glow">
                        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?auto=format&fit=crop&w=1920&q=80"
                             alt="Enterprise software dashboard"
                             class="w-full h-[250px] sm:h-[350px] md:h-[450px] lg:h-[550px] object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/20 via-purple-600/10 to-blue-600/20 group-hover:opacity-75 transition-opacity duration-500"></div>
                    </div>

                    <!-- Floating Stats Card -->
                    <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl p-4 sm:p-6 border border-gray-100 float-animation hidden sm:block">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500">Security</div>
                                <div class="text-lg font-bold text-gray-900">Bank-Grade</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Solutions Section -->
<section id="solutions" class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-indigo-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-indigo-50 px-4 py-2 rounded-full">
                Our Solutions
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Enterprise Software Suite</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Modular, scalable solutions that grow with your business</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- ERP Solutions -->
            <div class="group bg-gradient-to-br from-indigo-50 to-purple-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-indigo-100 hover:border-indigo-200">
                <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-indigo-600 transition-colors">ERP Systems</h3>
                <p class="text-gray-600 mb-4">Unified enterprise resource planning with finance, inventory, and operations management.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-indigo-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Financial management</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-indigo-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Inventory control</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-indigo-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Procurement</li>
                </ul>
            </div>

            <!-- CRM Systems -->
            <div class="group bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-green-100 hover:border-green-200">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors">CRM Systems</h3>
                <p class="text-gray-600 mb-4">AI-powered customer relationship management for sales and service teams.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Lead management</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Sales automation</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Customer insights</li>
                </ul>
            </div>

            <!-- HRM Solutions -->
            <div class="group bg-gradient-to-br from-purple-50 to-pink-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-purple-100 hover:border-purple-200">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors">HRM Solutions</h3>
                <p class="text-gray-600 mb-4">Complete HR management with payroll, attendance, and performance tracking.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Payroll processing</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Leave management</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Recruitment</li>
                </ul>
            </div>

            <!-- Fintech Solutions -->
            <div class="group bg-gradient-to-br from-blue-50 to-cyan-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-blue-100 hover:border-blue-200">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">Fintech Platforms</h3>
                <p class="text-gray-600 mb-4">Payment processing, digital banking, and financial management solutions.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> M-Pesa integration</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Multi-currency</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Loan management</li>
                </ul>
            </div>

            <!-- Business Intelligence -->
            <div class="group bg-gradient-to-br from-orange-50 to-amber-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-200">
                <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-amber-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-orange-600 transition-colors">Business Intelligence</h3>
                <p class="text-gray-600 mb-4">Real-time analytics, reporting, and AI-powered insights for decision making.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Live dashboards</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Predictive analytics</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Custom reports</li>
                </ul>
            </div>

            <!-- Workflow Automation -->
            <div class="group bg-gradient-to-br from-teal-50 to-cyan-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-teal-100 hover:border-teal-200">
                <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">Workflow Automation</h3>
                <p class="text-gray-600 mb-4">Automate repetitive tasks and streamline business processes.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-teal-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Process automation</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-teal-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Approval workflows</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-teal-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Notifications</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- African-First Features Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-900 via-indigo-900 to-gray-900 text-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-indigo-400 font-semibold text-sm uppercase tracking-wide mb-4 bg-indigo-500/10 px-4 py-2 rounded-full border border-indigo-500/20">
                Built for Africa
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4 sm:mb-6">Enterprise Features for African Markets</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">Purpose-built solutions addressing the unique requirements of African enterprises</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- M-Pesa Integration -->
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:border-green-500/30 transition-all duration-300">
                <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">M-Pesa & Mobile Money</h3>
                <p class="text-gray-400 text-sm">Native integration with M-Pesa, Airtel Money, MTN, and all major African mobile money platforms.</p>
            </div>

            <!-- Multi-Currency -->
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:border-blue-500/30 transition-all duration-300">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">Multi-Currency Support</h3>
                <p class="text-gray-400 text-sm">Handle KES, TZS, UGX, NGN, ZAR, USD, and other currencies with real-time exchange rates.</p>
            </div>

            <!-- Offline-First -->
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:border-orange-500/30 transition-all duration-300">
                <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 010 12.728m0 0l-2.829-2.829m2.829 2.829L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-2.829-2.829m-4.243 2.829a4.978 4.978 0 01-1.414-2.83m-1.414 5.658a9 9 0 01-2.167-9.238m7.824 2.167a1 1 0 111.414 1.414m-1.414-1.414L3 3m8.293 8.293l1.414 1.414"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">Offline-First Design</h3>
                <p class="text-gray-400 text-sm">Full functionality even without internet connection. Auto-sync when connectivity returns.</p>
            </div>

            <!-- Compliance -->
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:border-purple-500/30 transition-all duration-300">
                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">Local Compliance</h3>
                <p class="text-gray-400 text-sm">Built-in compliance with CBK, GDPR, and local tax regulations (KRA, SARS).</p>
            </div>
        </div>
    </div>
</section>

<!-- Security Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="inline-flex items-center gap-2 text-indigo-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-indigo-50 px-4 py-2 rounded-full">
                    Security & Compliance
                </span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6">Bank-Grade Security for Your Data</h2>
                <p class="text-gray-600 mb-8">Your data security is our top priority. We implement enterprise-grade security measures that meet and exceed international standards.</p>

                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">256-bit AES Encryption</h4>
                            <p class="text-sm text-gray-600">All data encrypted at rest and in transit</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Multi-Factor Authentication</h4>
                            <p class="text-sm text-gray-600">SMS, email, and authenticator app support</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">SOC 2 Type II Compliant</h4>
                            <p class="text-sm text-gray-600">Annual third-party security audits</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Automated Backups</h4>
                            <p class="text-sm text-gray-600">Real-time replication with 30-day retention</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-6 text-center border border-indigo-100">
                    <div class="text-4xl font-bold text-indigo-600 mb-2">99.99%</div>
                    <div class="text-sm text-gray-600">Uptime Guarantee</div>
                </div>
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6 text-center border border-green-100">
                    <div class="text-4xl font-bold text-green-600 mb-2">0</div>
                    <div class="text-sm text-gray-600">Security Breaches</div>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-6 text-center border border-blue-100">
                    <div class="text-4xl font-bold text-blue-600 mb-2">24/7</div>
                    <div class="text-sm text-gray-600">Security Monitoring</div>
                </div>
                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-6 text-center border border-purple-100">
                    <div class="text-4xl font-bold text-purple-600 mb-2">GDPR</div>
                    <div class="text-sm text-gray-600">Compliant</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white" x-data="{ openFaq: null }">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-indigo-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-indigo-50 px-4 py-2 rounded-full">
                FAQs
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Frequently Asked Questions</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Common questions about our enterprise software solutions</p>
        </div>

        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm">
                <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">How do you handle M-Pesa and mobile money integration?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 1" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">We have direct API integrations with Safaricom (M-Pesa), Airtel Money, MTN Mobile Money, and other major providers. Our platform handles STK push, C2B, B2C, and B2B transactions with real-time callback processing and automatic reconciliation.</p>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm">
                <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">Can you migrate data from our existing systems?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 2" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">Yes, we provide comprehensive data migration services. We analyze your existing data structures, clean and validate data, perform test migrations, and execute the final migration with zero downtime. We've successfully migrated data from legacy systems, spreadsheets, and other enterprise software.</p>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm">
                <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">What kind of support do you provide?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 3" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">We offer 24/7 support via phone, email, and live chat. Enterprise clients get a dedicated account manager, priority support with 1-hour response SLA, and quarterly business reviews. We also provide comprehensive training for your team and ongoing documentation.</p>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm">
                <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">Is the software customizable to our specific needs?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 4" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">Absolutely. While we offer ready-to-use modules, every aspect can be customized - workflows, fields, reports, dashboards, and integrations. We work with you to understand your processes and tailor the solution to match exactly how you operate.</p>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm">
                <button @click="openFaq = openFaq === 5 ? null : 5" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">What's the pricing model?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 5 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 5" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">We offer flexible pricing models: per-user monthly subscriptions, one-time licensing, or hybrid models. Enterprise solutions start at $500/month for core modules with up to 25 users. Custom development is quoted separately. We also offer pilot programs so you can test before committing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-r from-indigo-600 via-purple-600 to-blue-600 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><circle cx=\"50\" cy=\"50\" r=\"1\" fill=\"white\"/></svg>'); background-size: 50px 50px;"></div>
    </div>

    <div class="relative max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <div class="fade-in-up">
            <span class="inline-flex items-center gap-2 text-indigo-200 font-semibold text-sm uppercase tracking-wide mb-6 bg-white/10 px-4 py-2 rounded-full">
                Get Started Today
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6">Transform Your Enterprise Operations</h2>
            <p class="text-lg sm:text-xl text-indigo-100 mb-10 max-w-2xl mx-auto">
                Join leading African enterprises who trust our solutions for their critical business operations. Schedule a free demo today.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="{{ url('/contact') }}" class="bg-white text-indigo-600 px-8 py-4 rounded-2xl text-lg font-semibold hover:bg-indigo-50 hover:shadow-2xl transition-all duration-300 hover:scale-105 flex items-center gap-2">
                    Schedule Free Demo
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="{{ url('/portfolio') }}" class="text-white/90 hover:text-white font-medium border-b-2 border-white/40 hover:border-white transition-all duration-300 py-2 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    View Case Studies
                </a>
            </div>

            <!-- Trust Indicators -->
            <div class="mt-12 pt-8 border-t border-white/20">
                <div class="flex flex-wrap justify-center items-center gap-8 text-white/80 text-sm">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Free Demo & Consultation
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        No Setup Fees
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        24/7 Support Included
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
