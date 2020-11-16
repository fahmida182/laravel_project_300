<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistationfeeController extends Controller
{
    public function registationfee(){
        return view("admin.registationfee");
    }
}
