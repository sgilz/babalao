<?php


namespace App\Http\Controllers;

use App\Util\State;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Item;

class ProductController extends Controller
{
    public function index()
    {
        $data["products"] = Product::all();
        return view('product.index')->with("data", $data);
    }

    public function show($id)
    {
        $data = []; //to be sent to the view
        $product = Product::findOrFail($id);
        $data["title"] = $product->getName();
        $data["product"] = $product;
        return view('product.show')->with("data", $data);
    }
}
