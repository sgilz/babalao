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
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('user.logout');

Auth::routes();

/*
Routes for CreditCard
*/
Route::get('/card/create', 'CreditCardController@create')->name("card.create");

Route::post('/card/save', 'CreditCardController@save')->name("card.save");

Route::get('/card/list/', 'CreditCardController@list')->name("card.list");

Route::delete('/card/list/delete/{id}','CreditCardController@delete')->name("card.delete");

/*
Routes for Shopping-Cart and Order
 */

Route::get('/cart/remove-cart', 'OrderController@removeCart')->name("cart.removeCart");

Route::post('/cart/add-to-cart/{id}', 'OrderController@addToCart')->name("cart.addToCart");

Route::get('/cart', 'OrderController@cart')->name("cart.cart");

Route::get('/cart/remove-item/{id}','OrderController@removeFromCart')->name("cart.removeFromCart");

Route::post('/cart/buy', 'OrderController@buy')->name("cart.buy");

Route::get('/order', 'OrderController@index')->name('order.index');

Route::get('/order/create', 'OrderController@create')->name('order.create');

Route::get('/order/list', 'OrderController@list')->name('order.list');

Route::post('/order/save', 'OrderController@save')->name('order.save');

Route::get('/order/details/{id}','OrderController@details')->name('order.details');

Route::delete('/order/delete/{id}', 'OrderController@delete')->name('order.delete');

Auth::routes();
