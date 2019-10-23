<?php
namespace App\Xml;

use App\ReadInterface;

class Read implements ReadInterface
{
    private $pathFile;

    public function __construct(string $pathFile)
    {
        $this->pathFile = $pathFile;
    }

    public function read(): array
    {
        $data = [];
        /** @var \SimpleXMLElement $xml */
        $xml = simplexml_load_file($this->pathFile);
        foreach ($xml->user as $xmlUser) {
            $data[] = [
              'date' => (string)$xmlUser->date,
              'name' => (string)$xmlUser->name,
            ];
        }

        return $data;
    }
}