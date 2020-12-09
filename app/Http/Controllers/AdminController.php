<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();


class AdminController extends Controller
{


  public function admin_dashboard(){
         return view("admin.dashboard");
	}
	//student login part
	
	public function student_dashboard(){
		return view("student.dashboard");
   }



	//view profile
	
	public function viewprofile(){
		return view("admin.viewprofile");
   }

	 //setting
	 public function setting(){
		return view("admin.setting");
   }

	//logout 
	public function logout()
	{
	Session::put('admin_name',null);
	Session::put('admin_id',null);

	return Redirect::to('/backend');
	}



// Admin login deshboard 

    public function login_dashboard(Request $request) {
		//return view('admin.dashboard');
		 $email=$request->admin_email;

   		$password=($request->admin_password);
   		$result=DB::table('admin_tbl')
   		->where('admin_email',$email)
   		->where('admin_password',$password)
   		->first();

      // echo "</pre>";
   		 //print_r($result);

   		if ($result) {


   		Session::put('admin_email',$result->admin_email);
      Session::put('admin_id',$result->admin_id);
      return Redirect::to('/admin_dashboard'); 
   		}
   		else {
   			Session::put('exception','Email or Password invalid');
   			/* This session is used for when email or password invalid and then show this test at */
   			return Redirect::to('/backend'); 
   		}



     /*
       $data = array();
       $data['contact_name']=$request->contact_name;
       $data['contact_number']=$request->contact_number;
 

       DB::table('tbl_contact')->insert($data); 

       Session::put('message','Contact Added Successfully!!');  
        return Redirect::to('/adminlogin'); 
     */


       }


	   // student login deshboard 

	   public function student_login_dashboard(Request $request) {
		
		
		//return view('student.dashboard');
		 $email=$request->student_email;

   		$password=($request->student_password);
   		$result=DB::table('student_tbl')
   		->where('student_email',$email)
   		->where('student_password',$password)
   		->first();

      // echo "</pre>";
   		 //print_r($result);

   		if ($result) {


   		Session::put('student_email',$result->student_email);
      Session::put('student_id',$result->student_id);
      return Redirect::to('/student_dashboard'); 
   		}
   		else {
   			Session::put('exception','Email or Password invalid');
   			/* This session is used for when email or password invalid and then show this test at */
   			return Redirect::to('/'); 
   		}



     /*
       $data = array();
       $data['contact_name']=$request->contact_name;
       $data['contact_number']=$request->contact_number;
 

       DB::table('tbl_contact')->insert($data); 

       Session::put('message','Contact Added Successfully!!');  
        return Redirect::to('/adminlogin'); 
     */


       }

}