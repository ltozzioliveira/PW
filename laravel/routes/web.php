<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return "Olá, Mundo!";
});

Route::get('/form', [FormController::class, 'mostrarForm']);

Route::post('/processarForm', [FormController::class, 'receberValor']);