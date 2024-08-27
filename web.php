<?php

use App\Http\Controllers\MascotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/CrearMascota', [AutoController::class, 'CrearMascota']);

Route::get('/BuscarMascota/{id}', [AutoController::class, 'BuscarAuto']);

Route::get('/ModificarMascota/{id}', [AutoController::class, 'ModificarMascota']);

Route::get('/MostrarMascota', [AutoController::class, 'MostrarMascota']);

Route::get('/EliminarMascota/{id}', [AutoController::class, 'EliminarMascota']);
