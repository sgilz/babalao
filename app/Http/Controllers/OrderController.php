<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Product;
use App\Util\Status;
use Symfony\Component\VarDumper\Cloner\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class OrderController extends Controller
{

    public function index()
    {
        return view('order.index');
    }

    public function create()
    {
        $data = [];
        $data["title"] = __("order.creationTitle");
        return view('order.create')->with("data", $data);
    }

    public function list()
    {
        $data = [];
        $data["title"] = __("order.title");
        $data["orders"] = Order::all();
        return view('order.list')->with("data", $data);
    }

    public function save(Request $request)
    {
        Order::validate($request);
        Order::create($request->only(["date", "status", "total"]));
        return back()->with('success', __("order.messages.saveSuccess"));
    }

    public function details($id)
    {
        $data = []; //to be sent to the view
        $order = Order::findOrFail($id);
        $data["title"] = __("order.details");
        $data["order"] = $order;
        return view('order.details')->with("data", $data);
    }

    public function delete($id)
    {
        Order::destroy($id);
        return redirect()->route('order.list');
    }

//Cart functionalities
    public function addToCart($id, Request $request)
    {
        $data = []; //to be sent to the view
        $quantity = $request['quantity'];
        $products = $request->session()->get("products");
        $products[$id] = $quantity;
        $request->session()->put('products', $products);
        return back()->with('success', 'Item added successfully!');
    }

    public function removeFromCart($id, Request $request)
    {
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
            return view('order.cart')->with("data", $data);
        }

        return redirect()->route('product.index');
    }

    public function buy(Request $request)
    {
        $order = new Order();
        $order->setDate(date('Y') . "-" . date('m') . "-" . date('d'));
        $order->setStatus(Status::PENDING);
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
