<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('cargos.administradorindex');
});