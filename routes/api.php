<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', 'Api\ProductApi@index')->name("api.product.index");
Route::get('/products/paginate', 'Api\ProductApi@paginate')->name("api.product.paginate");
Route::get('/products/{id}', 'Api\ProductApi@show')->name("api.product.show");
