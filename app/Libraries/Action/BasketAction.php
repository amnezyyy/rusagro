<?php

namespace App\Libraries\Action;

use App\Libraries\Repositories\Basket\BasketRep;
use App\Models\Basket;
use App\Models\BasketProduct;

class BasketAction
{
    public function __construct(private array $product, private int $product_id){}

    public function heandle(): string
    {
        $user_id = auth()->user()->id;
        $product_confirm = BasketRep::getProductByBasket($this->product_id, $user_id);
        $basket_confirm = BasketRep::getBasketByUser($user_id);
        if (is_null($basket_confirm)) {
            Basket::create([
                'user_id' => $user_id]);
        }
        if (is_null($product_confirm)){
            BasketProduct::updateOrCreate([
                'basket_id'=>$basket_confirm->id,
                'product_id'=>$this->product_id,
                'count'=>$this->product['count']]);
        } else {
            $product_confirm -> update([
                'count'=>$this->product['count']]);
        }
        return json_encode(true);
    }
}
