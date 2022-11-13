<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class TxRequestTimeOff extends Model
{
    use TraitUuid;

    public function time_off_type(){
        return  $this->belongsTo('App\Models\MtTimeOffType');
    }

    public function user(){
        return  $this->belongsTo('App\Models\User');
    }
}
