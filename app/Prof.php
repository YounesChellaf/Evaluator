<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class Prof extends Model
{
    protected $guarded=[];

    public function classes(){
        return $this->belongsToMany(Classe::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function convocation(){
        return $this->hasMany(Convocation::class);
    }

    public function image(){
        return $this->belongsTo(Image::class);
    }

    public function absence(){
        return $this->hasMany(Absence::class);
    }


    public static function new(Request $request){
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);
        $photo = $request->file('image');
        $destpath = 'assets/img/prof';
        $file_name = $photo->getClientOriginalName();
        $photo->move($destpath,$file_name);
        $image = Image::create([
            'path' => $file_name
        ]);
        $prof = Prof::create([
           'last_name' => $request->last_name,
           'first_name' => $request->first_name,
           'about' => $request->about,
           'birth_date' => $request->birth_date,
           'sexe' => $request->sexe,
           'grade' => $request->grade,
           'specialite' => $request->specialite,
           'address' => $request->address,
           'email' => $request->prof_email,
           'phone_number' => $request->phone_number,
           'user_id' => $user->id,
           'image_id' => $image->id,
        ]);

        foreach ($request->classe as $classe){
            $prof->classes()->attach($classe);
        }


        $user->assignRole(Role::where('name','prof')->first());

        return $prof;
    }
}
