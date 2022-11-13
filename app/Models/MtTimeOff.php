<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtTimeOff extends Model
{
    use TraitUuid;

    public function user(){
        return  $this->belongsTo('App\Models\User');
    }
}
