<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnglishController extends Controller
{
    public function english(){
        return view("admin.english");
    }
}
