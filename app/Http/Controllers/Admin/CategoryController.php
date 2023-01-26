<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Validator;
use function League\Flysystem\move;


class CategoryController extends Controller
{
    public function create()
    {
        $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();

        return view('admin.category.create', ['categories' => $categories]);

    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'parent_id' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:png,jpg,jpeg'
        ],[
            'name.required' => 'Name is must.',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }
        $category = new Category();
        $category->name        = $request->name;
        $category->description = $request->description;
        $category->parent_id   = $request->parent_id;


        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageFileName = 'category_' . time() . '.' . $imageFile->getClientOriginalExtension();
            if (!file_exists('uploads/images/category')) {
                mkdir('uploads/images/category', 0777, true);
            }
            $imageFile->move('uploads/images/category', $imageFileName);
            $category->image = $imageFileName;
        }

        $category->save();

        return redirect()->back()->with('success','Category added successfully');
    }

    public function index(){

        $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();
        return view('admin.category.index',['categories' => $categories]);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $categories = Category::where('parent_id', null)->where('id', '!=', $category->id)->orderby('name', 'asc')->get();
        return view('admin.category.edit',['category' => $category,'categories'=>$categories]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'        => 'required',
            'parent_id'   => 'nullable|numeric'
        ]);

        $category = Category::find($id);
        if($request->name != $category->name || $request->parent_id != $category->parent_id)
        {
            if(isset($request->parent_id))
            {
                //check duplicate
                $categoryParent = Category::where('name', $request->name)->where('parent_id', $request->parent_id)->first();
                if($categoryParent)
                {
                    return redirect()->back()->with('error', 'Category already exist in this parent.');
                }
            }
            else
            {
                $categoryParent = Category::where('name', $request->name)->where('parent_id', null)->first();
                if($categoryParent)
                {
                    return redirect()->back()->with('error', 'Category already exist with this name.');
                }
            }
        }

        $category->name        = $request->name;
        $category->parent_id   = $request->parent_id;
        $category->description = $request->description;

        if ($request->hasFile('image')) {
            $destination = 'uploads/images/category/' .$category->image;
            if (file_exists($destination)) {
                @unlink($destination);
            }
            $newsImageFile = $request->file('image');
            $imageFileName = 'category_' . time() . '.' . $newsImageFile->getClientOriginalExtension();
            if (!file_exists('uploads/images/category')) {
                mkdir('uploads/images/category', 0777, true);
            }
            $newsImageFile->move('uploads/images/category', $imageFileName);
            $category->image = $imageFileName;
        }
        $category->update();
        return redirect()->back()->with('success', 'Category Updated successfully');
    }

    public function delete(Request $request)
    {

        $id = $request->id;
        $category = Category::find($id);
        $imagePath = public_path("/uploads/images/category/".$category->image);
        if (file_exists($imagePath))
        {
            @unlink($imagePath);
        }

        if (count( $category->subcategory))
        {
            $subcategories = $category->subcategory;
            foreach ($subcategories as $item)
            {
                $item = Category::find($item->id);
                $item->parent_id = null;
                $item->save();
            }
        }
        $category->delete();

        return response()->json([
            'status'=>200,
            'message'=>'Category Deleted Successfully.'
        ]);

    }


}
