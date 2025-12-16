<x-filament-panels::page>
    <div
        x-data="{
            selectedId: @entangle('selectedConversationId'),
            scrollToBottom() {
                const container = document.getElementById('messages-container');
                if (container) {
                    container.scrollTop = container.scrollHeight;
                }
            }
        }"
        x-init="
            $watch('selectedId', () => {
                setTimeout(() => scrollToBottom(), 100);
            });
        "
        wire:poll.1s="loadActiveConversations"
    >
        <div style="display: flex; gap: 1rem; min-height: 600px;">

            <!-- Left Column: Conversations -->
            <div style="flex: 1; background: white; border-radius: 0.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1); display: flex; flex-direction: column;">
                <div style="padding: 1rem; border-bottom: 1px solid #e5e7eb;">
                    <h3 style="font-size: 1.125rem; font-weight: 600; margin: 0;">
                        All Chats ({{ count($activeConversations) }})
                    </h3>
                    <p style="font-size: 0.875rem; color: #6b7280; margin: 0.25rem 0 0 0;">
                        <span wire:loading wire:target="loadActiveConversations">
                            <svg class="animate-spin inline-block h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </span>
                        Real-time updates
                    </p>
                </div>

                <div style="flex: 1; overflow-y: auto;">
                    @forelse($activeConversations as $conv)
                        <button
                            wire:click="selectConversation({{ $conv['id'] }})"
                            style="width: 100%; text-align: left; padding: 1rem; border-bottom: 1px solid #e5e7eb; background: {{ $selectedConversationId == $conv['id'] ? '#fef3c7' : 'white' }}; border: none; cursor: pointer; transition: all 0.2s;"
                            @if($conv['unread_count'] > 0)
                                class="animate-pulse"
                            @endif
                        >
                            <div style="display: flex; justify-content: space-between; align-items: start;">
                                <div style="flex: 1;">
                                    <div style="font-weight: 600; display: flex; align-items: center; gap: 0.5rem;">
                                        {{ $conv['customer_name'] }}
                                        @if($conv['unread_count'] > 0)
                                            <span style="background: #ef4444; color: white; font-size: 0.75rem; padding: 0.125rem 0.5rem; border-radius: 9999px; font-weight: 600;">
                                                {{ $conv['unread_count'] }}
                                            </span>
                                        @endif
                                        @if($conv['status'] === 'open')
                                            <span style="background: #10b981; color: white; font-size: 0.75rem; padding: 0.125rem 0.5rem; border-radius: 0.25rem; font-weight: 500;">Open</span>
                                        @elseif($conv['status'] === 'closed')
                                            <span style="background: #6b7280; color: white; font-size: 0.75rem; padding: 0.125rem 0.5rem; border-radius: 0.25rem; font-weight: 500;">Closed</span>
                                        @elseif($conv['status'] === 'resolved')
                                            <span style="background: #3b82f6; color: white; font-size: 0.75rem; padding: 0.125rem 0.5rem; border-radius: 0.25rem; font-weight: 500;">Resolved</span>
                                        @else
                                            <span style="background: #f59e0b; color: white; font-size: 0.75rem; padding: 0.125rem 0.5rem; border-radius: 0.25rem; font-weight: 500;">{{ ucfirst($conv['status']) }}</span>
                                        @endif
                                    </div>
                                    <div style="font-size: 0.875rem; color: #6b7280; margin-top: 0.25rem;">{{ $conv['subject'] }}</div>
                                    <div style="font-size: 0.75rem; color: #9ca3af; margin-top: 0.25rem;">{{ $conv['last_message'] }}</div>
                                </div>
                                <div style="font-size: 0.75rem; color: #9ca3af;">{{ $conv['last_message_time'] }}</div>
                            </div>
                        </button>
                    @empty
                        <div style="padding: 2rem; text-align: center; color: #6b7280;">
                            <svg style="width: 4rem; height: 4rem; margin: 0 auto 1rem; opacity: 0.5;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                            <p style="font-weight: 500;">No active chats</p>
                            <p style="font-size: 0.875rem; margin-top: 0.5rem;">New conversations will appear here</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Right Column: Messages -->
            <div style="flex: 2; background: white; border-radius: 0.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1); display: flex; flex-direction: column;">
                @if($selectedConversationId)
                    @php
                        $currentConv = collect($activeConversations)->firstWhere('id', $selectedConversationId);
                    @endphp

                    <div wire:poll.1s="loadMessages">
                        <!-- Header -->
                        <div style="padding: 1rem; border-bottom: 1px solid #e5e7eb; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <h3 style="font-size: 1rem; font-weight: 600; margin: 0;">{{ $currentConv['customer_name'] ?? 'Guest' }}</h3>
                                <p style="font-size: 0.875rem; color: #6b7280; margin: 0.25rem 0 0 0;">
                                    {{ $currentConv['customer_email'] ?? 'No email' }}
                                    <span wire:loading wire:target="loadMessages" style="margin-left: 0.5rem;">
                                        <svg class="animate-spin inline-block h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                    </span>
                                </p>
                            </div>
                            <div style="display: flex; gap: 0.5rem;">
                                <x-filament::button wire:click="closeConversation" color="danger" size="sm">
                                    Close
                                </x-filament::button>
                            </div>
                        </div>

                        <!-- Messages -->
                        <div id="messages-container" style="flex: 1; overflow-y: auto; padding: 1.5rem; background: #f9fafb; max-height: 500px;">
                            @forelse($messages as $message)
                                @if($message['sender_type'] === 'customer')
                                    <div style="margin-bottom: 1rem;"
                                         x-data="{ show: false }"
                                         x-init="setTimeout(() => show = true, 50)"
                                         x-show="show"
                                         x-transition>
                                        <div style="font-size: 0.75rem; color: #6b7280; margin-bottom: 0.25rem;">
                                            {{ $message['sender_name'] }} • {{ $message['created_at'] }}
                                        </div>
                                        <div style="background: white; padding: 0.75rem; border-radius: 0.5rem; max-width: 75%; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
                                            {{ $message['body'] }}
                                        </div>
                                    </div>
                                @else
                                    <div style="margin-bottom: 1rem; display: flex; justify-content: flex-end;"
                                         x-data="{ show: false }"
                                         x-init="setTimeout(() => show = true, 50)"
                                         x-show="show"
                                         x-transition>
                                        <div style="max-width: 75%;">
                                            <div style="font-size: 0.75rem; color: #6b7280; margin-bottom: 0.25rem; text-align: right;">
                                                {{ $message['sender_name'] }} • {{ $message['created_at'] }}
                                            </div>
                                            <div style="background: #f59e0b; color: white; padding: 0.75rem; border-radius: 0.5rem; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
                                                {{ $message['body'] }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @empty
                                <div style="text-align: center; color: #6b7280; padding: 2rem;">No messages yet</div>
                            @endforelse
                        </div>

                        <!-- Input -->
                        <div style="padding: 1rem; border-top: 1px solid #e5e7eb;">
                            <form wire:submit="sendMessage" style="display: flex; gap: 0.5rem;" x-on:submit="setTimeout(() => scrollToBottom(), 100)">
                                <textarea
                                    wire:model="messageBody"
                                    rows="2"
                                    placeholder="Type your message..."
                                    style="flex: 1; border: 1px solid #d1d5db; border-radius: 0.5rem; padding: 0.5rem; font-family: inherit;"
                                    wire:keydown.enter="sendMessage"
                                    x-on:keydown.enter="if (!$event.shiftKey) { $event.preventDefault(); $wire.sendMessage(); setTimeout(() => scrollToBottom(), 100); }"
                                ></textarea>
                                <x-filament::button type="submit" :disabled="!$messageBody">
                                    <svg style="width: 1.25rem; height: 1.25rem;" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                                    </svg>
                                </x-filament::button>
                            </form>
                            <p style="font-size: 0.75rem; color: #6b7280; margin-top: 0.5rem;">Press Enter to send • Shift+Enter for new line</p>
                        </div>
                    </div>
                @else
                    <div style="flex: 1; display: flex; align-items: center; justify-content: center; color: #6b7280;">
                        <div style="text-align: center;">
                            <svg style="width: 6rem; height: 6rem; margin: 0 auto 1rem; opacity: 0.5;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                            </svg>
                            <p style="font-size: 1.125rem; font-weight: 600; margin-bottom: 0.5rem;">Select a conversation</p>
                            <p style="font-size: 0.875rem;">Choose a chat from the left to start responding</p>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-filament-panels::page>
