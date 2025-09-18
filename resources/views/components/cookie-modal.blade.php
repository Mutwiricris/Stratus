<!-- Cookie Consent Modal -->
<div id="cookie-modal" class="fixed inset-0 z-50 flex items-end justify-center p-4 opacity-0 transition-all duration-500 ease-out" style="display: none;">
    <div class="glass-card max-w-md w-full rounded-2xl p-6 transform translate-y-full transition-all duration-500 ease-out shadow-2xl border border-teal-200/30">
        <div class="flex items-start space-x-4">
            <div class="flex-shrink-0">
                <div class="w-12 h-12 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="flex-1">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Cookie Preferences</h3>
                <p class="text-sm text-gray-600 mb-4">
                    We use cookies to enhance your browsing experience, serve personalized content, and analyze our traffic. By clicking "Accept All", you consent to our use of cookies.
                </p>
                <div class="flex flex-col sm:flex-row gap-2">
                    <button id="accept-cookies" class="btn-animate bg-gradient-to-r from-teal-600 to-cyan-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:from-teal-700 hover:to-cyan-700 transition-all duration-300">
                        Accept All
                    </button>
                    <button id="customize-cookies" class="text-teal-600 hover:text-teal-700 px-4 py-2 text-sm font-semibold transition-colors">
                        Customize
                    </button>
                    <button id="decline-cookies" class="text-gray-500 hover:text-gray-700 px-4 py-2 text-sm font-medium transition-colors">
                        Decline
                    </button>
                </div>
            </div>
            <button id="close-cookie-modal" class="flex-shrink-0 text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>
</div>

<!-- Cookie Customization Modal -->
<div id="cookie-customize-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-sm opacity-0 transition-all duration-300" style="display: none;">
    <div class="glass-card max-w-lg w-full rounded-2xl p-6 transform scale-95 transition-all duration-300 shadow-2xl border border-teal-200/30">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-900">Cookie Settings</h3>
            <button id="close-customize-modal" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        <div class="space-y-4">
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                <div>
                    <h4 class="font-medium text-gray-900">Essential Cookies</h4>
                    <p class="text-sm text-gray-600">Required for basic site functionality</p>
                </div>
                <div class="bg-teal-600 w-12 h-6 rounded-full relative">
                    <div class="bg-white w-5 h-5 rounded-full absolute top-0.5 right-0.5"></div>
                </div>
            </div>
            
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                <div>
                    <h4 class="font-medium text-gray-900">Analytics Cookies</h4>
                    <p class="text-sm text-gray-600">Help us improve our website</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" id="analytics-toggle" class="sr-only peer" checked>
                    <div class="w-12 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-teal-300 rounded-full peer peer-checked:after:translate-x-6 peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-teal-600"></div>
                </label>
            </div>
            
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                <div>
                    <h4 class="font-medium text-gray-900">Marketing Cookies</h4>
                    <p class="text-sm text-gray-600">Personalized ads and content</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" id="marketing-toggle" class="sr-only peer">
                    <div class="w-12 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-teal-300 rounded-full peer peer-checked:after:translate-x-6 peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-teal-600"></div>
                </label>
            </div>
        </div>
        
        <div class="flex gap-3 mt-6">
            <button id="save-preferences" class="btn-animate flex-1 bg-gradient-to-r from-teal-600 to-cyan-600 text-white px-4 py-2 rounded-lg font-semibold hover:from-teal-700 hover:to-cyan-700 transition-all duration-300">
                Save Preferences
            </button>
            <button id="accept-all-customize" class="flex-1 border border-teal-600 text-teal-600 px-4 py-2 rounded-lg font-semibold hover:bg-teal-50 transition-colors">
                Accept All
            </button>
        </div>
    </div>
</div>
