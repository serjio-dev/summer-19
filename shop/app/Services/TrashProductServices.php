<?php

namespace App\Services;

use App\Product;

interface TrashProductServices
{
    public function add(Product $product);

    public function setCount(Product $product, int $count);

    public function remove(Product $product);

    public function clear();

    public function getList(): array;

    public function getCount(Product $product): ?int;
}
