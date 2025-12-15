@extends('layouts.detail')

@section('title', 'Digital Transformation Services - Ascend Stratus')
@section('description', 'Revolutionize your business with our digital transformation services. AI/ML, Cloud, IoT, and Blockchain solutions for modern enterprises. Proven 40% cost reduction.')

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
        0%, 100% { box-shadow: 0 0 20px rgba(147, 51, 234, 0.3); }
        50% { box-shadow: 0 0 40px rgba(147, 51, 234, 0.6); }
    }
    @keyframes countUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .float-animation { animation: float 6s ease-in-out infinite; }
    .float-animation-delayed { animation: float-delayed 6s ease-in-out infinite 2s; }
    .pulse-glow { animation: pulse-glow 3s ease-in-out infinite; }
    .count-up { animation: countUp 1s ease-out forwards; }
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
<section class="bg-gradient-to-br from-purple-50 via-white to-pink-50/30 py-16 sm:py-20 md:py-28 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-purple-200/30 rounded-full blur-3xl float-animation"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-pink-200/30 rounded-full blur-3xl float-animation-delayed"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-r from-purple-100/20 to-pink-100/20 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16 items-center">
            <!-- Left Column - Content -->
            <div class="order-2 lg:order-1">
                <div class="mb-6 sm:mb-8">
                    <a href="{{ url('/services') }}" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-medium mb-4 transition-colors duration-300">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Back to Services
                    </a>
                    <span class="inline-flex items-center gap-2 text-purple-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 sm:mb-6 bg-purple-50 px-3 sm:px-4 py-2 rounded-full">
                        <div class="w-2 h-2 bg-purple-500 rounded-full animate-pulse"></div>
                        Digital Transformation
                    </span>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 sm:mb-8 leading-[1.1]">
                        Transform Your Business
                        <span class="bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 bg-clip-text text-transparent">for the Digital Age</span>
                    </h1>
                </div>

                <p class="text-base sm:text-lg md:text-xl text-gray-600 mb-8 sm:mb-10 leading-relaxed">
                    Don't just digitize - transform. Our comprehensive digital transformation services help African businesses reduce costs by 40%, increase efficiency by 60%, and unlock new revenue streams through innovative technology.
                </p>

                <!-- Impact Stats -->
                <div class="grid grid-cols-3 gap-4 mb-8 sm:mb-10">
                    <div class="text-center p-4 bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-100 shadow-lg">
                        <div class="text-2xl sm:text-3xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">40%</div>
                        <div class="text-xs sm:text-sm text-gray-600">Cost Reduction</div>
                    </div>
                    <div class="text-center p-4 bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-100 shadow-lg">
                        <div class="text-2xl sm:text-3xl font-bold bg-gradient-to-r from-pink-600 to-indigo-600 bg-clip-text text-transparent">60%</div>
                        <div class="text-xs sm:text-sm text-gray-600">Efficiency Gain</div>
                    </div>
                    <div class="text-center p-4 bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-100 shadow-lg">
                        <div class="text-2xl sm:text-3xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">3x</div>
                        <div class="text-xs sm:text-sm text-gray-600">Faster Decisions</div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 items-stretch sm:items-center">
                    <a href="{{ url('/contact') }}" class="group relative bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-base sm:text-lg font-semibold hover:shadow-2xl hover:shadow-purple-500/25 transition-all duration-500 hover:scale-105 overflow-hidden">
                        <span class="relative flex items-center justify-center gap-2">
                            Get Free Assessment
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="#transformation-pillars" class="group flex items-center justify-center gap-2 text-gray-700 hover:text-purple-600 font-semibold transition-all duration-300">
                        <span class="w-12 h-12 rounded-full bg-white shadow-lg flex items-center justify-center group-hover:shadow-xl transition-all duration-300">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </span>
                        Learn More
                    </a>
                </div>
            </div>

            <!-- Right Column - Image -->
            <div class="order-1 lg:order-2">
                <div class="relative group">
                    <div class="relative overflow-hidden rounded-2xl sm:rounded-3xl shadow-2xl pulse-glow">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1920&q=80"
                             alt="Digital transformation"
                             class="w-full h-[250px] sm:h-[350px] md:h-[450px] lg:h-[550px] object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-600/20 via-pink-600/10 to-indigo-600/20 group-hover:opacity-75 transition-opacity duration-500"></div>
                    </div>

                    <!-- Floating ROI Card -->
                    <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl p-4 sm:p-6 border border-gray-100 float-animation hidden sm:block">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500">Average ROI</div>
                                <div class="text-lg font-bold text-gray-900">300% in 18mo</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Transform Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-purple-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-purple-50 px-4 py-2 rounded-full">
                The Case for Change
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Why Digital Transformation Matters</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Companies that embrace digital transformation outperform their peers by 26% in profitability</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-center">
            <!-- Before/After Comparison -->
            <div class="space-y-6">
                <div class="bg-gradient-to-br from-red-50 to-orange-50 rounded-2xl p-6 border border-red-100">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Before Transformation</h3>
                    </div>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                            Manual data entry taking 20+ hours/week
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                            Siloed departments, no real-time visibility
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                            Decisions based on outdated reports
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                            High operational costs, slow growth
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6 border border-green-100">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">After Transformation</h3>
                    </div>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Automated workflows saving 80% of time
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Unified platform with real-time dashboards
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            AI-powered insights for faster decisions
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            40% lower costs, 2x revenue growth
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Statistics -->
            <div class="grid grid-cols-2 gap-6">
                <div class="bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl p-6 text-white text-center">
                    <div class="text-4xl sm:text-5xl font-bold mb-2">70%</div>
                    <div class="text-purple-100 text-sm">of African businesses will prioritize digital in 2025</div>
                </div>
                <div class="bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl p-6 text-white text-center">
                    <div class="text-4xl sm:text-5xl font-bold mb-2">$115B</div>
                    <div class="text-pink-100 text-sm">African digital economy by 2030</div>
                </div>
                <div class="bg-gradient-to-br from-orange-500 to-amber-600 rounded-2xl p-6 text-white text-center">
                    <div class="text-4xl sm:text-5xl font-bold mb-2">5x</div>
                    <div class="text-orange-100 text-sm">ROI for digitally mature companies</div>
                </div>
                <div class="bg-gradient-to-br from-teal-500 to-cyan-600 rounded-2xl p-6 text-white text-center">
                    <div class="text-4xl sm:text-5xl font-bold mb-2">23%</div>
                    <div class="text-teal-100 text-sm">higher revenue growth rate</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Transformation Pillars Section -->
