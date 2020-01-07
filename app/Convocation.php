<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Convocation extends Model
{
    protected $guarded=[];
    protected $dates=['reception_date'];

    public function student(){
        return $this->belongsToMany(Student::class, 'convocation_student');
    }

    public function classe(){
        return $this->belongsToMany(Classe::class, 'classe_convocation');
    }

    public function prof(){
        return $this->belongsTo(Prof::class);
    }

    public static function new(Request $request){
        if ($request->type == 'classe'){
            foreach ( $request->class_id as $class_id ){
                $convocation = Convocation::create([
                    'type' => $request->type,
                    'prof_id' => $request->prof_id,
                    'motif' => $request->motif,
                    'reason' => $request->reason,
                    'reception_date' => $request->reception_date,
                ]);
                $convocation->classe()->attach(Classe::find($class_id));
            }
        }
        elseif ($request->type == 'student'){
            foreach ( $request->student_id as $student_id ){
                $convocation = Convocation::create([
                    'type' => $request->type,
                    'prof_id' => $request->prof_id,
                    'motif' => $request->motif,
                    'reason' => $request->reason,
                    'reception_date' => $request->reception_date,
                ]);
                $convocation->student()->attach(Student::find($student_id));
            }
        }
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
