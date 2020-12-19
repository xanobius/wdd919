<?php

function getLinkFor($page)
{
    $default = 'index.php';
    $routes = [
        'login' => 'index.php?p=login'
    ];
    if (array_key_exists($page, $routes)){
        return $routes[$page];
    }

    return $default;
}