<?php

namespace App\Http\Controllers;

use App\Models\{Docente, Usuario, periodos_academico};
use App\Models\Curso;
use App\Models\Grado;
use App\Models\asignacion_docente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function ver()
    {
        $docentes = Usuario::where('id_rol', 1)->get();
        return view('cargos.docenteindex', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function registrar(string $id)
    {   
        $periodos_2 = periodos_academico::latest()->get();

        $periodos = periodos_academico::latest()->first();
        $cursos = Curso::all();
        $grados = Grado::all();
        $docente = Usuario::where('id_usuario', $id)->first();

        $asignaciones = asignacion_docente::where('id_usuario', $id)->get();
        return view('cargos.Docente.verGradosCursos', compact('docente', 'cursos', 'grados', 'periodos','asignaciones','periodos_2'));
    }
    

    public function registrarNotas(string $id_usuario)
    {
        #$periodos_2 = periodos_academico::latest()->get();
        #$periodos = periodos_academico::latest()->first();
        #$cursos = Curso::all();
        #$grados = Grado::all();
        #$docentes = Usuario::where('id_usuario', $id_usuario)->first();
#
        #$asignaciones = asignacion_docente::where('id_usuario', $id_usuario)->get();
        #return view('cargos.docenteindex', compact('docentes', 'cursos', 'grados', 'periodos','asignaciones','periodos_2'));
        return view('cargos.docenteindex');
    }
  

    /**
     * Store a newly created resource in storage.
     */
    public function insertar(Request $request)
    {
        asignacion_docente::create([
            'id_usuario' => $request->id_usuario,
            'id_grado' => $request->id_grado,
            'id_curso' => $request->id_curso,
            'id_periodo_academico' => $request->periodo,
        ]);
        return redirect()->route('DocenteListar');
        
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
