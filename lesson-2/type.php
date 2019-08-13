<?php

$n = NULL;

var_dump($n);

$n = 1;

var_dump($n);

$b = false;


var_dump($b);



unset($b);

var_dump($b);

$f = fopen('add.php', 'r');

var_dump($f);



$fl = 3.14;

var_dump($fl);

$object = new TestClass();

$arr = [1, 2, 3, 'h', $object];

$arr[] = 'new';

var_dump($arr);


$str = 'string';

var_dump($str);


var_dump($object);


class TestClass
{

}













