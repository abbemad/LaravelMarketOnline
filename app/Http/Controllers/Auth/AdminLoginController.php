<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }
    
    public function login(Request $request)
    {
        // Accepting form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        // Try login in user 
        // The attempt in if (Auth::guard('admin')->attempt automaticly hashes the password/email you dont
        // have to manually hash it
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        
        // if it works go to correct location
        return redirect()->intended(route('admin.dashboard'));
        }
        // if not works go back to form data
        // also redirect with input of the data 
        return redirect()->back()->withInput($request->only('email', 'remember'));
             
    }
}
