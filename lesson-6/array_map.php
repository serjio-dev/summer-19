<?php

$arr = [1, 3, 5];

$number = 4;

$resArr = array_map(function ($item) use ($number) {
    return ($item * $item) + $number;
}, $arr);

var_dump($resArr);

$arrFilter = array_filter($arr, function ($item) use ($number) {
    return $item > $number;
});

var_dump($arrFilter);

