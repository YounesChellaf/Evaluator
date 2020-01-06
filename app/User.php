<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    use Notifiable;
    use  HasRoles;

    protected $attributes=['currentStudent'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password','phone_number','card_identity'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function student(){
        return $this->hasMany(Student::class);
    }
    public function school(){
        return $this->hasOne(School::class);
    }

    public function prof(){
        return $this->hasOne(Prof::class,'user_id');
    }

    public function SentMessage(){
        return $this->hasMany(Message::class, 'from');
    }
    public function ReceivedMessage(){
        return $this->hasMany(Message::class, 'to');
    }

    public function getActifStudent(){

    }

    public function setActifStudent($id){
    }
}
