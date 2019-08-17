<?php


$a = 1;
$b = 0;


echo 'a = 1 b = 0 <br>';
var_dump($a && $b);
var_dump($a || $b);
var_dump($a xor $b);

$a = 0;
$b = 0;


echo 'a = 0 b = 0 <br>';
var_dump($a && $b);
var_dump($a || $b);
var_dump($a xor $b);

$a = 1;
$b = 1;


echo 'a = 1 b = 1 <br>';
var_dump($a && $b);
var_dump($a || $b);
var_dump($a xor $b);

$a = 1;
$b = 0;

echo 'инверсия a = 1 b = 0 <br>';
var_dump(!$a);
var_dump(!$b);


