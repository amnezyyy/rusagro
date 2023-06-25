<?php

namespace App\Libraries\Action\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductCreate
{

    public function __construct(private Request $product){}

    public function heandle()
    {
        $path = 'img/uploads/products_img/'. time() . $this->product->file('img')->getClientOriginalName();
        File::put(storage_path('app/public/' . $path), $this->product->file('img')->getContent());
        Product::create([
            'name'=>$this->product['name'],
            'code'=>$this->product['code'],
            'category'=>$this->product['category'],
            'img'=>$path,
            'des'=>$this->product['des'],
            'price'=>$this->product['price'],
            'visible'=>1,
        ]);
        return redirect('/admin');
    }
}
