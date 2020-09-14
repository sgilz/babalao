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

Route::get('/home', 'HomeController@index')->name('home');

/*
Routes for Review
*/
Route::get('/review/create/{product_id}', 'ReviewController@create')->name('review.create');

Route::post('/review/save/{product_id}', 'ReviewController@save')->name('review.save');

/*
Routes for User
*/
Route::get('/user', 'UserController@showInformation')->name('user.showInformation');

/*
Routes for Shopping-Cart and Order
 */
Route::get('/products', 'ProductController@index')->name("product.index");

Route::get('/products/remove-cart', 'ProductController@removeCart')->name("product.removeCart");

Route::get('/products/{id}', 'ProductController@show')->name("product.show");

Route::post('/products/add-to-cart/{id}', 'ProductController@addToCart')->name("product.addToCart");

Route::get('/cart', 'ProductController@cart')->name("product.cart");

Route::post('/cart/buy', 'ProductController@buy')->name("product.buy");

Auth::routes();
