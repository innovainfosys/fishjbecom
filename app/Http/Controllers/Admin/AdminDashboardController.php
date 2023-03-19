<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $customers = Customer::count();
        $orders = Order::count();
        $totalSale = Order::sum('subtotal');
        return view('admin.dashboard', ['customers' => $customers, 'orders' => $orders, 'totalSale' => $totalSale]);
    }
}
