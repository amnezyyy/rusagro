<?php

namespace App\Libraries\Action\Admin;

use App\Models\Product;

class ProductEdit
{
    public function __construct(private array $product, private int $product_id){}

    public function heandle()
    {
        Product::where('id', $this->product_id)->update([
            'name' => $this->product['name'],
            'code' => $this->product['code'],
            'des' => $this->product['des'],
            'price' => $this->product['price'],
            'visible' => isset($this->product['visible'])
        ]);
        return redirect('/admin');
    }
}
