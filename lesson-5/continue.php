<?php

$data = [
    ['v11' => 1, 'v12' => 2, 'v13' => 3],
    ['v21' => 1, 'v22' => 2, 'v13' => 3],
    ['v31' => 1, 'v32' => 2, 'v13' => 3],
    ['v41' => 1, 'v42' => 2, 'v13' => 3],
];

foreach ($data as $items) {
    foreach ($items as $key => $item) {
        if ($item === 2) {
            continue 2;
        }

        printf('ключ массива: %s| элемент массыва: %s <br>', $key, $item);
    }

    echo '-------------------<br>';

}
