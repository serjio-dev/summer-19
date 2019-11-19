<?php

require_once 'Exception/FileNotExistsException.php';
require_once 'Config.php';

try {
    $config = new Config('data/_config.ini');
} catch (\FileNotExistsException $e) {
    echo '<h1>' . $e->getMessage() . '</h1>';
} catch (\Throwable $e) {
    get_class($e);
    echo $e->getMessage();
} finally {
    echo '<br>Окончание обработки';
}

