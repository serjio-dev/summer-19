<?php

$exp = true;
$step = 0;
do {
    $step++;
    printf('Шаг цыкла номер: %s<br>', $step);

    if ($step === 5) {
        $exp = false;
    }

    if ($step % 2) {
        printf('Sleep на шаге: %s<br>', $step);
        sleep(1);
    }
} while ($exp);