<?php

namespace App\Libraries\Validator;

use App\Models\User;
use Illuminate\Support\Facades\Validator;

class RegValidator
{
    public static function validate($user):array
    {
        $errors = Validator::make($user,[
            'name' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:255','min:12', 'max:12', 'unique:'.User::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', 'min:5',]
        ])->errors()->toArray();
        return $errors;
    }
}
