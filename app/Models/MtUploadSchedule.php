<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtUploadSchedule extends Model
{
    use TraitUuid;

    public function schedule(){
        return  $this->hasMany('App\Models\MtSchedule');
    }
    
    public function user(){
        return  $this->belongsTo('App\Models\User');
    }
}
