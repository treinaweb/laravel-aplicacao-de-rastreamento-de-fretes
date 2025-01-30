<?php

namespace App\Filament\Resources\FreteResource\Pages;

use App\Filament\Resources\FreteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFretes extends ListRecords
{
    protected static string $resource = FreteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
