<?php

namespace App\Libraries\Repositories\Order;

use App\Models\Order;

class OrderRepository
{
    public static function getOrderByUser($user_id)
    {
        return Order::where('user_id', $user_id)->get();
    }
}
