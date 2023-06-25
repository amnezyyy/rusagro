<?php

namespace App\Http\Controllers;

use App\Libraries\Repositories\Basket\BasketProductRep;
use App\Libraries\Repositories\Basket\BasketRep;
use App\Libraries\Repositories\Order\OrderRepository;
use App\Models\Basket;
use App\Models\BasketProduct;
use App\Models\Category;
use App\Models\Feed;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function news(){
        return view('news');
    }

    public function oneNews($id){
        $one_news = Feed::where('id', $id)->first();
        return view('one_news', compact('one_news'));
    }

    public function category(){
        $categories = Category::get();
        return view('category', compact('categories'));
    }

    public function catalog($code){
        $products = Product::where('category', Category::where('code',$code)->first()->id)->get();
        return view('catalog', compact('products'));
    }

    public function product($category_code ,$code){
        $category = Category::where('code', $category_code)->first();
        $product = Product::where('code', $code)->first();
        return view('product', compact('product', 'category'));
    }

    public function company(){
        return view('company');
    }

    public function about(){
        return view('about');
    }

    public function profile(){
        $user = auth()->user();
        $orders = OrderRepository::getOrderByUser($user->id);
        return view('profile', compact('user', 'orders'));
    }

    public function basket(){
        $user_id = auth()->user()->id;
        $basket_id = BasketRep::getBasketByUser($user_id)->id;
        $basketProducts = BasketProductRep::getProductByBasket($basket_id);
        return view('basket', compact('basketProducts', 'basket_id'));
    }
}
