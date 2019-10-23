<?php

require_once 'scr/WriteInterface.php';
require_once 'scr/ReadInterface.php';
require_once 'scr/Csv/Read.php';
require_once 'scr/Csv/Write.php';
require_once 'scr/Json/Read.php';
require_once 'scr/Json/Write.php';
require_once 'scr/Xml/Read.php';
require_once 'scr/Xml/Write.php';
require_once 'scr/SelectType.php';

const TYPE_FILE = 'xml'; // json xml

$select = new App\SelectType(TYPE_FILE, 'data/user.' . TYPE_FILE);

$read = $select->getRead();

if (!$read instanceof \App\ReadInterface) {
    echo 'Нет возможности прочитать файл!';
    exit();
}

$data = $read->read();

var_dump($data);