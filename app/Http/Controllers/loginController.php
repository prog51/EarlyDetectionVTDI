<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function registerForm()
    {
        return view("auth.register");
    }

    public function profile()
    {
        return view("auth.profile");
    }

    public function welcomePage()
    {
        return view('welcome');
    }


    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        //return view('auth.login');
        return view('auth.login');
    }

    public function forms()
    {

        return view('auth.forms');
    }
}
