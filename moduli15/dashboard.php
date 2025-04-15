<?php

include_once('config.php');
$sql = "SELECT * FROM product";
$selectUsers = $conn->prepare($sql);
$selectUsers->execute();
$product_data = $selectProduct->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        table,td,th  {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td,th{
            padding: 10px 20px;
        }
    </style>
</head>
<body>
          

<table>
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
    </thead>
    <tbody>
        <?php
        foreach ($product_data as $product) {
            ?>
            <tr>
                <td><?php  $product['id'] ?>
                <td><?php  $product['title'] ?>
                <td><?php  $product['description'] ?>
                <td><?php  $product['quantity'] ?>
                <td><?php  $product['price'] ?>
                <td> <?php "<a href='update.php?id=$product[id]'>Update</a>" ?></td>
                <td> <?php "<a href='deletePoductctuct.php?>Update</a>" ?></td>
            </tr>
        <?php
        }
        
        ?>
         
    <tbody>
    </table>
           
            
        
        </tbody>
    
   
</body>
</html>