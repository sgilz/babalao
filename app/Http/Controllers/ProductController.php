<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function show($product_id)
    {
        $data = [];
        $data["title"] = "Show product";
        $data["product"] = Product::findOrFail($product_id);
        $reviews_avg = Review::with(['product_id',$product_id])->avg('rating');
        $data["review"] = ($reviews_avg/5)*100;

        return view('product.show')->with("data",$data);
    }

    public function search($search)
    {
        $data = [];
        $data["title"] = "Show product";
        $data["search"] = "$search";
        $data["products"] = Product::where('name', 'like', '%'. $search . '%')->get();
        $data["product"] = $data["products"]->first();


        return view('product.search')->with("data",$data);
    }


    public function list($category_id)
    {
        $data = [];
        $data["title"] = "Show product";
        $data['category'] = Category::findOrFail($category_id);
        $data["products"] = Product::all();

        return view('product.list')->with("data",$data);
    }

    public function add($category_id)
    {
        $data = [];
        $data["title"] = "Add product";
        $data['category'] = Category::findOrFail($category_id);

        return view('product.add')->with("data",$data);
    }

    public function save(Request $request, int $category_id)
    {
        Product::validate($request);
        
        $product = Product::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'brand' => $request['brand'],
            'specs' => $request['specs'],
            'category_id' => $category_id
        ]);

        $request->file('image')->storeAs(
            'public/products',
            $product->getId().".png"
        );

        return redirect()->route('home');
    }
}
