<h3>日期和時間</h3>
<?php

date_default_timezone_set('Asia/Taipei');
echo date('Y-m-d h:i:s e');

?>
<br><hr><br>
<h3>strtotime</h3>
<?php

echo strtotime('now');
$time = strtotime('now');
echo '<br>';
echo date('Y-m-d H:i:s', $time);

$date1 = '2023-10-24';
$date2 = '2023-11-15';
$days = (strtotime($date2) - strtotime($date1)) / (60*60*24);

echo '<br>'.$date1.'到'.$date2.'差異為:'.$days.'天';

?>

<br><hr><br>
<h2>計算距離自己下一次生日還有幾天</h2>

<?php

function daysToBirthday($birthday){
    $birthday = explode('-', $birthday);
    $birthday = implode('-', ['Y', $birthday[1], $birthday[2]]);
    $bday = date($birthday);
    $today = date('Y-m-d');
    $result = null;

    if(strtotime($bday) >= strtotime($today)) $result = (strtotime($bday) - strtotime($today)) / (60*60*24);
    else{
        $year = 60*60*24*365;
        $result = ((strtotime($bday) + $year) - strtotime($today)) / (60*60*24);
    }

    return $result;
}

$birthday = '1995-02-22';
echo '距離下次生日還有:'.daysToBirthday($birthday).'天';
?>
<br><hr><br>
<h3>利用date()函式的格式化參數，完成以下的日期格式呈現</h3>
<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>

<?php

echo date('Y/m/d').'<br>';

echo date('m月d日 l').'<br>';

$min = date('i');
$sec = date('s');

if($min[0] == '0') $min = substr($min, 1);
if($sec[0] == '0') $sec = substr($sec, 1);
$sec = substr(date('s'), 1);
echo date('Y-m-d H:'.$min.':'.$sec.'').'<br>';

echo date('Y-m-d H:i:s').'<br>';

$w = date('w');
$isWorkday = null;
if($w == '0' || $w == '1') $isWorkday = '假日';
else $isWorkday = '上班日';

echo date('今天是西元Y年m月d日 ').$isWorkday;

?>
<br><hr><br>
<h3>利用迴圈來計算連續五個周一的日期
例:</h3>

<ul>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ul>

<?php

// function fiveMon($date){
//     $today = date('N', $date);
//     $firstMon = null;
//     $days = [];

//     if($today > 1){
//         $diff = 7 - $today;
//         $firstMon = strtotime();
//     }
// }

?>