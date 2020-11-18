<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LLBController extends Controller
{
    public function llb(){
        $llbstudent_info= DB::table('student_tbl')
           
           
        ->where(['student_department'=>4])
          ->get();


     $manage_student=view('admin.llb')
              ->with('llb_student_info',$llbstudent_info);  
       return view('layout')
                ->with('llb',$manage_student);
        //return view("admin.llb");
    }
}
