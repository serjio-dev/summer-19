<?php
$file = __DIR__ . "/file/data.txt";

if (file_exists($file)) {

    $count = readfile($file);

    echo'<br/>' . $count;

} else {
    echo 'Файл не существует';
}
