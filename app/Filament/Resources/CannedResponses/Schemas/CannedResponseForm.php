<?php

namespace App\Filament\Resources\CannedResponses\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CannedResponseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Response Details')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->helperText('Internal name for this response')
                            ->columnSpan(1),

                        TextInput::make('shortcut')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->prefix('/')
                            ->helperText('Type this in chat to insert (e.g., /welcome)')
                            ->columnSpan(1),

                        Select::make('department_id')
                            ->relationship('department', 'name')
                            ->searchable()
                            ->preload()
                            ->label('Department')
                            ->helperText('Leave empty for all departments')
                            ->columnSpan(1),

                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->helperText('Inactive responses won\'t be available')
                            ->columnSpan(1),

                        Textarea::make('message')
                            ->required()
                            ->rows(8)
                            ->helperText('The response message that will be inserted')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Statistics')
                    ->schema([
                        TextInput::make('usage_count')
                            ->label('Times Used')
                            ->numeric()
                            ->default(0)
                            ->disabled()
                            ->dehydrated(false)
                            ->helperText('How many times this response has been used'),
                    ])
                    ->collapsed(),
            ]);
    }
}
