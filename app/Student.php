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

    public function convocation(){
        return $this->hasOne(Convocation::class);
    }
    public function image(){
        return $this->hasOne(Image::class);
    }


    public static function new(Request $request){
        if ($request->post()){
            $user = User::create([
                'first_name' => $request->tutel_first_name,
                'last_name' => $request->tutel_last_name,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'password' => Hash::make($request->password),

            ]);
            $photo = $request->file('image');
            $destpath = 'assets/img/student';
            $file_name = $photo->getClientOriginalName();
            $photo->move($destpath,$file_name);
            $image = Image::create([
                'path' => $file_name
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
               'image_id' => $image->id,
            ]);

            return $student;
        }
    }
}
