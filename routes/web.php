<?php

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
    return view('index');
});
Route::get('/seller', 'sellerController@index');
Route::get('/seller/bird','SellerController@bird');
Route::post('/seller/bird/input','SellerController@saveBird');
Route::get('/user', 'UserController@index');
Route::post('/create/user','RegisterController@create');
Route::post('/create/seller','SellerController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
