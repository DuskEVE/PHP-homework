<style>

    table, tr, td{
        border: 2px solid;
        border-collapse: collapse;
    }
    td{
        width: 60px;
        height: 40px;
        text-align: center;
    }

</style>

<?php

$array = [5, 8, 1, 0, 6, 7];

echo '<pre>';
print_r($array);
echo '</pre>';

sort($array);

echo '<pre>';
print_r($array);
echo '</pre>';

rsort($array);

echo '<pre>';
print_r($array);
echo '</pre>';

?>

<br><hr><br>

<?php

    $students = [
        'class'=>['name', '國文', '英文', '數學', '地理', '歷史'],
        'judy'=>['judy', 95, 64, 70, 90, 84],
        'amo'=>['amo', 88, 78, 54, 81, 71],
        'john'=>['john', 45, 60, 68, 70, 62],
        'peter'=>['peter', 59, 32, 77, 54, 42],
        'hebh'=>['hebh', 71, 62, 80, 62, 64],
    ];
    $result = [];
    $keys = array_keys($students);

    for($i=0; $i<count($students); $i++){
        $key = $keys[$i];
        array_push($result, '<tr>');
        
        for($j=0; $j<count($students[$key]); $j++){
            array_push($result, '<td>'.$students[$key][$j].'</td>');
        }
        array_push($result, '</tr>');
    }

    echo '<table>'.(join($result)).'</table>';

?>

<br><hr><br>

<?php

$mTable = [];

for($i=1; $i<=9; $i++){
    array_push($mTable, '<tr>');

    for($j=1; $j<=9; $j++){
        array_push($mTable, '<td>'.$i.'*'.$j.' = '.($i * $j).'</td>');
    }

    array_push($mTable, '</tr>');
}

echo '<table>'.(join($mTable)).'</table>';

?>

<br><hr><br>

<h3>威力彩電腦選號，號碼不重複(使用while迴圈)</h3>
<ul>
    <li>使用亂數函式rand($a,$b)來產生號碼</li>
    <li>將產生的號碼順序存入陣列中</li>
    <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
    <li>完成選號後將陣列內容印出</li>
</ul>

<?php

function randomNum(){
    $nums = [];

    while(count($nums) < 6){
        $num = rand(1, 38);

        if(!in_array($num, $nums)) array_push($nums, $num);
    }

    return (implode(', ', $nums));
}

echo randomNum();

?>
