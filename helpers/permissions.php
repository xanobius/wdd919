<?php

$array = [

];

function checkPermission($perm){
    if($perm == 'writeEntry' && $_SESSION['role'] == 'admin')return;
    if($perm == 'writeEntry' && $_SESSION['role'] == 'admin')return;
    if($perm == 'writeEntry' && $_SESSION['role'] == 'admin')return;
    if($perm == 'deleteEntry' && $_SESSION['role'] == 'admin')return;

    return false;
}