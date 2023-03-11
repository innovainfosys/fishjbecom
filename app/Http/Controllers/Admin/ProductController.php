<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Variation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function create()
    {
        $categories =  $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();
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
        $product->slug = Str::slug($request->title);
        $product->description = $request->description;
        $product->category_id = $request->category_id;


        if ($request->hasFile('featured_image')) {
            $imageFile = $request->file('featured_image');
            $imageFileName = 'product_featured_' . time() . '.' . $imageFile->getClientOriginalExtension();

            $imageFile->move('uploads/images/products', $imageFileName);
            $product->featured_image = $imageFileName;
        }
        $product->save();

        $variations = [];
        foreach ($request->weight as $key => $value) {
            $variations[] = [
                'product_id' => $product->id,
                'weight' => $request->weight[$key],
                'quantity' => $request->quantity[$key],
                'price' => $request->price[$key],
                'sku' => $request->sku[$key]
            ];
        }
        Variation::insert($variations);

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/images/products';
            $productImages = [];
            foreach ($request->file('image') as $imgFile) {
                $imageFileName = 'product_' . time() . '.' . $imgFile->getClientOriginalExtension();
                $imgFile->move($uploadPath, $imageFileName);
                $productImages[] = [
                    'product_id' => $product->id,
                    'image' => $imageFileName
                ];
            }
            ProductImage::insert($productImages);
        }

        return redirect()->back()->with('success','Product added successfully');

    }

    public function edit($id)
    {
        $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();
        $product = Product::with('variations')->where('id', $id)->first();

        return view('admin.product.edit',['product' => $product, 'categories' => $categories]);

    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description,
        ]);

        //update existing variations
        $existingVariations = [];
        if ($request->has('variation_id')) {
            foreach ($request->variation_id as $key => $value) {
                $existingVariations[] = $value;
                Variation::where('id', $value)->update([
                    'weight' => $request->weight[$key],
                    'quantity' => $request->quantity[$key],
                    'price' => $request->price[$key],
                    'sku' => $request->sku[$key],
                ]);
            }
        }

        // new variation add
        if ($request->has('new_weight')) {
            $newVariations = [];
            foreach ($request->new_weight as $key => $value) {
                $newVariations[] = [
                    'product_id' => $id,
                    'weight' => $request->new_weight[$key],
                    'quantity' => $request->new_quantity[$key],
                    'price' => $request->new_price[$key],
                    'sku' => $request->new_sku[$key],
                ];
            }
            Variation::insert($newVariations);
        }

        //delete variations
        if ($request->has('delete_variation')) {
            $toBeDeleted = array_diff($request->delete_variation, $existingVariations);
            Variation::whereIn('id', $toBeDeleted)->delete();
        }



        return redirect()->back()->with('success', 'Product Updated Successfully');
    }


    public function deleteImages($id)
    {
        $image = ProductImage::find($id);

        $image->delete();
        return redirect()->back()->with('success','Gallery Image Deleted Successfully');

    }

}
