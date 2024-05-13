<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view("base.login");
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        
        $user = User::where('username', $credentials['username'])->first();
        if($user){
            if ($user->status === 'on') {
                // Account is active
                if (Auth::attempt($credentials)) {
                    // Check if the user account is active
                        $request->session()->regenerate();
                        return redirect()->intended('/base/dashboard');
                }
            } elseif ($user->status === 'off') {
                // Account is inactive
                return back()->with('Error', 'Your account is inactive.');
            } else {
                // Handle unexpected status values
                return back()->with('Error', 'Invalid account status.');
            }
        }
        return back()->with('Error', 'Username or Password doesn\'t Exist');
        
    }
}
