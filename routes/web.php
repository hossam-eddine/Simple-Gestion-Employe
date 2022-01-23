<?php

use App\Http\Controllers\EmployeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("admin")->middleware("auth")->group(function(){
   //home
   Route::get("/home",function(){
       return view("home");

   });
   //employe
   Route::resource('employee',EmployeController::class);
    Route::get("/employee/{id}/vacation",[EmployeController::class,"vacationRequest"])->name("vacation.request");
    Route::get("/employee/{id}/certifica",[EmployeController::class,"certificateRequest"])->name("certificate.request");
});
