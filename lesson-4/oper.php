<?php

$fruit = [
    'red' => 'apple',
    'yellow' => 'banana',
    'blue' => 'gray',
];

$flower = [
    'red' => 'rose',
    'yellow' => 'sunflower',
];


$fruit1 = $fruit;

$fruit1['red2'] = 'gray2';

var_dump($flower + $fruit);
var_dump($flower != $fruit);
var_dump($fruit1 === $fruit);


var_dump($fruit);
var_dump($fruit1);

$diff = array_diff($fruit1, $fruit);
var_dump($diff);

ksort($fruit);

var_dump($fruit);

$arrRand = range(2, 20, 3);

$count = count($arrRand);

echo $arrRand[$count - 1] . '<br>';

print_r($arrRand);

echo '-------------list -------------<br>';


list($b, $r, $y) = [1, 2, 3];

printf('$b = %s, $r = %s, $y = %s', $b, $r, $y);

$arrCompact = compact('b', 'r', 'y');

var_dump($arrCompact);