<?php
$file = __DIR__ . "/file/data.txt";

if (file_exists($file)) {

    $str = file_get_contents($file);
    $arrStr = file($file);

    var_dump($str);
    var_dump($arrStr);

} else {
    echo 'Файл не существует';
}
