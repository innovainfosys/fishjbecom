<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $product_id = $request->input('product_id');
        $quantity  = $request->input('vendor_id');
        $weight   = $request->input('weight');
        $userId = Cookie::get('__cart');

        $productExist = Cart::where('product_id', $product_id)->where('user_id', $userId)->first();

        if ($productExist) {
            $exists = Cart::find($productExist->id);
            $exists->quantity += 1;
            $exists->update();

        } else {
            $cartItem = new Cart();
            $cartItem->product_id = $product_id;
            $cartItem->user_id = $userId;
            $cartItem->quantity = $quantity;
            $cartItem->weight = $weight;
            $cartItem->save();
        }

    }
}
