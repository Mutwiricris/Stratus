@extends('layouts.detail')

@section('title', 'Mobile App Development - Native & Cross-Platform Solutions | Ascend Stratus')
@section('description', 'Expert mobile app development for African businesses. Native iOS/Android and cross-platform solutions using Flutter, React Native, Swift, and Kotlin with M-Pesa integration.')

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
        0%, 100% { box-shadow: 0 0 20px rgba(16, 185, 129, 0.3); }
        50% { box-shadow: 0 0 40px rgba(16, 185, 129, 0.6); }
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
<section class="bg-gradient-to-br from-emerald-50 via-white to-teal-50/30 py-16 sm:py-20 md:py-28 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-emerald-200/30 rounded-full blur-3xl float-animation"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-teal-200/30 rounded-full blur-3xl float-animation-delayed"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-r from-emerald-100/20 to-teal-100/20 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16 items-center">
            <!-- Left Column - Content -->
            <div class="order-2 lg:order-1">
                <div class="mb-6 sm:mb-8">
                    <a href="{{ url('/services') }}" class="inline-flex items-center text-emerald-600 hover:text-emerald-700 font-medium mb-4 transition-colors duration-300">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Back to Services
                    </a>
                    <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 sm:mb-6 bg-emerald-50 px-3 sm:px-4 py-2 rounded-full">
                        <div class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></div>
                        Mobile App Development
                    </span>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 sm:mb-8 leading-[1.1]">
                        Mobile Apps
                        <span class="bg-gradient-to-r from-emerald-600 via-teal-600 to-cyan-600 bg-clip-text text-transparent">That Users Love</span>
                        <span class="block">& Businesses Trust</span>
                    </h1>
                </div>

                <p class="text-base sm:text-lg md:text-xl text-gray-600 mb-8 sm:mb-10 leading-relaxed">
                    Native iOS/Android and cross-platform apps built for African markets. M-Pesa integration, offline-first architecture, and USSD fallbacks to reach every user, everywhere.
                </p>

                <!-- Impact Stats -->
                <div class="grid grid-cols-3 gap-4 mb-8 sm:mb-10">
                    <div class="text-center p-4 bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-100 shadow-lg">
                        <div class="text-2xl sm:text-3xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">50+</div>
                        <div class="text-xs sm:text-sm text-gray-600">Apps Deployed</div>
                    </div>
                    <div class="text-center p-4 bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-100 shadow-lg">
                        <div class="text-2xl sm:text-3xl font-bold bg-gradient-to-r from-teal-600 to-cyan-600 bg-clip-text text-transparent">4.8</div>
                        <div class="text-xs sm:text-sm text-gray-600">Avg Store Rating</div>
                    </div>
                    <div class="text-center p-4 bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-100 shadow-lg">
                        <div class="text-2xl sm:text-3xl font-bold bg-gradient-to-r from-cyan-600 to-emerald-600 bg-clip-text text-transparent">1M+</div>
                        <div class="text-xs sm:text-sm text-gray-600">Total Downloads</div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 items-stretch sm:items-center">
                    <a href="{{ url('/contact') }}" class="group relative bg-gradient-to-r from-emerald-600 via-teal-600 to-cyan-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-base sm:text-lg font-semibold hover:shadow-2xl hover:shadow-emerald-500/25 transition-all duration-500 hover:scale-105 overflow-hidden">
                        <span class="relative flex items-center justify-center gap-2">
                            Start Your App
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="#app-types" class="group flex items-center justify-center gap-2 text-gray-700 hover:text-emerald-600 font-semibold transition-all duration-300">
                        <span class="w-12 h-12 rounded-full bg-white shadow-lg flex items-center justify-center group-hover:shadow-xl transition-all duration-300">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </span>
                        See What We Build
                    </a>
                </div>
            </div>

            <!-- Right Column - Image -->
            <div class="order-1 lg:order-2">
                <div class="relative group">
                    <div class="relative overflow-hidden rounded-2xl sm:rounded-3xl shadow-2xl pulse-glow">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=1920&q=80"
                             alt="Mobile app development"
                             class="w-full h-[250px] sm:h-[350px] md:h-[450px] lg:h-[550px] object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-600/20 via-teal-600/10 to-cyan-600/20 group-hover:opacity-75 transition-opacity duration-500"></div>
                    </div>

                    <!-- Floating Stats Card -->
                    <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl p-4 sm:p-6 border border-gray-100 float-animation hidden sm:block">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500">Platform</div>
                                <div class="text-lg font-bold text-gray-900">iOS & Android</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- App Types Section -->
