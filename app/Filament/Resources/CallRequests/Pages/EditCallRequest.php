<?php

namespace App\Filament\Resources\CallRequests\Pages;

use App\Filament\Resources\CallRequests\CallRequestResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCallRequest extends EditRecord
{
    protected static string $resource = CallRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
