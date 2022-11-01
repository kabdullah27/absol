<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtPosition extends Model
{
    use TraitUuid;

    public function display()
    {
        //menampilkan data dari kolom nama
        return $this->position_name;
    }

    public function employee(){
        return  $this->hasMany('App\Models\MtEmployee');
    }
    
    protected $fillable = ['position_parent_id', 'position_level', 'position_name', 'is_active', 'created_by', 'updated_by', 'deleted_at'];
}
