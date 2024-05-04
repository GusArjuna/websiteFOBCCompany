<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view("base.login");
    }

    public function dashboard(){
        return view("base.dashboard",[
            "title" => "FOBC ASIA Admin || Dashboard",
            "pages" => "Dashboard Page",
        ]);
    }
}
