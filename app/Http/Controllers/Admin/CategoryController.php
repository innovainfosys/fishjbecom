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
            $newsImageFile = $request->file('image');
            $imageFileName = 'category_' . time() . '.' . $newsImageFile->getClientOriginalExtension();
            if (!file_exists('uploads/images/category')) {
                mkdir('uploads/images/category', 0777, true);
            }
            $newsImageFile->move('uploads/images/category', $imageFileName);
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
        $catergory = Category::find($id);
        return view('admin.category.edit',['category' => $catergory]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'        => 'required'
        ]);

        $category = Category::find($id);

        $category->name        = $request->name;
        $category->description = $request->description;

        if ($request->hasFile('image')) {
            $destination = 'uploads/images/category' . $category->image;
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
        $imagePath = public_path("/uploads/images/category".$category->image);
        if (file_exists($imagePath))
        {
            @unlink($imagePath);
        }
        $category->delete();

        return response()->json([
            'status'=>200,
            'message'=>'Category Deleted Successfully.'
        ]);

    }


}
