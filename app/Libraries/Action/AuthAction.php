<?php

namespace App\Libraries\Action;

use App\Models\User;

class AuthAction
{
    public function __construct(private array $user){}

    public function heandle(): string{
        $user = User::where('telephone',$this->user['telephone'])->where('password',$this->user['password'])->first();
        if (!is_null($user)) {
            auth()->login($user);
            return json_encode(true);
        } else {
            return json_encode(false);
        }
    }
}
