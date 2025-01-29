<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtapaController;
use App\Http\Controllers\FreteController;
use App\Http\Controllers\ClienteController;

Route::get('/ola', function(){
    return "Ola mundo";
});

Route::post('/clientes', [ClienteController::class, 'store']);
Route::post('/fretes', [FreteController::class, 'store']);
Route::post('/etapas', [EtapaController::class, 'store']);