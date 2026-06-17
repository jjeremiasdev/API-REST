<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaqueteController;

Route::get('/paquetes', [PaqueteController::class, 'index']);
Route::post('/paquetes', [PaqueteController::class, 'store']);