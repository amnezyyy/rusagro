<?php

namespace App;

class UserRepository
{
    private $connect;
    public function __construct(DatabaseConnection $connect)
    {
        $this -> connect = $connect;
    }

    public function getUserById($id)
    {
        $user = mysqli_query($this -> connect -> getConnection(), "SELECT * FROM `users` WHERE (`id` = '$id')");
        return mysqli_fetch_all($user)[0];
    }
}