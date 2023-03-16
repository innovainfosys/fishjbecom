<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\HomeBlock;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function blockWiseProduct($slug)
    {
        $homeBlock = HomeBlock::with('allItems')->where('slug', $slug)->get();

        return view('frontend.pages.BlockWiseProducts', ['homeBlock' => $homeBlock]);

    }
}
