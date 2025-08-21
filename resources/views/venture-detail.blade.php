@extends('layouts.app')

@section('content')
<div>
    {{-- Hero Section --}}
    <div class="h-96 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1577985051167-5d55a82518d8?q=80&w=2070&auto=format&fit=crop')">
        <div class="h-full bg-black bg-opacity-50 flex items-center">
            <div class="container mx-auto px-4">
                <h1 class="text-5xl font-bold font-unbounded">Logistics & Supply Chain</h1>
                <p class="mt-2 text-xl text-slate-300">The Operating System for Modern Commerce.</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-20">
        {{-- Challenge & Solution Section --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
            <div>
                <h2 class="text-4xl font-bold">The Challenge</h2>
                <p class="mt-4 text-slate-400">The global supply chain is a complex web of fragmented systems, manual processes, and opaque data. This leads to inefficiency, delays, and a lack of resilience in the face of disruption.</p>
            </div>
            <div>
                <h2 class="text-4xl font-bold">The Stratus Solution</h2>
                <p class="mt-4 text-slate-400">Our logistics venture provides a unified platform that integrates every aspect of the supply chain, from warehousing and fleet management to last-mile delivery. By leveraging AI and real-time data, we create a more connected, predictive, and efficient ecosystem for commerce.</p>
            </div>
        </div>

        {{-- Key Capabilities Section --}}
        <div class="mt-20">
            <h2 class="text-4xl font-bold text-center">Key Capabilities</h2>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-slate-900 p-8 rounded-lg">
                    <h3 class="text-2xl font-bold">Predictive Analytics</h3>
                    <p class="mt-2 text-slate-400">Anticipate demand, optimize inventory, and predict disruptions before they happen.</p>
                </div>
                <div class="bg-slate-900 p-8 rounded-lg">
                    <h3 class="text-2xl font-bold">Automated Fleet Management</h3>
                    <p class="mt-2 text-slate-400">Optimize routes, reduce fuel consumption, and ensure on-time delivery with our AI-powered fleet management system.</p>
                </div>
                <div class="bg-slate-900 p-8 rounded-lg">
                    <h3 class="text-2xl font-bold">Real-Time Visibility</h3>
                    <p class="mt-2 text-slate-400">Track shipments, monitor inventory, and get a complete view of your supply chain in real time.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
