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


//student view information

public function studentview($student_id){

        
    $student_description_view=DB::table('student_tbl')
                   ->select('*')
                   ->where('student_id',$student_id)
                   ->first();

                echo "</pre>";
                print_r($student_description_view);

                echo "</pre>";

          $manage_view_student=view('admin.view')
                       ->with('student_description_profile',$student_description_view); 
              
           return view('layout')
                    ->with('view',$manage_view_student);

}




//student edit part


public function studentedit($student_id){

        
    $student_description_view=DB::table('student_tbl')
                   ->select('*')
                   ->where('student_id',$student_id)
                   ->first();

                //echo "</pre>";
               // print_r($student_description_view);

               // echo "</pre>";

         $manage_view_student=view('admin.student_edit')
                   ->with('student_description_profile',$student_description_view); 
              
           return view('layout')
                  ->with('student_edit',$manage_view_student);

}


//student update information

public function studentupdate(Request $request,$student_id){

          $data=array();
          $data['student_name']=$request->student_name ;
          $data['student_studentid']=$request->student_studentid;
          $data['student_fathersname']=$request->student_fathersname ;
          $data['student_mothersname']=$request->student_mothersname ;
          $data['student_email']=$request->student_email ;
          $data['student_phone']=$request->student_phone ;
          $data['student_address']=$request->student_address;
          $data['student_password']=$request->student_password;
          $data['student_department']=$request->student_department;
          $data['student_admissionyear']=$request->student_admissionyear;



      DB::table('student_tbl')
          ->where('student_id',$student_id)
          ->update($data);


 Session::put('exception','Student updates sucessfully');

        return Redirect::to('/allstudent'); 

}

}
