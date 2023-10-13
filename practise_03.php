
<style>

*{
    font-family: 'Courier New', Courier, monospace;
    line-height: 10px;
}
.red{
    color: red;
}

</style>

<?php

$n = 5;
$str = '';
$arr = [];

for($i=0; $i<$n; $i++){
    $str = $str.'*';
    array_push($arr, $str.'<br>');
}
echo join('', $arr);

?>

<br><hr><br>

<?php

$n = 5;
$str = '';
$arr = [];

for($i=$n; $i>0; $i--){
    $str = str_repeat('*', $i);
    array_push($arr, $str.'<br>');
}
echo join('', $arr);

?>

<br><hr><br>

<?php

$n = 5;
$str = '';
$arr = [];

for($i=1; $i<=$n; $i++){
    if($i == 1) $str = '*';
    else $str = '*'.$str.'*';
    // $space = '';
    // for($j=$n; $j>$i; $j--) $space = $space.' ';
    $space = str_repeat(' ', $n - $i);
    array_push($arr, $space.$str.$space.'<br>');
}
echo '<pre>'.(join('', $arr)).'</pre>';

?>

<br><hr><br>

<?php

$n = 5;
$str = '';
$arr = [];

for($i=0; $i<$n; $i++){
    if($i == 0) $str = str_repeat('*', 2 * $n + 1);
    
    $str = substr($str, 1, strlen($str)-2);
    $space = str_repeat(' ', $i);
    array_push($arr, $space.$str.$space.'<br>');
}
echo '<pre>'.(join('', $arr)).'</pre>';

?>

<br><hr><br>

<?php

$n = 10;
$str = '';
$arr = [];

for($i=0; $i<$n; $i++){
    if($i < floor($n / 2)){
        if($i == 0) $str = '*';
        else $str = '*'.$str.'*';

        $space = str_repeat(' ', floor($n / 2) - $i - 1);
        array_push($arr, $space.$str.$space.'<br>');
    }
    else{
        if($str == '') break;

        $str = substr($str, 1, strlen($str)-2);
        $space = str_repeat(' ', $i - floor($n / 2) + 1);
        array_push($arr, $space.$str.$space.'<br>');
    }
}
echo '<pre>'.(join('', $arr)).'</pre>';

?>

<br><hr><br>

<?php

$n = 10;
$arr = [];

// for($i=0; $i<$n; $i++){
//     $str = '';
//     for($j=0; $j<$n; $j++){
//         if($i == 0 || $j ==0 || $i == $n-1 || $j == $n-1) $str = $str.'*';
//         else $str = $str.' ';
//     }
//     array_push($arr, $str.'<br>');
// }
// echo '<pre>'.(join('', $arr)).'</pre>';

for($i=0; $i<$n; $i++){
    if($i == 0 || $i == $n-1) $str = str_repeat('*', $n);
    else $str = '*'.(str_repeat(' ', $n-2)).'*';
    array_push($arr, $str.'<br>');
}
echo '<pre>'.(join('', $arr)).'</pre>';

?>

<br><hr><br>

<?php

$n = 10;
$arr = [];

for($i=0; $i<$n; $i++){
    $str = '';
    for($j=0; $j<$n; $j++){
        if($i == 0 || $j ==0 || $i == $n-1 || $j == $n-1 ||
            $i == $j || $n-1-$i == $j) $str = $str.'*';
        else $str = $str.' ';
    }
    array_push($arr, $str.'<br>');
}
echo '<pre>'.(join('', $arr)).'</pre>';


?>

<br><hr><br>

<?php

$n = 10;
$arr = [];

for($i=0; $i<$n; $i++){
    $str = '';
    for($j=0; $j<$n; $j++){
        if($i == 0 || $j ==0 || $i == $n-1 || $j == $n-1) $str = $str.'<td>*</td>';
        else if($i == $j || $n-1-$i == $j) $str = $str.'<td class="red">*</td>';
        else $str = $str.'<td></td>';
    }
    array_push($arr, '<tr>'.$str.'</tr>');
}
echo '<table>'.(join('', $arr)).'</table>';


?>