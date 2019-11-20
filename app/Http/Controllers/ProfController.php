<?php

namespace App\Http\Controllers;

use App\Prof;
use Illuminate\Http\Request;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.school.enseignents.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.school.enseignents.Add');
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
            Prof::new($request);
            return redirect()->route('profs.index');
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
        $prof = Prof::find($id);
        return view('layouts.school.enseignents.Update')->withProf($prof);
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
        $prof = Prof::find($id);

        $prof->last_name = $request->last_name;
        $prof->first_name = $request->first_name;
        $prof->about = $request->about;
        $prof->birth_date = $request->birth_date;
        $prof->sexe = $request->sexe;
        $prof->grade = $request->grade;
        $prof->specialite = $request->specialite;
        $prof->address = $request->address;
        $prof->phone_number = $request->phone_number;
        $prof->email = $request->prof_email;

        $prof->save();
        return redirect()->route('profs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Prof::destroy($id);
        return redirect()->route('profs.index');
    }
}
