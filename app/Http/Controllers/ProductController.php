<?php

namespace App\Http\Controllers;

use App\Libraries\Action\BasketAction;
use App\Libraries\Action\DeleteProductAction;
use App\Libraries\Action\PlusCountAction;
use App\Libraries\Action\MinusCountAction;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function basketProduct(Request $request, $id)
    {
        $action = new BasketAction($request->all(), $id);
        return $action->heandle();
    }

    public function plusCount($basket_id, $product_id)
    {
        $action = new PlusCountAction($basket_id, $product_id);
        return $action->heandle();
    }

    public function minusCount($basket_id, $product_id)
    {
        $action = new MinusCountAction($basket_id, $product_id);
        return $action->heandle();
    }

    public function deleteProduct($basket_id, $product_id)
    {
        $action = new DeleteProductAction($basket_id, $product_id);
        return $action->heandle();
    }

}
