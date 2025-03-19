<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contatoController;
use App\Http\Controllers\SobreController;

Route::get('/', function () {
    return view('home');
});

Route::resource('contato', contatoController::class);
Route::get('/sobre', [SobreController::class, 'sobre']);
