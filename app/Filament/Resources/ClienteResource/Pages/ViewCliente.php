<?php

namespace App\Filament\Resources\ClienteResource\Pages;

use App\Filament\Resources\ClienteResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCliente extends ViewRecord
{
    protected static string $resource = ClienteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
