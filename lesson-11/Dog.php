<?php
require_once 'Animal.php';

class Dog extends Animal
{
    public function say(): string
    {
        return 'woof';
    }
}