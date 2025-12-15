# WebSocket Live Chat Setup Guide

Your live chat system now uses WebSockets for real-time messaging with session persistence! Here's how to set it up.

## What's Been Implemented

### ✅ Backend (Laravel)
- **Session Tracking**: Device fingerprinting + IP tracking for conversation persistence
- **Broadcasting Events**: MessageSent event broadcasts to WebSocket channels
- **API Enhancements**: Automatic conversation resumption based on device/IP
- **Migration**: Added `client_fingerprint`, `client_ip`, and `user_agent` columns

### ✅ Frontend (JavaScript)
- **Device Fingerprinting**: Unique client ID stored in localStorage
- **WebSocket Support**: Laravel Echo integration with polling fallback
- **Auto-Resume**: Conversations persist across page reloads
- **Real-time Updates**: Instant message delivery via WebSockets

## Laravel Broadcasting Setup

You have two options for WebSocket server: **Laravel Reverb** (recommended) or **Pusher**.

### Option 1: Laravel Reverb (Recommended - Free & Self-Hosted)

Laravel Reverb is Laravel's official WebSocket server. It's free and runs on your own server.

#### 1. Install Reverb

```bash
composer require laravel/reverb
php artisan reverb:install
```

#### 2. Configure Broadcasting

Update `.env`:

```env
BROADCAST_DRIVER=reverb

REVERB_APP_ID=my-app-id
REVERB_APP_KEY=my-app-key
REVERB_APP_SECRET=my-app-secret
REVERB_HOST=127.0.0.1
REVERB_PORT=8080
REVERB_SCHEME=http

VITE_REVERB_APP_KEY="${REVERB_APP_KEY}"
VITE_REVERB_HOST="${REVERB_HOST}"
VITE_REVERB_PORT="${REVERB_PORT}"
VITE_REVERB_SCHEME="${REVERB_SCHEME}"
```

#### 3. Start Reverb Server

```bash
php artisan reverb:start
```

Keep this running in a terminal or use a process manager like Supervisor.

### Option 2: Pusher (Hosted Service)

Pusher is a managed WebSocket service. Free tier available.

#### 1. Install Pusher PHP SDK

```bash
composer require pusher/pusher-php-server
```

#### 2. Configure Broadcasting

Update `.env`:

```env
BROADCAST_DRIVER=pusher

PUSHER_APP_ID=your-app-id
PUSHER_APP_KEY=your-app-key
PUSHER_APP_SECRET=your-app-secret
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

Get credentials from [https://pusher.com](https://pusher.com)

## Frontend Setup (Laravel Echo)

### 1. Install NPM Packages

```bash
npm install --save laravel-echo pusher-js
```

### 2. Configure Echo

Add to your main JavaScript file (e.g., `resources/js/app.js` or your layout):

```javascript
import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'reverb', // or 'pusher'
    key: import.meta.env.VITE_REVERB_APP_KEY,
    wsHost: import.meta.env.VITE_REVERB_HOST,
    wsPort: import.meta.env.VITE_REVERB_PORT ?? 80,
    wssPort: import.meta.env.VITE_REVERB_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});
```

### 3. Add Echo to Your Layout

Include before the `live-chat.js` script:

```html
<!-- In your layout file -->
@vite(['resources/js/app.js'])

<!-- Live Chat Library -->
<script src="{{ asset('js/live-chat.js') }}"></script>
```

### 4. Rebuild Assets

```bash
npm run build
# or for development
npm run dev
```

## How Session Persistence Works

### Device Fingerprinting

The system generates a unique fingerprint based on:
- Canvas fingerprint (browser rendering signature)
- Screen resolution and color depth
- Timezone
- Language
- Platform

This fingerprint is stored in localStorage and sent with every API request.

### Conversation Resumption

1. **First Visit**: User starts chat → Fingerprint + IP saved to database
2. **Page Reload**: JavaScript checks localStorage for conversation ID
3. **Auto-Resume**: If conversation is still open (within 24 hours), it resumes
4. **New Device**: Different fingerprint → New conversation
5. **Same Network**: Same IP but different device → Asks to resume

### Fallback to IP

If browser blocks localStorage or fingerprinting:
- System falls back to IP-based tracking
- Less reliable but still works across page reloads

## Testing the WebSocket System

### 1. Start the WebSocket Server

**For Reverb:**
```bash
php artisan reverb:start
```

**For Pusher:**
No server needed - it's hosted.

### 2. Test Customer Side

1. Open your website
2. Open browser DevTools → Console
3. Start a chat
4. You should see: `Subscribed to conversation.X`
5. Reload the page
6. You should see: `Conversation resumed: {...}`

### 3. Test Agent Side

1. Login to `/stratus`
2. Go to Live Chat page
3. Open browser console
4. Select a conversation
5. You should see: `Agent received message: {...}` when customer sends a message

### 4. Test Real-Time Messaging

1. Open two browsers side-by-side:
   - Browser A: Customer chat widget
   - Browser B: Agent dashboard
2. Send message from customer → Should appear INSTANTLY in agent dashboard
3. Send reply from agent → Should appear INSTANTLY in customer chat
4. No 2-3 second delay!

## Production Deployment

### Using Supervisor (Reverb)

Create `/etc/supervisor/conf.d/reverb.conf`:

```ini
[program:reverb]
command=php /path/to/your/project/artisan reverb:start
directory=/path/to/your/project
user=www-data
autostart=true
autorestart=true
redirect_stderr=true
stdout_logfile=/var/log/reverb.log
```

Then:
```bash
sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl start reverb
```

### SSL/HTTPS Setup

For production with SSL:

```env
REVERB_SCHEME=https
REVERB_HOST=your-domain.com
REVERB_PORT=443
```

Configure your web server (Nginx/Apache) to proxy WebSocket connections.

## Troubleshooting

### "Echo is not defined"

- Make sure `npm run build` or `npm run dev` is running
- Check that `@vite(['resources/js/app.js'])` is in your layout before `live-chat.js`

### Messages still polling instead of real-time

- Check browser console for Echo errors
- Verify Reverb server is running: `php artisan reverb:start`
- Check `.env` has correct `BROADCAST_DRIVER=reverb`

### Conversation not resuming after reload

- Check browser localStorage for `chat_conversation_id`
- Check DevTools → Network for `/api/chat/{id}/status` call
- Verify conversation is still "open" in database

### WebSocket connection fails

- Check firewall allows port 8080 (or your REVERB_PORT)
- Verify `REVERB_HOST` is accessible from browser
- For production, ensure SSL is properly configured

## Benefits of This System

✅ **Real-time**: Messages appear instantly (no 2-second delay)
✅ **Persistent**: Conversations survive page reloads
✅ **Device-aware**: Tracks users across sessions
✅ **Fallback**: Still works with polling if WebSockets unavailable
✅ **Scalable**: WebSockets use less resources than polling
✅ **User-friendly**: Seamless experience, no login required

## Performance Comparison

| Method | Latency | Server Load | Battery Impact |
|--------|---------|-------------|----------------|
| Polling (old) | 2-3 seconds | High (constant requests) | High |
| WebSockets (new) | <100ms | Low (persistent connection) | Low |

## Next Steps

1. ✅ Install Laravel Reverb or configure Pusher
2. ✅ Install and configure Laravel Echo
3. ✅ Build frontend assets
4. 🧪 Test the system
5. 🚀 Deploy to production

Your live chat is now faster, more efficient, and provides a better experience for both customers and agents!
