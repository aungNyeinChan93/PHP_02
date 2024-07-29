<?php 
declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors","1");

define("DD",realpath("../"));
ini_set("session.save_path",DD."/storage/sessions");

session_start();
echo session_id()."<br>";
// usage session 
echo $_SESSION["testing"];
echo $_SESSION["key2"];
echo $_SESSION["key3"][4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP info</title>
</head>
<body>
    <h1><a href="phpInfo.php">PHP Info</a></h1>
</body>
</html>

