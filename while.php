<?php

$sum = 0;
$i = 1;

while($i <= 100){
    echo "<br>當 i=".$i."時,sum+i的結果為:<br>".$sum."+".$i." = ".($sum += $i)."<br>";
    $i++;
}

echo "1加到100為: ".$sum;