<?php 
declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors","1");

define("DD",realpath("../"));
ini_set("session.save_path",DD."/storage/sessions");

session_start();
echo $_SESSION["testing"];

// session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
</head>
<body>
    <h1><a href="about.php">About Page</a></h1>
</body>
</html>
