<?php

$sum = 0;

for($i=1; $i<=100; $i++){
    $sum += $i;
    // echo "<br>當 i=".$i."時,sum+i的結果為:<br>".$sum."+".$i." = ".($sum += $i)."<br>";
}

echo '1加到100為: '.$sum.'<br>';
?>

<h1>迴圈練習</h1><br>
<h3>使用for迴圈來產生以下的數列</h3><br>
<ul>
    <li>1,3,5,7,9...n</li>
    <li>10,20,30,40,50,60...n</li>
    <li>3,5,7,11,13,17...97</li>
</ul>
<br>

<?php
$n=100;

for($i=1; $i<=$n; $i++){
    if($i == $n) echo $i;
    else echo $i.', ';
}
echo '<br><hr>';

for($i=1; $i<=$n; $i++){
    if($i == $n) echo ($i*10);
    else echo ($i*10).', ';
}
echo '<br><hr>';

$count = 0;
$arr = [];
for($i=3; $i<=$n; $i++){
    $check = true;

    for($j=floor($i/2); $j>1; $j--){
        $count++;

        if($i % $j == 0){
            $check = false;
            break;
        }
    }

    if($check) array_push($arr, $i);
    // if($check)echo $i.', ';
}
echo join(', ', $arr);
echo '<br>一共執行了'.$count.'次';

?>