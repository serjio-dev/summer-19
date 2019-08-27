<?php


function fun($a)
{
    echo 'call - ' . __FUNCTION__ . ' with paramiters: '. $a .' <br>';
}

function fun1()
{
    $args = func_get_args();
    $num = func_num_args();
    var_dump($args);
    var_dump($num);

    echo 'call - ' . __FUNCTION__ . '<br>';
}

function fun2()
{
    $num = func_num_args();

    while ($num) {
        $num--;
        var_dump(func_get_arg($num));
    }

    echo 'call - ' . __FUNCTION__ . '<br>';
}

function getReturn(int $num)
{
    if ($num < 10) {
        return $num * 10;
    }

    return $num * 2;
}