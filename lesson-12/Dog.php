<?php
require_once 'Animal.php';
require_once 'InterfaceAnimal.php';
require_once 'Type.php';
require_once 'Name.php';

class Dog extends Animal implements InterfaceAnimal
{
    use Type, Name {
        Name::getName as getTraitName;
    }

    public function __construct($name, $type)
    {
        parent::__construct($name);
        $this->type = $type;
    }

    public function say(): string
    {
        return 'woof';
    }

    public function getName():string
    {
        return  'Animal:' . $this->getTraitName();
    }
}