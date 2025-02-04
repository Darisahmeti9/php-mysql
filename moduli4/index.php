<?php
function findmax($nr1, $nr2){
    if($nr1 > $nr2){
        return $nr1;
    }
    else{
        return $nr2;
    }
}
echo findmax(15,30);


function daris($nrr1){
    if($nrr1%2==0){
        echo "$nrr1 this number is ever";
    }
    else{
        echo "$nrr1 this numer is old";
    }
}

daris(6);

echo "<br>";

$sum = 963475450952943 + 427389494233;

echo $sum;

echo "<br>";

?>