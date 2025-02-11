<?php


$lion = array(
    array("Rusia", "China", 20),
    array("England", "Franch", 15),
    array("Germany", "Italy", 20),

);

echo $lion[0][0].  "origin:" .$lion[0][1] . ", Life Span:" .$lion[0][2]. "<br>";
echo $lion[1][0].  "origin:" .$lion[1][1] . ", Life Span:" .$lion[2][2]. "<br>";
echo $lion[2][0].  "origin:" .$lion[2][1] . ", Life Span:" .$lion[2][2]. "<br>";


 for($row=0; $row<3;$row++){
    echo "<p><b>Row number $row </br> </p>";
    echo "<ul>";
    for($col=0; $col<3;$col++){
        echo "<li>". $students[$row][$col] . "</li>";

    }

    echo "</ul>";
 }

 $arrays = array{
    array(1,2,3),
    array(1,2,3),
    array(1,2,3),

 };

 for($i=0,$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo "Array: $i Element: $j <br>";
    }
 }


 $grades = array(
     "math" => "30",
     "Art" => "5",
     "History" => "4",
     "music" => "5",
 );

 foreach($grades as $key => $value) {
    echo "Subject:" .$key . ", Grade:" . $value;
    echo "<br>";
 }
?>