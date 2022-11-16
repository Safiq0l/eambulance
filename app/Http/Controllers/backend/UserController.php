<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginpage(){
    
        return view('backend.pages.loginpage');



    }


    public function loginstore(Request $request){
       // dd($request->all());

            $credentials=$request->only('email','password');
                 

           //$credentials=$request->except('_token');

           If(Auth::attempt($credentials))
           {

              return redirect()->route('adminpanel');
           }
             return redirect()->back();


    }

    public function logout(){
             
        Auth::logout();
        
         return redirect()->back();
    }

}
