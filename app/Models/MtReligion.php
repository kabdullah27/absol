<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtReligion extends Model
{
    use TraitUuid;

    public function display()
    {
        //menampilkan data dari kolom nama
        return $this->religion_name;
    }

    public function employee(){
        return  $this->hasMany('App\Models\MtEmployee');
    }
}
