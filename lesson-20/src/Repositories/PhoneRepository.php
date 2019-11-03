<?php

namespace App\Repositories;

use App\DataBase\Connection;

class PhoneRepository
{
    /**
     * @var \PDO
     */
    private $pdo;

    public function __construct()
    {
        $this->pdo = Connection::createConnect();
    }

    public function create(string $phone)
    {
        $stmt = $this->pdo->prepare('');

        $stmt->bindParam();
        $stmt->execute();


        return $this->pdo->lastInsertId();
    }
}