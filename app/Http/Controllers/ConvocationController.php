<?php

namespace App\Http\Controllers;

use App\Convocation;
use App\Http\Requests\ConvocationRequest;
use Illuminate\Http\Request;

class ConvocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\request()->ajax()){
            return response()->json(Convocation::all());
        }
        $role = auth()->user()->hasRole(\Spatie\Permission\Models\Role::where('name','prof')->first());
        return view('layouts.prof.convocations.index')->withRole($role);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.prof.convocations.Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConvocationRequest $request)
    {
        if ($request->post()){
            Convocation::new($request);
            return redirect()->route('prof.landing');
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
        $convocation = Convocation::find($id);
        $role = auth()->user()->hasRole(\Spatie\Permission\Models\Role::where('name','prof')->first());
        return view('layouts.prof.convocations.details')->withRole($role)->withConvocation($convocation);
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


    public function approuve($id){
        $convocation = Convocation::find($id);
        $convocation->status = 'approuved';
        $convocation->save();
        return redirect()->back();
    }
    public function reject($id){
        $convocation = Convocation::find($id);
        $convocation->status = 'rejected';
        $convocation->save();
        return redirect()->back();
    }
    public function done($id){
        $convocation = Convocation::find($id);
        $convocation->status = 'done';
        $convocation->save();
        return redirect()->back();
    }
    public function confirm($id){
        $convocation = Convocation::find($id);
        $convocation->status = 'tutel_confirmed';
        $convocation->save();
        return redirect()->route('student.convocation');
    }

}
