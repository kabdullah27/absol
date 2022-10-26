<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtHoliday extends Model
{
    use TraitUuid;

    public function schedule(){
        return  $this->hasMany('App\Models\MtSchedule');
    }
}
