<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Schedules;

class Students extends Model
{
    //
    protected $fillable = [
        'name', 'lastname'
    ];

    protected $table = 'students';


    //public function schedules()
    //{
      //  return $this->belongsToMany(Schedules::class, 'assistence','students_id','schedules_id')->withPivot('date_assistence')->withTimestamps();
    //}
}
