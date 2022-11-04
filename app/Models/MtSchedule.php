<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtSchedule extends Model
{
    use TraitUuid;

    public function attendance(){
        return  $this->hasMany('App\Models\MtAttendance');
    }

    public function shift(){
        return  $this->belongsTo('App\Models\MtShift');
    }

    public function holiday(){
        return  $this->belongsTo('App\Models\MtHoliday');
    }

    public function upload_schedule(){
        return  $this->belongsTo('App\Models\MtUploadSchedule');
    }

    public function user(){
        return  $this->belongsTo('App\Models\User');
    }
}
