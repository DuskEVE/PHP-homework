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

    $student = [
        'class'=>['name', '國文', '英文', '數學', '地理', '歷史'],
        'judy'=>['judy', 95, 64, 70, 90, 84],
        'amo'=>['amo', 88, 78, 54, 81, 71],
        'john'=>['john', 45, 60, 68, 70, 62],
        'peter'=>['peter', 59, 32, 77, 54, 42],
        'hebh'=>['hebh', 71, 62, 80, 62, 64],
    ];
    $result = [];
    $keys = array_keys($student);

    for($i=0; $i<count($student); $i++){
        $key = $keys[$i];
        array_push($result, '<tr>');
        
        for($j=0; $j<count($student[$key]); $j++){
            array_push($result, '<td>'.$student[$key][$j].'</td>');
        }
        array_push($result, '</tr>');
    }

    echo '<table border = 2px>'.(join($result)).'</table>';

?>