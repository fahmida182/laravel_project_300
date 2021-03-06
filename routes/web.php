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
Route::get('/student_logout','AdminController@student_logout');

Route::get('/', function () {
    return view('student_login');
});
Route::get('/admin', function () {
    return view('admin.admin_login');
});


//adminlogin
Route::post('/adminlogin','AdminController@login_dashboard');
Route::post('/studentlogin','AdminController@student_login_dashboard');


Route::get('/student_dashboard','AdminController@student_dashboard');


Route::get('/student_profile','AddstudentsController@studentprofile');


Route::get('/admin_dashboard','AdminController@admin_dashboard');
Route::get('/viewprofile','AdminController@viewprofile');
Route::get('/setting','AdminController@setting');
Route::get('/student_setting','AdminController@studentsetting');





//addstudent
Route::get('/addstudent','AddstudentsController@addstudent');
Route::post('/save_student','AddstudentsController@savestudent');
Route::get('/student_delete/{student_id}','AllstudentsController@studentdelete');

Route::get('/student_view/{student_id}','AllstudentsController@studentview');
Route::get('/student_edit/{student_id}','AllstudentsController@studentedit');
Route::post('/update_student/{student_id}','AllstudentsController@studentupdate');
Route::post('/student_profile_update','AllstudentsController@studentprofileupdate');



Route::get('/forgot_password','Forgotpasword@forgotpassword');


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





//teacher


Route::get('/allteacher','AllteachersController@allteacher');
Route::get('/addteacher','AllteachersController@addteacher');
Route::post('/save_teacher','AllteachersController@saveteacher');
Route::get('/teachers_delete/{teachers_id}','AllteachersController@teachersdelete');



