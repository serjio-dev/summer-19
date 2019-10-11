<?php
namespace App;

class Users
{
    private static $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public static function getCount()
    {
        return self::$count;
    }
}