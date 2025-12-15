/**
 * Live Chat Integration - Real-time with Session Persistence
 * Works without external dependencies - pure polling
 */

class LiveChat {
    constructor() {
        this.conversationId = null;
        this.lastMessageId = 0;
        this.isLiveChatActive = false;
        this.customerName = null;
        this.customerEmail = null;
        this.clientFingerprint = null;
        this.pollingInterval = null;

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
     * Start polling for new messages (every 1 second for real-time feel)
     */
    startPolling() {
        if (this.pollingInterval) {
            clearInterval(this.pollingInterval);
        }

        // Poll every 1 second for near real-time updates
        this.pollingInterval = setInterval(async () => {
            const result = await this.getNewMessages();

            if (result.success && result.messages.length > 0) {
                // Trigger event with new messages
                window.dispatchEvent(new CustomEvent('liveChat:newMessages', {
                    detail: { messages: result.messages }
                }));
            }

            // Stop polling if conversation ended
            if (result.status === 'closed' || result.status === 'resolved') {
                this.stopPolling();
                window.dispatchEvent(new CustomEvent('liveChat:conversationEnded', {
                    detail: { status: result.status }
                }));
            }
        }, 1000); // 1 second polling for real-time feel
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
     * Stop polling
     */
    stopPolling() {
        if (this.pollingInterval) {
            clearInterval(this.pollingInterval);
            this.pollingInterval = null;
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
