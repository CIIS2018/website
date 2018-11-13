<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Schedules;

class Inscritos extends Model
{
    //
    protected $fillable = [
        'nombre', 'email', 'apellido','dni','tipo_inscripcion','ciudad','institucion','pago','celular','foto_voucher','codigo','descuento','confirmado','modo_pago','dni','last_user_modificied'
    ];

    protected $table = 'Inscritos';

 public function schedules()
    {
        return $this->belongsToMany(Schedules::class, 'assistence','students_id','schedules_id')->withPivot('date_assistence')->withTimestamps();
    }

}
