<?php 

 $products = array(
    array(
    "name" => "Red Bull",
    "price" => 2,5
    ),
    array(
    "name" => "Patos",
    "price" => 4
    ),
    array(
    "name" => "Coca Cola",
    "price" => 3
    ),
    array(
    "name" => "Coca Cola",
    "price" => 3,
    )
);

function total_price($products){

$sum = 0;
}
foreach($products as $products){
$sum += $products["price"];
}



?>