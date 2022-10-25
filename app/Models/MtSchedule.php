<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MtSchedule extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    public function attendance(){
        return  $this->hasMany('App\Models\MtAttendance');
    }

    public function shift(){
        return  $this->belongsTo('App\Models\MtShift');
    }

    public function holiday(){
        return  $this->belongsTo('App\Models\MtHoliday');
    }

    public function user(){
        return  $this->belongsTo('App\Models\User');
    }
}
