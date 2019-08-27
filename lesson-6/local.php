<?php

function myFun()
{
    global $nameGlobal;
    $name = 'Function';

    echo 'name = '. $name . '<br>';

    var_dump($nameGlobal);
}

$nameGlobal = 'Script';

myFun();

var_dump($name);
