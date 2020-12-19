<?php

// Decide, what we have to do

// $page = 'templates/forms/login.php';

require 'templates/layout.php';
























/**
 * Infos for later use below
 */




/*
$path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
$elements = explode('/', $path);                // Split path on slashes

// var_dump($elements);

if(empty($elements[0])) {                       // No path elements means home
    ShowHomepage();
} else switch(array_shift($elements))             // Pop off first item and switch
{
    case 'Some-text-goes-here':
        ShowPicture($elements); // passes rest of parameters to internal function
        break;
    case 'more':
        ...
    default:
        header('HTTP/1.1 404 Not Found');
        Show404Error();
}*/