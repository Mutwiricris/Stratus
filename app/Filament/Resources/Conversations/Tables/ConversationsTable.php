<?php

namespace App\Filament\Resources\Conversations\Tables;

use App\Models\Conversation;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ConversationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('conversation_number')
                    ->label('#')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->weight('bold')
                    ->color('primary')
                    ->url(fn($record) => route('filament.stratus.resources.conversations.edit', $record)),

                TextColumn::make('customer_name')
                    ->label('Customer')
                    ->searchable(['customer_name', 'customer_email'])
                    ->sortable()
                    ->getStateUsing(fn($record) => $record->customer_name ?? $record->customer?->name ?? 'Guest')
                    ->description(fn($record) => $record->customer_email),

                TextColumn::make('subject')
                    ->label('Subject')
                    ->limit(50)
                    ->searchable()
                    ->tooltip(fn($record) => $record->subject),

                TextColumn::make('status')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'resolved' => 'success',
                        'open' => 'danger',
                        'pending' => 'warning',
                        'closed' => 'gray',
                        default => 'gray',
                    })
                    ->icon(fn($state) => match ($state) {
                        'resolved' => 'heroicon-o-check-circle',
                        'open' => 'heroicon-o-exclamation-circle',
                        'pending' => 'heroicon-o-clock',
                        'closed' => 'heroicon-o-x-circle',
                        default => null,
                    }),

                TextColumn::make('priority')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'urgent' => 'danger',
                        'high' => 'warning',
                        'normal' => 'primary',
                        'low' => 'gray',
                        default => 'gray',
                    }),

                TextColumn::make('assignedAgent.name')
                    ->label('Agent')
                    ->searchable()
                    ->sortable()
                    ->default('Unassigned')
                    ->badge()
                    ->color(fn($state) => $state === 'Unassigned' ? 'danger' : 'success'),

                TextColumn::make('department.name')
                    ->label('Department')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                TextColumn::make('channel')
                    ->label('Source')
                    ->badge()
                    ->icon(fn($state) => match ($state) {
                        'chat' => 'heroicon-o-chat-bubble-left-right',
                        'email' => 'heroicon-o-envelope',
                        'phone' => 'heroicon-o-phone',
                        'whatsapp' => 'heroicon-o-device-phone-mobile',
                        default => null,
                    })
                    ->toggleable(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->description(fn($record) => $record->created_at->diffForHumans()),

                TextColumn::make('last_message_at')
                    ->label('Last Activity')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->description(fn($record) => $record->last_message_at?->diffForHumans())
                    ->toggleable(),

                TextColumn::make('messages_count')
                    ->label('Messages')
                    ->counts('messages')
                    ->badge()
                    ->color('primary')
                    ->toggleable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'open' => 'Open',
                        'pending' => 'Pending',
                        'resolved' => 'Resolved',
                        'closed' => 'Closed',
                    ])
                    ->multiple(),

                SelectFilter::make('priority')
                    ->options([
                        'urgent' => 'Urgent',
                        'high' => 'High',
                        'normal' => 'Normal',
                        'low' => 'Low',
                    ])
                    ->multiple(),

                SelectFilter::make('channel')
                    ->options([
                        'chat' => 'Chat',
                        'email' => 'Email',
                        'phone' => 'Phone',
                        'whatsapp' => 'WhatsApp',
                    ])
                    ->multiple(),

                SelectFilter::make('assigned_agent_id')
                    ->label('Agent')
                    ->relationship('assignedAgent', 'name')
                    ->searchable()
                    ->preload(),

                SelectFilter::make('department_id')
                    ->label('Department')
                    ->relationship('department', 'name')
                    ->searchable()
                    ->preload(),

                Filter::make('unassigned')
                    ->label('Unassigned')
                    ->query(fn(Builder $query) => $query->whereNull('assigned_agent_id'))
                    ->toggle(),

                Filter::make('high_priority')
                    ->label('High Priority')
                    ->query(fn(Builder $query) => $query->whereIn('priority', ['high', 'urgent']))
                    ->toggle(),

                TrashedFilter::make(),
            ])
            ->defaultSort('created_at', 'desc')
            ->poll('30s'); // Auto-refresh every 30 seconds
    }
}
