<?php



 $a = 1;
 var_dump($a);
 $a = 1.1;

 echo gettype($a) . '<br>';

var_dump(is_int($a));
var_dump(is_float($a));

settype($a, 'int');
var_dump($a);

$a = (string) $a;

var_dump($a);

$a = null;


$str = 'Hi';

var_dump($str);

$str = (object) $str;

var_dump($str);

