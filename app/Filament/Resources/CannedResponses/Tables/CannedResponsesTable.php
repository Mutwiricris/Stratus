<?php

namespace App\Filament\Resources\CannedResponses\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\Action;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class CannedResponsesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('shortcut')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->badge()
                    ->color('primary')
                    ->icon('heroicon-o-command-line'),

                TextColumn::make('message')
                    ->limit(60)
                    ->tooltip(fn($record) => $record->message)
                    ->wrap(),

                TextColumn::make('department.name')
                    ->label('Department')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('success')
                    ->default('All Departments'),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('usage_count')
                    ->label('Used')
                    ->sortable()
                    ->badge()
                    ->color('warning')
                    ->suffix(' times'),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('department_id')
                    ->label('Department')
                    ->relationship('department', 'name')
                    ->searchable()
                    ->preload(),

                Filter::make('active')
                    ->label('Active Only')
                    ->query(fn(Builder $query) => $query->where('is_active', true))
                    ->toggle()
                    ->default(),

                Filter::make('popular')
                    ->label('Popular (10+ uses)')
                    ->query(fn(Builder $query) => $query->where('usage_count', '>=', 10))
                    ->toggle(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),

                Action::make('copy_message')
                    ->label('Copy')
                    ->icon('heroicon-o-clipboard')
                    ->action(fn($record) => null)
                    ->color('gray')
                    ->extraAttributes(fn($record) => [
                        'x-data' => '{}',
                        'x-on:click' => 'navigator.clipboard.writeText(' . json_encode($record->message) . ')',
                    ]),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),

                    Action::make('bulk_activate')
                        ->label('Activate')
                        ->icon('heroicon-o-check-circle')
                        ->action(fn($records) => $records->each->update(['is_active' => true])),

                    Action::make('bulk_deactivate')
                        ->label('Deactivate')
                        ->icon('heroicon-o-x-circle')
                        ->action(fn($records) => $records->each->update(['is_active' => false])),
                ]),
            ])
            ->defaultSort('usage_count', 'desc');
    }
}
