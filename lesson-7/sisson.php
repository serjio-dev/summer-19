<?php

checkMonth(0);
checkMonth(1);
checkMonth(3);
checkMonth(6);
checkMonth(9);
checkMonth(12);
checkMonth(13);


function checkMonth($month) {
    if ($month < 13 && $month > 0) {

        if ($month >= 3 && $month <= 5) {
            $nameMonth = 'Весна';
        } elseif ($month >= 6 && $month <= 8){
            $nameMonth = 'Лето';
        } elseif ($month >= 9 && $month <= 11){
            $nameMonth = 'Осинь';
        } else {
            $nameMonth = 'Зима';
        }

        printf('По данным сейчас %s <br>' , $nameMonth);

    } else {
        echo 'Диапазон месецев должен быть от 1 до 12 <br>';
    }
}

