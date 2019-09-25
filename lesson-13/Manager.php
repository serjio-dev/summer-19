<?php

class Manager implements InterfaceShowUsers
{
    private $name;
    private $position;
    private $salary;

    /**
     * Manager constructor.
     * @param $name
     * @param $position
     * @param $salary
     */
    public function __construct($name, $position, $salary)
    {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function getFullName(): string
    {
        return $this->name;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }
}