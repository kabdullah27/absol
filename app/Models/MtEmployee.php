<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MtEmployee extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    public function user(){
        return  $this->belongsTo('App\Models\User');
    }

    public function bank_account(){
        return  $this->belongsTo('App\Models\MtBankAccount');
    }

    public function religion(){
        return  $this->belongsTo('App\Models\MtReligion');
    }

    public function department(){
        return  $this->belongsTo('App\Models\MtDepartment');
    }

    public function status(){
        return  $this->belongsTo('App\Models\MtStatus');
    }
}
