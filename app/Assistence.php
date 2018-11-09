<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

//use App\Students;
use App\Inscritos;

class Assistence extends Pivot
{
    //
    protected $fillable = [
        'date_assistence', 'students_id','schedules_id'
    ];



    protected $table = 'assistence';
}
