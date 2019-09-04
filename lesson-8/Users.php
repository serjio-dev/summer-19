<?php

class Users
{
    public $name = 'NameUser';

    protected $nik = null;

    protected $type = 'user';

    private $active = false;

    public function getType()
    {
        return $this->type;
    }

    public function isActive()
    {
        return  $this->type == 'user' ? (bool)$this->active : true;
    }
}