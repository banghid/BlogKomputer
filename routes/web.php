<?php

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

Route::get('/customer','CustomerController@getCustomer');

Route::get('/customer/{customer}','CustomerController@getData');

// Route::get('/customer/edit/{customer}','CustomerController@editCustomer')->name('customer.edit');

Route::post('/customer','CustomerController@inputCustomer')->name('customer.input');

Route::post('/customer/edit/{customer}','CustomerController@editCustomer')->name('customer.edit');
