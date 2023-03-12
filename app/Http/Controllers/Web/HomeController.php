<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\HomeBlock;
use App\Models\HomeBlockProducts;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $homeBlocks = HomeBlock::with('items')->get();
        $fishTalikas = $homeBlocks[0];
        $saltWaterFishTalikas = $homeBlocks[1];
        $sweetWaterFishTalikas = $homeBlocks[2];

        return view('frontend.pages.Home', [
            'fishTalikas' => $fishTalikas,
            'sweetWaterFishTalikas' => $sweetWaterFishTalikas,
            'salWaterFishTalikas' => $saltWaterFishTalikas,
            ]);
    }

    public function productSingleView($slug)
    {
        $product = Product::with('productImages','variations')->where('slug', $slug)->get();

        return view('frontend.pages.ProductPage', ['product' => $product]);
    }
}
