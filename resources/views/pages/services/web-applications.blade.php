@extends('layouts.detail')

@section('title', 'Web Applications Development - Ascend Stratus')
@section('description', 'Professional web application development services using Laravel, React, Vue.js, and Node.js. Fast, efficient, and scalable solutions for your business.')

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
        0%, 100% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.3); }
        50% { box-shadow: 0 0 40px rgba(59, 130, 246, 0.6); }
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
    .stagger-1 { animation-delay: 0.1s; }
    .stagger-2 { animation-delay: 0.2s; }
    .stagger-3 { animation-delay: 0.3s; }
    .stagger-4 { animation-delay: 0.4s; }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-50 via-white to-indigo-50/30 py-16 sm:py-20 md:py-28 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-200/30 rounded-full blur-3xl float-animation"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-indigo-200/30 rounded-full blur-3xl float-animation-delayed"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-r from-blue-100/20 to-purple-100/20 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16 items-center">
            <!-- Left Column - Content -->
            <div class="order-2 lg:order-1">
                <div class="mb-6 sm:mb-8">
                    <a href="{{ url('/services') }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium mb-4 transition-colors duration-300">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Back to Services
                    </a>
                    <span class="inline-flex items-center gap-2 text-blue-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 sm:mb-6 bg-blue-50 px-3 sm:px-4 py-2 rounded-full">
                        <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                        Web Applications
                    </span>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 sm:mb-8 leading-[1.1]">
                        Custom
                        <span class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent">Web Applications</span>
                        <span class="block">Built to Scale</span>
                    </h1>
                </div>

                <p class="text-base sm:text-lg md:text-xl text-gray-600 mb-8 sm:mb-10 leading-relaxed">
                    From SaaS platforms to enterprise portals, we build high-performance web applications that drive business growth. Our solutions handle millions of users while maintaining lightning-fast response times.
                </p>

                <!-- Quick Stats -->
                <div class="grid grid-cols-3 gap-4 mb-8 sm:mb-10">
                    <div class="text-center p-4 bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-100 shadow-lg">
                        <div class="text-2xl sm:text-3xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">99.9%</div>
                        <div class="text-xs sm:text-sm text-gray-600">Uptime SLA</div>
                    </div>
                    <div class="text-center p-4 bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-100 shadow-lg">
                        <div class="text-2xl sm:text-3xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">&lt;200ms</div>
                        <div class="text-xs sm:text-sm text-gray-600">Avg Response</div>
                    </div>
                    <div class="text-center p-4 bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-100 shadow-lg">
                        <div class="text-2xl sm:text-3xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">50+</div>
                        <div class="text-xs sm:text-sm text-gray-600">Apps Delivered</div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 items-stretch sm:items-center">
                    <a href="{{ url('/contact') }}" class="group relative bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-base sm:text-lg font-semibold hover:shadow-2xl hover:shadow-blue-500/25 transition-all duration-500 hover:scale-105 overflow-hidden">
                        <span class="relative flex items-center justify-center gap-2">
                            Start Your Project
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="#application-types" class="group flex items-center justify-center gap-2 text-gray-700 hover:text-blue-600 font-semibold transition-all duration-300">
                        <span class="w-12 h-12 rounded-full bg-white shadow-lg flex items-center justify-center group-hover:shadow-xl transition-all duration-300">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1920&q=80"
                             alt="Web application development"
                             class="w-full h-[250px] sm:h-[350px] md:h-[450px] lg:h-[550px] object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600/20 via-indigo-600/10 to-purple-600/20 group-hover:opacity-75 transition-opacity duration-500"></div>
                    </div>

                    <!-- Floating Stats Card -->
                    <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl p-4 sm:p-6 border border-gray-100 float-animation hidden sm:block">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500">Performance</div>
                                <div class="text-lg font-bold text-gray-900">3x Faster</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Application Types Section -->
