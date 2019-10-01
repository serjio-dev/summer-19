<?php

require_once 'load.php';

use Csv\Read as Read;


$csvRead = new Read('test.csv');
showFileByObject($csvRead);
$csvWrite = new Csv\Write('test.csv');
showFileByObject($csvWrite);

$htmlRead = new Html\Read('test.html');
showFileByObject($htmlRead);
$htmlWrite = new Html\Write('test.html');
showFileByObject($htmlWrite);

$jsonRead = new Json\Read('test.json');
showFileByObject($jsonRead);
$jsonWrite = new Json\Write('test.json');
showFileByObject($jsonWrite);

$xmlRead = new Xml\Read('test.xml');
showFileByObject($xmlRead);
$xmlWrite = new Xml\Write('test.xml');
showFileByObject($xmlWrite);


$user = new Data\User();

$r = new Data\Read();

function showFileByObject(AbstractFile $file)
{
    printf('Имя файла %s, имя класса %s <br>', $file->getFileName(), get_class($file));
}





