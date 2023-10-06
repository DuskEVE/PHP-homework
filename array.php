<?php

$a = [];

$a[] = 10;
$a[] = 20;;
$a[] = '泰山';
$a[] = '新莊';

echo '<pre>';
print_r($a);
echo '</pre><br>';
echo $a[0];

echo '<br><hr>';

$me = ['name'=>'DuskEVE', 'school'=>'聯合大學', 'phone'=>'0926259270', 'bloodType'=>'A'];
$title = ['name'=>'姓名:', 'school'=>'學校:', 'phone'=>'電話:', 'bloodType'=>'血型:'];
$keys = ['name', 'school', 'phone', 'bloodType'];

for($i=0; $i<count($me); $i++){
    $key = $keys[$i];
    echo $title[$key].$me[$key].'<br>';
}

echo '<br><hr>';

$me['interest'] = ['pc game', 'still pc game', 'more pc game'];

echo '興趣:<br>';
for($i=0; $i<count($me['interest']); $i++){
    echo $me['interest'][$i].'<br>';
}

?>