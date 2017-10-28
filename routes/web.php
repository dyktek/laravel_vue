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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/add-to-basket/{product}', 'HomeController@addToBasket')->name('addToBasket');
Route::get('/get-basket', 'HomeController@getBasket')->name('getBasket');
Route::get('/get-basket', 'HomeController@getBasket')->name('getBasket');
Route::get('/quantity-product/{id}/{quantity}', 'HomeController@quantityProduct')->name('quantityProduct');
