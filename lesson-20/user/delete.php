<?php
require_once '../src/DataBase/Connection.php';

$pdo = App\DataBase\Connection::createConnect();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->query('SELECT * FROM users WHERE id = ' . $id);
    $user = $stmt->fetch();

    if (!empty($user)) {
        echo '<form name="delete" method="post" action="delete.php">
        <input type="hidden" name="id" value="'. $user['id'] .'">
         Вы действитьельно хотете удалить пользоватиеля: '.
                $user['first_name'] .' '. $user['last_name'] .' ?
         <input type="submit" value="Удалить">
         <a href="show.php">Назад</a>
        </form>';
    } else {
        echo 'Вы пытаетесь удалить не существующего пользователя! 
            <a href="show.php">Вернутся назад.</a>';
    }
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $pdo->exec('DELETE FROM users WHERE id = '. $id);

    header("Location: /user/show.php");
}
