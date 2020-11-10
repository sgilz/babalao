<?php
/*
 * @author    Santiago Gil Zapata sgilz@eafit.edu.co
 */
namespace App\Http\Controllers;

use App\Interfaces\Invoice;
use App\Models\Order;

class InvoiceController extends Controller
{
    public function show($order_id)
    {
        $order = Order::find($order_id);
        $invoice_interface = app(Invoice::class);
        $invoice_doc = $invoice_interface->checkIn($order);
        return $invoice_doc->stream();
    }
}
