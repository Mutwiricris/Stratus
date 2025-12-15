<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LiveChatController extends Controller
{
    /**
     * Start a new conversation or resume existing one (when visitor asks a custom question)
     */
    public function startConversation(Request $request)
    {
        $request->validate([
            'customer_name' => 'nullable|string|max:255',
            'customer_email' => 'nullable|email|max:255',
            'message' => 'required|string',
            'client_fingerprint' => 'nullable|string',
        ]);

        $fingerprint = $request->client_fingerprint;
        $clientIp = $request->ip();
        $userAgent = $request->userAgent();

        // Check for existing open conversation for this user (within last 24 hours)
        $existingConversation = Conversation::where(function ($query) use ($fingerprint, $clientIp) {
                if ($fingerprint) {
                    $query->where('client_fingerprint', $fingerprint);
                } else {
                    $query->where('client_ip', $clientIp);
                }
            })
            ->whereIn('status', ['open', 'pending'])
            ->where('created_at', '>=', now()->subDay())
            ->first();

        if ($existingConversation) {
            // Resume existing conversation
            $message = Message::create([
                'conversation_id' => $existingConversation->id,
                'sender_type' => 'customer',
                'message' => $request->message,
            ]);

            return response()->json([
                'success' => true,
                'conversation' => [
                    'id' => $existingConversation->id,
                    'conversation_number' => $existingConversation->conversation_number,
                    'status' => $existingConversation->status,
                    'is_resumed' => true,
                ],
                'message' => $message,
            ]);
        }

        // Create new conversation
        $conversation = Conversation::create([
            'customer_name' => $request->customer_name ?? 'Guest',
            'customer_email' => $request->customer_email,
            'client_fingerprint' => $fingerprint,
            'client_ip' => $clientIp,
            'user_agent' => $userAgent,
            'subject' => Str::limit($request->message, 50),
            'channel' => 'chat',
            'status' => 'open',
            'priority' => 'normal',
            'last_message_at' => now(),
        ]);

        // Create initial message
        $message = Message::create([
            'conversation_id' => $conversation->id,
            'sender_type' => 'customer',
            'message' => $request->message,
        ]);

        return response()->json([
            'success' => true,
            'conversation' => [
                'id' => $conversation->id,
                'conversation_number' => $conversation->conversation_number,
                'status' => $conversation->status,
                'is_resumed' => false,
            ],
            'message' => $message,
        ]);
    }

    /**
     * Send a message in an existing conversation
     */
    public function sendMessage(Request $request, Conversation $conversation)
    {
        $request->validate([
            'message' => 'required|string',
            'customer_name' => 'nullable|string|max:255',
            'customer_email' => 'nullable|email|max:255',
        ]);

        $message = Message::create([
            'conversation_id' => $conversation->id,
            'sender_type' => 'customer',
            'message' => $request->message,
        ]);

        $conversation->update([
            'last_message_at' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => $message,
        ]);
    }

    /**
     * Get all messages in a conversation (for polling)
     */
    public function getMessages(Conversation $conversation, Request $request)
    {
        $lastMessageId = $request->query('last_message_id', 0);
        $getAllMessages = $request->query('all', false);

        $query = Message::where('conversation_id', $conversation->id)
            ->with('sender')
            ->orderBy('created_at', 'asc');

        // If not requesting all messages, only get new ones
        if (!$getAllMessages && $lastMessageId > 0) {
            $query->where('id', '>', $lastMessageId);
        }

        $messages = $query->get()->map(function ($message) {
            return [
                'id' => $message->id,
                'sender_type' => $message->sender_type,
                'sender_name' => $message->sender?->name ?? $message->conversation->customer_name ?? 'Guest',
                'body' => $message->message,
                'created_at' => $message->created_at->diffForHumans(),
                'timestamp' => $message->created_at->toIso8601String(),
            ];
        });

        return response()->json([
            'success' => true,
            'messages' => $messages,
            'conversation_status' => $conversation->status,
            'conversation_number' => $conversation->conversation_number,
        ]);
    }

    /**
     * Get conversation status
     */
    public function getStatus(Conversation $conversation)
    {
        return response()->json([
            'success' => true,
            'conversation' => [
                'id' => $conversation->id,
                'conversation_number' => $conversation->conversation_number,
                'status' => $conversation->status,
                'assigned_agent' => $conversation->assignedAgent ? [
                    'name' => $conversation->assignedAgent->name,
                    'avatar' => $conversation->assignedAgent->avatar,
                ] : null,
            ],
        ]);
    }

    /**
     * Mark conversation as seen by customer
     */
    public function markAsSeen(Conversation $conversation)
    {
        Message::where('conversation_id', $conversation->id)
            ->where('sender_type', 'agent')
            ->where('is_read', false)
            ->update(['is_read' => true]);

        return response()->json([
            'success' => true,
        ]);
    }
}
