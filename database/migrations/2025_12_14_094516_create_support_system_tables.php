<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Departments table
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('email')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        // Add agent-related fields to users table
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('customer')->after('email'); // customer, agent, admin
            $table->foreignId('department_id')->nullable()->constrained()->nullOnDelete()->after('role');
            $table->enum('status', ['online', 'away', 'busy', 'offline'])->default('offline')->after('department_id');
            $table->string('avatar')->nullable()->after('status');
            $table->text('signature')->nullable()->after('avatar'); // Email signature
            $table->timestamp('last_active_at')->nullable()->after('signature');
        });

        // Conversations table
        Schema::create('conversations', function (Blueprint $table) {
            $table->id();
            $table->string('conversation_number')->unique(); // e.g., CONV-2025-0001
            $table->foreignId('customer_id')->nullable()->constrained('users')->nullOnDelete(); // NULL for guest users
            $table->string('customer_name')->nullable(); // For guests
            $table->string('customer_email')->nullable();
            $table->string('customer_phone')->nullable();
            $table->foreignId('assigned_agent_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('department_id')->nullable()->constrained()->nullOnDelete();
            $table->enum('status', ['open', 'pending', 'resolved', 'closed'])->default('open');
            $table->enum('priority', ['low', 'normal', 'high', 'urgent'])->default('normal');
            $table->enum('channel', ['chat', 'email', 'phone', 'whatsapp'])->default('chat');
            $table->string('source')->nullable(); // widget_chat, contact_form, etc.
            $table->text('subject')->nullable();
            $table->json('tags')->nullable(); // ['billing', 'technical', 'sales']
            $table->timestamp('first_response_at')->nullable();
            $table->timestamp('resolved_at')->nullable();
            $table->timestamp('closed_at')->nullable();
            $table->timestamp('last_message_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['status', 'priority']);
            $table->index('assigned_agent_id');
            $table->index('customer_email');
        });

        // Messages table
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conversation_id')->constrained()->cascadeOnDelete();
            $table->enum('sender_type', ['customer', 'agent', 'bot', 'system'])->default('customer');
            $table->foreignId('sender_id')->nullable()->constrained('users')->nullOnDelete(); // NULL for bot/system
            $table->text('message');
            $table->json('attachments')->nullable(); // [{name, path, size, type}]
            $table->enum('message_type', ['text', 'file', 'image', 'system_note', 'internal_note'])->default('text');
            $table->boolean('is_read')->default(false);
            $table->timestamp('read_at')->nullable();
            $table->boolean('is_internal')->default(false); // Internal notes between agents
            $table->timestamps();

            $table->index('conversation_id');
            $table->index(['sender_type', 'sender_id']);
        });

        // Tickets table
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_number')->unique(); // e.g., TICK-2025-0001
            $table->foreignId('conversation_id')->constrained()->cascadeOnDelete();
            $table->enum('type', ['bug', 'feature_request', 'question', 'incident', 'other'])->default('question');
            $table->timestamp('sla_deadline')->nullable();
            $table->boolean('sla_breached')->default(false);
            $table->timestamps();
        });

        // Canned Responses table
        Schema::create('canned_responses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('shortcut')->unique(); // e.g., /welcome, /pricing
            $table->text('message');
            $table->foreignId('department_id')->nullable()->constrained()->nullOnDelete();
            $table->boolean('is_active')->default(true);
            $table->integer('usage_count')->default(0);
            $table->timestamps();
        });

        // Knowledge Base Articles table
        Schema::create('knowledge_base_articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->string('category')->nullable();
            $table->json('keywords')->nullable(); // For search
            $table->boolean('is_published')->default(false);
            $table->integer('views')->default(0);
            $table->integer('helpful_count')->default(0);
            $table->integer('not_helpful_count')->default(0);
            $table->timestamps();

            $table->index('category');
            $table->fullText(['title', 'content']);
        });

        // Conversation Tags table
        Schema::create('conversation_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('color')->default('#3b82f6'); // Hex color
            $table->timestamps();
        });

        // Customer Satisfaction Ratings table
        Schema::create('satisfaction_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conversation_id')->constrained()->cascadeOnDelete();
            $table->foreignId('agent_id')->nullable()->constrained('users')->nullOnDelete();
            $table->integer('rating')->unsigned(); // 1-5 stars
            $table->text('feedback')->nullable();
            $table->boolean('issue_resolved')->default(false);
            $table->integer('nps_score')->nullable(); // 0-10 for Net Promoter Score
            $table->timestamps();

            $table->index('rating');
        });

        // Business Hours table
        Schema::create('business_hours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('day_of_week'); // monday, tuesday, etc.
            $table->time('open_time')->nullable();
            $table->time('close_time')->nullable();
            $table->boolean('is_closed')->default(false); // All day closed
            $table->timestamps();
        });

        // Chat Widget Settings table
        Schema::create('chat_widget_settings', function (Blueprint $table) {
            $table->id();
            $table->string('setting_key')->unique();
            $table->text('setting_value')->nullable();
            $table->timestamps();
        });

        // Automated Triggers table
        Schema::create('automated_triggers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('trigger_type'); // time_on_page, exit_intent, scroll_depth, etc.
            $table->json('conditions'); // {page: '/pricing', seconds: 30}
            $table->text('message');
            $table->boolean('is_active')->default(true);
            $table->integer('priority')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('automated_triggers');
        Schema::dropIfExists('chat_widget_settings');
        Schema::dropIfExists('business_hours');
        Schema::dropIfExists('satisfaction_ratings');
        Schema::dropIfExists('conversation_tags');
        Schema::dropIfExists('knowledge_base_articles');
        Schema::dropIfExists('canned_responses');
        Schema::dropIfExists('tickets');
        Schema::dropIfExists('messages');
        Schema::dropIfExists('conversations');

        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['department_id']);
            $table->dropColumn(['role', 'department_id', 'status', 'avatar', 'signature', 'last_active_at']);
        });

        Schema::dropIfExists('departments');
    }
};
