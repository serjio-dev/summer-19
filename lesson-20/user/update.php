<?php
require_once '../src/DataBase/Connection.php';

$pdo = App\DataBase\Connection::createConnect();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->query('SELECT * FROM users WHERE id = '. $id);
    $user = $stmt->fetch();

    echo '<form name="update" method="post" action="update.php">
    <input type="hidden" name="id" value="'. $user['id'] .'">
    <input type="text" name="first_name" value="'. $user['first_name'] .'" placeholder="Fist Name">
    <br>
    <input type="text" name="last_name" value="'. $user['last_name'] .'" placeholder="Last Name">
    <br>
    <input type="text" name="email" value="'. $user['email'] .'" placeholder="Email">
    <br>
    <input type="submit" value="Save">
    </form>';
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $stmt = $pdo->query('SELECT * FROM users WHERE id = '. $id);
    $user = $stmt->fetch();

    $user['first_name'] = $_POST['first_name'];
    $user['last_name'] = $_POST['last_name'];
    $user['email'] = $_POST['email'];

    $pdo->exec(' UPDATE users  SET 
                   first_name = "'. $user['first_name'].'", 
                   last_name = "'. $user['last_name'].'", 
                   email = "'. $user['email'].'"
                     WHERE id = '. $id);

    header("Location: /user/show.php");
}
