<?php

namespace App\Http\Controllers;

use App\Models\expedition;
use App\Http\Requests\StoreexpeditionRequest;
use App\Http\Requests\UpdateexpeditionRequest;

class ExpeditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("base.expeditionfile.home",[
            "title" => "FOBC ASIA Admin || Expedition",
            "pages" => "Expedition Page",
            "Expeditions" => expedition::all(),
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
    public function store(StoreexpeditionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(expedition $expedition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(expedition $expedition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateexpeditionRequest $request, expedition $expedition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(expedition $expedition)
    {
        //
    }
}
