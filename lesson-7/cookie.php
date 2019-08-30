<?php

$name = $_GET['name'] ?? null;

if ($name) {
    setcookie('name', $_GET['name']);
    setcookie('date', date('Y-m-d'));
}

if (array_key_exists('name', $_COOKIE)) {
    printf('Имя: %s', $_COOKIE['name']);
}
