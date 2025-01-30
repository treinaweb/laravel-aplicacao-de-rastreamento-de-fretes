<?php

namespace App\Filament\Resources\FreteResource\Pages;

use App\Enums\FreteStatus;
use App\Filament\Resources\FreteResource;
use App\Helpers;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFrete extends CreateRecord
{
    protected static string $resource = FreteResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['codigo_rastreio'] = Helpers::geraCodigoRastreioUnico();
        $data['status'] = FreteStatus::EM_TRANSITO;

        return $data;
    }
}
