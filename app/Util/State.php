<?php


namespace App\Util;


abstract class State
{
    const SHOPPING_CART = 0;
    const CONFIRMED = 1;
    const SHIPPED = 2;
    const DELIVERED = 3;
}
