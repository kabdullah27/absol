<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MtEmployee extends Model
{
    use HasFactory;

    public function user(){
        return  $this->belongsTo('App\User');
    }

    public function bank_account(){
        return  $this->belongsTo('App\MtBankAccount');
    }

    public function religion(){
        return  $this->belongsTo('App\MtReligion');
    }

    public function department(){
        return  $this->belongsTo('App\MtDepartment');
    }

    public function status(){
        return  $this->belongsTo('App\MtStatus');
    }
}
