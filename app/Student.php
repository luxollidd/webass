<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function applications(){
        return $this->hasMany(Application::class);
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class,'student_subject');
    }
}
