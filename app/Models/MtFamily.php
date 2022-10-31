<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtFamily extends Model
{
    use TraitUuid;

    protected $table = 'mt_families';

    public function relationship(){
        return  $this->belongsTo('App\Models\MtRelationship');
    }
}
