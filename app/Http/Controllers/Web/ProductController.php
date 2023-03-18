<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\HomeBlock;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAllProduct()
    {
        $products = Product::where('status', 'Active')->paginate(2);
        return view('frontend.pages.Shop', ['products' => $products]);
    }
    public function blockWiseProduct($slug)
    {
        $homeBlock = HomeBlock::with('allItems' )->where('slug', $slug)->get();


        return view('frontend.pages.BlockWiseProducts', ['homeBlock' => $homeBlock]);

    }
}
