<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors", "1");

$global = "global";

$arrowFunction = fn(string $name): string => "Hello ! $name and $global"; //no need use keyword bcz arrow fn is global scope;
echo $arrowFunction("mgmg");

$myArr = [1, 2, 3, 4, 5, 6, 6, 7, 8, 923, 34];
$res = array_filter($myArr, fn($arr) => $arr % 2 == 0);
print "<pre>";
print_r($res);

