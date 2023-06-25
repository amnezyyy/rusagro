<?php

namespace App\Libraries\Action;

use App\Models\BasketProduct;

class MinusCountAction
{
    public function __construct(private int $basket_id, private int $product_id){}

    public function heandle():string
    {
        $basket = BasketProduct::where('basket_id', $this->basket_id)->where('product_id', $this->product_id);
        $count = $basket->first()->count;
            if($count > 1) {
                $basket->update(['count' => $count - 1]);
                $result = $basket->first()->count;
            }
        return json_encode($result);
    }
}
