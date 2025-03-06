<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contatoController;

Route::get('/', function () {
    return view('home');
});

Route::resource('contato', contatoController::class);
