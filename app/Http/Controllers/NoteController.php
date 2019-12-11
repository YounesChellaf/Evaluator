<?php

namespace App\Http\Controllers;

use App\Classe;
use App\Note;
use App\Student;
use Illuminate\Http\Request;

class NoteController extends Controller
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

    public function StudentsNote($id){
        $students = Classe::find($id)->student;
        return view('layouts.prof.students.index')->withStudents($students);
    }

    public function StudentShowNotes($id){
        $student = Student::find($id);
        return view('layouts.student.notes.index')->withStudent($student);
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
        if ($request->post()){
            for ($i=0;$i<count($request->student_id);$i++){
                    if ( $note= Note::where([
                        ['student_id',$request->student_id[$i]],
                        ['module_id',$request->module_id]
                    ])->first())
                        $this->update($request,$note->id,$i);
                    else
                        $note = Note::create([
                            'student_id' => $request->student_id[$i],
                            'evaluation' => $request->evaluation[$i],
                            'task_one' => $request->task_one[$i],
                            'task_two' => $request->task_two[$i],
                            'module_id' => $request->module_id,
                            'exam' => $request->exam[$i],
                        ]);
            }
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id,$i)
    {
        $note = Note::find($id);
        $note->evaluation = $request->evaluation[$i];
        $note->task_one = $request->task_one[$i];
        $note->task_two = $request->task_two[$i];
        $note->exam = $request->exam[$i];
        $note->save();
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
}
