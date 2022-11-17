<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function ShowRegistrationForm()
    {
        return view('frontend.pages.registration');
    }
    public  function ProcessRegistration(Request $request)
    {
        
        User::create([

            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,



        ]);
        
        return redirect()->back();

    }
    
}
