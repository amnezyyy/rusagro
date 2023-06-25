<?php

namespace App\Http\Controllers;

use App\Libraries\Action\OrderAction;
use App\Libraries\Repositories\Basket\BasketProductRep;
use App\Libraries\Repositories\Basket\BasketRep;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(){
        $user = auth()->user();
        $basket_id = BasketRep::getBasketByUser($user->id)->id;
        $basketProducts = BasketProductRep::getProductByBasket($basket_id);
        return view('order', compact('basket_id', 'user', 'basketProducts'));
    }

    public function makeOrder(Request $request, $count){
        $action = new OrderAction($request->all(), $count);
        return $action->heandle();
    }
}
