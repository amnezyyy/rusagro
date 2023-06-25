<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];

    public function basket()
    {
        return $this->hasOne(Basket::class, 'user_id','id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'user_id','id');
    }
}
