<?php

namespace App\Libraries\Action;

use App\Libraries\Errors\RegErrorMsg;
use App\Libraries\Validator\RegValidator;
use App\Models\Basket;
use App\Models\User;

class RegisterAction
{
    public function __construct(private array $user){}

    public function heandle(): string{

        $errors = RegValidator::validate($this->user);
        if (count($errors) > 0){
            return json_encode(RegErrorMsg::getErrorMsg($errors));
        } else {
            $user = User::create([
                'name'=>$this->user['name'],
                'telephone'=>$this->user['telephone'],
                'email'=>$this->user['email'],
                'password'=>$this->user['password']
            ]);

            Basket::create([
                'user_id'=> $user->id
            ]);
            return json_encode(true);
        }
    }
}
