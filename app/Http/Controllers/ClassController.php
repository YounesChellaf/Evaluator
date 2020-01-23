<?php

namespace App\Http\Controllers;

use App\Classe;
use App\Http\Requests\Classe\ClassRequest;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.school.classes.index');
    }

    public function showAdd(){
        return view('layouts.school.classes.Add');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.school.classes.Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClassRequest $request)
    {
        if ($request->post()){
            Classe::new($request);
            return redirect()->route('classes.index');
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
        $class = Classe::findOrFail($id);
        return view('layouts.school.classes.Update')->withClass($class);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClassRequest $request, $id)
    {
        if ($request->post()){
            $request->validated();
            $classe = Classe::findOrFail($id);
                $classe->scolar_designation = $request->scolar_designation;
                $classe->physic_designation = $request->physic_designation;
                $classe->student_number = $request->student_number;
                $classe->places_number = $request->places_number;
                $classe->school_id = auth()->user()->school->id;
                $classe->level_id = $request->level_id;

            $classe->save();
            return redirect()->route('classes.index');
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
