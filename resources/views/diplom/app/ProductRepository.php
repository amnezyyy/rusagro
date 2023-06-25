<?php

namespace App;

class ProductRepository

{
    private $connect;
    public function __construct(DatabaseConnection $connect)
    {
        $this -> connect = $connect;
    }

    public function getProductById($id)
    {
        $product = mysqli_query($this -> connect -> getConnection(), "SELECT * FROM `product` WHERE (`id` = '$id')");
        return mysqli_fetch_all($product)[0];
    }

    public function getProductByClass($class)
    {
        $all_class = mysqli_query($this -> connect -> getConnection(), "SELECT * FROM `product` WHERE (`class` = '$class')");
        $class = mysqli_fetch_all($all_class);
        return $class;
    }

    public function getAllProduct()
    {
        $product = mysqli_query($this -> connect -> getConnection(), "SELECT * FROM `product`");
        return mysqli_fetch_all($product);
    }
}


