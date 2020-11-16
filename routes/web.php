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
//logout
Route::get('/logout','AdminController@logout');

Route::get('/', function () {
    return view('student_login');
});
Route::get('/backend', function () {
    return view('admin.admin_login');
});


//adminlogin
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');
Route::get('/viewprofile','AdminController@viewprofile');
Route::get('/setting','AdminController@setting');

//addstudent
Route::get('/addstudent','AddstudentsController@addstudent');
Route::get('/save_student','AddstudentsController@savestudent');

//allstudent
Route::get('/allstudent','AllstudentsController@allstudent');

Route::get('/registationfee','RegistationfeeController@registationfee');
Route::get('/tutionfee','TutionfeeController@tutionfee');
Route::get('/cse','CSEController@cse');
Route::get('/bba','BBAController@bba');
Route::get('/eee','EEEController@eee');
Route::get('/llb','LLBController@llb');
Route::get('/mba','MBAController@mba');
Route::get('/english','EnglishController@english');
Route::get('/allteacher','AllteachersController@allteacher');
