<?php

namespace App;

use App\Models\Frete;
use Illuminate\Support\Str;

class Helpers
{
    static public function geraCodigoRastreioUnico(): string
    {
        do {
            $codigo = Str::upper(Str::random(8));

            $existeFreteComEsseCodigo = Frete::where('codigo_rastreio', $codigo)->exists();
        } while ($existeFreteComEsseCodigo);

        return $codigo;
    }
}