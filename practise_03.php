
<style>

*{
    font-family: 'Courier New', Courier, monospace;
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