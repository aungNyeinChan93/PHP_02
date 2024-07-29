<?php 

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors","1");

$cookieName = "cookieOne"; //key
$cookieValue = "hello world"; //value
$expire = time()+3600;
$path = "/";
$domian = "localhost";
$secure = false;
$httpOnly = true;

$my_cookie = setcookie($cookieName,$cookieValue,$expire,$path,$domian,$secure,$httpOnly);

if($my_cookie){
    echo "<h1>Cookie is set</h1>";
}else{
    echo "<h1>something wrong</h1>";
}