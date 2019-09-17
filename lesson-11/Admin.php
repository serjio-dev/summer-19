<?php

require_once 'User.php';

class Admin extends User
{
    private $rights;

    public function __construct($name, $login, $password, $rights)
    {
        parent::__construct($name, $login, $password);
        $this->rights = $rights;
        $this->name = '[Admin]'. $name;
    }

    public function checkAuthorization($password, $login = null): bool
    {
        return $this->password === $password;
    }

    public function getRights()
    {
        return $this->rights;
    }
}