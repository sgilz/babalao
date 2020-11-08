<?php

/*
 * @author    Felipe Sosa Patiño fsosap@eafit.edu.co
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use App\Util\Status;
use App\User;
use function Sodium\add;

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
        $user = Auth::user();
        Order::validate($request);
        //Order::create($request->only(["date", "status", "total",]));
        Order::create([
            'date' => $request['date'],
            'status' => $request['status'],
            'total' => $request['total'],
            'user_id' => $user->getId(),
        ]);
        return back()->with('success', __("order.messages.saveSuccess"));
    }

    public function details($id)
    {
        $data = []; //to be sent to the view
        $order = Order::findOrFail($id);
        $user = User::findOrFail($order->getUserId());
        $items = Item::where('order_id', $order->getId())->get();
        $products = [];
        foreach ($items as $item) {
            $product = Product::findOrFail($item->getProductId());
            array_push($products, $product->getName());
        }
        $data["title"] = __("order.details");
        $data["order"] = $order;
        $data["user"] = $user;
        $data["items"] = $items;
        $data["products"] = $products;
        return view('order.details')->with("data", $data);
    }

    public function delete($id)
    {
        $items = Item::where('order_id', $id)->get();
        foreach ($items as $item) {
            Item::destroy($item->getId());
        }
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
        return back()->with('success', __('order.controller.message.add'));
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
        return redirect()->route('home');
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
                $total += $currentProduct->getPrice() * $products[$key];
            }
            $data["total"] = $total;
            $data["products"] = $productsModels;
            return view('order.cart')->with("data", $data);
        }

        return redirect()->route('home');
    }

    public function checkout()
    {
        $data = [];
        $user = Auth::user();
        $data["user_name"] = $user->getName();
        $data["email"]= $user->getEmail();
        $data["address"] = $user->getAddress();
        $data["neighborhood"] = $user->getNeighborhood();
        $data["city"] = $user->getCity();
        $data["credit_cards"] = [];
        $creditCards = $user->creditCards;
        foreach ($creditCards as $creditCard) {
            array_push($data["credit_cards"], $creditCard->getCardNumber());
        }
        return view('order.checkout')->with("data", $data);
    }

    public function buy(Request $request)
    {
        $user = Auth::user();
        $order = new Order();
        $order->setDate(date('Y-m-d H:i:s'));
        $order->setStatus(Status::PENDING);
        $order->setTotal("0");
        $order->setUserId($user->getId());

        $order->save();

        $totalPrice = 0;

        $products = $request->session()->get("products");
        if ($products) {
            $keys = array_keys($products);
            foreach ($keys as $key) {
                $currentProduct = Product::find($key);
                $totalPrice = $totalPrice + $currentProduct->getPrice() * $products[$key];
                $item = new Item();
                $item->setProductId($key);
                $item->setOrderId($order->getId());
                $item->setQuantity($products[$key]);
                $item->setSubtotal($products[$key], $currentProduct->getPrice());
                $item->save();
            }
            $order->setTotal($totalPrice);
            $order->save();

            $request->session()->forget('products');
        }
        return redirect()->route('home')->with('success', __('order.controller.message.buy'));
    }
}
