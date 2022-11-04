<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ambulance;

class AmbulanceController extends Controller
{
    public function ambulances(){

        $ambulance_list=ambulance::all();

       // dd($login_list);
        return view("backend.pages.ambulanceinfo.ambulances",compact('ambulance_list'));
       }



       public function ambulanceform(){
        return view("backend.pages.ambulanceinfo.ambulanceform");
       }

       public function store( Request $request){
        // dd($request->all());
         
        ambulance::create([
         //database column name => input field name
             'Registration_number'=>$request->number,
              'Ambulance_type'=>$request->choose,
            
             
     ]);
 
 
     return redirect()->back();
 
 
 
     }







}

