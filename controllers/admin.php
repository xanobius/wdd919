<?php
$admin_path = 'controllers/admin/';

$modules = [
    'navigation' => $admin_path . 'navigation.php'
];
$default_module = 'navigation';

if( isset($_REQUEST['module']) && array_key_exists($_REQUEST['module'], $modules)){
    $active_module = $modules[$_REQUEST['module']];
}else{
//    header('Location: http://localhost:8001/index.php');
    $active_module = $modules[$default_module];
}

include($active_module);