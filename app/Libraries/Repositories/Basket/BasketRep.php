<?php

namespace App\Libraries\Repositories\Basket;

use App\Models\Basket;
use App\Models\BasketProduct;

class BasketRep
{
    public static function getBasketByUser(int $user_id)
    {
        return Basket::where('user_id', $user_id)->first();
    }

    public static function getProductByBasket(int $product_id, int $user_id)
    {
        $basket_id = Basket::where('user_id', $user_id)->first();
        return (BasketProduct::where('basket_id', $basket_id->id)->where('product_id', $product_id)->first());
    }
}
