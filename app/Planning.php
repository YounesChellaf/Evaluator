<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Planning extends Model
{
    //
    protected $guarded=[];

    public function classe(){
        return $this->belongsTo(Classe::class);
    }

    public function module(){
        return $this->belongsTo(Module::class);
    }
    public static function new(Request $request){
        for ($i=0;$i<$request->nb_seance;$i++){
            Planning::create([
                'classe_id' => $request->classe_id,
                'trimestre' => $request->trimestre,
                'module_id' => $request->module_id[$i],
                'day' => $request->day[$i],
                'start_sceance' => $request->start_sceance[$i],
                'end_sceance' => $request->end_sceance[$i],
            ]);
        }
    }
}
