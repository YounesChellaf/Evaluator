<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded=[];

    public function transmitter(){
        return $this->belongsTo(User::class,'from');
    }
    public function receiver(){
        return $this->belongsTo(User::class, 'to');
    }
}
