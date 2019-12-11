<?php

namespace App\Services;

use App\Product;
use Illuminate\Session\SessionManager;

class TrashProductSessionServices implements TrashProductServices
{
    private const SESSION_KEY = 'products';
    private $session;

    public function __construct(SessionManager $session)
    {
        $this->session = $session;
    }

    public function add(Product $product)
    {
        $count = $this->getCount($product) ?: 0;
        $count++;
        $this->setCount($product, $count);
    }

    public function setCount(Product $product, int $count)
    {
        $this->remove($product);

        $this->session->push(self::SESSION_KEY, $product->id .':'. $count);
        $this->session->save();
    }

    public function remove(Product $product)
    {
        $sessionProducts = $this->session->get(self::SESSION_KEY, []);
        $this->clear();

        foreach ($sessionProducts as $sessionProduct) {
            list($productId, $count) = explode(':', $sessionProduct);
            if ($product->id !== (int)$productId) {
                $this->session->push(self::SESSION_KEY, $productId .':'. $count);
            }
        }

        $this->session->save();
    }

    public function clear()
    {
        $this->session->remove(self::SESSION_KEY);
        $this->session->save();
    }

    public function getList(): array
    {
        $products = [];
        $sessionProducts = $this->session->get(self::SESSION_KEY, []);
        foreach ($sessionProducts as $sessionProduct) {
            list($productId, $count) = explode(':', $sessionProduct);

            $product = Product::findOrFail($productId);
            $products[] = [
                'product' => $product,
                'count' => $count,
            ];
        }

        return $products;
    }

    public function getCount(Product $product): ?int
    {
        $sessionProducts = $this->session->get(self::SESSION_KEY, []);
        foreach ($sessionProducts as $sessionProduct) {
            list($productId, $count) = explode(':', $sessionProduct);

            if ($productId == $product->id) {
                return $count;
            }
        }

        return null;
    }
}
