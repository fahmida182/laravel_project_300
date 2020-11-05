<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AdminController extends Controller
{
    public function login_dashboard(Request $request) {




//return view('admin.dashboard'); 

   	$email=$request->admin_email;
   		$password=($request->admin_password);
   		$result=DB::table('admin_tbl')
   		->where('admin_email',$email)
   		->where('admin_password',$password)
   		->first();

       echo "</pre>";
   		 print_r($result);

   		if ($result) {

   		//	Session::put('message','You are sucessfully login to your dashboard');

   			return Redirect::to('/admin_dashboard'); 
   		}
   		else {
   		//	Session::put('message','Your Email or Password is not Correct, Agian Try !!');
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

}