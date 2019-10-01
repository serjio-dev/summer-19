<?php

abstract class AbstractFile
{
    private $fileName;

    /**
     * AbstractFile constructor.
     * @param $fileName
     */
    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
}
