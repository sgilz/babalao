<?php

/*
 * @author    Santiago Gil Zapata sgilz@eafit.edu.co
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductCollection;
use App\Models\Product;

class ProductApi extends Controller
{
    public function index()
    {
        return new ProductCollection(ProductResource::collection(Product::all()));
    }

    public function paginate()
    {
        return new ProductCollection(ProductResource::collection(Product::paginate(5)));
    }

    public function show($id)
    {
        return new ProductResource(Product::findOrFail($id));
    }
}
