<?php 

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors","1");

print("<pre>");
var_dump($_COOKIE);

if (isset($_COOKIE["cookieOne"])){
    echo $_COOKIE["cookieOne"];// "hello world"
}