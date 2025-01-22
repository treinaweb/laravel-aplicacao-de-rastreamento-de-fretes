<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RastreamentoController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::get('/rastreamento', RastreamentoController::class)->name('frete.rastreamento');