<section id="application-types" class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-blue-50 px-4 py-2 rounded-full">
                What We Build
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Web Application Types</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">From simple web apps to complex enterprise systems, we build solutions that transform how businesses operate</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- SaaS Platforms -->
            <div class="group bg-gradient-to-br from-blue-50 to-indigo-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-blue-100 hover:border-blue-200">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">SaaS Platforms</h3>
                <p class="text-gray-600 mb-4">Multi-tenant software-as-a-service applications with subscription billing, user management, and scalable architecture.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Multi-tenancy</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Usage analytics</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> API access</li>
                </ul>
            </div>

            <!-- Customer Portals -->
            <div class="group bg-gradient-to-br from-purple-50 to-pink-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-purple-100 hover:border-purple-200">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors">Customer Portals</h3>
                <p class="text-gray-600 mb-4">Self-service portals where customers manage accounts, view orders, access support, and track services.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Account management</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Document access</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Support tickets</li>
                </ul>
            </div>

            <!-- Progressive Web Apps -->
            <div class="group bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-green-100 hover:border-green-200">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors">Progressive Web Apps</h3>
                <p class="text-gray-600 mb-4">Mobile-first web applications that work offline, send push notifications, and feel like native apps.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Offline support</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Push notifications</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Installable</li>
                </ul>
            </div>

            <!-- Admin Dashboards -->
            <div class="group bg-gradient-to-br from-orange-50 to-amber-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-200">
                <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-amber-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-orange-600 transition-colors">Admin Dashboards</h3>
                <p class="text-gray-600 mb-4">Powerful back-office systems with real-time analytics, user management, and comprehensive reporting.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Real-time data</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Role-based access</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Custom reports</li>
                </ul>
            </div>

            <!-- Real-time Applications -->
            <div class="group bg-gradient-to-br from-red-50 to-rose-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-red-100 hover:border-red-200">
                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-rose-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-red-600 transition-colors">Real-time Applications</h3>
                <p class="text-gray-600 mb-4">Live collaboration tools, chat applications, and real-time data streaming with WebSocket technology.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> WebSocket support</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Live updates</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Presence detection</li>
                </ul>
            </div>

            <!-- API & Microservices -->
            <div class="group bg-gradient-to-br from-cyan-50 to-teal-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-cyan-100 hover:border-cyan-200">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-cyan-600 transition-colors">API & Microservices</h3>
                <p class="text-gray-600 mb-4">RESTful and GraphQL APIs, microservices architecture, and backend systems that power your applications.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-cyan-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> REST & GraphQL</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-cyan-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> API documentation</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-cyan-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Rate limiting</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Technology Stack Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-blue-400 font-semibold text-sm uppercase tracking-wide mb-4 bg-blue-500/10 px-4 py-2 rounded-full border border-blue-500/20">
                Our Stack
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4 sm:mb-6">Modern Technology Stack</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">Battle-tested technologies that power millions of applications worldwide</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
            <!-- Frontend -->
            <div class="bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10">
                <h3 class="text-xl font-bold mb-6 flex items-center gap-3">
                    <span class="w-10 h-10 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </span>
                    Frontend Technologies
                </h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                        <div class="w-10 h-10 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-lg flex items-center justify-center font-bold">R</div>
                        <div>
                            <div class="font-semibold">React</div>
                            <div class="text-xs text-gray-400">UI Library</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                        <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-emerald-500 rounded-lg flex items-center justify-center font-bold">V</div>
                        <div>
                            <div class="font-semibold">Vue.js</div>
                            <div class="text-xs text-gray-400">Progressive</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                        <div class="w-10 h-10 bg-gradient-to-br from-gray-700 to-gray-900 rounded-lg flex items-center justify-center font-bold">N</div>
                        <div>
                            <div class="font-semibold">Next.js</div>
                            <div class="text-xs text-gray-400">React Framework</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                        <div class="w-10 h-10 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-lg flex items-center justify-center font-bold">T</div>
                        <div>
                            <div class="font-semibold">Tailwind</div>
                            <div class="text-xs text-gray-400">CSS Framework</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Backend -->
            <div class="bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10">
                <h3 class="text-xl font-bold mb-6 flex items-center gap-3">
                    <span class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2"></path>
                        </svg>
                    </span>
                    Backend Technologies
                </h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                        <div class="w-10 h-10 bg-gradient-to-br from-red-500 to-orange-500 rounded-lg flex items-center justify-center font-bold">L</div>
                        <div>
                            <div class="font-semibold">Laravel</div>
                            <div class="text-xs text-gray-400">PHP Framework</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                        <div class="w-10 h-10 bg-gradient-to-br from-green-600 to-green-700 rounded-lg flex items-center justify-center font-bold">N</div>
                        <div>
                            <div class="font-semibold">Node.js</div>
                            <div class="text-xs text-gray-400">JS Runtime</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-blue-700 rounded-lg flex items-center justify-center font-bold">P</div>
                        <div>
                            <div class="font-semibold">Python</div>
                            <div class="text-xs text-gray-400">Django/Flask</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                        <div class="w-10 h-10 bg-gradient-to-br from-pink-500 to-rose-500 rounded-lg flex items-center justify-center font-bold">G</div>
                        <div>
                            <div class="font-semibold">GraphQL</div>
                            <div class="text-xs text-gray-400">API Query</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Database -->
            <div class="bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10">
                <h3 class="text-xl font-bold mb-6 flex items-center gap-3">
                    <span class="w-10 h-10 bg-gradient-to-br from-orange-500 to-amber-500 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                        </svg>
                    </span>
                    Databases
                </h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center font-bold">P</div>
                        <div>
                            <div class="font-semibold">PostgreSQL</div>
                            <div class="text-xs text-gray-400">Relational</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                        <div class="w-10 h-10 bg-gradient-to-br from-orange-400 to-orange-500 rounded-lg flex items-center justify-center font-bold">M</div>
                        <div>
                            <div class="font-semibold">MySQL</div>
                            <div class="text-xs text-gray-400">Relational</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                        <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center font-bold">M</div>
                        <div>
                            <div class="font-semibold">MongoDB</div>
                            <div class="text-xs text-gray-400">NoSQL</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                        <div class="w-10 h-10 bg-gradient-to-br from-red-500 to-red-600 rounded-lg flex items-center justify-center font-bold">R</div>
                        <div>
                            <div class="font-semibold">Redis</div>
                            <div class="text-xs text-gray-400">Caching</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DevOps -->
            <div class="bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10">
                <h3 class="text-xl font-bold mb-6 flex items-center gap-3">
                    <span class="w-10 h-10 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </span>
                    DevOps & Cloud
                </h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                        <div class="w-10 h-10 bg-gradient-to-br from-orange-400 to-orange-600 rounded-lg flex items-center justify-center font-bold">A</div>
                        <div>
                            <div class="font-semibold">AWS</div>
                            <div class="text-xs text-gray-400">Cloud Platform</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-blue-600 rounded-lg flex items-center justify-center font-bold">D</div>
                        <div>
                            <div class="font-semibold">Docker</div>
                            <div class="text-xs text-gray-400">Containers</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                        <div class="w-10 h-10 bg-gradient-to-br from-gray-700 to-gray-800 rounded-lg flex items-center justify-center font-bold">G</div>
                        <div>
                            <div class="font-semibold">GitHub</div>
                            <div class="text-xs text-gray-400">CI/CD</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                        <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-teal-500 rounded-lg flex items-center justify-center font-bold">N</div>
                        <div>
                            <div class="font-semibold">Nginx</div>
                            <div class="text-xs text-gray-400">Web Server</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Development Process Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-blue-50 px-4 py-2 rounded-full">
                Our Process
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">How We Build Your Application</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">A proven 6-step methodology that delivers exceptional results on time and within budget</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="relative group">
                <div class="absolute -left-4 top-0 text-8xl font-bold text-blue-100 group-hover:text-blue-200 transition-colors">1</div>
                <div class="relative bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 ml-8">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Discovery & Planning</h3>
                    <p class="text-gray-600 text-sm">We analyze your requirements, understand your business goals, and create a detailed project roadmap.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative group">
                <div class="absolute -left-4 top-0 text-8xl font-bold text-blue-100 group-hover:text-blue-200 transition-colors">2</div>
                <div class="relative bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 ml-8">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">UI/UX Design</h3>
                    <p class="text-gray-600 text-sm">Our designers create intuitive interfaces and user experiences that delight your customers.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative group">
                <div class="absolute -left-4 top-0 text-8xl font-bold text-blue-100 group-hover:text-blue-200 transition-colors">3</div>
                <div class="relative bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 ml-8">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Development</h3>
                    <p class="text-gray-600 text-sm">Agile development with 2-week sprints, regular demos, and continuous feedback integration.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="relative group">
                <div class="absolute -left-4 top-0 text-8xl font-bold text-blue-100 group-hover:text-blue-200 transition-colors">4</div>
                <div class="relative bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 ml-8">
                    <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Testing & QA</h3>
                    <p class="text-gray-600 text-sm">Comprehensive testing including unit tests, integration tests, and security audits.</p>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="relative group">
                <div class="absolute -left-4 top-0 text-8xl font-bold text-blue-100 group-hover:text-blue-200 transition-colors">5</div>
                <div class="relative bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 ml-8">
                    <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Deployment</h3>
                    <p class="text-gray-600 text-sm">Zero-downtime deployments with automated CI/CD pipelines and infrastructure setup.</p>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="relative group">
                <div class="absolute -left-4 top-0 text-8xl font-bold text-blue-100 group-hover:text-blue-200 transition-colors">6</div>
                <div class="relative bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 ml-8">
                    <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-emerald-600 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Support & Growth</h3>
                    <p class="text-gray-600 text-sm">Ongoing maintenance, performance monitoring, and feature enhancements as you scale.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-blue-50 px-4 py-2 rounded-full">
                Why Choose Us
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Built for Performance & Scale</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Every application we build is engineered for excellence from day one</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
            <!-- Responsive Design -->
            <div class="group text-center p-6 rounded-2xl hover:bg-gradient-to-br hover:from-blue-50 hover:to-indigo-50 transition-all duration-300">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Responsive Design</h3>
                <p class="text-gray-600 text-sm">Perfect on every device from mobile to 4K displays</p>
            </div>

            <!-- High Performance -->
            <div class="group text-center p-6 rounded-2xl hover:bg-gradient-to-br hover:from-green-50 hover:to-emerald-50 transition-all duration-300">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Lightning Fast</h3>
                <p class="text-gray-600 text-sm">Optimized for speed with CDN and advanced caching</p>
            </div>

            <!-- Security -->
            <div class="group text-center p-6 rounded-2xl hover:bg-gradient-to-br hover:from-red-50 hover:to-pink-50 transition-all duration-300">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-red-500 to-pink-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Bank-Grade Security</h3>
                <p class="text-gray-600 text-sm">OWASP compliant with encryption and secure auth</p>
            </div>

            <!-- Scalability -->
            <div class="group text-center p-6 rounded-2xl hover:bg-gradient-to-br hover:from-purple-50 hover:to-indigo-50 transition-all duration-300">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Infinitely Scalable</h3>
                <p class="text-gray-600 text-sm">Handle 100 to 10 million users seamlessly</p>
            </div>
        </div>
    </div>
