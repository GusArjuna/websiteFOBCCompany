<?php

namespace App\Http\Controllers;

use App\Models\country;
use App\Http\Requests\StorecountryRequest;
use App\Http\Requests\UpdatecountryRequest;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("base.countryfile.home",[
            "title" => "FOBC ASIA Admin || Destination Country",
            "pages" => "Country Page",
            "countries" => country::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("base.countryfile.add",[
            "title" => "FOBC ASIA Admin || Product",
            "pages" => "Add Country Page",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecountryRequest $request)
    {
        if (!isset($request->available)) {
            $request->merge(['available' => 0]);
        } else {
            $request->merge(['available' => 1]);
        }       
        $validatedData = $request->validate([
            'name' => 'required',
            'available' => 'required',
        ]);
        
        country::create($validatedData);
        return redirect('/base/country')->with('success','Data Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(country $country)
    {
        return view("base.countryfile.edit",[
            "title" => "FOBC ASIA Admin || Product",
            "pages" => "Edit Country Page",
            "country" => $country,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecountryRequest $request, country $country)
    {
        if (!isset($request->available)) {
            $request->merge(['available' => 0]);
        } else {
            $request->merge(['available' => 1]);
        }       
        
        $validatedData = $request->validate([
            'name' => 'required',
            'available' => 'required',
        ]);
        
        country::where('id',$country->id)
                ->update($validatedData);
        return redirect('/base/country')->with('success','Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(country $country)
    {
        country::destroy($country->id);
        return redirect('/base/country')->with('success','Data Dihapus');
    }
}
