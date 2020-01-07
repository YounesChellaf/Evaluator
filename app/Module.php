<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Module extends Model
{
    protected $guarded=[];

    public function level(){
        return $this->belongsToMany(Level::class);
    }
    public function prof(){
        return $this->hasMany(Prof::class);
    }
    public function note(){
        return $this->hasMany(Note::class);
    }
    public function planning(){
        return $this->hasMany(Planning::class);
    }

    public static function new(Request $request){
        //dd($request->levels);
        $module = Module::create([
            'designation' => $request->designation,
            'description' => $request->description,
            'coefficient' => $request->coefficient,
            'hours_volume' => $request->volume,
        ]);
        foreach ($request->levels as $level){
            $module->level()->attach($level);
        }
        return $module;
    }

    public static function getLevel($level){
        if ($level)
        {
            echo '<label class="btn btn-success">O</label>';
        }
        else {
            echo '<label class="btn btn-danger">X</label>';
        }
    }

    public static function isChecked($closure){
        if ($closure){
            return 'checked';
        }
    }
}
