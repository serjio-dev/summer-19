<?php
$file = __DIR__ . "/file/data_write.txt";

$handle = fopen($file, 'a+');

fwrite($handle, 'first string' . PHP_EOL);
file_put_contents($file, 'second string' . PHP_EOL, FILE_APPEND);

readfile($file);