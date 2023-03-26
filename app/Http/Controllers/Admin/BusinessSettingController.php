<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShippingCharge;
use Illuminate\Http\Request;

class BusinessSettingController extends Controller
{
    public function shippingCharges()
    {
       $shippingCharge = ShippingCharge::all();

       return view('admin.shipping_charge.index', ['shippingCharge' => $shippingCharge]);

    }

    public function updateShippingCharge(Request $request, $id)
    {
        $shippingCharge = ShippingCharge::find($id);

        $shippingCharge->amount = $request->amount;
        $shippingCharge->update();
        return redirect()->back()->with('success', 'updated successfully');

    }
}
