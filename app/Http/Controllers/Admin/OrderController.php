<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShippingCharge;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
   public function orderIndex()
   {
       $orders = Order::with('orderDetails', 'customer')->get();

       return view('admin.order.index', ['orders' => $orders]);
   }

   public function orderView($id)
   {
       $orders = Order::with('orderDetails', 'customer')->where('id', $id)->get();
       $shippingCharge = ShippingCharge::where('id', 1)->first();

       return view('admin.order.OrderView', ['orders' => $orders, 'shippingCharge' => $shippingCharge]);

   }

   public function orderStatusChange(Request $request, $id)
   {
       $order = Order::find($id);
       $order->status = $request->status;
       $order->update();

       return redirect()->back()->with('success', 'updated successfully');
   }
}
