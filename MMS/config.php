<?php

$localhost = 'localhost';
$dbname = 'mms';
$user = 'root';
$password = '';

try{
    $conn = new PDO("mysql:host=$localhost;dbname=$dbname;", $user, $password);
    echo 'connected';
}catch(PDOException $e){
    echo "Error" . $e->getMessage();
}


?>