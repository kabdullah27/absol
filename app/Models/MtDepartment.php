<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtDepartment extends Model
{
    use TraitUuid;

    public function employee(){
        return  $this->hasMany('App\Models\MtEmployee');
    }

    protected $fillable = ['department_name', 'is_active', 'created_by', 'updated_by', 'deleted_at'];
}
