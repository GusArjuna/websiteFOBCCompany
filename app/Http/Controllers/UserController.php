<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("base.userfile.home",[
            "title" => "FOBC ASIA Admin || User Admin",
            "pages" => "User Admin",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    
     public function create()
     {
        return view("base.userfile.add",[
            "title" => "FOBC ASIA Admin || Add Admin",
            "pages" => "Add Admin",
        ]);
     }
    
     public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
