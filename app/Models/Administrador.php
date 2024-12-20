<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    //

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $typeKey = 'text';

    public $timestamps = false;
    

}
