<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    protected $table = 'schedules';

    public function students()
    {
        return $this->belongsToMany(Students::class, 'assistence','schedules_id','students_id')->withPivot('date_assistence')->withTimestamps();
    }
}
