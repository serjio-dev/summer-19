<?php

namespace App\Xml;

use App\WriteInterface;

class Write implements WriteInterface
{
    private $pathFile;
    public function __construct(string $pathFile)
    {
        $this->pathFile = $pathFile;
    }

    public function write(array $data)
    {
        /** @var \SimpleXMLElement $xml */
        $xml = simplexml_load_file($this->pathFile);

        $user = $xml->addChild('user');
        $user->addChild('name', $data['name']);
        $user->addChild('date', $data['date']);

        $xml->saveXML($this->pathFile);
    }
}