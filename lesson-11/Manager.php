<?php
require_once 'Admin.php';

final class Manager extends Admin
{
    private $role;

    /**
     * @return mixed
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role): void
    {
        $this->role = $role;
    }
}