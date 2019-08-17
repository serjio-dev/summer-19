<?php

$a = 1.23456789;
$b = 1.23456780;

$epsilon = 0.000000001;

var_dump(abs($a - $b));

if (abs($a - $b) < $epsilon) {
    echo '1 true <br>';
} else {
    echo '1 false <br>';
}

$epsilon = 0.0001;

if (abs($a - $b) < $epsilon) {
    echo '2 true <br>';
} else {
    echo '2 false <br>';
}

if ($a > $b) {
    echo '3 true <br>';
} else {
    echo '3 false <br>';
}

var_dump( floor(7.8));

var_dump( floor((0.1+0.7) * 10));

var_dump(bcmul(bcadd('0.1', '0.7', 2),  '10', 2));