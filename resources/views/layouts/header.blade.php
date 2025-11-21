<header x-data="{ mobileMenuOpen: false }" class="sticky top-0 bg-white z-50 shadow-sm">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="flex items-center">
                <a href="/">
                    <img src="/images/logo.png" alt="Ascend Stratus Logo" class="h-8">
                </a>
            </div>
            <nav class="hidden md:flex items-center space-x-8">
                <a href="/about" class="text-neutral-900 hover:text-accent transition-colors duration-300">About</a>
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
                    <a href="/ventures" class="text-neutral-900 hover:text-accent transition-colors duration-300 flex items-center">Ventures <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></a>
                    <div x-show="open" @click.away="open = false" class="absolute top-full left-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
                        <a href="/ventures/logiflow" class="block px-4 py-2 text-sm text-neutral-700 hover:bg-neutral-200">LogiFlow</a>
                        <a href="/ventures/agrismart" class="block px-4 py-2 text-sm text-neutral-700 hover:bg-neutral-200">AgriSmart</a>
                    </div>
                </div>
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
                    <a href="/platform" class="text-neutral-900 hover:text-accent transition-colors duration-300 flex items-center">Services <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></a>
                    <div x-show="open" @click.away="open = false" class="absolute top-full left-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
                        <a href="/platform/custom-software" class="block px-4 py-2 text-sm text-neutral-700 hover:bg-neutral-200">Custom Software</a>
                        <a href="/platform/mobile-apps" class="block px-4 py-2 text-sm text-neutral-700 hover:bg-neutral-200">Mobile Apps</a>
                    </div>
                </div>
                <a href="/careers" class="text-neutral-900 hover:text-accent transition-colors duration-300">Careers</a>
            </nav>
            <div class="hidden md:flex items-center space-x-4">
                <a href="/contact" class="px-6 py-3 bg-accent text-white rounded-full hover:bg-opacity-90 transition-colors duration-300">Get in Touch</a>
            </div>
            <div class="md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-neutral-900 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" class="md:hidden absolute top-full left-0 w-full bg-white shadow-md">
        <nav class="flex flex-col items-center space-y-4 py-4">
            <a href="/about" class="text-neutral-900 hover:text-accent transition-colors duration-300">About</a>
            <a href="/ventures" class="text-neutral-900 hover:text-accent transition-colors duration-300">Ventures</a>
            <a href="/platform" class="text-neutral-900 hover:text-accent transition-colors duration-300">Services</a>
            <a href="/careers" class="text-neutral-900 hover:text-accent transition-colors duration-300">Careers</a>
            <a href="/contact" class="px-6 py-3 bg-accent text-white rounded-full hover:bg-opacity-90 transition-colors duration-300">Get in Touch</a>
        </nav>
    </div>
</header>
