<?php

use App\Docente;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\view;
use App\Http\Controllers\{AdministradorController, DocenteController, AuxiliarController};

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



#Route::get('docente/{id_usuario}', function ($id_usuario) {
#    return route('docenteMostrar', ['id_usuario' => $id_usuario]);
#})->name('docente');
#
Route::get   ('/Docente/{id_usuario}',[DocenteController::class, 'registrarNotas' ])->name('docente');



# con estas rutas trabaja el administrador para gestionar los usuarios  (Docente, Auxiliar, Administrador)

Route::get   ('/Docente',                           [DocenteController::class, 'ver'       ])->name('DocenteListar');
Route::get   ('/Docente/asignar_grado_y_curso/{docente}',[DocenteController::class, 'registrar' ])->name('asignacionGradoCurso');
Route::post  ('/Docente/',                          [DocenteController::class, 'insertar'  ])->name('instarGradoCurso');
Route::get   ('/Docente/editar',                    [DocenteController::class, 'editar'    ])->name('editar');
Route::put   ('/Docente/actualizar',                [DocenteController::class, 'actualizar'])->name('actualizar');
Route::delete('/Docente/eliminar',                  [DocenteController::class, 'eliminar'  ])->name('eliminar');
    

Route::get   ('/Administrador',            [AdministradorController::class, 'ver'       ])->name('AdministradorListar');
Route::get   ('/Administrador/registrar/', [AdministradorController::class, 'registrar' ])->name('registrarUsuarios');
Route::post  ('/Administrador/insertar',   [AdministradorController::class, 'insertar'  ])->name('insertarUsuario');
Route::get   ('/Administrador/editar',     [AdministradorController::class, 'editar'    ])->name('editar');
Route::put   ('/Administrador/actualizar', [AdministradorController::class, 'actualizar'])->name('actualizar');
Route::delete('/Administrador/eliminar',   [AdministradorController::class, 'eliminar'  ])->name('eliminar');


Route::get('/auxiliar/{id_usuario}', [AuxiliarController::class, 'ver'])->name('auxiliar');
//Redirecion de acuerdo al rol
Route::get   ('/Auxiliar',                 [AuxiliarController::class, 'ver'       ])->name('AuxiliarListar');
Route::get   ('/Auxiliar/asignar_grado/{auxiliar}',       [AuxiliarController::class, 'registrar' ])->name('asignacionGrado');
Route::post  ('/Auxiliar/',        [AuxiliarController::class, 'insertar'  ])->name('insertarGrado');
Route::get   ('/Auxiliar/editar',          [AuxiliarController::class, 'editar'    ])->name('editar');
Route::put   ('/Auxiliar/actualizar',      [AuxiliarController::class, 'actualizar'])->name('actualizar');
Route::delete('/Auxiliar/eliminar',        [AuxiliarController::class, 'eliminar'  ])->name('eliminar');

