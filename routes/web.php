<?php

use App\Http\Controllers\SobreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', SobreController::class);