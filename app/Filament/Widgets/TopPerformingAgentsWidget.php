<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class TopPerformingAgentsWidget extends BaseWidget
{
    protected static ?int $sort = 5;

    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->heading('Top Performing Agents')
            ->query(
                User::query()
                    ->whereIn('role', ['agent', 'admin'])
                    ->withCount([
                        'assignedConversations',
                        'sentMessages',
                    ])
                    ->withAvg('satisfactionRatings', 'rating')
                    ->orderByDesc('satisfaction_ratings_avg_rating')
                    ->limit(5)
            )
            ->columns([
                ImageColumn::make('avatar')
                    ->label('Avatar')
                    ->circular()
                    ->defaultImageUrl(fn($record) => 'https://ui-avatars.com/api/?name=' . urlencode($record->name) . '&color=7F9CF5&background=EBF4FF'),

                TextColumn::make('name')
                    ->label('Agent')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('department.name')
                    ->label('Department')
                    ->badge()
                    ->color('info'),

                TextColumn::make('assigned_conversations_count')
                    ->label('Conversations')
                    ->badge()
                    ->color('success'),

                TextColumn::make('sent_messages_count')
                    ->label('Messages Sent')
                    ->badge()
                    ->color('warning'),

                TextColumn::make('satisfaction_ratings_avg_rating')
                    ->label('Avg Rating')
                    ->formatStateUsing(fn($state) => $state ? round($state, 2) . ' ⭐' : 'N/A')
                    ->color(fn($state) => $state >= 4 ? 'success' : ($state >= 3 ? 'warning' : 'danger'))
                    ->sortable(),

                TextColumn::make('status')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'online' => 'success',
                        'away' => 'warning',
                        'offline' => 'danger',
                        default => 'secondary',
                    }),
            ])
            ->poll('60s');
    }
}
