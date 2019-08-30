<?php
/*session_name('NAME');
session_id(1234);*/
session_start();

var_dump(session_id());

$name = $_GET['name'] ?? null;

if ($name) {
    $_SESSION['name'] = $name;
}

if (isset($_SESSION['name'])) {
    $sessionName = $_SESSION['name'];
    printf('Имя: %s', $sessionName);
}