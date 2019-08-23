<?php

$data = [
    'v1' => 1,
    'v2' => 2,
    'v3' => 3,
    'v4' => 4,
];

foreach ($data as $key => $item) {
    printf('ключ массива: %s| элемент массыва: %s <br>', $key, $item);

    if ($item%2) {
        $data[$key]++;
    }
}

var_dump($data);
