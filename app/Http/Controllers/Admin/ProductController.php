<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Variation;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        $categories =  $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();;
        return view('admin.product.create', ['categories' => $categories]);
    }

    public function index()
    {
        $products = Product::with('categories', 'variations')->get();
        return view('admin.product.index', ['products' => $products]);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->status = true;
        $product->save();

        foreach ($request->weight as $key => $value)
        {
            $variation = new Variation();
            $variation->product_id = $product->id;
            $variation->weight = $request->weight[$key];
            $variation->quantity = $request->quantity[$key];
            $variation->price = $request->price[$key];
            $variation->sku = $request->sku[$key];
            $variation->save();
        }

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

    public function edit($id)
    {
        $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();
        $product = Product::with('variations')->where('id', $id)->first();

        return view('admin.product.edit',['product' => $product, 'categories' => $categories]);

    }


}
