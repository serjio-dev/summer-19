<?php

class ShowBrowser
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

    private function show(InterfaceShowUsers $user): void
    {
        printf(
            '<p>Имя пользователя: %s, его позиция %s и зарплата %s</p><br>',
            $user->getFullName(),
            $user->getPosition(),
            $user->getSalary()
        );
    }
}