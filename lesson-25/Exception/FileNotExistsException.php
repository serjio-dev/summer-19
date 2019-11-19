<?php

class FileNotExistsException extends \Exception
{
    public function __construct($filePath)
    {
        $message = 'File ' . $filePath .' does not exists';
        parent::__construct($message, 1);
    }
}