<?php

require_once 'InterfaceShowUsers.php';
require_once 'Users.php';
require_once 'Manager.php';
require_once 'ShowBrowser.php';
require_once 'ShowLine.php';


$user = new Users('Test Name', '2000-10-09', 'manager', 1000);
$manager = new Manager('M Name', '2000-10-09', 'lieder', 1000);

if (isset($_SERVER['REQUEST_METHOD'])) {
    $showDisplay = new ShowBrowser();
} else {
    $showDisplay = new ShowLine();
}

$showDisplay->add($user);
$showDisplay->add($manager);

$showDisplay->showAll();