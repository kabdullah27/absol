<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TxAttendance extends Model
{
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

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