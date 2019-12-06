<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Cookie;

class BuyController extends Controller
{
    public function addToBuy(Request $request, int $id)
    {
        $product = Product::findOrFail($id);

        $validator = Validator::make($request->post(), [
            'count' => 'digits_between:1,'. $product->count,
        ]);

        $validateData = $validator->validate();
        $count = $validateData['count'];

        session()->push('products', $id .':'. $count);
        session()->save();

        return Redirect::to(route('product_all'));
    }

    public function getListProducts()
    {
        $categories = Category::all();
        $products = [];
        $sessionProducts = session()->get('products');
        foreach ($sessionProducts as $sessionProduct) {
            list($productId, $count) = explode(':', $sessionProduct);

            $product = Product::findOrFail($productId);
            $products[] = [
                'product' => $product,
                'count' => $count,
            ];
        }

        return view('products.products_list_buy', ['categories' => $categories, 'products' => $products]);
    }
}
