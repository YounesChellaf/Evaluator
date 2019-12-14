<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Classe extends Model
{
    protected $guarded=[];

    public function student(){
        return $this->hasMany(Student::class,'class_id');
    }

    public function profs(){
        return $this->belongsToMany(Prof::class);
    }

    public function school(){
        return $this->belongsTo(School::class);
    }

    public function level(){
        return $this->belongsTo(Level::class);
    }

    public function absence(){
        return $this->hasMany(Absence::class);
    }

    public function planning(){
        return $this->hasMany(Planning::class);
    }


    public static function new(Request $request){
        if ($request->post()){
            $classe = Classe::create([
                'scolar_designation' => $request->scolar_designation,
                'physic_designation' => $request->physic_designation,
                'student_number' => $request->student_number,
                'places_number' => $request->places_number,
                'school_id' => auth()->user()->school->id,
                'level_id' => $request->level_id
            ]);
            return $classe;
        }
    }
}
