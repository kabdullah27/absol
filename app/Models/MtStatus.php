<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtStatus extends Model
{
    use TraitUuid;

    protected $table = 'mt_status';

    public function display()
    {
        //menampilkan data dari kolom nama
        return $this->status_name;
    }

    public function employee(){
        return  $this->hasMany('App\Models\MtEmployee');
    }

    protected $fillable = ['status_name', 'is_active', 'created_by', 'updated_by', 'deleted_at'];
}
