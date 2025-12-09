<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupersetController;

// Ruta para obtener el guest token de Superset
Route::get('/superset/guest-token', [SupersetController::class, 'getGuestToken']);

use App\Http\Controllers\CarritoController;

// Rutas del Carrito
Route::get('/carrito/{userId}', [CarritoController::class, 'index']);
Route::post('/carrito/{userId}/agregar', [CarritoController::class, 'agregar']);