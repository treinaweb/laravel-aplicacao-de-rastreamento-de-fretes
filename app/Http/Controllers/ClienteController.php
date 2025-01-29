<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClienteRequest;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function store(StoreClienteRequest $request): Cliente
    {
        $cliente = Cliente::create($request->all());

        return $cliente; 
    }
}
