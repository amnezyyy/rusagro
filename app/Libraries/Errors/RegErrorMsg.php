<?php

namespace App\Libraries\Errors;

class RegErrorMsg
{
    const error_message = [
        'telephone' => [
            'The telephone must be at least 12 characters.' => 'Неверный формат номера телефона!',
            'The telephone must not be greater than 12 characters.' => 'Неверный формат номера телефона!',
            'The telephone has already been taken.' => 'Такой номер телефона уже зарегистрирован!',
            ],
        'email' => [
            'The email has already been taken.' => 'Такой email уже существует!',
            ],
        'password' => [
            'The password must be at least 5 characters.' => 'Пароль слишком короткий!',
            'The password confirmation does not match.' => 'Пароли не совпадают!'
            ],
        ];
    public static function getErrorMsg(array $errors)
    {
        foreach ($errors as $key => $error) {
            if (array_key_exists($key, self::error_message)) {
                return $error_input = self::error_message[$key][$error[0]];
            }
        }
    }
}
