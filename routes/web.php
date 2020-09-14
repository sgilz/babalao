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
    return view('home');
});

Route::get('/products', 'ProductController@index')->name("product.index");

Route::get('/products/remove-cart','ProductController@removeCart')->name("product.removeCart");

Route::get('/products/{id}', 'ProductController@show')->name("product.show");

Route::post('/products/add-to-cart/{id}', 'ProductController@addToCart')->name("product.addToCart");

Route::get('/cart', 'ProductController@cart')->name("product.cart");

Route::post('/cart/buy', 'ProductController@buy')->name("product.buy");

/*
Route::get('/order', 'OrderController@index')->name('order.index');

Route::get('/order/create', 'OrderController@create')->name('order.create');

Route::get('/order/list', 'OrderController@list')->name('order.list');

Route::get('/order/details/{id}','OrderController@details')->name('order.details');

Route::post('/order/save', 'OrderController@save')->name('order.save');

Route::delete('/order/delete/{id}', 'OrderController@delete')->name('order.delete');
*/
