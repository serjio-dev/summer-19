<?php

namespace App\Csv;

use App\WriteInterface;

class Write implements WriteInterface
{
    public function __construct(string $pathFile)
    {

    }

    public function write(array $data)
    {
        // TODO: Implement write() method.
    }
}