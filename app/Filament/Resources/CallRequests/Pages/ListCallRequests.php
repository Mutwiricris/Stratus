<?php

namespace App\Filament\Resources\CallRequests\Pages;

use App\Filament\Resources\CallRequests\CallRequestResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCallRequests extends ListRecords
{
    protected static string $resource = CallRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
