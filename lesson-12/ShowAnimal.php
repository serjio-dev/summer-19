<?php

class ShowAnimal
{
    private $animal;

    public function __construct(InterfaceAnimal $animal)
    {
        $this->animal = $animal;
    }

    public function showDisplay():void
    {
        printf(
            'Животное типа: <b> %s</b> зовут %s и говорит: %s!<br>',
            $this->animal->getType(),
            $this->animal->getName(),
            $this->animal->say()
        );
    }
}
