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
        return view("base.expeditionfile.add",[
            "title" => "FOBC ASIA Admin || Product",
            "pages" => "Add Expedition Page",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreexpeditionRequest $request)
    {
        if (!isset($request->available)) {
            $request->merge(['available' => 0]);
        } else {
            $request->merge(['available' => 1]);
        }       
        $validatedData = $request->validate([
            'nation' => 'required',
            'district' => 'required',
            'available' => 'required',
        ]);
        
        expedition::create($validatedData);
        return redirect('/base/expedition')->with('success','Data Ditambahkan');
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
        return view("base.expeditionfile.edit",[
            "title" => "FOBC ASIA Admin || Product",
            "pages" => "Add Expedition Page",
            "expedition" => $expedition,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateexpeditionRequest $request, expedition $expedition)
    {
        if (!isset($request->available)) {
            $request->merge(['available' => 0]);
        } else {
            $request->merge(['available' => 1]);
        }       
        
        $validatedData = $request->validate([
            'nation' => 'required',
            'district' => 'required',
            'available' => 'required',
        ]);
        
        expedition::where('id',$expedition->id)
                ->update($validatedData);
        return redirect('/base/expedition')->with('success','Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(expedition $expedition)
    {
        expedition::destroy($expedition->id);
        return redirect('/base/expedition')->with('success','Data Dihapus');
    }
}
