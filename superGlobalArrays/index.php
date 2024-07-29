<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors", "1");

// phpinfo();
print (" <pre>");
print_r($GLOBALS);

var_dump($_GET);
/*
http://localhost:8000/index.php?test=12&texst2=123213&name=aung%20nyein%20chan
array(3) {
  ["test"]=>
  string(2) "12"
  ["texst2"]=>
  string(6) "123213"
  ["name"]=>
  string(15) "aung nyein chan"
}
*/
