
<h3>字串取代</h3>
<ul>
    <li>將”aaddw1123”改成”*********”</li>
</ul>

<?php

$string = 'aaddw1123';
$stringRe = preg_replace('/./', '*', $string);

echo '原始字串: '.$string.'<br>替換字串: '.$stringRe;

?>

<br><hr><br>

<h3>字串分割</h3>
<ul>
    <li>將”this,is,a,book”依”,”切割後成為陣列</li>
</ul>

<?php

    $str = 'this,is,a,book';
    $arr = explode(',', $str);
    echo '原始字串:'.$str.'<br>切割後的陣列:<br><pre>';
    print_r($arr);
    echo '</pre>';

?>

<br><hr><br>

<h3>字串組合</h3>
<ul>
    <li>將上例陣列重新組合成“this is a book”</li>
</ul>

<?php


    $str = implode(' ', $arr);
    echo '原始陣列:<br><pre>';
    print_r($arr);
    echo '</pre><br>重組後的字串: '.$str;

?>

<br><hr><br>

<h3>子字串取用</h3>
<ul>
    <li>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</li>
</ul>

<?php

$str = 'The reason why a great man is great is that he resolves to be a great man';
$substr = mb_substr($str, 0, 10).'...';

echo '原始字串: '.$str.'<br>取用字串: '. $substr;

?>

<br><hr><br>
<h3>尋找字串與HTML、css整合應用</h3>
<ul>
    <li>
    給定一個句子,將指定的關鍵字放大
    “學會PHP網頁程式設計,薪水會加倍,工作會好找”
    請將上句中的 “程式設計” 放大字型或變色.
    </li>
</ul>

<style>
    p{
        font-size: 22px;
    }
    .text-red{
        font-size: 32px;
        color: red;
        text-decoration: dashed;
    }
</style>

<?php

    $str = '學會PHP網頁程式設計,薪水會加倍,工作會好找';
    $target = '程式設計';
    $str = str_replace($target, '<span class="text-red">'.$target.'</span>', $str);

    echo '<p>'.$str.'</p>';
?>