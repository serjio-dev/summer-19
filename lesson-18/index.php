<?php

require_once 'Users.php';

$dsn = 'mysql:host=127.0.0.1;port=3308;dbname=notify_test;charset=utf8';
$user = 'notify';
$pass = 'password42';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
$pdo = new \PDO($dsn, $user, $pass, $options);

$stmt = $pdo->query('SELECT * FROM users JOIN phones on users.phone_id = phones.id');

$data = $stmt->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'App\Users');

var_dump($data);

var_dump(App\Users::getCount());

$phoneId = '1); Delete From users ();';
$count = $pdo->exec('INSERT users(first_name, phone_id) value (\'Test_insert\', '.$phoneId.')');

var_dump($count);
$userId = $pdo->lastInsertId();
var_dump($userId);