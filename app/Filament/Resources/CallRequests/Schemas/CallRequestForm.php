<?php

namespace App\Filament\Resources\CallRequests\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Select;
use Filament\Schemas\Components\Textarea;
use Filament\Schemas\Components\TextInput;
use Filament\Schemas\Schema;

class CallRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Contact Information')
                    ->schema([
                        TextInput::make('request_number')
                            ->label('Reference Number')
                            ->disabled()
                            ->dehydrated(false),
                        TextInput::make('name')
                            ->required()
                            ->columnSpan(1),
                        TextInput::make('phone')
                            ->tel()
                            ->required()
                            ->columnSpan(1),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->columnSpan(1),
                        TextInput::make('company')
                            ->columnSpan(1),
                    ])
                    ->columns(2),

                Section::make('Call Scheduling')
                    ->schema([
                        TextInput::make('preferred_time')
                            ->label('Preferred Time')
                            ->placeholder('e.g., Tomorrow 2pm')
                            ->columnSpan(1),
                        TextInput::make('timezone')
                            ->columnSpan(1),
                        Textarea::make('note')
                            ->rows(4)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Status & Metadata')
                    ->schema([
                        Select::make('status')
                            ->options([
                                'pending' => 'Pending',
                                'called' => 'Called',
                                'completed' => 'Completed',
                                'cancelled' => 'Cancelled',
                            ])
                            ->default('pending')
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
