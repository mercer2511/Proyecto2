<?php

namespace App\Http\Controllers;

use App\Models\{Usuario, Rol};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ver()
    {
        return view('cargos.administrador.registrarUsuarios');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function registrar(Request $request)
    {
        $cargo = $request->query('cargo');
        return view('cargos.administrador.registrarUsuariosCargo', compact('cargo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insertar(Request $request)
    {
        #$request->validate([
        #    'id_usuario' => 'required|string|max:255|unique:usuarios',
        #    'nombre_usuario' => 'required|string|max:255',
        #    'apellido_usuario' => 'required|string|max:255',
        #    'correo' => 'required|string|email|max:255|unique:usuarios',
        #    'contraseña' => 'required|string|min:8',
        #    'id_rol' => 'required|integer|exists:roles,id_rol',
        #]);

        $rol = Rol::where('nombre_rol', $request->cargo)->first();
        if (!$rol) {
            return redirect()->back()->withErrors(['cargo' => 'El rol no existe.']);
        }

        $usuario = new Usuario([
            'id_usuario' => $request->id_usuario,
            'nombre_usuario' => $request->nombre_usuario,
            'apellido_usuario' => $request->apellido_usuario,
            'correo' => $request->correo,
            'contraseña' => Hash::make($request->contraseña),
            'id_rol' => $rol->id_rol,
            'estado_usuario' => 'activo',
        ]);

        $usuario->save();

        return view('cargos.administradorindex')->with('success', 'Usuario registrado exitosamente.');
    }

    // Otros métodos del controlador...
}