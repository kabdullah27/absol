<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MtSchedule extends Model
{
    use HasFactory;

    public function attendance(){
        return  $this->hasMany('App\MtAttendance');
    }

    public function shift(){
        return  $this->hasMany('App\MtShift');
    }

    public function holiday(){
        return  $this->belongsTo('App\MtHoliday');
    }

    public function user(){
        return  $this->belongsTo('App\User');
    }
}