<section id="app-types" class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-emerald-50 px-4 py-2 rounded-full">
                What We Build
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Mobile App Solutions</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">From consumer apps to enterprise solutions, we build mobile experiences that drive results</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Native iOS -->
            <div class="group bg-gradient-to-br from-gray-50 to-slate-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-gray-200">
                <div class="w-16 h-16 bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-gray-700 transition-colors">Native iOS Apps</h3>
                <p class="text-gray-600 mb-4">Premium iOS experiences built with Swift and SwiftUI for iPhone and iPad.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Swift & SwiftUI</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Apple Pay integration</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> App Store optimization</li>
                </ul>
            </div>

            <!-- Native Android -->
            <div class="group bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-green-100 hover:border-green-200">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.523 15.3414c-.5511 0-.9993-.4486-.9993-.9997s.4483-.9993.9993-.9993c.5511 0 .9993.4483.9993.9993.0001.5511-.4482.9997-.9993.9997m-11.046 0c-.5511 0-.9993-.4486-.9993-.9997s.4482-.9993.9993-.9993c.5511 0 .9993.4483.9993.9993 0 .5511-.4483.9997-.9993.9997m11.4045-6.02l1.9973-3.4592a.416.416 0 00-.1521-.5676.416.416 0 00-.5676.1521l-2.0223 3.503C15.5902 8.2439 13.8533 7.8508 12 7.8508s-3.5902.3931-5.1367 1.0989L4.841 5.4467a.4161.4161 0 00-.5677-.1521.4157.4157 0 00-.1521.5676l1.9973 3.4592C2.6889 11.1867.3432 14.6589 0 18.761h24c-.3435-4.1021-2.6892-7.5743-6.1185-9.4396"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors">Native Android Apps</h3>
                <p class="text-gray-600 mb-4">Feature-rich Android apps with Kotlin for phones and tablets.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Kotlin & Jetpack</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Material Design 3</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Google Pay support</li>
                </ul>
            </div>

            <!-- Flutter -->
            <div class="group bg-gradient-to-br from-blue-50 to-cyan-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-blue-100 hover:border-blue-200">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <span class="text-white font-bold text-lg">F</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">Flutter Apps</h3>
                <p class="text-gray-600 mb-4">Beautiful cross-platform apps with a single codebase for iOS and Android.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Single codebase</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Hot reload</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> 60 FPS performance</li>
                </ul>
            </div>

            <!-- React Native -->
            <div class="group bg-gradient-to-br from-cyan-50 to-teal-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-cyan-100 hover:border-cyan-200">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <span class="text-white font-bold text-lg">RN</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-cyan-600 transition-colors">React Native Apps</h3>
                <p class="text-gray-600 mb-4">JavaScript-powered cross-platform development with native performance.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-cyan-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> JavaScript/TypeScript</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-cyan-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Code sharing</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-cyan-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> OTA updates</li>
                </ul>
            </div>

            <!-- PWA -->
            <div class="group bg-gradient-to-br from-purple-50 to-pink-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-purple-100 hover:border-purple-200">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors">Progressive Web Apps</h3>
                <p class="text-gray-600 mb-4">Web apps that work like native apps with offline support and push notifications.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> No app store needed</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Offline capable</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Installable</li>
                </ul>
            </div>

            <!-- Enterprise -->
            <div class="group bg-gradient-to-br from-orange-50 to-amber-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-200">
                <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-amber-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-orange-600 transition-colors">Enterprise Apps</h3>
                <p class="text-gray-600 mb-4">Internal tools and B2B solutions with MDM support and enhanced security.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> SSO & LDAP</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> MDM compatible</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Private distribution</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- African-First Features Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-900 via-emerald-900 to-gray-900 text-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-emerald-400 font-semibold text-sm uppercase tracking-wide mb-4 bg-emerald-500/10 px-4 py-2 rounded-full border border-emerald-500/20">
                Built for Africa
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4 sm:mb-6">Mobile Features for African Markets</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">We understand the unique challenges and opportunities of the African mobile market</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- M-Pesa Integration -->
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:border-green-500/30 transition-all duration-300">
                <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">M-Pesa & Mobile Money</h3>
                <p class="text-gray-400 text-sm">Native integration with M-Pesa, Airtel Money, MTN, and all major mobile money providers across Africa.</p>
            </div>

            <!-- Offline-First -->
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:border-orange-500/30 transition-all duration-300">
                <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 010 12.728m0 0l-2.829-2.829m2.829 2.829L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-2.829-2.829m-4.243 2.829a4.978 4.978 0 01-1.414-2.83m-1.414 5.658a9 9 0 01-2.167-9.238m7.824 2.167a1 1 0 111.414 1.414m-1.414-1.414L3 3m8.293 8.293l1.414 1.414"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">Offline-First Design</h3>
                <p class="text-gray-400 text-sm">Full app functionality without internet. Data syncs automatically when connectivity returns.</p>
            </div>

            <!-- USSD Fallback -->
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:border-blue-500/30 transition-all duration-300">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">USSD & SMS Integration</h3>
                <p class="text-gray-400 text-sm">Reach feature phone users with USSD menus and SMS notifications for maximum market coverage.</p>
            </div>

            <!-- Low Bandwidth -->
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:border-purple-500/30 transition-all duration-300">
                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">Low Bandwidth Optimized</h3>
                <p class="text-gray-400 text-sm">Compressed assets, lazy loading, and efficient data usage for slow 2G/3G networks.</p>
            </div>
        </div>
    </div>
