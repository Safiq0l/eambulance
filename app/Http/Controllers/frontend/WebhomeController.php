<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebhomeController extends Controller
{
    public function home(){

        return view('frontend.home');

    }
}