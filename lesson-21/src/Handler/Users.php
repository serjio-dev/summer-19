<?php
namespace App\Handler;

class Users
{
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new \App\Repositories\UserRepository();

    }

    public function getList()
    {
        $users =  $this->userRepository->getListWithPhone();

        require_once 'user/show.php';
    }

    public function delete(array $arr)
    {
        return 'User id = ' . $arr['id'];
    }

    public function show(array $arr)
    {

    }

    public function save(array $arr)
    {

    }
}