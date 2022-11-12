<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function drivers(){
        return view('backend.pages.driverinfo.drivers');
    }




    public function driverform(){
        return view('backend.pages.driverinfo.driverform');
    }







}
