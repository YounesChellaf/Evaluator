<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'student'], function(){
    Route::get('/', function () {
        return view('layouts.student.landing.index');
    })->name('student.index');
    Route::get('/modules', function () {
        return view('layouts.student.modules.index');
    })->name('student.modules');

    Route::get('/teachers', function () {
        return view('layouts.student.teachers.index');
    })->name('student.teachers');

    Route::get('/planning', function () {
        return view('layouts.student.planning.index');
    })->name('student.planning');

    Route::get('/convocations', function () {
        return view('layouts.student.convocation.index');
    })->name('student.convocation');
});
