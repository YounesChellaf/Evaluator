<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.school.students.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.school.students.Add');
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
            Student::new($request);
            return redirect()->route('students.index');
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
        $student = Student::find($id);
        return view('layouts.school.students.student-details')->withStudent($student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('layouts.school.students.Update')->withStudent($student);
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
        if ( $request->post()){
            $student = Student::find($id);

//            Student update
            $student->last_name = $request->last_name;
            $student->first_name = $request->first_name;
            $student->matricule = $request->matricule;
            $student->birth_date = $request->birth_date;
            $student->sexe = $request->sexe;
            $student->address = $request->address;
            $student->scolar_year = $request->scolar_year;
            $student->tutel_last_name = $request->tutel_last_name;
            $student->tutel_first_name = $request->tutel_first_name;
            $student->tutel_email = $request->tutel_email;
            $student->job = $request->job;
            $student->phone_number = $request->phone_number;
            $student->emergency_phone_number = $request->emergency_phone_number;

            $student->save();
            return redirect()->route('students.index');

        }
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
