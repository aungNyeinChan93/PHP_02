<?php 
declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors","1");

define("DD",realpath("../"));
ini_set("session.save_path",DD."/storage/sessions");

// create_id generate!
session_start();
var_dump(session_id());

// session key~val creator
$_SESSION["testing"] = "Session test!<br>";
$_SESSION["key2"] = "Hello World<br>";
$_SESSION["key3"] = [1,2,3,4,5,6];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
</head>
<body>
    <h1><a href="page.php">GO TO PAGE</a></h1>
</body>
</html>