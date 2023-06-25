<?php

namespace App\Libraries\Repositories\Order;

use App\Models\OrderProduct;

class OrderProductRep
{
    public static function getProductByOrder($order_id)
    {
        return OrderProduct::where('order_id', $order_id)->get();
    }
}
