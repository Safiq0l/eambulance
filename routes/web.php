<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\AmbulanceController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




//  ......backend

  
Route::get('/',[AdminController::class,'adminpanel'])->name('adminpanel');

Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('list');

Route::get('/login',[LoginController::class,'login'])->name('form');

Route::get('login/loginform',[LoginController::class,'loginform']);

Route::get('/ambulances',[AmbulanceController::class,'ambulances']);

Route::get('ambulances/ambulanceform',[AmbulanceController::class,'ambulanceform']);

