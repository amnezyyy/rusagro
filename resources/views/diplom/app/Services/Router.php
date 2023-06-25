<?php

namespace App\Services;

class Router
{
    private static $list = [];

    public static function page($uri, $page_name)
    {
        self::$list[] = [
            "uri" => $uri,
            "page" => $page_name
        ];
    }

    public static function enable()
    {
        $query = $_GET['q'];
        foreach (self::$list as $route) {
            if ($route["uri"] === $query) {
                if ($route["post"] === true && $_SERVER["REQUEST_METHOD"] === "POST") {
                    $action = new $route["class"];
                    $method = $route["method"]();
                    $action->$method($_POST);
                    die();
                } else {
                    require_once "/" . $route['page'] . ".php";
                }
            }
        }
    }
}