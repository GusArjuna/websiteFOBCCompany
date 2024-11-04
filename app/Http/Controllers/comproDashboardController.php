<?php

namespace App\Http\Controllers;

use App\Models\country;
use App\Models\expedition;
use App\Models\product;
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
            "products" => product::all(),
        ]);
    }

    public function country(){
        return view("compro.country",[
            "title" => "FOBC ASIA || Countries Reached",
            "pages" => "country",
            "countries" => country::all(),
        ]);
    }
    
    public function shipping(){
        return view("compro.shipping",[
            "title" => "FOBC ASIA || Shippings",
            "pages" => "shipping",
            "expeditions" => expedition::all(),
        ]);
    }
    public function makeadeal(){
        return view("compro.makeadeal",[
            "title" => "FOBC ASIA || Make a Deal",
            "pages" => "Make a Deal",
        ]);
    }
}
