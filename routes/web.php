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
    return view('home.home');
})->name('home');

Route::get('autocomplete','StudentController@complete')->name('autocomplete');
Route::group(['middleware'=>'auth'], function(){
    Route::resource('absences','AbsenceController');
    Route::get('/conversation/{id}','MessageController@getProfMessage');
    Route::post('/conversation/send','MessageController@sendMessage');

//  Tutel Student Portal
    Route::group(['prefix' => 'student','middleware'=>'role:tutel'], function(){
        Route::get('/','TutelPortalController@StudentProfile')->name('student.index');
        Route::get('/convocations','TutelPortalController@StudentConvocations')->name('student.convocation');
        Route::get('/convocation/{id}','TutelPortalController@StudentConvocationDetails')->name('student.convocation.details');
        Route::get('/convocation/confirm/{id}','ConvocationController@confirm')->name('student.convocation.confirm');
        Route::get('/teachers','TutelPortalController@Teachers')->name('student.teachers');


//        Conversation student parent
        Route::get('/modules', function () {
            return view('layouts.student.modules.index');
        })->name('student.modules');
        Route::get('/planning', function () {
            return view('layouts.student.planning.index');
        })->name('student.planning');

        Route::get('/notes/{id}','NoteController@StudentShowNotes')->name('student.notes');
    });
//    End Tutel Student Portal


//    Admin Ferouja Portal
    Route::group(['prefix' => 'admin','middleware'=>'role:admin'], function(){
        Route::get('/', function () {
            return view('layouts.admin.landing.index');
        })->name('home');
        Route::resource('schools','SchoolController');
        Route::resource('levels','LevelController');
    });
//    End Admin Ferouja Portal


//    School Admin Portal
    Route::group(['prefix' => 'school','middleware'=>'role:school-admin'], function(){
        Route::resource('/classes','ClassController');
        Route::resource('/students','StudentController');
        Route::resource('/profs','ProfController');
        Route::resource('/modules','ModuleController');
        Route::resource('/plannings','PlanningController');

//        Custom routes
        Route::get('/convocations','ConvocationController@index')->name('school-admin.convocations.index');
        Route::get('/convocations/{id}','ConvocationController@show')->name('school.convocations.show');
        Route::get('/convocations/approuve/{id}','ConvocationController@approuve')->name('convocations.approuve');
        Route::get('/general', function () {
            return view('layouts.school.landing.index');
        })->name('school-admin.landing');
//        End custom routes
    });
//    End School Admin Portal




//    Prof Portal
    Route::group(['prefix' => 'enseignent','middleware'=>'role:prof'], function(){
        Route::resource('convocations','ConvocationController');
        Route::resource('notes','NoteController');
        Route::resource('chats','ChatController');
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
        Route::get('/classe/{id}/students/absence','AbsenceController@ClasseAbsence')->name('students.absence');
        Route::get('/classe/{id}/students/note','NoteController@StudentsNote')->name('students.notes');


    });
//    End of Prof Portal
});




Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
