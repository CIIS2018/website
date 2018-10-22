<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class inscritos_talleres extends Model
{
    //

    protected $fillable = [
        'nombre', 'email', 'apellido','dni','tipo_taller','ciudad','instituto','celular','imagen'
    ];

    protected $table = 'inscritos_talleres';

}
