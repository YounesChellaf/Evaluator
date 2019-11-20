<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded=[];

    public function student(){
        return $this->hasOne(Student::class);
    }

    public function prof(){
        $this->hasOne(Prof::class);
    }
}
