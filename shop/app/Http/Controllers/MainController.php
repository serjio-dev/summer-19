<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getProducts()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('products.product_main', ['categories' => $categories, 'products' => $products]);
    }

    public function getProductsByCategory()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('products.product_main', ['categories' => $categories, 'products' => $products]);
    }
}
