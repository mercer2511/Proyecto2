<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class asignacion_auxiliar extends Model
{
    //
    protected $table = 'asignacion_auxiliares';
    protected $fillable = [
        'id_usuario',
        'id_grado',
        'id_periodo_academico',
    ];

}