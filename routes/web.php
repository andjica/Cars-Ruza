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
use App\User;
use App\Car;
use App\Mail\InvoiceCreated;

Route::get('/','FrontController@index');
Route::get('/logout',function(){
    Auth::logout();
    return redirect()->back();
});

Route::get('/maill', function () {
    $car = Car::find(6);

    return new InvoiceCreated($car);
});

Route::post('/test',function(){
    $car = Car::find(request()->car['id']);
    Mail::to(request()->user()->email)->send(new InvoiceCreated($car));
});


Route::get('/sorted_cars', 'FrontController@sorted_cars');
Route::post('/sorted_cars', 'FrontController@sorted_cars_ajax');
Route::resource('cars', 'CarsController');
Route::resource('user', 'UserController');

Route::get('/category/{category}','FrontController@show_category')->name('show_category');
Route::get('/filter','FrontController@cars_filter')->name('filter');
Route::get('/engine','FrontController@get_engine');
Route::get('/trim', 'FrontController@get_trim');
Route::get('/picker', 'FrontController@get_picker');
Route::get('/offerte','FrontController@get_offerte');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/all_cars', 'CarsController@index')->name('index');
Route::get('/discount', 'CarsController@discount');
Route::post('/update-cost/{id}', 'CarsController@update_cost');
Route::get('/car-invoice', 'CarsController@car_invoice');

Route::get('/about', 'FrontController@get_about');
