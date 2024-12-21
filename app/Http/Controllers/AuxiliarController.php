<?php

namespace App\Http\Controllers;

use App\Models\{Auxiliar, Usuario, periodos_academico};
use App\Models\Grado;
use App\Models\asignacion_auxiliar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AuxiliarController extends Controller
{

    public function ver()
    {
        $auxiliares = Usuario::where('id_rol', 2)->get();
        return view('cargos.Auxiliar.auxiliarInicio', compact('auxiliares'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function registrar(string $id)
    {
        // Obtener periodos académicos
        $periodos_2 = periodos_academico::latest()->get();
        $periodos = periodos_academico::latest()->first();

        // Obtener grados disponibles
        $grados = Grado::all();

        // Obtener datos del auxiliar
        $auxiliar = Usuario::where('id_usuario', $id)->first();

        // Obtener asignaciones actuales del auxiliar
        $asignaciones = asignacion_auxiliar::where('id_usuario', $id)->get();
        return view('cargos.Auxiliar.verGrados', compact('auxiliar', 'grados', 'periodos','asignaciones','periodos_2'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function insertar(Request $request)
    {
        asignacion_auxiliar::create([
            'id_usuario' => $request->id_usuario,
            'id_grado' => $request->id_grado,
            'id_periodo_academico' => $request->periodo,
        ]);
        return redirect()->route('AuxiliarListar');
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
