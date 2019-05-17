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
    return view('konten.landing-page');
});

Route::get('/computer','ComputerController@getComputer')->name('computer.tampil');

Route::get('/customer','CustomerController@getCustomer')->name('customer.tampil');

Route::post('/computer','ComputerController@inputComputer')->name('computer.input');

Route::post('/computer/edit/{computer}','ComputerController@editComputer')->name('computer.edit');

Route::get('/customer/{customer}','CustomerController@getData');

// Route::get('/customer/edit/{customer}','CustomerController@editCustomer')->name('customer.edit');

Route::post('/customer','CustomerController@inputCustomer')->name('customer.input');

Route::post('/customer/edit/{customer}','CustomerController@editCustomer')->name('customer.edit');

Route::get('/customer/delete/{customer}','CustomerController@deleteCustomer')->name('customer.delete');
