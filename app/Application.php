<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function registrar(){
        return $this->belongsTo(Registrar::class);
    }

    public function Subject(){
        return $this->belongsTo(Subject::class);
    }
}
