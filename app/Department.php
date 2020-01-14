<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function subjects(){
        return $this->hasMany(Subject::class);
    }

    public function hod(){
        return $this->belongsTo(Hod::class);
    }
}
