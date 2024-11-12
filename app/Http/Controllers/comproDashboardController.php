<?php

namespace App\Http\Controllers;

use App\Models\country;
use App\Models\expedition;
use App\Models\order;
use App\Models\product;
use App\Models\RegisOrder;
use Carbon\Carbon;
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
        $products = product::all();
        $countries = country::all();
        return view("compro.makeadeal",[
            "title" => "FOBC ASIA || Make a Deal",
            "pages" => "Make a Deal",
            "products" => $products,
            "countries" => $countries,
        ]);
    }

    public function makeadealSubmit(Request $request){
        $regis = RegisOrder::latest()->first()->id??false;
        if($regis){
            $regis = $regis+1;
        }else{
            $regis = 1;
        }
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'product.*' => 'required',
            'quantity.*' => 'required',
            'destination' => 'required',
            'handphone' => 'required',
        ]);
        RegisOrder::create([
            'regisOrder' => $regis,
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'date' => Carbon::now()->toDateString(),
            'destination' => $validatedData['destination'],
            'handphone' => $validatedData['handphone'],
        ]);   
        for ($i=0; $i < count($request->quantity); $i++) {     
            order::create([
                'regisOrder' => $regis,
                'product' => $validatedData['product'][$i],
                'quantity' => $validatedData['quantity'][$i],
            ]);
        }
        return redirect('/makeadeal')->with('success','Submited');
        
    }
}
