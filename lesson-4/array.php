<?php

$arr['key'] = '1';
var_dump($arr);

$key = 'k1';

$array = [
    $key => 'v1',
    5 => 'v4',
    'v6',
    'v10',
];

var_dump($array);

$exp = explode(', ' , '1, 2, 3, 5, 8');

var_dump($exp);

echo $array['k1'] . '<br>';
echo $array[5] . '<br>';

var_dump(array_key_exists(0, $array));


$mass = [
    'fruit' => [
        'red' => 'apple',
        'yellow' => 'banana'
    ],
    'flower' => [
        'blue' => ['b1', 'b2',],
        'red' => 'rose',
        'yellow' => 'sunflower',
    ]
];


var_dump($mass);

 printf( 'Красный цветок - %s <br>', $mass['flower']['red']);
 printf( 'Вложеное значение массива - %s <br>', $mass['flower']['blue'][1]);