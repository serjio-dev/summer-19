<?php
require_once 'Animal.php';
require_once 'Type.php';
require_once 'Name.php';

class Cat extends Animal
{
    use Type, Name;

    /**
     * Cat constructor.
     */
    public function __construct($name, $type)
    {
        parent::__construct($name);
        $this->type = $type;
    }

    public function say(): string
    {
        return 'may';
    }
}