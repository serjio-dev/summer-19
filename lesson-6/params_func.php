<?php

function sum($a, $b = 2, $arr = [], $bool = false)
{
    return $a + $b;
}

function mul($a, $b)
{
    return $a * $b;
}

$a = 10;
$b = 20;

if ($a > $b) {
    $fun = 'sum';
} else {
    $fun = 'mul';
}

$res = $fun($a, $b);
var_dump($res);




function foo() {
    echo "В foo()<br />\n";
}

function bar($arg = '')
{
    echo "В bar(); аргумент был '$arg'.<br />\n";
}

// Функция-обертка для echo
function echoit($string)
{
    echo $string;
}

$func = 'foo';
$func();        // Вызывает функцию foo()

$func = 'bar';
$func('test');  // Вызывает функцию bar()

$func = 'echoit';
$func('test');  // Вызывает функцию echoit()


var_dump(sum(30));
