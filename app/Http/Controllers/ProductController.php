<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            return view("base.productfile.home",[
                "title" => "FOBC ASIA Admin || Product",
                "pages" => "Product Page",
                "products" => product::paginate(10),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("base.productfile.add",[
            "title" => "FOBC ASIA Admin || Product",
            "pages" => "Add Product Page",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductRequest $request)
    {
        if (!isset($request->available)) {
            $request->merge(['available' => 0]);
        } else {
            $request->merge(['available' => 1]);
        }       
        // dd($request);
        $price = (int) $request->input('price');
        $validatedData = $request->validate([
            'name' => 'required',
            'purchase' => 'required',
            'sell' => 'required',
            'storageCosts' => 'required',
            'safetyStock' => 'required',
            'leadtime' => 'required',
            'available' => 'required',
            'image' => 'image',
        ]);        
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('Images');
        }
        $validatedData['price'] = $price;
        
        product::create($validatedData);
        return redirect('/base/product')->with('success','Data Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        return view("base.productfile.edit",[
            "title" => "FOBC ASIA Admin || Product",
            "pages" => "Edit Product Page",
            "product" => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproductRequest $request, product $product)
    {

        if (!isset($request->available)) {
            $request->merge(['available' => 0]);
        } else {
            $request->merge(['available' => 1]);
        }       
        $validatedData = $request->validate([
            'name' => 'required',
            'purchase' => 'required',
            'sell' => 'required',
            'storageCosts' => 'required',
            'safetyStock' => 'required',
            'leadtime' => 'required',
            'available' => 'required',
            'image' => 'image',
        ]);        
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }             
            $validatedData['image'] = $request->file('image')->store('Images');
        }
        
        product::where('id',$product->id)
                ->update($validatedData);
        return redirect('/base/product')->with('success','Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }
        product::destroy($product->id);
        return redirect('/base/product')->with('success','Data Dihapus');
    }
}
