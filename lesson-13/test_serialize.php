<?php
error_reporting(E_ALL);
require_once 'Users.php';
require_once 'Admin.php';


$user = new Users('Test Name', '2001-08-21', 'manager', 1000);

$serializeUser = serialize($user);

var_dump($serializeUser);

//$serializeUser = str_replace('Users', 'Admin', $serializeUser);

print_r($serializeUser);

/** @var Users $deUser */
$deUser = unserialize($serializeUser, ['allowed_classes' => [Users::class]]);
if ($deUser instanceof __PHP_Incomplete_Class) {
    die('<h1>Некоректный обьект!<h1>');
}
dump($deUser);


$deUser->getSalary();


function dump(Users $users) {
    var_dump($users);
}