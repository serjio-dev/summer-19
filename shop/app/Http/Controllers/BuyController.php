<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Services\TrashProductServices;
use App\Services\TrashProductSessionServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Cookie;

class BuyController extends Controller
{
    /**
     * @var TrashProductServices
     */
    private $trashProductServices;

    public function __construct(TrashProductServices $trashProductServices)
    {
        $this->trashProductServices = $trashProductServices;
    }
    public function addToBuy(Request $request, int $id)
    {
        $product = Product::findOrFail($id);

        $validator = Validator::make($request->post(), [
            'count' => 'digits_between:1,'. $product->count,
        ]);

        $validateData = $validator->validate();
        $count = $validateData['count'];

        $this->trashProductServices->setCount($product, $count);

        return Redirect::to(route('product_all'));
    }

    public function getListProducts()
    {
        $categories = Category::all();
        $products = $this->trashProductServices->getList();

        return view('products.products_list_buy', ['categories' => $categories, 'products' => $products]);
    }
}
