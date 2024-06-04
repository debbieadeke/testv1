<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginUserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        //validate the form data
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8, string',
        ]);

        //Attempt to log the user in
        if(Auth::guard('web')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            //if successful, redirect to the dashboard
            return redirect()->intended(route('posts.index'));
    } else{
        //if not successful, redirect back to the login form
        return back()->withErrors([
            'email'=>'Invalid email or password'
        ]);  

    }
}

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('posts.index');
    }

}
