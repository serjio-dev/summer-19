<?php

$b = 'Hi';

$a = 1;

$b = &$a;

$a = 2;
$b = 4 + 2;

echo ' Str 1 ' . 'Str 2<br>';

echo 'a = ' . $a . '<br>';
echo 'b = ' . $b . '<br>';
