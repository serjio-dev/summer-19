<?php

abstract class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function say(): string;

    public function showSay()
    {
        printf('Наше животное %s говорит: %s!', $this->name, $this->say());
    }
}