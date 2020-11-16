<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LLBController extends Controller
{
    public function llb(){
        return view("admin.llb");
    }
}
