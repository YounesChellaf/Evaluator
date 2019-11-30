<?php

namespace App\Http\Controllers;

use App\Absence;
use App\Classe;
use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(in_array(1,$request->presence));
        foreach (Classe::find($request->classe_id)->student as $student){
            if (! in_array($student->id,$request->presence)){
                Absence::create([
                    'student_id' => $student->id,
                    'classe_id' => $request->classe_id,
                    'prof_id' => $request->prof
                ]);
            }
        }
        return redirect()->route('prof.classes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absence = Absence::find($id);
        $absence->is_checked = true;
        $absence->save();
        return view('layouts.student.convocation.absence')->withAbsence($absence);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function ClasseAbsence($id){

        $students = Classe::find($id)->student;
        return view('layouts.prof.students.absence')->withStudents($students);
    }
}
