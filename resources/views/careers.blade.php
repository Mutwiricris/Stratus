@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-20">
    <div class="text-center max-w-3xl mx-auto">
        <h1 class="text-5xl md:text-7xl font-bold font-unbounded">Careers</h1>
        <p class="mt-4 text-lg md:text-xl text-slate-400">Join us in building the future of industry. We are looking for talented individuals who are passionate about solving complex problems and making a lasting impact.</p>
    </div>

    <div class="mt-20 max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold">Open Roles</h2>
        <div class="mt-8 space-y-4">
            <div class="bg-slate-900 p-6 rounded-lg flex justify-between items-center">
                <div>
                    <h3 class="text-xl font-bold">Senior Software Engineer, Platform</h3>
                    <p class="text-slate-400">Remote</p>
                </div>
                <a href="#" class="px-4 py-2 border border-white rounded-md text-white hover:bg-white hover:text-cyan-950 transition-colors duration-300">Apply</a>
            </div>
            <div class="bg-slate-900 p-6 rounded-lg flex justify-between items-center">
                <div>
                    <h3 class="text-xl font-bold">Product Manager, Logistics</h3>
                    <p class="text-slate-400">New York, NY</p>
                </div>
                <a href="#" class="px-4 py-2 border border-white rounded-md text-white hover:bg-white hover:text-cyan-950 transition-colors duration-300">Apply</a>
            </div>
            <div class="bg-slate-900 p-6 rounded-lg flex justify-between items-center">
                <div>
                    <h3 class="text-xl font-bold">Data Scientist, FinTech</h3>
                    <p class="text-slate-400">London, UK</p>
                </div>
                <a href="#" class="px-4 py-2 border border-white rounded-md text-white hover:bg-white hover:text-cyan-950 transition-colors duration-300">Apply</a>
            </div>
            <div class="bg-slate-900 p-6 rounded-lg flex justify-between items-center">
                <div>
                    <h3 class="text-xl font-bold">Business Development Manager, AgriTech</h3>
                    <p class="text-slate-400">Remote</p>
                </div>
                <a href="#" class="px-4 py-2 border border-white rounded-md text-white hover:bg-white hover:text-cyan-950 transition-colors duration-300">Apply</a>
            </div>
        </div>
    </div>
</div>
@endsection
