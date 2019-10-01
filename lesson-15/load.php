<?php

spl_autoload_register('loadClass');
spl_autoload_register('loadClassLib');

function loadClassLib(string $className) {
    var_dump($className);
    $pathName = 'lib/'. str_replace('\\', '/', $className) . '.php';
    if (is_file($pathName)) {
        require_once $pathName;

        return true;
    }

    return false;
}

function loadClass(string $className) {
    var_dump($className);
    $pathName = 'src/'. str_replace('\\', '/', $className) . '.php';
    if (is_file($pathName)) {
        require_once $pathName;

        return true;
    }

    return false;
}