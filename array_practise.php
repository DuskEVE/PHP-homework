
<h3>找出五百年內的閏年</h3>

<?php

function isLeap($year){
    if(($year%4 == 0 && $year%100 != 0) || ($year%100 == 0 && $year%400 == 0)) return true;
    return false;
}

$year = 2023;
$leapYears = [];

while($year < 2523){
    if(isLeap($year)) array_push($leapYears, $year);
    $year++;
}
$count = count($leapYears);

echo '500年內的閏年有: '.implode(', ', $leapYears).'<br>總共有: '.$count.'年';

?>

<br><hr><br>

<h3>已知西元1024年為甲子年,請設計一支程式,可以接受任一西元年份,輸出對應的天干地支的年別(利用迴圈)</h3>
<ul>
    <li>天干：甲乙丙丁戊己庚辛壬癸</li>
    <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
    <li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
</ul>

<?php

function skyLand($year){
    $sky = ['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
    $land = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
    $indexS = null;
    $indexL = null;

    if($year == 1024){
        $indexS = 0;
        $indexL = 0;
    }
    else if($year > 1024){
        $diff = $year - 1024;
        $indexS = $diff % count($sky);
        $indexL = $diff % count($land);
    }
    else{
        $diff = 1023 - $year;
        $indexS = count($sky) - 1 - ($diff % count($sky));
        $indexL = count($land) - 1 - ($diff % count($land));
    }

    return $sky[$indexS].$land[$indexL];
}

$y = 908;
echo '西元'.$y.'年為: '.skyLand($y).' 年';

?>

<br><hr><br>

<h3>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h3>

<?php

    function arrRev($arr){
        for($i=0; $i<floor(count($arr) / 2); $i++){
            $temp = $arr[$i];
            $arr[$i] = $arr[count($arr) - 1 - $i];
            $arr[count($arr) - 1 - $i] = $temp;
        }

        return $arr;
    }

    $arr = [1,2,3,4,5,6];
    echo '原始陣列: '.implode(', ',$arr).'<br>反轉後的陣列: '.implode(', ', arrRev($arr));

?>