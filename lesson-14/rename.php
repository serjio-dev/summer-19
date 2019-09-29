<?php

$file = 'file/rename.txt';
$fileRemove = 'file/remove.txt';

echo rename($file, 'file/new_rename.txt');

echo unlink($fileRemove);


