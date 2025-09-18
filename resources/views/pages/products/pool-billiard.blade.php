@extends('layouts.detail')

@section('title', 'Pool Billiard App - Community & Match Management')
@section('description', 'Pool players community app with match management, tournaments, player rankings, and social features for billiard enthusiasts.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[70vh] flex items-center">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?q=80&w=2070" alt="Pool Billiard App" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-br from-dark-turquoise/90 via-turquoise-600/80 to-cyan-accent/70"></div>
  </div>
  <div class="relative z-10 w-full container px-6 sm:px-10 md:px-16 lg:px-24 xl:px-32 py-20">
    <div class="max-w-4xl">
      <div class="fade-in-up">
        <div class="bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-4 py-2 rounded-full text-sm font-semibold mb-4 inline-block">Pool Community App</div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight font-heading">
          Pool Billiard Community App
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl leading-relaxed">
          Connect with pool players worldwide, manage matches and tournaments, track rankings, and build your billiard community with our comprehensive mobile and web platform.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
          <a href="#download" class="bg-cyan-300 text-dark-turquoise px-6 sm:px-8 py-3 sm:py-4 rounded-lg text-base sm:text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
            Download App
          </a>
          <a href="#features" class="text-white/90 hover:text-white font-medium border-b border-white/40 hover:border-cyan-300 transition-all duration-300 py-2">
            Explore Features
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- App Screenshots -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-turquoise-50/30 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Experience the App</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Beautiful, intuitive interface designed for pool enthusiasts</p>
    </div>
    
    <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
      <div class="fade-in-up">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=2070" alt="Player Dashboard" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">Player Dashboard</h3>
            <p class="text-gray-600">Track your stats, rankings, match history, and connect with the pool community.</p>
          </div>
        </div>
      </div>
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1551698618-1dfe5d97d256?q=80&w=2070" alt="Match Management" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">Match Management</h3>
            <p class="text-gray-600">Create, join, and manage matches with real-time scoring and tournament brackets.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="grid lg:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up">
        <img src="https://images.unsplash.com/photo-1556075798-4825dfaaf498?q=80&w=2076" alt="Tournament System" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Tournament System</h4>
          <p class="text-sm text-gray-600">Organize and participate in local and online tournaments with automated brackets.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 100ms;">
        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071" alt="Social Features" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Social Community</h4>
          <p class="text-sm text-gray-600">Connect with players, share achievements, and build your pool network.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 200ms;">
        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070" alt="Statistics Tracking" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Performance Analytics</h4>
          <p class="text-sm text-gray-600">Detailed statistics and performance tracking to improve your game.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Key Features -->
<section id="features" class="py-20 md:py-28 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">Everything Pool Players Need</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Comprehensive features for players, venues, and tournament organizers</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Match Management -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up">
        <div class="w-16 h-16 bg-gradient-to-r from-turquoise-600 to-cyan-accent rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Smart Match Management</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Create, join, and manage pool matches with real-time scoring, rule sets, and match history tracking.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Real-time match scoring and tracking</li>
          <li>• Multiple game formats (8-ball, 9-ball, etc.)</li>
          <li>• Match scheduling and notifications</li>
          <li>• Automatic handicap calculations</li>
          <li>• Match replay and analysis</li>
        </ul>
      </div>
      
      <!-- Tournament System -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 100ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-cyan-accent to-turquoise-500 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Tournament Organization</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Organize and participate in tournaments with automated brackets, prize tracking, and live updates.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Automated tournament brackets</li>
          <li>• Single/double elimination formats</li>
          <li>• Prize pool management</li>
          <li>• Live tournament updates</li>
          <li>• Tournament history and records</li>
        </ul>
      </div>
      
      <!-- Player Rankings -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 200ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-turquoise-700 to-cyan-600 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Player Rankings</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Dynamic ranking system with ELO ratings, skill levels, and leaderboards for competitive play.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• ELO-based ranking system</li>
          <li>• Skill level classifications</li>
          <li>• Local and global leaderboards</li>
          <li>• Achievement badges and milestones</li>
          <li>• Ranking history and progression</li>
        </ul>
      </div>
      
      <!-- Social Features -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 300ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-emerald-500 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Community Features</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Connect with pool players worldwide, share achievements, and build your billiard network.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Player profiles and connections</li>
          <li>• Achievement sharing and feeds</li>
          <li>• Local venue discovery</li>
          <li>• Group challenges and leagues</li>
          <li>• In-app messaging and chat</li>
        </ul>
      </div>
      
      <!-- Statistics Tracking -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 400ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-indigo-500 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2-2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Performance Analytics</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Comprehensive statistics tracking to analyze and improve your pool game performance.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Detailed match statistics</li>
          <li>• Win/loss ratios and trends</li>
          <li>• Shot accuracy and patterns</li>
          <li>• Performance improvement insights</li>
          <li>• Custom stat tracking</li>
        </ul>
      </div>
      
      <!-- Venue Integration -->
      <div class="bg-white rounded-2xl p-8 shadow-lg card-hover fade-in-up" style="transition-delay: 500ms;">
        <div class="w-16 h-16 bg-gradient-to-r from-teal-600 to-cyan-600 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
        </div>
        <h3 class=" text-2xl font-bold text-dark-turquoise mb-4">Venue Integration</h3>
        <p class="text-gray-600 leading-relaxed mb-4">Find and connect with local pool halls, book tables, and manage venue-based tournaments.</p>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>• Local venue discovery and ratings</li>
          <li>• Table booking and availability</li>
          <li>• Venue-hosted tournaments</li>
          <li>• Check-in and location services</li>
          <li>• Venue partnership programs</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section id="download" class="py-20 md:py-28 px-8 bg-gradient-to-br from-dark-turquoise to-turquoise-600">
  <div class="max-w-4xl mx-auto text-center">
    <div class="fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-white mb-6">Join the Pool Community Today</h2>
      <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl mx-auto">Connect with thousands of pool players worldwide and elevate your billiard game.</p>
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <a href="#" class="bg-cyan-300 text-dark-turquoise px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
          Download for iOS
        </a>
        <a href="#" class="bg-cyan-300 text-dark-turquoise px-8 py-4 rounded-lg text-lg font-semibold btn-animate shadow-lg hover:bg-white hover:text-dark-turquoise transition-colors">
          Download for Android
        </a>
      </div>
      <p class="text-gray-300 mt-6">Free to download • Available worldwide</p>
    </div>
  </div>
</section>
@endsection
