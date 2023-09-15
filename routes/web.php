<?php
date_default_timezone_set('Asia/Kolkata');
$today = \Carbon\Carbon::today()->format('Y-m-d');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Dams Project routes...
Route::get('/', 'AuthController@index');
// Route::get('/login', 'AuthController@index');
Route::post('/chkuser', 'AuthController@chkuser');
Route::get('/index', 'AuthController@dashboard');
Route::get('/Dashboard', 'AuthController@Dashboard');
Route::get('/logout', 'AuthController@logout');
Route::get('/register', 'AuthController@register');


//Customer Routes
Route::get('/customer', 'FrontController@customer_index');
Route::get('/addcustomer', 'FrontController@addcustomer');
Route::get('/editcustomer', 'FrontController@editcustomer');
Route::post('/getlocation1', 'FrontController@getlocation1');
Route::post('/getunitsize', 'FrontController@getunitsize');
Route::post('/postdata', 'FrontController@postdata');
//Product Routes
Route::get('/retail', 'FrontController@retail_index');
Route::get('/addproduct', 'FrontController@addproduct');
Route::post('/saveproduct', 'FrontController@saveproduct');
Route::post('/updateproduct', 'FrontController@updateproduct');
Route::post('/deleteproduct', 'FrontController@deleteproduct');
Route::get('/editproduct', 'FrontController@editproduct');


//Retail and Customer Updates Routes...
Route::post('/retail_update', 'RetailController@retail_update');
Route::post('/customer_update', 'CustomerController@customer_update');




//Stock Routes 
Route::get('/customer', 'FrontController@customer_index');
Route::get('/addcustomer', 'FrontController@addcustomer');
Route::post('/savecustomer', 'FrontController@savecustomer');
Route::post('/updatecustomer', 'FrontController@updatecustomer');
Route::post('/deletecustomer', 'FrontController@deletecustomer');
Route::get('/editcustomer', 'FrontController@editcustomer');


//Sales Routes 
Route::get('/sales', 'FrontController@sales_index');


//Invoice_index Routes 
Route::get('/invoice', 'FrontController@invoice_index');
Route::get('/createinvoice', 'FrontController@createinvoice');

//Admin Panel Routes
Route::get('/get_retail_details{retail_id}', 'RetailController@get_retail_details');
Route::get('/get_customer_details{customer_id}', 'CustomerController@get_customer_details');

//Approval and Rejected Retail Routes...
Route::get('/approved_retail{id}', 'RetailController@approved_retail');
Route::get('/rejected_retail{id}', 'RetailController@rejected_retail');

//Approval and Rejected Customer Routes...
Route::get('/approved_customer{id}', 'CustomerController@approved_customer');
Route::get('/rejected_customer{id}', 'CustomerController@rejected_customer');

//Approved , Rejected and Pending Retail List...
Route::get('/retail_approved', 'RetailController@retail_approved');
Route::get('/retail_rejected', 'RetailController@retail_rejected');
Route::get('/retail_pending', 'RetailController@retail_pending');

//Approved, Rejected and pending Routes List...
Route::get('/customer_approved', 'CustomerController@customer_approved');
Route::get('/customer_rejected', 'CustomerController@customer_rejected');
Route::get('/customer_pending', 'CustomerController@customer_pending');

//Admin Page 
Route::get('/admin', 'AdminController@admin_page');
Route::get('/create', 'AdminController@create');

//Admin Routes...
Route::post('/admin_creation', 'AuthController@admin_creation');
Route::get('/edit_admin{id}', 'AdminController@edit_admin');
Route::post('/admin_updation', 'AuthController@admin_updation');


//EDIT AND DELETE FOR ADMIN RETAIL ROUTES
Route::get('/edit_approved_retail{id}', 'RetailController@edit_approved_retail');
Route::get('/preview_retail{id}', 'RetailController@preview_retail');



//EDIT AND DELETE FOR ADMIN CUSTOMER ROUTES
Route::get('/edit_approved_customer{id}', 'CustomerController@edit_approved_customer');

//View approved customer
Route::get('/view_approved_customer{id}', 'CustomerController@view_approved_customer');
