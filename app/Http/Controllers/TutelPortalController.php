<?php

namespace App\Http\Controllers;

use App\Convocation;
use App\Student;
use Illuminate\Http\Request;

class TutelPortalController extends Controller
{

    public function StudentProfile(){
        return view('layouts.student.landing.index')->withStudent(auth()->user()->student);
    }
    public function StudentConvocations(){
        return view('layouts.student.convocation.index')->withStudent(auth()->user()->student);
    }
    public function StudentConvocationDetails($id){
        $convocation = Convocation::find($id);
        return view('layouts.student.convocation.details')->withConvocation($convocation);
    }

    public function Teachers(){
        return view('layouts.student.teachers.index')->withTeachers(auth()->user()->student->classe->profs);
    }
}
