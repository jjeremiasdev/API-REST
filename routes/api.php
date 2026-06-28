<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/paquetes', [PaqueteController::class, 'index']);

    Route::post('/paquetes', [PaqueteController::class, 'store']);

    Route::post('/logout', [AuthController::class, 'logout']);

});