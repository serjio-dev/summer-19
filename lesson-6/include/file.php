<?php


echo 'Code before return<br>';
$a = 1;
$a++;

if ($a > 10) {
    return $a;
}

$a += 10;

if ($a > 10) {
    return $a;
}

echo 'Code after return<br>';
