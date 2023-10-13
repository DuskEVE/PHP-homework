<style>

    body{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
    table{
        border-collapse: collapse;
        border: 2px solid;
        width: 45vw;
        height: 45vh;
        margin: auto;
        text-align: center;
    }
    td{
        border: 2px solid;
    }
    .first{
        background-color: lightsalmon;
    }
    .odd{
        background-color: #ccc;
    }
    .hide{
        border: 2px;
    }

</style>

<h3>9*9 表格</h3><br>

<?php
    $arr = [];

    for($i=1; $i<10; $i++){
        array_push($arr, '<tr>');
        for($j=1; $j<10; $j++){
            $str = $i.' * '.$j.' = '.($i * $j).'</td>';
            if($i % 2 != 0) $str = '<td class="odd">'.$str;
            else $str = '<td>'.$str;
            // if( !($i == 9 && $j == 9)) $str = $str.',';

            // if(strlen($str) == 9) $str = $str."$nbsp$nbsp";
            // else $str = $str."$nbsp";
            array_push($arr, $str);
        }
        array_push($arr, '</tr>');
        // if($i < 9) array_push($arr, '<br>');
    }
    $arr = join("", $arr);
    echo '<table>'.$arr.'</table>';
?>

<br><h3>9*9 交叉表格</h3><br>

<?php

    $arr = [];

    for($i=0; $i<10; $i++){
        array_push($arr, '<tr>');
        for($j=0; $j<10; $j++){
            $str = '';
            
            if($i == 0 && $j == 0) $str = '<td class="first">'.$str.'-';
            else if($i == 0) $str = '<td class="first">'.$str.$j;
            else if($j == 0) $str = '<td class="first">'.$str.$i;
            else{
                if($i % 2 != 0) $str = '<td class="odd">'.$str.($i * $j);
                else $str = '<td>'.$str.($i * $j);
            }

            array_push($arr, $str.'</td>');
        }
        array_push($arr, '</tr>');
    }

    $arr = join("", $arr);
    echo '<table>'.$arr.'</table>';

?>

<br><h3>9*9 交叉表格(顯示一半)</h3><br>

<?php

    $arr = [];

    for($i=0; $i<10; $i++){
        array_push($arr, '<tr>');
        for($j=0; $j<10; $j++){
            $str = '';

            // hide upright table
            if($i < $j && $i != 0){
                $str = '<td class="hide">';
                array_push($arr, $str.'</td>');
                continue;
            }
            
            if($i == 0 && $j == 0) $str = '<td class="first">'.$str.'-';
            else if($i == 0) $str = '<td class="first">'.$str.$j;
            else if($j == 0) $str = '<td class="first">'.$str.$i;
            else{
                if($i % 2 != 0) $str = '<td class="odd">'.$str.($i * $j);
                else $str = '<td>'.$str.($i * $j);
            }

            array_push($arr, $str.'</td>');
        }
        array_push($arr, '</tr>');
    }

    $arr = join("", $arr);
    echo '<table>'.$arr.'</table>';

?>

<br><h3>字元搜尋</h3><br>

<?php

$str = '印出搜尋的目標字母或字串位在該字串中的位置';
$target = '字串';

function searchChar($str, $target){
    $result = [];
    $i = 0;
    $size = mb_strlen($target);
    // $arr = str_split($str);

    while($i < mb_strlen($str) - $size){
        // $s = join('',array_slice($arr, $i, $size));
        $s = mb_substr($str, $i, $size);
        if($s == $target){
            array_push($result, $i+1);
            break;
        }
        $i++;
    }

    if(count($result) == 0) return 'not found any matched substring';
    return 'target string position: '.(join(', ', $result)).'<br>target:'.$target;
}

echo searchChar($str, $target);

?>

<br>