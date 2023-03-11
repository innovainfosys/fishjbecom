<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeBlock;
use App\Models\HomeBlockProducts;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeBlockController extends Controller
{


   public function sectionList()
   {
       $homeBlocks = HomeBlock::all();

       return view('admin.home_setting.pages.HomeBlockIndex', ['homeBlocks' => $homeBlocks]);
   }

   public function editSectionPage($id)
   {
       $homeBlock = HomeBlock::find($id);
       return view('admin.home_setting.pages.HomeBlockUpdate', ['homeBlock' => $homeBlock]);
   }

   public function updateSection(Request $request, $id)
   {
       $homeBlock = HomeBlock::find($id);
       $homeBlock->title = $request->title;
       $homeBlock->update();

       return redirect()->back()->with('success', 'Updated Successfully');

   }

   public function sectionProductAdd($id)
   {
       $homeBlock = HomeBlock::find($id);
       $products = Product::all();
       $homeBlockProducts = HomeBlockProducts::with('product')->where('home_block_id', $id)->paginate(10);
       return view('admin.home_setting.pages.SectionProductAdd', [
           'homeBlock' => $homeBlock,
           'products' => $products,
           'homeBlockProducts' => $homeBlockProducts

           ]);
   }

    public function  sectionProductAddProcess(Request $request, $id)
    {

        $productExists = HomeBlockProducts::where('product_id', $request->product_id)->where('home_block_id',$id)->first();
        if($productExists)
        {
            return  redirect()->back()->with('error', 'Product Already Exits');
        }else{
            $homeBlockProduct = new HomeBlockProducts();
            $homeBlockProduct->home_block_id = $id;
            $homeBlockProduct->product_id = $request->product_id;
            $homeBlockProduct->save();

            return redirect()->back()->with('success', 'Successfully Added Products');
        }

    }
    public function  removeSectionProduct($id)
    {
        $homeBlockProduct = HomeBlockProducts::find($id);
        $homeBlockProduct->delete();
        return redirect()->back()->with('success', 'Successfully Deleted');
    }

}
