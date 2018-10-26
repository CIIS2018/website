<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscritos extends Model
{
    //
    protected $fillable = [
        'nombre', 'email', 'apellido','dni','tipo_inscripcion','ciudad','institucion','pago','celular','foto_voucher','codigo','descuento','confirmado','modo_pago','dni'
    ];

    protected $table = 'inscritos';
}
