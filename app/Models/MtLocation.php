<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtLocation extends Model
{
    use TraitUuid;

    public function attendance(){
        return  $this->hasMany('App\Models\MtAttendance');
    }

    protected $fillable = ['location_name', 'location_long', 'location_lat', 'is_active', 'created_by', 'updated_by'];
}
