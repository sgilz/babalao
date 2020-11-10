<?php

namespace App\Util;

use App\Interfaces\Invoice as Bill;
use App\Models\Product;
use Illuminate\Support\Facades\App;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Invoice;
use Illuminate\Support\Carbon;

class InvoicePDF implements Bill
{
    public function checkIn($order)
    {
        $seller = new Party([
            "name" => config("app.name"),
            "custom_fields" => [
                "site" => App::make("url")->to("/"),
            ],
        ]);
        $user = $order->user;
        $customer = new Party([
            "name" => $user->getName(),
            "address" => $user->getAddress(),
            "custom_fields" => [
                "email" => $user->getEmail(),
                "location" => "{$user->getNeighborhood()}, {$user->getCity()}",
            ],
        ]);
        $items = $order->items;
        $invoice_items = [];
        foreach ($items as $item) {
            $product = Product::find($item->getProductId());
            $invoice_item = new InvoiceItem();
            $invoice_item
                ->title($product->getName())
                ->pricePerUnit($product->getPrice())
                ->quantity($item->getQuantity());
            array_push($invoice_items, $invoice_item);
        }
        $timestamp = new Carbon($order->getDate());
        $invoice = Invoice::make()
            ->addItems($invoice_items)
            ->buyer($customer)
            ->date($timestamp)
            ->currencySymbol('$')
            ->currencyCode('USD')
            ->currencyFormat('{SYMBOL}{VALUE}')
            ->currencyThousandsSeparator('.')
            ->currencyDecimalPoint(',')
            ->dateFormat('Y-m-d H:i:s')
            ->filename("purchase_invoice_{$order->getId()}")
            ->seller($seller)
            ->logo(public_path("storage/brand/favicon.png"));
        return $invoice;
    }
}
