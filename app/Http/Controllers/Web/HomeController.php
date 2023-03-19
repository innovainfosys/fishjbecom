<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
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

        $saltWaterFishCategory = Category::where('id', 4)->first();
        $sweetWaterFishCategory = Category::where('id', 5)->first();


        return view('frontend.pages.Home', [
            'fishTalikas' => $fishTalikas,
            'sweetWaterFishTalikas' => $sweetWaterFishTalikas,
            'salWaterFishTalikas' => $saltWaterFishTalikas,
            'saltWaterFishCategory' => $saltWaterFishCategory,
            'sweetWaterFishCategory' => $sweetWaterFishCategory
            ]);
    }

    public function productSingleView($slug)
    {
        $product = Product::with('productImages','variations')->where('slug', $slug)->get();

        return view('frontend.pages.ProductPage', ['product' => $product]);
    }
}
