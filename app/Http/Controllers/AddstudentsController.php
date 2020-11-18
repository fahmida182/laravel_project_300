<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();


class AddstudentsController extends Controller
{
    
  public function addstudent(){
    return view("admin.addstudent");
}


public function savestudent(Request $request){


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

                  $image=$request->file('student_image');

      if ($image) {
       @ $image_name= str_random(20);
       @ $ext=strtolower($image->getClientOriginalExtension());
       @ $image_full_name=$image_name.'.'.$ext;
       @ $uplaod_path='image/';
       @$image_url=$uplaod_path.$image_full_name;
       @ $sucess=$image->move($uplaod_path,$image_full_name);
        
        if ($sucess) {

          $data['student_image']=$image_url;


         DB::table('student_tbl')->insert($data);
         Session::put('exception','Student addeed sucessfully');
         return Redirect::to('/addstudent'); 

          # code...
        }

       
        # code...
      }


      @ $data['student_image']=$image_url;


         DB::table('student_tbl')->insert($data);
         Session::put('exception','Student addeed sucessfully');

         return Redirect::to('/addstudent'); 

         DB::table('student_tbl')->insert($data);
         Session::put('exception','Student addeed sucessfully');

         return Redirect::to('/addstudent'); 


}
}
