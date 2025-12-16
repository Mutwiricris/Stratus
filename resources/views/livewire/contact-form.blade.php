<div>
    <!-- Success Message -->
    @if($successMessage)
    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 rounded-lg animate-fade-in">
        <div class="flex items-center">
            <svg class="w-5 h-5 text-emerald-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <div>
                <p class="text-emerald-700 font-medium">{{ $successMessage }}</p>
                @if($messageNumber)
                <p class="text-emerald-600 text-sm mt-1">Reference: {{ $messageNumber }}</p>
                @endif
            </div>
        </div>
    </div>
    @endif

    <!-- Error Message -->
    @error('submit')
    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
        <div class="flex items-center">
            <svg class="w-5 h-5 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <p class="text-red-700 font-medium">{{ $message }}</p>
        </div>
    </div>
    @enderror

    <form wire:submit.prevent="submit" class="space-y-6">
        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label for="first_name" class="block text-sm font-semibold text-gray-900 mb-3">First Name *</label>
                <input
                    type="text"
                    id="first_name"
                    wire:model.blur="first_name"
                    class="w-full px-4 py-4 border border-gray-300 rounded-2xl focus:ring-2 focus:ring-teal-600 focus:border-transparent transition-all duration-300 hover:border-teal-300 @error('first_name') border-red-500 @enderror"
                    placeholder="John">
                @error('first_name')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="last_name" class="block text-sm font-semibold text-gray-900 mb-3">Last Name *</label>
                <input
                    type="text"
                    id="last_name"
                    wire:model.blur="last_name"
                    class="w-full px-4 py-4 border border-gray-300 rounded-2xl focus:ring-2 focus:ring-teal-600 focus:border-transparent transition-all duration-300 hover:border-teal-300 @error('last_name') border-red-500 @enderror"
                    placeholder="Doe">
                @error('last_name')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
            <label for="email" class="block text-sm font-semibold text-gray-900 mb-3">Email Address *</label>
            <input
                type="email"
                id="email"
                wire:model.blur="email"
                class="w-full px-4 py-4 border border-gray-300 rounded-2xl focus:ring-2 focus:ring-teal-600 focus:border-transparent transition-all duration-300 hover:border-teal-300 @error('email') border-red-500 @enderror"
                placeholder="john@company.com">
            @error('email')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="company" class="block text-sm font-semibold text-gray-900 mb-3">Company</label>
            <input
                type="text"
                id="company"
                wire:model.blur="company"
                class="w-full px-4 py-4 border border-gray-300 rounded-2xl focus:ring-2 focus:ring-teal-600 focus:border-transparent transition-all duration-300 hover:border-teal-300 @error('company') border-red-500 @enderror"
                placeholder="Your Company">
            @error('company')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="inquiry_type" class="block text-sm font-semibold text-gray-900 mb-3">Inquiry Type</label>
            <select
                id="inquiry_type"
                wire:model="inquiry_type"
                class="w-full px-4 py-4 border border-gray-300 rounded-2xl focus:ring-2 focus:ring-teal-600 focus:border-transparent transition-all duration-300 hover:border-teal-300 @error('inquiry_type') border-red-500 @enderror">
                <option value="">Select an option</option>
                <option value="partnership">Partnership Opportunity</option>
                <option value="platform">Platform Demo</option>
                <option value="venture">Venture Collaboration</option>
                <option value="careers">Career Opportunities</option>
                <option value="general">General Inquiry</option>
            </select>
            @error('inquiry_type')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="message" class="block text-sm font-semibold text-gray-900 mb-3">Message *</label>
            <textarea
                id="message"
                wire:model.blur="message"
                rows="6"
                class="w-full px-4 py-4 border border-gray-300 rounded-2xl focus:ring-2 focus:ring-teal-600 focus:border-transparent transition-all duration-300 hover:border-teal-300 resize-none @error('message') border-red-500 @enderror"
                placeholder="Tell us about your project, challenges, or how we can help..."></textarea>
            @error('message')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <button
            type="submit"
            wire:loading.attr="disabled"
            class="group relative w-full bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl hover:shadow-teal-500/25 transition-all duration-500 hover:scale-105 btn-animate overflow-hidden disabled:opacity-50 disabled:cursor-not-allowed">
            <div class="absolute inset-0 bg-gradient-to-r from-teal-700 via-cyan-700 to-blue-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <span class="relative flex items-center justify-center gap-2">
                <span wire:loading.remove>Send Message</span>
                <span wire:loading>Sending...</span>
                <svg wire:loading.remove class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                </svg>
                <svg wire:loading class="w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </span>
        </button>
    </form>
</div>
