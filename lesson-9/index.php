<?php

require_once 'Users.php';

$user1 = new Users('Name 1', 24);
$user2 = new Users('Name 2', 67);


printf('<p style="color: blueviolet">У нас есить: %s созданых пользователей! <p/><br>', $user1::getCountUsers());

$user1->year = 2000;
$user1->mounth = 12;
var_dump(isset($user1->year));
var_dump(isset($user1->year1));


$year = $user1->year;
$user1->show();
printf('Год начала работы: %s и месяц: %s<br> ', $year, $user1->mounth);

$user2->show();

unset($user1);


printf('<p style="color: blue">У нас осталось: %s созданых пользователей! <p/><br>', Users::getCountUsers());



