<?php
   $server = 'localhost';
   $username = 'root';
   $dbname = 'db';
   $password = '';


try {
    $connection = new PDO("mysql:hos=$server;dbname=$dbname;", $usernamee, $password);
}  catch(Exception $e){
    echo "Smothing went wrong";
}

?>