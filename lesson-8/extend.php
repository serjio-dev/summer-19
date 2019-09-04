<?php

require_once 'Users.php';
require_once 'Admin.php';

$admin = new Admin();

$admin->setNik('AdminNik');

var_dump($admin->name);
var_dump($admin->getNik());
var_dump($admin->getType());

$adminSuper = clone $admin;

$adminSuper->setNik('Super');

echo '----------------------------<br>';
var_dump($admin->name);
var_dump($admin->getNik());
var_dump($admin->getType());

var_dump($adminSuper->name);
var_dump($adminSuper->getNik());
var_dump($adminSuper->getType());

$adminClone = clone $admin;
$adminCopy = $admin;

if ($admin == $adminSuper) {
    echo 'TRUE $admin == $adminSuper <br>';
} else {
    echo 'FALSE $admin == $adminSuper <br>';
}

if ($admin == $adminCopy) {
    echo 'TRUE $admin == $adminCopy <br>';
} else {
    echo 'FALSE $admin == $adminCopy <br>';
}

if ($admin == $adminClone) {
    echo 'TRUE $admin == $adminClone <br>';
} else {
    echo 'FALSE $admin == $adminClone <br>';
}

if ($admin === $adminCopy) {
    echo 'TRUE $admin === $adminCopy <br>';
} else {
    echo 'FALSE $admin === $adminCopy <br>';
}

if ($admin === $adminClone) {
    echo 'TRUE $admin === $adminClone <br>';
} else {
    echo 'FALSE $admin === $adminClone <br>';
}