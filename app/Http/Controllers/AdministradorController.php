<?php

namespace App\Http\Controllers;

use App\Administrador;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ver()
    {
        //
        return view('cargos.administrador.registrarUsuarios');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function registrar(Request $request)
    {
        return view('cargos.administrador.registrarUsuariosCargo');
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