</section>

<!-- Industries Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-blue-50 via-white to-indigo-50/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-blue-50 px-4 py-2 rounded-full">
                Industries We Serve
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Solutions for Every Industry</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Deep expertise across diverse sectors with African market focus</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-6">
            <div class="group bg-white rounded-2xl p-6 text-center shadow-lg border border-gray-100 hover:shadow-xl hover:border-blue-200 transition-all duration-300">
                <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-sm font-semibold text-gray-900">FinTech</h3>
            </div>

            <div class="group bg-white rounded-2xl p-6 text-center shadow-lg border border-gray-100 hover:shadow-xl hover:border-green-200 transition-all duration-300">
                <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-sm font-semibold text-gray-900">Healthcare</h3>
            </div>

            <div class="group bg-white rounded-2xl p-6 text-center shadow-lg border border-gray-100 hover:shadow-xl hover:border-purple-200 transition-all duration-300">
                <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-sm font-semibold text-gray-900">EdTech</h3>
            </div>

            <div class="group bg-white rounded-2xl p-6 text-center shadow-lg border border-gray-100 hover:shadow-xl hover:border-orange-200 transition-all duration-300">
                <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path>
                    </svg>
                </div>
                <h3 class="text-sm font-semibold text-gray-900">Logistics</h3>
            </div>

            <div class="group bg-white rounded-2xl p-6 text-center shadow-lg border border-gray-100 hover:shadow-xl hover:border-teal-200 transition-all duration-300">
                <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-sm font-semibold text-gray-900">AgriTech</h3>
            </div>

            <div class="group bg-white rounded-2xl p-6 text-center shadow-lg border border-gray-100 hover:shadow-xl hover:border-yellow-200 transition-all duration-300">
                <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-yellow-500 to-amber-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-sm font-semibold text-gray-900">Real Estate</h3>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white" x-data="{ openFaq: null }">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-blue-50 px-4 py-2 rounded-full">
                FAQs
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Frequently Asked Questions</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Everything you need to know about our web development services</p>
        </div>

        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl border border-gray-200 overflow-hidden">
                <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">How long does it take to build a web application?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 1" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">Timeline depends on complexity. Simple web apps take 4-8 weeks, medium complexity 8-16 weeks, and enterprise applications 16-24+ weeks. We provide detailed timelines during discovery and deliver MVPs quickly so you can start seeing value early.</p>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl border border-gray-200 overflow-hidden">
                <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">What technologies do you specialize in?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 2" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">We specialize in Laravel and Node.js for backend, React and Vue.js for frontend, with PostgreSQL/MySQL/MongoDB for databases. We also work with Next.js, Python (Django/Flask), and use Docker, AWS, and modern CI/CD practices for deployment.</p>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl border border-gray-200 overflow-hidden">
                <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">Do you provide ongoing support after launch?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 3" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">Absolutely! We offer flexible support packages including bug fixes, security updates, performance monitoring, feature enhancements, and 24/7 emergency support. Most clients choose our monthly retainer plans for continuous improvement.</p>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl border border-gray-200 overflow-hidden">
                <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">Can you integrate with existing systems?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 4" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">Yes! We regularly integrate with payment gateways (M-Pesa, Stripe, PayPal), ERPs (SAP, Oracle), CRMs (Salesforce, HubSpot), accounting software, and custom legacy systems. We build robust APIs that connect seamlessly with your existing infrastructure.</p>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl border border-gray-200 overflow-hidden">
                <button @click="openFaq = openFaq === 5 ? null : 5" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">What's your pricing model?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 5 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 5" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">We offer both fixed-price and time & materials models. Simple projects work well with fixed pricing, while complex or evolving projects benefit from T&M. Most web applications range from $5,000 for simple apps to $100,000+ for enterprise solutions. We provide detailed quotes after understanding your requirements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><circle cx=\"50\" cy=\"50\" r=\"1\" fill=\"white\"/></svg>'); background-size: 50px 50px;"></div>
    </div>

    <div class="relative max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <div class="fade-in-up">
            <span class="inline-flex items-center gap-2 text-blue-200 font-semibold text-sm uppercase tracking-wide mb-6 bg-white/10 px-4 py-2 rounded-full">
                Start Building Today
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6">Ready to Build Your Web Application?</h2>
            <p class="text-lg sm:text-xl text-blue-100 mb-10 max-w-2xl mx-auto">
                Let's discuss your project requirements and create a powerful web application that drives your business forward. Free consultation included.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="{{ url('/contact') }}" class="bg-white text-blue-600 px-8 py-4 rounded-2xl text-lg font-semibold hover:bg-blue-50 hover:shadow-2xl transition-all duration-300 hover:scale-105 flex items-center gap-2">
                    Get Free Consultation
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="{{ url('/portfolio') }}" class="text-white/90 hover:text-white font-medium border-b-2 border-white/40 hover:border-white transition-all duration-300 py-2 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    View Our Portfolio
                </a>
            </div>

            <!-- Trust Indicators -->
            <div class="mt-12 pt-8 border-t border-white/20">
                <div class="flex flex-wrap justify-center items-center gap-8 text-white/80 text-sm">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Free Initial Consultation
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Flexible Payment Plans
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        24-48hr Response Time
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
