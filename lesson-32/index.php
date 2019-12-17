<?php

interface ProductPriceI
{
    public function getPrice(): int;
}

class Product implements ProductPriceI
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}

class Box implements ProductPriceI
{
    private $price;

    /**
     * @var ProductPriceI
     */
    private $items;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function addItem(ProductPriceI $item)
    {
        $this->items[] = $item;
    }

    public function getPrice(): int
    {
        $price = $this->price;
        /** @var ProductPriceI $item */
        foreach ($this->items as $item) {
            $price += $item->getPrice();
        }

        return $price;
    }
}

$p1 = new Product(100);
$p2 = new Product(230);
$p3 = new Product(310);

$mainBox = new Box(10);
$box = new Box(5);
$box->addItem($p1);
$box->addItem($p2);

$mainBox->addItem($box);
$mainBox->addItem($p3);

echo  $mainBox->getPrice();