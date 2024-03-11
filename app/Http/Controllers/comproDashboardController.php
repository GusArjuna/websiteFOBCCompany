<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class comproDashboardController extends Controller
{
    public function index(){
        return view("compro.dashboard",[
            "title" => "FOBC ASIA || Home",
            "pages" => "home",
        ]);
    }

    public function product(){
        return view("compro.product",[
            "title" => "FOBC ASIA || Products",
            "pages" => "products",
        ]);
    }

    public function country(){
        return view("compro.country",[
            "title" => "FOBC ASIA || Countries Reached",
            "pages" => "country",
        ]);
    }
    
    public function shipping(){
        return view("compro.shipping",[
            "title" => "FOBC ASIA || Shippings",
            "pages" => "shipping",
        ]);
    }
}
