<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        $categories =  $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();;
        return view('admin.product.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->status = true;

        $product->save();

        if ($request->hasFile('image'))
        {
            $uploadPath = 'uploads/images/products';
            foreach ($request->file('image') as $imgFile) {
                $imageFileName = 'product_' . time() . '.' . $imgFile->getClientOriginalExtension();
                $imgFile->move($uploadPath, $imageFileName);

                $product->productImages()->create([
                   'product_id' => $product->id,
                    'image' => $imageFileName
                ]);

            }

        }

        return redirect()->back()->with('success','product added successfully');

    }


}
