<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MtLocation extends Model
{
    use HasFactory;

    public function attendance(){
        return  $this->hasMany('App\MtAttendance');
    }
}
