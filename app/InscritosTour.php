<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InscritosTour extends Model
{
    //

    protected $fillable = [
        'nombre', 'email', 'apellido','tipo_inscripcion','ciudad','institucion','pago','celular','codigo','modo_pago','dni','last_user_modificied'
    ];

    protected $table = 'tour';

}
