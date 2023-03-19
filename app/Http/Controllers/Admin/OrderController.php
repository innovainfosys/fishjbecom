<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
       return view('admin.order.OrderView', ['orders' => $orders]);

   }
}
