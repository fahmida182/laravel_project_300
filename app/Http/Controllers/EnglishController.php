<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EnglishController extends Controller
{
    public function english(){
        $englishstudent_info= DB::table('student_tbl')
           
           
        ->where(['student_department'=>6])
          ->get();


     $manage_student=view('admin.english')
              ->with('english_student_info',$englishstudent_info);  
       return view('layout')
                ->with('english',$manage_student);
        //return view("admin.english");
    }
}
