<?php

namespace App\Filament\Resources\Inquiries\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class InquiryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Inquiry Details')
                    ->schema([
                        TextInput::make('inquiry_number')
                            ->label('Inquiry Number')
                            ->disabled()
                            ->dehydrated(false)
                            ->visible(fn ($record) => $record !== null),
                        Select::make('type')
                            ->options([
                                'message' => 'Message',
                                'call' => 'Call',
                                'email' => 'Email',
                            ])
                            ->default('message')
                            ->required()
                            ->live(),
                        Select::make('status')
                            ->options([
                                'new' => 'New',
                                'contacted' => 'Contacted',
                                'qualified' => 'Qualified',
                                'converted' => 'Converted',
                                'closed' => 'Closed',
                            ])
                            ->default('new')
                            ->required(),
                        Select::make('priority')
                            ->options([
                                'low' => 'Low',
                                'normal' => 'Normal',
                                'high' => 'High',
                                'urgent' => 'Urgent',
                            ])
                            ->default('normal')
                            ->required(),
                    ])
                    ->columns(2),

                Section::make('Contact Information')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('email')
                            ->label('Email Address')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        TextInput::make('phone')
                            ->tel()
                            ->maxLength(255),
                        TextInput::make('company')
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Section::make('Message Details')
                    ->schema([
                        TextInput::make('subject')
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Textarea::make('message')
                            ->rows(4)
                            ->columnSpanFull(),
                    ]),

                Section::make('Call Details')
                    ->schema([
                        DateTimePicker::make('preferred_call_time')
                            ->label('Preferred Call Time')
                            ->seconds(false),
                        TextInput::make('timezone')
                            ->placeholder('e.g., America/New_York'),
                    ])
                    ->columns(2)
                    ->visible(fn ($get) => $get('type') === 'call'),

                Section::make('Assignment & Follow-up')
                    ->schema([
                        Select::make('assigned_to')
                            ->label('Assigned To')
                            ->relationship('assignedTo', 'name')
                            ->searchable()
                            ->preload(),
                        DateTimePicker::make('contacted_at')
                            ->label('Contacted At')
                            ->seconds(false),
                        Textarea::make('notes')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Tracking Information')
                    ->schema([
                        TextInput::make('source')
                            ->default('website')
                            ->disabled(),
                        TextInput::make('client_ip')
                            ->label('Client IP')
                            ->disabled(),
                        TextInput::make('referrer')
                            ->disabled(),
                        Textarea::make('user_agent')
                            ->disabled()
                            ->rows(2)
                            ->columnSpanFull(),
                    ])
                    ->columns(3)
                    ->collapsed(),
            ]);
    }
}
