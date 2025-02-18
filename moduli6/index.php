<?php


$my_file = fopen("file1.txt","w");


fclose($my_file);

$filename = "ds.txt";

$file = fopen($filename, "r");

$size= filesize($filename);

$my_filedata = fread($file,$size);
echo $my_filedata . "<br>";

fclose($file);

$my_file = fopen("example.txt", "r");

while(!feof($my_file)) {
    echo fgets($my_file). "<br>";
}

$my_file = fopen('file1. txt', "w");

$text = 'computer programming';

fwrite($my_file, 'Data test 1');

$my_file = fopen ('data.text' , w+);

$my_file = fopen ('data.text' , a++);

fwrite($my_file, 'Data test 2');

?>