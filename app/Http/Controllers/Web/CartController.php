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
        $quantity  = $request->input('quantity');
        $variationId   = $request->input('variation_id');
        $userId = Cookie::get('__cart');

        $productExist = Cart::where('product_id', $product_id)->where('variation_id',$variationId)->where('user_id', $userId)->first();

        if ($productExist) {
            $exists = Cart::find($productExist->id);
            $exists->quantity += 1;
            $exists->update();

            return redirect()->back()->with('success', 'added successfully');

        } else {
            $cartItem = new Cart();
            $cartItem->product_id = $product_id;
            $cartItem->user_id = $userId;
            $cartItem->quantity = $quantity;
            $cartItem->variation_id = $variationId;
            $cartItem->save();
            return redirect()->back()->with('success', 'added successfully');
        }

    }

    public function ajaxCart(Request $request)
    {
        $product_id = $request->input('product_id');
        $variationId   = $request->input('variation_id');
        $userId = Cookie::get('__cart');

        $productExist = Cart::where('product_id', $product_id)->where('variation_id',$variationId)->where('user_id', $userId)->first();

        if ($productExist) {
            $exists = Cart::find($productExist->id);
            $exists->quantity += 1;
            $exists->update();
            return response()->json(['status' => 'Successfully added to card']);
        } else {
            $cartItem = new Cart();
            $cartItem->product_id = $product_id;
            $cartItem->user_id = $userId;
            $cartItem->variation_id = $variationId;
            $cartItem->quantity = 1;
            $cartItem->save();
            return response()->json(['status' => 'Successfully added to card']);
        }
    }

    public function cartCount()
    {
            $user_id = Cookie::get('__cart');;
            $cartCount = Cart::where('user_id', $user_id)->get()->count();
            return response()->json(['cartCount' => $cartCount]);
    }

    public function cartPage()
    {
        $userId = Cookie::get('__cart');
        $carts = Cart::where('user_id', $userId)->get();

        return view('frontend.pages.Cart', ['carts' => $carts]);
    }

    public function updateCart(Request $request)
    {
        foreach ($request->id as $key => $value) {
            $data = array(
                'quantity'=>$request->quantity[$key],
            );
            Cart::where('id',$request->id[$key])
                ->update($data);
        }
        return redirect()->back()->with('success', 'cart quantity updated successfully');
    }

    public function cartDelete($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back();
    }

}
