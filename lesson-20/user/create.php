<?php
require_once '../src/DataBase/Connection.php';

$pdo = App\DataBase\Connection::createConnect();

if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email'])) {
    $user['first_name'] = $_POST['first_name'];
    $user['last_name'] = $_POST['last_name'];
    $user['email'] = $_POST['email'];

    $pdo->exec('INSERT INTO users (first_name, last_name, email) VALUE 
                   ("'. $user['first_name'].'", "'. $user['last_name'].'", "'. $user['email'].'")'
    );

    header("Location: /user/show.php");
}

echo '<form name="create" method="post" action="create.php">
    <input type="text" name="first_name" value="" placeholder="Fist Name">
    <br>
    <input type="text" name="last_name" value="" placeholder="Last Name">
    <br>
    <input type="text" name="email" value="" placeholder="Email">
    <br>
    <input type="submit" value="Save">
    </form>';