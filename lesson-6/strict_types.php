<?php
declare(strict_types=1);

function myFun (int $int, float $f, string $str, array $arr)
{
    var_dump($int);
    var_dump($f);
    var_dump($str);
    var_dump($arr);
}


myFun(1, 10,'1.9', []);
