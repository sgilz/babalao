<?php


namespace App\Util;


abstract class Status
{
    const CONFIRMED = 1;
    const DELIVERED = 4;
    const DISPATCHED = 3;
    const PENDING = 0;
    const PREPARING_ORDER = 2;
}
