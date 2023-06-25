<?php

namespace App;

class BasketRepository
{
    private $connect;

    public function __construct(DatabaseConnection $connect)
    {
        $this->connect = $connect;
    }

    public function getBasketIdByIdUser($user_id)
    {
        $basket = mysqli_query($this->connect->getConnection(), "SELECT * FROM `basket` WHERE (`id_user` = '$user_id')");
        $id_basket = mysqli_fetch_all($basket)[0][0];
        $all_basket = mysqli_query($this->connect->getConnection(), "SELECT * FROM `basket_to_product` WHERE `basket_id` = '$id_basket'");
        return mysqli_fetch_all($all_basket);
    }

    public function getBasketRows($user_id)
    {
        $basket = mysqli_query($this->connect->getConnection(), "SELECT * FROM `basket` WHERE (`id_user` = '$user_id')");
        $id_basket = mysqli_fetch_all($basket)[0][0];
        $rows_basket = mysqli_query($this->connect->getConnection(), "SELECT * FROM `basket_to_product` WHERE `basket_id` = '$id_basket'");
        return mysqli_num_rows($rows_basket);

    }
}
