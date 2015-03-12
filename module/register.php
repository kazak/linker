<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 12.03.15
 * Time: 17:10
 */

/**
 * $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
 */
// подключаемся к базе
include ("../config/bd.php");
include ("../classes/User.php");

switch($_POST['control']){
    case 'auth':
        User::AuthUser($_POST['email'], $_POST['pass']);
        break;
    case 'reg':
        User::RegUser($_POST);
        break;
    default:
        echo("Fatal error - none controller");
}

