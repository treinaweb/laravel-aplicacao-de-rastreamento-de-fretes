<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/ola', function(){
    return "Ola mundo";
});

Route::post('/clientes', [ClienteController::class, 'store']);