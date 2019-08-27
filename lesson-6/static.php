<?php


function myStatic ()
{
    static $countSt = 0;
    $count = 0;

    if ($count != 0) {
        $count++;
    } else {
        $count = 1;
    }

    if ($countSt != 0) {
        $countSt++;
    } else {
        $countSt = 1;
    }


    echo 'Call function static: ' . $countSt . '<br>';
    echo 'Call function not static: ' . $count . '<br>';
}


myStatic();
myStatic();
myStatic();
myStatic();
myStatic();
myStatic();