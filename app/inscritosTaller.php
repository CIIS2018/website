<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class inscritosTaller extends Model
{
    //
    protected $fillable = [
        'nombre', 'apellido', 'celular','institucion','taller','precio','ciudad'
    ];

    protected $table = 'inscritosTaller';
   
}
