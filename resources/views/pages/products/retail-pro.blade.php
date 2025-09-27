@extends('layouts.detail')

@section('title', 'Retail Pro - Wholesale & Retail Management System')
@section('description', 'Complete wholesale and retail management system with inventory tracking, POS integration, supplier management, and multi-channel sales.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[70vh] flex items-center">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=2070" alt="Modern African Retail Store" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-br from-dark-turquoise/90 via-turquoise-600/80 to-cyan-accent/70"></div>
  </div>
  <div class="relative z-10 w-full container px-6 sm:px-10 md:px-16 lg:px-24 xl:px-32 py-20">
    <div class="max-w-4xl">
      <div class="fade-in-up">
        <div class="bg-gradient-to-r from-turquoise-600 to-cyan-accent text-white px-4 py-2 rounded-full text-sm font-semibold mb-4 inline-block">Wholesale & Retail Management</div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight font-heading">
          Retail Pro Management System
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl leading-relaxed">
          Complete wholesale and retail management solution featuring inventory tracking, POS integration, supplier management, multi-channel sales, and comprehensive reporting.
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

<!-- Product Screenshots -->
<section class="py-20 md:py-28 bg-gradient-to-br from-gray-50 to-turquoise-50/30 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 fade-in-up">
      <h2 class=" text-4xl md:text-5xl font-bold text-dark-turquoise mb-4">See Retail Pro in Action</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Powerful interface designed for wholesale and retail professionals</p>
    </div>
    
    <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
      <div class="fade-in-up">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=2070" alt="African Business Analytics Dashboard" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">Business Dashboard</h3>
            <p class="text-gray-600">Real-time overview of sales, inventory levels, top products, and key performance metrics across all channels.</p>
          </div>
        </div>
      </div>
      <div class="fade-in-up" style="transition-delay: 200ms;">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=2070" alt="African Modern POS System" class="w-full h-80 object-cover">
          <div class="p-6">
            <h3 class=" text-2xl font-bold text-dark-turquoise mb-2">Point of Sale System</h3>
            <p class="text-gray-600">Intuitive POS interface with barcode scanning, payment processing, and receipt generation.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="grid lg:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up">
        <img src="https://images.unsplash.com/photo-1566576912321-d58ddd7a6088?q=80&w=2070" alt="African Warehouse Inventory Management" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Inventory Tracking</h4>
          <p class="text-sm text-gray-600">Real-time inventory management with automated reorder points and stock alerts.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 100ms;">
        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2070" alt="African Business Meeting - Supplier Relations" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Supplier Relations</h4>
          <p class="text-sm text-gray-600">Comprehensive supplier management with purchase orders and payment tracking.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in-up" style="transition-delay: 200ms;">
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015" alt="African Data Analytics and Reports" class="w-full h-48 object-cover">
        <div class="p-6">
          <h4 class="font-semibold text-dark-turquoise mb-2">Business Analytics</h4>
          <p class="text-sm text-gray-600">Advanced reporting and analytics for data-driven business decisions.</p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection