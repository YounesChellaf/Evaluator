<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Student extends Model
{
    protected $guarded=[];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function classe(){
        return $this->belongsTo(Classe::class,'class_id');
    }

    public static function new(Request $request){
        if ($request->post()){
            $user = User::create([
                'name' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $student =Student::create([
               'matricule' => $request->matricule,
               'last_name' => $request->last_name,
               'first_name' => $request->first_name,
               'birth_date' => $request->birth_date,
               'about' => $request->about,

               'sexe' => $request->sexe,
               'address' => $request->address,
               'scolar_year' => $request->scolar_year,
               'tutel_last_name' => $request->tutel_last_name,
               'tutel_first_name' => $request->tutel_first_name,
               'tutel_email' => $request->tutel_email,
               'job' => $request->job,
               'phone_number' => $request->phone_number,
               'emergency_phone_number' => $request->emergency_phone_number,
               'user_id' => $user->id,
               'class_id' => $request->class_id,
            ]);
            return $student;
        }
    }
}
