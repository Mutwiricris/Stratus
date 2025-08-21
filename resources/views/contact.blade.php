@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-20">
    <div class="text-center max-w-3xl mx-auto">
        <h1 class="text-5xl md:text-7xl font-bold font-unbounded">Contact Us</h1>
        <p class="mt-4 text-lg md:text-xl text-slate-400">We'd love to hear from you. Whether you're a potential partner, a future team member, or just want to learn more about our mission, don't hesitate to reach out.</p>
    </div>

    <div class="mt-20 max-w-xl mx-auto">
        <form action="#" method="POST" class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-slate-400">Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full bg-slate-800 border-slate-700 rounded-md shadow-sm py-2 px-3 text-white focus:outline-none focus:ring-white focus:border-white sm:text-sm">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-slate-400">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full bg-slate-800 border-slate-700 rounded-md shadow-sm py-2 px-3 text-white focus:outline-none focus:ring-white focus:border-white sm:text-sm">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-slate-400">Message</label>
                <textarea name="message" id="message" rows="4" class="mt-1 block w-full bg-slate-800 border-slate-700 rounded-md shadow-sm py-2 px-3 text-white focus:outline-none focus:ring-white focus:border-white sm:text-sm"></textarea>
            </div>
            <div>
                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-cyan-950 bg-white hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-cyan-950 focus:ring-white">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
