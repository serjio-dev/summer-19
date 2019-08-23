<?php

$arr = [
  'ru' => [
      1 => 'Понидельник'
  ]
];


$lang = $_GET['lang'];
$number = $_GET['day'];

printf('День недели:  %s<br>', $arr[$lang][$number]);


