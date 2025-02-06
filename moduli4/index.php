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




$students=["Daris","Anik","Andi","Shpat"];
$count= count($students);

for($i=0; $i< $count; $i++){
    $students[$i];
}

echo "<br>";

array_push($students , 'Andi');

print_r($students);

array_unshift($students, 'Anik');

print_r($students);

array_pop($students);

print_r($students);

array_shift($students);

print_r($students);

$sport_slice= array_slice($students, 2);



$moshat=[16,14,13,15,16,14,15];

$shuma=array_sum($moshat);

$count_moshat = count($moshat);

$mesatarja = $shuma/$count_moshat;
echo "<br>";
echo $mesatarja;
?>