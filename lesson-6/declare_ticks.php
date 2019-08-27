<?php
declare(encoding='UTF-8');

function myTicks()
{
    echo 'Call tick <br>';
}


declare(ticks=3) {
    $i = 10;
    while ($i) {
        echo 'i = ' . $i . '<br>';
        $i--;
    }
};

$a = 1;
$a++;

echo 'a = ' . $a . '<br>';