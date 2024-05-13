<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class baseDashboard extends Controller
{
    public function dashboard(){
        return view("base.dashboard",[
            "title" => "FOBC ASIA Admin || Dashboard",
            "pages" => "Dashboard Page",
        ]);
    }
}
