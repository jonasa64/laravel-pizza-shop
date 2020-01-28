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

Route::get('pizza/','PizzaController@index')->name('pizza.index');
Route::get('pizza/create', 'PizzaContoller@create')->name('pizza.create');
Route::get('pizza/{id}','PizzaController@show')->name('pizza.show');
Route::delete('pizza/{pizza}', 'PizzaContoller@destroy')->name('pizza.destroy');
Route::post('pizza/','PizzaContoller@store')->name('pizza.store');
Route::put('pizza/{pizza}/edit','PizzaContoller@edit')->name('pizza.edit');

Route::get('cart/', 'CartController@index')->name('cart.index');
Route::post('cart/{id}', 'CartController@store');
Route::delete('cart/{id}', 'CartController@destroy')->name('cart.destroy');

Route::get('checkout/', 'CheckoutController@index')->name('checkout.index');
Route::post('checkout/', 'CheckoutController@store')->name('checkout.store');