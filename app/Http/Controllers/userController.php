<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class userController extends Controller
{
    //

    public function store(Request $request)
    {
        $formData = $request->validate([
            'fname' => ['required', 'min:3'],
            'lname' => ['required', 'min:3'],
            'email' => ['required','email', Rule::unique('users','email')],
            'password' => 'required|min:6'
        ]);

        $formData['password'] = bcrypt($formData['password'] );

        $user = User::create($formData);

        try{
            
            auth()->login($user);
        }
        catch(Exception $err)
        {
            echo "Error: " . $err->getMessage();
        }

       // exit();

        //return redirect('admin')->with('message', 'User created and logged in');
    }

    public function authenticate(Request $request)
    {

        //$email = User::find(2);

        $formData = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'        
        ]);

        if(auth()->attempt($formData))
         {
            $request->session()->regenerate();


             return view('admin');
         }
         else
         {
            echo "here 2";
         }
         
         
        
        return back()->withErrors(['email'=>'Invalid Credential']);
    }


    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('auth.login');
        //echo "here 3";
       // return view('auth.login');
    }

    public function importUsers()
    {
        return view('admin');
    }

    public function uploadUsers(Request $request)
    {
        Excel::import(new UsersImport, $request->file);
        
        //return redirect()->route('/welcome')->with('success', 'User Imported Successfully');
    }
    
}