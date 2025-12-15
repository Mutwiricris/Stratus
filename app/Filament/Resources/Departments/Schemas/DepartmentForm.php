<?php

namespace App\Filament\Resources\Departments\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class DepartmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Department Information')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state)))
                            ->columnSpan(1),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->helperText('URL-friendly name (auto-generated)')
                            ->columnSpan(1),

                        TextInput::make('email')
                            ->email()
                            ->maxLength(255)
                            ->helperText('Department email address')
                            ->columnSpan(1),

                        TextInput::make('order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Display order (lower numbers first)')
                            ->columnSpan(1),

                        Textarea::make('description')
                            ->rows(3)
                            ->columnSpanFull()
                            ->helperText('Brief description of what this department handles'),

                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->helperText('Inactive departments won\'t appear in chat routing')
                            ->columnSpan(1),
                    ])
                    ->columns(2),
            ]);
    }
}
