<?php
require_once 'Animal.php';

class Cat extends Animal
{
    public function say(): string
    {
        return 'may';
    }
}