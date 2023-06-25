<?php

namespace App\Libraries\Repositories\User;

use App\Models\User;

class UserRepository
{
    public static function getUserByOrder(int $order)
    {
        return (User::where('id', $order)->first());
    }
}
