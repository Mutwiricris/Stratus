<?php

namespace App\Filament\Resources\KnowledgeBaseArticles\Tables;

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

class KnowledgeBaseArticlesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->limit(50),

                TextColumn::make('slug')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->color('gray')
                    ->toggleable(),

                TextColumn::make('category')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('primary'),

                IconColumn::make('is_published')
                    ->label('Published')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('views')
                    ->label('Views')
                    ->sortable()
                    ->badge()
                    ->color('info'),

                TextColumn::make('helpful_count')
                    ->label('👍')
                    ->sortable()
                    ->badge()
                    ->color('success'),

                TextColumn::make('not_helpful_count')
                    ->label('👎')
                    ->sortable()
                    ->badge()
                    ->color('danger'),

                TextColumn::make('helpfulness_ratio')
                    ->label('Rating')
                    ->getStateUsing(function ($record) {
                        $total = $record->helpful_count + $record->not_helpful_count;
                        if ($total === 0) return 'N/A';
                        $ratio = ($record->helpful_count / $total) * 100;
                        return number_format($ratio, 0) . '%';
                    })
                    ->badge()
                    ->color(fn($state) => match(true) {
                        $state === 'N/A' => 'gray',
                        intval($state) >= 80 => 'success',
                        intval($state) >= 60 => 'warning',
                        default => 'danger',
                    }),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->options([
                        'Getting Started' => 'Getting Started',
                        'Integration Guides' => 'Integration Guides',
                        'Billing & Pricing' => 'Billing & Pricing',
                        'Technical' => 'Technical',
                        'Account Management' => 'Account Management',
                        'Troubleshooting' => 'Troubleshooting',
                    ])
                    ->multiple(),

                Filter::make('published')
                    ->label('Published Only')
                    ->query(fn(Builder $query) => $query->where('is_published', true))
                    ->toggle()
                    ->default(),

                Filter::make('popular')
                    ->label('Popular (100+ views)')
                    ->query(fn(Builder $query) => $query->where('views', '>=', 100))
                    ->toggle(),

                Filter::make('highly_rated')
                    ->label('Highly Rated (80%+)')
                    ->query(function (Builder $query) {
                        return $query->whereRaw('(helpful_count / (helpful_count + not_helpful_count)) >= 0.8')
                            ->where('helpful_count', '>', 0);
                    })
                    ->toggle(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),

                Action::make('publish')
                    ->label('Publish')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->action(fn($record) => $record->update(['is_published' => true]))
                    ->visible(fn($record) => !$record->is_published)
                    ->requiresConfirmation(),

                Action::make('unpublish')
                    ->label('Unpublish')
                    ->icon('heroicon-o-x-circle')
                    ->color('danger')
                    ->action(fn($record) => $record->update(['is_published' => false]))
                    ->visible(fn($record) => $record->is_published)
                    ->requiresConfirmation(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),

                    Action::make('bulk_publish')
                        ->label('Publish Selected')
                        ->icon('heroicon-o-check-circle')
                        ->action(fn($records) => $records->each->update(['is_published' => true])),

                    Action::make('bulk_unpublish')
                        ->label('Unpublish Selected')
                        ->icon('heroicon-o-x-circle')
                        ->action(fn($records) => $records->each->update(['is_published' => false])),
                ]),
            ])
            ->defaultSort('views', 'desc');
    }
}
