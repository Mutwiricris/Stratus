<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('User Information')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(1),

                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255)
                            ->columnSpan(1),

                        TextInput::make('password')
                            ->password()
                            ->dehydrateStateUsing(fn($state) => Hash::make($state))
                            ->dehydrated(fn($state) => filled($state))
                            ->required(fn(string $context): bool => $context === 'create')
                            ->helperText('Leave blank to keep current password')
                            ->columnSpan(1),

                        FileUpload::make('avatar')
                            ->image()
                            ->directory('avatars')
                            ->helperText('Profile picture')
                            ->columnSpan(1),
                    ])
                    ->columns(2),

                Section::make('Role & Department')
                    ->schema([
                        Select::make('role')
                            ->options([
                                'customer' => 'Customer',
                                'agent' => 'Agent',
                                'admin' => 'Admin',
                            ])
                            ->required()
                            ->default('customer')
                            ->helperText('Agents and admins can access the Filament panel')
                            ->columnSpan(1),

                        Select::make('department_id')
                            ->relationship('department', 'name')
                            ->searchable()
                            ->preload()
                            ->helperText('Required for agents')
                            ->columnSpan(1),

                        Select::make('status')
                            ->options([
                                'online' => 'Online',
                                'away' => 'Away',
                                'busy' => 'Busy',
                                'offline' => 'Offline',
                            ])
                            ->default('offline')
                            ->required()
                            ->columnSpan(1),
                    ])
                    ->columns(2),

                Section::make('Agent Details')
                    ->schema([
                        Textarea::make('signature')
                            ->rows(3)
                            ->helperText('Email signature for this agent')
                            ->columnSpanFull(),
                    ])
                    ->collapsed(),
            ]);
    }
}
