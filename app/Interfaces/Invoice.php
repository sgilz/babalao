<?php
/*
 * @author    Santiago Gil Zapata sgilz@eafit.edu.co
 */
namespace App\Interfaces;
use App\Models\Order;

interface Invoice
{
    public function checkIn(Order $order);
}
