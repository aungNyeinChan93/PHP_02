<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errrors", "1");

print ("<pre>");
define("DD", realpath("../"));
echo sys_get_temp_dir() . "<br>";
echo php_ini_loaded_file() . "<br>";

ob_start();
require DD . "/templates/main.php";
$html = ob_get_clean();


if (isset($_FILES["file"])) {
    var_dump($_FILES);
    $fileName = $_FILES["file"]["name"];
    $file_Tmp = $_FILES["file"]["tmp_name"];
    $file_Size = $_FILES["file"]["size"];
    $file_Type = $_FILES["file"]["type"];
    $file_Full_path = $_FILES["file"]["full_path"];
    $file_Error = $_FILES["file"]["error"];
    var_dump($fileName, $file_Tmp, $file_Size, $file_Type, $file_Full_path, $file_Error);
    $exp = explode(".", $fileName);
    $file_Ext = end($exp); // explode() => string to array [[dsfasdf],[png]]
    var_dump($file_Ext);   // take last array;
    $upload_Dir = DD . "/public/uploads/";

    if (checkMimeFileType($file_Tmp)) {
        if (is_uploaded_file($file_Tmp)) {
            echo "files upload is success to tmp! <br>";
            $new_File = md5(time() . $fileName) . "." . $file_Ext;
            $destPath = $upload_Dir . $new_File;
            if (move_uploaded_file($file_Tmp, $destPath)) {
                echo "Files is already saved ! <br> ";
            } else {
                echo "Error<br>";
            }
        }
    } else {
        echo "files type not allowed! <br>";
    }
} else {
    echo $html;
}
function checkMimeFileType(string $files): bool
{
    $allowedFilesType = ["image/jpeg", "image/png", "image/gif","application/pdf"];
    if (in_array(mime_content_type($files), $allowedFilesType)) {
        return true;
    }
    return false;
}
