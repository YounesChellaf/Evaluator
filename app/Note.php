<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $guarded=[];
    public function module(){
        return $this->belongsTo(Module::class);
    }
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
