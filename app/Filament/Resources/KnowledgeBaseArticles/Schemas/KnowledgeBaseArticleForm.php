<?php

namespace App\Filament\Resources\KnowledgeBaseArticles\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class KnowledgeBaseArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Article Content')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state)))
                            ->columnSpanFull(),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->helperText('URL-friendly version (auto-generated)')
                            ->columnSpanFull(),

                        RichEditor::make('content')
                            ->required()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'bulletList',
                                'orderedList',
                                'link',
                                'h2',
                                'h3',
                                'blockquote',
                                'codeBlock',
                            ])
                            ->columnSpanFull(),
                    ]),

                Section::make('Organization')
                    ->schema([
                        TextInput::make('category')
                            ->helperText('e.g., Integration Guides, Billing & Pricing, Technical')
                            ->datalist([
                                'Getting Started',
                                'Integration Guides',
                                'Billing & Pricing',
                                'Technical',
                                'Account Management',
                                'Troubleshooting',
                            ])
                            ->columnSpan(1),

                        TagsInput::make('keywords')
                            ->helperText('Keywords for search (press Enter to add)')
                            ->columnSpan(1),

                        Toggle::make('is_published')
                            ->label('Published')
                            ->default(false)
                            ->helperText('Only published articles are visible to customers')
                            ->columnSpan(1),
                    ])
                    ->columns(2),

                Section::make('Analytics')
                    ->schema([
                        TextInput::make('views')
                            ->label('Views')
                            ->numeric()
                            ->default(0)
                            ->disabled()
                            ->dehydrated(false)
                            ->columnSpan(1),

                        TextInput::make('helpful_count')
                            ->label('Helpful Votes')
                            ->numeric()
                            ->default(0)
                            ->disabled()
                            ->dehydrated(false)
                            ->columnSpan(1),

                        TextInput::make('not_helpful_count')
                            ->label('Not Helpful Votes')
                            ->numeric()
                            ->default(0)
                            ->disabled()
                            ->dehydrated(false)
                            ->columnSpan(1),
                    ])
                    ->columns(3)
                    ->collapsed(),
            ]);
    }
}
