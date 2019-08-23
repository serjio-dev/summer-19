<?php

for($step = 1; $step < 6; $step++) {

    printf('Шаг цыкла номер: %s<br>', $step);


    if ($step%2) {
        printf('Sleep на шаге: %s<br>', $step);
        //sleep(1);
    }
}
