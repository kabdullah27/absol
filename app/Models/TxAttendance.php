<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TxAttendance extends Model
{
    public function user(){
        return  $this->belongsTo('App\User');
    }

    public function schedule(){
        return  $this->belongsTo('App\MtSchedule');
    }

    public function location(){
        return  $this->belongsTo('App\MtLocation');
    }
}