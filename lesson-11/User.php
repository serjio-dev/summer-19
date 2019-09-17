<?php

class User
{
    protected $name;
    private $login;
    protected $password;

    public function __construct($name, $login, $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getName()
    {
        return $this->name;
    }

    public function checkAuthorization($password, $login): bool
    {
        return $this->password === $password && $this->login === $login;
    }
}