</section>

<!-- Development Process -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-emerald-50 px-4 py-2 rounded-full">
                Our Process
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">From Idea to App Store</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">A proven 5-step process that delivers high-quality apps on time</p>
        </div>

        <div class="grid lg:grid-cols-5 gap-8">
            <!-- Step 1 -->
            <div class="relative text-center">
                <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">1</div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Discovery</h3>
                <p class="text-gray-600 text-sm">Understand your goals, users, and market requirements</p>
            </div>

            <!-- Step 2 -->
            <div class="relative text-center">
                <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-teal-500 to-teal-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">2</div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Design</h3>
                <p class="text-gray-600 text-sm">Create intuitive UI/UX with interactive prototypes</p>
            </div>

            <!-- Step 3 -->
            <div class="relative text-center">
                <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">3</div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Develop</h3>
                <p class="text-gray-600 text-sm">Agile development with bi-weekly demos</p>
            </div>

            <!-- Step 4 -->
            <div class="relative text-center">
                <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">4</div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Test</h3>
                <p class="text-gray-600 text-sm">Comprehensive QA across devices and networks</p>
            </div>

            <!-- Step 5 -->
            <div class="relative text-center">
                <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">5</div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Launch</h3>
                <p class="text-gray-600 text-sm">App store submission and post-launch support</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white" x-data="{ openFaq: null }">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-emerald-50 px-4 py-2 rounded-full">
                FAQs
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Frequently Asked Questions</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Common questions about mobile app development</p>
        </div>

        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl border border-gray-200 overflow-hidden">
                <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">Should I build native or cross-platform?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 1" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">It depends on your requirements. Cross-platform (Flutter/React Native) is ideal for most apps - it's faster, more cost-effective, and maintains 95% code sharing. Native is recommended for apps requiring deep platform integration, high-performance gaming, or AR/VR features. We help you choose based on your specific needs.</p>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl border border-gray-200 overflow-hidden">
                <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">How long does it take to build an app?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 2" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">Simple apps take 8-12 weeks, medium complexity 12-20 weeks, and complex enterprise apps 20-32+ weeks. We deliver MVPs quickly (6-8 weeks) so you can start testing with real users while we continue development. We provide detailed timelines during discovery.</p>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl border border-gray-200 overflow-hidden">
                <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">How much does app development cost?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 3" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">Simple apps start at $10,000, medium complexity at $25,000-$50,000, and enterprise apps $75,000+. We offer flexible payment plans including milestone-based payments. Cross-platform development typically costs 30-40% less than building separate native apps.</p>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl border border-gray-200 overflow-hidden">
                <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">Do you help with app store submission?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 4" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">Absolutely! We handle the entire submission process for both Apple App Store and Google Play Store. This includes creating app store listings, screenshots, descriptions, and responding to any review feedback. We also optimize your listing for better discoverability (ASO).</p>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl border border-gray-200 overflow-hidden">
                <button @click="openFaq = openFaq === 5 ? null : 5" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">What about ongoing maintenance?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 5 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 5" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">We offer monthly maintenance packages that include bug fixes, OS updates compatibility, security patches, and minor feature updates. Packages start at $500/month. For larger needs, we provide dedicated developer time on a retainer basis for continuous development.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-r from-emerald-600 via-teal-600 to-cyan-600 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><circle cx=\"50\" cy=\"50\" r=\"1\" fill=\"white\"/></svg>'); background-size: 50px 50px;"></div>
    </div>

    <div class="relative max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <div class="fade-in-up">
            <span class="inline-flex items-center gap-2 text-emerald-200 font-semibold text-sm uppercase tracking-wide mb-6 bg-white/10 px-4 py-2 rounded-full">
                Start Building Today
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6">Ready to Build Your Mobile App?</h2>
            <p class="text-lg sm:text-xl text-emerald-100 mb-10 max-w-2xl mx-auto">
                Let's discuss your app idea and create a mobile experience that your users will love. Free consultation included.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="{{ url('/contact') }}" class="bg-white text-emerald-600 px-8 py-4 rounded-2xl text-lg font-semibold hover:bg-emerald-50 hover:shadow-2xl transition-all duration-300 hover:scale-105 flex items-center gap-2">
                    Start Your App Project
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="{{ url('/portfolio') }}" class="text-white/90 hover:text-white font-medium border-b-2 border-white/40 hover:border-white transition-all duration-300 py-2 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    View Our Apps
                </a>
            </div>

            <!-- Trust Indicators -->
            <div class="mt-12 pt-8 border-t border-white/20">
                <div class="flex flex-wrap justify-center items-center gap-8 text-white/80 text-sm">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Free Consultation
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        50+ Apps Delivered
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        4.8 Avg Rating
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
