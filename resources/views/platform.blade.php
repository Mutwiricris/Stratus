@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-20">
    <div class="text-center max-w-3xl mx-auto">
        <h1 class="text-5xl md:text-7xl font-bold font-unbounded">The Core Platform</h1>
        <p class="mt-4 text-lg md:text-xl text-slate-400">The Stratus Core is the unifying force behind our ecosystem of ventures. It's a shared technology and data platform that provides the foundation for rapid innovation and scalable growth.</p>
    </div>

    <div class="mt-20">
        <img src="https://images.unsplash.com/photo-1518186285589-2f7649de83e0?auto=format&fit=crop&w=2070&q=80" alt="African technology professionals analyzing data networks and digital infrastructure" class="rounded-lg mx-auto">
    </div>

    <div class="mt-20 max-w-5xl mx-auto">
        <h2 class="text-4xl font-bold text-center">Platform Components</h2>
        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-slate-900 p-8 rounded-lg">
                <h3 class="text-2xl font-bold">Data & Analytics Engine</h3>
                <p class="mt-2 text-slate-400">A centralized data pipeline that collects, processes, and analyzes data from across our ventures. This provides unparalleled insights and enables data-driven decision-making at every level.</p>
            </div>
            <div class="bg-slate-900 p-8 rounded-lg">
                <h3 class="text-2xl font-bold">AI & Machine Learning</h3>
                <p class="mt-2 text-slate-400">A suite of proprietary AI models and machine learning algorithms that power everything from predictive analytics to process automation. Our ML infrastructure allows for rapid model development and deployment.</p>
            </div>
            <div class="bg-slate-900 p-8 rounded-lg">
                <h3 class="text-2xl font-bold">Scalable Infrastructure</h3>
                <p class="mt-2 text-slate-400">A cloud-native infrastructure that is built for scale and reliability. Our platform is designed to handle the demands of our growing ecosystem of ventures, ensuring high performance and uptime.</p>
            </div>
            <div class="bg-slate-900 p-8 rounded-lg">
                <h3 class="text-2xl font-bold">Shared Services & APIs</h3>
                <p class="mt-2 text-slate-400">A library of shared services and APIs that accelerate development and promote interoperability between our ventures. This includes services for identity management, payments, and communications.</p>
            </div>
        </div>
    </div>
</div>
@endsection
