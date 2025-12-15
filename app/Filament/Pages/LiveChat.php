<?php

namespace App\Filament\Pages;

use App\Models\Conversation;
use App\Models\Message;
use BackedEnum;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;
use UnitEnum;

class LiveChat extends Page
{
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    protected string $view = 'filament.pages.live-chat';

    protected static ?string $navigationLabel = 'Live Chat';

    protected static string|UnitEnum|null $navigationGroup = 'Support';

    protected static ?int $navigationSort = 0;

    public $selectedConversationId = null;
    public $messageBody = '';
    public $activeConversations = [];
    public $messages = [];

    protected $listeners = ['refreshConversations' => '$refresh'];

    public function mount()
    {
        $this->loadActiveConversations();
    }

    public function loadActiveConversations()
    {
        $this->activeConversations = Conversation::whereIn('status', ['open', 'pending'])
            ->with(['assignedAgent', 'messages' => function ($query) {
                $query->latest()->limit(1);
            }])
            ->orderByDesc('last_message_at')
            ->get()
            ->map(function ($conv) {
                $lastMessage = $conv->messages->first();
                return [
                    'id' => $conv->id,
                    'conversation_number' => $conv->conversation_number,
                    'customer_name' => $conv->customer_name ?? 'Guest',
                    'customer_email' => $conv->customer_email,
                    'subject' => $conv->subject,
                    'status' => $conv->status,
                    'priority' => $conv->priority,
                    'assigned_agent' => $conv->assignedAgent?->name,
                    'last_message' => $lastMessage?->message,
                    'last_message_time' => $lastMessage?->created_at->diffForHumans(),
                    'unread_count' => $conv->messages()->where('sender_type', 'customer')->where('is_read', false)->count(),
                ];
            })
            ->toArray();
    }

    public function selectConversation($conversationId)
    {
        $this->selectedConversationId = $conversationId;
        $this->loadMessages();

        // Assign to current agent if unassigned
        $conversation = Conversation::find($conversationId);
        if (!$conversation->assigned_agent_id) {
            $conversation->update([
                'assigned_agent_id' => Auth::id(),
                'department_id' => Auth::user()->department_id,
            ]);
            $this->loadActiveConversations();
        }

        // Mark messages as read
        Message::where('conversation_id', $conversationId)
            ->where('sender_type', 'customer')
            ->where('is_read', false)
            ->update(['is_read' => true]);
    }

    public function loadMessages()
    {
        if (!$this->selectedConversationId) {
            $this->messages = [];
            return;
        }

        $this->messages = Message::where('conversation_id', $this->selectedConversationId)
            ->with('sender')
            ->orderBy('created_at', 'asc')
            ->get()
            ->map(function ($message) {
                return [
                    'id' => $message->id,
                    'sender_type' => $message->sender_type,
                    'sender_name' => $message->sender?->name ?? 'Guest',
                    'body' => $message->message,
                    'created_at' => $message->created_at->format('H:i'),
                    'is_mine' => $message->sender_type === 'agent',
                ];
            })
            ->toArray();
    }

    public function sendMessage()
    {
        if (!$this->selectedConversationId || !$this->messageBody) {
            return;
        }

        Message::create([
            'conversation_id' => $this->selectedConversationId,
            'sender_type' => 'agent',
            'sender_id' => Auth::id(),
            'message' => $this->messageBody,
        ]);

        Conversation::find($this->selectedConversationId)->update([
            'last_message_at' => now(),
        ]);

        $this->messageBody = '';
        $this->loadMessages();
        $this->loadActiveConversations();

        $this->dispatch('message-sent');
    }

    public function closeConversation()
    {
        if (!$this->selectedConversationId) {
            return;
        }

        $conversation = Conversation::find($this->selectedConversationId);
        $conversation->markAsClosed();

        $this->selectedConversationId = null;
        $this->messages = [];
        $this->loadActiveConversations();
    }

    public function resolveConversation()
    {
        if (!$this->selectedConversationId) {
            return;
        }

        $conversation = Conversation::find($this->selectedConversationId);
        $conversation->markAsResolved();

        $this->loadActiveConversations();
    }
}
