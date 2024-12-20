<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\view;
use App\Http\Controllers\AdministradorController;

Route::get('/', function () {
    return view('index');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('ingresar');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Rutas para redirigir según el rol del usuario
Route::get('director/{id_usuario}', function ($id_usuario) {
    return view('cargos.directorindex', ['id_usuario' => $id_usuario]);
})->name('director');

Route::get('administrador/{id_usuario}', function ($id_usuario) {
    return view('cargos.administradorindex', ['id_usuario' => $id_usuario]);
})->name('administrador');

Route::get('auxiliar/{id_usuario}', function ($id_usuario) {
    return view('cargos.auxiliarindex', ['id_usuario' => $id_usuario]);
})->name('auxiliar');

Route::get('docente/{id_usuario}', function ($id_usuario) {
    return view('cargos.docenteindex', ['id_usuario' => $id_usuario]);
})->name('docente');
Route::get   ('/Administrador',                   [AdministradorController::class, 'ver'])->name('vistaPrincipal');
Route::get   ('/Administrador/registrar/',        [AdministradorController::class, 'registrar'])->name('registrarUsuarios');
Route::post  ('/Administrador/insertar',          [AdministradorController::class, 'insertar'])->name('insertarUsuario');
Route::get   ('/Administrador/editar',            [AdministradorController::class, 'editar'])->name('editar');
Route::put   ('/Administrador/actualizar',        [AdministradorController::class, 'actualizar'])->name('actualizar');
Route::delete('/Administrador/eliminar',          [AdministradorController::class, 'eliminar'])->name('eliminar');

