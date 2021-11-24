<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/','PagesController@index');
Route::post('/register/user','RegisterController@createUser');
Route::get('/register/seller','RegisterController@sellerCreate');
Route::post('/register/seller','RegisterController@createSeller');
Route::get('/seller', 'sellerController@index')->middleware('auth');
// seller bird
Route::get('/seller/bird','SellerController@bird');
Route::get('/seller/bird/input','SellerController@inputBird');
Route::post('/seller/bird/input','SellerController@saveBird');
Route::get('/seller/bird/edit/{id}','SellerController@editBird');
Route::post('/seller/bird/edit/{id}','SellerController@saveEditBird');
Route::get('/seller/bird/delete/{id}','SellerController@deleteBird');
Route::get('/seller/order/{id}','SellerController@order');

Route::get('/user', 'UserController@index');
Route::get('/bird','PagesController@bird');
Route::get('/bird/detail/{id}','PagesController@detailBird');
Route::post('/bird/add_cart','CartController@addCart')->middleware('auth');
Route::get('/checkout/{id}','CartController@index')->middleware('auth');
Route::post('/checkout/{id}','CartController@createOrder')->middleware('auth');
Route::get('/checkout/delete/{id}','CartController@removeCart')->middleware('auth');

// payment
Route::post('/checkout/order/payment/{id}','CartController@orderPayment')->middleware('auth');
Route::get('/status','CartController@status')->name('status');
Route::post('/create/user','RegisterController@create');
Route::post('/create/seller','SellerController@create');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/payment/{id}','PaymentController@pay')->name('pay');
Route::get('/payment/redirect/{id}','PaymentController@updateStatus')->name('update_status');
Route::get('/status/update_cod/{id}','PaymentController@updateCod');
// Route::get('/status')
Auth::routes();



