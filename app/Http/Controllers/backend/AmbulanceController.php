<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AmbulanceController extends Controller
{
    public function ambulances(){
        return view("backend.pages.ambulanceinfo.ambulances");
       }



       public function ambulanceform(){
        return view("backend.pages.ambulanceinfo.ambulanceform");
       }



}

