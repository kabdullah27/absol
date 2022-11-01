<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtBankAccount extends Model
{
    use TraitUuid;

    public function display()
    {
        //menampilkan data dari kolom nama
        return $this->bank_account_name;
    }

    public function employee(){
        return  $this->hasMany('App\Models\MtEmployee');
    }

    protected $fillable = ['bank_account_name', 'is_active', 'created_by', 'updated_by', 'deleted_at'];
}
