<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        // show the form
        return view('loginpage');
    }

    public function doLogin(Request $request)
    {
        // process the form
        // validate the info
        $credentials = $request->validate([
        'email'    => 'required|email', // validate email
        'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and length > 3
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->session()->passwordConfirmed();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);       

    }

    public function doLogout()
    {
        Auth::logout(); // log out the user
        return redirect()->intended('login'); // redirect 
    }
 
}
