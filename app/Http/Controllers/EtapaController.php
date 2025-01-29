<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEtapaRequest;
use App\Models\Etapa;

class EtapaController extends Controller
{
    public function store(StoreEtapaRequest $request)
    {
        $etapa = Etapa::create($request->all());

        return $etapa;
    }
}
