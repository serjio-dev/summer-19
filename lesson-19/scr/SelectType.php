<?php
namespace App;

use App\Csv\Read as ReadCsv;
use App\Xml\Read as ReadXml;
use App\Json\Read as ReadJson;
use App\Csv\Write as WriteCsv;
use App\Xml\Write as WriteXml;
use App\Json\Write as WriteJson;

class SelectType
{
    private $type;
    private $pathFile;

    public function __construct(string $type, string $pathFile)
    {
        $this->type = $type;
        $this->pathFile = $pathFile;
    }

    public function getWrite(): WriteInterface
    {
        switch ($this->type){
            case 'xml' : return new WriteXml($this->pathFile);
            case 'csv' : return new WriteCsv($this->pathFile);
            case 'json' : return new WriteJson($this->pathFile);
        }

        return  null;
    }

    public function getRead(): ?ReadInterface
    {
        switch ($this->type){
            case 'xml' : return new ReadXml($this->pathFile);
            case 'csv' : return new ReadCsv($this->pathFile);
            case 'json' : return new ReadJson($this->pathFile);
        }

        return  null;
    }
}