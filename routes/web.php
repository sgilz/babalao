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




/* 
Routes for Review
*/
Route::get('/review/create/{product_id}', 'ReviewController@create')->name('review.create');

Route::post('/review/save/{product_id}', 'ReviewController@save')->name('review.save');

/*
Routes for User
*/
Route::get('/user', 'UserController@showInformation')->name('user.showInformation');

Auth::routes();