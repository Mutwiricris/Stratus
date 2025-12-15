<?php

namespace App\Filament\Resources\CallRequests;

use App\Filament\Resources\CallRequests\Pages\CreateCallRequest;
use App\Filament\Resources\CallRequests\Pages\EditCallRequest;
use App\Filament\Resources\CallRequests\Pages\ListCallRequests;
use App\Filament\Resources\CallRequests\Pages\ViewCallRequest;
use App\Filament\Resources\CallRequests\Schemas\CallRequestForm;
use App\Filament\Resources\CallRequests\Tables\CallRequestsTable;
use App\Models\CallRequest;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class CallRequestResource extends Resource
{
    protected static ?string $model = CallRequest::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhone;

    protected static string|UnitEnum|null $navigationGroup = 'Customer Support';

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationLabel = 'Call Requests';

    protected static ?string $modelLabel = 'Call Request';

    protected static ?string $pluralModelLabel = 'Call Requests';

    public static function form(Schema $schema): Schema
    {
        return CallRequestForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CallRequestsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCallRequests::route('/'),
            'view' => ViewCallRequest::route('/{record}'),
            'edit' => EditCallRequest::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false; // Call requests should only be submitted via the frontend widget
    }
}
