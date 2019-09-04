<?php

require_once 'Users.php';
require_once 'Admin.php';
require_once 'SuperAdmin.php';

$user = new Users();
$user->name = 'user';

$admin = new Admin();
$admin->name = 'admin';

$adminSuper = new SuperAdmin();
$adminSuper->name = 'super';

showStatusUser($user);
showStatusUser($admin);
showStatusUser($adminSuper);


function showStatusUser(Users $user)
{
    if ($user->isActive()) {
        printf('User name: %s, status active <br>', $user->name);
    } else {
        printf('User name: %s, status not active <br>', $user->name);
    }
}