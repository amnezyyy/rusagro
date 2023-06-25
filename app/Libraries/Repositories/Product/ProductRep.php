<?php

namespace App\Libraries\Repositories\Product;

use App\Models\Product;

class ProductRep
{
    public static function getProductById($product_id)
    {
        return Product::where('id', $product_id)->first();
    }

}
