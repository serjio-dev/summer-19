<?php
namespace App\Csv;

use App\ReadInterface;

class Read implements ReadInterface
{
    public function __construct(string $pathFile)
    {

    }

    public function read(): array
    {
        // TODO: Implement read() method.
    }
}