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
Route::get('/', function () {
    return view('home.index');
})->name('home');
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
    Route::get('/notes', function () {
        return view('layouts.student.notes.index');
    })->name('student.notes');

});

Route::group(['prefix' => 'enseignent'], function(){

    Route::get('/', function () {
        return view('layouts.prof.landing.index');
    })->name('prof.landing');
    Route::get('/planning', function () {
        return view('layouts.prof.planning.index');
    })->name('prof.planning');
    Route::get('/classes', function () {
        return view('layouts.prof.classes.index');
    })->name('prof.classes');
    Route::get('/students', function () {
        return view('layouts.prof.students.index');
    })->name('prof.students');
    Route::get('/convocation', function () {
        return view('layouts.prof.convocations.index');
    })->name('prof.convocation');
});

Route::get('/school/classes/add', function () {
        return view('layouts.school.classes.Add');
    })->name('school.classes.add');
Route::get('/school/students/add', function () {
    return view('layouts.school.students.Add');
})->name('school.students.add');

Route::group(['prefix' => 'school'], function(){

    Route::resource('/classes','ClassController');
    Route::resource('/students','StudentController');
//    Route::get('/classes/add','ClassController@showAdd')->name('school.classes.add');
//    Route::get('/classes/add', function () {
//        return view('layouts.school.classes.Add');
//    })->name('school.classes.add');
//    Route::get('/students', function () {
//        return view('layouts.school.students.index');
//    })->name('school.students');
    Route::get('/students/add', function () {
        return view('layouts.school.students.Add');
    })->name('school.students.add');
    Route::get('/enseignents', function () {
        return view('layouts.school.enseignents.index');
    })->name('school.teachers');
});
