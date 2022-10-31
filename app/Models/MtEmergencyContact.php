<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtEmergencyContact extends Model
{
    use TraitUuid;

    public function relationship(){
        return  $this->belongsTo('App\Models\MtRelationship');
    }
}
