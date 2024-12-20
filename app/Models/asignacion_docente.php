<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class asignacion_docente extends Model
{
    //
    protected $table = 'asignacion_docentes';
    protected $fillable = [
        'id_usuario',
        'id_grado',
        'id_curso',
        'id_periodo_academico',
    ];

}
