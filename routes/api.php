<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FreteController;
use Illuminate\Support\Facades\Route;

Route::get('/ola', function(){
    return "Ola mundo";
});

Route::post('/clientes', [ClienteController::class, 'store']);
Route::post('/fretes', [FreteController::class, 'store']);