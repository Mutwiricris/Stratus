# Live Chat System - Setup Guide

## Overview
Your Zendesk-style live chat system is now ready! Visitors can chat without logging in, and agents respond in real-time from the Filament dashboard.

## What's Been Created

### 1. Backend API (`app/Http/Controllers/Api/LiveChatController.php`)
- `/api/chat/start` - Start a new conversation
- `/api/chat/{conversation}/message` - Send a message
- `/api/chat/{conversation}/messages` - Get new messages (polling)
- `/api/chat/{conversation}/status` - Get conversation status
- `/api/chat/{conversation}/seen` - Mark messages as read

### 2. Filament Live Chat Interface (`app/Filament/Pages/LiveChat.php`)
- Real-time chat interface for agents
- Auto-refreshes every 3 seconds
- Shows active conversations with unread counts
- Allows agents to respond, resolve, and close chats

### 3. Live Chat JavaScript Library (`public/js/live-chat.js`)
- Handles API communication
- Automatic polling for new messages every 2 seconds
- Events system for integration

## How It Works

### Customer Side (Chat Widget)
1. Customer types a message that doesn't match pre-defined options
2. JavaScript calls `liveChat.startConversation(message)`
3. A new conversation is created in the database
4. System starts polling for agent responses every 2 seconds
5. When agent responds, message appears in customer's chat

### Agent Side (Filament Dashboard)
1. Agent sees new conversation in Live Chat page
2. Clicking conversation loads all messages
3. Agent types response and sends
4. Response is saved and appears to customer instantly (via polling)
5. Agent can mark as resolved or closed

## Integration Steps

### Step 1: Add Live Chat JS to Your Layout

Add this to `/resources/views/layouts/app.blade.php` (or your main layout) before `</body>`:

```html
<!-- Live Chat Library -->
<script src="{{ asset('js/live-chat.js') }}"></script>
```

### Step 2: Update Chat Widget (`resources/views/components/contact-widget.blade.php`)

Replace the `sendChatMessage()` function (around line 492) with this enhanced version:

```javascript
// Send chat message - ENHANCED WITH LIVE CHAT
async function sendChatMessage() {
    const message = chatInput.value.trim();
    if (!message) return;

    // Add user message to UI
    addUserMessage(message);
    chatInput.value = '';

    // Check if this is a predefined question
    const predefinedOptions = Object.keys(responses);
    const isPredefined = predefinedOptions.some(opt =>
        message.toLowerCase().includes(opt) ||
        message.toLowerCase().includes(responses[opt])
    );

    if (isPredefined) {
        // Handle with bot response (existing functionality)
        setTimeout(() => {
            addBotMessage("Thanks for your message! For detailed assistance, I'll connect you with our sales team.");
            switchToMessageTab();
        }, 1500);
    } else {
        // START LIVE CHAT with an agent
        addBotMessage("🔄 Connecting you with an agent...");

        try {
            const result = await window.liveChat.startConversation(message);

            if (result.success) {
                addBotMessage(`✅ <strong>Connected!</strong> An agent will respond shortly.<br><em>Conversation #${result.conversation.conversation_number}</em>`);

                // Listen for new agent messages
                window.addEventListener('liveChat:newMessages', handleAgentMessages);
                window.addEventListener('liveChat:conversationEnded', handleConversationEnded);

            } else {
                addBotMessage("❌ Sorry, couldn't connect to live chat. Please use the Message tab to contact us.");
                switchToMessageTab();
            }
        } catch (error) {
            console.error('Live chat error:', error);
            addBotMessage("⚠️ Connection error. Please try again or use the Message tab.");
        }
    }
}

// Handle incoming agent messages
function handleAgentMessages(event) {
    const { messages } = event.detail;

    messages.forEach(msg => {
        if (msg.sender_type === 'agent') {
            addAgentMessage(msg.body, msg.sender_name);
        }
    });

    // Mark as seen
    window.liveChat.markAsSeen();
}

