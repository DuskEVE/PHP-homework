<?php

function isLeap($year){
    if(($year%4 == 0 && $year%100 != 0) || ($year%100 == 0 && $year%400 == 0)) return true;
    return false;
}

$year = 2000;
if(isLeap($year)) echo $year.'年是閏年';
else echo $year.'年是平年';

?>