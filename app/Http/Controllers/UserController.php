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
            "users" => User::all(),
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
        if(!$request['status']){$request['status']='off';}
        $validatedData = $request->validate([
            'username' => 'required',
            'status' => 'required',
            'password' => 'required',
        ]);

        $validatedData['password']=bcrypt($validatedData['password']);
        
        User::create($validatedData);
        return redirect('/base/user')->with('success','Data Ditambahkan');
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
        user::destroy($user->id);
        return redirect('/base/user')->with('success','Data Dihapus');
    }
}
