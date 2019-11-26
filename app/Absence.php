<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $guarded=[];

    public function student(){
        return $this->belongsTo(Student::class);
    }
    public function prof(){
        return $this->belongsTo(Prof::class);
    }

    public function classe(){
        return $this->belongsTo(Classe::class);
    }

    public static function new(){

    }
}
