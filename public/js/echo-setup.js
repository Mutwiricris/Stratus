/**
 * Echo Setup for Laravel Reverb
 * Initialize Laravel Echo with Reverb WebSocket connection
 *
 * NOTE: Include Pusher JS and Laravel Echo scripts BEFORE this file:
 * <script src="https://cdn.jsdelivr.net/npm/pusher-js@8/dist/web/pusher.min.js"></script>
 * <script src="https://cdn.jsdelivr.net/npm/laravel-echo@1/dist/echo.iife.js"></script>
 */

(function() {
    // Get Reverb configuration from environment variables
    const reverbConfig = {
        key: document.querySelector('meta[name="reverb-key"]')?.content || 'cdwgs2tf0vr4d9j9svvz',
        host: document.querySelector('meta[name="reverb-host"]')?.content || 'localhost',
        port: parseInt(document.querySelector('meta[name="reverb-port"]')?.content || '8080'),
        scheme: document.querySelector('meta[name="reverb-scheme"]')?.content || 'http',
    };

    // Initialize Laravel Echo with Reverb (uses Pusher protocol)
    window.Echo = new Echo({
        broadcaster: 'pusher',
        key: reverbConfig.key,
        wsHost: reverbConfig.host,
        wsPort: reverbConfig.port,
        wssPort: reverbConfig.port,
        forceTLS: reverbConfig.scheme === 'https',
        enabledTransports: ['ws', 'wss'],
        disableStats: true,
        cluster: 'mt1', // Required by Pusher protocol but ignored by Reverb
    });

    console.log('✅ Laravel Echo initialized with Reverb', reverbConfig);
    console.log('🔌 WebSocket URL:', `${reverbConfig.scheme === 'https' ? 'wss' : 'ws'}://${reverbConfig.host}:${reverbConfig.port}`);

    // Debug: Check if Pusher was created
    console.log('🔍 Echo connector:', window.Echo.connector);
    console.log('🔍 Pusher instance:', window.Echo.connector?.pusher);

    // Connection status monitoring
    if (window.Echo.connector && window.Echo.connector.pusher) {
        window.Echo.connector.pusher.connection.bind('connected', () => {
            console.log('✅ WebSocket Connected to Reverb!');
        });

        window.Echo.connector.pusher.connection.bind('disconnected', () => {
            console.warn('⚠️ WebSocket Disconnected from Reverb');
        });

        window.Echo.connector.pusher.connection.bind('error', (err) => {
            console.error('❌ WebSocket Connection Error:', err);
        });

        window.Echo.connector.pusher.connection.bind('state_change', (states) => {
            console.log('🔄 WebSocket State:', states.previous, '→', states.current);
        });
    }
})();
