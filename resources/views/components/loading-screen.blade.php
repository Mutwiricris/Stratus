<!-- Loading Screen -->
<div id="loading-screen" class="fixed inset-0 z-50 flex items-center justify-center bg-gradient-to-br from-teal-50 to-cyan-50 transition-opacity duration-1000">
    <div class="text-center">
        <div class="relative mb-8">
            <div class="w-20 h-20 border-4 border-teal-200 rounded-full animate-pulse"></div>
            <div class="absolute inset-0 w-20 h-20 border-4 border-transparent border-t-teal-600 rounded-full animate-spin"></div>
        </div>
        <div class="space-y-2">
            <h2 class="text-2xl font-bold text-teal-800 animate-pulse">Ascend Stratus</h2>
            <p class="text-teal-600 text-sm">Loading your experience...</p>
        </div>
        <div class="mt-6 w-48 h-1 bg-teal-200 rounded-full overflow-hidden">
            <div class="h-full bg-gradient-to-r from-teal-600 to-cyan-600 rounded-full animate-pulse" style="animation: loading-bar 2s ease-in-out infinite;"></div>
        </div>
    </div>
</div>

<style>
@keyframes loading-bar {
    0% { width: 0%; }
    50% { width: 70%; }
    100% { width: 100%; }
}
</style>
