<?php

namespace App\Filament\Resources\CallRequests\Pages;

use App\Filament\Resources\CallRequests\CallRequestResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCallRequest extends ViewRecord
{
    protected static string $resource = CallRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
