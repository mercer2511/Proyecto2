<?php

namespace App\Http\Controllers;

use App\Models\{Docente, Usuario, periodos_academico};
use App\Models\Curso;
use App\Models\Grado;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function ver()
    {
        $docentes = Usuario::where('id_rol', 3)->get();
        return view('cargos.docenteindex', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function registrar(string $id)
    {   
        $periodos = periodos_academico::latest()->first();
        $cursos = Curso::all();
        $grados = Grado::all();
        $docente = Usuario::where('id_usuario', $id)->first();
        return view('cargos.Docente.verGradosCursos', compact('docente', 'cursos', 'grados', 'periodos'));
    }
    


    /**
     * Store a newly created resource in storage.
     */
    public function insertar(Request $request)
    {
         
        
    }

    /**
     * Display the specified resource.
     */
    public function detalle(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editar(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function actualizar(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function eliminar(string $id)
    {
        //
    }
}
