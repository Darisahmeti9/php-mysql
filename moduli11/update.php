<?php

include_once('config.php');


$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE ID =:id";

$prep = $conn->prepare($sql);

$prep->bindParam(':id'  , $id);

$prep->execute();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<from action="" method="POST">
    <input type="hidden" name="id">
</body>
</html>