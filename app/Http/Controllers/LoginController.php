<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function show ()
    {
        return view('login');
    }

    public function login (Request $request)
    {
        $username = $request->name;
        $password = $request->password;
        
        if (auth()->attempt(['name' => $username, 'password' => $password])) {
            return redirect()->route('landingPage');
        } else {
            return back()->withErrors(['password' => 'Invalid username or password.'])->withInput();
        }
    }
}
