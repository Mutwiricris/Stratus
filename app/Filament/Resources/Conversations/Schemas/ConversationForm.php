<?php

namespace App\Filament\Resources\Conversations\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ConversationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Customer Information')
                    ->schema([
                        Select::make('customer_id')
                            ->relationship('customer', 'name')
                            ->searchable()
                            ->preload()
                            ->label('Registered Customer')
                            ->columnSpan(2)
                            ->helperText('Select if customer has an account'),

                        TextInput::make('customer_name')
                            ->label('Guest Name')
                            ->helperText('For guest users without account')
                            ->columnSpan(1),

                        TextInput::make('customer_email')
                            ->email()
                            ->label('Email')
                            ->columnSpan(1),

                        TextInput::make('customer_phone')
                            ->tel()
                            ->label('Phone')
                            ->columnSpan(1),
                    ])
                    ->columns(3),

                Section::make('Conversation Details')
                    ->schema([
                        TextInput::make('conversation_number')
                            ->label('Conversation #')
                            ->disabled()
                            ->dehydrated(false)
                            ->default(fn() => 'Auto-generated')
                            ->columnSpan(1),

                        Select::make('status')
                            ->options([
                                'open' => 'Open',
                                'pending' => 'Pending',
                                'resolved' => 'Resolved',
                                'closed' => 'Closed',
                            ])
                            ->default('open')
                            ->required()
                            ->columnSpan(1),

                        Select::make('priority')
                            ->options([
                                'low' => 'Low',
                                'normal' => 'Normal',
                                'high' => 'High',
                                'urgent' => 'Urgent',
                            ])
                            ->default('normal')
                            ->required()
                            ->columnSpan(1),

                        Select::make('channel')
                            ->options([
                                'chat' => 'Chat',
                                'email' => 'Email',
                                'phone' => 'Phone',
                                'whatsapp' => 'WhatsApp',
                            ])
                            ->default('chat')
                            ->required()
                            ->columnSpan(1),

                        TextInput::make('source')
                            ->label('Source')
                            ->helperText('e.g., widget_chat, contact_form')
                            ->columnSpan(1),

                        Textarea::make('subject')
                            ->label('Subject / Topic')
                            ->rows(2)
                            ->columnSpanFull(),

                        TagsInput::make('tags')
                            ->label('Tags')
                            ->helperText('e.g., billing, technical, sales')
                            ->columnSpanFull(),
                    ])
                    ->columns(3),

                Section::make('Assignment')
                    ->schema([
                        Select::make('assigned_agent_id')
                            ->relationship('assignedAgent', 'name', fn($query) => $query->agents())
                            ->searchable()
                            ->preload()
                            ->label('Assigned Agent')
                            ->columnSpan(1),

                        Select::make('department_id')
                            ->relationship('department', 'name')
                            ->searchable()
                            ->preload()
                            ->label('Department')
                            ->columnSpan(1),
                    ])
                    ->columns(2),

                Section::make('Timestamps')
                    ->schema([
                        DateTimePicker::make('first_response_at')
                            ->label('First Response')
                            ->disabled()
                            ->columnSpan(1),

                        DateTimePicker::make('resolved_at')
                            ->label('Resolved At')
                            ->disabled()
                            ->columnSpan(1),

                        DateTimePicker::make('closed_at')
                            ->label('Closed At')
                            ->disabled()
                            ->columnSpan(1),

                        DateTimePicker::make('last_message_at')
                            ->label('Last Message')
                            ->disabled()
                            ->columnSpan(1),
                    ])
                    ->columns(4)
                    ->collapsed(),
            ]);
    }
}
