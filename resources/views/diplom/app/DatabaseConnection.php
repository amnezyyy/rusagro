<?php

namespace App;

class DatabaseConnection
{
    public function getConnection()
    {
        return mysqli_connect('127.0.0.1','amnezyyy','8912','diplom');
    }
}