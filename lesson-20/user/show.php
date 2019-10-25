<?php
require_once '../src/DataBase/Connection.php';

$pdo = App\DataBase\Connection::createConnect();

$stmt = $pdo->query('SELECT * FROM users');

$users =  $stmt->fetchAll();

echo '<table border="1">';
echo '<tr>';
echo '<th>Fist Name</th>';
echo '<th>Last Name</th>';
echo '<th>Email</th>';
echo '<th>Create</th>';
echo '<th>Action</th>';
echo '</tr>';
foreach ($users as $user) {
    echo '<tr>';
    echo '<td>' . $user['first_name'] . '</td>';
    echo '<td>' . $user['last_name'] . '</td>';
    echo '<td>' . $user['email'] . '</td>';
    echo '<td>' . $user['creat_at'] . '</td>';
    echo '<td><a href="update.php?id='. $user['id'] .'">Update</a></td>';
    echo '</tr>';
}
echo '</table>';


