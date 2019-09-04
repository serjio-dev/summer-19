<?php

require_once 'Users.php';
require_once 'Simple.php';

$simple = new Simple;
var_dump($simple);

$users = new Users();
$user1 = new Users();
$user2 = new Users();

showUser($users);

var_dump($users->name);
$users->name = 'NewNameUser';
var_dump($users->name);

function showUser(Users $users)
{
    var_dump($users->getType());
    var_dump($users->isActive());
}