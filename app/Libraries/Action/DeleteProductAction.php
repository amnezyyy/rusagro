<?php

namespace App\Libraries\Action;
use App\Models\BasketProduct;


class DeleteProductAction
{
    public function __construct(private int $basket_id, private int $product_id){}

    public function heandle():string
    {
        return (BasketProduct::where('basket_id', $this->basket_id)->where('product_id', $this->product_id)->delete());
    }
}
