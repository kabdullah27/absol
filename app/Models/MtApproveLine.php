<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtApproveLine extends Model
{
    use TraitUuid;

    public function user(){
        return  $this->belongsTo('App\Models\User', 'approve_line_user_id');
    }

    protected $fillable = ['approve_line_user_id', 'approve_line_desc', 'approve_line_type', 'is_active', 'created_by', 'updated_by'];
}
