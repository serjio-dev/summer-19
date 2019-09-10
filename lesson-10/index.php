<?php
error_reporting(E_ALL);

require_once 'Users.php';

$user = new Users('Name', '2000-05-25', 'worker', 1000);

var_dump($user);

$userClone = clone $user;

$userClone->setPosition('driver');
$userClone->setSalary(2000);


var_dump($userClone);

var_dump($userClone::getCount());
var_dump(Users::getCount());

Users::setCount(0, '1', 'jhfhg');

var_dump(Users::getCount());
