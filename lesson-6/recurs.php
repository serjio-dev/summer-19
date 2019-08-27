<?php

$arr = [23, 56, 7, 89, 65];

function pop(array $arr)
{
    static $call = 0;


    if (count($arr)) {

        $val = array_pop($arr);

        echo 'val = ' . $val . ' count = '. count($arr)  .'<br>';

        $call ++;
        echo 'before call = '. $call .' line:'. __LINE__ .'<br>';
        pop($arr);
        echo 'after call = '. $call .' line:'. __LINE__ .'<br>';
        $call--;

    }
}

pop($arr);