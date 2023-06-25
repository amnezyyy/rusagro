<?php

namespace App;

class NewsRepository
{
    private $connect;
    public function __construct(DatabaseConnection $connect)
    {
        $this -> connect = $connect;
    }

    public function getAllNews()
    {
        $new = mysqli_query($this -> connect -> getConnection(), "SELECT * FROM `feeds`");
        return mysqli_fetch_all($new);
    }

    public function getNewsById($id)
    {
        $new = mysqli_query($this -> connect -> getConnection(), "SELECT * FROM `feeds` WHERE (`id` = '$id')");
        return mysqli_fetch_all($new)[0];
    }
}