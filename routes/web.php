<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\view;
use App\Http\Controllers\AdministradorController;

Route::get('/', function () {
    return view('index');
});

Route::get   ('/Administrador',                   [AdministradorController::class, 'ver'])->name('vistaPrincipal');
Route::get   ('/Administrador/registrar/',        [AdministradorController::class, 'registrar'])->name('registrarUsuarios');
Route::post  ('/Administrador/insertar',          [AdministradorController::class, 'insertar'])->name('insertarUsuario');
Route::get   ('/Administrador/editar',            [AdministradorController::class, 'editar'])->name('editar');
Route::put   ('/Administrador/actualizar',        [AdministradorController::class, 'actualizar'])->name('actualizar');
Route::delete('/Administrador/eliminar',          [AdministradorController::class, 'eliminar'])->name('eliminar');

