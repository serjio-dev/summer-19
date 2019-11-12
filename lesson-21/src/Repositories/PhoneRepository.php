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

    public function getPhoneNumberById(int $id): ?string
    {
        $stmt = $this->pdo->prepare('SELECT * FROM phones WHERE id = ?');
        $stmt->execute([$id]);

        $res = $stmt->fetch();

        return $res['number'] ?: null;
    }

    public function create(string $phone)
    {
        $stmt = $this->pdo->prepare(
            'INSERT INTO phones (number) VALUES(:number)'
        );

        $stmt->bindParam('number', $phone);
        $stmt->execute();

        return $this->pdo->lastInsertId();
    }
}