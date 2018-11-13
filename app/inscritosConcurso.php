<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class inscritosConcurso extends Model
{
    //
    protected $fillable = [
        'nombre', 'apellido', 'celular','institucion','concurso','precio','tipo_inscripcion','integrantes'
    ];

    protected $table = 'inscritosConcurso';
   
}
