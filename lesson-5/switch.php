<?php

$a = 3;

switch ($a) {
    case 0:
        echo 'a = 0 <br>';
        break;
    case 1:
        echo 'a = 1 <br>';
        break;
    case 2:
        echo 'a = 2 <br>';
        break;
    case 3:
        echo 'a = 3 <br>';
    case 4:
        echo 'a = 4 <br>';
        break;
    default: echo 'default <br>';
}

$var = 1.7;

switch (true) {
    case is_string($var):
        echo 'string <br>';
        break;
    case is_int($var):
        echo 'int <br>';
        break;
    case is_file($var):
        echo 'file <br>';
        break;
    case is_float($var):
        echo 'float <br>';
        break;
}