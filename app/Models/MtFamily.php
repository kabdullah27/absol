<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtFamily extends Model
{
    use TraitUuid;

    protected $table = 'mt_families';

    public function relationship(){
        return  $this->belongsTo('App\Models\MtRelationship', 'family_relationship_id');
    }

    protected $fillable = ['family_name', 'family_relationship_id', 'family_date_of_birth', 'family_gender', 'family_job', 'family_address','is_active', 'created_by', 'updated_by', 'deleted_at'];
}
