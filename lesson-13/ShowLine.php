<?php

class ShowLine
{
    /**
     * @var InterfaceShowUsers[]
     */
    private $users;

    public function add(InterfaceShowUsers $user):void
    {
        $this->users[] = $user;
    }

    public function showAll():void
    {
        foreach ($this->users as $user) {
            $this->show($user);
        }
    }

    public function show(InterfaceShowUsers $user): void
    {
        printf(
            'Имя пользователя: %s, его позиция %s и зарплата %s'. PHP_EOL,
            $user->getFullName(),
            $user->getPosition(),
            $user->getSalary()
        );
    }
}