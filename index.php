<?php
// Base system
include('config.php');
include('database.php');

// Database functions
include('database/categories.php');

session_start();

$css_head = [
    'assets/css/bulma.css'
];

// Was soll gemacht werden
// 1. Seite aussuchen. In Parameter p gespeicher
if(isset($_GET['p']) && $_GET['p'] != ''){
    if($_GET['p'] == 'login'){
        include('controllers/login.php');
    }
}


// Seite ist bereit
require 'templates/layout.php';

















//require_once('config.php');
//require_once('database.php');

// require_once('helpers/routes.php');
// Decide, what we have to do

// $page = 'templates/forms/login.php';

/*if(isset($_GET['p'])){
    if($_GET['p'] == 'login'){
        $page = 'templates/forms/login.php';
    }
} */








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