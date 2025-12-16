/**
 * Live Chat Integration - Real-time WebSocket with Laravel Reverb
 * Uses Laravel Echo for real-time bidirectional communication
 * Requires: Laravel Echo and Pusher JS loaded before this script
 */

class LiveChat {
    constructor() {
        this.conversationId = null;
        this.lastMessageId = 0;
        this.isLiveChatActive = false;
        this.customerName = null;
        this.customerEmail = null;
        this.clientFingerprint = null;
        this.channel = null; // WebSocket channel

        // Initialize fingerprint
        this.initializeFingerprint();

        // Try to resume conversation on load
        this.autoResumeConversation();
    }

    /**
     * Generate and store client fingerprint
     */
    initializeFingerprint() {
        this.clientFingerprint = localStorage.getItem('chat_fingerprint');

        if (!this.clientFingerprint) {
            // Simple fingerprint based on browser characteristics
            const screen = `${window.screen.width}x${window.screen.height}x${window.screen.colorDepth}`;
            const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
            const language = navigator.language;
            const platform = navigator.platform;

            const fingerprint = `${screen}-${timezone}-${language}-${platform}-${Date.now()}`;
            this.clientFingerprint = 'fp_' + this.simpleHash(fingerprint);
            localStorage.setItem('chat_fingerprint', this.clientFingerprint);
        }
    }

    /**
     * Simple hash function
     */
    simpleHash(str) {
        let hash = 0;
        for (let i = 0; i < str.length; i++) {
            const char = str.charCodeAt(i);
            hash = ((hash << 5) - hash) + char;
            hash = hash & hash;
        }
        return Math.abs(hash).toString(36);
    }

    /**
     * Auto-resume conversation if exists
     */
    async autoResumeConversation() {
        const savedConversationId = localStorage.getItem('chat_conversation_id');

        if (!savedConversationId) return;

        try {
            const response = await fetch(`/api/chat/${savedConversationId}/status`);
            const data = await response.json();

            if (data.success && (data.conversation.status === 'open' || data.conversation.status === 'pending')) {
                this.conversationId = savedConversationId;
                this.isLiveChatActive = true;

                // Load all previous messages
                const messagesResult = await this.getAllMessages();

                if (messagesResult.success && messagesResult.messages.length > 0) {
                    // Update last message ID
                    const lastMsg = messagesResult.messages[messagesResult.messages.length - 1];
                    this.lastMessageId = lastMsg.id;
                }

                // Start polling for new messages
                this.startPolling();

                // Trigger event to notify UI with all messages
                window.dispatchEvent(new CustomEvent('liveChat:conversationResumed', {
                    detail: {
                        conversation: data.conversation,
                        messages: messagesResult.messages || []
                    }
                }));
            } else {
                // Clear invalid conversation
                localStorage.removeItem('chat_conversation_id');
            }
        } catch (error) {
            console.error('Error resuming conversation:', error);
            localStorage.removeItem('chat_conversation_id');
        }
    }

