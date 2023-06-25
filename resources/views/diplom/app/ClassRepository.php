<?php

namespace App;

class ClassRepository
{
    private $connect;
    public function __construct(DatabaseConnection $connect)
    {
        $this -> connect = $connect;
    }
    public function getClassById($id)
    {
        $class = mysqli_query($this -> connect -> getConnection(), "SELECT * FROM `class` WHERE (`id` = '$id')");
        return mysqli_fetch_all($class);
    }
}