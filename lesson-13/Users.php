<?php

class Users implements InterfaceShowUsers
{
    private static $count;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $dateOfBirthday; //'YYYY-mm-dd'

    /**
     * @var string
     */
    private $position;

    /**
     * @var int
     */
    private $salary;

    /**
     * Users constructor.
     * @param string $name
     * @param string $dateOfBirthday
     * @param string $position
     * @param int $salary
     */
    public function __construct(string $name, string $dateOfBirthday, string $position, int $salary)
    {
        self::$count++;
        $this->name = $name;
        $this->dateOfBirthday = $dateOfBirthday;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function __clone()
    {
        self::$count++;
        $this->salary = null;
        $this->position = null;
    }

    public function setPosition($position): void
    {
        $this->position = $position;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * @param int $salary
     */
    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

    public static function getCount(): int
    {
        return self::$count;
    }

    public static function __callStatic(string $name, array $arguments)
    {
        if ($name === 'setCount') {
            self::$count = $arguments[0];
        }
    }

    public function __sleep()
    {
       return ['name', 'dateOfBirthday'];
    }

    public function __wakeup()
    {
       $this->position = 'empty';
       $this->salary = 'empty';
    }

    public function getFullName(): string
    {
       return $this->name;
    }
}
