<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtPosition extends Model
{
    use TraitUuid;
    
    protected $fillable = ['position_parent_id', 'position_level', 'position_name', 'is_active', 'created_by', 'updated_by', 'deleted_at'];
}
