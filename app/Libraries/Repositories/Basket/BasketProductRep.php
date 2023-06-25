<?php

namespace App\Libraries\Repositories\Basket;

use App\Models\BasketProduct;

class BasketProductRep
{
    public static function getProductByBasket($basket_id)
    {
        return BasketProduct::where('basket_id', $basket_id)->get();
    }
}
