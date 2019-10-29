<?php
namespace App\Repositories;

use App\DataBase\Connection;

class UserRepository
{
    /**
     * @var \PDO
     */
    private $pdo;

    public function __construct()
    {
        $this->pdo = Connection::createConnect();
    }

    public function get(int $id)
    {
        $stmt = $this->pdo->query('SELECT * FROM users WHERE id = ' . $id);

        return $stmt->fetch();
    }

    public function getList()
    {
        $stmt = $this->pdo->query('SELECT * FROM users');

        return $stmt->fetchAll();
    }

    public function update(int $id, array $user)
    {
        $this->pdo->exec(' UPDATE users  SET 
                   first_name = "'. $user['first_name'].'", 
                   last_name = "'. $user['last_name'].'", 
                   email = "'. $user['email'].'"
                     WHERE id = '. $id);
    }

    public function create(array $user)
    {
        $this->pdo->exec('INSERT INTO users (first_name, last_name, email) VALUE 
                   ("'. $user['first_name'].'", "'. $user['last_name'].'", "'. $user['email'].'")'
        );
    }

    public function delete(int $id)
    {
        $this->pdo->exec('DELETE FROM users WHERE id = '. $id);
    }
}