<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Classe extends Model
{
    protected $guarded=[];

    public function student(){
        return $this->hasOne(Student::class);
    }

    public function profs(){
        return $this->belongsToMany(Prof::class);
    }

    public function school(){
        return $this->hasOne(School::class);
    }
    public static function new(Request $request){
        if ($request->post()){
            $classe = Classe::create([
                'scolar_designation' => $request->scolar_designation,
                'physic_designation' => $request->physic_designation,
                'student_number' => $request->student_number,
                'places_number' => $request->places_number,
                'school_id' => auth()->user()->school->id,
                'level' => $request->level
            ]);
            return $classe;
        }
    }
}
