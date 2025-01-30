<?php

namespace App\Filament\Resources\FreteResource\Pages;

use App\Filament\Resources\FreteResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFrete extends ViewRecord
{
    protected static string $resource = FreteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
