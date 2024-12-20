<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Model
{
    #use HasApiTokens, Notifiable;

    protected $table = 'usuarios';
    protected $keyType = 'string';
    public $incrementing = false;
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
