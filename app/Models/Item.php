<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Order;


class Item extends Model
{
    //attributes id, product_id, order_id, quantity, subtotal, created_at, updated_at

    public function getId()
    {
        return $this->attributes["id"];
    }

    public function setId($id)
    {
        $this->attributes["id"] = $id;
    }

    public function getQuantity()
    {
        return $this->attributes["quantity"];
    }

    public function setQuantity($quantity)
    {
        $this->attributes["quantity"] = $quantity;
    }

    public function getProductId()
    {
        return $this->attributes["product_id"];
    }

    public function setProductId($product_id)
    {
        $this->attributes["product_id"] = $product_id;
    }

    public function getOrderId()
    {
        return $this->attributes["order_id"];
    }

    public function setOrderId($order_id)
    {
        $this->attributes["order_id"] = $order_id;
    }

    public function setSubtotal($quantity, $price)
    {
        $this->attributes["subtotal"] = $quantity * $price;
    }

    public function getSubtotal()
    {
        return $this->attributes["subtotal"];
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function validate(Request $request)
    {
        return $request->validate([
            "quantity" => "required|integer|gt:0|lt:100",
        ]);
    }
}
