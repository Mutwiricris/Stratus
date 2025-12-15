<?php

namespace App\Filament\Resources\ContactMessages\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Select;
use Filament\Schemas\Components\Textarea;
use Filament\Schemas\Components\TextInput;
use Filament\Schemas\Schema;

class ContactMessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Contact Information')
                    ->schema([
                        TextInput::make('message_number')
                            ->label('Reference Number')
                            ->disabled()
                            ->dehydrated(false),
                        TextInput::make('name')
                            ->required()
                            ->columnSpan(1),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->columnSpan(1),
                        TextInput::make('phone')
                            ->tel()
                            ->columnSpan(1),
                        TextInput::make('company')
                            ->columnSpan(1),
                    ])
                    ->columns(2),

                Section::make('Message Details')
                    ->schema([
                        TextInput::make('subject')
                            ->columnSpanFull(),
                        Textarea::make('message')
                            ->required()
                            ->rows(6)
                            ->columnSpanFull(),
                    ]),

                Section::make('Status & Metadata')
                    ->schema([
                        Select::make('status')
                            ->options([
                                'new' => 'New',
                                'read' => 'Read',
                                'replied' => 'Replied',
                                'closed' => 'Closed',
                            ])
                            ->default('new')
                            ->required()
                            ->columnSpan(1),
                        TextInput::make('client_ip')
                            ->label('Client IP')
                            ->disabled()
                            ->dehydrated(false)
                            ->columnSpan(1),
                    ])
                    ->columns(2),
            ]);
    }
}
