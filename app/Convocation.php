<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Convocation extends Model
{
    protected $guarded=[];
    protected $dates=['reception_date'];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function prof(){
        return $this->belongsTo(Prof::class);
    }

    public static function new(Request $request){
        $convocation = Convocation::create([
            'student_id' => $request->student_id,
            'prof_id' => $request->prof_id,
            'motif' => $request->motif,
            'reason' => $request->reason,
            'reception_date' => $request->reception_date,
        ]);
        return $convocation;
    }

    function status(){
        switch ($this->status){
            case 'draft' : echo ' <span class="kt-badge kt-badge--warning kt-badge--inline">Brouillon</span>';
            break;
            case 'approuved' : echo ' <span class="kt-badge kt-badge--success kt-badge--inline">Validé</span>';
            break;
            case 'tutel_confirmed' :echo ' <span class="kt-badge kt-badge--success kt-badge--inline">Présence confirmé</span>';
            break;
            case 'done': echo ' <span class="kt-badge kt-badge--primary kt-badge--inline">Fait</span>';
            break;
            case 'rejected' :echo '<span class="kt-badge kt-badge--danger kt-badge--inline">Rejeté</span>';
            break;
            default:
                break;
        }
    }
    function action(){
        switch ($this->status){
            case 'draft' : return ['approuve','success','Valider la convocation'];
                break;
            case 'approuved' : return ['confirm-presence','success','Confirmer ma presence '];
                break;
            case 'tutel_confirmed' :  return ['done','success','Marquer fait'];
                break;
            default:
                break;
        }
    }
}
