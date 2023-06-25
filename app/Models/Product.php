<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\Cache;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function basketProduct()
    {
        return $this->belongsTo(BasketProduct::class, 'product_id', 'id');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category');
    }

}
