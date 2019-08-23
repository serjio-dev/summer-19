<?php


$arr = [];

if ($arr) {
    echo 'Массив не пустой! <br>';
} else {
    echo 'Массив пустой! <br>';
}

echo ' <br> --------------elseif--------------<br>';


if ($arr) {
    echo 'Массив не пустой! <br>';
} elseif(isset($arr)) {
    echo 'Массив пустой, но переменная обьявлена! <br>';
} elseif($arr !== null) {
    echo 'переменная равна null! <br>';
} else {
    echo 'Массив пустой! <br>';
}

//тернартый
$bool = $arr ? 'Массив не пустой!' : 'Массив пустой!';
var_dump($bool);

//бинарный
$str = 'string';
$bool2 = $str ?: 'string - false';

$str = null;
$bool3 = $str ?: 'string - false';

var_dump($bool2);
var_dump($bool3);