@extends('layouts.detail')

@section('title', 'Events Pro - Complete Event Management Solution')
@section('description', 'Professional event management software with planning tools, vendor coordination, attendee management, and real-time event execution capabilities.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[70vh] flex items-center">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=2069" alt="Events Pro" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-br from-dark-turquoise/90 via-turquoise-600/80 to-cyan-accent/70"></div>
  </div>
  <div class="relative z-10 w-full container px-6 sm:px-10 md:px-16 lg:px-24 xl:px-32 py-20">
    <div class="max-w-4xl">
      <div class="fade-in-up">
        <div class="bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-4 py-2 rounded-full text-sm font-semibold mb-4 inline-block">Event Management Software</div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight font-heading">
          Events Pro Management Suite
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl leading-relaxed">
          Complete event management solution featuring planning tools, vendor coordination, attendee management, ticketing system, and real-time event execution capabilities for professional event organizers.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
          <a href="#pricing" class="bg-cyan-300 text-dark-turquoise px-6 sm:px-8 py-3 sm:py-4 rounded-lg text-base sm:text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
            Start Free Trial
          </a>
          <a href="#demo" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
            Watch Demo
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Platform Screenshots -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-turquoise-50/30 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">See Events Pro in Action</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Professional interface designed for event planners and organizers</p>
    </div>
    
    <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
      <div class="fade-in-up">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070" alt="Event Dashboard" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">Event Command Center</h3>
            <p class="text-gray-600">Centralized dashboard for managing all aspects of your events from planning to execution.</p>
          </div>
        </div>
      </div>
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?q=80&w=2070" alt="Attendee Management" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">Attendee Experience Hub</h3>
            <p class="text-gray-600">Comprehensive attendee management with registration, check-in, and engagement tracking.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="grid lg:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up">
        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=2070" alt="Vendor Management" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Vendor Coordination</h4>
          <p class="text-sm text-gray-600">Streamlined vendor management with contracts, payments, and performance tracking.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 100ms;">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=2070" alt="Timeline Planning" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Timeline Management</h4>
          <p class="text-sm text-gray-600">Visual timeline planning with task dependencies and milestone tracking.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 200ms;">
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015" alt="Event Analytics" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Event Analytics</h4>
          <p class="text-sm text-gray-600">Comprehensive analytics for event performance and ROI measurement.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="py-20 md:py-28 px-8 bg-gradient-to-br from-dark-turquoise to-turquoise-600">
  <div class="max-w-4xl mx-auto text-center">
    <div class="fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-white mb-6">Ready to Elevate Your Events?</h2>
      <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl mx-auto">Join thousands of event professionals who trust Events Pro for their most important occasions.</p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="#" class="bg-cyan-300 text-dark-turquoise px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
          Start Free Trial
        </a>
        <a href="#" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
          Schedule Demo
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
