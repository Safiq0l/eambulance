<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\AmbulanceController;
use App\Http\Controllers\backend\DriverController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\frontend\WebhomeController;
use App\Http\Controllers\frontend\AuthController;

use Illuminate\Routing\RouteGroup;

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
//frontend


Route::get('/',[WebhomeController::class,'home'])->name('home');

Route::get('/registration',[AuthController::class,'ShowRegistrationForm'])->name('registration');

Route::post('/registration',[AuthController::class,'ProcessRegistration'])->name('do.registration');



//  ......backend

Route::get('/loginpage',[UserController::class,'loginpage'])->name('login');
Route::post('/loginstore',[UserController::class,'loginstore'])->name('login.store');

Route::group(['middleware'=>'auth','prefix'=>'admin'],function() {

 Route::get('/logout',[UserController::class,'logout'])->name('logout');

 Route::get('/',[AdminController::class,'adminpanel'])->name('adminpanel');

Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('list');

Route::get('/login',[LoginController::class,'login'])->name('form');

Route::get('login/loginform',[LoginController::class,'loginform'])->name('loginform');

Route::post('login/loginform/store',[LoginController::class,'store'])->name('login.loginform.store');

Route::get('login/delete/{login_id}',[loginController::class,'deleteuser'])->name('admin.user.delete');
Route::get('login/view/{view_id}',[LoginController::class,'viewuser'])->name('admin.user.view');


Route::get('/ambulances',[AmbulanceController::class,'ambulances'])->name('ambulances');

Route::get('ambulances/ambulanceform',[AmbulanceController::class,'ambulanceform'])->name('ambulanceform');

Route::post('ambulances/ambulanceform/store',[AmbulanceController::class,'store'])->name('ambulances.ambulanceform.store');

Route::get('/drivers',[DriverController::class,'drivers'])->name('drivers');
Route::get('drivers/driverform',[DriverController::class,'driverform'])->name('driverform');




});

  
