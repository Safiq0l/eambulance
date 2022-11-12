<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;

class LoginController extends Controller
{
    public function login(){

          
        $login_list=customer::paginate(4);

       // dd($login_list);
        return view('backend.pages.login.login',compact('login_list'));


    }


    public function loginform(){
        return view("backend.pages.login.loginform");
       }

    public function store( Request $request){
       // dd($request->all());
          $request->validate([
              'name'=>'required|unique:customers,name',
              'number'=>'required',
              'email'=>'required',
              'password'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png,gif'

          ]);
           
          $fileName=null;
          if($request->hasFile('image'))
          {
              // generate name
              $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
              $request->file('image')->storeAs('/uploads',$fileName);
          }
  
           
       customer::create([
        //database column name => input field name
            'name'=>$request->name,
             'phone_number'=>$request->number,
             'Email_address'=>$request->email,
             'image'=>$fileName,
            'status'=>$request->status,
            'password'=>$request->password,
            
    ]);


    return redirect()->back();



    }


}
