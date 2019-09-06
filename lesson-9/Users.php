<?php

class Users
{
    private const USER_MIN_SALARY = 200;

    private $name;

    private $age;

    private $salary;

    protected static $countUsers = 0;

    private $data = [];

    /**
     * Users constructor.
     * @param $name
     * @param $age
     */
    public function __construct(string $name, int $age)
    {
        self::$countUsers++;

        $this->name = $name;
        $this->age = $age;
        $this->salary = self::USER_MIN_SALARY;
    }

    public function __destruct()
    {
        self::$countUsers--;
    }

    public function __get(string $name): ?string
    {
        return $this->data[$name] ?: null;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __isset($name): string
    {
        return isset($this->data[$name]) ? true : false;
    }

    public static function getCountUsers(): int
    {
        return self::$countUsers;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getSalary(): ?int
    {
        return $this->salary;
    }

    public function setSalary(int $s): void
    {
        $this->salary = $s;
    }

    public function show()
    {
        printf(
            'Имя: %s, возраст: %s, зарплата: %s <br>',
            $this->getName(),
            $this->getAge(),
            $this->getSalary()
        );
    }
}