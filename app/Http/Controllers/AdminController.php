<?php

namespace App\Http\Controllers;

use App\Libraries\Action\Admin\NewsCreate;
use App\Libraries\Action\Admin\NewsDelete;
use App\Libraries\Action\Admin\NewsEdit;
use App\Libraries\Action\Admin\OrderEdit;
use App\Libraries\Action\Admin\ProductCreate;
use App\Libraries\Action\Admin\ProductEdit;
use App\Models\Feed;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $orders = Order::get();
        $news = Feed::get();
        $prods = Product::get();
        return view('admin', compact('orders', 'news', 'prods'));
    }

    public function orderEdit(Request $request, $oder_id)
    {
        $action = new OrderEdit($request->all(), $oder_id);
        return $action->heandle();
    }

    public function newsCreate(Request $request)
    {
        $action = new NewsCreate($request);
        return $action->heandle();
    }

    public function newsEdit(Request $request, $oder_id)
    {
        $action = new NewsEdit($request->all(), $oder_id);
        return $action->heandle();
    }

    public function newsDelete($oder_id)
    {
        $action = new NewsDelete($oder_id);
        return $action->heandle();
    }

    public function productCreate(Request $request)
    {
        $action = new ProductCreate($request);
        return $action->heandle();
    }

    public function productEdit(Request $request, $product_id)
    {
        $action = new ProductEdit($request->all(), $product_id);
        return $action->heandle();
    }

}
