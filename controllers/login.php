<?php
/**
 * All the stuff depending session / login
 *
 */


/*
 * Login throttle:
 * If a user enters his password wrong three times in a row,
 * he or she should be banned for x minutes
 * I the person enters the password correct after one or two mistakes,
 * the mistake counter shall be reset.
 *
 */

$login_tries = 3;
$ban_time = 60 * 60; // in seconds
$db_datetime_format = 'Y-m-d H:i:s';

if(isset($_POST['login_try']) ) {
    // valid user?
    include('models/user.php');
    $usr = getUserByEmail($_REQUEST['email']);

    if($usr == false){
            // Return fail message
        die('wrong user');
    }else{
        // is user banned?
        if($usr['banned_at'] != null){
            $banned_at = date_create_from_format($db_datetime_format, $usr['banned_at']);
            $now = new DateTime();
            $interval = $now->getTimestamp() - $banned_at->getTimestamp() ;
            if($interval <= $ban_time){
                die('You are banned. Wait longer');
            }else{
                updateUserField($usr['id'], 'banned_at', null, 's');
                updateUserField($usr['id'], 'login_mistakes', 0, 'i');
                $usr['login_mistakes'] = 0;
            }
        }

        // check password
        if(password_verify($_REQUEST['password'], $usr['password'])){
            // reset mistakes, if there are any
            if($usr['login_mistakes'] != 0) {
                updateUserField($usr['id'], 'login_mistakes', 0, 'i');
            }
            // start session
            die('correct password');
        }else{
            // increment failure counter
            $fails = $usr['login_mistakes'] + 1;
            // check failure counter, ban if needed
            if($fails >= $login_tries){
                updateUserField($usr['id'], 'banned_at', date('Y-m-d H:i:s'), 's');
                die('ban user: ' . date('Y-m-d H:i:s'));
            }else{
                // update user with incremented failures
                updateUserField($usr['id'], 'login_mistakes', $fails, 'i');
                die('mistake counter incremented');
            }
        }
    }
    // login

    // or generate errors
}else{
    switch($_GET['action']){
        case 'logout':
            session_destroy();
            $content = 'Sie wurden ausgeloggt';
//            die('killed');
            break;
        default:

            if($_SESSION['logged_in'] == 1) {
                $content = 'Sie sind bereits eingeloggt';
            }else{
                $page = 'templates/forms/login.php';
            }
    }
}
