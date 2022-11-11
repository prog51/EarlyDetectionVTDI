<?php

namespace App\Http\Controllers;
//use Auth;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function students()
      {

         return "working";
      }

      public function dashboard()
      {
  

         if(auth()->user() == null)
         {
           return view('/admin');   
         }
         else
         {
               return back('login')->withInput()->with('errmessage', 'Please Login to access restricted area.');
         }

         
      }
}
