<?php

class Config
{
    /**
     * @var array|bool
     */
    private $data;

    /**
     * Config constructor.
     * @param $filePath
     * @throws Exception
     */
    public function __construct($filePath)
    {
        if (!file_exists($filePath)) {
            throw new \FileNotExistsException($filePath);
        }

        $data = parse_ini_file($filePath, true);

        if ($data === false) {
            throw new \Exception('Incorrect file format', 2);
        }

        foreach (array('hostName', 'userName', 'password') as $el) {
            if (!isset($data[$el])) {
                throw new \Exception('Value for key '. $el . ' must be defined', 3);
            }
        }

        $this->data = $data;
    }

    public function getHostName()
    {
        return $this->data['hostName'];
    }

    public function getUserName()
    {
        return $this->data['userName'];
    }

    public function getPassword()
    {
        return $this->data['password'];
    }
}
