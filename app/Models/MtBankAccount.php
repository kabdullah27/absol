<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtBankAccount extends Model
{
    use TraitUuid;

    public function employee(){
        return  $this->hasMany('App\Models\MtEmployee');
    }
}
