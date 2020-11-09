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

Route::redirect('/', '/home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/lang/{locale}', 'LanguageController@changeLang')->name('language.changeLang');

/*
Routes for Category
*/
Route::get('/category/add', 'CategoryController@add')->name('category.add');
Route::post('/category/save', 'CategoryController@save')->name('category.save');
Route::post('/category/delete/{category_id}', 'CategoryController@delete')->name("category.delete");

/*
Routes for Product
*/
Route::get('/product/{product_id}', 'ProductController@show')->name('product.show');
Route::get('/c{category_id}/products', 'ProductController@list')->name('product.list');
Route::get('/c{category_id}/product/add', 'ProductController@add')->name('product.add');
Route::post('/c{category_id}/product/save', 'ProductController@save')->name('product.save');
Route::get('/search/{search}', 'ProductController@search')->name('product.search');
Route::post('/searchBar', 'ProductController@searchBar')->name('product.searchBar');

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

/*
Routes for CreditCard
*/
Route::get('/card/create', 'CreditCardController@create')->name("card.create");
Route::post('/card/save', 'CreditCardController@save')->name("card.save");
Route::get('/card/list/', 'CreditCardController@list')->name("card.list");
Route::delete('/card/list/delete/{id}','CreditCardController@delete')->name("card.delete");
Route::post('/card/list/recharge/{id}','CreditCardController@recharge')->name("card.recharge");

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
Route::get('/order/checkout', 'OrderController@checkout')->name('order.checkout');
/*
Routes for Wish List
*/
Route::get('/wishList/show','WishListController@show')->name("wishList.show");
Route::post('/wishList/{id_product}', 'WishListController@addProduct')->name("wishList.addProduct");
Route::delete('wishList/delete-product/{id_product}', 'WishListController@deleteProduct')->name('wishList.deleteProduct');

Auth::routes();
