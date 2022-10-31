<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtShift extends Model
{
    use TraitUuid;

    public function schedule(){
        return  $this->hasMany('App\Models\MtSchedule');
    }

    protected $fillable = ['shift_name', 'shift_start', 'shift_end', 'shift_late', 'is_active', 'created_by', 'updated_by', 'deleted_at'];
}
