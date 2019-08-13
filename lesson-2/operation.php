<?php


$a = 1;

++$a;


echo 'a = ' . $a . '<br>';

$b = !$a;

echo 'b = ' . (int)$b . '<br>';

var_dump($b);


$c = $a + $b;


if ($b) {
    $d = 'не пустое';
} else {
    $d = 'пустое';
}

$d = $b ? 'не пустое' : 'пустое';

echo 'd = ' . $d . '<br>';