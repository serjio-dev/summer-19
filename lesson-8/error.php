<?php

echo ini_get('display_errors') . PHP_EOL;
echo ini_get('error_reporting'). PHP_EOL;

$arr = [2, -5, -9, 15, 11, -4, 7, 1, -10];
$sumM = 0;
$sumP = 0;

foreach ($arr as $key => $value){
    if ($value < 0){
        $sumM += $value;
    } else {
        $sumP += $value;
    }
}

echo $sumM . PHP_EOL;
echo $sumP;