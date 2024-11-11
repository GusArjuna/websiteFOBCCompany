<?php

namespace App\Http\Controllers;

use App\Models\eoq;
use App\Models\product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class baseDashboard extends Controller
{
    public function dashboard(){
        $products = product::paginate(15);
        return view("base.dashboard",[
            "title" => "FOBC ASIA Admin || Dashboard",
            "pages" => "Dashboard Page",
            "products" => $products,
        ]);
    }

    public function create(){
        $products = product::all();
        return view("base.eoq",[
            "title" => "FOBC ASIA Admin || EOQ Create",
            "pages" => "Economic Order Quantity",
            "products" => $products,
        ]);
    }

    public function store(Request $request){
        eoq::truncate();
        $products=product::all();
        $dateNow=Carbon::now();
        $dateBefore=$dateNow->copy()->subMonth();
        $daysTotal=$dateBefore->daysInMonth;
        $validatedData = $request->validate([
        'demand.*' => 'required',
        ]);

        foreach ($validatedData['demand'] as $productName => $demandValue) {
            $product = $products->firstWhere('name', $productName);
            $rop=round($product->safetyStock + (($demandValue / $daysTotal) * 30), 3);
            $eoq=round(sqrt((2 * $product->purchase * $demandValue) / ($product->storageCosts*$daysTotal)), 3);
            eoq::create([
                'name'=> $productName,
                'demand'=> $demandValue,
                'rop'=> $rop,
                'eoqs'=> $eoq,
            ]);
        }

        
        return redirect('/base/dashboard')->with('success','EOQ Updated');
    }
}