<section id="transformation-pillars" class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900 text-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-purple-400 font-semibold text-sm uppercase tracking-wide mb-4 bg-purple-500/10 px-4 py-2 rounded-full border border-purple-500/20">
                Our Framework
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4 sm:mb-6">The Four Pillars of Transformation</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">A holistic approach that addresses technology, process, people, and culture</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Pillar 1: Technology -->
            <div class="group bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10 hover:border-purple-500/30 transition-all duration-300 hover:bg-white/10">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Technology Modernization</h3>
                <p class="text-gray-400 mb-4">Cloud migration, legacy system modernization, and cutting-edge tech stack implementation.</p>
                <ul class="space-y-2 text-sm text-gray-500">
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-purple-500 rounded-full"></span> Cloud Infrastructure</li>
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-purple-500 rounded-full"></span> API Integration</li>
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-purple-500 rounded-full"></span> Data Architecture</li>
                </ul>
            </div>

            <!-- Pillar 2: Process -->
            <div class="group bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10 hover:border-pink-500/30 transition-all duration-300 hover:bg-white/10">
                <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Process Automation</h3>
                <p class="text-gray-400 mb-4">Streamline operations with intelligent automation and workflow optimization.</p>
                <ul class="space-y-2 text-sm text-gray-500">
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-pink-500 rounded-full"></span> RPA Implementation</li>
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-pink-500 rounded-full"></span> Workflow Design</li>
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-pink-500 rounded-full"></span> Process Mining</li>
                </ul>
            </div>

            <!-- Pillar 3: People -->
            <div class="group bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10 hover:border-orange-500/30 transition-all duration-300 hover:bg-white/10">
                <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-amber-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">People & Skills</h3>
                <p class="text-gray-400 mb-4">Upskill your workforce and build a digitally fluent organization.</p>
                <ul class="space-y-2 text-sm text-gray-500">
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-orange-500 rounded-full"></span> Digital Training</li>
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-orange-500 rounded-full"></span> Change Management</li>
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-orange-500 rounded-full"></span> Team Empowerment</li>
                </ul>
            </div>

            <!-- Pillar 4: Culture -->
            <div class="group bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10 hover:border-teal-500/30 transition-all duration-300 hover:bg-white/10">
                <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Culture & Innovation</h3>
                <p class="text-gray-400 mb-4">Foster a culture of continuous innovation and digital-first thinking.</p>
                <ul class="space-y-2 text-sm text-gray-500">
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-teal-500 rounded-full"></span> Innovation Labs</li>
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-teal-500 rounded-full"></span> Agile Mindset</li>
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-teal-500 rounded-full"></span> Data-Driven Culture</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Technologies Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-purple-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-purple-50 px-4 py-2 rounded-full">
                Technologies
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Cutting-Edge Technologies We Implement</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Leverage the power of emerging technologies to transform your business</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
            <!-- AI/ML -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-purple-200 transition-all duration-300">
                <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 text-center group-hover:text-purple-600 transition-colors">AI & Machine Learning</h3>
                <p class="text-gray-600 text-sm text-center mb-4">Predictive analytics, intelligent automation, and AI-powered decision making.</p>
                <ul class="space-y-2 text-sm text-gray-500">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Chatbots & Virtual Assistants</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Demand Forecasting</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Fraud Detection</li>
                </ul>
            </div>

            <!-- Cloud -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-purple-200 transition-all duration-300">
                <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 text-center group-hover:text-purple-600 transition-colors">Cloud Computing</h3>
                <p class="text-gray-600 text-sm text-center mb-4">Scalable infrastructure, reduced costs, and enhanced collaboration.</p>
                <ul class="space-y-2 text-sm text-gray-500">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> AWS / Azure / GCP</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Multi-Cloud Strategy</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Serverless Architecture</li>
                </ul>
            </div>

            <!-- IoT -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-purple-200 transition-all duration-300">
                <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 text-center group-hover:text-purple-600 transition-colors">IoT Solutions</h3>
                <p class="text-gray-600 text-sm text-center mb-4">Connect devices, gather real-time data, and enable smart operations.</p>
                <ul class="space-y-2 text-sm text-gray-500">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Asset Tracking</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Predictive Maintenance</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Smart Agriculture</li>
                </ul>
            </div>

            <!-- Data Analytics -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:border-purple-200 transition-all duration-300">
                <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 text-center group-hover:text-purple-600 transition-colors">Data & Analytics</h3>
                <p class="text-gray-600 text-sm text-center mb-4">Turn data into insights with advanced analytics and visualization.</p>
                <ul class="space-y-2 text-sm text-gray-500">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Business Intelligence</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Real-time Dashboards</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Data Warehousing</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Transformation Roadmap -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-purple-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-purple-50 px-4 py-2 rounded-full">
                Our Methodology
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Your Transformation Journey</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">A proven 5-phase methodology that ensures sustainable digital transformation</p>
        </div>

        <div class="relative">
            <!-- Timeline Line -->
            <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-1 bg-gradient-to-r from-purple-500 via-pink-500 to-indigo-500 transform -translate-y-1/2"></div>

            <div class="grid lg:grid-cols-5 gap-8">
                <!-- Phase 1 -->
                <div class="relative text-center">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg relative z-10">1</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Assess</h3>
                    <p class="text-gray-600 text-sm">Digital maturity assessment and gap analysis</p>
                    <div class="mt-4 text-xs text-purple-600 font-semibold">2-4 Weeks</div>
                </div>

                <!-- Phase 2 -->
                <div class="relative text-center">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-pink-500 to-pink-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg relative z-10">2</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Strategize</h3>
                    <p class="text-gray-600 text-sm">Roadmap development and priority planning</p>
                    <div class="mt-4 text-xs text-pink-600 font-semibold">4-6 Weeks</div>
                </div>

                <!-- Phase 3 -->
                <div class="relative text-center">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-orange-500 to-orange-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg relative z-10">3</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Build</h3>
                    <p class="text-gray-600 text-sm">Solution development and integration</p>
                    <div class="mt-4 text-xs text-orange-600 font-semibold">8-16 Weeks</div>
                </div>

                <!-- Phase 4 -->
                <div class="relative text-center">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-teal-500 to-teal-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg relative z-10">4</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Deploy</h3>
                    <p class="text-gray-600 text-sm">Implementation and change management</p>
                    <div class="mt-4 text-xs text-teal-600 font-semibold">4-8 Weeks</div>
                </div>

                <!-- Phase 5 -->
                <div class="relative text-center">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg relative z-10">5</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Optimize</h3>
                    <p class="text-gray-600 text-sm">Continuous improvement and scaling</p>
                    <div class="mt-4 text-xs text-indigo-600 font-semibold">Ongoing</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Study / Success Metrics -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-purple-50 via-white to-pink-50/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-purple-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-purple-50 px-4 py-2 rounded-full">
                Success Stories
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Transformation in Action</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Real results from businesses that embraced digital transformation</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Case Study 1 -->
            <div class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center text-white font-bold">F</div>
                    <div>
                        <div class="font-bold text-gray-900">Financial Services</div>
                        <div class="text-sm text-gray-500">East Africa</div>
                    </div>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-4">Digital Banking Platform</h3>
                <p class="text-gray-600 text-sm mb-6">Transformed legacy banking systems into a modern digital platform serving 500K+ customers.</p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="text-center p-3 bg-green-50 rounded-xl">
                        <div class="text-2xl font-bold text-green-600">65%</div>
                        <div class="text-xs text-gray-600">Cost Reduction</div>
                    </div>
                    <div class="text-center p-3 bg-blue-50 rounded-xl">
                        <div class="text-2xl font-bold text-blue-600">4x</div>
                        <div class="text-xs text-gray-600">Faster Processing</div>
                    </div>
                </div>
            </div>

            <!-- Case Study 2 -->
            <div class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center text-white font-bold">A</div>
                    <div>
                        <div class="font-bold text-gray-900">Agriculture</div>
                        <div class="text-sm text-gray-500">Kenya</div>
                    </div>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-4">Smart Farming IoT</h3>
                <p class="text-gray-600 text-sm mb-6">Implemented IoT sensors and AI-driven analytics for precision agriculture across 10K+ hectares.</p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="text-center p-3 bg-green-50 rounded-xl">
                        <div class="text-2xl font-bold text-green-600">35%</div>
                        <div class="text-xs text-gray-600">Yield Increase</div>
                    </div>
                    <div class="text-center p-3 bg-blue-50 rounded-xl">
                        <div class="text-2xl font-bold text-blue-600">50%</div>
                        <div class="text-xs text-gray-600">Water Savings</div>
                    </div>
                </div>
            </div>

            <!-- Case Study 3 -->
            <div class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center text-white font-bold">L</div>
                    <div>
                        <div class="font-bold text-gray-900">Logistics</div>
                        <div class="text-sm text-gray-500">Pan-African</div>
                    </div>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-4">Supply Chain Automation</h3>
                <p class="text-gray-600 text-sm mb-6">End-to-end supply chain digitization with real-time tracking and automated logistics.</p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="text-center p-3 bg-green-50 rounded-xl">
                        <div class="text-2xl font-bold text-green-600">40%</div>
                        <div class="text-xs text-gray-600">Delivery Speed</div>
                    </div>
                    <div class="text-center p-3 bg-blue-50 rounded-xl">
                        <div class="text-2xl font-bold text-blue-600">25%</div>
                        <div class="text-xs text-gray-600">Cost Savings</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white" x-data="{ openFaq: null }">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="inline-flex items-center gap-2 text-purple-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-purple-50 px-4 py-2 rounded-full">
                FAQs
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">Common Questions</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Everything you need to know about digital transformation</p>
        </div>

        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl border border-gray-200 overflow-hidden">
                <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">How long does a typical digital transformation take?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 1" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">Full transformation typically spans 12-24 months, but we deliver quick wins within the first 3 months. We use an agile approach with phased implementation, so you start seeing ROI early while building toward comprehensive transformation.</p>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl border border-gray-200 overflow-hidden">
                <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">What ROI can we expect from digital transformation?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 2" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">Our clients typically see 300% ROI within 18 months. This comes from cost reduction (20-40% average), revenue growth (new digital channels), and efficiency gains (60%+ improvement in process speed). We help you calculate expected ROI during the assessment phase.</p>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl border border-gray-200 overflow-hidden">
                <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">How do you handle change management?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 3" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">Change management is embedded in our methodology. We include stakeholder engagement, training programs, communication plans, and champion networks. We've found that 70% of transformation success depends on people adoption, not just technology.</p>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl border border-gray-200 overflow-hidden">
                <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">Can you work with our existing systems?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 4" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">Absolutely. We specialize in legacy system integration and modernization. We can wrap legacy systems with modern APIs, gradually migrate functionality, or build hybrid architectures. You don't need to replace everything at once - we create a practical path forward.</p>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl border border-gray-200 overflow-hidden">
                <button @click="openFaq = openFaq === 5 ? null : 5" class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-gray-900">What's the investment required?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 5 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openFaq === 5" x-collapse class="px-6 pb-5">
                    <p class="text-gray-600">Investment varies based on scope and complexity. Entry-level departmental transformation starts at $25,000, while enterprise-wide programs can range from $100,000 to $500,000+. We offer flexible engagement models including phased approaches and outcome-based pricing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><circle cx=\"50\" cy=\"50\" r=\"1\" fill=\"white\"/></svg>'); background-size: 50px 50px;"></div>
    </div>

    <div class="relative max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <div class="fade-in-up">
            <span class="inline-flex items-center gap-2 text-purple-200 font-semibold text-sm uppercase tracking-wide mb-6 bg-white/10 px-4 py-2 rounded-full">
                Start Your Journey
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6">Ready to Transform Your Business?</h2>
            <p class="text-lg sm:text-xl text-purple-100 mb-10 max-w-2xl mx-auto">
                Book a free digital maturity assessment and discover how technology can accelerate your business growth. No obligations, just insights.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="{{ url('/contact') }}" class="bg-white text-purple-600 px-8 py-4 rounded-2xl text-lg font-semibold hover:bg-purple-50 hover:shadow-2xl transition-all duration-300 hover:scale-105 flex items-center gap-2">
                    Get Free Assessment
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
                        Free Digital Assessment
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        300% Average ROI
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Proven Methodology
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
