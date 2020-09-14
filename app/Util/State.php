<?php


namespace App\Util;


abstract class State
{
    const PENDING = 0;
    const CONFIRMED = 1;
    const PREPARING_ORDER = 2;
    const DISPATCHED = 3;
    const DELIVERED = 4;
}
