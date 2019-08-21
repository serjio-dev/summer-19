<?php


echo 'Просто выводим строку! <br>';
$p = print ('Просто выводим строку! <br>');

printf('Просто выводим строку номер - %d, %s, число - %010.6f!', 7, 'текст', 0.1);


$str = 'яблоко; груша; вишня';

$arr = explode(';', $str);

print_r($arr);

$str = implode(',<br>', $arr);

print $str;

print_r($str);