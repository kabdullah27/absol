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

    protected $fillable = ['name', 'relationship_id', 'phone_number', 'is_active', 'created_by', 'updated_by', 'deleted_at'];
}
