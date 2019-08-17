<?php

$a = 1;
$b = '1';
$c = 1;
$d = 0;
$bool = true;

echo ' равенство --------------<br>';
var_dump($a == $b);
var_dump($a == $bool);
var_dump($a === $c);

echo '--------------<br>';
var_dump($a === $bool);
var_dump($a === $b);
var_dump($a === $d);


echo ' неравенство --------------<br>';
var_dump($a != $b);
var_dump($a != $bool);
var_dump($a !== $c);

echo '--------------<br>';
var_dump($a !== $bool);
var_dump($a !== $b);
var_dump($a !== $d);

echo ' 2 неравенство --------------<br>';
var_dump(!($a == $b));
var_dump(!($a == $bool));
var_dump(!($a === $c));

echo '--------------<br>';
var_dump(!($a === $bool));
var_dump(!($a === $b));
var_dump(!($a === $d));