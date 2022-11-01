<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;

class LoginController extends Controller
{
    public function login(){
     return view("backend.pages.login.login");
    }


    public function loginform(){
        return view("backend.pages.login.loginform");
       }

    public function store( Request $request){
       // dd($request->all());
        
       customer::create([
        //database column name => input field name
            'name'=>$request->name,
             'phone_number'=>$request->number,
             'Email_address'=>$request->email,
             'image'=>$request->image,
            'status'=>$request->status,
            'password'=>$request->password,
            
    ]);


    return redirect()->back();



    }


}
