<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Basic Information')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state)))
                                    ->maxLength(255),
                                TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255),
                            ]),
                        TextInput::make('tagline')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        RichEditor::make('description')
                            ->required()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                                'bulletList',
                                'orderedList',
                            ])
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Project Details')
                    ->schema([
                        RichEditor::make('challenge')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                                'bulletList',
                                'orderedList',
                            ])
                            ->columnSpanFull(),
                        RichEditor::make('solution')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                                'bulletList',
                                'orderedList',
                            ])
                            ->columnSpanFull(),
                    ])
                    ->collapsed(),

                Section::make('Features & Technologies')
                    ->schema([
                        Repeater::make('features')
                            ->schema([
                                TextInput::make('icon')
                                    ->label('Icon (Heroicon name)')
                                    ->placeholder('check-circle')
                                    ->helperText('Use Heroicon outline icons (e.g., check-circle, star, lightning-bolt)'),
                                TextInput::make('title')
                                    ->required()
                                    ->label('Feature Title'),
                                Textarea::make('description')
                                    ->required()
                                    ->label('Feature Description')
                                    ->rows(2),
                            ])
                            ->columns(3)
                            ->defaultItems(3)
                            ->columnSpanFull()
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? null),

                        KeyValue::make('technologies')
                            ->label('Technologies')
                            ->keyLabel('Technology Name')
                            ->valueLabel('Description')
                            ->helperText('Add technologies used in this project')
                            ->columnSpanFull(),
                    ]),

                Section::make('Metrics & Results')
                    ->schema([
                        KeyValue::make('metrics')
                            ->keyLabel('Metric Name')
                            ->valueLabel('Metric Value')
                            ->helperText('Add project metrics (e.g., "Users" => "500K+", "Performance" => "40% faster")')
                            ->columnSpanFull(),
                    ])
                    ->collapsed(),

                Section::make('Categorization')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                Select::make('category')
                                    ->required()
                                    ->options([
                                        'Web Application' => 'Web Application',
                                        'Mobile App' => 'Mobile App',
                                        'E-commerce' => 'E-commerce',
                                        'Enterprise Software' => 'Enterprise Software',
                                        'SaaS Platform' => 'SaaS Platform',
                                        'Custom Development' => 'Custom Development',
                                    ])
                                    ->searchable(),
                                TextInput::make('industry')
                                    ->placeholder('e.g., FinTech, Healthcare, Education'),
                                TextInput::make('client')
                                    ->placeholder('Client name'),
                            ]),
                        DatePicker::make('completed_at')
                            ->label('Completion Date'),
                    ])
                    ->columns(2),

                Section::make('Links & URLs')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('url')
                                    ->label('Project URL')
                                    ->url()
                                    ->placeholder('https://example.com'),
                                TextInput::make('app_store_url')
                                    ->label('App Store URL')
                                    ->url()
                                    ->placeholder('https://apps.apple.com/...'),
                                TextInput::make('play_store_url')
                                    ->label('Play Store URL')
                                    ->url()
                                    ->placeholder('https://play.google.com/...'),
                            ]),
                    ])
                    ->collapsed(),

                Section::make('Media')
                    ->schema([
                        FileUpload::make('featured_image')
                            ->image()
                            ->imageEditor()
                            ->directory('portfolios')
                            ->visibility('public')
                            ->helperText('Upload featured image or enter Unsplash URL'),
                        Textarea::make('gallery')
                            ->label('Gallery Images (JSON)')
                            ->placeholder('["image1.jpg", "image2.jpg"]')
                            ->helperText('Enter array of image URLs in JSON format')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),

                Section::make('Testimonial')
                    ->schema([
                        Repeater::make('testimonial')
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->label('Client Name'),
                                TextInput::make('position')
                                    ->required()
                                    ->label('Position/Title'),
                                TextInput::make('company')
                                    ->required()
                                    ->label('Company'),
                                TextInput::make('photo')
                                    ->label('Photo URL')
                                    ->url(),
                                Textarea::make('content')
                                    ->required()
                                    ->label('Testimonial')
                                    ->rows(3)
                                    ->columnSpanFull(),
                            ])
                            ->columns(2)
                            ->maxItems(1)
                            ->columnSpanFull()
                            ->collapsible(),
                    ])
                    ->collapsed(),

                Section::make('Settings')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                Toggle::make('is_featured')
                                    ->label('Featured Project')
                                    ->default(false)
                                    ->inline(false),
                                Toggle::make('is_published')
                                    ->label('Published')
                                    ->default(true)
                                    ->inline(false),
                                TextInput::make('order')
                                    ->label('Display Order')
                                    ->numeric()
                                    ->default(0)
                                    ->helperText('Lower numbers appear first'),
                            ]),
                    ])
                    ->collapsible(),
            ]);
    }
}
