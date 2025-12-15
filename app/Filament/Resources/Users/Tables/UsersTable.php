<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('avatar')
                    ->label('')
                    ->circular()
                    ->defaultImageUrl(fn($record) => 'https://ui-avatars.com/api/?name=' . urlencode($record->name)),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->icon('heroicon-o-envelope'),

                BadgeColumn::make('role')
                    ->searchable()
                    ->sortable()
                    ->colors([
                        'danger' => 'admin',
                        'warning' => 'agent',
                        'secondary' => 'customer',
                    ]),

                TextColumn::make('department.name')
                    ->label('Department')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('primary')
                    ->default('N/A'),

                BadgeColumn::make('status')
                    ->sortable()
                    ->colors([
                        'success' => 'online',
                        'warning' => 'away',
                        'danger' => 'busy',
                        'secondary' => 'offline',
                    ])
                    ->icons([
                        'heroicon-o-check-circle' => 'online',
                        'heroicon-o-clock' => 'away',
                        'heroicon-o-no-symbol' => 'busy',
                        'heroicon-o-x-circle' => 'offline',
                    ]),

                TextColumn::make('assigned_conversations_count')
                    ->label('Active Chats')
                    ->counts(['assignedConversations' => fn($query) => $query->whereIn('status', ['open', 'pending'])])
                    ->badge()
                    ->color('info'),

                TextColumn::make('satisfaction_ratings_avg_rating')
                    ->label('Avg Rating')
                    ->avg('satisfactionRatings', 'rating')
                    ->formatStateUsing(fn($state) => $state ? number_format($state, 1) . '/5' : 'N/A')
                    ->badge()
                    ->color(fn($state) => match(true) {
                        !$state => 'gray',
                        $state >= 4.5 => 'success',
                        $state >= 4.0 => 'warning',
                        default => 'danger',
                    }),

                TextColumn::make('last_active_at')
                    ->label('Last Active')
                    ->dateTime('M d, H:i')
                    ->sortable()
                    ->description(fn($record) => $record->last_active_at?->diffForHumans())
                    ->toggleable(),

                TextColumn::make('created_at')
                    ->label('Joined')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('role')
                    ->options([
                        'admin' => 'Admin',
                        'agent' => 'Agent',
                        'customer' => 'Customer',
                    ])
                    ->multiple(),

                SelectFilter::make('department_id')
                    ->label('Department')
                    ->relationship('department', 'name')
                    ->searchable()
                    ->preload()
                    ->multiple(),

                SelectFilter::make('status')
                    ->options([
                        'online' => 'Online',
                        'away' => 'Away',
                        'busy' => 'Busy',
                        'offline' => 'Offline',
                    ])
                    ->multiple(),

                Filter::make('agents_only')
                    ->label('Agents Only')
                    ->query(fn(Builder $query) => $query->whereIn('role', ['agent', 'admin']))
                    ->toggle(),

                Filter::make('online')
                    ->label('Online Now')
                    ->query(fn(Builder $query) => $query->where('status', 'online'))
                    ->toggle(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),

                Action::make('set_online')
                    ->label('Set Online')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->action(fn($record) => $record->update(['status' => 'online']))
                    ->visible(fn($record) => $record->status !== 'online'),

                Action::make('set_offline')
                    ->label('Set Offline')
                    ->icon('heroicon-o-x-circle')
                    ->color('secondary')
                    ->action(fn($record) => $record->update(['status' => 'offline']))
                    ->visible(fn($record) => $record->status !== 'offline'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),

                    Action::make('bulk_online')
                        ->label('Set Online')
                        ->icon('heroicon-o-check-circle')
                        ->action(fn($records) => $records->each->update(['status' => 'online'])),

                    Action::make('bulk_offline')
                        ->label('Set Offline')
                        ->icon('heroicon-o-x-circle')
                        ->action(fn($records) => $records->each->update(['status' => 'offline'])),
                ]),
            ])
            ->defaultSort('last_active_at', 'desc');
    }
}
