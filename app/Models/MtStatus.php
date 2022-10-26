<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtStatus extends Model
{
    use TraitUuid;

    public function employee(){
        return  $this->hasMany('App\Models\MtEmployee');
    }
}
