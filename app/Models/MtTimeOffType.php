<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtTimeOffType extends Model
{
    use TraitUuid;

    public function time_off(){
        return  $this->hasMany('App\Models\TxRequestTimeOff', 'time_off_type_id');
    }

    protected $fillable = ['time_off_desc', 'is_reduce_time_off', 'is_active', 'created_by', 'updated_by'];
}
