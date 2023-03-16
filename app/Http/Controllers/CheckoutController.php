<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Order;
use App\Models\OrderDetail;

class CheckoutController extends Controller
{
    public function checkoutPage()
    {
        $userId = Cookie::get('__cart');
        $carts  =  Cart::with('product', 'variation')->where('user_id', $userId)->get();

        return view('frontend.pages.CheckOut', ['carts' => $carts]);
    }

    public function orderConfirm(Request $request)
    {
        $userId = Cookie::get('__cart');
        $carts = Cart::with('product', 'variation')->where('user_id', $userId)->get();

        $user_phone_check = User::where('phone', $request->phone)->first();

        if ($user_phone_check)
        {
            foreach ($carts as $cart)
            {
                $order = new Order();
                $order->order_number = mt_rand(1000000000, 9999999999);
                $order->subtotal = $request->subtotal;
                $order->user_id = 1;
                $order->save();

                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $cart->product_id;
                $orderDetail->variation_id = $cart->variation_id;
                $orderDetail->quantity = $cart->quantity;
                $orderDetail->unit_price = $cart->variation->price;
                $orderDetail->subtotal = $cart->unit_price * $cart->quantity;
                $orderDetail->save();
                $cart->delete($cart->id);
            }

            return redirect()->back()->with('Order Placed Successfully');
        }else{

        }

    }
}
