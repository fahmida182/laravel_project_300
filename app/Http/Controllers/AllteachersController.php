<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllteachersController extends Controller
{
    public function allteacher(){
        return view("admin.allteacher");
    }
}
