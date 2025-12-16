<?php

namespace App\Filament\Resources\Portfolios\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class PortfoliosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('featured_image')
                    ->label('Image')
                    ->circular()
                    ->size(60)
                    ->defaultImageUrl(url('/images/placeholder.png')),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(30)
                    ->weight('bold'),
                TextColumn::make('category')
                    ->badge()
                    ->searchable()
                    ->sortable()
                    ->colors([
                        'primary' => 'Web Application',
                        'success' => 'Mobile App',
                        'warning' => 'E-commerce',
                        'danger' => 'Enterprise Software',
                        'info' => 'SaaS Platform',
                        'secondary' => 'Custom Development',
                    ]),
                TextColumn::make('industry')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('completed_at')
                    ->label('Completed')
                    ->date('M Y')
                    ->sortable()
                    ->toggleable(),
                IconColumn::make('is_featured')
                    ->label('Featured')
                    ->boolean()
                    ->sortable(),
                IconColumn::make('is_published')
                    ->label('Published')
                    ->boolean()
                    ->sortable(),
                TextColumn::make('order')
                    ->label('Order')
                    ->numeric()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->options([
                        'Web Application' => 'Web Application',
                        'Mobile App' => 'Mobile App',
                        'E-commerce' => 'E-commerce',
                        'Enterprise Software' => 'Enterprise Software',
                        'SaaS Platform' => 'SaaS Platform',
                        'Custom Development' => 'Custom Development',
                    ])
                    ->multiple(),
                SelectFilter::make('industry')
                    ->options(fn () => \App\Models\Portfolio::whereNotNull('industry')
                        ->distinct()
                        ->pluck('industry', 'industry')
                        ->toArray())
                    ->multiple(),
                Filter::make('featured')
                    ->label('Featured Only')
                    ->query(fn (Builder $query): Builder => $query->where('is_featured', true)),
                Filter::make('published')
                    ->label('Published Only')
                    ->query(fn (Builder $query): Builder => $query->where('is_published', true))
                    ->default(),
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ])
            ->defaultSort('order', 'asc')
            ->poll('30s');
    }
}
