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
    return view('welcome');
});
Route::resource('/admission', 'admissionController');
Route::request('/admission/activate/', 'admissionController@activate');

Route::group([ 'middleware'=>'auth'], function(){
    Route::resource('/student', 'StudentController');
    Route::resource('/subject', 'SubjectController');
    Route::resource('/teacher', 'teacherController');
    Route::resource('/mark', 'markController');
    Route::resource('/exam', 'examController');
    Route::resource('/attendance', 'attendanceController');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
