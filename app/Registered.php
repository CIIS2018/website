<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registered extends Model
{
    //

    protected $fillable = [
        'nombre', 'email', 'apellido','dni','tipo_inscripcion','ciudad','instituto','telefono','celular','imagen','pago','last_user_modificied'
    ];

    protected $table = 'registered';

}
