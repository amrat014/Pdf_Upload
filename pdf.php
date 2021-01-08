<?php

$file_name = date("U").".pdf"; //name of your file
$server_path = "uploads/"; //server path to folder
$web_path = "YOUR SERVER PATH"; //web path to folder

$file = $server_path.$file_name;
file_put_contents($file,"");

$fp = fopen("php://input", 'r');
while ($buffer =  fread($fp, 8192)) {
    file_put_contents($file,$buffer,FILE_APPEND | LOCK_EX);
}

echo $web_path.$file_name;

?>