// Add agent message to UI
function addAgentMessage(text, agentName) {
    const time = new Date().toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit', hour12: true });
    const messageDiv = document.createElement('div');
    messageDiv.className = 'flex items-start gap-2';
    messageDiv.innerHTML = `
      <div class="w-7 h-7 rounded-full bg-gradient-to-br from-emerald-500 to-green-600 flex items-center justify-center text-white text-xs font-bold flex-shrink-0">${agentName.charAt(0)}</div>
      <div class="flex-1">
        <div class="text-xs text-neutral-600 mb-1">${agentName} (Agent) • ${time}</div>
        <div class="bg-white rounded-lg p-3 shadow-sm text-sm text-neutral-800 leading-relaxed">${text}</div>
      </div>
    `;
    chatMessages.appendChild(messageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

// Handle conversation end
function handleConversationEnded(event) {
    const { status } = event.detail;
    addBotMessage(`💚 <strong>Chat ${status}!</strong> Thank you for contacting Ascend Stratus. Feel free to start a new chat anytime.`);

    // Clean up
    window.removeEventListener('liveChat:newMessages', handleAgentMessages);
    window.removeEventListener('liveChat:conversationEnded', handleConversationEnded);
}
```

### Step 3: Update sendMessage Handler

Also update the keypress handler (around line 519):

```javascript
sendBtn.addEventListener('click', sendChatMessage);
chatInput.addEventListener('keypress', async (e) => {
    if (e.key === 'Enter') {
        e.preventDefault();
        await sendChatMessage();
    }
});
```

### Step 4: Enable Live Conversations to Send Messages

When in a live chat, the send button should send to the API:

```javascript
// Modify the send button click - check if live chat is active
sendBtn.addEventListener('click', async () => {
    if (window.liveChat.isLiveChatActive) {
        const message = chatInput.value.trim();
        if (!message) return;

        addUserMessage(message);
        chatInput.value = '';

        const result = await window.liveChat.sendMessage(message);
        if (!result.success) {
            addBotMessage("⚠️ Message failed to send. Please try again.");
        }
    } else {
        sendChatMessage();
    }
});
```

## Testing the System

### 1. Test Customer Side
1. Open your website in a browser
2. Click the chat widget
3. Type a custom question (not a predefined option)
4. You should see "Connecting you with an agent..."
5. A conversation is created

### 2. Test Agent Side
1. Login to Filament: `/stratus`
2. Go to "Live Chat" in the sidebar
3. You'll see the new conversation
4. Click on it to view messages
5. Type a response and send
6. The response should appear in the customer's chat widget

### 3. Test Real-time Updates
1. Keep both windows open (customer + agent)
2. Send messages from both sides
3. Messages should appear within 2-3 seconds
4. Test "Mark Resolved" and "Close Chat" buttons

## Features

### Customer Experience
- ✅ No login required
- ✅ Start chat instantly
- ✅ Real-time responses from agents (2s polling)
- ✅ See agent name and avatar
- ✅ Conversation persists during session

### Agent Experience
- ✅ See all active chats in one place
- ✅ Auto-refresh every 3 seconds
- ✅ Unread message counts
- ✅ Auto-assign on first response
- ✅ Mark resolved or close chats
- ✅ Send messages with Ctrl+Enter
- ✅ See customer info and conversation number

## Database Structure

Conversations are stored with:
- `customer_name` - Guest or provided name
- `customer_email` - If provided
- `channel` - Set to 'chat'
- `status` - open, pending, resolved, closed
- `assigned_agent_id` - Auto-assigned on first response

Messages are stored with:
- `sender_type` - 'customer' or 'agent'
- `sender_name` - Name of sender
- `body` - Message content
- `is_read` - Tracking read status

## Performance & Scaling

### Current Implementation
- **Polling interval**: 2 seconds (customer), 3 seconds (agent)
- **Recommended**: Up to 100 concurrent chats
- **Database load**: Minimal with proper indexing

### Future Enhancements (Optional)
For better performance at scale:
1. **Laravel Reverb (WebSockets)**
   - Replace polling with real-time WebSockets
   - Instant message delivery
   - Lower server load

2. **Redis Queue**
   - Queue message notifications
   - Better handling of high traffic

3. **Pusher/Ably Integration**
   - Managed WebSocket service
   - Easier than self-hosting

## Customization

### Change Polling Intervals
```javascript
// In live-chat.js, line with setInterval
setInterval(async () => { ... }, 2000); // Change 2000 to desired ms
```

### Add Customer Info Collection
Before starting live chat, show a form:
```javascript
// Collect name and email first
const name = prompt("Your name:");
const email = prompt("Your email:");
await window.liveChat.startConversation(message, name, email);
```

### Add Typing Indicators
Extend the API to include typing status and show "Agent is typing..." in the UI.

### Add File Uploads
Extend messages table to support attachments and update UI to show images/files.

## Troubleshooting

### Messages not appearing
- Check browser console for errors
- Verify API routes are working: `/api/chat/start`
- Check database has conversation and message records

### Polling not working
- Ensure `live-chat.js` is loaded
- Check browser Network tab for API calls every 2s
- Verify conversation ID is set

### Agent can't see conversations
- Check user role is 'agent' or 'admin'
- Verify conversation status is 'open' or 'pending'
- Check Live Chat page is accessible in Filament menu

## Next Steps

1. ✅ Integrate JS into chat widget (Steps 1-4 above)
2. 🧪 Test the full flow end-to-end
3. 🎨 Customize styling and messages
4. 📊 Monitor performance in production
5. 🚀 Consider WebSocket upgrade for scale

## Support

The system is ready to go! Follow the integration steps above and you'll have a fully functional live chat like Zendesk or Tawk.to.

Remember:
- Customers don't need to log in
- Agents respond from Filament dashboard
- Everything updates in real-time via polling
- Conversations are saved in your database

Happy chatting! 💬
