<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class TxAttendance extends Model
{
    use TraitUuid;

    public function user(){
        return  $this->belongsTo('App\Models\User');
    }

    public function schedule(){
        return  $this->belongsTo('App\Models\MtSchedule');
    }

    public function location_checkin(){
        return  $this->belongsTo('App\Models\MtLocation', 'location_id_check_in');
    }

    public function location_checkout(){
        return  $this->belongsTo('App\Models\MtLocation', 'location_id_check_out');
    }
}