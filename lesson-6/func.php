<?php

function callFun(callable $closure, $a, $b)
{
    $closure($a, $b);
}

$func = function($a, $b) {
    echo 'a = ' . $a . '<br>';
    echo 'b = ' . $b . '<br>';
};

$funcSum = function ($a, $b) {
    echo 'a + b = ' . ($a + $b) . '<br>';
};

$func(2, 4);

var_dump($func);

var_dump(is_callable($func));


callFun($func, 2, 3);
callFun($funcSum, 2, 3);

callFun(function ($a, $b) {
    echo 'a - b = ' . ($a - $b) . '<br>';
}, 2, 3);



