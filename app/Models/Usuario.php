<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    protected $table = 'usuarios';

    protected $fillable = [
        'id_usuario',
        'nombre_usuario',
        'apellido_usuario',
        'correo',
        'contraseña',
        'id_rol',
        'estado_usuario'
    ];

    protected $hidden = [
        'contraseña'
    ];

    public function getAuthPassword()
    {
        return $this->contraseña;
    }
}
