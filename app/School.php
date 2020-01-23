<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class School extends Model
{
    protected $guarded=[];
    protected $appends=['saturation_class'];
    protected $dates=['subscription_end'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function classe(){
        return $this->hasMany(Classe::class);
    }

    public static function new(Request $request){
        $user = User::firstOrCreate([
          'first_name' => $request->first_name,
          'last_name' => $request->last_name,
          'phone_number' => $request->phone_number,
          'card_identity' => $request->card_identity,
          'email' => $request->email,
          'password' => Hash::make($request->password),
        ]);
        $user->assignRole(Role::where('name','school-admin')->get());
        return $school = School::create([
           'name' => $request->name,
           'address' => $request->address,
           'contract_number' =>$request->contract_number,
           'subscription_end' =>$request->subscription_end,
           'user_id' => $user->id
        ]);

    }

    public  function saturation_class(){
         $physic_counting = 0;
         $student_counting = 0;
        foreach ( $this->classe as $class){
            $physic_counting =+ $class->places_number;
            $student_counting =+ $class->student->count();
         }
         return round(($student_counting*100)/$physic_counting,2);
    }
}
