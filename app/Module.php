<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Module extends Model
{
    protected $guarded=[];

    public static function new(Request $request){
        return $module = Module::create([
            'designation' => $request->designation,
            'niveau_1' => $request->niveau_1 ? true : false,
            'niveau_2' => $request->niveau_2 ? true : false,
            'niveau_3' => $request->niveau_3 ? true : false,
            'niveau_4' => $request->niveau_4 ? true : false,
            'niveau_5' => $request->niveau_5 ? true : false,
        ]);
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
