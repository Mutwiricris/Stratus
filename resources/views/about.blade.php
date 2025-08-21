@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-20">
    <div class="text-center max-w-3xl mx-auto">
        <h1 class="text-5xl md:text-7xl font-bold font-unbounded">Our Mandate</h1>
        <p class="mt-4 text-lg md:text-xl text-slate-400">We believe that the world's most critical industries are ripe for transformation. Our mandate is to build the foundational technology that will power this change.</p>
    </div>

    <div class="mt-20 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
        <div>
            <h2 class="text-4xl font-bold">The Stratus Layer</h2>
            <p class="mt-4 text-slate-400">The "Stratus" in our name represents the stable, intelligent, and foundational layer we provide. It's a common platform of technology, data, and operational excellence that all our ventures are built upon. This shared infrastructure allows for rapid development, cross-venture synergies, and a level of data insight that is impossible to achieve in traditional industry silos.</p>
        </div>
        <div>
            <img src="https://images.unsplash.com/photo-1558642452-9d2a7deb7f62?q=80&w=2070&auto=format&fit=crop" alt="Abstract network" class="rounded-lg">
        </div>
    </div>

    <div class="mt-20 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
        <div>
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=2070&auto=format&fit=crop" alt="Team collaborating" class="rounded-lg">
        </div>
        <div>
            <h2 class="text-4xl font-bold">The Ascend Principle</h2>
            <p class="mt-4 text-slate-400">"Ascend" is our commitment to transformative growth. We don't just improve existing processes; we build new models that redefine what's possible. By providing our ventures with the capital, technology, and strategic guidance they need, we empower them to ascend to new heights of innovation and market leadership.</p>
        </div>
    </div>
</div>
@endsection
