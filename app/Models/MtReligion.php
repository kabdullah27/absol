<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MtReligion extends Model
{
    use HasFactory;

    public function employee(){
        return  $this->hasMany('App\MtEmployee');
    }
}
