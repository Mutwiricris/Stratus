<?php

namespace App\Filament\Widgets;

use App\Models\Conversation;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RecentConversationsWidget extends BaseWidget
{
    protected static ?int $sort = 6;

    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->heading('Recent Active Conversations')
            ->query(
                Conversation::query()
                    ->whereIn('status', ['open', 'pending'])
                    ->orderByDesc('updated_at')
                    ->limit(10)
            )
            ->columns([
                TextColumn::make('conversation_number')
                    ->label('#')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->color('primary')
                    ->url(fn($record) => route('filament.stratus.resources.conversations.edit', $record)),

                TextColumn::make('customer_name')
                    ->label('Customer')
                    ->searchable()
                    ->getStateUsing(fn($record) => $record->customer_name ?? $record->customer?->name ?? 'Guest')
                    ->icon('heroicon-m-user'),

                TextColumn::make('subject')
                    ->label('Subject')
                    ->limit(40)
                    ->searchable()
                    ->tooltip(fn($record) => $record->subject),

                TextColumn::make('status')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'open' => 'danger',
                        'pending' => 'warning',
                        'resolved' => 'success',
                        'closed' => 'gray',
                        default => 'gray',
                    }),

                TextColumn::make('priority')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'urgent' => 'danger',
                        'high' => 'warning',
                        'normal' => 'info',
                        'low' => 'gray',
                        default => 'gray',
                    }),

                TextColumn::make('channel')
                    ->badge()
                    ->color('info')
                    ->icon(fn($state) => match ($state) {
                        'chat' => 'heroicon-m-chat-bubble-left-right',
                        'email' => 'heroicon-m-envelope',
                        'phone' => 'heroicon-m-phone',
                        'whatsapp' => 'heroicon-m-chat-bubble-left-ellipsis',
                        default => 'heroicon-m-question-mark-circle',
                    }),

                TextColumn::make('assignedAgent.name')
                    ->label('Assigned To')
                    ->default('Unassigned')
                    ->icon('heroicon-m-user-circle'),

                TextColumn::make('updated_at')
                    ->label('Last Activity')
                    ->since()
                    ->sortable()
                    ->icon('heroicon-m-clock'),
            ])
            ->poll('30s');
    }
}
