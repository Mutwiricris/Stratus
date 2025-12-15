<?php

namespace App\Filament\Resources\Inquiries\Schemas;

use App\Models\Inquiry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class InquiryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Inquiry Overview')
                    ->schema([
                        TextEntry::make('inquiry_number')
                            ->label('Inquiry #')
                            ->copyable()
                            ->badge()
                            ->color('info'),
                        TextEntry::make('type')
                            ->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'message' => 'info',
                                'call' => 'warning',
                                'email' => 'success',
                                default => 'gray',
                            }),
                        TextEntry::make('status')
                            ->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'new' => 'danger',
                                'contacted' => 'warning',
                                'qualified' => 'info',
                                'converted' => 'success',
                                'closed' => 'gray',
                                default => 'gray',
                            }),
                        TextEntry::make('priority')
                            ->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'urgent' => 'danger',
                                'high' => 'warning',
                                'normal' => 'info',
                                'low' => 'gray',
                                default => 'gray',
                            }),
                        TextEntry::make('created_at')
                            ->label('Received')
                            ->dateTime()
                            ->since(),
                        TextEntry::make('source')
                            ->badge(),
                    ])
                    ->columns(3),

                Section::make('Contact Information')
                    ->schema([
                        TextEntry::make('name')
                            ->icon('heroicon-o-user'),
                        TextEntry::make('email')
                            ->label('Email Address')
                            ->icon('heroicon-o-envelope')
                            ->copyable(),
                        TextEntry::make('phone')
                            ->icon('heroicon-o-phone')
                            ->copyable()
                            ->placeholder('-'),
                        TextEntry::make('company')
                            ->icon('heroicon-o-building-office')
                            ->placeholder('-'),
                    ])
                    ->columns(2),

                Section::make('Message')
                    ->schema([
                        TextEntry::make('subject')
                            ->placeholder('-'),
                        TextEntry::make('message')
                            ->placeholder('-')
                            ->markdown()
                            ->columnSpanFull(),
                    ])
                    ->visible(fn (Inquiry $record): bool => !empty($record->message)),

                Section::make('Call Details')
                    ->schema([
                        TextEntry::make('preferred_call_time')
                            ->label('Preferred Time')
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('timezone')
                            ->placeholder('-'),
                    ])
                    ->columns(2)
                    ->visible(fn (Inquiry $record): bool => $record->type === 'call'),

                Section::make('Assignment & Follow-up')
                    ->schema([
                        TextEntry::make('assignedTo.name')
                            ->label('Assigned To')
                            ->placeholder('Unassigned')
                            ->icon('heroicon-o-user-circle'),
                        TextEntry::make('contacted_at')
                            ->label('Contacted At')
                            ->dateTime()
                            ->placeholder('Not contacted yet'),
                        TextEntry::make('notes')
                            ->placeholder('No notes')
                            ->markdown()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Tracking Information')
                    ->schema([
                        TextEntry::make('client_ip')
                            ->label('IP Address')
                            ->copyable()
                            ->placeholder('-'),
                        TextEntry::make('referrer')
                            ->placeholder('-')
                            ->url(fn ($state) => $state, true),
                        TextEntry::make('user_agent')
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('updated_at')
                            ->label('Last Updated')
                            ->dateTime()
                            ->since(),
                        TextEntry::make('deleted_at')
                            ->dateTime()
                            ->visible(fn (Inquiry $record): bool => $record->trashed()),
                    ])
                    ->columns(2)
                    ->collapsed(),
            ]);
    }
}
