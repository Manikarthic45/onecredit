<?php

use App\Http\Controllers\RetailController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Retail Register
Route::post('/retailregister', [RetailController::class,'retailregister']);
Route::post('/retaillogin', [RetailController::class,'retaillogin']);
//get retail data
Route::get('/getRetaildata', [RetailController::class,'getRetaildata']);
//update retail data
Route::post('/retailupdate', [RetailController::class,'retailupdate']);








//customer register
Route::post('/customer_register', [CustomerController::class,'customer_register']);
Route::post('/customer_login', [CustomerController::class,'customer_login']);

//get customer data
Route::get('/getCustomerdata', [CustomerController::class,'getCustomerdata']);

//update Customer data 
Route::post('/customerupdate', [CustomerController::class,'customerupdate']);
