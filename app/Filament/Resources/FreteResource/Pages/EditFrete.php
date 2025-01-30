<?php

namespace App\Filament\Resources\FreteResource\Pages;

use App\Filament\Resources\FreteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFrete extends EditRecord
{
    protected static string $resource = FreteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
