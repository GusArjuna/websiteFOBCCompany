<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Http\Requests\StoreorderRequest;
use App\Http\Requests\UpdateorderRequest;
use App\Models\RegisOrder;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regisOrders = RegisOrder::paginate(15);
        return view("base.orderfile.home",[
            "title" => "FOBC ASIA || Orders",
            "pages" => "Orders",
            "regisOrders" => $regisOrders,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreorderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RegisOrder $regisOrder)
    {
        $orders = order::where('regisOrder',$regisOrder->regisOrder)->get();
        return view("base.orderfile.show",[
            "title" => "FOBC ASIA || Orders",
            "pages" => "Orders",
            "orders" => $orders,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateorderRequest $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegisOrder $regisOrder)
    {
        RegisOrder::destroy($regisOrder->id);
        return redirect('/base/order')->with('success','Deleted');
    }
}
