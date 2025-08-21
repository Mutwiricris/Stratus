@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-20">
    <div class="text-center max-w-3xl mx-auto">
        <h1 class="text-5xl md:text-7xl font-bold font-unbounded">Our Ventures</h1>
        <p class="mt-4 text-lg md:text-xl text-slate-400">We identify foundational sectors and build the technology to redefine them. Explore the ecosystem we are building.</p>
    </div>

    <div class="mt-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-slate-900 p-6 rounded-lg">
            <h3 class="text-2xl font-bold">Logistics & Supply Chain</h3>
            <p class="mt-2 text-slate-400">The operating system for modern commerce.</p>
            <a href="/venture-detail" class="mt-4 inline-block text-white font-bold">Learn More &rarr;</a>
        </div>
        <div class="bg-slate-900 p-6 rounded-lg">
            <h3 class="text-2xl font-bold">FinTech</h3>
            <p class="mt-2 text-slate-400">Redefining financial services for the digital age.</p>
            <a href="/venture-detail" class="mt-4 inline-block text-white font-bold">Learn More &rarr;</a>
        </div>
        <div class="bg-slate-900 p-6 rounded-lg">
            <h3 class="text-2xl font-bold">AgriTech</h3>
            <p class="mt-2 text-slate-400">Intelligent solutions for a sustainable food future.</p>
            <a href="/venture-detail" class="mt-4 inline-block text-white font-bold">Learn More &rarr;</a>
        </div>
        <div class="bg-slate-900 p-6 rounded-lg">
            <h3 class="text-2xl font-bold">Renewable Energy</h3>
            <p class="mt-2 text-slate-400">Powering the world with clean, smart energy.</p>
            <a href="/venture-detail" class="mt-4 inline-block text-white font-bold">Learn More &rarr;</a>
        </div>
        <div class="bg-slate-900 p-6 rounded-lg">
            <h3 class="text-2xl font-bold">Quantum Computing</h3>
            <p class="mt-2 text-slate-400">Unlocking the next frontier of computational power.</p>
            <a href="/venture-detail" class="mt-4 inline-block text-white font-bold">Learn More &rarr;</a>
        </div>
        <div class="bg-slate-900 p-6 rounded-lg">
            <h3 class="text-2xl font-bold">Biotechnology</h3>
            <p class="mt-2 text-slate-400">Engineering biology to solve humanity's biggest challenges.</p>
            <a href="/venture-detail" class="mt-4 inline-block text-white font-bold">Learn More &rarr;</a>
        </div>
    </div>
</div>
@endsection
