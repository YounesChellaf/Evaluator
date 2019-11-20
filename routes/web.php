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


Route::group(['middleware'=>'auth'], function(){

//  Tutel Student Portal
    Route::group(['prefix' => 'student','middleware'=>'role:tutel'], function(){
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
//    End Tutel Student Portal


//    Admin Ferouja Portal
    Route::group(['prefix' => 'admin','middleware'=>'role:admin'], function(){
        Route::get('/', function () {
            return view('layouts.admin.landing.index');
        })->name('home');
        Route::resource('schools','SchoolController');
    });
//    End Admin Ferouja Portal


//    School Admin Portal
    Route::group(['prefix' => 'school','middleware'=>'role:school-admin'], function(){
        Route::resource('/classes','ClassController');
        Route::resource('/students','StudentController');
        Route::resource('/profs','ProfController');
        Route::resource('/modules','ModuleController');

//        Custom routes
        Route::get('/convocations','ConvocationController@index')->name('school-admin.convocations.index');
        Route::get('/convocations/{id}','ConvocationController@show')->name('school.convocations.show');
        Route::get('/convocations/approuve/{id}','ConvocationController@approuve')->name('convocations.approuve');
//        End custom routes
    });
//    End School Admin Portal




//    Prof Portal
    Route::group(['prefix' => 'enseignent','middleware'=>'role:prof'], function(){
        Route::resource('convocations','ConvocationController');

//        Custom Routes
        Route::get('/convocations/done/{id}','ConvocationController@done')->name('convocations.done');
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
        Route::get('/students/absence', function () {
            return view('layouts.prof.students.absence');
        })->name('students.absence');
    });
//    End of Prof Portal
});




Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
