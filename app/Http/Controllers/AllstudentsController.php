<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();


class AllstudentsController extends Controller
{
    public function allstudent(){

        $allstudent_info= DB::table('student_tbl')
           ->get();
     $manage_student=view('admin.allstudent')
           ->with('all_student_info',$allstudent_info);  
   return view('layout')
         ->with('allstudent',$manage_student);



       // return view("admin.allstudent");
    }
//delete method

    public function studentdelete($student_id){

        
      DB::table('student_tbl')
         ->where('student_id',$student_id)
         ->delete();

         return Redirect::to('/allstudent');


}


//student view informathion

public function studentview(){

    return view('admin.studentview');
}

}
