<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Customer;
use App\Models\ShippingCharge;
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
        $shippingCharge = ShippingCharge::where('id', 1)->first();

        return view('frontend.pages.CheckOut', ['carts' => $carts, 'shippingCharge' => $shippingCharge]);
    }

    public function orderConfirm(Request $request)
    {
        $userId = Cookie::get('__cart');
        $carts = Cart::with('product', 'variation')->where('user_id', $userId)->get();
        $shippingCharge = ShippingCharge::where('id', 1)->first();

        $customerExists = Customer::where('phone', $request->phone)->first();

        if ($customerExists)
        {
            $subTotal = 0;
            foreach ($carts as $cart)
            {
                $subTotal += $cart->variation->price * $cart->quantity;
            }

            $order = new Order();
            $order->order_number = mt_rand(1000000000, 9999999999);
            $order->subtotal = $subTotal + $shippingCharge->amount;
            $order->customer_id = $customerExists->id;
            $order->shipping_address = $request->address;
            $order->save();

            foreach ($carts as $cart)
            {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->customer_id = $customerExists->id;
                $orderDetail->product_id = $cart->product_id;
                $orderDetail->variation_id = $cart->variation_id;
                $orderDetail->quantity = $cart->quantity;
                $orderDetail->unit_price = $cart->variation->price;
                $orderDetail->subtotal =  $cart->variation->price * $cart->quantity;
                $orderDetail->save();
                $cart->delete($cart->id);
            }

            return redirect()->back()->with('Order Placed Successfully');
        }else{

            $customer = new Customer();
            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->email = $request->email;
            $customer->address = $request->address;
            $customer->save();

            $order = new Order();
            $order->order_number = mt_rand(1000000000, 9999999999);
            $order->subtotal = $request->subtotal;
            $order->customer_id = $customer->id;
            $order->shipping_address = $request->address;
            $order->save();

            foreach ($carts as $cart)
            {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->customer_id = $customer->id;
                $orderDetail->product_id = $cart->product_id;
                $orderDetail->variation_id = $cart->variation_id;
                $orderDetail->quantity = $cart->quantity;
                $orderDetail->unit_price = $cart->variation->price;
                $orderDetail->subtotal = $cart->variation->price * $cart->quantity;
                $orderDetail->save();
                $cart->delete($cart->id);
            }

            return redirect()->back()->with('Order Placed Successfully');
        }

    }
}