    /**
     * Start or resume conversation
     */
    async startConversation(message, customerName = null, customerEmail = null) {
        this.customerName = customerName;
        this.customerEmail = customerEmail;

        try {
            const response = await fetch('/api/chat/start', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({
                    message: message,
                    customer_name: customerName || 'Guest',
                    customer_email: customerEmail,
                    client_fingerprint: this.clientFingerprint,
                }),
            });

            const data = await response.json();

            if (data.success) {
                this.conversationId = data.conversation.id;
                this.lastMessageId = data.message.id;
                this.isLiveChatActive = true;

                // Save conversation ID
                localStorage.setItem('chat_conversation_id', this.conversationId);

                // Start polling for responses
                this.startPolling();

                return {
                    success: true,
                    conversation: data.conversation,
                    is_resumed: data.conversation.is_resumed || false,
                };
            }

            return { success: false, error: 'Failed to start conversation' };
        } catch (error) {
            console.error('Error starting conversation:', error);
            return { success: false, error: error.message };
        }
    }

    /**
     * Send message
     */
    async sendMessage(message) {
        if (!this.conversationId) {
            console.error('No active conversation');
            return { success: false, error: 'No active conversation' };
        }

        try {
            const response = await fetch(`/api/chat/${this.conversationId}/message`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({
                    message: message,
                    customer_name: this.customerName || 'Guest',
                    customer_email: this.customerEmail,
                }),
            });

            const data = await response.json();

            if (data.success) {
                this.lastMessageId = data.message.id;
                return { success: true, message: data.message };
            }

            return { success: false, error: 'Failed to send message' };
        } catch (error) {
            console.error('Error sending message:', error);
            return { success: false, error: error.message };
        }
    }

    /**
     * Start listening for new messages via WebSockets (real-time)
     */
    startPolling() {
        // Check if Echo is available
        if (!window.Echo) {
            console.error('❌ Laravel Echo not initialized! WebSocket connection failed.');
            console.error('Make sure echo-setup.js is loaded before live-chat.js');
            return;
        }

        // Clean up any existing subscriptions
        if (this.channel) {
            window.Echo.leave(`conversation.${this.conversationId}`);
        }

        console.log(`🔌 Subscribing to channel: conversation.${this.conversationId}`);

        // Subscribe to the conversation channel
        this.channel = window.Echo.channel(`conversation.${this.conversationId}`)
            .listen('.message.sent', (data) => {
                console.log('📨 New message received via WebSocket:', data);

                // Trigger event with new message (for all messages, let UI decide what to show)
                window.dispatchEvent(new CustomEvent('liveChat:newMessages', {
                    detail: {
                        messages: [{
                            id: data.id,
                            sender_type: data.sender_type,
                            sender_name: data.sender_name,
                            body: data.message,
                            created_at: data.created_at,
                            timestamp: data.timestamp,
                        }]
                    }
                }));

                // Update last message ID
                this.lastMessageId = data.id;
            })
            .error((error) => {
                console.error('❌ WebSocket channel error:', error);
            });

        console.log(`✅ Subscribed to WebSocket channel: conversation.${this.conversationId}`);
    }

    /**
     * Get all messages for a conversation (for resuming)
     */
    async getAllMessages() {
        if (!this.conversationId) return { success: false, messages: [] };

        try {
            const response = await fetch(
                `/api/chat/${this.conversationId}/messages?all=true`
            );

            const data = await response.json();

            return {
                success: true,
                messages: data.messages || [],
                status: data.conversation_status,
                conversation_number: data.conversation_number,
            };
        } catch (error) {
            console.error('Error getting all messages:', error);
            return { success: false, messages: [] };
        }
    }

    /**
     * Get new messages (for polling)
     */
    async getNewMessages() {
        if (!this.conversationId) return { success: false, messages: [] };

        try {
            const response = await fetch(
                `/api/chat/${this.conversationId}/messages?last_message_id=${this.lastMessageId}`
            );

            const data = await response.json();

            if (data.success && data.messages.length > 0) {
                // Update last message ID
                const lastMsg = data.messages[data.messages.length - 1];
                this.lastMessageId = lastMsg.id;

                return {
                    success: true,
                    messages: data.messages,
                    status: data.conversation_status,
                };
            }

            return { success: true, messages: [], status: data.conversation_status };
        } catch (error) {
            console.error('Error getting messages:', error);
            return { success: false, messages: [] };
        }
    }

    /**
     * Stop listening to WebSocket channel
     */
    stopPolling() {
        if (this.channel && this.conversationId) {
            window.Echo.leave(`conversation.${this.conversationId}`);
            this.channel = null;
            console.log(`🔌 Disconnected from WebSocket channel: conversation.${this.conversationId}`);
        }
    }

    /**
     * Mark messages as seen
     */
    async markAsSeen() {
        if (!this.conversationId) return;

        try {
            await fetch(`/api/chat/${this.conversationId}/seen`, {
                method: 'POST',
            });
        } catch (error) {
            console.error('Error marking as seen:', error);
        }
    }

    /**
     * End conversation
     */
    endConversation() {
        this.stopPolling();
        localStorage.removeItem('chat_conversation_id');
        this.conversationId = null;
        this.lastMessageId = 0;
        this.isLiveChatActive = false;
    }
}

// Create global instance
window.liveChat = new LiveChat();
