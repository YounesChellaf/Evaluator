<?php

namespace App\Http\Controllers;

use App\Http\Requests\School\AddSchoolRequest;
use App\Http\Requests\School\UpdateSchoolRequest;
use App\School;
use App\User;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.admin.schools.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.schools.Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddSchoolRequest $request)
    {
        if ($request->post()){
            School::new($request);
            return view('layouts.admin.schools.index');
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
        $school = School::find($id);
        return view('layouts.admin.schools.Update')->withSchool($school);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchoolRequest $request, $id)
    {
        $school = School::find($id);

        $school->name = $request->name;
        $school->address = $request->address;
        $school->contract_number = $request->contract_number;
        $school->user->first_name = $request->first_name;
        $school->user->last_name = $request->last_name;
        $school->user->phone_number = $request->phone_number;
        $school->user->card_identity = $request->card_identity;
        $school->user->save();
        $school->save();
        return view('layouts.admin.schools.index');

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
