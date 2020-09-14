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
        $data["product"] = Product::findOrFail($product_id);
        $data["title"] = $data["product"]->getName();
        $reviews_avg = Review::with(['product_id', $product_id])->avg('rating');
        $data["review"] = ($reviews_avg / 5) * 100;

        return view('product.show')->with("data", $data);
    }

    public function search($search)
    {
        $data = [];
        $data["title"] = __('product.search.title', ['search' => $search]);
        $data["search"] = $search;
        $results = Product::where('name', 'like', '%' . $search . '%')->get();
        if ($results->isEmpty()) {
            return view('product.empty')->with("data", $data);
        } else {
            $data["products"] = $results;
            $data["product"] = $data["products"]->first();
            return view('product.search')->with("data", $data);
        }
    }

    public function searchBar(Request $request)
    {
        $search = $request['search'];
        return redirect()->route("product.search", ['search' => $search]);
    }


    public function list($category_id)
    {
        $data = [];
        $data['category'] = Category::findOrFail($category_id);
        $data["title"] = $data['category']->getName();
        $data["products"] = Product::where('category_id',$category_id)->get();

        return view('product.list')->with("data", $data);
    }

    public function add($category_id)
    {
        $data = [];
        $data['category'] = Category::findOrFail($category_id);
        $data["title"] = __('product.formTitle', ['category'=>$data['category']->getName()]);

        return view('product.add')->with("data", $data);
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
            $product->getId() . ".png"
        );

        return redirect()->route('home');
    }
}