<?php


$a = 16;
$b = 12;

if ($a > $b) echo 'a больше, чем b<br>';

if ($a) {
    echo 'значение a, приведенное к булевому типу - TRUE<br>';
    echo 'Тип и значение a:';
    var_dump ($a);
}

$str = '';

if (empty($str)) {
    echo 'if for $str <br>';
}

if (isset($str)) {
    echo ' isset if for $str <br>';
}

$arr = [];

if (empty($arr)) {
    echo 'if for $arr <br>';
}

if (isset($arr)) {
    echo ' isset if for $arr <br>';
}