<?php

namespace App\Http\Controllers;

class BuyController extends Controller
{
    public function addToBuy()
    {
        return redirect(route('product_all'));
    }
}
