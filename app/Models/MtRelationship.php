<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtRelationship extends Model
{
    use TraitUuid;

    public function emergency_contact(){
        return  $this->hasMany('App\Models\MtEmergencyContact');
    }

    public function family(){
        return  $this->hasMany('App\Models\MtFamily');
    }
}
