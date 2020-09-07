<?php

namespace App\Http\Controllers;

use Symfony\Component\VarDumper\Cloner\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Order;

class OrderController extends Controller {

    public function index() {
        return view('order.index');
    }

    public function create() {
        $data = [];
        $data["title"] = "New Order";
        return view('order.create')->with("data",$data);
    }

    public function list() {
        $data = [];
        $data["title"] = "Orders";
        $data["orders"] = Order::all();
        return view('order.list')->with("data", $data);
    }

    public function save(Request $request){
        $request->validate([
            "date" => "required",
            "total" => "required|numeric|gt:0"
            ]);
        Order::create($request->only(["date","total"]));
        return back()->with('success','Item created successfully!');
    }

    public function details($id) {
        $data = []; //to be sent to the view
        $order = Order::findOrFail($id);
        $data["title"] = "Details";
        $data["order"] = $order;
        return view('order.details')->with("data",$data);
    }

    public function delete($id){
        DB::delete('delete from orders where id = ?',[$id]);
        return redirect()->route('order.list');
    }

}
