<?php
$file = __DIR__ . "/file/data.txt";

// Проверяем наличие файла
if (file_exists($file)) {
    // Пытаемся открыть файл
    $handle = fopen($file, 'r');
    $sizeF = filesize($file);

    echo $sizeF . '</br>';
    $content = fread($handle, $sizeF);

    fclose($handle);

    echo $content . '<br/>';
    echo strlen($content);
} else {
    echo 'Файл не существует';
}
