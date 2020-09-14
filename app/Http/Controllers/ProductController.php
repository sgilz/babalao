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

    public function addToCart($id, Request $request)
    {
        $data = []; //to be sent to the view
        $quantity = $request->quantity;
        $products = $request->session()->get("products");
        $products[$id] = $quantity;
        $request->session()->put('products', $products);
        return back()->with('success', 'Item added successfully!');
    }

    public function removeFromCart($id, Request $request){
        $products = $request->session()->get("products");
        unset($products[$id]);
        $request->session()->put('products', $products);
        return back();
    }

    public function removeCart(Request $request)
    {
        $request->session()->forget('products');
        return redirect()->route('product.index');
    }

    public function cart(Request $request)
    {
        $products = $request->session()->get("products");
        if ($products) {
            $keys = array_keys($products);
            $productsModels = Product::find($keys);
            $total = 0;
            foreach ($keys as $key) {
                $currentProduct = Product::find($key);
                $total+= $currentProduct->getPrice()*$products[$key];
            }
            $data["total"] = $total;
            $data["products"] = $productsModels;
            return view('product.cart')->with("data", $data);
        }

        return redirect()->route('product.index');
    }

    public function buy(Request $request)
    {
        $order = new Order();
        $order->setDate(date('Y') . "-" . date('m') . "-" . date('d'));
        $order->setState(State::PENDING);
        $order->setTotal("0");
        $order->save();

        $totalPrice = 0;

        $products = $request->session()->get("products");
        if ($products) {
            $keys = array_keys($products);
            foreach ($keys as $key) {
                $item = new Item();
                $item->setProductId($key);
                $item->setOrderId($order->getId());
                $item->setQuantity($products[$key]);
                $item->save();
                $currentProduct = Product::find($key);
                $totalPrice = $totalPrice + $currentProduct->getPrice() * $products[$key];
            }

            $order->setTotal($totalPrice);
            $order->save();

            $request->session()->forget('products');
        }
        return redirect()->route('product.index')->with('success', 'Success! your order is now being confirmed');
    }
}
