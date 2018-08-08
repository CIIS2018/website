<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registered extends Model
{
    //

    protected $fillable = [
        'nombre', 'email', 'apellido','dni','tipo_inscripcion','ciudad','instituto','telefono','celular','imagen'
    ];

    protected $table = 'registered';

}
