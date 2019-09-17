<?php
error_reporting(E_ALL);
require_once 'User.php';
require_once 'Admin.php';
require_once 'Manager.php';
require_once 'SuperManager.php';



$user = new User('UName', 'log', 'pass');
$user->checkAuthorization('pass', 'log');
checkPass($user, '123', 'log');
checkPass($user, 'pass', 'log');

$admin = new Admin('AName', 'adm', 'pass', 1);
$admin->checkAuthorization('pass');

checkPass($admin, '123', 'log');
checkPass($admin, 'pass', 'log');

$manager = new Manager('MNane', 'man', 'pass', 1);
$manager->setRole('super manager');
checkPass($manager, 'pass', 'log');

//$superManager = new SuperManager('MNane', 'man', 'pass', 1);

function checkPass(User $object, $pass, $login)
{
    if ($object->checkAuthorization($pass, $login)) {
        printf('У пользователя: %s правильный пароль <br>', $object->getName());
        if ($object instanceof Manager) {
            printf('Роль менеджера: %s <br>', $object->getRole());
        }
    } else {
        printf('У пользователя: %s не правильный пароль <br>', $object->getName());
    }
}


