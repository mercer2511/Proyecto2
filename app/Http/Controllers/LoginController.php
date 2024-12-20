<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('correo', 'contraseña');

        // Buscar el usuario por correo
        $user = Usuario::where('correo', $credentials['correo'])->first();

        if (!$user) {
            return back()->withErrors([
                'correo' => 'Usuario no encontrado.',
            ]);
        }

        // Verificar si el usuario existe y la contraseña coincide
        if ($user && Hash::check($credentials['contraseña'], $user->contraseña)) {
            Auth::login($user);
            
            // Redirigir según el rol del usuario
            switch ($user->id_rol) {
                case '4': // Director
                    return redirect()->route('director', ['id_usuario' => $user->id_usuario]);
                case '3': // Administrador
                    return redirect()->route('administrador', ['id_usuario' => $user->id_usuario]);
                case '2': // Auxiliar
                    return redirect()->route('auxiliar', ['id_usuario' => $user->id_usuario]);
                case '1': // Docente
                    return redirect()->route('docente', ['id_usuario' => $user->id_usuario]);
                default:
                    return redirect()->intended('/');
            }
        }

        return back()->withErrors([
            'correo' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }
}