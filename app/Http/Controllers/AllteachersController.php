<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AllteachersController extends Controller
{
    public function allteacher(){

        $allteacher_info= DB::table('teachers_tbl')
           ->get();
     $manage_teacher=view('admin.allteacher')
           ->with('all_teacher_info',$allteacher_info);  
   return view('layout')
         ->with('allteacher',$manage_teacher);


       // return view("admin.allteacher");
    }






    public function addteacher(){
        return view("admin.add_teacher");
    }


    //teacher add part


    public function saveteacher(Request $request){


        $data=array();
        $data['teachers_name']=$request->teachers_name ;
        $data['teachers_phone']=$request->teachers_phone ;
        $data['teachers_address']=$request->teachers_address;
        
        $data['teachers_department']=$request->teachers_department;
       

        $image=$request->file('teachers_image');

if ($image) {
@ $image_name= str_random(20);
@ $ext=strtolower($image->getClientOriginalExtension());
@ $image_full_name=$image_name.'.'.$ext;
@ $uplaod_path='image/';
@$image_url=$uplaod_path.$image_full_name;
@ $sucess=$image->move($uplaod_path,$image_full_name);

if ($sucess) {

$data['teachers_image']=$image_url;


DB::table('teachers_tbl')->insert($data);
Session::put('exception','Teachers addeed sucessfully');
return Redirect::to('/addteacher'); 

# code...
}


# code...
}


@ $data['teachers_image']=$image_url;


DB::table('teachers_tbl')->insert($data);
Session::put('exception','Teachers addeed sucessfully');

return Redirect::to('/addteacher'); 

DB::table('teachers_tbl')->insert($data);
Session::put('exception','Teachers addeed sucessfully');

return Redirect::to('/addteacher'); 


}




//delete method

public function teachersdelete($teachers_id){

        
    DB::table('teachers_tbl')
       ->where('teachers_id',$teachers_id)
       ->delete();

       return Redirect::to('/allteachers');

}




}
